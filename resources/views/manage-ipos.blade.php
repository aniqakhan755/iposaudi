@extends('layouts.dashboard-template')
@section('content')
    <ul class="breadcrumb">

        <li class="breadcrumb-item">
            <a href="{{route('home')}}">Dashboard</a>
        </li>
    </ul>

    <div class="content-i">
        <div class="content-box">
            <div class="row">
                <div class="col-sm-12">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            IPOs
                        </h6>
                        <a class="pull-right btn btn-md mr-4 btn-primary" href="{{route('ipo.add-ipo')}}">Add
                            IPO</a>
                    </div>

                </div>
            </div>
            <div class="table-responsive">
                <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Company Name</th>
                        <th>Offering Size</th>
                        <th>Offering Price</th>
                        <th>Market</th>
                        <th>Offering Date</th>
                        <th>Closing Date</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ipos as $ipo)
                        <tr>
                            <td>{{$loop->iteration}}</td>
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


    <div class="display-type"></div>
    </div>
@endsection
