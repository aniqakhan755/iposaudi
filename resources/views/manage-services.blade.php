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
                            Manage Services
                        </h6>
                        <form action="{{route('services.post')}}" method="post">
                            @csrf
                        <div class="element-content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="element-box">

                                        <fieldset class="form-group">
                                            <legend><span>Service 1</span></legend>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Title</label>
                                                        <input class="form-control" placeholder="Title" required  value="{{$service_configuration->service_title_1}}" type="text" name="service_title_1" >
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Service Description</label>
                                                        <textarea class="form-control" placeholder="Description"  required   type="text" rows="4" name="service_desc_1">{{$service_configuration->service_desc_1}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <legend><span>Service 2</span></legend>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Title</label>
                                                        <input class="form-control" placeholder="Title" required type="text" value="{{$service_configuration->service_title_2}}"  name="service_title_2">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Service Description</label>
                                                        <textarea class="form-control" placeholder="Description" required type="text"   rows="4" name="service_desc_2">{{$service_configuration->service_desc_2}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <legend><span>Service 3</span></legend>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Title</label>
                                                        <input class="form-control" placeholder="Title" required type="text" name="service_title_3" value="{{$service_configuration->service_title_3}}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Service Description</label>
                                                        <textarea class="form-control" placeholder="Description" required type="text" rows="4" name="service_desc_3">{{$service_configuration->service_desc_3}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <legend><span>Service 4</span></legend>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Title</label>
                                                        <input class="form-control" placeholder="Title" required type="text" value="{{$service_configuration->service_title_4}}" name="service_title_4">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Service Description</label>
                                                        <textarea class="form-control" placeholder="Description" required type="text" rows="4" name="service_desc_4">{{$service_configuration->service_desc_4}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <legend><span>Service 5</span></legend>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Title</label>
                                                        <input class="form-control" placeholder="Title" required type="text" value="{{$service_configuration->service_title_5}}" name="service_title_5">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Service Description</label>
                                                        <textarea class="form-control" placeholder="Description" required type="text" rows="4" name="service_desc_5">{{$service_configuration->service_desc_5}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <legend><span>Service 6</span></legend>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Title</label>
                                                        <input class="form-control" placeholder="Title" type="text" required value="{{$service_configuration->service_title_6}}" name="service_title_6">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Service Description</label>
                                                        <textarea class="form-control" placeholder="Description" type="text" required rows="4" name="service_desc_6">{{$service_configuration->service_desc_6}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <legend><span>Service 7</span></legend>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Title</label>
                                                        <input class="form-control" placeholder="Title" required value="{{$service_configuration->service_title_7}}" type="text" name="service_title_7">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Service Description</label>
                                                        <textarea class="form-control" placeholder="Description"required type="text" rows="4" name="service_desc_7">{{$service_configuration->service_desc_7}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <legend><span>Service 8</span></legend>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Title</label>
                                                        <input class="form-control" placeholder="Title" required value="{{$service_configuration->service_title_8}}" type="text" name="service_title_8">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Service Description</label>
                                                        <textarea class="form-control" placeholder="Description" required type="text" rows="4" name="service_desc_8">{{$service_configuration->service_desc_8}}</textarea>
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
