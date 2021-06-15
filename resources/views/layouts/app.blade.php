<!DOCTYPE html>
<html lang="en-ph"><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="{{ asset('/public/assets/images/favicon.png') }}" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta property="og:title" content="Surigaonon Para sa Surigao"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="" />
<meta property="og:site_name" content=""/>
<meta property="og:description" content="" />
<title>@yield('title')</title>

<meta name="keywords" content="Surigaonon Para sa Surigao, Gov. Ayek T. Pimentel, Cong. Johnny T. Pimentel, Vj Pimentel,  Philip Pichay, Mary Grace S. Kimura, Jane V. Plaza, Marvin T. Azarcon, Dennis Yu, Roxanne Pimentel, Henrich Pimentel, Poly Lozada, Glenn Batiansila, Dodoy Fazon, Nicolas Alameda, Kid Pedrozo, Joey Pama, Shem Garay, Enciong Garay, Boyet Evangelio, Michael T. Corilla, Generoso L. Naraiso">
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
        {{-- <li data-target="#header-carousel" data-slide-to="3"></li> --}}
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/public/assets/images/header2.jpg') }}" alt="">
            </div>
            {{-- <div class="carousel-item">
                <img src="{{ asset('/assets/images/header1.jpg') }}" alt="">
            </div> --}}
            <div class="carousel-item">
                <img src="{{ asset('/public/assets/images/header4.jpg') }}" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/public/assets/images/header3.jpg') }}" alt="">
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
                        <a href="{{ url('/alexander-t-pimentel') }}">Ayek T. Pimentel</a>
                        <a href="{{ url('/romeo-s-momo') }}">Romeo S. Momo Sr.</a>
                        <a href="{{ url('/johnny-t-pimentel') }}">Johnny T. Pimentel</a>
                        <a href="{{ url('/vj-pimentel') }}">Vj Pimentel</a>
                        <a href="{{ url('/philip-pichay') }}">Philip Pichay</a>
                        <a href="{{ url('/mary-grace-kimura') }}">Mary Grace S. Kimura</a>
                        <a href="{{ url('/jane-plaza') }}">Jane V. Plaza</a>
                        <a href="{{ url('/marvin-azarcon') }}">Marvin T. Azarcon</a>
                        <a href="{{ url('/dennis-yu') }}">Dennis Yu</a>
                        <a href="{{ url('/roxanne-pimentel') }}">Roxanne Pimentel</a>
                        <a href="{{ url('/henrich-pimentel') }}">Henrich Pimentel</a>
                        <a href="{{ url('/michael-corilla') }}">Michael T. Corilla</a>
                        <a href="{{ url('/poly-lozada') }}">Poly Lozada</a>
                        <a href="{{ url('/glenn-batiansila') }}">Glenn Batiansila</a>
                        <a href="{{ url('/dodoy-fazon') }}">Dodoy Fazon</a>
                        <a href="{{ url('/nicolas-alameda') }}">Nicolas Alameda</a>
                        <a href="{{ url('/kid-pedrozo') }}">Kid Pedrozo</a>
                        <a href="{{ url('/joey-pama') }}">Joey Pama</a>
                        <a href="{{ url('/shem-garay') }}">Shem Garay</a>
                        <a href="{{ url('/enchiong-garay') }}">Enciong Garay</a>
                        <a href="{{ url('/boyet-evangelio') }}">Boyet Evangelio</a>
                        <a href="{{ url('/evelyn-naraiso') }}">Evelyn Naraiso</a>
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
            <div class="nav-hidden-lg"><a href="https://www.facebook.com/hugpongsurigao" class="icon"><i class="fa fa-facebook" aria-hidden="true"></i></a> <a href="https://twitter.com/OtsoDiretso" class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></a> <a href="https://www.instagram.com/OtsoDiretso.PH" class="icon"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
		<div class="nav-hidden-xs"><a href="https://www.facebook.com/hugpongsurigao" class="icon"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
		<div class="nav-hidden-xs"><a href="" class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
		<div class="nav-hidden-xs"><a href="" class="icon"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
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

    <div class="section footer-kumilos">
        <div class="diagonal-divider-bottom">
            <img src="{{ asset('/public/assets/images/divider_white_blue.png') }}" >
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
