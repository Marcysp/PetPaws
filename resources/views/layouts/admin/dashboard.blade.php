@extends('layouts.admin.main')
@section('title') Dashboard-admin @endsection
@section('href') # @endsection
@section('title-nav-1') Admin @endsection
@section('title-nav-2') Dashboard @endsection
@section('split-bg')
<div class="bg-pink-400 min-h-[180px] absolute z-[1] w-full"></div>
@endsection
@section('content')
<div class="w-full px-6 py-6 mx-auto">
    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal uppercase text-black dark:opacity-60 text-sm">Pesanan</p>
                                <p class="mb-3 text-black opacity-60 text-xs">bulan ini</p>
                                <h5 class="mb-2 font-bold text-black">{{$count}}</h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-yellow-500 to-red-500">
                                <i class='bx bxs-cart-alt text-3xl relative top-2.5 text-white'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal uppercase text-black dark:opacity-60 text-sm">Penjualan</p>
                                <p class="mb-3 text-black opacity-60 text-xs">bulan ini</p>
                                <h5 class="mb-2 font-bold text-black">@currency($totalPenjualan)</h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-green-500">
                                <i class='bx bxs-wallet text-3xl relative top-2.5 text-white'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal uppercase text-black dark:opacity-60 text-sm">Pengguna</p>
                                <p class="mb-3 text-black opacity-60 text-xs">jumlah</p>
                                <h5 class="mb-2 font-bold text-black">{{$user}}</h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-fuchsia-500 to-pink-300">
                                <i class='bx bxs-group text-3xl relative top-2.5 text-white'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans font-semibold leading-normal uppercase text-black dark:opacity-60 text-sm">Today's Money</p>
                                <h5 class="mb-2 font-bold text-black">$53,000</h5>
                                <p class="mb-0 text-black opacity-60">
                                    <span class="font-bold leading-normal text-sm text-emerald-500">+55%</span>
                                    since yesterday
                                </p>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                <i class='bx bxs-wallet text-lg relative top-3.5 text-white'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
