@extends('layouts.user.profile')
@section('title') Pesanan Produk @endsection
@section('link-manual')
 <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
 <script type="text/javascript"
 src="https://app.sandbox.midtrans.com/snap/snap.js"
 data-client-key="{{config('midtrans.client_key')}}"></script>
@endsection

@section('pesanan')
@if (!empty($pesanan))
<div class="mt-5">
    @foreach($pesanan as $p)
    <div class="my-2 mx-4 bg-white p-4 pesanan-item" data-category="{{ $p->paid }}">
        <ul>
            @foreach($detail_pesanan as $dp)
                @if($dp->pesanan_id == $p->id)
                    <li>{{ $dp->produk->nama_produk }}</li>
                    <li>{{ $dp->subtotal }}</li>
                @endif
            @endforeach
            @if ($p->paid == 'unpaid')
                <button id="pay-button{{$p->id}}">bayar sekarang</button>
            @endif
        </ul>
    </div>
    @endforeach
</div>
@endif
@endsection

@section('script-manual')
<script>
    function filterContent(category) {
      const items = document.getElementsByClassName('pesanan-item');

      for (let i = 0; i < items.length; i++) {
        const item = items[i];
        const itemCategory = item.getAttribute('data-category');

        if (category === 'all') {
          item.style.display = 'block';
        } else if (itemCategory === category) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
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
