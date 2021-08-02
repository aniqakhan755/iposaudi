@extends('layouts.website-template')
@section('header')
    @include('components.includes.page-header')
@endsection
@section('main-content')

        <!-- Breadcrumbs Section Start -->
        <div class="rs-breadcrumbs bg-2">
            <div class="container">
                <div class="content-part text-center">
                    <h1 class="breadcrumbs-title white-color mb-0">Services</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumbs Section End -->

        <!-- Services Section Start -->
        <div id="rs-services" class="rs-services style1 modify2 pt-100 pb-84 md-pt-80 md-pb-64">
            <div class="container">
                <div class="row gutter-16">

                    @foreach($service_configurations as $service_configuration)
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-16">
                            <div class="service-wrap text-center">
                                <div class="icon-part">
                                    <img src="{{asset('assets/images/services/style9/'.$service_configuration->service_icon)}}" alt="">
                                </div>
                                <h5 class="title">{{$service_configuration->service_title}}</h5>
                                {{--                        <div class="desc">{{$service_configuration->service_desc}}</div>--}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Services Section End -->

        <!-- Cta Section Start -->
        <div class="rs-cta bg21 pt-90 pb-100 md-pt-68 md-pb-80">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title modify white">Any plan to start a project</div>
                    <h2 class="title3 white-color">Our Experts always ready to work <br> with you.</h2>
                    <div class="btn-part">
                        <a class="readon banner-style" href="contact.html">Get started</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cta Section End -->





@endsection
