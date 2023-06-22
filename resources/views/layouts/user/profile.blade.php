@extends('layouts.user.main')

@section('content')
<div class="flex bg-slate-200 w-full min-h-[90vh]">
    <div class="w-1/5 mt-[74px] px-5">
        <div class="mx-5 my-8 text-slate-800">
            <div class="py-1 border-b-[1px] border-slate-600 ">
                <p class="block px-4 py-2 text-gray-700 text-2xl">
                    <i class='bx bxs-user-circle'></i>
                    <span class="ml-2">{{ Auth::user()->name }}</span>
                </p>
            </div>
            <div class="mt-6 text-gray-500">
                <ul>
                    <a href="/pesanan/produk" class="hover:text-slate-800 {{ request()->is('pesanan/produk') ? 'current' : '' }}"><li class="px-3 py-2 hover:bg-slate-300">Produk</li></a>
                    <a href="/pesanan/grooming" class="hover:text-slate-800"><li class="px-3 py-2 hover:bg-slate-300 {{ request()->is('pesanan/grooming') ? 'current' : '' }}">Grooming</li></a>
                    <a href="/pesanan/penitipan" class="hover:text-slate-800"><li class="px-3 py-2 hover:bg-slate-300 {{ request()->is('pesanan/penitipan') ? 'current' : '' }}">Penitipan</li></a>
                </ul>
            </div>
        </div>
    </div>
    <div class="flex-1 w-32 ">
        @yield('pesanan')
    </div>
</div>
@endsection
