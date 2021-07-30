<!-- Why Choose Section Start -->
<?php $desc1 = strlen($choose_configuration->heading1_desc) > 160 ? substr($choose_configuration->heading1_desc,0,160)."......" : $choose_configuration->heading1_desc; ?>
<?php $desc2 = strlen($choose_configuration->heading2_desc) > 160 ? substr($choose_configuration->heading2_desc,0,160)."......" : $choose_configuration->heading2_desc; ?>

<!-- About Section Start -->
<div class="rs-about style10 gray-bg5 pt-130 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pr-70 md-pr-15 md-mb-50">
                <div class="sec-title4 mb-30">
                    <h2 class="title pb-20">{{$choose_configuration->choose_us_title}}</h2>
{{--                    <p class="margin-0">We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms</p>--}}
                </div>
                <div id="accordion" class="accordion">
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne"><span>{{$choose_configuration->heading_1}}</span></a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body"><div class="desc"><?php echo($desc1)?> @if(strlen($choose_configuration->heading1_desc) > 160) <a href="{{route('choose-us.read-more')}}">Read More</a> @endif</div></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">{{$choose_configuration->heading_2}}</a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body"><?php echo($desc2)?> @if(strlen($choose_configuration->heading2_desc) > 160) <a href="{{route('choose-us.read-more')}}">Read More</a> @endif</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="images-part">
                        <img src="{{asset('assets/images/whychooseus/'.$choose_configuration->image_choose_us)}}" alt="Images">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Section Start -->
    <div class="rs-partner modify2 pt-100 md-pt-40">
        <div class="container">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5"  data-lg-device="5" data-md-device-nav="false" data-md-device-dots="false">
                <div class="partner-item">
                    <a href="https://rstheme.com"><img src="assets/images/partner/gray2/1.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="https://rstheme.com"><img src="assets/images/partner/gray2/2.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="https://rstheme.com"><img src="assets/images/partner/gray2/3.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="https://rstheme.com"><img src="assets/images/partner/gray2/4.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="https://rstheme.com"><img src="assets/images/partner/gray2/5.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="https://rstheme.com"><img src="assets/images/partner/gray2/1.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="https://rstheme.com"><img src="assets/images/partner/gray2/2.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="https://rstheme.com"><img src="assets/images/partner/gray2/3.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="https://rstheme.com"><img src="assets/images/partner/gray2/4.png" alt=""></a>
                </div>
                <div class="partner-item">
                    <a href="https://rstheme.com"><img src="assets/images/partner/gray2/5.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Section End -->
</div>
<!-- About Section End -->
