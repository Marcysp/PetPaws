<?php

namespace App\Http\Controllers;

use App\Models\Kategori_hewan;
use App\Models\Produk_kategori;
use Illuminate\Http\Request;

class Produk_kategoriController extends Controller
{
    public function index(){
        $hewan = Kategori_hewan::all();
        $kategori =  Produk_kategori::all();
        return view('layouts.admin.kategori',compact(['kategori','hewan']));
    }
    public function store(Request $request){
        // dd($request->all());
        Produk_kategori::create($request->except(['token','submit']));
        return redirect('/kategori');
    }
    public function edit($id)
    {
        $kategori = Produk_kategori::find($id);
        return view('layouts.admin.editKategori',compact(['kategori']));
    }
    public function update($id, Request $request)
    {
        $kategori = Produk_kategori::find($id);
        $kategori->update($request->except(['token','submit']));
        return redirect('/kategori');
    }
    public function destroy($id)
    {
        $kategori = Produk_kategori::find($id);
        $kategori->delete();
        return redirect('/kategori')->with('succes','Data Berhasil Dihapus');

    }
}
