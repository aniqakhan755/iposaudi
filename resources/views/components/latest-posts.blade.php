@foreach($current_news as $index => $news)
    <?php $title = strlen($news->title) > 60 ? substr($news->title,0,60)."......" : $news->title; ?>
    <div class="post-wrap mb-15">

{{--        <div class="post-img">--}}
{{--            <a href="{{$news->url}}"><img src="{{$news->image}}" alt="{{$news->title}}"></a>--}}
{{--        </div>--}}
        <div class="post-desc" style="display:block;">
            <a href="{{$news->url}}">{{$title}}</a>
        </div>
    </div>
    @endforeach

