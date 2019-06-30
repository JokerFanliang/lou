<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"D:\phpStudy\PHPTutorial\WWW\lou/application/index\view\article\index.html";i:1561884016;s:71:"D:\phpStudy\PHPTutorial\WWW\lou\application\index\view\public\head.html";i:1561876054;}*/ ?>
<!doctype html>
<html lang="zh-cmn-Hans">
 <head>
  <meta charset="utf-8">
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta http-equiv="Cache-Control" content="no-siteapp">
  <link rel="icon" href="/public/static/index/pc/css/favicon.ico" type="image/ico">
  <link rel="shortcut icon" href="/public/static/index/pc/css/favicon.ico">
  <meta name="mobile-agent" content="format=html5; url=http://m.loupan.com/gz/news/">
  <meta name="mobile-agent" content="format=xhtml; url=http://m.loupan.com/gz/news/">
  <link rel="alternate" media="only screen and(max-width: 640px)" href="/public/static/index/pc/css/null_4a70ac08fb7d48d6aed465acfac1c605.">
  <title>广州楼市_广州房产信息_广州房地产新闻 - 广州楼盘网</title>
  <meta name="Keywords" content="广州楼市,广州房产信息,广州房地产新闻,广州房产政策">
  <meta name="description" content="楼盘网广州楼市频道为您提供新的全面的广州房产信息、广州房地产新闻、广州房产政策，为您解读房地产行业动态、销售行情、房产时评、业界访谈、楼盘置业等。">
  <link rel="stylesheet" media="all" href="/public/static/index/pc/css/base_fc7c93590b3e430480ab8250447088f4.css">
  <link rel="stylesheet" media="all" href="/public/static/index/pc/css/nav_base.css">
  <link rel="stylesheet" media="all" href="/public/static/index/pc/css/news.css">
  <link rel="stylesheet" media="all" href="/public/static/index/pc/css/style.css">
  <link rel="stylesheet" media="all" href="/public/static/index/pc/css/xinfang_4d98b325b7c34c46b2eb80ca527b0aea.css">
  <script type="text/javascript" src="/public/static/index/pc/js/jquery.min.js"></script>
 </head>
 <body>
  <div class="AD m-adv load-ad" id="A12618" data-adid="12618"></div>
  <div class="AD m-adv load-ad" id="A12619" data-adid="12619"></div>
  <div class="AD m-adv load-ad" id="A12668" data-adid="12668"></div>
  <div class="AD m-adv load-ad" id="A12669" data-adid="12669"></div>
  <div class="AD m-adv load-ad" id="A12670" data-adid="12670"></div>
  <div class="header">
   <div class="box">
    <div class="logo">
     <a href="/" title="楼盘网"></a>
    </div>
    <div class="city city_v3 city_zhaoshan"></div>
        <div class="menu">
     <div class="item cur ">
      <a href="/">首页</a>
     </div>

      <div class="item ">
      <a href="/index/build/index">新房</a>
     </div>
     <div class="item ">
      <a href="/index/build/index">商业地产</a>
     </div>
     <div class="item ">
      <a href="/index/article/index">楼讯</a>
     </div>

    <div class="userState login2"></div>
   </div>
    <div class="userState login2"></div>
   </div>
  </div>
  <div class="m-menu">
   <div class="g-bd">
    <ul class="menu-nav f-fl">
      <?php foreach($types as $type): ?>
     <li class="this"><a class="m1" href="/index/article/index" title="<?php echo $type->name; ?>"><i class="tb-icon"></i><?php echo $type->name; ?></a></li>
      <?php endforeach; ?>

    </ul>
    <div class="p_list_enter f-fr">
     <!-- <div class="tel">咨询电话：<span>400-818-0066</span></div>-->
     <!-- <button onclick="poplook('popNine');">预约看房</button> -->
    </div>
    <div class="search f-fr">
     <div class="search-box search-box-news"></div>
    </div>
   </div>
  </div>
  <div class="im-float"></div>
  <div class="g-bd p-news">
   <!-- <div class="f-cb"> -->
   <!-- <div class="g-mn"> -->
   <div class="m-list-new f-htab" style="float:left; width:860px;">
    <!-- <div class="tab-bd bd"> -->
    <!-- <div class="mn"> -->
    <ul class="bd">
      <?php foreach($articles as $article): 
            $string = $article->content;

            //把一些预定义的 HTML 实体转换为字符

            $html_string = htmlspecialchars_decode($string);

            //将空格替换成空

            $content = str_replace(" ", "", $html_string);

            //函数剥去字符串中的 HTML、XML 以及 PHP 的标签,获取纯文本内容

            $contents = strip_tags($content);

            //返回字符串中的前80字符串长度的字符

            $content = mb_substr($contents, 0, 24, "utf-8");
          ?>
     <li><a class="img" href="/index/article/detail?id=<?php echo $article->id; ?>"><img alt="" src="<?php echo $article->img; ?>" width="156" height="106"></a>
      <div class="tit">
       <a href="/index/article/detail?id=<?php echo $article->id; ?>" target="_blank"><?php echo $article->title; ?></a>
       <span class="icon-hot">推荐</span>
      </div><p><?php echo $content; ?>... <a href="/index/article/detail?id=<?php echo $article->id; ?>" target="_blank">[详细]</a></p><p class="time"><!-- <span class="f-fl">楼盘网 <a href="/news/list-118.html" target="_blank"><i class="tb-icon"></i>本网原创</a></span> -->2019-06-21 17:06</p>
     </li>
     <?php endforeach; ?>

    </ul>
    <!-- </div> -->
<!--     <div class="m-page m-page-sr">
     <a href="/news/index.html" class="z-crt">1</a>
     <a href="/news/index-2.html" class="">2</a>
     <a href="/news/index-3.html" class="">3</a>
     <a href="/news/index-4.html" class="">4</a>
     <a href="/news/index-5.html" class="">5</a>
     <i>...</i>
     <a href="/news/index-20.html">20</a>
     <a href="/news/index-2.html" class="pagenxt">下一页</a>
     <span class="jump">到第<input class="u-num" type="text" id="page-jump" value="2" onkeyup="value=value.replace(/^(0+)|[^\d]+/g,'')">页</span>
     <a href="javascript:;" class="btn" onclick="javascript:if(document.getElementById('page-jump').value==''){return false}location.href='/news/index-'+document.getElementById('page-jump').value+'.html'">确定</a>
    </div> -->
    <!-- </div> -->
   </div>
   <!-- </div> -->
   <div class="g-sd">

    <!-- IM坐席 -->
    <div class="g-sdc im-row"></div>
    <div class="g-sdc">
     <div class="m-hd">
      <div class="title">
       楼讯排行榜
      </div>
     </div>
     <div class="bd sdc-new-list">
      <ul class="m-lp-list">
       <?php foreach($hots as $key=>$hot): ?>
       <li><i class="<?php if($key==0 || $key==1 || $key==2)echo 'hot';?>"><?php echo $key+1; ?></i><a href="/index/article/detail?id=<?php echo $hot->id; ?>" target="_blank"><?php echo $hot->title; ?></a></li>
       <?php endforeach; ?>

      </ul>
     </div>
    </div>
   </div>
   <div style="clear:both;"></div>
   <!-- </div> -->
   <!-- 首页浮窗广告 -->
   <div class="AD m-adv load-ad" id="A12620" data-adid="12620" ad-position="left" data-type="fix"></div>
   <div class="AD m-adv load-ad" id="A12621" data-adid="12621" ad-position="right" data-type="fix"></div>
   <div class="ft">
    <div class="ui-grid-row">
     <div class="linkSwitch">
      <div class="tab">
       <div class="item cur">
        周边城市
       </div>
      </div>
      <div class="link">
       <div class="item cur">
        <a href="http://chaozhou.loupan.com/news/" target="_blank">潮州楼市</a>
        <a href="http://sd.loupan.com/news/" target="_blank">顺德楼市</a>
        <a href="http://zengcheng.loupan.com/news/" target="_blank">增城楼市</a>
        <a href="http://na.loupan.com/news/" target="_blank">南澳楼市</a>
        <a href="http://mx.loupan.com/news/" target="_blank">梅县楼市</a>
        <a href="http://bl.loupan.com/news/" target="_blank">博罗楼市</a>
        <a href="http://ep.loupan.com/news/" target="_blank">恩平楼市</a>
        <a href="http://db.loupan.com/news/" target="_blank">大埔楼市</a>
        <a href="http://taishan.loupan.com/news/" target="_blank">台山楼市</a>
        <a href="http://leizhou.loupan.com/news/" target="_blank">雷州楼市</a>
        <a href="http://gaoyao.loupan.com/news/" target="_blank">高要楼市</a>
        <a href="http://kp.loupan.com/news/" target="_blank">开平楼市</a>
        <a href="http://yunfu.loupan.com/news/" target="_blank">云浮楼市</a>
        <a href="http://sihui.loupan.com/news/" target="_blank">四会楼市</a>
        <a href="http://sz.loupan.com/news/" target="_blank">深圳楼市</a>
        <a href="http://dg.loupan.com/news/" target="_blank">东莞楼市</a>
        <a href="http://shaoguan.loupan.com/news/" target="_blank">韶关楼市</a>
        <a href="http://huizhou.loupan.com/news/" target="_blank">惠州楼市</a>
        <a href="http://zj.loupan.com/news/" target="_blank">湛江楼市</a>
        <a href="http://fs.loupan.com/news/" target="_blank">佛山楼市</a>
        <a href="http://zs.loupan.com/news/" target="_blank">中山楼市</a>
        <a href="http://zh.loupan.com/news/" target="_blank">珠海楼市</a>
        <a href="http://huidong.loupan.com/news/" target="_blank">惠东楼市</a>
        <a href="http://jm.loupan.com/news/" target="_blank">江门楼市</a>
        <a href="http://st.loupan.com/news/" target="_blank">汕头楼市</a>
        <a href="http://zhaoqing.loupan.com/news/" target="_blank">肇庆楼市</a>
        <a href="http://qingyuan.loupan.com/news/" target="_blank">清远楼市</a>
        <a href="http://jieyang.loupan.com/news/" target="_blank">揭阳楼市</a>
        <a href="http://heyuan.loupan.com/news/" target="_blank">河源楼市</a>
        <a href="http://meizhou.loupan.com/news/" target="_blank">梅州楼市</a>
        <a href="http://shanwei.loupan.com/news/" target="_blank">汕尾楼市</a>
        <a href="http://maoming.loupan.com/news/" target="_blank">茂名楼市</a>
        <a href="http://yangjiang.loupan.com/news/" target="_blank">阳江楼市</a>
       </div>
      </div>
     </div>
    </div>
   </div>

   <div class="m-footer"></div>
   <!-- 友链申请-->
   <div id="ljsqBox"></div>
  </div>
  <!-- 右侧浮动 -->
  <div class="m-ftool f-cb"></div>

  <!-- End GrowingIO Analytics code version: 2.1 -->
  <!-- 团购报名 -->
  <div class="f-mask" style="display:none;"></div>
  <div class="pop-box pop-look popNine" style="display:none;">
   <div class="hd">
    <span>预约看房</span>
   </div>
   <div class="bd">
    <div class="desc_new">
     时间地点您来定，全程服务我来帮
    </div>
    <div class="post" data-action="/group_buy/group_buy_sign_in">
     <input type="hidden" name="link" value="">
     <input type="hidden" name="site_id" value="34">
     <input type="hidden" name="group_buy_id" value="21009">
     <input type="hidden" name="isapp" value="0">
     <!-- <input type="hidden" name="source_id" value="-->
     <!--">-->
     <!-- <input type="hidden" name="sms_flag" value="-->
     <!--">-->
     <ul>
      <li><span class="tit">您的称呼：</span>
       <div class="con">
        <input type="text" name="name" class="u-text" placeholder="例如：张先生">
       </div></li>
      <li><span class="tit"><i class="s-fc1">*</i>手机号码：</span>
       <div class="con">
        <input type="text" name="mobile" class="u-text" placeholder="请输入您的手机号码">
       </div></li>
      <li class="f_xieyi"><span class="tit"></span>
       <div class="con">
        <label><input type="checkbox" class="xieyi" id="checkxieyi8" checked><p class="tongyi">我已阅读并同意&nbsp;<a href="http://user.loupan.com/home/pro" target="_blank">《楼盘网用户服务协议》</a></p></label>
       </div></li>
      <li class="u-btn"><input onclick="tips_new(this);" type="button" value="立即提交"></li>
     </ul>
    </div>
   </div>
   <div class="f-close">
    ×
   </div>
  </div>
 </body>
</html>