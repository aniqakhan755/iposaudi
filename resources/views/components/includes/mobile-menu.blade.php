<div class="menu-mobile menu-activated-on-click color-scheme-dark">
    <div class="mm-logo-buttons-w">
        <a class="mm-logo" href="{{route('home')}}"><img src="{{asset('assets/images/logo-website.png')}}" alt="logo"></a>
        <div class="mm-buttons">
            <div class="content-panel-open">
                <div class="os-icon os-icon-grid-circles"></div>
            </div>
            <div class="mobile-menu-trigger">
                <div class="os-icon os-icon-hamburger-menu-1"></div>
            </div>
        </div>
    </div>
    <div class="menu-and-user">
        <!--------------------
        START - Mobile Menu List
        -------------------->
        <ul class="main-menu">
            <li>
                <a href="{{route('home')}}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-layout"></div>
                    </div>
                    <span>Dashboard</span></a>
            </li>
            <li>
                <a href="{{route('manage.sliders')}}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-layout"></div>
                    </div>
                    <span>Sliders</span></a>
            </li>
            <li>
                <a href="{{route('manage.choose-us')}}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-layout"></div>
                    </div>
                    <span>Choose Us</span></a>
            </li>
            <li>
                <a href="{{route('manage.about')}}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-layout"></div>
                    </div>
                    <span>About</span></a>
            </li>
            <li>
                <a href="{{route('manage.services')}}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-layout"></div>
                    </div>
                    <span>Services</span></a>
            </li>
            <li>
                <a href="{{route('manage.footer')}}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-layout"></div>
                    </div>
                    <span>Footer</span></a>
            </li>
        </ul>
        <!--------------------
        END - Mobile Menu List
        -------------------->
    </div>
</div>
