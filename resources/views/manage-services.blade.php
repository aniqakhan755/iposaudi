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
                            Manage Services
                        </h6>

                            <div class="element-content">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="element-box">
                                            @foreach($service_configurations as $index => $service_configuration)
                                                <form action="{{route('services.post')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="service_id" value="{{$service_configuration->id}}"/>
                                                <fieldset class="form-group">
                                                    <legend><span>Service {{$index + 1}}</span></legend>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="">Title <span class="color-red">*</span></label>
                                                                <input class="form-control" placeholder="Title" required
                                                                       value="{{$service_configuration->service_title}}"
                                                                       type="text" name="service_title">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="">Service Description <span
                                                                        class="color-red">*</span></label>
                                                                <textarea class="form-control" placeholder="Description"
                                                                          required type="text" rows="4"
                                                                          name="service_desc">{{$service_configuration->service_desc}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                    <button class="btn btn-primary" type="submit"> Submit</button>
                                                </form>
                                            @endforeach
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
