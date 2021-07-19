<div class="top-bar color-scheme-transparent">
    <!--------------------
    START - Top Menu Controls
    -------------------->
    <div class="top-menu-controls">


        <div class="logged-user-w">
            <div class="logged-user-i">
                <div class="avatar-w">
                    <img alt="" src="{{asset('img/avatar1.jpg')}}">
                </div>
                <div class="logged-user-menu color-style-bright">
                    <div class="logged-user-avatar-info">
                        <div class="avatar-w">
                            <img alt="" src="{{asset('img/avatar1.jpg')}}">
                        </div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">
                                {{ucwords(Auth::user()->name)}}
                            </div>
                            <div class="logged-user-role">

                            </div>
                        </div>
                    </div>
                    <div class="bg-icon">
                        <i class="os-icon os-icon-wallet-loaded"></i>
                    </div>
                    <ul>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                    class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </div>
            </div>
        </div>
        <!--------------------
        END - User avatar and menu in secondary top menu
        -------------------->
    </div>
    <!--------------------
    END - Top Menu Controls
    -------------------->
</div>
