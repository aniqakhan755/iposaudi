<!--Full width header Start-->
<div class="full-width-header header-style4">
    <!-- Toolbar Start -->
    <div class="toolbar-area">
        {{--        <div class="container">--}}
        <div class="row">
            {{--                <div class="col-xl-2 col-lg-3">--}}
            {{--                    <div class="toolbar-contact">--}}
            {{--                        <ul>--}}
            {{--                            <li><i class="flaticon-email"></i><a--}}
            {{--                                    href="mailto:{{$footer_configuration->email}}">{{$footer_configuration->email}}</a>--}}
            {{--                            </li>--}}

            {{--                        </ul>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            <div class="col-12">
                <div class="toolbar-contact">
                    <div id="example-1">
                        @foreach($current_stocks as $index => $stock)
                            @if($index != 0)|@endif<strong class="ml-1">{{$stock->name}}</strong> <span>{{$stock->price}}</span><span
                                class=" @if($stock->difference < 0)color-red @else color-green @endif mr-1"> {{$stock->difference}} ({{$stock->percentage}}%)</span>
                        @endforeach
                    </div>
                </div>
            </div>
            {{--                <div class="col-xl-2 col-lg-3">--}}
            {{--                    <div class="toolbar-sl-share">--}}
            {{--                        <ul>--}}
            {{--                            <li><a href="{{$footer_configuration->facebook_url}}"><i class="fa fa-facebook"></i></a>--}}
            {{--                            </li>--}}
            {{--                            <li><a href="{{$footer_configuration->twitter_url}}"><i class="fa fa-twitter"></i></a></li>--}}
            {{--                            <li><a href="{{$footer_configuration->instagram_url}}"><i class="fa fa-instagram"></i></a>--}}
            {{--                            </li>--}}
            {{--                            <li><a href="{{$footer_configuration->linked_in_url}}"><i class="fa fa-linkedin"></i></a>--}}
            {{--                            </li>--}}
            {{--                        </ul>--}}
            {{--                    </div>--}}
            {{--                </div>--}}


            {{--            </div>--}}
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
                                        <li><a href="{{route('welcome')}}">Home</a></li>
                                        <li><a href="{{route('about-us.read-more')}}">About</a></li>
                                        <li><a href="{{route('services.read-more')}}">Services</a></li>
                                        <li><a href="{{route('choose-us.read-more')}}">Choose Us</a></li>
{{--                                        <li><a href="#rs-blog">Latest</a></li>--}}
                                        <li><a href="#" data-toggle="modal" data-target="#contactModal">Contact</a></li>
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
