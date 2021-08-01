
<!-- Blog Section Start -->
<div id="rs-blog" class="rs-blog style1 modify2 green shape-bg5 mt-92 md-mt-72 sm-mt-0 sm-pt-72 pb-70 md-pb-50">
    <div class="container">
        <div class="sec-title text-center mb-151 md-mb-80 sm-mb-41">
            <div class="sub-title gray-color">News</div>
            <h2 class="title mb-0">Read More About Latest Jobs <span class="d-block blue-color">& Training Updates</span></h2>
        </div>
        <div class="rs-carousel owl-carousel dot-style1" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-lg-device="3" data-md-device-nav="false" data-md-device-dots="false">
            @foreach($current_news as $news)
                <?php $output = strlen($news->description) > 100 ? substr($news->description,0,100)."......" : $news->description; ?>
                <?php $title = strlen($news->title) > 80 ? substr($news->title,0,80)."......" : $news->title; ?>

                <div class="blog-wrap">
                <div class="img-part">
                    <img src="{{$news->image}}" alt="News Image" style="height:200px;">
                </div>
                <div class="content-part">
                    <h3 class="title" style="height:100px;"><a href="{{$news->url}}">{{$title}}</a></h3>
                    <p class="desc" style="height:80px;">{{$output}}</p>
                    <div class="blog-meta">
                        <div class="user-data">

                        </div>
                        <div class="date">
                            <i class="fa fa-clock-o"></i>{{$news->created_at}}
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </div>
</div>
<!-- Blog Section End -->
