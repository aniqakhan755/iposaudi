@extends('layouts.website-template')
@section('header')
    @include('components.includes.page-header')
@endsection
@section('styles')
    <link href="{{ asset('bower_components/toastr/toastr.min.css')}} " rel="stylesheet">
@endsection

@section('main-content')
    <div class="rs-breadcrumbs bg-1">
        <div class="container">
            <div class="content-part text-center">
                <h1 class="breadcrumbs-title white-color mb-0">Contact Us</h1>
            </div>
        </div>
    </div>
    <div id="rs-contact" class="rs-contact style1 inner pt-100 lg-pt-92 md-pt-80 pb-100 md-pb-80">
        <div class="container">
            <div class="row mb-64 lg-mb-30 md-mb-0">
                <form id="contact-form" class="contact-form" method="post" action="{{route('iposaudi.contact')}}">
                    @csrf
                    <div class="row">

                        <div class="col-lg-12 white-bg">
                            <div class="sec-title mb-45">
                                <h2 class="title mb-0">Get In Touch</h2>
                            </div>
                            <div id="form-messages">
                                @if(isset($message))
                                    {{$message}}
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-30">
                                    <div class="common-control form-group mb-0">
                                        <input type="text" name="name" placeholder="Name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-30">
                                    <div class="common-control form-group mb-0">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-30">
                                    <div class="common-control form-group mb-0">
                                        <textarea name="message" placeholder="Your Message Here" required=""></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <input type="submit" id="submit" class="btn btn-primary primary btn-submit" value="Submit">

                </form>
            </div>
            <!-- About Section End -->


            @endsection
            @section('scripts')
                <script src="{{ asset('bower_components/toastr/toastr.min.js')}}"></script>
                <script>
                    $(document).ready(function () {
                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": true,
                            "positionClass": "toast-bottom-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1500",
                            "timeOut": "5000",
                            "extendedTimeOut": "1500",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }

                        @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                        toastr.error("{{ $error }}");
                        @endforeach
                        @endif

                        @if(Session::has('success'))
                        toastr.success("{{ Session::get('success') }}");
                        @endif

                        @if(Session::has('info'))
                        toastr.info("{{ Session::get('info') }}");
                        @endif

                        @if(Session::has('warning'))
                        toastr.warning("{{ Session::get('warning') }}");
                        @endif

                        $('.dropify').dropify();
                    })

                </script>

@endsection
