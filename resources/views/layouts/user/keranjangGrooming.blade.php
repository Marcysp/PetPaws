@extends('layouts.user.main')
@section('title') Keranjang @endsection

@section('content')
    @if (!empty($detail_grooming))
        <div class="mt-24 ml-20">
            <div class="flex justify-between items-center">
                <div class="items-center mr-4">
                    <span class="text-2xl font-bold">List Paket Grooming</span>
                </div>
                <div class="items-center mr-20">
                    <a href="/grooming" class="flex font-semibold text-indigo-600 text-sm mt-2">
                        <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
                        Tambah Paket
                    </a>
                </div>
            </div>
            <div class="mt-16">
                <div class="relative overflow-x-auto sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-7 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-7 py-3">
                                    Price
                                </th>
                                <th scope="col" class="pl-7 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detail_grooming as $dg)
                            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="px-7 py-4 font-semibold text-gray-900 dark:text-white min-w-[50px] max-w-[100px]">
                                    {{$dg->paket_grooming->jenis_grooming}}
                                </td>
                                <td class="px-7 py-4 font-semibold text-gray-900 dark:text-white">
                                    @currency($dg->paket_grooming->harga)
                                </td>
                                <td class="pl-7 py-4">
                                    <form action="/list/grooming/{{$dg->id}}" method="post">
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
            <form id="checkout-form" onsubmit="return validateDate()" action="{{ $grooming->total > 0 ? '/check-out/grooming' : '#' }}" method="{{ $grooming->total > 0 ? 'post' : 'get' }}">
                @csrf
                <div class="mt-10 mr-20 w-4/6">
                    <hr class="pb-3">
                    <span class=" text-sm font-bold">Order Summary</span>
                        <div class="grid gap-3 mt-3 mb-6 md:grid-cols-2">
                            <div>
                                <label for="nama_hewan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Peliharaan</label>
                                <input type="text" id="nama_hewan" name="nama_hewan" class="form-select cursor-pointer block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3" placeholder="Nama hewan" required value="{{old('nama_hewan')}}">
                                @error('nama_hewan')
                                <div class="text-sm text-red-500">{{$message}}</div>
                                @enderror
                            </div>
                            <div>
                                <label for="nama_pemilik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pemilik</label>
                                <input type="text" id="nama_pemilik" name="nama_pemilik" class="form-select cursor-pointer block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3" placeholder="Nama Pemilik" required value="{{old('nama_pemilik')}}">
                                @error('nama_pemilik')
                                <div class="text-sm text-red-500">{{$message}}</div>
                                @enderror
                            </div>
                            <div>
                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.Telp</label>
                                <input type="text" id="phone" name="no_hp" class="form-select cursor-pointer block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3"  placeholder="No Telp" required value="{{old('no_hp')}}">
                                @error('no_hp')
                                <div class="text-sm text-red-500">{{$message}}</div>
                                @enderror
                            </div>
                            <div>
                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Booking Grooming</label>
                                <input type="date" id="tanggal" name="tanggal_grooming" class="form-select cursor-pointer block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3"  placeholder="No Telp" required value="{{old('tanggal_grooming')}}">
                                @error('tanggal_grooming')
                                <div class="text-sm text-red-500">{{$message}}</div>
                                @enderror
                            </div>
                            <div>
                                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                                <textarea name="alamat" id="alamat" cols="30" rows="4" class="form-select cursor-pointer block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3">{{old('alamat')}}</textarea>
                                @error('alamat')
                                <div class="text-sm text-red-500">{{$message}}</div>
                                @enderror
                            </div>
                            <div>
                                <label for="jenis_hewan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Hewan</label>
                                <select required class="form-select cursor-pointer block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3" aria-label="Default select example" name="hewan" id="hewan">
                                    <option selected disabled>Jenis Hewan</option>
                                    <option value="anjingBesar">Anjing Besar</option>
                                    <option value="anjingKecil">Anjing Kecil</option>
                                    <option value="kucing">Kucing</option>
                                </select>
                                @error('hewan')
                                <div class="text-sm text-red-500">{{$message}}</div>
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                            @if ($loop->first && $errors->has('hewan'))
                                                @include('sweetalert::alert')
                                                <script>
                                                    Swal.fire({
                                                        icon: 'error',
                                                        title: 'Invalid Input',
                                                        text: '{{ $errors->first('hewan') }}',
                                                    });
                                                </script>
                                                @break
                                            @endif
                                    @endforeach
                                @endif
                                @enderror
                            </div>
                        </div>
                </div>
                <div class="mt-10 mr-20 mb-40 w-[55%]">
                    <span class=" text-sm font-bold">Payment Informations</span>
                    <div class="grid text-sm gap-6 mt-3 mb-6 md:grid-cols-3">
                        <div class="flex-col w-fit">
                            <div class="text-center text-2xl">
                                {{$notif_detail_grooming}}
                            </div>
                            <div>
                                items
                            </div>
                        </div>

                        <div class="flex-col w-48">
                            <div class="text-center text-green-500 text-2xl">
                                @currency($grooming->total)
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
@section('script-manual')
<script>
    function validateDate() {
        // Mendapatkan tanggal sekarang
        var currentDate = new Date();

        // Mendapatkan nilai input tanggal
        var inputDate = new Date(document.getElementById('tanggal').value);

        // Membandingkan tanggal input dengan tanggal sekarang
        if (inputDate < currentDate) {
            alert('Tanggal tidak boleh kurang dari tanggal sekarang!');
            return false;
        }

        //mendapatkan hewan
        var selectedHewan = document.getElementById('hewan').value;
        // Mendapatkan detail grooming
        var detailGrooming = {!! json_encode($detail_grooming) !!};

        // Membandingkan jenis hewan yang dipilih dengan jenis hewan dari paket grooming
        for (var i = 0; i < detailGrooming.length; i++) {
            var paketHewan = detailGrooming[i].paket_grooming.hewan;
            if (selectedHewan !== paketHewan && paketHewan !== 'both') {
                alert('Paket yang Anda pilih tidak sesuai dengan jenis hewan Anda!');
                return false;
            }
        }


        return true;
    }
</script>

@endsection
