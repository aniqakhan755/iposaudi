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
        <div id="rs-services" class="rs-services style9 modify2 pt-100 pb-84 md-pt-80 md-pb-64">
            <div class="container">
                <div class="row gutter-16">

                    @foreach($service_configurations as $index => $service_configuration)
                        <?php $ext = '.png';
                        $index = $index +1; ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 mb-16">
                            <div class="service-wrap text-center">
                                <div class="icon-part">
                                    <img src="assets/images/service-icons/{{$index.$ext}}" alt="{{$service_configuration->service_title}}">
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
@endsection
