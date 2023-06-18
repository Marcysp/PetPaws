@extends('layouts.user.main')
@section('title') Penitipan @endsection
@section('content')
<div class="mt-[80px]">
    <div class="text-5xl text-center mb-7 font-semibold">
        Daftar Paket Penitipan
    </div>
    <div class="my-2 mx-4 bg-white p-4 px-14">
            <div class="bg-slate-200 px-6 py-4 font-semibold text-3xl text-pink-500">
                Kucing
            </div>
            <table class="text-left text-gray-500">
                <tbody >
                    @foreach($paket_penitipan as $p)
                    @if ($p->hewan == 'kucing')
                    <div class="flex">
                        <div class="my-4 w-3/5">
                            <div class="text-xl font-bold text-slate-900">{{$p->jenis_penitipan}}</div>
                            <div>{{$p->deskripsi_layanan}}</div>
                        </div>
                        <div class="my-8 w-1/5 text-center text-slate-900 font-semibold">
                            <div>
                                @currency($p->harga)
                            </div>
                        </div>
                        <div class="my-4">
                            <form action="/service/penitipan/{{$p->id}}" method="post">
                                @csrf
                                <button type="submit" class="items-center justify-center rounded-md border border-transparent bg-pink-500 px-8 py-3 text-base font-medium text-white hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">Tambah layanan</button>
                            </form>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </tbody>
            </table>
            <div class="bg-slate-200 px-6 py-4 font-semibold text-3xl text-teal-500 mt-8">
                Anjing <span class="font-bold opacity-60"> < 10kg </span>
            </div>
            <table class="text-left text-gray-500">
                <tbody >
                    @foreach($paket_penitipan as $p)
                    @if ($p->hewan == 'anjing kecil')
                    <div class="flex">
                        <div class="my-4 w-3/5">
                            <div class="text-xl font-bold text-slate-900">{{$p->jenis_penitipan}}</div>
                            <div>{{$p->deskripsi_layanan}}</div>
                        </div>
                        <div class="my-8 w-1/5 text-center text-slate-900 font-semibold">
                            <div>
                                @currency($p->harga)
                            </div>
                        </div>
                        <div class="my-4">
                            <form action="/service/penitipan/{{$p->id}}" method="post">
                                @csrf
                                <button type="submit" class="items-center justify-center rounded-md border border-transparent bg-pink-500 px-8 py-3 text-base font-medium text-white hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">Tambah layanan</button>
                            </form>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </tbody>
            </table>
            <div class="bg-slate-200 px-6 py-4 font-semibold text-3xl text-blue-500 mt-8">
                Anjing <span class="font-bold opacity-60"> > 10kg </span>
            </div>
            <table class="text-left text-gray-500">
                <tbody >
                    @foreach($paket_penitipan as $p)
                    @if ($p->hewan == 'anjing besar')
                    <div class="flex">
                        <div class="my-4 w-3/5">
                            <div class="text-xl font-bold text-slate-900">{{$p->jenis_penitipan}}</div>
                            <div>{{$p->deskripsi_layanan}}</div>
                        </div>
                        <div class="my-8 w-1/5 text-center text-slate-900 font-semibold">
                            <div>
                                @currency($p->harga)
                            </div>
                        </div>
                        <div class="my-4">
                            <form action="/service/penitipan/{{$p->id}}" method="post">
                                @csrf
                                <button type="submit" class="items-center justify-center rounded-md border border-transparent bg-pink-500 px-8 py-3 text-base font-medium text-white hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">Book now</button>
                            </form>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
@endsection
