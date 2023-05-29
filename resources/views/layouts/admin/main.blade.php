<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="{{ asset("assets/img/logo-web/petPaws-logo.png") }}" />
    <title>@yield('title')</title>
    @include('layouts.link')
  </head>

  <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-white text-slate-500 overflow-hidden scroll-smooth">
        @include('layouts.admin.sidenav')
        <section class="home-section bg-slate-200 overflow-y-auto">
            @include('layouts.admin.navbar')
            <div>
                @yield('content')
            </div>
            @include('layouts.admin.footer')
        </section>
    @include('layouts.script')
    @include('sweetalert::alert')
    @yield('script-manual')
  </body>

</html>
