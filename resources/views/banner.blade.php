{{-- BANNER--}}
{{-- @section('banner') --}}
    <div class="banner">
        <img src="{{asset('img/banner-3.jpg')}}" alt="" id="img1" class="img">
        <img src="{{asset('img/foto-banner-1.jpg')}}" alt="" id="img2" class="img">
        <img src="{{asset('img/banner-2.jpg')}}" alt="" id="img3" class="img">

        <ul class="banner__list">
          <a href="#img1" id="ancle1"><li class="banner__item"><span>1</span> </li></a>
          <a href="#img2" id="ancle2"><li class="banner__item"><span>2</span> </li></a>
          <a href="#img3" id="ancle3"><li class="banner__item"><span>3</span> </li></a>
        </ul>
    </div>
{{-- @endsection --}}