@extends('layouts.website-template')
@section('main-content')
    @include('home-sections.sliders')
    @include('home-sections.partners')
    @include('home-sections.choose-us')
    @include('home-sections.counters')
    @include('home-sections.about-us')
    @include('home-sections.services')
    @include('home-sections.blogs')
{{--    @include('home-sections.contact-us')--}}
@endsection
