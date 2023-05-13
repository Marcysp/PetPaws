@extends('layouts.admin.main')
@section('title') Produk @endsection
@section('href') # @endsection
@section('title-nav-1') Produk @endsection
@section('title-nav-2') Daftar Produk @endsection
@section('content')
<div class="rounded-xl mx-10 my-4 p-6 bg-white min-w-fit">
    <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
        <button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-full border border-transparent font-semibold bg-pink-400 text-white hover:bg-pink-500 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-500">
            <a href="/produk/create">Tambah Produk</a>
        </button>
        <div class="flex items-center md:ml-auto md:pr-4">
            <form action="/produk" method="GET">
                <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                    <span class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                        <i class='bx bx-search-alt'></i>
                    </span>
                    <input type="search" name="search" class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Type here..." />
                  </div>
            </form>
        </div>
      </div>

    <table class="p-4 my-5 text-center w-full">
        <tr class="p-2 h-10 text-slate-800 divide-y-2 divide-y-reverse divide-slate-500">
            <th class="w-1/12">No</th>
            <th class="w-1/5">Gambar</th>
            <th class="w-1/5">nama</th>
            <th class="w-2/6">harga</th>
            <th class="w-2/6">Aksi</th>
        </tr>
        <?php  $i = 0?>
        @foreach ($produk as $p)
        <tr class="py-6 my-6 h-16 divide-y-2 divide-y-reverse text-slate-700 divide-gray-200">
            <td>{{++$i}}</td>
            <td><center><div class="h-16 rounded-lg w-24 overflow-hidden grid items-center"><img class="rounded-lg object-center object-fill" src="{{ asset("assets/img/imgData/$p->img") }}" alt="{{$p->nama_produk}}"></div></center></td>
            <td>{{$p->nama_produk}}</td>
            <td>{{$p->harga}}</td>
            <td><button class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-amber-500 text-white hover:bg-amber-600 focus:outline-none focus:ring-0"><a href="/produk/{{$p->id}}/edit"><i class='bx bx-message-square-edit'></i></a></button>
                <button class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:ring-0"><a href="/produk/delete/{{$p->id}}"><i class='bx bxs-detail'></i></a></button>
                <button class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:ring-0"><a href="/produk/delete/{{$p->id}}"><i class='bx bxs-trash'></i></a></button>
                </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection

