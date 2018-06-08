<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

  {{-- HEADER --}}
  <div class="header">
    <div class="header__logo">

    </div>
    <div class="socials">
        <p class="social__text">
          Follow me
        </p>
      <a href="#" class="redes"><span class="icon" id="icon-face"><i class="fab fa-facebook-f"></i></span></a>
      <a href="#" class="redes"><span class="icon" id="icon-twuit"><i class="fab fa-twitter"></i></span></a>
      <a href="#" class="redes"><span class="icon" id="icon-you"><i class="fab fa-youtube"></i></span></a>
    </div>
  </div>

  {{-- BANNER--}}
  
  @include('banner')

  {{-- NAVBAR --}}
  <div class="navbar">
      <ul class="navbar__list">
      <a class="list__item" href="{{url('/')}}"><li>Home</li></a>
      <a class="list__item" href=""><li>Quienes Somos?</li></a>
      <a class="list__item" href=""><li>Contacto</li></a>
      <a class="list__item" href=""><li>Haz parte</li></a>
      <a class="list__item" href=""><li>Top 10!</li></a>
    </ul>
  </div>

  {{-- CONTAINT --}}
  <div class="container">
    <div class="row-container">
      <div class="column" id="column1">
          @yield('content')
      </div>
      <div class="column" id="column2">
          @yield('sidebar')
      </div>
    </div>
  </div>

  {{-- FOOTER --}}
  <div class="footer">
    <footer>

    </footer>
  </div>
  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/banner.js') }}"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>


  <script>

  </script>
  </body>
</html>     