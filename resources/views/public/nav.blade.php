<!-- nav start -->
<nav class="am-g am-g-fixed blog-fixed blog-nav">
<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" ><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="blog-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">
      <li><a href="{{ url('/') }}">Articles</a></li>
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          Category <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          @foreach($category as $val)
          <li><a href="{{ url('/?category='.$val->id) }}">{{ $val->name }}</a></li>
          @endforeach
          
        </ul>
      </li>
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          Album <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="{{ url('/media') }}">All Album</a></li>
          @foreach($image_category as $val)
          <li><a href="{{ url('/media?category_id='.$val->id) }}">{{ $val->name }}</a></li>
          @endforeach
        </ul>
      </li>
      <li><a href="{{ url('/timeline') }}">Timeline</a></li>
    </ul>
    <form action="{{ url('/') }}" class="am-topbar-form am-topbar-right am-form-inline" role="search" method="get">
      <div class="am-form-group">
        <input id="title" type="text" class="am-form-field am-input-sm" name="title" value="{{ isset($title) ? $title : '' }}" placeholder="search">
      </div>
    </form>
  </div>
</nav>
<hr>
<!-- nav end -->