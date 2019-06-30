<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"D:\phpStudy\PHPTutorial\WWW\lou/application/index\view\build\show.html";i:1561897273;s:71:"D:\phpStudy\PHPTutorial\WWW\lou\application\index\view\public\head.html";i:1561876054;}*/ ?>
<!doctype html>
<html lang="zh-cn">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="applicable-device" content="pc">
  <meta name="renderer" content="webkit">
  <meta name="mobile-agent" content="format=html5; url=http://m.loupan.com/gz/loupan/7031803/">
  <meta name="mobile-agent" content="format=xhtml; url=http://m.loupan.com/gz/loupan/7031803/">
  <link rel="alternate" media="only screen and(max-width: 640px)" href="/public/static/index/pc/css/null_e9857f1070704d06a3f22125156cf5f6.">
  <title>广州越秀滨海新城_楼盘房价_户型详情_周边配套-广州楼盘网</title>
  <meta name="Keywords" content="越秀滨海新城,越秀滨海新城房价">
  <meta name="description" content="广州越秀滨海新城售楼电话(400-819-6579)，广州楼盘网新房频道为您提供越秀滨海新城房价走势、开盘日期、项目地址、团购优惠、户型图等动态。了解更多广州越秀滨海新城楼盘详情上广州楼盘网！">
  <link rel="stylesheet" media="all" href="/public/static/index/pc/css/base_e556b7d6dfdb415990e231ea8ad035ac.css">
  <link rel="stylesheet" media="all" href="/public/static/index/pc/css/xinfang.css">
  <link rel="icon" href="/public/static/index/pc/css/favicon.ico" type="image/ico">
  <link rel="shortcut icon" href="/public/static/index/pc/css/favicon.ico">
  <meta name="format-detection" content="telephone=no">
 </head>
 <body>

  <!-- header -->
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
  <div class="pages">
   <!-- 通栏位置2 -->
   <div class="AD m-adv load-ad" id="A12635" data-adid="12635" ad-position="left" data-type="fix"></div>
   <div class="AD m-adv load-ad" id="A12634" data-adid="12634" ad-position="right" data-type="fix"></div>
   <div class="pages pages-house pages-detail">
    <input type="hidden" id="house_id" value="7031803">
    <div class="inner-search">
     <div class="box">
<!--       <div class="inner-postion box">
       <a href="http://gz.loupan.com" target="_blank">广州房地产</a> &gt; 
       <a href="http://gz.loupan.com/xinfang/" target="_blank">广州新房</a> &gt; 
       <a href="http://gz.loupan.com/xinfang/nansha/" target="_blank">南沙新房</a> &gt; 越秀滨海新城 
      </div> -->
<!--       <div class="btn">
       <button class="publicGroupBuy" data-site_id="34" data-house="7031803" data-group_buy_id="20016" data-isapp="0" data-title="预约看房" data-desc="海量房源为您优选，优质房源为您推荐" data-need_idcard="0">预约看房</button>
      </div> -->
      <div class="s">
       <form action="/index.php/so/" id="search_form_id" method="post" autocomplete="off" target="_blank">
        <input type="hidden" name="search_type" id="search_type" value="house">
        <div class="b">
         <input type="text" placeholder="请输入楼盘名/关键词" id="search_input_loupan" name="q">
         <button type="submit" id="search_house_id" value=""></button>
        </div>
       </form>
       <ul id="search_ul_loupan" style="display: none;"></ul>
      </div>
     </div>
    </div>
    <div class="title box">
     <div class="t">
      <h1><?php echo $build->name; ?></h1>
     </div>
     <div class="other">
      <div class="tag">
       <span><?php echo $build->item; ?></span>
<!--        <span>洋房</span>
       <span>普通住宅</span>
       <span>活动优惠</span>
       <span>性价比佳</span> -->
      </div>
<!--       <div class="sao">
       <div class="ewm">
        <p>联系方式</p>
        <div class="codeTel" data-tel="4008196579"></div>
       </div>
      </div>
      <div class="tel">
        <?php echo $build->telephone; ?> 
      </div> -->
     </div>
    </div>
    <div class="navigate box" id="navigate">
     <a href="/index/build/show?id=<?php echo $build->id; ?>" class="active">楼盘主页</a>
     <a href="/index/build/more?id=<?php echo $build->id; ?>">详细信息</a>
     <a href="/index/buildarticle/index?id=<?php echo $build->id; ?>">楼盘动态</a>
     <a href="/index/buildtype/index?id=<?php echo $build->id; ?>">户型图</a>
     <a href="/index/build/image?id=<?php echo $build->id; ?>">楼盘相册</a>
    </div>
    <!-- 滚动时显示的浮动导航 -->
<!--     <div class="fixedNav">
     <div class="top box">
      <div class="t">
       <p><?php echo $build->name; ?></p>
      </div>
      <div class="im-nav-row"></div>
      <div class="tel">
       <p>售楼热线: <?php echo $build->telephone; ?> </p>
       <button class="publicGroupBuy" data-site_id="34" data-house="7031803" data-group_buy_id="20016" data-isapp="0" data-title="预约看房" data-desc="海量房源为您优选，优质房源为您推荐" data-need_idcard="0">预约看房</button>
      </div>
     </div>

    </div> -->

    <!-- 基础信息 -->
    <div class="baseInfo box">
     <div class="swiper photos">
      <div id="slider" class="flexslider big">
       <ul class="slides">
        <!--焦点图显示-->
        <?php foreach($imgs as $key=>$img): ?>
        <li class="active"><a href="#" target="_blank"><img src="<?php echo $img->img; ?>" alt="<?php echo $build->name; ?>"></a></li>
        <?php endforeach; ?>
       </ul>
       <div class="flex-direction-nav">
        <a href="javascript:;" class="flex-prev" title="上一张"></a>
        <a href="javascript:;" class="flex-next" title="下一张"></a>
       </div>
      </div>
      <div id="carousel" class="flexslider small">
       <ul class="slides">
        <!--焦点图显示-->
        <?php foreach($imgs as $key=>$img): ?>
        <li class=""><img src="<?php echo $img->img; ?>" alt="<?php echo $build->name; ?>"><span>楼盘图</span></li>
        <?php endforeach; ?>
       </ul>
       <div class="flex-direction-nav">
        <a href="javascript:;" class="flex-prev"></a>
        <a href="javascript:;" class="flex-next"></a>
       </div>
      </div>
     </div>
     <div class="imgText">
      <div class="showTop">
       <div class="price">
        价格 
        <span><?php echo $build->start_price; ?></span>
       </div>
<!--        <div class="explain" title="平层19000-19000元/㎡，复式23000元/㎡">
        <span></span>
        <p>价格说明</p>
       </div> -->
<!--        <div class="bm publicGroupBuy" data-site_id="34" data-house="7031803" data-group_buy_id="20012" data-isapp="0" data-title="预约算价" data-desc="不知是否有买房资格？不知需多少首付？一键预约算价<br/>稍后会有经纪人一对一的为您解答问题" data-need_idcard="0">
        <button>[预约算价]</button>
       </div> -->
      </div>
      <div class="enter enter-tg">
       <p>参与团购，即可享受会员团购优惠价格</p>
       <button class="publicGroupBuy" data-site_id="34" data-house="7031803" data-group_buy_id="20006" data-isapp="0" data-title="团购报名" data-desc="<?php echo $build->name; ?>" data-need_idcard="0">立即参与</button>
      </div>
<!--       <div class="enter enter-dy">
       <p>订阅楼盘信息，第一时间获取价格变动或楼盘动态</p>
       <button class="publicGroupBuy" data-site_id="34" data-house="7031803" data-group_buy_id="25002" data-isapp="0" data-title="消息订阅" data-desc="订阅越秀滨海新城最新信息" data-need_idcard="0">立即订阅</button>
      </div> -->
      <div class="line">
       <div class="txt">
        开盘： 
        <span> 待定 </span>
       </div>
      </div>
      <div class="line">
       <div class="txt">
        户型：<?php echo $build->housetype->name; ?> 
       </div>
<!--        <div class="link">
        <a href="http://gz.loupan.com/layout/list-7031803.html" target="_blank">[全部户型]</a>
       </div> -->
      </div>
      <div class="line">
       <div class="txt">
        地址：
        <span class="adr" title="<?php echo $build->address; ?>"> <?php echo $build->address; ?> </span>
       </div>

      </div>
      <div class="more">
       <a href="/index/build/more?id=<?php echo $build->id; ?>" target="_blank">更多楼盘信息 &gt;&gt;</a>
      </div>
      <div class="bohao">
       <div class="haoma">
         400-819-6579 
       </div>
       <div class="sama">
        <div class="tit">
         热线
        </div>
       </div>
      </div>

     </div>
     <div class="im-r-row"></div>
    </div>

    <!-- 通栏位置3 -->
    <div class="g-wrap">
     <div class="AD m-adv load-ad" id="A12631" data-adid="12631" ad-position="left"></div>
     <div class="AD m-adv load-ad" id="A12664" data-adid="12664" ad-position="left"></div>
    </div>
    <!-- IM坐席 -->
    <div class="im-row"></div>
    <!-- 楼盘动态 -->
    <div class="package box">
     <div class="news">
      <div class="tit">
       <p>楼盘动态</p>
       <a href="/index/buildarticle/index" target="_blank">更多动态 &gt;&gt;</a>
      </div>
      <!-- 动态 -->
      <?php foreach($buildarticles as $article): ?>
      <div class="item">
       <div class="tag">
        <span>动态</span>
       </div>
       <div class="text">
        <div class="t">
         <h5><a href="#"><?php echo $article->title; ?></a></h5>
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

            $content = mb_substr($contents, 0, 24, "utf-8");
          ?>
        <div class="desc">
         <p><?php echo $content; ?></p>
         <a href="#" target="_blank">阅读全文 &gt;&gt;</a>
        </div>
       </div>
      </div>
      <?php endforeach; ?>

     </div>
     <!-- 订阅信息 -->

    </div>
    <!-- 通栏位置4 -->
    <div class="g-wrap">
     <div class="AD m-adv load-ad" id="A12632" data-adid="12632" ad-position="left" data-type="full"></div>
    </div>
    <!-- 户型图 -->
    <div class="huxing box" id="huxingtu">
     <div class="tit">
      <h5>户型图</h5>
<!--       <div class="txt">
       具体售价详情请咨询置业顾问，以售楼部为准
      </div> -->
<!--       <div class="bm publicGroupBuy" data-site_id="34" data-house="7031803" data-group_buy_id="20025" data-isapp="0" data-title="咨询价格" data-desc="越秀滨海新城价格信息" data-need_idcard="0">
       立即咨询
      </div> -->
      <div class="link">
<!--        <a href="/layout/list-7031803-2.html" target="_blank">2居(2)</a>
       <a href="/layout/list-7031803-3.html" target="_blank">3居(8)</a>
       <a href="/layout/list-7031803-4.html" target="_blank">4居(5)</a>
       <a href="/layout/list-7031803-99.html" target="_blank">楼层平面图(1)</a> -->
       <a href="/index/buildtype/index?id=<?php echo $build->id; ?>" target="_blank">更多户型 &gt;&gt;</a>
      </div>
     </div>
     <div class="list">
      <ul>
       <?php foreach($houses as $house): ?>
       <li><a href="/" target="_blank" class="img"><img src="<?php echo $house->img; ?>" alt=""></a>
        <div class="text">
         <div class="txt">
          户型：<?php echo $house->house; ?>
         </div>
         <div class="txt">
          面积： <?php echo $house->build_s; ?> 
         </div>
        </div>
      </li>
      <?php endforeach; ?>
      </ul>
     </div>
    </div>

    <div class="g-wrap">
     <div class="AD m-adv load-ad" id="A12633" data-adid="12633" ad-position="left" data-type="full"></div>
    </div>
    <!-- 为您推荐 -->
    <div class="tuijian box">
     <div class="tit">
      <p>为您推荐</p>
     </div>
     <ul>
      <?php foreach($hot_builds as $hot_build): ?>
      <li><a href="" target="_blank" class="img"><img src="<?php echo $hot_build->img; ?>" alt="<?php echo $hot_build->name; ?>"></a>
       <div class="text">
        <div class="name">
         <?php echo $hot_build->name; ?>
        </div>
        <div class="price">
         价格：
         <span><?php echo $hot_build->start_price; ?></span>
        </div>
       </div>
     </li>
     <?php endforeach; ?>
     </ul>
    </div>

    <!-- 免责声明 -->
<!--     <div class="mianze box">
     <span>免责声明：</span>楼盘信息由开发商提供，最终以政府部门登记备案为准，请谨慎核查，如该楼盘信息有误，您可以投诉：4008180066转 666666
    </div> -->
   </div>
   <script type="text/javascript" src="/public/static/index/pc/js/jquery-1.7.2.min.js"></script>

   <!-- footer -->
   <div class="footer footer-in">
    <div class="content">
     <div class="switch">
      <div class="tab footerTab">
       <ul class="tab-head">
        <li class="active">热门城市</li>
        <li>推荐楼盘</li>
        <li>广州房价</li>
        <li>友情链接</li>
        <li>买房工具</li>
       </ul>
       <ul class="tab-body">
        <li class="active">
         <ul class="list">
          <li><a href="http://sh.loupan.com" title="上海房产网" target="_blank">上海房产网</a></li>
          <li><a href="http://sz.loupan.com" title="深圳房产网" target="_blank">深圳房产网</a></li>
         </ul></li>
        <li>
         <ul class="list">
          <li><a href="http://gz.loupan.com/xinfangsuoyin.html#A" target="_blank">A</a></li>
          <li><a href="http://gz.loupan.com/xinfangsuoyin.html#B" target="_blank">B</a></li>
          <li><a href="http://gz.loupan.com/xinfangsuoyin.html#C" target="_blank">C</a></li>
         </ul>
         <ul class="list">
          <li><a href="http://gz.loupan.com/loupan/7031804.html" title="幸福园" target="_blank" hidefocus="true"> 幸福园 </a></li>
          <li><a href="http://gz.loupan.com/loupan/7031805.html" title="新城领寓商用" target="_blank" hidefocus="true"> 新城领寓商用 </a></li>
         </ul></li>
        <li>
         <ul class="list">
          <li><a href="http://gz.loupan.com/fangjia/nansha/" title="南沙房价" target="_blank">南沙房价</a></li>
          <li><a href="http://gz.loupan.com/fangjia/fanyu/" title="番禺房价" target="_blank">番禺房价</a></li>
          <li><a href="http://gz.loupan.com/fangjia/zengcheng/" title="增城房价" target="_blank">增城房价</a></li>
         </ul></li>
        <li>
         <ul class="list">
          <li><a href="http://news.fy.xafc.com/" title="阜阳买房" target="_blank" hidefocus="true">阜阳买房</a></li>
          <li><a href="http://guangzhou.qfang.com/sale " title="广州二手房" target="_blank" hidefocus="true">广州二手房</a></li>
          
         </ul></li>
       </ul>
      </div>
     </div>
    </div>
    <div class="linkTo">
     <a target="_blank" href="http://www.loupan.com/about/index" rel="nofollow">公司简介</a> | 
     <a target="_blank" href="http://www.loupan.com/about/culture" rel="nofollow">企业文化</a> | 
     <a target="_blank" href="http://www.loupan.com/about/partners" rel="nofollow">合作伙伴</a> | 
     <a target="_blank" href="http://www.loupan.com/about/contact" rel="nofollow">联系我们</a> | 
     <a target="_blank" href="http://www.loupan.com/about/hezuo" rel="nofollow">市场合作</a> | 
     <a href="javascript:;" class="showFlBox" rel="nofollow">友情链接申请</a> | 
     <a target="_blank" href="http://hezuo.loupan.com/" rel="nofollow">分站合作</a> | 
     <a target="_blank" href="http://gz.loupan.com/sitemap.html" class="site_map">网站地图</a>
    </div>
    <div class="info">
     <p>全国统一服务热线 4008180066转111666 | 邮箱：cs@LouPan.com 经营性ICP证：湘ICP备12003586号-55</p>
     <p>Copyright © 2018 www.LouPan.com All Rights Reserved 广州楼盘网网络科技有限公司</p>
     <p>湘公网安备 43019002000309号(湖南创业工场网络科技有限公司)</p>
    </div>
   </div>
   <!-- 友情链接申请 -->
   <div id="ljsqBox"></div>
   <!-- 意见反馈 -->
   <div class="feedback">
    <div class="bg"></div>
    <div class="panel">
     <div class="close"></div>
     <h5>楼盘网产品使用意见反馈</h5>
     <form action="/about/sug" method="post" id="feedbackform">
      <div class="time">
       创建时间：
       <span>2019-06-23</span>
      </div>
      <div class="desc">
       感谢您对楼盘网的支持与关注，请将您遇到的问题或者建议反馈给我们,我们虚心接受您最诚挚的意见和建议。
      </div>
      <div class="select feedbackselect">
       <a href="javascript:;" class="cur">Bug</a>
       <a href="javascript:;">内容纠错</a>
       <a href="javascript:;">吐槽</a>
       <a href="javascript:;">投诉</a>
       <a href="javascript:;">其他</a>
      </div>
      <input name="sug[title]" type="hidden" id="feedbacktitle" value="Bug">
      <input name="backurl" type="hidden" value="/loupan/7031803.html">
      <div class="textarea">
       <h3>反馈内容<font color="red">*</font></h3>
       <textarea name="sug[bodys]" id="" cols="30" rows="10" placeholder="请输入反馈内容(最少5个字)..."></textarea>
      </div>
      <div class="tel">
       <h3>联系方式</h3>
       <input placeholder="请输入您的电话号码" name="sug[mobile]" type="text">
      </div>
      <div class="btn">
       <button>提交</button>
      </div>
     </form>
    </div>
   </div>
  </div>
  <div class="publicSignUp" style="display:none">
    <form action="" method="post" id="form">
    <div class="content">
      <div class="close"></div>
      <div class="tit">团购报名</div>
      <div class="desc"><?php echo $build->name; ?></div>
      <div class="item">
        <div class="label"><i>*</i>手机号码：</div>
        <div class="txt"><input type="text" required placeholder="请输入您的手机号码" name="phone" class="sphone"></div>
      </div>
      <div class="item">
        <div class="label">您的称呼：</div>
        <div class="txt"><input type="text" required placeholder="例如：张先生" name="name" class="sname"></div>
      </div>
<!--       <div class="item-xy"><label><input type="checkbox" checked="checked" name="xieyi" class="xieyi"><span></span></label><p>我已阅读并同意<a href="http://user.loupan.com/home/pro" target="_blank">《楼盘网用户服务协议》</a></p>
      </div> -->
      <input type="hidden" name="build_id" value="<?php echo $build->id; ?>">
      <input type="hidden" name="build" value="<?php echo $build->name; ?>">
      <div class="btn"><button class="sub">立即提交</button></div>
    </div>
  </form>
  </div>
<!--   <script type="text/javascript" src="/34"></script>
  <script src="/public/static/index/pc/js/require_154780179d1643248fab44358aec98e2.js" data-main="http://public.loupan.com/public/assets_v4/js/house/house_detail.js?ver=201906111346"></script> -->
  <script>
      $(".publicGroupBuy").click(function(){
        $(".publicSignUp").show();
      })

      $(".sub").click(function(){
        var phone=$(".sphone").val();
        var name=$(".sname").val();
        if(phone==""){
          alert("请填写手机号");
          return false;
        }
        $("#form").submit();
      })
  </script>
 </body>
</html>