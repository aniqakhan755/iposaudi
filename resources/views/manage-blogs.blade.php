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
                            Blogs
                        </h6>
                        <a class="pull-right btn btn-md mr-4 btn-primary" href="{{route('blog.create-post')}}">Post New Blog</a>
                    </div>

                </div>
            </div>
            <div class="table-responsive">
                <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>URL</th>
                        <th>Published Date</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($news as $current_news)
                        <tr>
                            <td>{{$current_news->id}}</td>
                            <td>{{$current_news->title}}</td>
                            <td><?php echo($current_news->description) ?></td>
                            <td>{{$current_news->url}}</td>
                            <td>{{$current_news->pulished_date}}</td>
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
