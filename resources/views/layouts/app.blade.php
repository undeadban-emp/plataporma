<!DOCTYPE html>
<html lang="en-ph"><meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta property="og:title" content="Hugpong Surigao"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="" />
<meta property="og:site_name" content=""/>
<meta property="og:description" content="" />
<title>@yield('title')</title>

<meta name="keywords" content="Hugpong Surigao">
<meta name="title" content="Hugpong Surigao" />
<meta name="description" content="Hugpong Surigao" />

<!-- STYLESHEETS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link href="{{ asset('/assets/css/font-awesome.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/css/ansiblebfda.css?v=04.23.2019.1836') }} " rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
  @stack('page-css')
</head>
<body>
    <div class="header carousel slide" data-ride="carousel" id="header-carousel">
        <ol class="carousel-indicators">
        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#header-carousel" data-slide-to="1"></li>
        <li data-target="#header-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/assets/images/header/header.jpg') }}" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/assets/images/header/header2.jpg') }}" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/assets/images/header/header3.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <button class="toTop" id="myBtn" title="Go to top"><a title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></button>
    <div class="m-nav lg-hidden sticky-top"><a href="#"><i class="fa fa-bars" aria-hidden="true"></i><i class="fa fa-times" aria-hidden="true"></i></a></div>
    <div class="nav sticky-top">
        <div class="nav-option">
            <div><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></div>
            <div><a href="{{ url('/plataporma') }}">PLATAPORMA</a></div>
            <div><a href="#" class="sublevel2" data-target="kilalanin">KILALANIN</a>
                <div class="subnav2" id="kilalanin">
                    <p>
                        <a href="{{ url('/alexander-t-pimentel') }}">Ayek T. Pimentel</a>
                    </p>
                </div>
            </div>
            <div class="nav-hidden-lg"><a href="https://www.facebook.com/hugpongsurigao" class="icon"><i class="fa fa-facebook" aria-hidden="true"></i></a> </a></div>
		<div class="nav-hidden-xs"><a href="https://www.facebook.com/hugpongsurigao" class="icon"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
            <div class="clear"></div>
        </div>
    </div>

    @yield('content')

    <div class="section footer-kumilos">
        <div class="diagonal-divider-bottom">
            <img src="{{ asset('/assets/images/divider_white_green.png') }}" >
        </div>
    </div>
    <div class="section green">
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
<script src="{{ asset('/assets/js/ansible9f92.js?v=03.07.2019.2149') }}"></script>
@stack('page-scripts')

</body>
</html>
