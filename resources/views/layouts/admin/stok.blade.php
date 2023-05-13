@extends('layouts.admin.main')
@section('title') Stok @endsection
@section('href') # @endsection
@section('title-nav-1') Produk @endsection
@section('title-nav-2') Stok @endsection
@section('content')

<div class="flex flex-col md:flex-row gap-4 justify-around mx-4">
    <div class="bg-white w-full p-2 rounded-lg">
        <h3 class="text-red-500 p-3 font-semibold"><i class='bx bx-alarm-exclamation px-1'></i> Stok hampir habis!</h3>
        <table class="py-2 my-2 text-center w-full">
            <tr class="p-3 h-8 text-slate-800 divide-y-2 divide-y-reverse divide-slate-500">
                <th class="w-1/12">No</th>
                <th class="w-3/12">Gambar</th>
                <th class="w-4/12">Nama</th>
                <th class="w-1/12">Stok</th>
                <th class="w-5/12">Aksi</th>
            </tr>
            <?php  $i = 0?>
            @foreach ($produk as $p)
            @if ($p->stok <= 5)
            <tr class="py-6 my-6 h-10 divide-y-2 divide-y-reverse text-slate-700 divide-gray-200 overflow-hidden">
                <td>{{++$i}}</td>
                <td><center><div class="h-10 rounded-lg w-16 overflow-hidden grid place-items-center"><img class="rounded-lg object-center object-fill" src="{{ asset("assets/img/imgData/$p->img") }}" alt="{{$p->nama_produk}}"></div></center></td>
                <td>{{$p->nama_produk}}</td>
                <td>{{$p->stok}}</td>
                <td><button class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-amber-500 text-white hover:bg-amber-600 focus:outline-none focus:ring-0"><a href="/produk/{{$p->id}}/edit"><i class='bx bx-message-square-edit'></i></a></button>
                    <button class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:ring-0"><a href="/produk/delete/{{$p->id}}"><i class='bx bxs-detail'></i></a></button>
                    <button class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:ring-0"><a href="/produk/delete/{{$p->id}}"><i class='bx bxs-trash'></i></a></button>
                </td>
            </tr>
            @endif

            @endforeach
        </table>
    </div>
    <div class="bg-white w-full p-2 rounded-lg">
        <h3 class="text-blue-500 p-3 font-semibold"><i class='bx bx-check-shield'></i></i> Stok Tersedia</h3>
        <table class="py-2 my-2 text-center w-full">
            <tr class="p-3 h-8 text-slate-800 divide-y-2 divide-y-reverse divide-slate-500">
                <th class="w-1/12">No</th>
                <th class="w-3/12">Gambar</th>
                <th class="w-4/12">Nama</th>
                <th class="w-1/12">Stok</th>
                <th class="w-5/12">Aksi</th>
            </tr>
            <?php  $i = 0?>
            @foreach ($produk as $p)
            @if ($p->stok > 5)
            <tr class="py-6 my-6 h-10 divide-y-2 divide-y-reverse text-slate-700 divide-gray-200 overflow-hidden">
                <td>{{++$i}}</td>
                <td><center><div class="h-10 rounded-lg w-16 overflow-hidden grid place-items-center"><img class="rounded-lg object-center object-fill" src="{{ asset("assets/img/imgData/$p->img") }}" alt="{{$p->nama_produk}}"></div></center></td>
                <td>{{$p->nama_produk}}</td>
                <td>{{$p->stok}}</td>
                <td><button class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-amber-500 text-white hover:bg-amber-600 focus:outline-none focus:ring-0"><a href="/produk/{{$p->id}}/edit"><i class='bx bx-message-square-edit'></i></a></button>
                    <button class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:ring-0"><a href="/produk/delete/{{$p->id}}"><i class='bx bxs-detail'></i></a></button>
                    <button class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:ring-0"><a href="/produk/delete/{{$p->id}}"><i class='bx bxs-trash'></i></a></button>
                </td>
            </tr>
            @endif

            @endforeach
        </table>
    </div>
</div>

{{-- <div class="flex flex-col md:flex-row">
    <div class="rounded-xl mx-10 my-4 p-2 bg-white min-w-fit">
        <h3 class="text-blue-500 p-3 font-semibold"><i class='bx bx-check-shield'></i></i> Stok Tersedia</h3>
        <table class="py-2 my-2 text-center">
            <tr class="p-3 h-8 text-slate-800 divide-y-2 divide-y-reverse divide-slate-500">
                <th class="w-20">No</th>
                <th class="w-32">Gambar</th>
                <th class="w-52">Nama</th>
                <th class="w-32">stok</th>
                <th class="w-32">Aksi</th>
            </tr>
            <?php  $i = 0?>
            @foreach ($produk as $p)
            @if ($p->stok > 5)
            <tr class="py-6 my-6 h-10 divide-y-2 divide-y-reverse text-slate-700 divide-gray-200 overflow-hidden">
                <td>{{++$i}}</td>
                <td><center><div class="h-10 rounded-lg w-16 overflow-hidden grid place-items-center"><img class="rounded-lg object-center object-fill" src="{{ asset("assets/img/imgData/$p->img") }}" alt="{{$p->nama_produk}}"></div></center></td>
                <td>{{$p->nama_produk}}</td>
                <td>{{$p->stok}}</td>
                <td><button class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-amber-500 text-white hover:bg-amber-600 focus:outline-none focus:ring-0"><a href="/produk/{{$p->id}}/edit"><i class='bx bx-message-square-edit'></i></a></button>
                    <button class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:ring-0"><a href="/produk/delete/{{$p->id}}"><i class='bx bxs-detail'></i></a></button>
                    <button class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:ring-0"><a href="/produk/delete/{{$p->id}}"><i class='bx bxs-trash'></i></a></button>
                </td>
            </tr>
            @endif

            @endforeach
        </table>
    </div>
    <div class="rounded-xl m-3 p-2 bg-white min-w-fit">

    </div>
</div> --}}
@endsection
