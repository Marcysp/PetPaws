@extends('layouts.user.main')
@section('title') produk @endsection
@section('content')
<div class="pt-20 bg-white px-3 md:px-10 ">
    <div class="justify-center mx-auto md:max-w-5xl">
        <div class="grid grid-cols-2 md:grid-cols-5">
            @foreach ($produk as $p)
            <div class="bg-gray-200 mx-1 mb-2 md:mx-4 md:mb-8 ">
                <a href="/produk/detail/{{$p->id}}" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-auto h-20 md:h-52 overflow-hidden rounded-none bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                      <img src="{{ asset("assets/img/imgData/$p->img") }}" alt="{{$p->nama_produk}}" class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <h3 class="mt-2 text-sm text-gray-700 text-center">{{$p->nama_produk}}</h3>
                    <p class="py-1 text-base font-medium text-gray-900 text-center">@currency($p->harga)</p>
                  </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection


