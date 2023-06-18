<?php

namespace App\Http\Controllers;

use App\Models\Paket_penitipan;
use Illuminate\Http\Request;

class PenitipanController extends Controller
{
    public function index()
    {
        $paket_penitipan = Paket_penitipan::all();
        return view('layouts.user.penitipan',compact(['paket_penitipan']));
    }
    public function pesan()
    {
        // $paket = Paket_penitipan::find($id);
        return view('layouts.user.formPenitipan');
    }
}
