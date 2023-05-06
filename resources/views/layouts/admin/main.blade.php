<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <title>@yield('title')</title>
    @include('layouts.link')
  </head>

  <body class="m-0 font-sans antialiased font-normal text-base leading-default bg-white text-slate-500 overflow-x-hidden">
        @include('layouts.admin.sidenav')
        <section class="home-section">
            @include('layouts.admin.navbar')
            <div>
                @yield('content')
            </div>
        </section>

    @include('layouts.admin.footer')
    @include('layouts.script')
  </body>

</html>
