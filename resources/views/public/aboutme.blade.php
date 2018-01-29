<div class="am-u-md-4 am-u-sm-12 blog-sidebar">
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span>About ME</span></h2>
            <img src="{{ asset('/assets/i/f6.jpg') }}" alt="about me" class="blog-entry-img" >
            <p><b>秦梁(Leo)</b></p>
            <p>写博客:一方面,为了找到更多志同道合的人;另一方面,为了更好地学习,扩大影响力.对于任何一个程序员来说是极其必要的.我的博客内容包括了,技术笔记,生活图片库.对我来说,博客记录我的成长过程,更可以让未来的我看到现在的不成熟想法与创意.</p>
        </div>
        <div class="blog-sidebar-widget blog-bor logo-box">
            <h2 class="blog-text-center blog-title"><span>Contact Me</span></h2>
            <ul>
                <li>
                    <a href="https://github.com/LeoQin0816" target="_blank"><span class="am-icon-github am-icon-fw blog-icon"></span></a>
                </li>
                <li>
                    <a href="https://gitlab.com/LeoQin0816" target="_blank"><span class="am-icon-gitlab am-icon-fw blog-icon"></span></a>
                </li>
                <li class="my-qq">
                    <a href="javascript:void(0);" target="_blank"><span class="am-icon-qq am-icon-fw blog-icon"></span></a>
                    <p class="qq-logo"></p>
                </li>
                <li class="my-wechat">
                    <a href="javascript:void(0);" target="_blank"><span class="am-icon-weixin am-icon-fw blog-icon"></span></a>
                    <p class="wechat-logo"></p>
                </li>
                <li class="my-weibo">
                    <a href="javascript:void(0);" target="_blank"><span class="am-icon-weibo am-icon-fw blog-icon"></span></a>
                    <p class="weibo-logo"></p>
                </li>
            </ul>
        </div>
        <br><br>
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-title"><span>Category</span></h2>
            <ul class="am-list admin-sidebar-list" id="collapase-nav-1"  style="text-align:left">
                @foreach($text_category as $key => $val)
                <li class="am-panel">
                    <a data-am-collapse="{parent: '#collapase-nav-1', target: '#{{$key}}-nav'}">
                        {{ $key }} <i class="am-icon-angle-right am-fr am-margin-right"></i>
                    </a>
                    <ul class="am-list am-collapse admin-sidebar-sub" id="{{$key}}-nav">
                        @foreach($val as $v)
                        <li><a href="{{ url('/article/'.$v->id) }}">{{ $v->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="blog-clear-margin blog-sidebar-widget blog-bor am-g ">
            <h2 class="blog-title"><span>Tag Cloud</span></h2>
            <div class="am-u-sm-12 blog-clear-padding">
            @foreach($tags as $val)
            <a href="" class="blog-tag">{{ $val->name }}</a>
            @endforeach
            </div>
        </div>

        {{--  <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-title"><span>么么哒</span></h2>
            <ul class="am-list">
                <li><a href="#">每个人都有一个死角， 自己走不出来，别人也闯不进去。</a></li>
                <li><a href="#">我把最深沉的秘密放在那里。</a></li>
                <li><a href="#">你不懂我，我不怪你。</a></li>
                <li><a href="#">每个人都有一道伤口， 或深或浅，盖上布，以为不存在。</a></li>
            </ul>
        </div>  --}}
    </div>