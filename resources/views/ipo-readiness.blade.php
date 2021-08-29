@extends('layouts.website-template')
@section('styles')
    <style>
        #sub-nav {
            display: table;
            table-layout: fixed;
            width: 100%;
        }

        ul.reset, ul.resetCMSListMenuUL {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        #sub-nav li {
            background: #333;
            border-right: 1px solid #fff;
            text-align: center;
            width: 2%;
            line-height: 1.4em;
            vertical-align: middle;
            display: table-cell;
        }

        #sub-nav li a {
            color: #fff;
            text-transform: uppercase;
            display: block;
            padding: 10px 5px;
            text-align: center;
            word-wrap: break-word;
        }

        .bg-smoke {
            background-color: whitesmoke;

        }

        .padded-content {
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 40px;
            padding-right: 40px;
        }

        @media (max-width: 767px) {
            #sub-nav li {
                border: none;
                display: block;
                width: 100%;
            }
            .padded-content{
                padding-left: 20px;
                padding-right: 20px;
            }
        }

        body.home-eight .content-heading {
            font-size: 18px;
            color: #1c3988;
            margin-bottom: 10px;
        }

        .up-next {
            color: #1c3988;
            font-size: 18px;
            font-weight: 700;
        }

        .square-ul {
            list-style-type: square;
            padding-left: 40px;
        }

        #sub-nav .active {
            background: #1c3988;
        }

        .nav-tabs {
            border-bottom: 0;
        }
        .footer-padding{
            padding-top: 20px;
        }
        p{
            margin-bottom: 10px;
        }
    </style>

@endsection
@section('header')
    @include('components.includes.page-header')
@endsection
@section('main-content')

    <!-- Breadcrumbs Section Start -->
    <div class="rs-breadcrumbs bg-2">
        <div class="container">
            <div class="content-part text-center">
                <h1 class="breadcrumbs-title white-color mb-0">IPO Readiness</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs Section End -->
    <div class="bg-smoke">
        <div class=" inner pt-40 lg-pt-40 md-pt-40 pb-100 md-pb-80">
            <div class="container">
                <ul id="sub-nav" class="resetCMSListMenuUL nav nav-tabs">


                    <li class="resetCMSListMenuHighlightedLI">
                        <a class="active" data-toggle="tab" href="#overview">Overview</a></li>

                    <li class="resetCMSListMenuHighlightedLI">
                        <a data-toggle="tab" href="#ipo-journey">IPO Journey</a>
                    </li>

                    <li class="resetCMSListMenuHighlightedLI">
                        <a data-toggle="tab" href="#pre-ipo-consideration">Pre-IPO Consideration</a>
                    </li>

                    <li class="resetCMSListMenuHighlightedLI">
                        <a data-toggle="tab" href="#expert-help">Expert Help</a>
                    </li>
                </ul>
            </div>
            <div class="item-view section no-top-padding">
                <div class="container">
                    <div class="row eh">
                        <div class="col-md-12">
                            <div class="white-bg clearfix">
                                <div class="padded-content tab-content">
                                    <div id="overview" class="tab-pane active in">
                                        @include('components.ipo-readiness-sections.overview')

                                    </div>
                                    <div class="tab-pane fade" id="ipo-journey">
                                        @include('components.ipo-readiness-sections.ipo-journey')

                                    </div>
                                    <div class="tab-pane fade" id="pre-ipo-consideration">
                                        @include('components.ipo-readiness-sections.pre-ipo-consideration')
                                    </div>
                                    <div class="tab-pane fade" id="expert-help">
                                        @include('components.ipo-readiness-sections.expert-help')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
@section('scripts')
    <script>

        $('.footer-link a').on('click', function () {
            $('#sub-nav').find('a.active').removeClass('active');
            const href = $(this).attr('href');
            $('#sub-nav').find('a[href=' + href + ']').addClass('active');
        });
    </script>
@endsection
