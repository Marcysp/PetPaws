@extends('layouts.admin.main')
@section('title') Service @endsection
@section('href') # @endsection
@section('title-nav-1') Paket @endsection
@section('title-nav-2') Kategori @endsection
@section('content')
<div class="flex min-w-fit">
    <div class="w-1/2">
        <div class="px-4">
            <button id="myBtnG" data-target="#editgrooming" class="my-1 py-2 px-3 inline-flex justify-center items-center gap-2 rounded-lg border border-transparent font-semibold bg-pink-400 text-white hover:bg-pink-500  transition-all text-sm w-full">Tambah Paket Grooming</button>
        </div>
        <div class="bg-white rounded-xl mx-4 my-4 p-3 text-slate-700">
            <table class="py-4 my-5 text-center">
                <tr class="p-5 h-10 text-slate-800 divide-y-2 divide-y-reverse divide-slate-500">
                    <th class="w-12">No</th>
                    <th class="w-7/12">Paket Grooming</th>
                    <th class="w-1/5">harga</th>
                    <th class="w-1/5">Aksi</th>
                </tr>
                <?php  $n = 0?>
                @foreach ($paket_grooming as $g)
                <tr class="py-6 my-6 h-16 divide-y-2 divide-y-reverse text-slate-700 divide-gray-200 overflow-hidden">
                    <td>{{++$n}}</td>
                    <td>{{$g->jenis_grooming}}</td>
                    <td>{{$g->harga}}</td>
                    <td><button id="myBtnG{{$g->id}}" data-target="#editgrooming{{$g->id}}" class="show-modal py-0 px-1 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-amber-500 text-white hover:bg-amber-600 focus:outline-none focus:ring-0 text-xl"><a href="#"><i class='bx bx-message-square-edit'></i></a></button>
                        <button id="myBtnGdetail{{$g->id}}" data-target="#detailGrooming{{$g->id}}" class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:ring-0"><a href="#"><i class='bx bxs-detail'></i></a></button>
                        <button class="py-0 px-1 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-0 text-xl"><a href="/service-paket/grooming/delete/{{$g->id}}"><i class='bx bxs-trash'></i></a></button></td>
                </tr>
                {{-- Modal edit--}}
                <div class="pt-20 bg-white px-3 md:px-10 modal-manual fade myModal" id="editGrooming{{$g->id}}">
                    <div class="relative z-10" role="dialog" aria-modal="true">
                        <div class="fixed inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block"></div>

                        <div class="fixed inset-0 z-10 overflow-y-auto">
                            <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">
                                <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
                                    <div class="relative w-full items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                                        <button type="button" class="absolute rigth-4 top-4 text-gray-500 hover:text-gray-600 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8">
                                        <span class="sr-only">Close</span>
                                        <span class="close-manual" id="closeG{{$g->id}}">&times;</span>
                                        </button>

                                        <div class="w-full sm:items-start gap-x-6 gap-y-8 lg:gap-x-8 mx-auto md:justify-items-start justify-items-center">
                                            <form action="{{ route('paket-grooming.update', $g->id) }}" method="POST">
                                                @method('put')
                                                @csrf
                                                <label for="">Jenis Grooming</label><br>
                                                <input type="text" required name="jenis_grooming" value="{{$g->jenis_grooming}}" class="block w-11/12 rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3"><br>
                                                <label for="">Harga</label><br>
                                                <input type="text" required name="harga" value="{{$g->harga}}" class="block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3"><br>
                                                <label for="">Deskripsi</label><br>
                                                <textarea name="deskripsi_penanganan" required cols="30" rows="5" class="block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3">{{$g->deskripsi_penanganan}}</textarea>
                                                <label for="">Layanan untuk</label><br>
                                                <select required class="form-select cursor-pointer block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3" aria-label="Default select example" name="hewan">
                                                    <option>Brand Produk</option>
                                                    <option value="anjing" @if ($g->hewan === 'anjing') selected @endif>Anjing</option>
                                                    <option value="kucing" @if ($g->hewan ==='kucing') selected @endif>Kucing</option>
                                                </select><br>
                                                <button type="submit" class="btn btn-primary my-6 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-lg border border-transparent font-semibold bg-pink-400 text-white hover:bg-pink-500 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-500">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Modal tambah--}}
                <div id="tambahGrooming" class="modal-manual fade myModal" tabindex="-1" role="dialog">
                    <div class="modal-content-manual" role="document">
                        <div class="modal-content">
                            <div class="modal-header mb-4 font-semibold text-lg">
                                <h3 class="modal-title">Edit Grooming</h3>
                                <span class="close-manual" id="closeG">&times;</span>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('paket-grooming.store') }}" method="POST">
                                    @method('put')
                                    @csrf
                                    <label for="">Jenis Grooming</label><br>
                                    <input type="text" required name="jenis_grooming" class="block w-11/12 rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3"><br>
                                    <label for="">Harga</label><br>
                                    <input type="text" required name="harga"  class="block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3"><br>
                                    <label for="">Deskripsi</label><br>
                                    <textarea name="deskripsi_penanganan" required cols="30" rows="5" class="block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3"></textarea><br>
                                    <label for="">Layanan untuk</label><br>
                                    <select required class="form-select cursor-pointer block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3" aria-label="Default select example" name="hewan">
                                        <option selected>Brand Produk</option>
                                        <option value="anjing">Anjing</option>
                                        <option value="kucing">Kucing</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary my-4 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-lg border border-transparent font-semibold bg-pink-400 text-white hover:bg-pink-500 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-500">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Modal detail--}}
                <div id="detailGrooming{{$g->id}}" class="pt-20 bg-white px-3 md:px-10 modal-manual fade myModal">
                    <div class="relative z-10" role="dialog" aria-modal="true">
                        <div class="fixed inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block"></div>

                        <div class="fixed inset-0 z-10 overflow-y-auto">
                            <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">
                                <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
                                    <div class="relative flex w-full items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                                        <button type="button" class="absolute rigth-4 top-4 text-gray-500 hover:text-gray-600 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8">
                                        <span class="sr-only">Close</span>
                                        <span class="close-manual" id="closeGdetail{{$g->id}}">&times;</span>
                                        </button>

                                        <div class="grid w-full grid-cols-1 sm:items-start gap-x-6 gap-y-8 sm:grid-cols-12 lg:gap-x-2 mx-auto md:justify-items-start justify-items-center">
                                            <div class="sm:col-span-4 lg:col-span-5 w-56 h-48">
                                                <div class="aspect-h-3 aspect-w-2 overflow-hidden rounded-lg py-5 sm:col-span-4 lg:col-span-5">
                                                    <h2 class="text-2xl font-bold text-gray-900 sm:pr-12 text-center md:text-left px-4">{{$g->jenis_grooming}}</h2>
                                                    <p class="ml-4 mt-5 text-2xl text-gray-900 text-center md:text-left">@currency($g->harga)
                                                </div>
                                            </div>
                                            <div class="sm:col-span-8 lg:col-span-6 pr-4">
                                                <section aria-labelledby="information-heading" class="mt-2">
                                                    <p>{{$g->deskripsi_penanganan}}</p>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div id="detailGrooming{{$g->id}}" class="modal-manual fade myModal" tabindex="-1" role="dialog">
                    <div class="modal-content-manual" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Nama Kategori</h5>
                                <span class="close-manual" id="closeGdetail{{$g->id}}">&times;</span>
                            </div>
                            <div class="modal-body">
                                <h2>detail paket grooming</h2>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </table>
        </div>
    </div>
    <div class="w-1/2">
        <div class="px-4">
            <button id="myBtn" data-target="#tambahPenitipan" class="my-1 py-2 px-3 inline-flex justify-center items-center gap-2 rounded-lg border border-transparent font-semibold bg-pink-400 text-white hover:bg-pink-500  transition-all text-sm w-full">Tambah Paket Penitipan</button>
        </div>
        <div class="bg-white rounded-xl mx-4 my-4 p-3 text-slate-700">
            <table class="py-4 my-5 text-center">
                <tr class="p-5 h-10 text-slate-800 divide-y-2 divide-y-reverse divide-slate-500 text-center">
                    <th class="w-12">No</th>
                    <th class="w-7/12">Jenis Penitipan</th>
                    <th class="w-1/5">Harga</th>
                    <th class="w-1/5">aksi</th>
                </tr>
                <?php  $i = 0?>
                @foreach ($paket_penitipan as $p)
                <tr class="py-6 my-6 h-16 divide-y-2 divide-y-reverse text-slate-700 divide-gray-200 overflow-hidden">
                    <td>{{++$i}}</td>
                    <td>{{$p->jenis_penitipan}}</td>
                    <td>{{$p->harga}}</td>
                    <td><button id="myBtnP{{$p->id}}" data-target="#editPenitipan{{$p->id}}" class="py-0 px-1 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-amber-500 text-white hover:bg-amber-600 focus:outline-none focus:ring-0 text-xl"><a href="#"><i class='bx bx-message-square-edit'></i></a></button>
                        <button id="myBtnPdetail{{$p->id}}" data-target="#detailPenitipan{{$p->id}}" class="py-1 px-2 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:ring-0"><a href="#"><i class='bx bxs-detail'></i></a></button>
                        <button class="py-0 px-1 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-0 text-xl"><a href="/service-paket/penitipan/delete/{{$p->id}}"><i class='bx bxs-trash'></i></a></button></td>
                </tr>
                {{-- Modal edit--}}
                 <div class="pt-20 bg-white px-3 md:px-10 modal-manual fade myModal" id="editPenitipan{{$p->id}}">
                    <div class="relative z-10" role="dialog" aria-modal="true">
                        <div class="fixed inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block"></div>

                        <div class="fixed inset-0 z-10 overflow-y-auto">
                            <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">
                                <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
                                    <div class="relative w-full items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                                        <button type="button" class="absolute rigth-4 top-4 text-gray-500 hover:text-gray-600 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8">
                                        <span class="sr-only">Close</span>
                                        <span class="close-manual" id="closeP{{$p->id}}">&times;</span>
                                        </button>

                                        <div class="w-full sm:items-start gap-x-6 gap-y-8 lg:gap-x-8 mx-auto md:justify-items-start justify-items-center">
                                            <form action="{{ route('paket-penitipan.update', $p->id) }}" method="POST">
                                                @method('put')
                                                @csrf
                                                <label for="">Jenis Penitipan</label><br>
                                                <input type="text" required name="jenis_penitipan" value="{{$p->jenis_penitipan}}" class="block w-11/12 rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3"><br>
                                                <label for="">Harga</label><br>
                                                <input type="text" required name="harga" value="{{$p->harga}}" class="block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3"><br>
                                                <label for="">Deskripsi</label><br>
                                                <textarea name="deskripsi_layanan" required cols="30" rows="5" class="block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3">{{$p->deskripsi_layanan }}</textarea><br>
                                                <label for="">Layanan untuk</label><br>
                                                <select required class="form-select cursor-pointer block w-full rounded-md border-0 py-1.5 text-slate-800 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-400 sm:text-sm sm:leading-6 mr-2 outline-none px-3" aria-label="Default select example" name="hewan">
                                                    <option>Brand Produk</option>
                                                    <option value="anjing" @if ($p->hewan == 'anjing') selected @endif>Anjing</option>
                                                    <option value="kucing" @if ($p->hewan == 'kucing') selected @endif>Kucing</option>
                                                </select>
                                                <button type="submit" class="btn btn-primary my-4 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-lg border border-transparent font-semibold bg-pink-400 text-white hover:bg-pink-500 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-500">Simpan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Modal tambah--}}
                <div id="tambahPenitipan" class="modal-manual fade myModal" tabindex="-1" role="dialog">
                    <div class="modal-content-manual" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Kategori Hewan</h5>
                                <span class="close-manual" id="close">&times;</span>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('paket-penitipan.store')}}" method="POST">
                                    @method('put')
                                    @csrf
                                    <label for="">Nama hewan</label><br>
                                    <input type="text" required name="nama_hewan" value="{{$p->nama_hewan}}"><br>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Modal detail--}}
                <div id="detailPenitipan{{$p->id}}" class="pt-20 bg-white px-3 md:px-10 modal-manual fade myModal">
                    <div class="relative z-10" role="dialog" aria-modal="true">
                        <div class="fixed inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block"></div>

                        <div class="fixed inset-0 z-10 overflow-y-auto">
                            <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">
                                <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
                                    <div class="relative flex w-full items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                                        <button type="button" class="absolute rigth-4 top-4 text-gray-500 hover:text-gray-600 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8">
                                        <span class="sr-only">Close</span>
                                        <span class="close-manual" id="closePdetail{{$p->id}}">&times;</span>
                                        </button>

                                        <div class="grid w-full grid-cols-1 sm:items-start gap-x-6 gap-y-8 sm:grid-cols-12 lg:gap-x-2 mx-auto md:justify-items-start justify-items-center">
                                            <div class="sm:col-span-4 lg:col-span-5 w-56 h-48">
                                                <div class="aspect-h-3 aspect-w-2 overflow-hidden rounded-lg py-5 sm:col-span-4 lg:col-span-5">
                                                    <h2 class="text-2xl font-bold text-gray-900 sm:pr-12 text-center md:text-left px-4">{{$p->jenis_penitipan}}</h2>
                                                    <p class="ml-4 mt-5 text-2xl text-gray-900 text-center md:text-left">@currency($p->harga)
                                                </div>
                                            </div>
                                            <div class="sm:col-span-8 lg:col-span-6 pr-4">
                                                <section aria-labelledby="information-heading" class="mt-2">
                                                    <p>{{$p->deskripsi_layanan}}</p>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection

@section('script-manual')
<script>
var modalP = document.getElementById("tambahPenitipan");
var btnP = document.getElementById("myBtn");
var spanP = document.getElementById("close");

btnP.onclick = function() {
    modalP.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanP.onclick = function() {
    modalP.style.display = "none";
}


var modalG = document.getElementById("tambahGrooming");
var btnG = document.getElementById("myBtnG");
var spanG = document.getElementById("closeG");

btnG.onclick = function() {
    modalG.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanG.onclick = function() {
    modalG.style.display = "none";
}
</script>
@foreach ($paket_penitipan as $p)
<script>
var modalP{{$p->id}} = document.getElementById("editPenitipan{{$p->id}}");

// Get the button that opens the modal
var btnP{{$p->id}} = document.getElementById("myBtnP{{$p->id}}");

// Get the <span> element that closes the modal
var spanP{{$p->id}} = document.getElementById("closeP{{$p->id}}");

// When the user clicks on the button, open the modal
btnP{{$p->id}}.onclick = function() {
    modalP{{$p->id}}.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanP{{$p->id}}.onclick = function() {
    modalP{{$p->id}}.style.display = "none";
}

var modalPdetail{{$p->id}} = document.getElementById("detailPenitipan{{$p->id}}");

// Get the button that opens the modal
var btnPdetail{{$p->id}} = document.getElementById("myBtnPdetail{{$p->id}}");

// Get the <span> element that closes the modal
var spanPdetail{{$p->id}} = document.getElementById("closePdetail{{$p->id}}");

// When the user clicks on the button, open the modal
btnPdetail{{$p->id}}.onclick = function() {
    modalPdetail{{$p->id}}.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanPdetail{{$p->id}}.onclick = function() {
    modalPdetail{{$p->id}}.style.display = "none";
}

</script>
@endforeach

@foreach ($paket_grooming as $g)
<script>
 // Get the modal
 var modalG{{$g->id}} = document.getElementById("editGrooming{{$g->id}}");

// Get the button that opens the modal
var btnG{{$g->id}} = document.getElementById("myBtnG{{$g->id}}");

// Get the <span> element that closes the modal
var spanG{{$g->id}} = document.getElementById("closeG{{$g->id}}");

// When the user clicks on the button, open the modal
btnG{{$g->id}}.onclick = function() {
    modalG{{$g->id}}.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanG{{$g->id}}.onclick = function() {
    modalG{{$g->id}}.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalG{{$g->id}}) {
        modalG{{$g->id}}.style.display = "none";
    }
}
 // Get the modal
var modalGdetail{{$g->id}} = document.getElementById("detailGrooming{{$g->id}}");

// Get the button that opens the modal
var btnGdetail{{$g->id}} = document.getElementById("myBtnGdetail{{$g->id}}");

// Get the <span> element that closes the modal
var spanGdetail{{$g->id}} = document.getElementById("closeGdetail{{$g->id}}");

// When the user clicks on the button, open the modal
btnGdetail{{$g->id}}.onclick = function() {
    modalGdetail{{$g->id}}.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanGdetail{{$g->id}}.onclick = function() {
    modalGdetail{{$g->id}}.style.display = "none";
}
</script>
@endforeach
@endsection
