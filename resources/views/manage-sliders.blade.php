@extends('layouts.dashboard-template')
@section('content')
    <ul class="breadcrumb">

        <li class="breadcrumb-item">
            <a href="{{route('home')}}">Dashboard</a>
        </li>
    </ul>

    <div class="content-i">
        <div class="content-box" >
            <div class="row">
                <div class="col-sm-12">
                    <div class="element-wrapper">
                        <h6 class="element-header">
                            Manage Sliders
                        </h6>
                        <form action="{{route('sliders.post')}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="element-content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="element-box">

                                        <fieldset class="form-group">
                                            <legend><span>Slider 1</span></legend>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Title <span class="color-red">*</span></label>
                                                        <input class="form-control" required placeholder="Title" type="text" value="{{$slider_configuration->sl_title_1}}" name="sl_title_1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">SubTitle <span class="color-red">*</span></label><input required class="form-control" value="{{$slider_configuration->sl_subtitle_1}}" placeholder="SubTitle" type="text" name="sl_subtitle_1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Upload Slider Image</label>
                                                        <input type="file" class="form-control" id="myFile" name="image_slider1">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <legend><span>Slider 2</span></legend>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Title <span class="color-red">*</span></label>
                                                        <input class="form-control" required placeholder="Title" type="text" value="{{$slider_configuration->sl_title_2}}" name="sl_title_2">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">SubTitle <span class="color-red">*</span></label><input required class="form-control" value="{{$slider_configuration->sl_title_2}}" placeholder="SubTitle" type="text" name="sl_subtitle_2">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Upload Slider Image</label>
                                                        <input type="file" class="form-control" id="myFile" name="image_slider2">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>


                                        <div class="form-buttons-w">
                                            <button class="btn btn-primary" type="submit"> Submit</button>
                                        </div>


                                    </div>

                                </div>


                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="display-type"></div>
    </div>
@endsection
