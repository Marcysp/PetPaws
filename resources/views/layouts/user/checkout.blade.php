@extends('layouts.user.profile')
@section('title') Pesanan @endsection

@section('link-manual')
 <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
 <script type="text/javascript"
 src="https://app.sandbox.midtrans.com/snap/snap.js"
 data-client-key="{{config('midtrans.client_key')}}"></script>
@endsection

@section('pesanan')
<div class="container mx-auto mt-2">
    <div class="my-5">
        @foreach ($pesanan as $p)
        <div class="bg-white px-4 py-4 mt-2 mx-3">
            <div class="flex">
                <div>
                    @foreach($detail_pesanan as $dp)
                    @if($dp->pesanan_id == $p->id)
                        <li>{{ $dp->produk->nama_produk }}</li>
                        <li>{{ $dp->subtotal }}</li>
                    @endif
                @endforeach
                    <h5>Pesanan</h5>
                    <p>{{$p->tanggal_pesanan}}</p>
                    <button id="pay-button{{$p->id}}">bayar sekarang</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('script-manual')
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
            window.location.href = '/pesanan'
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
