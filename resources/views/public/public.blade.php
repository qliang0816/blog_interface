<!doctype html>
<html>
@include('public.head')

<body id="@yield('blog_id')">
@include('public.header')
@include('public.nav')

@section('banner')
@show

@section('content')
@show

@include('public.footer')
@include('public.js')

</body>
</html>