<?php

namespace App\Http\Controllers;

use App\Models\Produk_brand;
use Illuminate\Http\Request;

class Produk_brandController extends Controller
{
    public function index(){
        $brand =  Produk_brand::all();
        return view('layouts.admin.brand',compact(['brand']));
    }
    public function store(Request $request){
        // dd($request->all());
        Produk_brand::create($request->except(['token','submit']));
        return redirect('/brand');
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
        return redirect('/brand');
    }
    public function destroy($id)
    {
        $brand = Produk_brand::find($id);
        $brand->delete();
        return redirect('/brand')->with('succes','Data Berhasil Dihapus');

    }
}
