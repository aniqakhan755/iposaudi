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
                            Manage Sliders
                        </h6>
                        <div class="element-content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="element-box">

                                        <fieldset class="form-group">
                                            <legend><span>Slider 1</span></legend>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Title</label>
                                                        <input class="form-control" placeholder="Title" type="text" name="sl_title_1">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">SubTitle</label><input class="form-control" placeholder="SubTitle" type="text" name="sl_subtitle_1">
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
                                                        <label for="">Title</label>
                                                        <input class="form-control" placeholder="Title" type="text" name="sl_title_2">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">SubTitle</label><input class="form-control" placeholder="SubTitle" type="text" name="sl_subtitle_2">
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
                    </div>
                </div>
            </div>


        </div>
        <!--------------------
        START - Sidebar
        -------------------->
        <div class="content-panel">
            <div class="content-panel-close">
                <i class="os-icon os-icon-close"></i>
            </div>
            <div class="element-wrapper">
                <h6 class="element-header">
                    Quick Links
                </h6>
                <div class="element-box-tp">
                    <div class="el-buttons-list full-width">
                        <a class="btn btn-white btn-sm" href="#"><i class="os-icon os-icon-delivery-box-2"></i><span>Create New Product</span></a><a
                            class="btn btn-white btn-sm" href="#"><i class="os-icon os-icon-window-content"></i><span>Customer Comments</span></a><a
                            class="btn btn-white btn-sm" href="#"><i class="os-icon os-icon-wallet-loaded"></i><span>Store Settings</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!--------------------
        END - Sidebar
        -------------------->
    </div>

    <div class="display-type"></div>
    </div>
@endsection
