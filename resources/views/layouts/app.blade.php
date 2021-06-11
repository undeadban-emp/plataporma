﻿<!DOCTYPE html>
<html lang="en-ph"><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta property="og:title" content="Surigaonon Para sa Surigao"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="" />
<meta property="og:site_name" content=""/>
<meta property="og:description" content="" />
<title>@yield('title')</title>

<<<<<<< HEAD
<meta name="keywords" content="Surigaonon Para sa Surigao, Gov. Ayek T. Pimentel, Cong. Johnny T. Pimentel, Vj Pimentel,  Philip Pichay, Mary Grace S. Kimura, Jane V. Plaza, Marvin T. Azarcon, Dennis Yu, Roxanne Pimentel, Henrich Pimentel, Poly Lozada, Glenn Batiansila, Dodoy Fazon, Nicolas Alameda, Kid Pedrozo, oey Pama, Shem Garay, Enciong Garay, Boyet Evangelio, Michael T. Corilla, Generoso L. Naraiso">
=======
<meta name="keywords" content="Surigaonon Para sa Surigao, Gov. Ayek T. Pimentel, Cong. Johnny T. Pimentel, Vj Pimentel,  Philip Pichay, Mary Grace S. Kimura, Jane V. Plaza, Marvin T. Azarcon, Dennis Yu, Roxanne Pimentel, Henrich Pimentel, Poly Lozada, Glenn Batiansila, Dodoy Fazon, Nicolas Alameda, Kid Pedrozo, Joey Pama, Shem Garay, Enciong Garay, Boyet Evangelio, Michael T. Corilla, Generoso L. Naraiso">
>>>>>>> 8e70632fb07759d49bd241310954062ed90fde75
<meta name="title" content="Surigaonon Para sa Surigao" />
<meta name="description" content="Surigaonon Para sa Surigao" />

<!-- STYLESHEETS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link href="{{ asset('/public/assets/css/font-awesome.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/public/assets/css/ansiblebfda.css?v=04.23.2019.1836') }} " rel="stylesheet" />
</head>
<body>
    <div class="header carousel slide" data-ride="carousel" id="header-carousel">
        <ol class="carousel-indicators">
        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#header-carousel" data-slide-to="1"></li>
        <li data-target="#header-carousel" data-slide-to="2"></li>
        <li data-target="#header-carousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
<<<<<<< HEAD
                <img src="{{ asset('/public/assets/images/1.jpg') }}" alt="">
            </div>
            <div class="carousel-item">
                <a href="#" target="_blank"><img src="{{ asset('/public/assets/images/2.jpg') }}" alt=""></a>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/public/assets/images/3.jpg')  }}" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/public/assets/images/4.jpg') }}" alt="">
=======
                <img src="{{ asset('assets/images/1.jpg') }}" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/2.jpg') }}" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/3.jpg') }}" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/4.jpg') }}" alt="">
>>>>>>> 8e70632fb07759d49bd241310954062ed90fde75
            </div>
        </div>
    </div>

    <button class="toTop" id="myBtn" title="Go to top"><a title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></button>
    <div class="m-nav lg-hidden sticky-top"><a href="#"><i class="fa fa-bars" aria-hidden="true"></i><i class="fa fa-times" aria-hidden="true"></i></a></div>
    <div class="nav sticky-top">
        <div class="nav-option">
            <div><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></div>
            <div><a href="#" class="sublevel2" data-target="kilalanin">KILALANIN</a>
                <div class="subnav2" id="kilalanin">
                    <p>
<<<<<<< HEAD
                        <a href="">Ayek T. Pimentel</a>
                        <a href="">Johnny T. Pimentel</a>
                        <a href="">Vj Pimentel</a>
                        <a href="">Philip Pichay</a>
                        <a href="">Mary Grace S. Kimura</a>
                        <a href="">Jane V. Plaza</a>
                        <a href="">Marvin T. Azarcon</a>
                        <a href="">Dennis Yu</a>
                        <a href="">Roxanne Pimentel</a>
                        <a href="">Henrich Pimentel</a>
                        <a href="">Poly Lozada</a>
                        <a href="">Glenn Batiansila</a>
                        <a href="">Dodoy Fazon</a>
                        <a href="">Nicolas Alameda</a>
                        <a href="">Kid Pedrozo</a>
                        <a href="">Joey Pama</a>
                        <a href="">Shem Garay</a>
                        <a href="">Enciong Garay</a>
                        <a href="">Boyet Evangelio</a>
                        <a href="">Michael T. Corilla</a>
                        <a href="">Generoso L. Naraiso</a>
=======
                        <a href="{{ url('/alexander-t-pimentel') }}">Ayek T. Pimentel</a>
                        <a href="{{ url('/romeo-s-momo') }}">Romeo S. Momo Sr.</a>
                        <a href="{{ url('/johnny-t-pimentel') }}">Johnny T. Pimentel</a>
                        <a href="{{ url('') }}">Vj Pimentel</a>
                        <a href="{{ url('') }}">Philip Pichay</a>
                        <a href="{{ url('') }}">Mary Grace S. Kimura</a>
                        <a href="{{ url('') }}">Jane V. Plaza</a>
                        <a href="{{ url('') }}">Marvin T. Azarcon</a>
                        <a href="{{ url('') }}">Dennis Yu</a>
                        <a href="{{ url('') }}">Roxanne Pimentel</a>
                        <a href="{{ url('') }}">Henrich Pimentel</a>
                        <a href="{{ url('') }}">Poly Lozada</a>
                        <a href="{{ url('') }}">Glenn Batiansila</a>
                        <a href="{{ url('') }}">Dodoy Fazon</a>
                        <a href="{{ url('') }}">Nicolas Alameda</a>
                        <a href="{{ url('') }}">Kid Pedrozo</a>
                        <a href="{{ url('') }}">Joey Pama</a>
                        <a href="{{ url('') }}">Shem Garay</a>
                        <a href="{{ url('') }}">Enciong Garay</a>
                        <a href="{{ url('') }}">Boyet Evangelio</a>
                        <a href="{{ url('') }}">Michael T. Corilla</a>
                        <a href="{{ url('') }}">Generoso L. Naraiso</a>
>>>>>>> 8e70632fb07759d49bd241310954062ed90fde75
                    </p>
                </div>
            </div>
            <div><a href="#" class="sublevel" data-target="kumilos-nav"></a>
                <div class="subnav2" id="kumilos-nav2">
                    <p>
                        <a href="" target=""></a>
                        <a href="" class=""></a>
                        <a href=""></a>
                        <a href="" target=""></a>
                        <a href="" class=""></a>
                        <a href="" target=""></a>
                        <a href="" target=""></a>
                    </p>
                </div>
            </div>
            <div><a href="">PLATAPORMA</a></div>
            <div class="clear"></div>
        </div>
        {{-- <div class="subnav" id="kumilos-nav">
            <p>
                <a href="" target="_blank"></a>
                <a href="" class="showdonate"></a>
                <a href=""></a>
                <a href="" target="_blank"></a>
                <a href="" class="showcall"></a>
                <a href="" target="_blank"></a>
            </p>
        </div> --}}
    </div>



    @yield('content')





    <div class="section white footer-kumilos">
        <div class="" id="">
                <div class="desc">
                </div>
                <div class="clear"></div>
        </div>
        <div class="diagonal-divider-bottom">
            <img src="assets/images/divider_white_blue.png" >
        </div>
    </div>
    <div class="section blue">
        <div class="social">
        </div>
        <div class="footer-links">
            <div><p>Copyright ©{{ date('Y') }} . All Rights Reserved</p></div>
            <div class="clear"></div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.native/1.0.4/bootstrap-native.js"></script>
<script src="{{ asset('/public/assets/js/ansible9f92.js?v=03.07.2019.2149') }}"></script>

</body>
</html>
