
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <meta name="theme-color" content="#1c3988">
    <meta name="application-name" content="IPO SAUDI">
    <title>IPO Saudi | Faisal Siddique CFO, CPA, CA, ACA, CMA, CertIFR</title>
    <meta name="description" content="25+ years of professional experience in Finance, Accounting and ERP. Helping you on your journey from private to Initial Public Offering IPO in Saudi.">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="subject" content="25+ years of professional experience in Finance, Accounting and ERP. Helping you on your journey from private to Initial Public Offering IPO in Saudi.">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="IPO SAUDI">
    <meta name="twitter:title" content="IPO Saudi | Faisal Siddique CFO, CPA, CA, ACA, CMA, CertIFR">
    <meta name="twitter:image" content="https://iposaudi.com/assets/images/logo-website.png"/>
    <meta name="twitter:description" content="25+ years of professional experience in Finance, Accounting and ERP. Helping you on your journey from private to Initial Public Offering IPO in Saudi.">
    <meta property="og:site_name" content="IPO SAUDI"/>
    <meta property="og:title" content="IPO Saudi | Faisal Siddique CFO, CPA, CA, ACA, CMA, CertIFR" />
    <meta property="og:image" content="https://iposaudi.com/assets/images/logo-website.png"/>
    <meta property="og:url" content="https://iposaudi.com" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="25+ years of professional experience in Finance, Accounting and ERP. Helping you on your journey from private to Initial Public Offering IPO in Saudi."/>
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

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-205629663-1">
    </script>
    <script async defer>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-205629663-1');
    </script>
    <script type='application/ld+json'>
{
  "@context": "http://www.schema.org",
  "@type": "WebSite",
  "name": "IPO SAUDI",
  "url": "https://iposaudi.com/"
}
 </script>
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
