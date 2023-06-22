@extends('layouts.user.profile')
@section('title') Pesanan Produk @endsection
@section('link-manual')
 <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
 <script type="text/javascript"
 src="https://app.sandbox.midtrans.com/snap/snap.js"
 data-client-key="{{config('midtrans.client_key')}}"></script>
@endsection
@section('pesanan')
<div class="float-left w-full bg-white mt-[45px] left-0">
    <div class="fixed bg-white top-[54px] w-4/5 px-4 shadow-md flex justify-center items-center mr-3 h-14">
        <div class="w-full justify-center">
            <div class="items-center justify-between relative mx-auto">
                <div class="flex items-center px-1 mx-3">
                    <nav class=" rounded-md w-full right-0 top-full lg:static lg:block lg:bg-transparent lg:max-w-full lg:shadow-none bg-white">
                        <ul class="flex justify-center">
                            <li class="group">
                                <a href="#" onclick="filterContent('all')" class="text-base text-black py-2 mx-4 flex group-hover:text-purple-700">Semua</a>
                            </li>
                            <li class="group">
                                <a href="#/unpiad" onclick="filterContent('unpaid')" class="text-base text-black py-2 mx-4 flex group-hover:text-purple-700">Belum Bayar</a>
                            </li>
                            <li class="group">
                                <a href="#/inProgress" onclick="filterContent('proses')" class="text-base text-black py-2 mx-4 flex group-hover:text-purple-700">Proses</a>
                            </li>
                            <li class="group">
                                <a href="#/success" onclick="filterContent('terlayani')" class="text-base text-black py-2 mx-4 flex group-hover:text-purple-700">Selesai</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-14 p-1 float-right bg-slate-200 w-full">
    @if (!empty($penitipan))
    <div class="mt-5">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
        @foreach($penitipan as $p)
            <div class="my-2 mx-4 bg-white p-4 pesanan-item px-4 h-[350px]" data-category="{{ $p->paid }}" data-dilayani="{{ $p->dilayani}}">
                <div class="text-sm">
                    <h3 class="font-bold">ID {{$p->id}}</h3>
                    <p>{{ \Carbon\Carbon::parse($p->tanggal_checkout)->format('d-m-Y') }}</p>
                </div>
                <div class="my-2">
                    <div class="text-sm"> Paket :</div>
                    <div class="text-slate-700 font-semibold">{{$p->paket_penitipan->jenis_penitipan}}</div>
                </div>

                    <div class="text-sm">Tanggal Booking :</div>
                    <div class="font-semibold"> {{ \Carbon\Carbon::parse($p->tanggal_masuk)->format('d-M-Y') }}</div>
                    <div class="text-xs"> hingga</div>
                    <div class="font-semibold"> {{ \Carbon\Carbon::parse($p->tanggal_keluar)->format('d-M-Y') }}</div>
                <div class="mt-9">
                    <div class="text-sm">
                        <div class="font-bold">Total Pesanan</div>
                        <div class="font-bold">@currency($p->total)</div>
                    </div>
                    <div class="py-2">
                        @if ($p->paid == 'unpaid')
                        <button type="button" id="pay-button{{$p->id}}" class="text-white bg-rose-700 hover:bg-rose-800 focus:ring-4 focus:ring-rose-300 font-medium rounded-lg text-sm px-3 py-1 w-full mb-1">Bayar Sekarang</button>
                        <button id="myBtn{{$p->id}}" data-target="#detailProduk{{$p->id}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-rose-300 font-medium rounded-lg text-sm px-3 py-1 w-full">Detail</button>
                        @else
                        {{-- <button type="button" class="text-white bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 my-5 mr-2">Review</button> --}}
                        <button id="myBtn{{$p->id}}" data-target="#detailProduk{{$p->id}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-rose-300 font-medium rounded-lg text-sm px-3 py-1 w-full mt-5">Detail</button>
                        @endif

                    </div>
                </div>
            </div>
            {{-- Modal --}}
            <div id="editModal{{$p->id}}" class="modal-manual fade myModal" tabindex="-1" role="dialog">
                <div class="modal-content-manual" role="document">
                    <div class="modal-content">
                        <div class="modal-header flex justify-between px-14">
                            <h5 class="modal-title text-lg text-slate-800">ID {{$p->id}}</h5>
                            <span class="close-manual" id="close{{$p->id}}">&times;</span>
                        </div>
                        <h5 class="modal-title text-sm text-slate-400 px-14">{{ \Carbon\Carbon::parse($p->tanggal_penitipan)->format('d-m-Y') }}</h5>
                        <div>
                            <div class="my-7 text-xl font-semibold px-14">
                                Detail Order
                            </div>
                            <div class="my-6  border-y-4 py-10 px-10 border-fuchsia-700">
                                <table class="mx-6 px-10 mb-4 text-lg font-semibold text-slate-700">
                                    <tr>
                                        <td>Jenis Penitipan</td>
                                        <td> : </td>
                                        <td>{{$p->paket_penitipan->jenis_penitipan}}</td>
                                    </tr>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>@format($p->paket_penitipan->harga)/malam</td>
                                    </tr>
                                </table>
                                <div class="flex">
                                    <div class="w-[600px] mx-6">
                                        <div class="my-4">
                                            <p> Nama Hewan :</p>
                                            <h3>{{$p->nama_hewan}}</h3>
                                        </div>
                                        <div class="my-4">
                                            <p> Tanggal Check In :</p>
                                            <h3>{{$p->tanggal_masuk}}</h3>
                                        </div>
                                        <div class="my-4">
                                            <p> No hp :</p>
                                            <h3>{{$p->no_hp}}</h3>
                                        </div>
                                        <div class="my-4">
                                            <p>Alamat</p>
                                            <p>{{$p->alamat}}</p>
                                        </div>
                                    </div>
                                    <div class="w-[600px] mx-6">
                                        <div class="my-4">
                                            <p> Nama Pemilik :</p>
                                            <h3>{{$p->nama_pemilik}}</h3>
                                        </div>
                                        <div class="my-4">
                                            <p> Tanggal Check Out :</p>
                                            <h3>{{$p->tanggal_keluar}}</h3>
                                        </div>
                                        <div class="my-4">
                                            <p> Jenis Hewan </p>
                                            <h3>{{$p->hewan}}</h3>
                                        </div>
                                        <div class="my-4">
                                            <p>Riwayat penyakit Hewan</p>
                                            <p>{{$p->riwayat_penyakit}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-10 mr-20 mb-40 w-[55%]">
                                    <span class=" text-sm font-bold">Payment Informations</span>
                                    <div class="grid text-sm gap-6 mt-3 mb-6 md:grid-cols-3">
                                        <div class="flex-col w-48">
                                            <div class="text-center text-green-500 text-2xl">
                                                @format($p->total)
                                            </div>
                                            <div class="text-center">
                                                Total Pembayaran
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    @endif
</div>
@endsection

@section('script-manual')
<script>
    function filterContent(status) {
        // Menampilkan semua pesanan
        var pesananItems = document.getElementsByClassName('pesanan-item');
        for (var i = 0; i < pesananItems.length; i++) {
            pesananItems[i].style.display = 'inline';
        }

        // Menyembunyikan pesanan yang tidak sesuai dengan kondisi
        if (status !== 'all') {
            for (var i = 0; i < pesananItems.length; i++) {
                var category = pesananItems[i].getAttribute('data-category');
                var dilayaniStatus = pesananItems[i].getAttribute('data-dilayani');

                if (status === 'unpaid' && category !== 'unpaid') {
                    pesananItems[i].style.display = 'none';
                } else if (status === 'proses' && (dilayaniStatus !== 'proses' || category !== 'paid')) {
                    pesananItems[i].style.display = 'none';
                } else if (status === 'terlayani' && dilayaniStatus !== 'terlayani') {
                    pesananItems[i].style.display = 'none';
                }
            }
        }
    }
</script>
@foreach ($penitipan as $p)
@if ($p->paid == 'unpaid')
<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton{{$p->id}} = document.getElementById('pay-button{{$p->id}}');
    payButton{{$p->id}}.addEventListener('click', function () {
    // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
    window.snap.pay('{{$p->token}}', {
        onSuccess: function(result){
        /* You may add your own implementation here */
        // alert("payment success!");
        window.location.href = '/pesanan/grooming'
        console.log(result);
        },
        onPending: function(result){
        /* You may add your own implementation here */
        alert("wating your payment!"); console.log(result);
        },
        onError: function(result){
        /* You may add your own implementation here */
        alert("payment failed!"); console.log(result);
        },
        onClose: function(){
        /* You may add your own implementation here */
        alert('you closed the popup without finishing the payment');
        }
    })
    });
</script>
@endif
    <script>
        // Get the modal
        var modal{{$p->id}} = document.getElementById("editModal{{$p->id}}");

        // Get the button that opens the modal
        var btn{{$p->id}} = document.getElementById("myBtn{{$p->id}}");

        // Get the <span> element that closes the modal
        var span{{$p->id}} = document.getElementById("close{{$p->id}}");

        // When the user clicks on the button, open the modal
        btn{{$p->id}}.onclick = function() {
            modal{{$p->id}}.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span{{$p->id}}.onclick = function() {
            modal{{$p->id}}.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal{{$p->id}}) {
                modal{{$p->id}}.style.display = "none";
            }
        }
    </script>
@endforeach

@endsection
