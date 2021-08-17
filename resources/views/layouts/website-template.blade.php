
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <meta name="theme-color" content="#1c3988">
    <meta name="application-name" content="IPO SAUDI">
    <title>IPO Saudi | Faisal Siddique CFO, CPA, CA, ACA, CMA, CertIFR</title>
    <meta name="description" content="25+ years of professional experience in Finance, Accounting and ERP. Helping you on your journey from private to Initial Public Offering IPO in Saudi.">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/fav.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/rs-menu.min.css')}}" async defer>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}" async defer>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/linea-fonts.min.css')}}" async defer>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/flaticon.min.css')}}" async defer>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/iposaudi-minify.css')}}" async defer>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}" async defer>
    <link crossorigin="anonymous" rel='stylesheet' id='mvp-fonts-css' href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap">
    <link crossorigin="anonymous" rel='stylesheet' id='mvp-fonts-css' href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap">
    <link rel="stylesheet" type="text/css" href="{{asset('style.min.css')}}" async defer>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.min.css')}}" async defer>
    <style>



    </style>
    @yield('styles')
</head>
<body class="home-eight">


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

<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/rsmenu-main.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.nav.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/eocjs-newsticker.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/aos.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
@include('components.includes.contact-modal')
@yield('scripts')
</body>
</html>
