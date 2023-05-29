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
        $paket_grooming = Paket_grooming::find($id);
        $tanggal = Carbon::now();

        // cek validasi
        $cek_grooming = Grooming::where('user_id',Auth::user()->id)->where('status','list')->first();
        if (empty($cek_grooming))
        {
            // simpan ke database pesanan
            $grooming = new Grooming;
            $grooming->user_id = Auth::user()->id;
            $grooming->tanggal_grooming = $tanggal;
            $grooming->status = 'list';
            $grooming->dilayani = 'proses';
            $grooming->total = 0;
            $grooming->save();
        }

        // simpan ke pesanan detail
        $pesanan_baru = Grooming::where('user_id',Auth::user()->id)->where('status','list')->first();

        // cek pesanan detail apakah barang sudah di inputkan
        $cek_detail_grooming = Detail_grooming::where('paket_grooming_id',$paket_grooming->id)->where('grooming_id',$pesanan_baru->id)->first();
        if (empty($cek_detail_grooming))
        {
            $detail_grooming = new Detail_grooming;
            $detail_grooming->paket_grooming_id = $id;
            $detail_grooming->grooming_id = $pesanan_baru->id;
            $detail_grooming->save();
        }
        return redirect('paket_grooming');
    }
}
