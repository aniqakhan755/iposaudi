<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>IPO SAUDI</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/fav.png')}}">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <!-- aos css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/aos.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/off-canvas.css')}}">
    <!-- linea-font css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/linea-fonts.css')}}">
    <!-- flaticon css  -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/flaticon.css')}}">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="{{asset('assets/css/rsmenu-main.css')}}">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/inc/custom-slider/css/nivo-slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/inc/custom-slider/css/preview.css')}}">
    <!-- rsmenu transitions css -->
    <link rel="stylesheet" href="{{asset('assets/css/rsmenu-transitions.css')}}">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/rs-spacing.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    @yield('styles')
</head>
<body class="home-eight">

<!-- Preloader area start here -->
<div id="loader" class="loader">
    <div class="spinner"></div>
</div>
<!--End preloader here -->

@yield('header')

<!-- Main content Start -->
<div class="main-content">
    @yield('main-content')

</div>
<!-- Main content End -->

@include('components.includes.footer')

<!-- start scrollUp  -->
<div id="scrollUp">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->

<!-- modernizr js -->
<script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>
<!-- jquery latest version -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- Bootstrap v4.4.1 js -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Menu js -->
<script src="{{asset('assets/js/rsmenu-main.js')}}"></script>
<!-- op nav js -->
<script src="{{asset('assets/js/jquery.nav.js')}}"></script>
<!-- owl.carousel js -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- Slick js -->
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<!-- isotope.pkgd.min js -->
<script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/js/eocjs-newsticker.js')}}"></script>
<!-- wow js -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<!-- aos js -->
<script src="{{asset('assets/js/aos.js')}}"></script>
<!-- Skill bar js -->
<script src="{{asset('assets/js/skill.bars.jquery.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<!-- counter top js -->
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>
<!-- video js -->
<script src="{{asset('assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
<!-- magnific popup js -->
<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Nivo slider js -->
<script src="{{asset('assets/inc/custom-slider/js/jquery.nivo.slider.js')}}"></script>
<!-- plugins js -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!-- contact form js -->
<script src="{{asset('assets/js/contact.form.js')}}"></script>
<!-- main js -->
<script src="{{asset('assets/js/main.js')}}"></script>
@include('components.includes.contact-modal')
@yield('scripts')
</body>
</html>
