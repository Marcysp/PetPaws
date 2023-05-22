<div class="w-full h-12 fixed">
    <nav class="flex flex-wrap items-center justify-between px-0 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
        <div class="w-full px-6 mx-auto">
            <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
                    <div class="flex leading-normal items-center text-center text-base text-slate-700 hover:text-slate-500 lg:text-left">
                        <img src="{{ asset("assets/img/logo-web/petPaws-logo.png") }}" alt="PetPaws" class="w-20">
                        <h6 class="mb-0 font-bold capitalize text-slate-800"> petPaws.</h6>
                    </div>
                </div>
                <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
                    <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                        <li class="nav-item">
                            <a href="/landing" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-base text-slate-700 hover:text-slate-500">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-base text-slate-700 hover:text-slate-500">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-base text-slate-700 hover:text-slate-500">Service</a>
                        </li>
                        <li class="nav-item">
                            <a href="/produk" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-base text-slate-700 hover:text-slate-500">Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="block px-4 pt-0 pb-1 font-normal transition-colors ease-soft-in-out text-base text-slate-700 hover:text-slate-500">Contact Us</a>
                        </li>

                        @auth
                        <li class="nav-item">
                            <?php
                            $pesanan_utama = \App\Models\Pesanan::where('user_id',Auth::user()->id)->where('status','keranjang')->first();

                            if (!empty($pesanan_utama)) {
                                $notif = \App\Models\Detail_pesanan::where('pesanan_id',$pesanan_utama->id)->count();
                            }
                            ?>
                            <a href="/keranjang" class="block px-4 pt-0 pb-1 font-bold transition-colors ease-soft-in-out text-2xl text-slate-700 hover:text-slate-500"><i class='bx bxs-cart'></i>
                                @if (!empty($notif))
                                <span class="inline-flex items-center rounded-md bg-red-500 px-2 py-1 text-sm font-semibold text-white">{{$notif}}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="block px-4 pt-0 pb-1 font-semibold transition-colors ease-soft-in-out text-base text-slate-700 hover:text-slate-500"><i class='bx bx-log-out'></i>Logout</button>
                            </form>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="/keranjang" class="block px-4 pt-0 pb-1 font-bold transition-colors ease-soft-in-out text-2xl text-slate-700 hover:text-slate-500"><i class='bx bxs-cart'></span></i></a>
                        </li
                        <li class="nav-item">
                            <a href="/login" class="block px-4 pt-0 pb-1 font-semibold transition-colors ease-soft-in-out text-base text-slate-700 hover:text-slate-500"><i class='bx bx-log-in'></i>Login</a>
                        </li>
                        @endauth

                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
