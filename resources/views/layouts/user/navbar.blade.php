<header class="fixed bg-purple-200  top-0 left-0 w-full flex items-center z-10 mx-auto">
    <div class="w-full mx-auto">
        <div class="flex items-center justify-between relative mx-auto">
            <div class="px-4 ml-8 inline-flex text-black">
                <img class="h-14" src="{{ asset("assets/img/logo-web/petPaws-logo.png") }}" alt="">
                <a href="#home" class="font-bold text-lg blo py-6"> PetPaws.</a>
            </div>
            <div class="flex items-center px-1 mx-3">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 sm:right-[10px] lg:hidden">
                    <span class="w-[30px] h-[2px] my-2 block bg-black transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="w-[30px] h-[2px] my-2 block bg-black transition duration-300 ease-in-out"></span>
                    <span class="w-[30px] h-[2px] my-2 block bg-black transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>
                <nav id="nav-menu" class="hidden absolute bg-purple-200 shadow-lg rounded-md w-full right-0 top-full lg:static lg:block lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="/landing" class="text-base text-black py-2 mx-4 flex group-hover:text-purple-700">Home</a>
                        </li>
                        <li class="group">
                            <a href="#profile" class="text-base text-black py-2 mx-4 flex group-hover:text-purple-700">Profile</a>
                        </li>
                        <li class="group">
                            <a href="#service" class="text-base text-black py-2 mx-4 flex group-hover:text-purple-700">Service</a>
                        </li>
                        <li class="group">
                            <a href="/produk" class="text-base text-black py-2 mx-4 flex group-hover:text-purple-700">Product</a>
                        </li>
                        <li class="group">
                            <a href="#contact-us" class="text-base text-black py-2 mx-4 flex group-hover:text-purple-700">Contact Us</a>
                        </li>
                        @auth
                        <li class="group">
                            <?php
                            $pesanan_utama = \App\Models\Pesanan::where('user_id',Auth::user()->id)->where('status','keranjang')->first();

                            if (!empty($pesanan_utama)) {
                                $notif = \App\Models\Detail_pesanan::where('pesanan_id',$pesanan_utama->id)->count();
                            }
                            ?>
                            <a href="/keranjang" class="text-base text-black py-2 mx-4 flex group-hover:text-purple-700"><i class='bx bxs-cart text-2xl'></i>
                                @if (!empty($notif))
                                <span class="inline-flex items-center rounded-md bg-red-500 px-2 py-1 text-sm font-semibold text-white">{{$notif}}</span>
                                @endif
                            </a>
                        </li>
                        <li class="group">
                            <a href="/profile"><button class="text-base text-black py-2 mx-4 flex group-hover:text-purple-700"><i class='bx bxs-user text-2xl'></i></button></a>

                            {{-- <form action="/profile" method="post">
                                @csrf
                                <button type="submit" class="text-base text-black py-2 mx-4 flex group-hover:text-purple-700"><i class='bx bxs-user text-2xl'></i>Logout</button>
                            </form> --}}
                        </li>
                        @else
                        <li class="group">
                            <a href="/keranjang" class="text-base text-black py-2 mx-4 flex group-hover:text-purple-700"><i class='bx bxs-cart text-2xl'></i></a>
                        </li>
                        <li class="group">
                            <a href="/login" class="text-base text-black py-2 mx-4 flex group-hover:text-purple-700"><i class='bx bxs-user text-2xl'></i></a>
                        </li>
                        @endauth
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
