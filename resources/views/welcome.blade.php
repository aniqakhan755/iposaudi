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
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
        <!-- aos css -->
        <link rel="stylesheet" type="text/css" href="assets/css/aos.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="assets/fonts/linea-fonts.css">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="assets/css/rsmenu-main.css">
        <!-- nivo slider CSS -->
        <link rel="stylesheet" type="text/css" href="assets/inc/custom-slider/css/nivo-slider.css">
        <link rel="stylesheet" type="text/css" href="assets/inc/custom-slider/css/preview.css">
        <!-- rsmenu transitions css -->
        <link rel="stylesheet" href="assets/css/rsmenu-transitions.css">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="style.css"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    </head>
    <body class="home-eight">

        <!-- Preloader area start here -->
        <div id="loader" class="loader">
            <div class="spinner"></div>
        </div>
        <!--End preloader here -->

        <!--Full width header Start-->
        <div class="full-width-header header-style4">
            <!-- Toolbar Start -->
            <div class="toolbar-area hidden-md">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="toolbar-contact">
                                <ul>
                                    <li><i class="flaticon-email"></i><a href="mailto:info@yourwebsite.com">support@rstheme.com</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="toolbar-sl-share">
                                <ul>

                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Toolbar End -->

            <!--Header Start-->
            <header id="rs-header" class="rs-header">
                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 pl-0">
                                <div class="logo-area">
                                    <a href="{{route('welcome')}}"><img src="assets/images/logo-website.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-9 text-right pl-0">
                                <div class="rs-menu-area">
                                    <div class="main-menu">
                                        <div class="mobile-menu">
                                            <a class="rs-menu-toggle">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                        </div>
                                        <nav class="rs-menu pr-65">
                                            <ul id="onepage-menu" class="nav-menu">
                                                <li class="active-menu"><a href="#rs-header">Home</a></li>
                                                <li><a href="#rs-about">About</a></li>
                                                <li><a href="#rs-services">Services</a></li>
                                                <li><a href="#rs-blog">Blog</a></li>
                                                <li><a href="#rs-contact">Contact</a></li>
                                            </ul> <!-- //.nav-menu -->
                                        </nav>
                                    </div> <!-- //.main-menu -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->


            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->

        <!-- Main content Start -->
        <div class="main-content">
            <!-- Slider Start -->
            <div id="rs-slider" class="rs-slider slider8">
                <div class="slider-carousel owl-carousel">
                    <!-- Slide 1 -->
                    <div class="slider slide1" style="background-image: url('assets/images/slider/{{$slider_configuration->image_slider1}}');">
                        <div class="container">
                            <div class="content-part">
                                <div class="slider-des">
                                    <div class="sl-subtitle mb-16">{{$slider_configuration->sl_subtitle_1}}</div>
                                    <h1 class="sl-title mb-0">{{$slider_configuration->sl_title_1}}</h1>
                                </div>
                                <div class="slider-bottom mt-40">
                                    <ul>
                                        <li><a href="#" class="readon">Contact us</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="slider slide2" style="background-image: url('assets/images/slider/{{$slider_configuration->image_slider2}}');">
                        <div class="container">
                            <div class="content-part">
                                <div class="slider-des">
                                    <div class="sl-subtitle mb-16">{{$slider_configuration->sl_subtitle_2}}</div>
                                    <h1 class="sl-title mb-0">{{$slider_configuration->sl_title_2}}</h1>
                                </div>
                                <div class="slider-bottom mt-40">
                                    <ul>
                                        <li><a href="#" class="readon">Contact us</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider End -->

            <!-- Partner Section Start -->
            <div class="rs-partner modify5 blue-bg pt-70 pb-55">
                <div class="container">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-lg-device="4" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="partner-item">
                            <a href="#"><img src="assets/images/partner/light/1.png" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="#"><img src="assets/images/partner/light/2.png" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="#"><img src="assets/images/partner/light/3.png" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="#"><img src="assets/images/partner/light/4.png" alt=""></a>
                        </div>
                        <div class="partner-item">
                            <a href="#"><img src="assets/images/partner/light/5.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Partner Section End -->

            <!-- Why Choose Section Start -->
            <div class="rs-whychooseus style4 pt-100 md-pt-72 md-pt-80 pb-100 lg-pb-93 md-pb-70">
                <div class="container">
                    <div class="row md-col-padding">
                        <div class="col-lg-6 pr-110 lg-pr-30">
                            <div class="sec-title mb-40">
                                <div class="sub-title blue-color">Why Choose Us</div>
                                <h2 class="title mb-18">25+ Years of Experience in Human Resource Management</h2>
                                <div class="desc">Reobiz donec pulvinar magna id leoersi pellentesque impered dignissim rhoncus euismod euismod eros vitae.</div>
                            </div>
                            <div class="content-part mb-20">
                                <div class="icon-part">
                                    <img src="assets/images/whychooseus/style4/icons/1.png" alt="">
                                </div>
                                <div class="text-part">
                                    <h4 class="title">Extensive Employment</h4>
                                    <div class="desc">Quisque placerat vitae lacus ut sceleris queusce luctus odio ac nibh luctus, in porttitor.</div>
                                </div>
                            </div>
                            <div class="content-part">
                                <div class="icon-part">
                                    <img src="assets/images/whychooseus/style4/icons/2.png" alt="">
                                </div>
                                <div class="text-part">
                                    <h4 class="title">Extensive Employment</h4>
                                    <div class="desc">Quisque placerat vitae lacus ut sceleris queusce luctus odio ac nibh luctus, in porttitor.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-0 md-mb-30 md-order-first">
                            <div class="image-part">
                                <img src="assets/images/whychooseus/style4/right-img.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Why Choose Section End -->

            <!-- Counter Section Start -->
            <div class="rs-counter style1 shape-bg1 pt-105 md-pt-82 pb-97 md-pb-77">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                            <div class="couter-part plus">
                                <div class="icon-part">
                                    <img src="assets/images/counter/icon/1.png" alt="">
                                </div>
                                <div class="rs-count">500</div>
                                <h5 class="title">Project Completed</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                            <div class="couter-part plus">
                                <div class="icon-part">
                                    <img src="assets/images/counter/icon/2.png" alt="">
                                </div>
                                <div class="rs-count">115</div>
                                <h5 class="title">HR Consultants</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 xs-mb-30">
                            <div class="couter-part plus">
                                <div class="icon-part">
                                    <img src="assets/images/counter/icon/3.png" alt="">
                                </div>
                                <div class="rs-count">100</div>
                                <h5 class="title">Awards WON</h5>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="couter-part thousand">
                                <div class="icon-part">
                                    <img src="assets/images/counter/icon/4.png" alt="">
                                </div>
                                <div class="rs-count">920</div>
                                <h5 class="title">Happy Clients</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter Section End -->

            <!-- About Section Start -->
            <div id="rs-about" class="rs-about style3 pt-100 lg-pt-90 md-pt-80 pb-92 md-pb-72 sm-pb-80">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-6 md-mb-30">
                            <div class="image-part">
                                <img src="{{asset('assets/images/about/'.$about_configuration->image_about)}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 pl-50 lg-pl-35 md-pl-15">
                            <div class="sec-title">
                                <div class="sub-title gray-color">About Us</div>
                                <h2 class="title mb-30">{{$about_configuration->about_us_title}} <span class="d-block blue-color">{{$about_configuration->about_us_subtitle}} </span></h2>
                                <p class="desc2">Creation timelines for the standard lorem ipsum passage vary, with some citing the 15th century and others the 20th.</p>
                                <div class="desc">{{$about_configuration->about_us_desc}}</div>
                                <div class="btn-part mt-45">
                                    <a class="readon blue-btn" href="#">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Services Section Start -->
            <div id="rs-services" class="rs-services style9 shape-bg2 sm-pt-72 sm-pb-72">
                <div class="container">
                    <div class="sec-title text-center mb-119 md-mb-80 sm-mb-42">
                        <div class="sub-title gray-color">What we do</div>
                        <h2 class="title mb-0">View Reobiz HR Solutions <span class="d-block blue-color">Best Services</span></h2>
                    </div>
                    <div class="row gutter-16">
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-16">
                            <div class="service-wrap text-center">
                                <div class="icon-part">
                                    <img src="assets/images/services/style9/1.png" alt="">
                                </div>
                                <h5 class="title"><a href="#">{{$service_configuration->service_title_1}}</a></h5>
                                <div class="desc">{{$service_configuration->service_desc_1}}</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-16">
                            <div class="service-wrap text-center">
                                <div class="icon-part">
                                    <img src="assets/images/services/style9/2.png" alt="">
                                </div>
                                <h5 class="title"><a href="#">{{$service_configuration->service_title_2}}</a></h5>
                                <div class="desc">{{$service_configuration->service_desc_2}}</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-16">
                            <div class="service-wrap text-center">
                                <div class="icon-part">
                                    <img src="assets/images/services/style9/3.png" alt="">
                                </div>
                                <h5 class="title"><a href="#">{{$service_configuration->service_title_3}}</a></h5>
                                <div class="desc">{{$service_configuration->service_desc_3}}</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-16">
                            <div class="service-wrap text-center">
                                <div class="icon-part">
                                    <img src="assets/images/services/style9/4.png" alt="">
                                </div>
                                <h5 class="title"><a href="#">{{$service_configuration->service_title_4}}</a></h5>
                                <div class="desc">{{$service_configuration->service_desc_4}}</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-16">
                            <div class="service-wrap text-center">
                                <div class="icon-part">
                                    <img src="assets/images/services/style9/5.png" alt="">
                                </div>
                                <h5 class="title"><a href="#">{{$service_configuration->service_title_5}}</a></h5>
                                <div class="desc">{{$service_configuration->service_desc_5}}</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-16">
                            <div class="service-wrap text-center">
                                <div class="icon-part">
                                    <img src="assets/images/services/style9/6.png" alt="">
                                </div>
                                <h5 class="title"><a href="#">{{$service_configuration->service_title_6}}</a></h5>
                                <div class="desc">{{$service_configuration->service_desc_6}}</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-16">
                            <div class="service-wrap text-center">
                                <div class="icon-part">
                                    <img src="assets/images/services/style9/7.png" alt="">
                                </div>
                                <h5 class="title"><a href="#">{{$service_configuration->service_title_7}}</a></h5>
                                <div class="desc">{{$service_configuration->service_desc_7}}</div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-16">
                            <div class="service-wrap text-center">
                                <div class="icon-part">
                                    <img src="assets/images/services/style9/8.png" alt="">
                                </div>
                                <h5 class="title"><a href="#">{{$service_configuration->service_title_8}}</a></h5>
                                <div class="desc">{{$service_configuration->service_desc_8}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-link text-center mt-43 sm-mt-23">
                        Looking more better services <a href="#">click here</a> for view all services.
                    </div>
                </div>
            </div>
            <!-- Services Section End -->


            <!-- Blog Section Start -->
            <div id="rs-blog" class="rs-blog style1 modify2 green shape-bg5 mt-92 md-mt-72 sm-mt-0 sm-pt-72 pb-70 md-pb-50">
                <div class="container">
                    <div class="sec-title text-center mb-151 md-mb-80 sm-mb-41">
                        <div class="sub-title gray-color">News</div>
                        <h2 class="title mb-0">Read More About Latest Jobs <span class="d-block blue-color">& Training Updates</span></h2>
                    </div>
                    <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-lg-device="3" data-md-device-nav="false" data-md-device-dots="false">
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/blog/1.jpg" alt="">
                                <div class="fly-btn">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                            <div class="content-part">
                                <a class="categories" href="#">Strategy</a>
                                <h3 class="title"><a href="#">Covid-19 threatens the next generation of smartphones</a></h3>
                                <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by...</p>
                                <div class="blog-meta">
                                    <div class="user-data">
                                        <img src="assets/images/blog/avatar/1.png" alt="">
                                        <span>admin</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 06 Sep 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/blog/2.jpg" alt="">
                                <div class="fly-btn">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                            <div class="content-part">
                                <a class="categories" href="#">Management</a>
                                <h3 class="title"><a href="#">Soundtrack filma Lady Exclusive Music</a></h3>
                                <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by...</p>
                                <div class="blog-meta">
                                    <div class="user-data">
                                        <img src="assets/images/blog/avatar/1.png" alt="">
                                        <span>admin</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 06 Sep 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/blog/3.jpg" alt="">
                                <div class="fly-btn">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                            <div class="content-part">
                                <a class="categories" href="#">Consulting</a>
                                <h3 class="title"><a href="#">Winged moved stars, fruit creature seed night.</a></h3>
                                <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by...</p>
                                <div class="blog-meta">
                                    <div class="user-data">
                                        <img src="assets/images/blog/avatar/1.png" alt="">
                                        <span>admin</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 06 Sep 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/blog/4.jpg" alt="">
                                <div class="fly-btn">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                            <div class="content-part">
                                <a class="categories" href="#">Development</a>
                                <h3 class="title"><a href="#">Given void great you’re good appear have i also fifth</a></h3>
                                <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by...</p>
                                <div class="blog-meta">
                                    <div class="user-data">
                                        <img src="assets/images/blog/avatar/1.png" alt="">
                                        <span>admin</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 06 Sep 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/blog/5.jpg" alt="">
                                <div class="fly-btn">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                            <div class="content-part">
                                <a class="categories" href="#">Creative</a>
                                <h3 class="title"><a href="#">Lights winged seasons fish abundantly evening.</a></h3>
                                <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by...</p>
                                <div class="blog-meta">
                                    <div class="user-data">
                                        <img src="assets/images/blog/avatar/1.png" alt="">
                                        <span>admin</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 06 Sep 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/blog/6.jpg" alt="">
                                <div class="fly-btn">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                            <div class="content-part">
                                <a class="categories" href="#">Finance</a>
                                <h3 class="title"><a href="#">Team You Want to Work With mistakes runners</a></h3>
                                <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by...</p>
                                <div class="blog-meta">
                                    <div class="user-data">
                                        <img src="assets/images/blog/avatar/1.png" alt="">
                                        <span>admin</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 06 Sep 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="img-part">
                                <img src="assets/images/blog/3.jpg" alt="">
                                <div class="fly-btn">
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                            <div class="content-part">
                                <a class="categories" href="#">Consulting</a>
                                <h3 class="title"><a href="#">Winged moved stars, fruit creature seed night.</a></h3>
                                <p class="desc">We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by...</p>
                                <div class="blog-meta">
                                    <div class="user-data">
                                        <img src="assets/images/blog/avatar/1.png" alt="">
                                        <span>admin</span>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i> 06 Sep 2019
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Section End -->

            <!-- Contact Section Start -->
            <div id="rs-contact" class="rs-contact style2 pb-100 md-pb-80">
                <div class="row md-col-padding">
                    <div class="col-lg-6 pr-0">
                        <div class="g-map">
                            <iframe src="https://maps.google.com/maps?q=37.803467%2C%20-122.472369&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-0">
                        <div class="form-part pl-43 md-pl-15 md-pr-15 pt-110 pb-110 md-pt-72 md-pb-80">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="sec-title mb-35">
                                        <div class="sub-title primary">CONTACT US</div>
                                        <h2 class="title mb-0 white-color">Get In Touch</h2>
                                    </div>
                                    <div id="form-messages" class="white-color"></div>
                                    <form id="contact-form" class="contact-form" method="post" action="mailer.php">
                                        <div class="row">
                                            <div class="col-md-6 mb-30">
                                                <div class="common-control">
                                                    <input type="text" name="name" placeholder="Name" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-30">
                                                <div class="common-control">
                                                    <input type="email" name="email" placeholder="Email" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-30">
                                                <div class="common-control">
                                                    <input type="text" name="phone" placeholder="Phone Number" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-30">
                                                <div class="common-control">
                                                    <input type="text" name="website" placeholder="Your Website" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-30">
                                                <div class="common-control">
                                                    <textarea name="message" placeholder="Your Message Here" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="submit-btn">
                                                    <button type="submit" class="readon">Submit Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Section End -->
        </div>
        <!-- Main content End -->

        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer">
            <div class="container">
                <div class="footer-content pt-80 pb-79 md-pb-64">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 footer-widget md-mb-39">
                            <div class="about-widget pr-15">
                                <div class="logo-part">
                                    <a href="{{route('welcome')}}"><img src="{{asset('assets/images/logo-website.png')}}" alt="Footer Logo"></a>
                                </div>
                                <p class="desc">We denounce with righteous indignation in and dislike men who are so beguiled and to demo realized by the charms of pleasure moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound.</p>
                                <div class="btn-part">
                                    <a class="readon" href="#">Discover More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 md-mb-32 footer-widget">
                            <h4 class="widget-title">Contact Info</h4>
                            <ul class="address-widget pr-40">
                                <li>
                                    <i class="flaticon-location"></i>
                                    <div class="desc">374 William S Canning Blvd, Fall River MA 2721, USA</div>
                                </li>
                                <li>
                                    <i class="flaticon-call"></i>
                                    <div class="desc">
                                        <a href="tel:+8801739753105">(+880)173-9753105</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-email"></i>
                                    <div class="desc">
                                        <a href="mailto:support@rstheme.com">support@rstheme.com</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-clock"></i>
                                    <div class="desc">
                                        10:00 - 17:00
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row y-middle">
                        <div class="col-lg-6 col-md-8 sm-mb-21">
                            <div class="copyright">
                                <p>© Copyright 2021 IPOSaudi. All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 text-right sm-text-center">
                            <ul class="footer-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text" required="">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

        <!-- modernizr js -->
        <script src="assets/js/modernizr-2.8.3.min.js"></script>
        <!-- jquery latest version -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Menu js -->
        <script src="assets/js/rsmenu-main.js"></script>
        <!-- op nav js -->
        <script src="assets/js/jquery.nav.js"></script>
        <!-- owl.carousel js -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Slick js -->
        <script src="assets/js/slick.min.js"></script>
        <!-- isotope.pkgd.min js -->
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <!-- wow js -->
        <script src="assets/js/wow.min.js"></script>
        <!-- aos js -->
        <script src="assets/js/aos.js"></script>
        <!-- Skill bar js -->
        <script src="assets/js/skill.bars.jquery.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
         <!-- counter top js -->
        <script src="assets/js/waypoints.min.js"></script>
        <!-- video js -->
        <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
        <!-- magnific popup js -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Nivo slider js -->
        <script src="assets/inc/custom-slider/js/jquery.nivo.slider.js"></script>
        <!-- plugins js -->
        <script src="assets/js/plugins.js"></script>
        <!-- contact form js -->
        <script src="assets/js/contact.form.js"></script>
        <!-- main js -->
        <script src="assets/js/main.js"></script>
    </body>
</html>
