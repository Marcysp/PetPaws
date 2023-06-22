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
    public function groomingList(Request $request)
    {
        if ($request->has('search')) {
            $grooming =  Grooming::where('id','LIKE','%' .$request->search. '%')
                ->where('paid', 'paid')
                ->get();
        } else {
            $grooming = Grooming::where('paid', 'paid')
            ->get();
        }
        $grooming_id = $grooming->pluck('id');
        $detail_grooming = Detail_grooming::whereIn('grooming_id',$grooming_id)->get();

        return view('layouts.admin.pesananGrooming', compact(['grooming','detail_grooming']));
    }

    public function produkList(Request $request)
    {
        if ($request->has('search')) {
            $pesanan =  Pesanan::where('id','LIKE','%' .$request->search. '%')
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

    public function penitipanList(Request $request)
    {
        $penitipan = Penitipan::where('paid', 'paid')->get();

        return view('layouts.admin.pesananPenitipan', compact('penitipan'));
    }
    public function userProdukList()
    {
        $pesanan = Pesanan::where('user_id',Auth::user()->id)
        ->where('status','checkout')
        ->orderByDesc('created_at')
        ->take(20)
        ->get();
        $pesanan_id = $pesanan->pluck('id');

        $detail_pesanan = Detail_pesanan::whereIn('pesanan_id',$pesanan_id)->get();
        $trashProduk = collect();

        foreach ($detail_pesanan as $detail) {
            if ($detail->produk->trashed()) {
                $trashProduk->push($detail->produk);

            }
        }

        return view('layouts.user.pesananproduk',compact(['detail_pesanan','pesanan','trashProduk']));
    }
    public function userGroomingList()
    {
        $grooming = Grooming::where('user_id',Auth::user()->id)
        ->where('status','checkout')
        ->orderByDesc('created_at')
        ->take(20)
        ->get();
        $grooming_id = $grooming->pluck('id');

        $detail_grooming = Detail_grooming::whereIn('grooming_id',$grooming_id)->get();
        $trashPaket_grooimg = collect();

        foreach ($detail_grooming as $detail) {
            if ($detail->paket_grooming->trashed()) {
                $trashPaket_grooimg->push($detail->paket_grooming);

            }
        }

        return view('layouts.user.pesananGrooming',compact(['detail_grooming','grooming','trashPaket_grooimg']));
    }
    public function userPenitipanList()
    {
        $penitipan = Penitipan::where('user_id',Auth::user()->id)
        ->orderByDesc('created_at')
        ->take(20)
        ->get();

        return view('layouts.user.pesananPenitipan',compact('penitipan'));
    }
}
