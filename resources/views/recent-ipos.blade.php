@extends('layouts.website-template')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/rowReorder.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.dataTables.min.css')}}">
    <link href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/housing.css')}}" async defer>
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

            .padded-content {
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

        .footer-padding {
            padding-top: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        .row-search {
            display: flex;
            align-items: center;
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
                <h1 class="breadcrumbs-title white-color mb-0">Recent IPOS</h1>
            </div>
        </div>
    </div>

    <div class="bg-smoke">
        <div class=" inner pt-40 lg-pt-40 md-pt-40 pb-100 md-pb-80">
            <div class="item-view section no-top-padding">
                <div class="container">

                    <div class="row eh">
                        <div class="col-md-12">
                            <div class="white-bg clearfix p-4">
                                <form method="POST" action="{{route('recent-ipo.search')}}">
                                    @csrf
                                    <div class="row row-search">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="">Market Type</label>
                                                @php $market_types = ['Main Market','Nomu - Parallel Market','Sukuk and Bond']; @endphp
                                                <select class="form-control" name="market_type" required>
                                                    <option selected disabled>Select Market</option>
                                                    @foreach($market_types as $type)
                                                        <option
                                                            @if(isset($input['market_type']) && $input['market_type'] == $type) selected
                                                            @endif>{{$type}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                @php $instruments = ['REITs','CEFs','ETFs','Corporate Sukuk','Government Debt Instrument']; @endphp
                                                <label for="">Instrument</label>
                                                <select class="form-control" name="instrument" required>
                                                    <option selected disabled>Select Instrument</option>
                                                    @foreach($instruments as $instrument)
                                                        <option
                                                            @if(isset($input['instrument']) && $input['instrument'] === $instrument) selected
                                                            @endif value="{{$instrument}}">{{$instrument}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="">Offering Date</label>
                                                <input class="single-daterange form-control" name="offering_date"
                                                       placeholder="Offering Date" type="text"
                                                       value="@if(isset($input['offering_date'])) {{$input['offering_date']}} @else 2021/01/01 @endif">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="">Closing Date</label>
                                                <input class="single-daterange form-control" name="closing_date"
                                                       placeholder="Closing Date" type="text"
                                                       value="@if(isset($input['closing_date'])) {{$input['closing_date']}} @else 2021/12/31 @endif">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">

                                            <button class="btn btn-md btn-primary btn-search-style mt-3" type="submit">
                                                <i class="fa fa-search mx-2"></i>Search
                                            </button>
                                        </div>

                                    </div>
                                </form>
                                <div class="row">
                                    <div id="admin" class="col s12 p-4">
                                        <div class="card material-table">
                                            <div class="table-header">
                                                <span class="table-title">All Results</span>

                                            </div>

                                            {{--                                                                                <div style="display: none" id="property-logs-block">--}}
                                            <table class="table-responsive-sm display " id="societies-table"
                                                   style="width: 100%">
                                                <thead>
                                                <tr>
                                                    <th class="color-white">#</th>
                                                    <th class="color-white">Company Name</th>
                                                    <th class="color-white">Offering Size</th>
                                                    <th class="color-white">Offering Price</th>
                                                    <th class="color-white">Market</th>
                                                    <th class="color-white">Offering Date</th>
                                                    <th class="color-white">Closing Date</th>
                                                </tr>
                                                </thead>
                                                <tbody id="tbody-property-logs">
                                                @foreach($ipos as $index => $ipo)
                                                    <tr>
                                                        <td>{{$index + 1}}</td>
                                                        <td>{{$ipo->company_name}}</td>
                                                        <td>{{$ipo->offering_size}}</td>
                                                        <td>{{$ipo->offering_price}}</td>
                                                        <td>{{$ipo->instrument}}</td>
                                                        <td>{{$ipo->offering_date}}</td>
                                                        <td>{{$ipo->closing_date}}</td>

                                                    </tr>
                                                @endforeach


                                                </tbody>
                                            </table>

                                        </div>
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
    <script type="text/javascript" charset="utf8" src="{{asset('assets/js/datatables.min.js')}}"></script>
    <script type="text/javascript" charset="utf8" src="{{asset('assets/js/dataTables.rowReorder.min.js')}}"></script>
    <script type="text/javascript" charset="utf8" src="{{asset('assets/js/dataTables.responsive.min.js')}}"></script>
    <script type="text/javascript" charset="utf8" src="{{asset('assets/js/recent-ipo.js')}}"></script>
    <script src="{{ asset('bower_components/moment/moment.js')}}"></script>
    <script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script>
        $('input.single-daterange').daterangepicker({
            "singleDatePicker": true,
            locale: {
                format: 'YYYY/MM/DD'
            }
        });
        $('input.multi-daterange').daterangepicker({
            "startDate": "03/28/2017",
            "endDate": "04/06/2017"
        }); // #5. DATATABLES
    </script>
@endsection

