<!-- Footer Start -->
<footer id="rs-footer" class="rs-footer">
    <div class="container">
        <div class="footer-content pt-40 pb-20">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 footer-widget footer-about">
                    <div class="about-widget pr-15">
                        <div class="logo-part">
                            <a href="{{route('welcome')}}"><img src="{{asset('assets/images/logo-white.png')}}"
                                                                alt="Footer Logo"></a>
                        </div>
                        <p class="desc"><?php echo($footer_configuration->footer_description) ?></p>
                        {{--                        <div class="btn-part">--}}
                        {{--                            <a class="readon" href="#">Discover More</a>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 md-mb-32 footer-widget footer-contact">
                    <h4 class="widget-title">Contact Info</h4>
                    <ul class="address-widget pr-40">
                        <li>
                            <i class="flaticon-location"></i>
                            <div class="desc">{{$footer_configuration->address}}</div>
                        </li>
                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                                <a href="tel:+8801739753105">{{$footer_configuration->phone}}</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">
                                <a href="mailto:{{$footer_configuration->email}}">{{$footer_configuration->email}}</a>
                            </div>
                        </li>
                        {{--                        <li>--}}
                        {{--                            <i class="flaticon-clock"></i>--}}
                        {{--                            <div class="desc">--}}
                        {{--                                {{$footer_configuration->time}}--}}
                        {{--                            </div>--}}
                        {{--                        </li>--}}
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 footer-widget">
                    <h4 class="widget-title">Latest Posts</h4>
                    <div class="footer-post">
                        @foreach($current_news as $index => $news)
                            <?php $title = strlen($news->title) > 60 ? substr($news->title,0,60)."......" : $news->title; ?>
                            @if($index < 3 )
                            <div class="post-wrap mb-15">

                                <div class="post-img">
                                    <a href="{{$news->url}}"><img src="{{$news->image}}" alt="Footer Image"></a>
                                </div>
                                <div class="post-desc" style="display:block;">
                                    <a href="{{$news->url}}">{{$title}}</a>
                                </div>
                            </div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="row y-middle">
                <div class="col-lg-6 col-md-8 sm-mb-21">
                    <div class="copyright">
                        <p>© Copyright 2021 IPOSaudi. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 text-right sm-text-center">
                    <ul class="footer-social">
                        <li><a href="{{$footer_configuration->facebook_url}}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{$footer_configuration->twitter_url}}"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{$footer_configuration->instagram_url}}"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="{{$footer_configuration->linked_in_url}}"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
