<?php

namespace App\Http\Controllers;

use App\Models\Paket_penitipan;
use App\Models\Penitipan;
use Dotenv\Validator;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Validator;


class PenitipanController extends Controller
{
    public function index()
    {
        $paket_penitipan = Paket_penitipan::all();
        return view('layouts.user.penitipan',compact(['paket_penitipan']));
    }
    public function pesan($id)
    {
        $paket = Paket_penitipan::find($id);
        return view('layouts.user.formPenitipan', compact(['paket']));
    }
    public function checkout(Request $request)
    {
        $validateData = $request->validate([
            'tanggal_masuk' => 'required',
            'tanggal_keluar' => 'required',
            'nama_hewan' => 'required|min:3',
            'nama_pemilik' => 'required|min:3',
            'riwayat_penyakit' => 'required',
            'alamat' => 'required|min:15',
            'no_hp' => 'required|regex:/^\d{10,13}$/',
            'hewan' => 'required',
        ]);

         // Ambil nilai tanggal masuk dan tanggal keluar dari input
        $tanggalMasuk = $request->input('tanggal_masuk');
        $tanggalKeluar = $request->input('tanggal_keluar');

        // Hitung perbedaan tanggal menggunakan Carbon
        $selisihHari = \Carbon\Carbon::parse($tanggalKeluar)->diffInDays(\Carbon\Carbon::parse($tanggalMasuk));

        // Ambil nilai harga paket dari model
        $paket = Paket_penitipan::find($request->input('paket_penitipan_id'));
        $hargaPaket = $paket->harga;
        // Hitung total biaya
        $totalBiaya = $selisihHari * $hargaPaket;

        $timestamp = time(); // Mendapatkan timestamp saat ini
        $randomNumber = mt_rand(1000, 9999); // Mendapatkan angka acak antara 1000 dan 9999

        $transactionId = $timestamp . $randomNumber; // Menggabungkan timestamp dan angka acak

        $penitipan = new Penitipan;
        $penitipan->id = $transactionId;
        $penitipan->user_id = Auth::user()->id;
        $penitipan->paket_penitipan_id = $request->paket_penitipan_id;
        $penitipan->tanggal_masuk = $request->tanggal_masuk;
        $penitipan->tanggal_keluar = $request->tanggal_keluar;
        $penitipan->nama_hewan = $request->nama_hewan;
        $penitipan->nama_pemilik = $request->nama_pemilik;
        $penitipan->riwayat_penyakit = $request->riwayat_penyakit;
        $penitipan->alamat = $request->alamat;
        $penitipan->no_hp = $request->no_hp;
        $penitipan->hewan = $request->hewan;
        $penitipan->total = $totalBiaya;

        $penitipan->tanggal_order = now();

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
                'order_id' => $penitipan->id,
                'gross_amount' => $totalBiaya,
            ),
            'customer_details' => array(
                'first_name' => $request->nama,
                'email' => Auth::user()->email,
                'phone' => $request->no_hp,
            ),
        );
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $penitipan->token = $snapToken;
        $penitipan->save();

        return redirect()->route('pesanan-penitipan');
    }
}
