@extends('public.public')

@section('content')
<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed blog-content">
    <div class="am-u-sm-12">
        <h1 class="blog-text-center">-- TimeLine --</h1>
        @foreach(array_keys($array) as $key => $val)
        <div class="timeline-year">
            <h1>{{ $val }}</h1>
            <hr>
                @foreach(array_keys($array[$val]) as $value)
                <ul>
                <h3>{{ $value }}月</h3>
                <hr>
                @foreach($array[$val][$value] as $v)
                <li>
                    <span class="am-u-sm-4 am-u-md-2 timeline-span">{{ date('Y/m/d',strtotime($v['updated_at'])) }}</span>
                    <span class="am-u-sm-8 am-u-md-6"><a href="{{ url('/article/'.$v['id']) }}">{{ $v['title'] }}</a></span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">article</span>
                    <span class="am-u-sm-4 am-u-md-2 am-hide-sm-only">Leo_qin</span>
                </li>
                <br>
                @endforeach
                </ul>
                @endforeach
        </div>
        @endforeach
        <hr>
    </div>
</div>
<!-- content end -->
@endsection