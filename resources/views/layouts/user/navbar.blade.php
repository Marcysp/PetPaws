<header class="fixed bg-fuchsia-200 top-0 left-0 w-full flex items-center z-50 mx-auto">
    <div class="w-full mx-auto">
        <div class="flex items-center justify-between relative mx-auto">
            <div class="px-4 ml-8 inline-flex text-black">
                <img class="h-14" src="{{ asset("assets/img/logo-web/petPaws-logo.png") }}" alt="">
                <a href="#home" class="font-bold text-lg blo py-4"> PetPaws.</a>
            </div>
            <div class="flex items-center px-1 mx-3">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 sm:right-[10px] lg:hidden">
                    <span class="w-[30px] h-[2px] my-2 block bg-black transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="w-[30px] h-[2px] my-2 block bg-black transition duration-300 ease-in-out"></span>
                    <span class="w-[30px] h-[2px] my-2 block bg-black transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>
                <nav id="nav-menu" class="hidden absolute bg-fuchsia-200 shadow-lg rounded-md w-full right-0 top-full lg:static lg:block lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                    <ul class="block lg:flex">
                        @auth
                        @if(Auth::user()->is_admin == 1)
                        <li class="group">
                            <a href="/landing" class="text-base text-black py-2 mx-4 flex group-hover:text-fuchsia-700">Home</a>
                        </li>
                        <li class="group">
                            <a href="/dashboard" class="text-base text-black py-2 mx-4 flex group-hover:text-fuchsia-700">Dashboard</a>
                        </li>
                        <li class="group">
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbarProfil" class="flex items-center justify-between py-2 pl-3 pr-4 mx-4 my-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 group-hover:text-fuchsia-700 md:p-0 md:w-auto">Welcome, {{ Auth::user()->name }}<svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbarProfil" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <form action="/logout" method="post" class="hover:text-purple-500">
                                            @csrf
                                            <button type="submit" class=" text-base text-black py-2 mx-4 flex"><i class='bx bx-log-out'></i>Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @elseif (Auth::user()->is_admin == 0)
                        <li class="group">
                            <a href="/landing" class="text-base text-black py-2 mx-4 flex group-hover:text-fuchsia-700">Home</a>
                        </li>
                        <li class="group">
                            <a href="#profile" class="text-base text-black py-2 mx-4 flex group-hover:text-fuchsia-700">Profile</a>
                        </li>
                        <li class="group">
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbarService" class="flex items-center justify-between py-2 pl-3 pr-4 mx-4 my-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 group-hover:text-fuchsia-700 md:p-0 md:w-auto">Service<svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbarService" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        @if (Request::is('landing'))
                                            <a href="#service" class="block px-4 py-2 hover:text-purple-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Our Service :</a>
                                        @else
                                            <a href="/landing#service" class="block px-4 py-2 hover:text-purple-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Our Service :</a>
                                        @endif
                                    </li>
                                    <li>
                                        <a href="/grooming" class="block px-4 py-2 hover:text-purple-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Grooming</a>
                                    </li>
                                    <li>
                                        <a href="/penitipan" class="block px-4 py-2 hover:text-purple-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Penitipan</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="group">
                            <a href="/produk" class="text-base text-black py-2 mx-4 flex group-hover:text-fuchsia-700">Product</a>
                        </li>
                        <li class="group">
                            <a href="#contact-us" class="text-base text-black py-2 mx-4 flex group-hover:text-fuchsia-700">Contact Us</a>
                        </li>
                        <li class="group">
                            <?php
                            $pesanan_utama = \App\Models\Pesanan::where('user_id',Auth::user()->id)->where('status','keranjang')->first();

                            if (!empty($pesanan_utama)) {
                                $notif = \App\Models\Detail_pesanan::where('pesanan_id',$pesanan_utama->id)->count();
                            }
                            ?>
                            <a href="/keranjang" class="text-base text-black py-2 mx-4 flex group-hover:text-fuchsia-700"><i class='bx bxs-cart text-2xl'></i>
                                @if (!empty($notif))
                                <span class="inline-flex items-center rounded-md bg-red-500 px-2 py-1 text-sm font-semibold text-white">{{$notif}}</span>
                                @endif
                            </a>
                        </li>
                        <li class="group">
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbarProfil" class="flex items-center justify-between py-2 pl-3 pr-4 mx-4 my-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 group-hover:text-fuchsia-700 md:p-0 md:w-auto"><i class='bx bxs-user text-2xl'></i><svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbarProfil" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="/pesanan/produk" class="block px-4 py-2 hover:text-purple-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pesanan Produk</a>
                                    </li>
                                    <li>
                                        <a href="/pesanan/grooming" class="block px-4 py-2 hover:text-purple-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pesanan Grooming</a>
                                    </li>
                                    <li>
                                        <a href="/pesanan/penitipan" class="block px-4 py-2 hover:text-purple-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Rekap Penitipan</a>
                                    </li>
                                    <div class="py-1 hover:bg-gray-100">
                                        <form action="/logout" method="post" class="hover:text-purple-500">
                                            @csrf
                                            <button type="submit" class=" text-base text-black py-2 mx-4 flex"><i class='bx bx-log-out'></i>Logout</button>
                                        </form>
                                    </div>
                                </ul>
                            </div>
                        </li>
                        @endif
                        @else
                        <li class="group">
                            <a href="/landing" class="text-base text-black py-2 mx-4 flex group-hover:text-fuchsia-700">Home</a>
                        </li>
                        <li class="group">
                            @if (Request::is('landing'))
                                <a href="#profile" class="block px-4 py-2 hover:text-purple-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                            @else
                                <a href="/landing#profile" class="block px-4 py-2 hover:text-purple-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile:</a>
                            @endif
                        </li>
                        <li class="group">
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbarService" class="flex items-center justify-between py-2 pl-3 pr-4 mx-4 my-2 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 group-hover:text-fuchsia-700 md:p-0 md:w-auto">Service<svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbarService" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        @if (Request::is('landing'))
                                            <a href="#service" class="block px-4 py-2 hover:text-purple-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Our Service :</a>
                                        @else
                                            <a href="/landing#service" class="block px-4 py-2 hover:text-purple-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Our Service :</a>
                                        @endif
                                    </li>
                                    <li>
                                        <a href="/grooming" class="block px-4 py-2 hover:text-purple-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Grooming</a>
                                    </li>
                                    <li>
                                        <a href="/penitipan" class="block px-4 py-2 hover:text-purple-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Penitipan</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="group">
                            <a href="/produk" class="text-base text-black py-2 mx-4 flex group-hover:text-fuchsia-700">Product</a>
                        </li>
                        <li class="group">
                            <a href="#contact-us" class="text-base text-black py-2 mx-4 flex group-hover:text-fuchsia-700">Contact Us</a>
                        </li>
                        <li class="group">
                            <a href="/keranjang" class="text-base text-black py-2 mx-4 flex group-hover:text-fuchsia-700"><i class='bx bxs-cart text-2xl'></i></a>
                        </li>
                        <li class="group">
                            <a href="/login" class="text-base text-black py-2 mx-4 flex group-hover:text-fuchsia-700"><i class='bx bxs-user text-2xl'></i></a>
                        </li>
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
