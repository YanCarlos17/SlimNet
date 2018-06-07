<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Layout</title>
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
      <a href="#" class="redes"><span class="icon">*</span></a>
      <a href="#" class="redes"><span class="icon">*</span></a>
      <a href="#" class="redes"><span class="icon">*</span></a>
    </div>
  </div>

  {{-- BANNER--}}
  <div class="banner">
    <img src="{{asset('img/banner-3.jpg')}}" alt="" id="img1">
    <img src="{{asset('img/foto-banner-1.jpg')}}" alt="" id="img2">
    <img src="{{asset('img/banner-2.jpg')}}" alt="" id="img3">

    <ul class="banner__list">
      <a href="#img1"><li class="banner__item"><span>1</span> </li></a>
      <a href="#img2"><li class="banner__item"><span>2</span> </li></a>
      <a href="#img3"><li class="banner__item"><span>3</span> </li></a>
    </ul>

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

  </body>
</html>     