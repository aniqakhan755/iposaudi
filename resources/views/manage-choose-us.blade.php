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
                            Manage Choose Us
                        </h6>

                        <div class="element-content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="element-box">
                                        <form action="{{route('choose-us.post')}}" method="post"  enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Title <span class="color-red">*</span></label>
                                                        <input class="form-control" placeholder="Title" required type="text" name="choose_us_title" value="{{$choose_configuration->choose_us_title}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Upload Choose Us Image</label>
                                                        <input type="file" class="form-control" id="myFile" name="image_choose_us" accept="image/png, image/gif, image/jpeg">
                                                        <p class="color-red">Image Size: 768 x 729</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                            <label for="">Heading 1<span class="color-red">*</span></label>
                                                        <input class="form-control" placeholder="Heading 1" required type="text" name="heading_1" value="{{$choose_configuration->heading_1}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Heading 1 Description <span class="color-red">*</span></label>


                                                        <textarea cols="80" id="ckeditor1" name="heading1_desc" rows="10"><?php echo($choose_configuration->heading1_desc)?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Heading 2 <span class="color-red">*</span></label>
                                                        <input class="form-control" placeholder="Heading 2" required type="text" name="heading_2" value="{{$choose_configuration->heading_2}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Heading 2 Description <span class="color-red">*</span></label>


                                                        <textarea cols="80" id="ckeditor2" name="heading2_desc" rows="10"><?php echo($choose_configuration->heading2_desc)?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-buttons-w">
                                                <button class="btn btn-primary" type="submit"> Submit</button>
                                            </div>

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
