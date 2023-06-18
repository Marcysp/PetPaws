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
                    <span class="link_name">Service</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Service</a></li>
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
        <li class="hover:bg-pink-400 hover:text-white">
            <div class="iocn-link">
                <a href="#">
                    <i class='bx bx-plug'></i>
                    <span class="link_name">Plugins</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="#">Plugins</a></li>
                <li><a href="#">UI Face</a></li>
                <li><a href="#">Pigments</a></li>
                <li><a href="#">Box Icons</a></li>
            </ul>
        </li>
        <li class="hover:bg-pink-400 hover:text-white">
            <a href="#">
                <i class='bx bx-compass'></i>
                <span class="link_name">Explore</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Explore</a></li>
            </ul>
        </li>
        <li class="hover:bg-pink-400 hover:text-white">
            <a href="#">
                <i class='bx bx-history'></i>
                <span class="link_name">History</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">History</a></li>
            </ul>
        </li>
        <li class="hover:bg-pink-400 hover:text-white">
            <a href="#">
                <i class='bx bx-cog'></i>
                <span class="link_name">Setting</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Setting</a></li>
            </ul>
        </li>
        <li class="hover:bg-pink-500 hover:text-white">
            <div class="profile-details">
                <div class="profile-content">
                    <img src="{{ asset("assets/img/team-1.jpg") }}" alt="profileImg">
                </div>
                <div class="name-job">
                    <div class="profile_name text-white">Prem Shahi</div>
                    <div class="job">Web Desginer</div>
                </div>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit"><i class='bx bx-log-out'></i></button>
                </form>
            </div>
        </li>
    </ul>
</div>
