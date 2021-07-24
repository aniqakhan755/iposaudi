<!-- Why Choose Section Start -->
<div class="rs-whychooseus style4 pt-100 md-pt-72 md-pt-80 pb-100 lg-pb-93 md-pb-70">
    <div class="container">
        <div class="row md-col-padding">
            <div class="col-lg-6 pr-110 lg-pr-30">
                <div class="sec-title mb-40">
                    <h2 class="title mb-18">{{$choose_configuration->choose_us_title}}</h2>
                </div>
                <?php $desc1 = strlen($choose_configuration->heading1_desc) > 180 ? substr($choose_configuration->heading1_desc,0,180)."......" : $choose_configuration->heading1_desc; ?>
                <?php $desc2 = strlen($choose_configuration->heading2_desc) > 180 ? substr($choose_configuration->heading2_desc,0,180)."......" : $choose_configuration->heading2_desc; ?>
                <div class="content-part mb-15">
                    <div class="text-part">
                        <h4 class="title blue-color">{{$choose_configuration->heading_1}}</h4>
                        <div class="desc"><?php echo($desc1)?></div>
                    </div>
                </div>
                <div class="content-part">
                    <div class="text-part">
                        <h4 class="title blue-color">{{$choose_configuration->heading_2}}</h4>
                        <div class="desc"><?php echo($desc2)?></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pl-0 md-mb-30 md-order-first">
                <div class="image-part">
                    <img src="{{asset('assets/images/whychooseus/'.$choose_configuration->image_choose_us)}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Section End -->
