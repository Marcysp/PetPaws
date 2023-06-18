@extends('layouts.user.main')
@section('title') produk @endsection
@section('content')
<div class="fixed bg-white top-[58px] w-full px-4 shadow-md flex justify-center items-center mr-3 h-12">
    <div class="w-full justify-center">
        <div class="items-center justify-between relative mx-auto">
            <div class="flex items-center px-1 mx-3">
                <nav class=" rounded-md w-full right-0 top-full lg:static lg:block lg:bg-transparent lg:max-w-full lg:shadow-none bg-white">
                    <ul class="flex justify-end">
                        @if (!empty($detai_grooming))
                        <li class="group">
                            <p class="text-base text-black py-2 mx-4 flex">Paket Yang ditambahkan sebanyak
                                <span class="inline-flex items-center rounded-md bg-red-500 px-2 py-1 text-sm font-semibold text-white mx-4">{{$detai_grooming}}</span>
                            </p>
                        </li>
                        @else
                        <li class="group">
                            <p class="text-base text-black py-2 mx-4 flex">Paket Yang ditambahkan sebanyak <span class="mx-4">0</span></p>
                        </li>
                        @endif
                        <li class="group">
                            <a href="/list/grooming" onclick="filterContent('unpaid')" class="text-base text-black py-2 mx-4 flex group-hover:text-purple-700">Checkout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="mt-[117px]">
    <div class="text-5xl text-center mb-7 font-semibold">
        Daftar Paket Grooming
    </div>
    <div class="my-2 mx-4 bg-white p-4 px-14">
            <div class="bg-slate-200 px-6 py-4 font-semibold text-3xl text-pink-500">
                Kucing
            </div>
            <table class="text-left text-gray-500">
                <tbody >
                    @foreach($paket_grooming as $pg)
                    @if ($pg->hewan == 'kucing')
                    <div class="flex">
                        <div class="my-4 w-3/5">
                            <div class="text-xl font-bold text-slate-900">{{$pg->jenis_grooming}}</div>
                            <div>{{$pg->deskripsi_penanganan}}</div>
                        </div>
                        <div class="my-8 w-1/5 text-center text-slate-900 font-semibold">
                            <div>
                                @currency($pg->harga)
                            </div>
                        </div>
                        <div class="my-4">
                            <form action="/service/grooming/{{$pg->id}}" method="post">
                                @csrf
                                <button type="submit" class="items-center justify-center rounded-md border border-transparent bg-pink-500 px-8 py-3 text-base font-medium text-white hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">Tambah layanan</button>
                            </form>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </tbody>
            </table>
            <div class="bg-slate-200 px-6 py-4 font-semibold text-3xl text-cyan-500 mt-10">
                Anjing <span class="font-bold opacity-60"> < 10kg </span>
            </div>
            <table class="text-left text-gray-500">
                <tbody >
                    @foreach($paket_grooming as $pg)
                    @if ($pg->hewan == 'anjingKecil')
                    <div class="flex">
                        <div class="my-4 w-3/5">
                            <div class="text-xl font-bold text-slate-900">{{$pg->jenis_grooming}}</div>
                            <div>{{$pg->deskripsi_penanganan}}</div>
                        </div>
                        <div class="my-8 w-1/5 text-center text-slate-900 font-semibold">
                            <div>
                                @currency($pg->harga)
                            </div>
                        </div>
                        <div class="my-4">
                            <form action="/service/grooming/{{$pg->id}}" method="post">
                                @csrf
                                <button type="submit" class="items-center justify-center rounded-md border border-transparent bg-pink-500 px-8 py-3 text-base font-medium text-white hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">Tambah layanan</button>
                            </form>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </tbody>
            </table>
            <div class="bg-slate-200 px-6 py-4 font-semibold text-3xl text-cyan-500 mt-10">
                Anjing <span class="font-bold opacity-60"> > 10kg </span>
            </div>
            <table class="text-left text-gray-500">
                <tbody >
                    @foreach($paket_grooming as $pg)
                    @if ($pg->hewan == 'anjingBesar')
                    <div class="flex">
                        <div class="my-4 w-3/5">
                            <div class="text-xl font-bold text-slate-900">{{$pg->jenis_grooming}}</div>
                            <div>{{$pg->deskripsi_penanganan}}</div>
                        </div>
                        <div class="my-8 w-1/5 text-center text-slate-900 font-semibold">
                            <div>
                                @currency($pg->harga)
                            </div>
                        </div>
                        <div class="my-4">
                            <form action="/service/grooming/{{$pg->id}}" method="post">
                                @csrf
                                <button type="submit" class="items-center justify-center rounded-md border border-transparent bg-pink-500 px-8 py-3 text-base font-medium text-white hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">Tambah layanan</button>
                            </form>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </tbody>
            </table>

            <div class="bg-slate-200 px-6 py-4 font-semibold text-3xl text-orange-500 mt-10">Paket Tambahan</div>
            <table class="text-left text-gray-500">
                <tbody >
                    @foreach($paket_grooming as $pg)

                    @if ($pg->hewan == 'both')
                    <div class="flex">
                        <div class="my-4 w-3/5">
                            <div class="text-xl font-bold text-slate-900">{{$pg->jenis_grooming}}</div>
                            <div>{{$pg->deskripsi_penanganan}}</div>
                        </div>
                        <div class="my-8 w-1/5 text-center text-slate-900 font-semibold">
                            <div>
                                @currency($pg->harga)
                            </div>
                        </div>
                        <div class="my-4">
                            <form action="/service/grooming/{{$pg->id}}" method="post">
                                @csrf
                                <button type="submit" class="items-center justify-center rounded-md border border-transparent bg-pink-500 px-8 py-3 text-base font-medium text-white hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2">Tambah layanan</button>
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
