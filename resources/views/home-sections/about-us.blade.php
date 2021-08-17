<!-- About Section Start -->

<div id="rs-about" class="rs-about style3 pt-100 lg-pt-90 md-pt-80 pb-92 md-pb-72 sm-pb-80 sm-pt-0">
    <div class="container">
        <div class="row y-middle align-about-text">
            <div class="col-lg-6 md-mb-30">
                <div class="image-part">
                    <img loading="lazy" src="{{asset('assets/images/about/'.$about_configuration->image_about)}}" alt="About Image">
                </div>
            </div>
            <div class="col-lg-6 pl-50 lg-pl-35 md-pl-15">
                <?php
                $out = $about_configuration->about_us_desc;

                $pos = strpos($out, "</p>");


                $link  = '<a class="ml-2 mr-2" href="/about-us">Read More</a>';
                $out = substr($out, 0, $pos) . $link . '</p>';
                ?>
                <div class="sec-title">
                    <div class="sub-title gray-color">About Us</div>
                    <h2 class="title mb-30">{{$about_configuration->about_us_title}} <span class="d-block blue-color">{{$about_configuration->about_us_subtitle}} </span></h2>
                    {{--                                <p class="desc2"><?php echo($about_configuration->about_us_desc) ?></p>--}}
                    <div class="desc"><?php echo($out) ?></div>
                    <div class="btn-part mt-45">
                        <a class="readon blue-btn" href="{{route('download.profile')}}">Download Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->
