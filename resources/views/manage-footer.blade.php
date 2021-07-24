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
                            Manage Footer
                        </h6>

                        <div class="element-content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="element-box">
                                            <form action="{{route('footer.post')}}" method="post"  enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="">Email <span class="color-red">*</span></label>
                                                            <input class="form-control" placeholder="Email" required type="email" name="email" value="{{$footer_configuration->email}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="">Phone <span class="color-red">*</span></label>
                                                            <input class="form-control" placeholder="Phone" required type="text" name="phone" value="{{$footer_configuration->phone}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="">Address <span class="color-red">*</span></label>
                                                            <input class="form-control" placeholder="Address" required type="text" name="address" value="{{$footer_configuration->address}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="">Facebook Url <span class="color-red">*</span></label>
                                                            <input class="form-control" placeholder="Facebook Url" required type="url" name="facebook_url" value="{{$footer_configuration->facebook_url}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="">Twitter Url <span class="color-red">*</span></label>
                                                            <input class="form-control" placeholder="Twitter Url" required type="url" name="twitter_url" value="{{$footer_configuration->twitter_url}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="">Instagram Url <span class="color-red">*</span></label>
                                                            <input class="form-control" placeholder="Instagram Url" required type="url" name="instagram_url" value="{{$footer_configuration->instagram_url}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="">Linked In Url <span class="color-red">*</span></label>
                                                            <input class="form-control" placeholder="Linked In Url" required type="url" name="linked_in_url" value="{{$footer_configuration->linked_in_url}}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="">Upload Footer Background</label>
                                                            <input type="file" class="form-control" id="myFile" name="footer_bg" accept="image/png, image/gif, image/jpeg">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="">Footer Description <span class="color-red">*</span></label>


                                                            <textarea cols="80" id="ckeditor1" name="footer_description" rows="10"><?php echo($footer_configuration->footer_description)?></textarea>
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
