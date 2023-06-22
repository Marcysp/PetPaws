<div class="sidebar close text-slate-700 z-10">
    <div class="logo-details">
        <img src="{{ asset("assets/img/logo-web/petPaws-logo.png") }}" alt="petPaws" class="z-0">
        <span class="logo_name">PetPaws</span>
    </div>
    <ul class="nav-links">
        <li class="hover:bg-pink-400 hover:text-white">
            <a href="/dashboard">
                <i class='bx bx-grid-alt'></i>
                <span class="link_name">Dashboard</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="/dashboard">Dashboard</a></li>
            </ul>
        </li>
        <li class="hover:bg-pink-400 hover:text-white">
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-collection'></i>
                    <span class="link_name">Produk</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Produk</a></li>
                <li><a href="/produk">Daftar Produk</a></li>
                <li><a href="/produk/create">Tambah Produk</a></li>
                <li><a href="/stok">Stok</a></li>
                <li><a href="/kategori">Kategori</a></li>
            </ul>
        </li>
        <li class="hover:bg-pink-400 hover:text-white">
            <a href="/service-paket">
                <i class='bx bx-list-plus'></i>
                <span class="link_name">Paket Service</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="/service-paket">Paket-service</a></li>
            </ul>
        </li>
        <li class="hover:bg-pink-400 hover:text-white">
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-line-chart'></i>
                    <span class="link_name">Pesanan</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Pesanan</a></li>
                <li><a href="/admin/pesanan/produk">Pesanan Produk</a></li>
                <li><a href="/admin/pesanan/grooming">Pesanan Grooming</a></li>
                <li><a href="/admin/pesanan/penitipan">Pesanan Penitipan</a></li>
            </ul>
        </li>
        <li class="hover:bg-pink-400 hover:text-white">
            <a href="#">
                <i class='bx bx-line-chart'></i>
                <span class="link_name">Chart</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Chart</a></li>
            </ul>
        </li>
        <li class="hover:bg-pink-500 hover:text-white">
            <div class="profile-details">
                <div class="profile-content">
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="inline-flex justify-center items-center border border-transparent font-semibold bg-pink-400 text-white hover:bg-pink-500 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-500">
                            <img src="{{ asset("assets/img/team-1.jpg") }}" alt="profileImg">
                        </button>
                    </form>
                </div>
                <div class="name-job">
                    <div class="profile_name text-white">{{Auth::user()->name}}</div>
                    <div class="job">Website Admin</div>
                </div>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit"><i class='bx bx-log-out'></i></button>
                </form>
            </div>
        </li>
    </ul>
</div>
