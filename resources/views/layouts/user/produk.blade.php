@extends('layouts.user.main')
@section('title') produk @endsection
@section('content')

<nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700 mt-24 mx-9">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      {{-- <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li class="hidden">
            <a href="#" onclick="filterContent('all')" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{all</a>
          </li>
          <li>
              <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbarBrand" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Brand <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
              <!-- Dropdown menu -->
              <div id="dropdownNavbarBrand" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                    @foreach ($brand as $b)
                    <li>
                        <a href="#/brand.{{$b->nama_brand}}" onclick="filterContent('{{$b->nama_brand}}')" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$b->nama_brand}}</a>
                      </li>
                    @endforeach
                  </ul>
              </div>
          </li>
          <li>
              <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbarHewan" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Hewan <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
              <!-- Dropdown menu -->
              <div id="dropdownNavbarHewan" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                    @foreach ($hewan as $h)
                    <li>
                        <a href="#/hewan.{{$h->nama_hewan}}" onclick="filterContent('{{$h->nama_hewan}}')" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$h->nama_hewan}}</a>
                    </li>
                    @endforeach
                  </ul>
              </div>
          </li>
          <li>
              <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbarKategori" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Kategori <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
              <!-- Dropdown menu -->
              <div id="dropdownNavbarKategori" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                    @foreach ($kategori as $k)
                    <li>
                        <a href="#/kategori.{{$k->nama_kategori}}" onclick="filterContent('{{$k->nama_kategori}}')" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{$k->nama_kategori}}</a>
                    </li>
                    @endforeach
                  </ul>
              </div>
          </li>
        </ul>
      </div> --}}
      <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
        <div class="flex items-center md:ml-auto md:pr-4">
            <form action="/produk" method="GET">
                <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
                    <span class="text-sm ease-soft leading-5.6 absolute z-[5] -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                        <i class='bx bx-search-alt z-10'></i>
                    </span>
                    <input type="search" name="search" class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow px-10" placeholder="Type here..." />
                  </div>
            </form>
        </div>
      </div>
    </div>
  </nav>

<div class="pt-20 bg-white px-3 md:px-10 mx-auto ">
    <div class="justify-center mx-auto md:max-w-5xl ">
        <div class="grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-5 mx-auto pesanan-item">
            @foreach ($produk as $p)
            <div class="bg-cyan-100 mx-1 mb-2 sm:mb-3 md:mx-4 md:mb-8 max-w-[120px] sm:max-w-[160px] md:max-w-[190px] lg:max-w-[230px] sm:min-h-[170px] md:min-h-[190px] min-h-[150px] pesanan-item" data-category="{{ $p->produk_kategori->nama_kategori }}" data-hewan="{{ $p->kategori_hewan->nama_hewan }}" data-brand="{{ $p->produk_brand->nama_brand}}">
                <a href="#" id="myBtn{{$p->id}}" data-target="#editModal{{$p->id}}" class="group relative z-0">
                    <div class="aspect-h-1 aspect-w-1 w-auto h-32 sm:h-44 md:h-52 overflow-hidden rounded-none bg-white xl:aspect-h-8 xl:aspect-w-7 justify-center">
                        <center><img src="{{ asset("assets/img/imgData/$p->img") }}" alt="{{$p->nama_produk}}" class="h-full w-auto object-cover object-center group-hover:opacity-75"></center>
                    </div>
                    <div class="max-h-[55px] px-1">
                        <h3 class="mt-2 sm:text-base text-xs text-gray-700 text-center">{{Str::words($p->nama_produk, 6)}}</h3>
                    </div>
                    <div class="px-1">
                        <p class="py-1 sm:text-base text-sm font-bold text-gray-900 text-center">@currency($p->harga)</p>
                    </div>
                  </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

@include('layouts.user.detailProduk')
@endsection

@section('script-manual')
{{-- <script>
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
                var brand = pesananItems[i].getAttribute('data-brand');
                var hewan = pesananItems[i].getAttribute('data-hewan');

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
</script> --}}
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
@endforeach
@endsection
