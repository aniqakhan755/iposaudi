<!-- Why Choose Section Start -->
<?php $desc1 = strlen($choose_configuration->heading1_desc) > 220 ? substr($choose_configuration->heading1_desc, 0, 220) . "......" : $choose_configuration->heading1_desc; ?>
<?php $desc2 = strlen($choose_configuration->heading2_desc) > 220 ? substr($choose_configuration->heading2_desc, 0, 220) . "......" : $choose_configuration->heading2_desc; ?>
<div class="row">
    <div class="col-lg-6 pr-70 md-pr-15 md-mb-50">
        <div class="sec-title4 mb-35">
            <h2 class="title pb-20">{{$choose_configuration->choose_us_title}}</h2>
            {{--                    <p class="margin-0">We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms</p>--}}
        </div>
        <div id="accordion" class="accordion">
            <div class="card">
                <div class="card-header">
                    <a class="card-link" data-toggle="collapse"
                       href="#collapseOne"><span>{{$choose_configuration->heading_1}}</span></a>
                </div>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                    <div class="card-body">
                        <div
                            class="desc"><?php echo($desc1)?> @if(strlen($choose_configuration->heading1_desc) > 220)
                                <a href="{{route('choose-us.read-more')}}">Read More</a> @endif</div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse"
                       href="#collapseTwo">{{$choose_configuration->heading_2}}</a>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <div
                        class="card-body"><?php echo($desc2)?> @if(strlen($choose_configuration->heading2_desc) > 200)
                            <a href="{{route('choose-us.read-more')}}">Read More</a> @endif</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="about-content">
            <div class="images-part">
                <img loading="lazy" src="{{asset('assets/images/whychooseus/'.$choose_configuration->image_choose_us)}}"
                     alt="Profile Image">
            </div>
        </div>
    </div>
</div>
