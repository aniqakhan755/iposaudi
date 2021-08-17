
<!-- About Section Start -->
<div class="rs-about style10 gray-bg5 pt-130 pb-100 md-pt-70 md-pb-70">
    <div class="container" id="choose-container">
        <!-- Preloader area start here -->
        <div class="text-center" id="choose-us-loader" >
            <div class="line">
                <div class="comb"></div>
            </div>
            <div class="line">
                <div class="comb"></div>
            </div>
            <div class="line">
                <div class="comb"></div>
            </div>
            <div class="line">
                <div class="comb"></div>
            </div>
            <div class="line">
                <div class="comb"></div>
            </div>
            <div class="line">
                <div class="comb"></div>
            </div>
            <div class="line">
                <div class="comb"></div>
            </div>
            <div class="line">
                <div class="comb"></div>
            </div>
            <div class="circle"></div>
            <!--End preloader here -->

        </div>
    </div>
    <!-- Partner Section Start -->
    <div class="rs-partner modify2 pt-100 md-pt-40">
        <div class="container">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true"
                 data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                 data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                 data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3"
                 data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
                 data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-lg-device="5"
                 data-md-device-nav="false" data-md-device-dots="false">
                @for($i=1; $i < 8; $i++)
                <?php $ext = '.png'?>
                <div class="partner-item">
                    <img loading="lazy" src="assets/images/partner/gray2/{{$i.$ext}}" alt="Membership logo">
                </div>
                @endfor
            </div>
        </div>
    </div>
    <!-- Partner Section End -->
</div>
<!-- About Section End -->
