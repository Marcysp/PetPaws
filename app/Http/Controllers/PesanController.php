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
            // simpan ke database pesanan
            $pesanan = new Pesanan;
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

    public function konfirmasi()
    {
        $pesanan =  Pesanan::where('user_id',Auth::user()->id)->where('status',"keranjang")->first();
        $pesanan_id = $pesanan->id;
        $pesanan->status = 'checkout';
        $pesanan->tanggal_pesanan = now();
        $pesanan->update();

        $detail_pesanan = Detail_pesanan::where('pesanan_id',$pesanan_id)->get();
        foreach($detail_pesanan as $dp){
            $produk = Produk::where('id',$dp->produk_id)->first();
            $produk->stok = $produk->stok-$dp->qty;
            $produk->update();
        }

        return redirect('/keranjang');
    }
    public function dilayani()
    {
        $pesanan =  Pesanan::where('user_id',Auth::user()->id)->where('dilayani',"proses")->first();
        $pesanan->dilayani = 'terlayani';
        $pesanan->tanggal_pesanan = now();
        $pesanan->update();

        return redirect('/keranjang');
    }
}
