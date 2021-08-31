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
                            ADD IPO

                        </h6>

                        <div class="element-content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="element-box">
                                        <form action="{{route('ipo.post')}}" method="post"  enctype="multipart/form-data">
                                            @csrf
                                            @include('components.includes.ipo-form')
                                        </form>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="display-type"></div>
    </div>
@endsection
