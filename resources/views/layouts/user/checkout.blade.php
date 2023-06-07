@extends('layouts.user.main')
@section('title') Pesanan @endsection

@section('link-manual')
 <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
 <script type="text/javascript"
 src="https://app.sandbox.midtrans.com/snap/snap.js"
 data-client-key="{{config('midtrans.client_key')}}"></script>
@endsection

@section('content')
<div class="container mx-auto mt-10">
    <div class="flex shadow-md my-10">
        <div class="w-3/4 bg-white px-10 py-10">
            <div>
                <h5>Pesanan</h5>
                @foreach ($pesanan as $p)
                <p>{{$p->tanggal_pesanan}}</p>
                <button id="pay-button{{$p->id}}">bayar sekarang</button>
                @endforeach
            </div>
        </div>
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
            window.location.href = '/histori'
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
