<?php

namespace App\Http\Controllers;

use App\Models\Kategori_hewan;
use Illuminate\Http\Request;

class kategoriHewanController extends Controller
{
    public function store(Request $request){
        // dd($request->all());
        Kategori_hewan::create($request->except(['token','submit']));
        return redirect('/kategori');
    }
    public function edit($id)
    {
        $hewan = Kategori_hewan::find($id);
        return view('layouts.admin.kategori',compact(['hewan']));
    }
    public function update($id, Request $request)
    {
        $hewan = Kategori_hewan::find($id);
        $hewan->update($request->except(['token','submit']));
        return redirect('/kategori');
    }
    public function destroy($id)
    {
        $hewan = Kategori_hewan::find($id);
        $hewan->delete();
        return redirect('/kategori')->with('deleteHewan','Data Berhasil Dihapus');

    }
}
