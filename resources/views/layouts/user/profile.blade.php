@extends('layouts.user.main')

@section('content')
<div class="flex bg-slate-200 w-full min-h-[90vh]">
    <div class="w-1/5 mt-[74px] px-5">
        <div>
            <ul>
                <li><a href="/pesanan/produk">Produk</a></li>
                <li><a href="#">Grooming</a></li>
                <li><a href="#">Penitipan</a></li>
            </ul>
        </div>
        <div class="bottom-0">
            logout
        </div>
    </div>
    <div class="flex-1 w-32 ">
        <div class="float-left w-full bg-white mt-[74px] left-0">
            @include('layouts.user.subanavbar')
        </div>
        <div class="mt-14 p-1 float-right bg-slate-200 w-full">
            @yield('pesanan')
        </div>
    </div>
</div>
@endsection

{{-- <div class="w-full flex">
    <div class="w-full float-right">
        <div class="float-left w-full bg-white mt-[74px] left-0">
            @include('layouts.user.subanavbar')
        </div>
        <div class="my-5 mt-14 p-1 float-right bg-slate-200 min-h-screen w-full">
            @yield('pesanan')
        </div>
    </div>
    <div class="mt-[76px] min-h-screen w-1/5 ml-7 px-5 z-[1] float-left bg-slate-200">

    </div>
</div> --}}
