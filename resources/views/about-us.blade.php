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
                            Manage About
                        </h6>
                        <form action="{{route('about.post')}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="element-content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="element-box">

                                        <fieldset class="form-group">
                                            <legend><span>About Us</span></legend>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Title <span class="color-red">*</span></label>
                                                        <input class="form-control" placeholder="Title" type="text" name="about_us_title" value="{{$about_configuration->about_us_title}}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">SubTitle <span class="color-red">*</span></label><input class="form-control" placeholder="SubTitle" type="text" value="{{$about_configuration->about_us_subtitle}}" name="about_us_subtitle">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">About Desc <span class="color-red">*</span></label>


                                                        <textarea cols="80" id="ckeditor1" name="about_us_desc" rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Upload About Image</label>
                                                        <input type="file" class="form-control" id="myFile" name="image_about">
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
