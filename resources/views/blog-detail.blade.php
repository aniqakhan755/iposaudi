@extends('layouts.website-template')
@section('styles')
    <style>
        .blog-title {
            font-size: 36px;
            line-height: 40px;
        }

        .rs-blog  .article-content .description {
            font-weight: 500;
            font-size: 18px;
            color: #1c3988;
        }
        @media only screen and (max-width: 480px){
            .blog-title {
                font-size: 23px;
                line-height: 37px;
            }
        }

    </style>
@endsection
@section('header')
    @include('components.includes.page-header')
@endsection
@section('main-content')
    <div class="rs-blog inner single pt-100 pb-100 md-pt-80 md-pb-80">
        <?php
        $file_syntax = str_replace(' ', '-', strtolower($blog->title));
        $base_url = env('BASE_URL');
        $image_banner = $base_url . '/assets/images/blogs/' . $file_syntax . '-' . 770 . 'x' . 300 . '.webp';
        $image_thumbnail = $base_url . '/assets/images/blogs/' . $file_syntax . '-' . 84 . 'x' . 45 . '.webp';



        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-part">
                        <div class="blog-img">
                            <a href="#"><img src="{{$image_banner}}" alt="{{$blog->title}}"></a>
                        </div>
                        <div class="article-content shadow mb-60">
                            <ul class="blog-meta mb-22">
                                <li><i class="fa fa-calendar-check-o"></i>{{$blog->created_at->format('Y-m-d H:i:s')}}
                                </li>
                            </ul>
                            <h1 class="blog-title">{{$blog->title}}</h1>
                            <h2 class="description"><?php echo($blog->description) ?></h2>
                            <div class="desc mb-35"><?php echo($blog->content) ?></div>


                        </div>

                    </div>
                </div>

                <div class="col-lg-4 md-mb-50 pl-35 lg-pl-15 md-order-first">
                    <div id="sticky-sidebar" class="blog-sidebar">

                        <div class="sidebar-popular-post sidebar-grid shadow mb-50">
                            <div class="sidebar-title">
                                <h3 class="title mb-20">Recent Post</h3>
                            </div>
                            @foreach($current_news as $news)
                                <div class="single-post mb-20">
                                    <div class="post-image">
                                        <a href="{{$news->url}}"><img src="{{$news->image}}"
                                                                        alt="post image"></a>
                                    </div>
                                    <div class="post-desc">
                                        <div class="post-title">
                                            <h5 class="margin-0"><a href="{{$news->url}}">{{$news->title}}</a></h5>
                                        </div>
                                        <ul>
                                            <li><i class="fa fa-calendar"></i>{{$news->created_at->format('Y-m-d H:i:s')}}</li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
            <div id="sticky-end"></div>
        </div>
    </div>


@endsection
