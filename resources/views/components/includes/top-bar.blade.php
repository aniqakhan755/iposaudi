<div class="top-bar color-scheme-transparent">
    <!--------------------
    START - Top Menu Controls
    -------------------->
    <div class="top-menu-controls">


        <div class="logged-user-w">
            <div class="logged-user-i">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                        class="os-icon os-icon-signs-11 mr-2"></i><strong>Logout</strong></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
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
