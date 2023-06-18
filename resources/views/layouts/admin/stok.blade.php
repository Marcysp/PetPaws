@extends('layouts.admin.main')
@section('title') Stok @endsection
@section('href') # @endsection
@section('title-nav-1') Produk @endsection
@section('title-nav-2') Stok @endsection
@section('content')

<div class="flex flex-col md:flex-row gap-4 justify-around mx-4">
    <div class="bg-white w-full p-2 rounded-lg">
        <h3 class="text-red-500 p-3 font-semibold"><i class='bx bx-alarm-exclamation px-1'></i> Stok hampir habis!</h3>
        <table class="py-2 my-2 text-center w-full">
            <tr class="p-3 h-8 text-slate-800 divide-y-2 divide-y-reverse divide-slate-500">
                <th class="w-1/12">No</th>
                <th class="w-3/12">Gambar</th>
                <th class="w-4/12">Nama</th>
                <th class="w-1/12">Stok</th>
                <th class="w-5/12">Aksi</th>
            </tr>
            <?php  $i = 0?>
            @foreach ($produk as $p)
            @if ($p->stok <= 5)
            <tr class="py-6 my-6 h-10 divide-y-2 divide-y-reverse text-slate-700 divide-gray-200 overflow-hidden">
                <td>{{++$i}}</td>
                <td><center><div class="h-10 rounded-lg w-16 overflow-hidden grid place-items-center"><img class="rounded-lg object-center object-fill" src="{{ asset("assets/img/imgData/$p->img") }}" alt="{{$p->nama_produk}}"></div></center></td>
                <td>{{Str::words($p->nama_produk, 5)}}</td>
                <td>{{$p->stok}}</td>
                <td>
                    <button id="myBtn{{$p->id}}" data-target="#editModal{{$p->id}}" class=" py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-amber-500 text-white hover:bg-amber-600 focus:outline-none focus:ring-0">edit</button>
                </td>
            </tr>
            @endif

            @endforeach
        </table>
    </div>
    <div class="bg-white w-full p-2 rounded-lg">
        <h3 class="text-blue-500 p-3 font-semibold"><i class='bx bx-check-shield'></i></i> Stok Tersedia</h3>
        <table class="py-2 my-2 text-center w-full">
            <tr class="p-3 h-8 text-slate-800 divide-y-2 divide-y-reverse divide-slate-500">
                <th class="w-1/12">No</th>
                <th class="w-3/12">Gambar</th>
                <th class="w-4/12">Nama</th>
                <th class="w-1/12">Stok</th>
                <th class="w-5/12">Aksi</th>
            </tr>
            <?php  $i = 0?>
            @foreach ($produk as $p)
            @if ($p->stok > 5)
            <tr class="py-6 my-6 h-10 divide-y-2 divide-y-reverse text-slate-700 divide-gray-200 overflow-hidden">
                <td>{{++$i}}</td>
                <td><center><div class="h-10 rounded-lg w-16 overflow-hidden grid place-items-center"><img class="rounded-lg object-center object-fill" src="{{ asset("assets/img/imgData/$p->img") }}" alt="{{$p->nama_produk}}"></div></center></td>
                <td>{{Str::words($p->nama_produk, 5)}}</td>
                <td>{{$p->stok}}</td>
                <td>
                    <button id="myBtn{{$p->id}}" data-target="#editModal{{$p->id}}" class=" py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-amber-500 text-white hover:bg-amber-600 focus:outline-none focus:ring-0">edit</button>
                    {{-- <button id="myBtn">Open Modal</button> --}}
                </td>

            </tr>
            @endif

            @endforeach
        </table>
    </div>
</div>
@include('layouts.admin.edit-stok-modal')
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
