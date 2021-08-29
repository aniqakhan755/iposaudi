@foreach($current_news as $news)
    <?php $description = strip_tags($news->description);
     $output = strlen($description) > 100 ? substr($description,0,100)."......" : $description;
     $title = strlen($news->title) > 70 ? substr($news->title,0,70)."......" : $news->title; ?>

    <div class="blog-wrap">
        <div class="img-part">
            <img loading="lazy" src="{{$news->image}}"  alt="News Image" style="height:200px;">
        </div>
        <div class="content-part">
            <h3 class="title" style="height:100px;"><a href="{{$news->url}}">{{$title}}</a></h3>
            <p class="desc" style="height:80px;">{{$output}}</p>
            <div class="blog-meta">
                <div class="user-data">

                </div>
                <div class="date">
                    <i class="fa fa-clock-o"></i>{{$news->created_at}}
                </div>
            </div>
        </div>
    </div>
@endforeach
