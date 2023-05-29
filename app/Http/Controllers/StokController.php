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

        return redirect()->back()->with('toast_success', 'Stok berhasil di perbarui');
    }
}
