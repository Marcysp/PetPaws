@extends('layouts.user.main')
@section('title') produk @endsection
@section('content')
<div class="pt-20 bg-white px-3 md:px-10 mx-auto">
    <div class="justify-center mx-auto md:max-w-5xl ">
        <div class="grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-5 mx-auto">
            @foreach ($produk as $p)
            <div class="bg-cyan-100 mx-1 mb-2 sm:mb-3 md:mx-4 md:mb-8 max-w-[120px] sm:max-w-[160px] md:max-w-[190px] lg:max-w-[230px] sm:min-h-[170px] md:min-h-[190px] min-h-[150px] ">
                <a href="#" id="myBtn{{$p->id}}" data-target="#editModal{{$p->id}}" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-auto h-32 sm:h-44 md:h-52 overflow-hidden rounded-none bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                      <img src="{{ asset("assets/img/imgData/$p->img") }}" alt="{{$p->nama_produk}}" class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <h3 class="mt-2 sm:text-base text-xs text-gray-700 text-center">{{$p->nama_produk}}</h3>
                    <p class="py-1 sm:text-base text-sm font-medium text-gray-900 text-center">@currency($p->harga)</p>
                  </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

@include('layouts.user.detailProduk')
@endsection

@section('script-manual')
@foreach ($produk as $p)
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
