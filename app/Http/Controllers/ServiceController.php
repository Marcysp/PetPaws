<?php

namespace App\Http\Controllers;

use App\Models\Paket_grooming;
use App\Models\Paket_penitipan;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $paket_grooming =  Paket_grooming::all();
        $paket_penitipan =  Paket_penitipan::all();
        return view('layouts.admin.service',compact(['paket_grooming','paket_penitipan']));
    }
    public function storeGrooming(Request $request){
        // dd($request->all());
        Paket_grooming::create($request->except(['token','submit']));
        return redirect('/service-paket');
    }
    public function updateGrooming($id, Request $request)
    {
        $paket_grooming = Paket_grooming::find($id);
        $paket_grooming->update($request->except(['token','submit']));
        return redirect('/service-paket');
    }
    public function destroyGrooming($id)
    {
        $paket_grooming = Paket_grooming::find($id);
        $paket_grooming->delete();
        return redirect('/service-paket')->with('succes','Data Berhasil Dihapus');

    }
    public function storePenitipan(Request $request){
        // dd($request->all());
        Paket_penitipan::create($request->except(['token','submit']));
        return redirect('/kategori');
    } 
    public function updatePenitipan($id, Request $request)
    {
        $paket_penitipan = Paket_penitipan::find($id);
        $paket_penitipan->update($request->except(['token','submit']));
        return redirect('/service-paket');
    }
    public function destroyPenitipan($id)
    {
        $paket_penitipan = Paket_penitipan::find($id);
        $paket_penitipan->delete();
        return redirect('/service-paket')->with('succes','Data Berhasil Dihapus');

    }
}
