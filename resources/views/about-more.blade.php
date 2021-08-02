@extends('layouts.website-template')
@section('header')
    @include('components.includes.page-header')
@endsection
@section('main-content')
    <div class="rs-breadcrumbs bg-1">
        <div class="container">
            <div class="content-part text-center">
                <h1 class="breadcrumbs-title white-color mb-0">About</h1>
            </div>
        </div>
    </div>
    <!-- About Section Start -->
    <div class="rs-about inner pt-100 lg-pt-92 md-pt-80 pb-100 md-pb-80">
        <div class="container">
            <div class="row mb-64 lg-mb-30 md-mb-0">
                <div class="col-lg-4 md-mb-95">
                    <div class="image-part">
                        <img src="{{asset('assets/images/about/'.$about_configuration->image_about)}}" alt="">
{{--                        <div class="author-info">--}}
{{--                            <h3 class="name">Faisal Siddique</h3>--}}
{{--                            <span class="designation">CFO & Founder</span>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-8 pl-50 md-pl-15 pr-50 lg-pr-15">
                    <div class="sec-title">
                        <div class="sub-title gray-color">About Us</div>
                        <h2 class="title mb-30">{{$about_configuration->about_us_title}} <span class="d-block blue-color">{{$about_configuration->about_us_subtitle}} </span></h2>
                        {{--                                <p class="desc2"><?php echo($about_configuration->about_us_desc) ?></p>--}}
                        <div class="desc"><?php echo($about_configuration->about_us_desc) ?></div>
                        <div class="btn-part mt-45">
                            <a class="readon blue-btn" href="{{route('download.profile')}}">Download Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->


@endsection
