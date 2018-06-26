<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('css/delay.css') }}">
</head>
<body>
{{-- CONTENEDOR --}}
<div class="contain">
  {{-- HEADER --}}
  <div class="header">
    <div class="header__logo">

    </div>
    <div class="socials">
        <p class="social__text">
          Siguenos!
        </p>
      <a href="#" id="face" class="redes"><span class="icon" id="icon-face"><i class="fab fa-facebook-f"></i></span></a>
      <a href="#" id="twiter" class="redes"><span class="icon" id="icon-twuit"><i class="fab fa-twitter"></i></span></a>
      <a href="#" id="youtube" class="redes"><span class="icon" id="icon-you"><i class="fab fa-youtube"></i></span></a>
    </div>
  </div>

  {{-- BANNER--}}
  
  @include('banner')

  {{-- NAVBAR --}}
  <div class="navbar">
      <ul class="navbar__list">
      <a class="list__item" href="{{url('/')}}"><li>Home</li></a>
      <a class="list__item" href="{{url('/registro')}}"><li>Ver Registros</li></a>
      <a class="list__item" href="{{url('/crear-registro')}}"><li>Registrate!</li></a>
      <a class="list__item" href=""><li>Haz parte</li></a>
      <a class="list__item" href=""><li>Top 10!</li></a>
    </ul>
  </div>

  {{-- CONTAINT --}}
  <div class="contenedor">
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
          Sticky Footer
        </footer>
    </div> 
</div>
  @yield('scripts')
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/vue.min.js') }}"></script>
  </body>
</html>     