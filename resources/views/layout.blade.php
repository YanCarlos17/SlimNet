<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Layout</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
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
      <a href="#" class="redes"><span class="icon">&</span></a>
      <a href="#" class="redes"><span class="icon">&</span></a>
      <a href="#" class="redes"><span class="icon">&</span></a>
    </div>
  </div>

  {{-- BANNER--}}
  <div class="banner">
    
  </div>

  {{-- NAVBAR --}}
  <div class="navbar">
      <ul class="navbar__list">
      <a class="list__item" href="{{url('/')}}"><li>Home</li></a>
      <a class="list__item" href=""><li>2</li></a>
      <a class="list__item" href=""><li>3</li></a>
      <a class="list__item" href=""><li>4</li></a>
      <a class="list__item" href=""><li>5</li></a>
    </ul>
  </div>

  {{-- CONTAINT --}}
  <div class="container">

  </div>

  {{-- FOOTER --}}
  <div class="footer">
    <footer>

    </footer>
  </div>
  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/carousel.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>

  </body>
</html>     