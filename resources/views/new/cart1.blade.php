@extends('new.template2')
@section('content')
<div class="mt-10 ml-20">
    <span class="text-2xl font-bold">Shopping Cart</span>
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
                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-40 pr-5 py-4">
                            <img src="{{asset("img/produk2.png")}}" alt="Sofa">
                        </td>
                        <td class="px-7 py-4 font-semibold text-gray-900 dark:text-white">
                            Sofa Ternyaman
                        </td>
                        <td class="px-7 py-4">
                            <div class="flex items-center space-x-3">
                                <button class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                                    <span class="sr-only">Quantity button</span>
                                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                </button>
                                <div>
                                    <input type="number" id="first_product" class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1" required>
                                </div>
                                <button class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                                    <span class="sr-only">Quantity button</span>
                                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                </button>
                            </div>
                        </td>
                        <td class="px-7 py-4 font-semibold text-gray-900 dark:text-white">
                            20000
                        </td>
                        <td class="px-7 py-4 font-semibold text-gray-900 dark:text-white">
                            20000
                        </td>
                        <td class="pl-7 py-4">
                            <button type="button" class="focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-100 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Remove</button>
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-40 pr-5 py-4">
                            <img src="{{asset("img/produk2.png")}}" alt="Sofa">
                        </td>
                        <td class="px-7 py-4 font-semibold text-gray-900 dark:text-white">
                            Sofa Ternyaman
                        </td>
                        <td class="px-7 py-4">
                            <div class="flex items-center space-x-3">
                                <button class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                                    <span class="sr-only">Quantity button</span>
                                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                </button>
                                <div>
                                    <input type="number" id="first_product" class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1" required>
                                </div>
                                <button class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                                    <span class="sr-only">Quantity button</span>
                                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                </button>
                            </div>
                        </td>
                        <td class="px-7 py-4 font-semibold text-gray-900 dark:text-white">
                            20000
                        </td>
                        <td class="px-7 py-4 font-semibold text-gray-900 dark:text-white">
                            20000
                        </td>
                        <td class="pl-7 py-4">
                            <button type="button" class="focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-100 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Remove</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="mt-10 mr-20 w-4/6">
        <hr class="pb-3">
        <span class=" text-sm font-bold">Order Summary</span>
        <form action="">
            <div class="grid gap-6 mt-3 mb-6 md:grid-cols-2">
                <div>
                    <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                    <input type="text" id="alamat" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Alamat" required>
                </div>
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" id="nama" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required>
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.Telp</label>
                    <input type="tel" id="phone" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="No Telp" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                </div>
                <div>
                    <label for="promocode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Promo Code</label>
                    <div class="flex gap-5">
                        <input type="text" id="promocode" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Promo Code" required>
                        <button type="button" class="focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-100 font-medium rounded-lg text-sm px-5 py-3">Apply</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="mt-10 mr-20 mb-40 w-[55%]">
        <span class=" text-sm font-bold">Payment Informations</span>
        <div class="grid text-sm gap-6 mt-3 mb-6 md:grid-cols-4">
            <div class="flex-col w-fit">
                <div class="text-center text-2xl">
                    2
                </div>
                <div>
                    items
                </div>
            </div>
            <div class="flex-col w-fit">
                <div class="text-center text-2xl">
                    20.000
                </div>
                <div>
                    Ship to Jakarta
                </div>
            </div>
            <div class="flex-col w-fit">
                <div class="text-center text-green-500 text-2xl">
                    60.000
                </div>
                <div>
                    Total Pembayaran
                </div>
            </div>
            <button type="button" class="focus:outline-none text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm w-fit px-5 py-2.5 mr-2 mb-2">Checkout Now</button>
        </div>
    </div>
</div>
@endsection
