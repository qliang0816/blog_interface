@extends('public.public')

@section('blog_id','blog')

@section('content')
<hr>
<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed blog-content">
    <div class="am-u-md-8 am-u-sm-12">
      <article class="am-article blog-article-p">
        <div class="am-article-hd">
          <h1 class="am-article-title blog-text-center">我的文章哎</h1>
          <p class="am-article-meta blog-text-center">
              <span><a href="#" class="blog-color">article &nbsp;</a></span>-
              <span><a href="#">@amazeUI &nbsp;</a></span>-
              <span><a href="#">2015/10/9</a></span>
          </p>
        </div>        
        <div class="am-article-bd">
        <img src="assets/i/f10.jpg" alt="" class="blog-entry-img blog-article-margin">          
        <p class="class="am-article-lead"">
        引用blockquote：
        <blockquote><p>People think focus means saying yes to the thing you’ve got to focus on. But that’s not what it means at all. It means saying no to the hundred other good ideas that there are. You have to pick carefully. I’m actually as proud of the things we haven’t done as the things I have done. Innovation is saying no to 1,000 things.</p> <footer><cite>Steve Jobs</cite> – Apple Worldwide Developers’ Conference, 1997</footer></blockquote>
        <h1>这是标题</h1>
        <h2>这是标题</h2>
        <h3>这是标题</h3>
        <h4>这是标题</h4>
        <h5>这是标题</h5>
        <h1>HEADER ONE</h1>
        <h2>HEADER ONE</h2>
        <h3>HEADER ONE</h3>
        <h4>HEADER ONE</h4>
        <h5>HEADER ONE</h5>        
        <h1>表格:</h1>
        <table class="am-table am-table-bordered">
    <thead>
        <tr>
            <th>网站名称</th>
            <th>网址</th>
            <th>创建时间</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Amaze UI</td>
            <td>http://amazeui.org</td>
            <td>2012-10-01</td>
        </tr>
        <tr>
            <td>Amaze UI</td>
            <td>http://amazeui.org</td>
            <td>2012-10-01</td>
        </tr>
        <tr>
            <td>Amaze UI(Active)</td>
            <td>http://amazeui.org</td>
            <td>2012-10-01</td>
        </tr>
        <tr>
            <td>Amaze UI</td>
            <td>http://amazeui.org</td>
            <td>2012-10-01</td>
        </tr>
        <tr>
            <td>Amaze UI</td>
            <td>http://amazeui.org</td>
            <td>2012-10-01</td>
        </tr>
    </tbody>
</table>
        <hr>
        <h1>自定义列表:</h1>
        <ul class="am-list am-list-border">
         <li><a href="#"><i class="am-icon-home am-icon-fw"></i>
           每个人都有一个死角， 自己走不出来，别人也闯不进去。</a></li>
         <li><a href="#"> <i class="am-icon-book am-icon-fw"></i>
           我把最深沉的秘密放在那里。</a></li>
         <li><a href="#"><i class="am-icon-pencil am-icon-fw"></i>你不懂我，我不怪你。</a></li>
        </ul>
        <h1>有序列表:</h1>
        <ol><li>List item one<ol><li>List item one<ol><li>List item one</li><li>List item two</li><li>List item three</li><li>List item four</li></ol></li><li>List item two</li><li>List item three</li><li>List item four</li></ol></li><li>List item two</li><li>List item three</li><li>List item four</li></ol>
        <h1>无序列表:</h1>
        <ul><li>List item one<ul><li>List item one<ul><li>List item one</li><li>List item two</li><li>List item three</li><li>List item four</li></ul></li><li>List item two</li><li>List item three</li><li>List item four</li></ul></li><li>List item two</li><li>List item three</li><li>List item four</li></ul>
        <h1>一大段文字：</h1>
        <p>我遇见了你，你一直觉得自己不够美好，充满惊慌与卑微，但是，你即使那样害怕，却守在我的身后，不曾后退。人们总是崇拜英雄，惊喜与他们随时随地的光芒，但是最真实的事情永远是我们都会恐惧都会失败，有时受尽打击，又是无能为力。你说我是英雄，其实我不敢告诉你，如果不是你，你傻傻地倔强地站在那里，我一回头就能看见你，那么，或许，我早就做了命运的逃兵。<br><br>
        红衣佳人白衣友，朝与同歌暮同酒，世人谓我恋长安，其实只恋长安某。 ——殊同 <br>

水银泻地的时候，忧愁穿过墙壁，又和着嘶哑的音乐，使我羞惭、灰心。整个夏季，仿佛一场，没有主题的游戏。 ——赵野 <br>

我感到自己仿佛变得蔚蓝，变得无边无际，眼睛和指尖上，栖息着无数的星辰。 ——马林·索雷斯库 <br>

手中的书页犹如薄薄的剃刀片白亮亮闪着寒光。在凌晨四时寂寞的时刻里，我可以听到孤独之根正一点点伸长的声音。 ——村上春树 <br>

你的明眸是映现我灵魂颤动的湖，我那成群结队的梦想，为寻求解脱，而纷纷投入你这秋波深处。 ——波德莱尔  <br>

当我们只剩下虚无，唯有沉默的太阳够好，是你的静寂，是无声的声音。 ——佩索阿
         </p>
        </p>
        </div>
      </article>
        
        <div class="am-g blog-article-widget blog-article-margin">
          <div class="am-u-lg-4 am-u-md-5 am-u-sm-7 am-u-sm-centered blog-text-center">
            <span class="am-icon-tags"> &nbsp;</span><a href="#">标签</a> , <a href="#">TAG</a> , <a href="#">啦啦</a>
            <hr>
            <a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon"></span></a>
            <a href=""><span class="am-icon-wechat am-icon-fw blog-icon"></span></a>
            <a href=""><span class="am-icon-weibo am-icon-fw blog-icon"></span></a>
          </div>
        </div>

        <hr>
        <div class="am-g blog-author blog-article-margin">
          <div class="am-u-sm-3 am-u-md-3 am-u-lg-2">
            <img src="assets/i/f15.jpg" alt="" class="blog-author-img am-circle">
          </div>
          <div class="am-u-sm-9 am-u-md-9 am-u-lg-10">
          <h3><span>作者 &nbsp;: &nbsp;</span><span class="blog-color">amazeui</span></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <hr>
        <ul class="am-pagination blog-article-margin">
          <li class="am-pagination-prev"><a href="#" class="">&laquo; 一切的回顾</a></li>
          <li class="am-pagination-next"><a href="">不远的未来 &raquo;</a></li>
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