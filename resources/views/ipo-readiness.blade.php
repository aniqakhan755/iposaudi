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
        }

        body.home-eight .content-heading {
            font-size: 18px;
            color: #1c3988;
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

        #sub-nav .resetCMSListMenuHighlightedLI {
            background: #1c3988;
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
    <?php $section_list = ['overview', 'ipo-journey', 'pre-ipo-consideration', 'expert-help']?>
    <!-- Breadcrumbs Section End -->
    <div class="bg-smoke">
        <div class=" inner pt-100 lg-pt-92 md-pt-80 pb-100 md-pb-80">
            <div class="container">
                <ul id="sub-nav" class="resetCMSListMenuUL">
                    @foreach($section_list as $sec)

                        <li @if($sec === $section)class="resetCMSListMenuHighlightedLI" @endif>
                            <a href="{{route('ipo.readiness',$sec)}}">{{str_replace("-"," ",$sec)}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="item-view section no-top-padding">
                <div class="container">
                    <div class="row eh">
                        <div class="col-md-12">
                            <div class="white-bg clearfix">
                                <div class="padded-content">
                                    @include('components.ipo-readiness-sections.'.$section)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
