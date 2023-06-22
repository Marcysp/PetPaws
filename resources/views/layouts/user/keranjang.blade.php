@extends('layouts.user.main')
@section('title') Keranjang @endsection
@section('content')
    @if (!empty($detail_pesanan))
        <div class="mt-24 ml-20">
            <div class="flex justify-between items-center">
                <div class="items-center mr-4">
                    <span class="text-2xl font-bold">Shopping Cart</span>
                </div>
                <div class="items-center mr-20">
                    <a href="/produk" class="flex font-semibold text-indigo-600 text-sm mt-2">
                        <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
                        Continue Shopping
                    </a>
                </div>
            </div>
            <div class="mt-16">
                <div class="relative overflow-x-auto sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                            <tr>
                                <th scope="col" class="pr-7 py-3">
                                    Detail Product
                                </th>
                                <th scope="col" class="px-7 py-3">
                                    <span class="sr-only">Name</span>
                                </th>
                                <th scope="col" class="px-7 py-3">
                                    <span class="text-center">Quantity</span>
                                </th>
                                <th scope="col" class="px-7 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-7 py-3">
                                    Total
                                </th>
                                <th scope="col" class="pl-7 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detail_pesanan as $detail_pesanan)
                            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-40 pr-5 py-4">
                                    <img src="{{ asset('assets/img/imgData/' . $detail_pesanan->produk->img) }}" alt="Img">
                                </td>
                                <td class="px-7 py-4 font-semibold text-gray-900 dark:text-white min-w-[50px] max-w-[100px]">
                                    {{$detail_pesanan->produk->nama_produk}}
                                </td>
                                <td class="px-7 py-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="justify-center">
                                            <form action="/update/item/keranjang/{{$detail_pesanan->id}}" method="post">
                                                @csrf
                                                <input type="number" id="qty" name="qty" class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mx-auto" placeholder="{{ $detail_pesanan->qty }}" required>
                                                <button type="submit" class="focus:outline-none text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm w-fit px-3 py-1 mx-auto mb-2">update</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-7 py-4 font-semibold text-gray-900 dark:text-white">
                                    {{$detail_pesanan->produk->harga}}
                                </td>
                                <td class="px-7 py-4 font-semibold text-gray-900 dark:text-white">
                                    {{$detail_pesanan->subtotal}}
                                </td>
                                <td class="pl-7 py-4">
                                    <form action="keranjang/{{$detail_pesanan->id}}" method="post">
                                        @csrf
                                        {{ method_field('DELETE')}}
                                        <button type="submit" class="focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-100 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2" >Remove</button>

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <form action="{{ $pesanan->total > 0 ? '/check-out/produk' : '#' }}" method="{{ $pesanan->total > 0 ? 'post' : 'get' }}">
                @csrf
                <div class="mt-10 mr-20 w-4/6">
                    <hr class="pb-3">
                    <span class=" text-sm font-bold">Order Summary</span>
                        <div class="grid gap-6 mt-3 mb-6 md:grid-cols-2">
                            <div>
                                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                                <textarea name="alamat" rows="5" cols="50" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Alamat" required>{{old('alamat')}}</textarea>
                            </div>
                            <div>
                                <div>
                                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                    <input type="text" id="nama" name="nama" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required value="{{old('nama')}}">
                                    @error('nama')
                                    <div class="text-sm text-red-500">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="mt-7">
                                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.Telp</label>
                                    <input type="text" id="phone" name="no_hp" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="No Telp" required value="{{old('no_hp')}}">
                                    @error('no_hp')
                                    <div class="text-sm text-red-500">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                </div>
                <div class="mt-10 mr-20 mb-40 w-[55%]">
                    <span class=" text-sm font-bold">Payment Informations</span>
                    <div class="grid text-sm gap-6 mt-3 mb-6 md:grid-cols-3">
                        <div class="flex-col w-fit">
                            <?php
                                $pesanan_utama = \App\Models\Pesanan::where('user_id',Auth::user()->id)->where('status','keranjang')->first();

                                if (!empty($pesanan_utama)) {
                                    $notif = \App\Models\Detail_pesanan::where('pesanan_id',$pesanan_utama->id)->count();
                                }
                            ?>
                            <div class="text-center text-2xl">
                                {{$notif}}
                            </div>
                            <div>
                                items
                            </div>
                        </div>
                        <div class="flex-col w-48">
                            <div class="text-center text-green-500 text-2xl">
                                @currency($pesanan->total)
                            </div>
                            <div class="text-center">
                                Total Pembayaran
                            </div>
                        </div>
                        <button type="submit" class="focus:outline-none text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm w-fit px-5 py-2.5 mr-2 mb-2">Checkout Now</button>
                    </div>
                </div>
            </form>
        </div>
        @else
        <div class="mt-24 ml-20">
            <a href="/produk" class="flex font-semibold text-indigo-600 text-sm mt-10">
                <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
                Continue Shopping
            </a>
        </div>
    @endif
@endsection
