<?php

namespace App\Http\Controllers;

use App\Models\Detail_pesanan;
use App\Models\Pesanan;
use App\Models\Produk;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesanController extends Controller
{
    public function index($id)
    {
        $produk = Produk::find($id);
        return view('layouts.user.detailProduk',compact(['produk']));
    }

    public function pesan(Request $request,$id)
    {
        $produk = Produk::find($id);
        $tanggal = Carbon::now();

        // validasi apakah melebihi request
        if ($request->qty > $produk->stok) {
            return redirect('pesan/',$id);
        }

        // cek validasi
        $cek_pesanan = Pesanan::where('user_id',Auth::user()->id)->where('status','keranjang')->first();
        if (empty($cek_pesanan))
        {
            $timestamp = time(); // Mendapatkan timestamp saat ini
            $randomNumber = mt_rand(1000, 9999); // Mendapatkan angka acak antara 1000 dan 9999

            $transactionId = $timestamp . $randomNumber; // Menggabungkan timestamp dan angka acak

            // simpan ke database pesanan
            $pesanan = new Pesanan;
            $pesanan->id = $transactionId;
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal_pesanan = $tanggal;
            $pesanan->status = 'keranjang';
            $pesanan->dilayani = 'proses';
            $pesanan->total = 0;
            $pesanan->save();
        }



        // simpan ke pesanan detail
        $pesanan_baru = Pesanan::where('user_id',Auth::user()->id)->where('status','keranjang')->first();

        // cek pesanan detail apakah barang sudah di inputkan
        $cek_detail_pesanan = Detail_pesanan::where('produk_id',$produk->id)->where('pesanan_id',$pesanan_baru->id)->first();
        if (empty($cek_detail_pesanan))
        {
            $detail_pesanan = new Detail_pesanan;
            $detail_pesanan->produk_id = $id;
            $detail_pesanan->pesanan_id = $pesanan_baru->id;
            $detail_pesanan->qty = $request->qty;
            $detail_pesanan->subtotal = $produk->harga*$request->qty;
            $detail_pesanan->save();
        }else{
            $detail_pesanan = Detail_pesanan::where('produk_id',$produk->id)->where('pesanan_id',$pesanan_baru->id)->first();
            $detail_pesanan->qty = $detail_pesanan->qty+$request->qty;

            // harga sekarang
            $detail_pesanan_update_harga = $produk->harga*$request->qty;
            $detail_pesanan->subtotal = $detail_pesanan->subtotal+$detail_pesanan_update_harga;
            $detail_pesanan->update();
        }

        // total
        $pesanan = Pesanan::where('user_id',Auth::user()->id)->where('status','keranjang')->first();
        $pesanan->total = $pesanan->total+ $produk->harga*$request->qty;
        $pesanan->update();

        return redirect('produk');
    }
    public function keranjang()
    {
        $pesanan = Pesanan::where('user_id',Auth::user()->id)->where('status','keranjang')->first();

        if (!empty($pesanan)) {
            $detail_pesanan = Detail_pesanan::where('pesanan_id',$pesanan->id)->get();
            return view('layouts.user.keranjang', compact('pesanan','detail_pesanan'));
        }
        return view('layouts.user.keranjang', compact('pesanan'));

    }

    public function delete($id)
    {
        $detail_pesanan = Detail_pesanan::where('id',$id)->first();

        $pesanan = Pesanan::where('id',$detail_pesanan->pesanan_id)->first();
        $pesanan->total = $pesanan->total-$detail_pesanan->subtotal;
        $pesanan->update();

        $detail_pesanan->delete();

        return redirect('/keranjang');
    }

    public function dilayani()
    {
        $pesanan =  Pesanan::where('user_id',Auth::user()->id)->where('dilayani',"proses")->first();
        $pesanan->dilayani = 'terlayani';
        $pesanan->update();

        return redirect('/keranjang');
    }
    public function checkout(Request $request)
    {
        $pesanan =  Pesanan::where('user_id',Auth::user()->id)->where('status',"keranjang")->first();
        $pesanan_id = $pesanan->id;
        $pesanan->alamat = $request->alamat;
        $pesanan->no_hp = $request->no_hp;
        $pesanan->tanggal_pesanan = now();
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $pesanan->id,
                'gross_amount' => $pesanan->total,
            ),
            'customer_details' => array(
                'name' => $request->nama,
                'email' => Auth::user()->email,
                'phone' => $request->no_hp,
            ),
        );
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $pesanan->status = 'checkout';
        $pesanan->token = $snapToken;
        $pesanan->update();

        $detail_pesanan = Detail_pesanan::where('pesanan_id',$pesanan_id)->get();
        foreach($detail_pesanan as $dp){
            $produk = Produk::where('id',$dp->produk_id)->first();
            $produk->stok = $produk->stok-$dp->qty;
            $produk->update();
        }

        return redirect()->route('pay');
    }
    public function pay()
    {
        $pesanan = Pesanan::where('user_id',Auth::user()->id)->where('paid','unpaid')->get();
        $pesanan_id = $pesanan->pluck('id');

        $detail_pesanan = Detail_pesanan::whereIn('pesanan_id',$pesanan_id)->get();

        return view('layouts.user.checkout',compact(['detail_pesanan','pesanan']));
    }
    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("SHA512",$request->order_id.$request->status_code.$request->gross_amount.$serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture') {
                $pesanan = Pesanan::find($request->order_id);
                $pesanan->update(['paid' =>'paid']);
            }
        }
    }
    public function histori()
    {
        $pesanan =  Pesanan::where('user_id',Auth::user()->id)->where('paid',"paid")->get();
        return view ('layouts.user.historiProduk',compact(['pesanan']));
    }
}
