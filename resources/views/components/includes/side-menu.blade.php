<div
    class="menu-w selected-menu-color-light menu-activated-on-hover menu-has-selected-link color-scheme-light color-style-default sub-menu-color-dark menu-position-side menu-side-left menu-layout-compact sub-menu-style-flyout">
    <div class="logo-w">
      <a class="logo" href="#">
          <img src="{{asset('assets/images/logo-website.png')}}" alt="logo">
       </a>
    </div>
    <div class="logged-user-w avatar-inline">
        <div class="logged-user-i">
{{--            <div class="avatar-w">--}}
{{--                <img alt="" src="{{asset('img/avatar1.jpg')}}">--}}
{{--            </div>--}}
            <div class="logged-user-info-w">
                <div class="logged-user-name">
                    {{ucwords(Auth::user()->name)}}
                </div>

            </div>
        </div>
    </div>
    <ul class="main-menu">

        <li class="selected">
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
            <a href="{{route('manage.blogs')}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Blogs</span></a>
        </li>
        <li>
            <a href="{{route('manage.footer')}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Footer</span></a>
        </li>
        <li>
            <a href="{{route('manage.messages')}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Messages</span></a>
        </li>
        <li>
            <a href="{{route('manage.ipos')}}">
                <div class="icon-w">
                    <div class="os-icon os-icon-layout"></div>
                </div>
                <span>IPOs</span></a>
        </li>




    </ul>
</div>
