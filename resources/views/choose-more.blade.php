@extends('layouts.website-template')
@section('main-content')
    <!-- About Section Start -->
    <div class="rs-about inner pt-100 lg-pt-92 md-pt-80 pb-100 md-pb-80">
        <div class="container">
            <div class="row mb-64 lg-mb-30 md-mb-0">
                <div class="col-lg-4 md-mb-95">
                    <div class="image-part">
                        <img src="{{asset('assets/images/whychooseus/'.$choose_configuration->image_choose_us)}}" alt="">
                        <div class="author-info">
                            <h3 class="name">Faisal Siddique</h3>
                            <span class="designation">CFO & Founder</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 pl-50 md-pl-15 pr-50 lg-pr-15">
                    <div class="sec-title  mb-25">
                        <h2 class="title mb-18">{{$choose_configuration->choose_us_title}}</h2>
                    </div>
                    <div class="content-part mb-15 choose-more-style">
                        <div class="text-part">
                            <h4 class="title blue-color">{{$choose_configuration->heading_1}}</h4>
                            <div class="desc"><?php echo($choose_configuration->heading1_desc) ?></div>
                        </div>
                    </div>
                    <div class="content-part choose-more-style">
                        <div class="text-part">
                            <h4 class="title blue-color">{{$choose_configuration->heading_2}}</h4>
                            <div class="desc"><?php echo($choose_configuration->heading2_desc) ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->


@endsection
