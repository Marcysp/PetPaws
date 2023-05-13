@extends('layouts.admin.main')
@section('href') /produk @endsection
@section('title-nav-1') Daftar Produk @endsection
@section('title-nav-2') Edit Produk @endsection
@section('content')
<div class="rounded-xl mx-10 my-4 p-6 bg-white ">
    <form action="/produk/{{$produk->id}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="flex">
            <div class="w-2/5 mx-6">
                <label for="" class="block text-sm font-medium leading-4 text-slate-800 mt-4 mb-3">Nama Produk</label>
                <input type="text" name="nama_produk" required  value="{{$produk->nama_produk}}" class="block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3" ><br>
                <label for="" class="block text-sm font-medium leading-6 text-slate-800 mb-3">Harga</label>
                <input type="text" name="harga" required value="{{$produk->harga}}" class="block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3"><br>
                <label for="" class="block text-sm font-medium leading-6 text-slate-800 mb-3">Gambar</label>
                <input type="file" name="img" value="{{$produk->img}}" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px- file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-pink-50 file:text-pink-400 hover:file:bg-pink-100" required><br>
                <select required class="form-select cursor-pointer block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3" aria-label="Default select example" name="produk_kategori_id">
                    <option selected>Kategori Produk</option>
                    @foreach ($kategori as $k)
                    <option value="{{$k->id}}" @if ($produk->produk_brand_id == $k->id) selected @endif>{{$k->nama_kategori}}</option>
                    @endforeach
                  </select><br>
                <select required class="form-select cursor-pointer block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3" aria-label="Default select example" name="produk_brand_id">
                    <option selected>Brand Produk</option>
                    @foreach ($brand as $b)
                    <option value="{{$b->id}}" @if ($produk->produk_brand_id == $b->id) selected @endif>{{$b->nama_brand}}</option>
                    @endforeach
                </select><br>
                <select required class="form-select cursor-pointer block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3" aria-label="Default select example" name="kategori_hewan_id">
                    <option selected>Kategori Hewan</option>
                    @foreach ($hewan as $h)
                    <option value="{{$h->id}}" @if ($produk->kategori_hewan_id == $h->id) selected @endif>{{$h->nama_hewan}}</option>
                    @endforeach
                </select><br>
            </div>
            <div class="mx-10 w-3/5">
                <label for="" class="block text-sm font-medium leading-6 text-slate-800">Deskripsi</label>
                <textarea name="deskripsi" required cols="30" rows="5" class="block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3">{{$produk->deskripsi}}</textarea>
                <button type="button" class="my-6 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-lg border border-transparent font-semibold bg-pink-400 text-white hover:bg-pink-500 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-500">
                    <input type="submit" name="submit" value="Save" class="cursor-pointer">
                </button>

            </div>
        </div>
    </form>
</div>
@endsection
