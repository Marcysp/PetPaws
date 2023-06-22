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
    @if (!empty($pesanan))
    <div class="mt-5">
        @foreach($pesanan as $p)
        <div class="my-2 mx-4 bg-white p-4 pesanan-item px-14" data-category="{{ $p->paid }}" data-status="{{ $p->status }}" data-dilayani="{{ $p->dilayani}}">
            <table class="text-sm text-left text-gray-500 dark:text-gray-400 w-full">
                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                    <tr>
                        <th scope="col" class="pr-6 py-3">
                            Product Detail
                        </th>
                        <th scope="col" class="px-6 py-3 w-96">
                            <span>Nama</span>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total
                        </th>
                    </tr>
                </thead>
                <tbody >
                    @foreach($detail_pesanan as $dp)
                    @if($dp->pesanan_id == $p->id)
                        @if ($dp->produk->trashed())
                            <tr>
                                <td class="pl-1 pr-4 py-4">
                                    <img src="{{asset("assets/img/imgData/".$trashProduk->where('id', $dp->produk_id)->first()->img)}}" alt="img" class="w-12">
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                    <div>{{ $trashProduk->where('id', $dp->produk_id)->first()->nama_produk }}</div>
                                    <div>x{{$dp->qty}}</div>
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                    @currency($trashProduk->where('id', $dp->produk_id)->first()->harga)
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                    @currency($dp->subtotal)
                                </td>
                            </tr>
                        @else
                        <tr>
                            <td class="pl-1 pr-4 py-4">
                                <img src="{{asset("assets/img/imgData/".$dp->produk->img)}}" alt="img" class="w-12">
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                <div>{{$dp->produk->nama_produk}}</div>
                                <div>x{{$dp->qty}}</div>
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                @currency($dp->produk->harga)
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                @currency($dp->subtotal)
                            </td>
                        </tr>
                        @endif
                    @endif
                @endforeach
                </tbody>
            </table>
            @if ($p->paid == 'unpaid')
            <div class="flex justify-end border-t-0">
                <div class="px-6 start-0 my-auto font-semibold left-0 w-2/5">{{ \Carbon\Carbon::parse($p->tanggal_pesanan)->format('d-m-Y') }}</div>
                <div class="px-6 my-auto font-bold">Total Pesanan</div>
                <div class="px-6 my-auto font-bold">@currency($p->total)</div>
                <div class="pl-6 pr-2">
                    <button type="button" id="pay-button{{$p->id}}" class="text-white bg-rose-700 hover:bg-rose-800 focus:ring-4 focus:ring-rose-300 font-medium rounded-lg text-sm px-5 py-2.5 my-5 mr-2">Bayar Sekarang</button>
                </div>
            </div>
            {{-- @else
            <div class="flex justify-end border-t-0 ">
                <div class="px-6 start-0 my-auto font-semibold left-0 w-2/5">{{ \Carbon\Carbon::parse($p->tanggal_pesanan)->format('d-m-Y') }}</div>
                <div class="px-6 my-auto font-bold">Total Pesanan</div>
                <div class="px-6 my-auto font-bold">@currency($p->total)</div>
                <div class="pl-6 pr-2">
                    <button type="button" class="text-white bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 my-5 mr-2">Review</button>
                </div>
            </div> --}}

            @endif
        </div>
        @endforeach
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
            pesananItems[i].style.display = 'block';
        }

        // Menyembunyikan pesanan yang tidak sesuai dengan kondisi
        if (status !== 'all') {
            for (var i = 0; i < pesananItems.length; i++) {
                var category = pesananItems[i].getAttribute('data-category');
                var pesananStatus = pesananItems[i].getAttribute('data-status');
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
    @foreach ($pesanan as $p)
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton{{$p->id}} = document.getElementById('pay-button{{$p->id}}');
        payButton{{$p->id}}.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{$p->token}}', {
            onSuccess: function(result){
            /* You may add your own implementation here */
            // alert("payment success!");
            window.location.href = '/pesanan/produk'
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
    @endforeach
@endsection
