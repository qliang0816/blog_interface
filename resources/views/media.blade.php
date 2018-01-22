@extends('public.public')

@section('blog_id','blog-article-sidebar')

@section('content')
<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed blog-content">
  <figure data-am-widget="figure" class="am am-figure am-figure-default" data-am-figure="{pureview: 'true'}">
      <div id="container">
          @foreach($media as $val)
          <div><img src="{{ asset('storage/'.$val->url) }}"><h3>{{ $val->title }}</h3></div>
          @endforeach
    </div> 
  </figure>
</div>
<!-- content end -->
@endsection
