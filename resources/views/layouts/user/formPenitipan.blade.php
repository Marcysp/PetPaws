@extends('layouts.user.main')
@section('title') Penitipan @endsection
@section('link-manual')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection
@section('content')
<div class="mx-16 my-24">
    <div>
        <form action="/check-out/penitipan/" method="post" id="checkout-form" onsubmit="return validateForm()">
            @csrf
            <div class="my-6 shadow-2xl border-y-4 py-10 px-10 border-fuchsia-700">
                <table class="mx-6 px-10 mb-4 text-lg font-semibold text-slate-700">
                    <tr>
                        <td>Jenis Penitipan</td>
                        <td> : </td>
                        <td>{{$paket->jenis_penitipan}}</td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>:</td>
                        <td>@format($paket->harga)/malam</td>
                    </tr>
                </table>
                <div class="flex">
                    <div class="w-[600px] mx-6">
                        <div class="my-4">
                            <label for=""> Nama Hewan</label><br>
                            <input type="text" name="nama_hewan" class="cursor-pointer block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3 @error('name') invalid:ring-red-600 @enderror"
                    required>
                        </div>
                        <div class="my-4">
                            <label for=""> Tanggal Check In</label><br>
                            <input type="date" name="tanggal_masuk" id="tanggal_masuk" onchange="calculateTotal()" class="cursor-pointer block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3 @error('name') invalid:ring-red-600 @enderror"
                    required>
                        </div>
                        <div class="my-4">
                            <label for=""> No hp</label><br>
                            <input type="text" name="no_hp" class="cursor-pointer block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3 @error('no_hp') invalid:ring-red-600 @enderror"
                    required>
                        </div>
                        <div class="my-4">
                            <label for="">Alamat</label><br>
                            <textarea name="alamat" id="alamat" cols="40" rows="5" class="cursor-pointer block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3"></textarea>
                        </div>
                    </div>
                    <div class="w-[600px] mx-6">
                        <div class="my-4">
                            <label for=""> Nama Pemilik</label><br>
                            <input type="text" name="nama_pemilik" class="cursor-pointer block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3 @error('name') invalid:ring-red-600 @enderror"
                    required>
                        </div>
                        <div class="my-4">
                            <label for=""> Tanggal Check Out</label><br>
                            <input type="date" name="tanggal_keluar" id="tanggal_keluar" onchange="calculateTotal()" class="cursor-pointer block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3 @error('name') invalid:ring-red-600 @enderror" br
                            required>
                        </div>
                        <div class="my-4">
                            <label for=""> Jenis Hewan </label><br>
                            <select required name="hewan" class="form-select cursor-pointer block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3" aria-label="Default select example" name="hewan" id="hewan" data-paket-hewan="{{$paket->hewan}}">
                                <option selected disabled>Jenis Hewan</option>
                                <option value="anjing besar">Anjing Besar</option>
                                <option value="anjing kecil">Anjing Kecil</option>
                                <option value="kucing">Kucing</option>
                            </select>
                        </div>
                        <div class="my-4">
                            <label for="">Riwayat penyakit Hewan</label><br>
                            <textarea name="riwayat_penyakit" id="riwayat_penyakit" cols="40" rows="5" class="cursor-pointer block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3" required placeholder='isikan "-" jika tidak memiliki riwayat penyakit'></textarea>
                        </div>
                    </div>
                </div>
                <div class="mt-10 mr-20 mb-40 w-[55%]">
                    <span class=" text-sm font-bold">Payment Informations</span>
                    <div class="grid text-sm gap-6 mt-3 mb-6 md:grid-cols-3">
                        <div class="flex-col w-48">
                            <div class="text-center text-green-500 text-2xl">
                                <div id="total_biaya"></div>
                            </div>
                            <div class="text-center">
                                Total Pembayaran
                            </div>
                        </div>
                        <button type="submit" class="focus:outline-none text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm w-fit px-5 py-2.5 mr-2 mb-2">Book Now</button>
                    </div>
                </div>

                <div class="hidden">
                    <input type="text" name="paket_penitipan_id" value="{{$paket->id}}">
                </div>
            </div>
        </form>
    </div>

</div>
@endsection

@section('script-manual')
<script>
    function validateForm() {
        var tanggalMasuk = new Date(document.getElementById('tanggal_masuk').value);
        var tanggalKeluar = new Date(document.getElementById('tanggal_keluar').value);
        // Get today's date
        var today = new Date();

        if (tanggalMasuk < today) {
            alert('Tanggal CheckIn tidak boleh lebih awal dari tanggal sekarang.');
            return false;
        }

        if (tanggalKeluar <= tanggalMasuk) {
            alert('Tanggal CheckOut harus lebih dari tanggal masuk.');
            return false;
        }
        // Mendapatkan jenis hewan yang dipilih
        var selectedHewan = document.getElementById('hewan').value;

        // Mendapatkan jenis hewan dari paket penitipan yang dipilih
        var paketPenitipan = {!! json_encode($paket) !!};
        var penitipanHewan = paketPenitipan.hewan;

        // Membandingkan jenis hewan yang dipilih dengan jenis hewan dari paket grooming
        if (selectedHewan !== penitipanHewan) {
            alert('Paket yang Anda pilih tidak sesuai dengan jenis hewan Anda!');
            return false;
        }

        return true;
    }

    function calculateTotal() {
    // Mendapatkan tanggal masuk
    var tanggalMasuk = new Date(document.getElementById('tanggal_masuk').value);

    // Mendapatkan tanggal keluar
    var tanggalKeluar = new Date(document.getElementById('tanggal_keluar').value);

    // Mendapatkan harga paket
    var hargaPaket = {!! json_encode($paket->harga) !!};

    // Menghitung selisih hari antara tanggal keluar dan tanggal masuk
    var selisihHari = (tanggalKeluar - tanggalMasuk) / (1000 * 60 * 60 * 24);

    // Menghitung total biaya
    var totalBiaya = selisihHari * hargaPaket;

    // Mengubah totalBiaya menjadi format mata uang rupiah
    var formattedTotalBiaya = totalBiaya.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });

    // Memperbarui tampilan total biaya di halaman
    document.getElementById('total_biaya').innerHTML = formattedTotalBiaya;
  }
</script>
@endsection
