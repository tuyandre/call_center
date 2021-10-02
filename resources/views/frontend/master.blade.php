<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>ALGORITHM INC./ISHYIGACall Center</title>
    <!-- meta tag start-->

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="Call Center, Stock Management System,Vitual Sales Devices Controller, COMPTA SYSTEM, CIS">
    <meta name="author" content="ISHYIGA">
    <meta name="ISHYIGA" content="320">
    <!-- css links start -->
    <link rel="stylesheet" href="{{asset('public/frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/assets/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/assets/css/color-switcher.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/assets/css/media.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="shortcut icon" type="img/png" href="{{asset('public/frontend/img/logo-company.png')}}">
    @yield('css')
</head>

<body>
<!-- preloader start -->
<div id="preloader">
    <div id="status"><img src="{{asset('public/frontend/assets/images/pre1.gif')}}" alt=""></div>
</div>

@include('frontend.header')

@yield('content')



@include('frontend.footer')
<!-- js start -->
<script src="{{asset('public/frontend/assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/countTo.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/appear.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/color-switcher.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/typed.js')}}"></script>
<script src="{{asset('public/frontend/assets/js/custom.js')}}"></script>
@yield('js')
</body>

</html>
