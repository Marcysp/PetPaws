@extends('layouts.admin.main')
@section('title') Produk @endsection
@section('href') # @endsection
@section('title-nav-1') Produk @endsection
@section('title-nav-2') Daftar Produk @endsection
@section('content')
<div class="rounded-xl mx-10 my-4 p-6 bg-white min-w-fit">
    <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
        <button type="button" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-full border border-transparent font-semibold bg-pink-400 text-white hover:bg-pink-500 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-500">
            <a href="/produk/create">Tambah Produk</a>
        </button>
        <div class="flex items-center md:ml-auto md:pr-4">
            <form action="/produk" method="GET">
                <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                    <span class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                        <i class='bx bx-search-alt z-10'></i>
                    </span>
                    <input type="search" name="search" class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Type here..." />
                  </div>
            </form>
        </div>
      </div>

    <table class="p-4 my-5 text-center w-full">
        <tr class="p-2 h-10 text-slate-800 divide-y-2 divide-y-reverse divide-slate-500">
            <th class="w-1/12">No</th>
            <th class="w-1/5">Gambar</th>
            <th class="w-1/5">nama</th>
            <th class="w-2/6">harga</th>
            <th class="w-2/6">Aksi</th>
        </tr>
        <?php  $i = 0?>
        @foreach ($produk as $p)
        <tr class="py-6 my-6 h-16 divide-y-2 divide-y-reverse text-slate-700 divide-gray-200">
            <td>{{++$i}}</td>
            <td><center><div class="h-16 rounded-lg w-24 overflow-hidden grid items-center"><img class="rounded-lg object-center object-fill" src="{{ asset("assets/img/imgData/$p->img") }}" alt="{{$p->nama_produk}}"></div></center></td>
            <td>{{$p->nama_produk}}</td>
            <td>{{$p->harga}}</td>
            <td><button class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-amber-500 text-white hover:bg-amber-600 focus:outline-none focus:ring-0"><a href="/produk/{{$p->id}}/edit"><i class='bx bx-message-square-edit'></i></a></button>
                <button id="myBtn{{$p->id}}" data-target="#detailProduk{{$p->id}}" class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:ring-0"><a href="#"><i class='bx bxs-detail'></i></a></button>
                <button class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:ring-0"><a href="/produk/delete/{{$p->id}}"><i class='bx bxs-trash'></i></a></button>
                </td>
        </tr>
        {{-- Modal --}}
        <div id="editModal{{$p->id}}" class="modal-manual fade myModal" tabindex="-1" role="dialog">
            <div class="modal-content-manual" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{$p->nama_produk}}</h5>
                        <span class="close-manual" id="close{{$p->id}}">&times;</span>
                    </div>
                    <div class="flex">
                        <div class="w-2/5 mx-6">
                            <label for="" class="block text-sm font-medium leading-4 text-slate-800 mt-4 mb-3">{{$p->produk_brand->nama_brand}}</label>
                            <input type="text" name="nama_produk" required  value="{{$p->nama_produk}}" class="block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3" ><br>
                            <label for="" class="block text-sm font-medium leading-6 text-slate-800 mb-3">Harga</label>
                            <input type="text" name="harga" required value="{{$p->harga}}" class="block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3"><br>
                            <label for="" class="block text-sm font-medium leading-6 text-slate-800 mb-3">Gambar</label>
                            <input type="file" name="img" value="{{$p->img}}" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px- file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-pink-50 file:text-pink-400 hover:file:bg-pink-100"><br>
                        </div>
                        <div class="mx-10 w-3/5">
                            <label for="" class="block text-sm font-medium leading-6 text-slate-800">Deskripsi</label>
                            <textarea name="deskripsi" required cols="30" rows="5" class="block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3">{{$p->deskripsi}}</textarea>
                            <button type="button" class="my-6 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-lg border border-transparent font-semibold bg-pink-400 text-white hover:bg-pink-500 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-500">
                                <input type="submit" name="submit" value="Save" class="cursor-pointer">
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </table>
</div>
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
