<?php

namespace App\Http\Controllers;

use App\Models\Detail_grooming;
use App\Models\Grooming;
use App\Models\Paket_grooming;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroomingController extends Controller
{
    public function index()
    {
        $paket_grooming = Paket_grooming::all();
        return view('layouts.user.grooming',compact(['paket_grooming']));
    }
    public function pesan(Request $request,$id)
    {
        $timestamp = time(); // Mendapatkan timestamp saat ini
        $randomNumber = mt_rand(1000, 9999); // Mendapatkan angka acak antara 1000 dan 9999

        $transactionId = $timestamp . $randomNumber; // Menggabungkan timestamp dan angka acak

        $paket_grooming = Paket_grooming::find($id);
        $tanggal = Carbon::now();

        // cek validasi
        $cek_grooming = Grooming::where('user_id',Auth::user()->id)->where('status','list')->first();
        if (empty($cek_grooming))
        {
            // simpan ke database grooming
            $grooming = new Grooming;
            $grooming->id = $transactionId;
            $grooming->user_id = Auth::user()->id;
            $grooming->tanggal_grooming = $tanggal;
            $grooming->status = 'list';
            $grooming->dilayani = 'proses';
            $grooming->total = 0;
            $grooming->save();
        }

        // simpan ke grooming detail
        $grooming_baru = Grooming::where('user_id',Auth::user()->id)->where('status','list')->first();

        // cek grooming detail apakah barang sudah di inputkan
        $cek_detail_grooming = Detail_grooming::where('paket_grooming_id',$paket_grooming->id)->where('grooming_id',$grooming_baru->id)->first();
        if (empty($cek_detail_grooming))
        {
            $detail_grooming = new Detail_grooming;
            $detail_grooming->paket_grooming_id = $id;
            $detail_grooming->grooming_id = $grooming_baru->id;
            $detail_grooming->save();
        }
        // // total
        $grooming = Grooming::where('user_id',Auth::user()->id)->where('status','list')->first();
        $grooming->total = $grooming->total+ $paket_grooming->harga;
        $grooming->update();
        return redirect('grooming');
    }
    public function keranjang()
    {
        $grooming = Grooming::where('user_id',Auth::user()->id)->where('status','list')->first();

        if (!empty($grooming)) {
            $detail_grooming = Detail_grooming::where('grooming_id',$grooming->id)->get();
            return view('layouts.user.keranjangGrooming', compact('grooming','detail_grooming'));
        }
        return view('layouts.user.keranjangGrooming', compact('grooming'));

    }
    public function delete($id)
    {
        $detail_grooming = Detail_grooming::where('id',$id)->first();

        $grooming = Grooming::where('id',$detail_grooming->grooming_id)->first();
        $grooming->total = $grooming->total-$detail_grooming->paket_grooming->harga;
        $grooming->update();

        $detail_grooming->delete();

        return redirect('/list/grooming');
    }


    public function konfirmasi()
    {
        $grooming =  Grooming::where('user_id',Auth::user()->id)->where('status',"list")->first();
        $grooming_id = $grooming->id;
        $grooming->status = 'checkout';
        $grooming->tanggal_grooming = now();
        $grooming->update();

        //
        return redirect('/list/grooming');
    }
    public function dilayani()
    {
        $grooming =  Grooming::where('user_id',Auth::user()->id)->where('dilayani',"proses")->first();
        $grooming->dilayani = 'terlayani';
        $grooming->update();

        return redirect('/keranjang');
    }
    public function checkout(Request $request)
    {
        $grooming =  Grooming::where('user_id',Auth::user()->id)->where('status',"list")->first();
        $grooming_id = $grooming->id;

        $grooming->tanggal_grooming = now();

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
                'order_id' => $grooming->id,
                'gross_amount' => $grooming->total,
            ),
            'customer_details' => array(
                'name' => $request->nama,
                'email' => Auth::user()->email,
                'phone' => $request->no_hp,
            ),
        );
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $grooming->status = 'checkout';
        $grooming->token = $snapToken;
        $grooming->update();

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
        $pesanan =  Pesanan::where('user_id',Auth::user()->id)->where('paid',"unpaid")->get();

        return view('layouts.user.checkout',compact('pesanan'));
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
