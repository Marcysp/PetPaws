<?php

namespace App\Http\Controllers;

use App\Models\Kategori_hewan;
use App\Models\Produk;
use App\Models\Produk_brand;
use App\Models\Produk_kategori;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(Request $request){
        if ($request->has('search')) {
            // $produk =  Produk::where(['nama_produk','LIKE','%' .$request->search]);
            $produk =  Produk::where('nama_produk','LIKE','%' .$request->search. '%')->paginate(5);
        } else {
            $produk =  Produk::paginate(5);
        }


        return view('layouts.admin.produk',compact(['produk']));
    }
    public function create(){
        $hewan = Kategori_hewan::all();
        $kategori = Produk_kategori::all();
        $brand = Produk_brand::all();
        return view('layouts.admin.tambahProduk',compact(['kategori','brand','hewan']));
    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'produk_kategori_id' => 'required',
            'produk_brand_id' => 'required',
            'nama_produk' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'img' => 'required|mimes:jpeg,jpg,png'
        ],[
            'produk_kategori_id.required' => 'Pilih kategori yang sesuai',
            'produk_brand_id.required' => 'Pilih brand produk',
            'nama_produk.required' => 'Nama produk wajib diisi',
            'harga.required' => 'Harga produk wajib diisi',
            'deskripsi.required' => 'Deskripsi produk wajib diisi',
            'img.required' => 'Silahkan masukkan foto',
            'img.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG dan PNG'
        ]);
        $produk = Produk::create($request->except(['token','submit']));
        if ($request->hasFile(('img'))) {
            $request->file('img')->move('assets/img/imgData/',$request->file('img')->getClientOriginalName());
            $produk->img = $request->file('img')->getClientOriginalName();
            $produk->save();
        }
        return redirect('/produk');
    }
    public function edit($id)
    {
        $hewan = Kategori_hewan::all();
        $kategori = Produk_kategori::all();
        $brand = Produk_brand::all();
        $produk = Produk::find($id);
        return view('layouts.admin.editProduk',compact(['produk','kategori','brand','hewan']));
    }
    public function update($id, Request $request)
    {
        $produk = Produk::find($id);
        $produk->update($request->except(['token','submit']));
        return redirect('/produk');
    }
    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect('/produk');

    }
    public function stok(){
        $produk =  Produk::all();
        return view('layouts.admin.stok',compact(['produk']));
    }
}
