@extends('public.public')

@section('blog_id','blog')

@section('banner')
<!-- banner start -->
<div class="am-g am-g-fixed blog-fixed am-u-sm-centered blog-article-margin">
    <div data-am-widget="slider" class="am-slider am-slider-b1" data-am-slider='{&quot;controlNav&quot;:false}' >
    <ul class="am-slides">
      <li>
            <img src="assets/i/b1.jpg">
            <div class="blog-slider-desc am-slider-desc ">
                <div class="blog-text-center blog-slider-con">
                    <span><a href="" class="blog-color">Article &nbsp;</a></span>               
                    <h1 class="blog-h-margin"><a href="">总在思考一句积极的话</a></h1>
                    <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                    </p>
                    <span class="blog-bor">2015/10/9</span>
                    <br><br><br><br><br><br><br>
                </div>
            </div>
      </li>
      <li>
            <img src="assets/i/b2.jpg">
            <div class="am-slider-desc blog-slider-desc">
                <div class="blog-text-center blog-slider-con">
                    <span><a href="" class="blog-color">Article &nbsp;</a></span>               
                    <h1 class="blog-h-margin"><a href="">总在思考一句积极的话</a></h1>
                    <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                    </p>
                    <span>2015/10/9</span>
                </div>
            </div>
      </li>
      <li>
            <img src="assets/i/b3.jpg">
            <div class="am-slider-desc blog-slider-desc">
                <div class="blog-text-center blog-slider-con">
                    <span><a href="" class="blog-color">Article &nbsp;</a></span>               
                    <h1 class="blog-h-margin"><a href="">总在思考一句积极的话</a></h1>
                    <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                    </p>
                    <span>2015/10/9</span>
                </div>
            </div>
      </li>
      <li>
            <img src="assets/i/b2.jpg">
            <div class="am-slider-desc blog-slider-desc">
                <div class="blog-text-center blog-slider-con">
                    <span><a href="" class="blog-color">Article &nbsp;</a></span>               
                    <h1 class="blog-h-margin"><a href="">总在思考一句积极的话</a></h1>
                    <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                    </p>
                    <span>2015/10/9</span>
                </div>
            </div>
      </li>
    </ul>
    </div>
</div>
<!-- banner end -->
@endsection

@section('content')
<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-md-8 am-u-sm-12">
        @foreach($texts as $text)
        <div class="am-list-news" >
            <article class="am-g blog-entry-article">
                <div class="am-u-lg-4 am-u-md-12 am-u-sm-12 blog-entry-img">
                    <img src="{{ asset('storage/'.$text->image) }}" alt="" class="am-u-sm-12">
                </div>
                <div class="am-u-lg-8 am-u-md-12 am-u-sm-12 blog-entry-text">
                    <span><a href="{{ url('/') }}" class="blog-color">article &nbsp;&nbsp;</a></span>
                    <span> @leo_qin &nbsp;&nbsp;</span>
                    <span>{{ $text->updated_at }}</span>
                    <h1><a href="{{ url('/article/'.$text->id) }}">{{ $text->title }}</a></h1>
                    <p>{{ $text->summary }}</p>
                    <p><a href="" class="blog-continue">continue reading</a></p>
                </div>
            </article>
        </div>
        @endforeach
        {{ $texts->links() }}
    </div>
    @include('public.aboutme')
</div>
<!-- content end -->
@endsection