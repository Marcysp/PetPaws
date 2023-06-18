<?php

namespace App\Http\Controllers;

use App\Models\Detail_grooming;
use App\Models\Detail_pesanan;
use App\Models\Grooming;
use App\Models\Penitipan;
use App\Models\Pesanan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class listOrderController extends Controller
{
    public function groomingList()
    {
        $grooming = Grooming::where('paid', 'unpaid')->get();

        return view('layouts.admin.pesananGrooming', compact('grooming'));
    }

    public function produkList(Request $request)
    {
        if ($request->has('search')) {
            $produk =  Produk::where('nama_produk','LIKE','%' .$request->search. '%')
                ->orWhere('deskripsi','LIKE','%' .$request->search. '%')
                ->where('paid', 'paid')
                ->get();
        } else {
            $pesanan = Pesanan::where('paid', 'paid')
            ->get();
        }
        $pesanan_id = $pesanan->pluck('id');
        $detail_pesanan = Detail_pesanan::whereIn('pesanan_id',$pesanan_id)->get();

        return view('layouts.admin.pesananProduk', compact(['pesanan','detail_pesanan']));
    }

    public function penitipanList()
    {
        $penitipan = Penitipan::where('paid', 'unpaid')->get();

        return view('layouts.admin.pesananPenitipan', compact('penitipan'));
    }
    public function userProdukList()
    {
        $pesanan = Pesanan::where('user_id',Auth::user()->id)
        ->where('status','checkout')
        ->orderByDesc('created_at')
        ->get();
        $pesanan_id = $pesanan->pluck('id');

        $detail_pesanan = Detail_pesanan::whereIn('pesanan_id',$pesanan_id)->get();

        return view('layouts.user.pesananproduk',compact(['detail_pesanan','pesanan']));
    }
    public function userGroomingList()
    {
        $grooming = Grooming::where('user_id',Auth::user()->id)
        ->where('status','checkout')
        ->orderByDesc('created_at')
        ->get();
        $grooming_id = $grooming->pluck('id');

        $detail_grooming = Detail_grooming::whereIn('grooming_id',$grooming_id)->get();

        return view('layouts.user.pesananGrooming',compact(['detail_grooming','grooming']));
    }
}
