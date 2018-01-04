@extends('public.public')

@section('blog_id','blog')

@section('content')
<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed blog-content">
    <div class="am-u-md-8 am-u-sm-12">
      <article class="am-article blog-article-p">
        <div class="am-article-hd">
          <h1 class="am-article-title blog-text-center">{{ $article->title }}</h1>
          <p class="am-article-meta blog-text-center">
              <span><a href="{{ url('/') }}" class="blog-color">article &nbsp;&nbsp;</a></span>-
              <span><a href="#">@leo_qin &nbsp;&nbsp;</a></span>-
              <span><a href="#">{{ $article->updated_at }}</a></span>
          </p>
        </div>        
        <div class="am-article-bd">
        <img src="{{ asset('storage/'.$article->image) }}" alt="" class="blog-entry-img blog-article-margin am-img-responsive" style="margin: 0 auto;height:400px">
        </br>
        <p class='marked'>{{ $article->text }}</p>
      </article>
        <ul class="am-pagination blog-article-margin">
          @if(!empty($previous))
          <li class="am-pagination-prev"><a href="{{ url('/article/'.$previous->id) }}" class="">&laquo; {{ $previous->title }}</a></li>
          @endif
          @if(!empty($next))
          <li class="am-pagination-next"><a href="{{ url('/article/'.$next->id) }}">{{ $next->title }} &raquo;</a></li>
          @endif
        </ul>
        <hr>
        <form class="am-form am-g">
            <h3 class="blog-comment">评论</h3>
          <fieldset>
            <div class="am-form-group am-u-sm-4 blog-clear-left">
              <input type="text" class="" placeholder="名字">
            </div>
            <div class="am-form-group am-u-sm-4">
              <input type="email" class="" placeholder="邮箱">
            </div>

            <div class="am-form-group am-u-sm-4 blog-clear-right">
              <input type="password" class="" placeholder="网站">
            </div>
        
            <div class="am-form-group">
              <textarea class="" rows="5" placeholder="一字千金"></textarea>
            </div>
            <p><button type="submit" class="am-btn am-btn-default">发表评论</button></p>
          </fieldset>
        </form>
        <hr>
    </div>
    @include('public.aboutme')
</div>
<!-- content end -->
@endsection