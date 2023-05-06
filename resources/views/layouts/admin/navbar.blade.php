<nav>
    <div class="home-content">
        <i class='bx bx-menu' ></i>
        <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="leading-normal text-base">
              <a class="opacity-50 text-slate-700" href="@yield('href')">@yield('title-nav-1')</a>
            </li>
            <li class="text-base pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">@yield('title-nav-2')</li>
          </ol>

        </div>
    </div>
</nav>
