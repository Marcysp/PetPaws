<?php

namespace App\Http\Controllers;

use App\Models\Detail_pesanan;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::where('user_id',Auth::user()->id)
        ->where('status','checkout')
        ->orderByDesc('created_at')
        ->get();
        $pesanan_id = $pesanan->pluck('id');

        $detail_pesanan = Detail_pesanan::whereIn('pesanan_id',$pesanan_id)->get();

        return view('layouts.user.pesananAll',compact(['detail_pesanan','pesanan']));
    }
}
