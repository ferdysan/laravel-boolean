<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title></title>
  </head>
  <body>
    {{-- inizio header e navbar --}}
    <header>
      <nav>
        @yield('header')
      </nav>
    </header>
    <div class="jumbo_slider">
      <div class="container">
        @yield('jumbo_slider')
      </div>
    </div>


  </body>
</html>
