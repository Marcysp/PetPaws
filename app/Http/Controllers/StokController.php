<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class StokController extends Controller
{
    public function index(){
        $produk =  Produk::all();
        return view('layouts.admin.stok',compact(['produk']));
    }
    public function updateStok(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->stok = $request->input('stok');
        $produk->save();

        return redirect()->back()->with('success', 'Stok produk berhasil diperbarui.');
    }



    // public function pesan(Request $request,$id)
    // {
    //     $produk = Produk::find($id);
    //     $tanggal = Carbon::now();
    //     // simpan ke database pesanan

    //     $pesanan = new Pesanan;
    //     $pesanan->user_id = Auth::user()->id;
    //     $pesanan->tanggal_pesanan = $tanggal;
    //     $pesanan->status = 'keranjang';
    //     $pesanan->dilayani = 'proses';
    //     $pesanan->total = $produk->harga*$request->qty;
    //     $pesanan->save();

    //     // simpan ke pesanan detail
    //     $pesanan_baru = Pesanan::where('user_id',Auth::user()->id)->where('status','keranjang')->first();

    //     $detail_pesanan = new Detail_pesanan;
    //     $detail_pesanan->produk_id = $id;
    //     $detail_pesanan->pesanan_id = $pesanan_baru->id;
    //     $detail_pesanan->qty = $request->qty;
    //     $detail_pesanan->subtotal = $produk->harga*$request->qty;
    //     $detail_pesanan->save();
    // }
    // public function update($id, Request $request)
    // {
    //     $produk = Produk::find($id);
    //     $produk->update($request->except(['token','submit']));
    //     if ($request->hasFile(('img'))) {
    //         $request->file('img')->move('assets/img/imgData/',$request->file('img')->getClientOriginalName());
    //         $produk->img = $request->file('img')->getClientOriginalName();
    //         $produk->save();
    //     }
    //     return redirect('/produk');
    // }
}
