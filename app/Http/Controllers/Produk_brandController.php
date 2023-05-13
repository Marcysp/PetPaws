<?php

namespace App\Http\Controllers;

use App\Models\Produk_brand;
use Illuminate\Http\Request;

class Produk_brandController extends Controller
{
    public function store(Request $request){
        // dd($request->all());
        Produk_brand::create($request->except(['token','submit']));
        return redirect('/kategori');
    }
    public function edit($id)
    {
        $brand = Produk_brand::find($id);
        return view('layouts.admin.editBrand',compact(['brand']));
    }
    public function update($id, Request $request)
    {
        $brand = Produk_brand::find($id);
        $brand->update($request->except(['token','submit']));
        return redirect('/kategori');
    }
    public function destroy($id)
    {
        $brand = Produk_brand::find($id);
        $brand->delete();
        return redirect('/kategori')->with('succes','Data Berhasil Dihapus');

    }
}
