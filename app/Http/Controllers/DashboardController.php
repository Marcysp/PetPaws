<?php

namespace App\Http\Controllers;

use App\Models\Grooming;
use App\Models\Penitipan;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // batasi hanya bulan ini yang tampil
        $startDate = Carbon::now()->startOfMonth();
        $endDate = Carbon::now()->endOfMonth();

        // count jumlah pesanan
        $pesanan = Pesanan::where('paid','paid')->whereBetween('created_at', [$startDate, $endDate])->count();
        $grooming = Grooming::where('paid','paid')->whereBetween('created_at', [$startDate, $endDate])->count();
        $penitipan = Penitipan::where('paid','paid')->whereBetween('created_at', [$startDate, $endDate])->count();

        $count = $pesanan+$grooming+$penitipan;

        // total pemasukan
        $penjualan_pesanan = Pesanan::where('paid','paid')->whereBetween('created_at', [$startDate, $endDate])->get();
        $penjualan_grooming = Grooming::where('paid','paid')->whereBetween('created_at', [$startDate, $endDate])->get();
        $penjualan_penitipan = Penitipan::where('paid','paid')->whereBetween('created_at', [$startDate, $endDate])->get();
        $totalPenjualan = 0;

        foreach ($penjualan_pesanan as $p) {
            $totalPenjualan += $p->total;
        }
        foreach ($penjualan_grooming as $g) {
            $totalPenjualan += $g->total;
        }
        foreach ($penjualan_penitipan as $pn) {
            $totalPenjualan += $pn->total;
        }

        // jumlah user
        $user = User::where('is_admin','0')->count();
        return view('layouts.admin.dashboard',compact(['count','totalPenjualan','user']));
    }
}
