<!--Full width header Start-->
<div class="full-width-header header-style4">
    <!-- Toolbar Start -->
    <div class="toolbar-area">
        <div class="row ticker-row d-none" >
            <div class="col-12">
                <div class="toolbar-contact">
                    <div id="example-1">
                        @foreach($current_stocks as $index => $stock)
                            @if($index != 0)|@endif<span style="font-weight:700;" class="ml-1">{{$stock->name}}</span> <span>{{$stock->price}}</span><span
                                class=" @if($stock->difference < 0)color-red @else color-green @endif mr-1"> {{$stock->difference}} ({{$stock->percentage}}%)</span>
                        @endforeach
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
                            <a href="{{route('welcome')}}"><img src="{{asset('assets/images/logo-website.png')}}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 text-right pl-0">
                        <div class="rs-menu-area">
                            <div class="main-menu">
                                <div class="mobile-menu">
                                    <a class="rs-menu-toggle">
                                        <i class="fa fa-bars fa-2x"></i>
                                    </a>
                                </div>
                                <nav class="rs-menu pr-65 rs-menu-close">
                                    <ul id="onepage-menu" class="nav-menu">
                                        <li class="active-menu"><a href="#rs-header">Home</a></li>
                                        <li><a href="#rs-about">About</a></li>
                                        <li><a href="#rs-services">Services</a></li>
                                        <li><a href="#rs-blog">Latest</a></li>
                                        <li><a href="{{route('ipo.readiness')}}">IPO Readiness</a></li>
                                        <li><a href="{{route('ipo.recent')}}">Recent IPOs</a></li>
{{--                                        <li><a href="{{route('ipo.list')}}">IPOs</a></li>--}}
                                        <li><a href="{{route('ipo-saudi.contact-us')}}">Contact</a></li>
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
