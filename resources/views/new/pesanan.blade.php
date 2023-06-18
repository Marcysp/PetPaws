@extends('new.template2')
@section('content')
<div class="mt-10 ml-32">
    <span class="font-bold text-2xl">Pemesanan</span>
        <div class="mt-5 relative overflow-x-auto sm:rounded-lg">
            <table class="w-7/12 text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                    <tr>
                        <th scope="col" class="pr-6 py-3">
                            Product Detail
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Nama</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total
                        </th>
                    </tr>
                </thead>
                <tbody class="border border-black">
                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-40 pl-1 pr-4 py-4">
                            <img src="{{asset('img/produk2.png')}}" alt="Apple Watch">
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                            <div>Sofa Ternyaman</div>
                            <div>x2</div>
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                            20.000
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                            40.000
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class=" w-7/12 flex justify-end border-t-0 border border-black">
                <div class="px-10 my-auto font-bold">Total Pesanan</div>
                <div class="px-10 my-auto font-bold">40.000</div>
                <div class="px-10">
                    <button type="button" class="text-white bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 my-5 mr-2">Review</button>
                </div>


            </div>
        </div>
        <div class="mt-5 relative overflow-x-auto sm:rounded-lg">
            <table class="w-7/12 text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                    <tr>
                        <th scope="col" class="pr-6 py-3">
                            Product Detail
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Nama</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total
                        </th>
                    </tr>
                </thead>
                <tbody class="border border-black">
                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-40 pl-1 pr-4 py-4">
                            <img src="{{asset('img/produk2.png')}}" alt="Apple Watch">
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                            <div>Sofa Ternyaman</div>
                            <div>x1</div>
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                            20.000
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                            20.000
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-40 pl-1 pr-4 py-4">
                            <img src="{{asset('img/produk2.png')}}" alt="Apple Watch">
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                            <div>Sofa Ternyaman</div>
                            <div>x2</div>
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                            20.000
                        </td>
                        <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                            40.000
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="mb-10 w-7/12 flex justify-end border-t-0 border border-black">
                <div class="px-6 my-auto font-bold">Total Pesanan</div>
                <div class="px-6 my-auto font-bold">40.000</div>
                <div class="pl-6 pr-2">
                    <button type="button" class="text-white bg-rose-700 hover:bg-rose-800 focus:ring-4 focus:ring-rose-300 font-medium rounded-lg text-sm px-5 py-2.5 my-5 mr-2">Bayar Sekarang</button>
                </div>
            </div>
        </div>
</div>
@endsection
