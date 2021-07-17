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
        <div class="logged-user-w">
            <div class="avatar-w">
{{--                <img alt="" src="{{asset('img/avatar1.jpg')}}">--}}
            </div>
            <div class="logged-user-info-w">
                <div class="logged-user-name">
                {{Auth::user()->name}}
                </div>
            </div>
        </div>
        <!--------------------
        START - Mobile Menu List
        -------------------->
        <ul class="main-menu">
            <li>
                <a href="">{{route('home')}}
                    <div class="icon-w">
                        <div class="os-icon os-icon-layout"></div>
                    </div>
                    <span>Dashboard</span></a>
            </li>
        </ul>
        <!--------------------
        END - Mobile Menu List
        -------------------->
    </div>
</div>
