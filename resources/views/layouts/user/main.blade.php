<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="{{ asset("assets/img/logo-web/petPaws-logo.png") }}" />
    <title>@yield('title')</title>
    @include('layouts.user.link')
  </head>
    <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-white text-slate-600">
        <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10 py-4">
            <div class="container">
                <div class="flex items-center justify-between relative">
                    <div class="px-4">
                        <a href="#home" class="font-bold text-lg blo
                        py-6">PetPaws</a>
                    </div>
                    <div class="flex items-center px-4">
                        <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 ">
                            <span class="w-[30px] h-[2px] my-2 block bg-black"></span>
                            <span class="w-[30px] h-[2px] my-2 block bg-black"></span>
                            <span class="w-[30px] h-[2px] my-2 block bg-black"></span>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        {{-- @include('layouts.user.navbar') --}}
        <div>
            @yield('content')
        </div>

    @include('layouts.admin.footer')
    {{-- @include('layouts.script') --}}
  </body>

</html>
