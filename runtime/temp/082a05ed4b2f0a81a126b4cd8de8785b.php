<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\phpStudy\PHPTutorial\WWW\lou/application/index\view\buildarticle\m_index.html";i:1561903458;}*/ ?>
<!doctype html>
<html lang="zh-cn">
 <head> 
  <meta charset="UTF-8"> 
  <meta content="yes" name="apple-mobile-web-app-capable"> 
  <meta content="yes" name="apple-touch-fullscreen"> 
  <meta content="telephone=no" name="format-detection"> 
  <meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=0.5, minimum-scale=0.5, user-scalable=no, viewport-fit=cover"> 
  <title>广州越秀滨海新城最新动态_优惠信息_在售楼盘-广州楼盘网</title> 
  <meta name="Keywords" content="越秀滨海新城最新动态,越秀滨海新城优惠信息,越秀滨海新城在售楼盘"> 
  <meta name="description" content="广州楼盘网提供广州越秀滨海新城楼盘动态，包括团购、打折等越秀滨海新城优惠信息。"> 
  <link rel="canonical" href="/public/static/index/mobile/css/7031803.html"> 
  <!-- 此js必须在head标签里面 --> 
  <script src="/public/static/index/mobile/js/flexible_css.js"></script> 
  <script src="/public/static/index/mobile/js/flexible.js"></script> 
  <link rel="stylesheet" href="/public/static/index/mobile/css/swiper.min.css"> 
  <link rel="stylesheet" href="/public/static/index/mobile/css/base.css"> 
  <link rel="stylesheet" href="/public/static/index/mobile/css/xinfang.css"> 
 </head> 
 <body> 
  <div class="pages pages-dt"> 
   <!-- header --> 
   <header class="header-inner"> 
    <div class="left"> 
     <a href="javascript:window.history.back();" class="back"></a> 
    </div> 
    <div class="center">
     楼盘动态
    </div> 
    <div class="right"> 
     <a href="/" class="home"></a> 
<!--      <a href="javascript:;" class="menu" id="showMenu"></a> --> 
    </div> 
   </header> 
   <!-- 条件选择 --> 
   <div class="choose"> 
    <a href="#" class="active">全部动态(50)</a>  
   </div> 
   <div class="list"> 
    <?php foreach($articles as $article): ?>
    <div class="item"> 
     <h5><a href="/index/Buildarticle/detail?id=<?php echo $article->id; ?>"><?php echo $article->title; ?></a></h5> 
     <div class="date"> 
      <p><?php echo $article->create_time; ?></p> 
     </div> 
        <?php
            $string = $article->content;

            //把一些预定义的 HTML 实体转换为字符

            $html_string = htmlspecialchars_decode($string);

            //将空格替换成空

            $content = str_replace(" ", "", $html_string);

            //函数剥去字符串中的 HTML、XML 以及 PHP 的标签,获取纯文本内容

            $contents = strip_tags($content);

            //返回字符串中的前80字符串长度的字符

            $content = mb_substr($contents, 0, 50, "utf-8");
          ?>
     <div class="text"> 
      <p><?php echo $content; ?></p> 
     </div> 

    </div> 

    <?php endforeach; ?>

   </div> 
  </div> 

  <!-- 底部浮动 --> 
  <!-- 底部浮动 --> 
  <div class="footFloat"> 
   <input type="hidden" class="page_flag_name" value="loupan_detail" data-site_id="34" data-house_id="7031803"> 
   <a rel="nofollow" href="javascript:" class="test-enter item" data-id="25001" data-site_id="34" data-house_id="7031803" data-need_idcard="0" data-title="预约看房" data-loupan="越秀滨海新城"> <p class="item-bnzf">预约看房</p> </a> 
   <a href="javascript:" data-value="400-819-6579" class="item mobileTel"> <p class="item-dhzx">电话咨询</p> </a> 
  </div> 
  <!-- IM --> 

  <!-- 右侧菜单 --> 
  <section class="right-menu"> 
   <div class="bg"></div> 
   <div class="swiper-container"> 
    <div class="swiper-wrapper"> 
     <div class="swiper-slide"> 
                <ul class="list">
                    <li>
                        <a href="/" class="item item-sy">首页</a>
                    </li>
                    <li>
                        <a href="/index/build/index" class="item item-xf">新房</a>
                    </li>

                    <li>
                        <a href="/index/build/index" class="item item-esf">商业地产</a>
                    </li>
                    <li>
                        <a href="/index/article/index" class="item item-zf">楼讯</a>
                    </li>
                    <li>
                        <a href="/index/enlist/index" class="item item-zf">帮你找房</a>
                    </li>
                </ul>
     </div> 
    </div> 
   </div> 
  </section> 
 
 </body>
</html>