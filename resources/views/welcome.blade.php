@extends('layouts.website-template')
@section('styles')
    <style>
        .rs-slider.slider8 .slider.slide1 {
            background-image: url('assets/images/slider/{{$slider_configuration->image_slider1}}');
        }

        .rs-slider.slider8 .slider.slide2 {
            background-image: url('assets/images/slider/{{$slider_configuration->image_slider2}}');
        }

        @media only screen and (max-width: 575px) {
            .rs-slider.slider8 .slider.slide1 {
                background-image: url('assets/images/slider/{{$slider_configuration->mobile_slider1}}') !important;
            }

            .rs-slider.slider8 .slider.slide2 {
                background-image: url('assets/images/slider/{{$slider_configuration->mobile_slider2}}') !important;
            }
        }
    </style>
@endsection
@section('header')
    @include('components.includes.header')
@endsection
@section('main-content')
    @include('home-sections.sliders')
    @include('home-sections.partners')
    @include('home-sections.choose-us')
    @include('home-sections.about-us')
    @include('home-sections.services')
    @include('home-sections.blogs')
@endsection
