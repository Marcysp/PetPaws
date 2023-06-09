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
        $brand = Produk_brand::all();
        $kategori = Produk_kategori::all();
        $hewan = Kategori_hewan::all();

        if ($request->has('search')) {
            if (auth()->user()->is_admin == 0) {
                $produk =  Produk::where('nama_produk','LIKE','%' .$request->search. '%')
                ->orWhere('deskripsi','LIKE','%' .$request->search. '%')
                ->get();
            }else {
                $produk =  Produk::where('nama_produk','LIKE','%' .$request->search. '%')
                ->orWhere('deskripsi','LIKE','%' .$request->search. '%')
                ->paginate(20);
            }
        } else {
            if (auth()->user()->is_admin == 0) {
                $produk =  Produk::all();
            }else {
                $produk =  Produk::paginate(20);
            }
        }

        if (auth()->user()->is_admin == 0) {
            return view('layouts.user.produk',compact(['produk','brand','kategori','hewan']));
        }else {
            $title = 'Delete User!';
            $text = "Are you sure you want to delete?";
            confirmDelete($title, $text);

            return view('layouts.admin.produk',compact(['produk']));
        }
    }
    public function create(){
        $hewan = Kategori_hewan::all();
        $kategori = Produk_kategori::all();
        $brand = Produk_brand::all();
        return view('layouts.admin.tambahProduk',compact(['kategori','brand','hewan']));
    }
    public function store(Request $request){
        // dd($request->all());
        $validateData = $request->validate([
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
        return redirect('/produk')->with('toast_success', 'Data berhasil ditambahkan');
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
        if ($request->hasFile(('img'))) {
            $request->file('img')->move('assets/img/imgData/',$request->file('img')->getClientOriginalName());
            $produk->img = $request->file('img')->getClientOriginalName();
            $produk->save();
        }
        return redirect('/produk')->with('toast_success', 'Data berhasil di update');
    }
    public function destroy($id)
    {
        $produk = Produk::find($id);

        if ($produk) {
            $produk->delete();
            // Tambahkan logika atau pesan sukses lainnya jika diperlukan
        }
        return redirect('/produk')->with('toast_success', 'Produk berhasil dipindah ke sampah');;

    }
}
