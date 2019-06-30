<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpStudy\PHPTutorial\WWW\lou/application/index\view\build\m_more.html";i:1561902904;}*/ ?>
<!doctype html>
<html lang="zh-cn">
 <head> 
  <meta charset="UTF-8"> 
  <meta content="yes" name="apple-mobile-web-app-capable"> 
  <meta content="yes" name="apple-touch-fullscreen"> 
  <meta content="telephone=no" name="format-detection"> 
  <meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=0.5, minimum-scale=0.5, user-scalable=no, viewport-fit=cover"> 
  <title>广州越秀滨海新城详情信息_电话-广州楼盘网</title> 
  <meta name="Keywords" content="越秀滨海新城详情"> 
  <meta name="description" content="广州楼盘网为您介绍位于广州的越秀滨海新城楼盘销售电话、开盘日期、户型图、项目地址、房价走势、容积率、绿化率、物业公司及周边交通等相关信息。"> 
  <link rel="canonical" href="/public/static/index/mobile/css/7031803_f54b090f11494307bc5fd2b51dd3bf11.html"> 
  <!-- 此js必须在head标签里面 --> 
  <script src="/public/static/index/mobile/js/flexible_css.js"></script> 
  <script src="/public/static/index/mobile/js/flexible.js"></script> 
  <link rel="stylesheet" href="/public/static/index/mobile/css/swiper.min.css"> 
  <link rel="stylesheet" href="/public/static/index/mobile/css/base.css"> 
  <link rel="stylesheet" href="/public/static/index/mobile/css/xinfang.css"> 
 </head> 
 <body> 
  <div class="pages pages-xx"> 
   <!-- header --> 
   <header class="header-inner"> 
    <div class="left"> 
     <a href="javascript:window.history.back();" class="back"></a> 
    </div> 
    <div class="center">
     楼盘详细信息
    </div> 
<!--     <div class="right"> 
     <a href="http://m.loupan.com/gz/" class="home"></a> 
     <a href="javascript:;" class="menu" id="showMenu"></a> 
    </div> --> 
   </header> 
   <div class="baseInfo"> 
    <h1><?php echo $build->name; ?></h1> 
    <div class="tag"> 
     <span><?php echo $build->item; ?></span> 
<!--      <span>普通住宅</span> 
     <span>活动优惠</span> 
     <span>性价比佳</span> --> 
    </div> 
    <div class="text"> 
     <p>价格：</p> 
     <p class="price"><?php echo $build->start_price; ?></p> 

    </div> 
    <div class="txt">
     开盘时间：<?php echo $build->start_time; ?>
    </div> 
    <div class="txt">
     联系电话：<?php echo $build->telephone; ?>
    </div> 
    <div class="txt">
     地址：<?php echo $build->address; ?>
    </div> 
   </div> 
   <!-- 基本信息 --> 
   <div class="block"> 
    <div class="tit">
     基本信息
    </div> 
    <div class="con"> 
     <div class="l"> 
      <span>开盘描述：</span> 
      <p> <?php echo $build->desc; ?></p> 
     </div> 
     <div class="l"> 
      <span>交房时间：</span> 
      <p><?php echo $build->give_time; ?></p> 
     </div> 
     <div class="l"> 
      <span>装修状况：</span> 
      <p><?php echo $build->renova; ?></p> 
     </div> 
     <div class="l"> 
      <span>区域板块：</span> 
      <p><?php echo $build->position->position; ?></p> 
     </div> 
     <div class="l"> 
      <span>预售许可证：</span> 
      <p><?php echo $build->permit; ?></p> 
     </div> 
     <div class="l"> 
      <span>产权年限：</span> 
      <p><?php echo $build->year; ?></p> 
     </div> 
     <div class="l"> 
      <span>项目特色：</span> 
      <p><?php echo $build->item; ?></p> 
     </div> 
    </div> 
   </div> 
   <!-- 物业信息 --> 
   <div class="block"> 
    <div class="tit">
     物业信息
    </div> 
    <div class="con"> 
     <div class="l"> 
      <span>物业公司：</span> 
      <p><?php echo $build->wy_company; ?></p> 
     </div> 
     <div class="l"> 
      <span>物业类别：</span> 
      <p><?php echo $build->wy_type; ?></p> 
     </div> 
     <div class="l"> 
      <span>物业费：</span> 
      <p><?php echo $build->wx_money; ?></p> 
     </div> 
    </div> 
   </div> 
   <!-- 建筑规划 --> 
   <div class="block"> 
    <div class="tit">
     建筑规划
    </div> 
    <div class="con"> 
     <div class="l"> 
      <span>开发商：</span> 
      <p><?php echo $build->create_company; ?></p> 
     </div> 
     <div class="l"> 
      <span>建筑类型：</span> 
      <p><?php echo $build->type->name; ?> </p> 
     </div> 
     <div class="l"> 
      <span>车位：</span> 
      <p><?php echo $build->car_num; ?></p> 
     </div> 
     <div class="l"> 
      <span>建筑面积：</span> 
      <p><?php echo $build->build_s; ?></p> 
     </div> 
     <div class="l"> 
      <span>占地面积：</span> 
      <p><?php echo $build->space_s; ?></p> 
     </div> 
     <div class="l"> 
      <span>规划户数：</span> 
      <p><?php echo $build->number; ?></p> 
     </div> 
     <div class="l"> 
      <span>容积率：</span> 
      <p><?php echo $build->rjl; ?></p> 
     </div> 
     <div class="l"> 
      <span>绿化率：</span> 
      <p><?php echo $build->lhl; ?></p> 
     </div> 
    </div> 
   </div> 
   <!-- 项目简介 --> 
   <div class="block"> 
    <div class="tit">
     项目简介
    </div> 
    <div class="con con2"> 
     <p><?php echo $build->jianjie; ?></p> 
    </div> 
   </div> 
   <!-- 周边配套 --> 
   <div class="block block-wrap"> 
    <div class="tit">
     周边配套
    </div> 
    <div class="con con2"> 
     <p><?php echo $build->zbpt; ?></p> 
    </div> 
   </div> 
   <!-- 小区配套 --> 
   <div class="block"> 
    <div class="tit">
     小区配套
    </div> 
    <div class="con con2"> 
     <p><?php echo $build->xqpt; ?></p> 
    </div> 
   </div> 
   <!-- 交通状况 --> 
   <div class="block"> 
    <div class="tit">
     交通状况
    </div> 
    <div class="con con2"> 
     <p><?php echo $build->trans; ?></p> 
    </div> 
   </div> 
  </div> 
  <!-- 底部浮动 --> 
  <!-- 底部浮动 --> 
  <div class="footFloat"> 
   <input type="hidden" class="page_flag_name" value="loupan_detail" data-site_id="34" data-house_id="7031803"> 
   <a rel="nofollow" href="javascript:" class="test-enter item" data-id="24995" data-site_id="34" data-house_id="7031803" data-need_idcard="0" data-title="预约看房" data-loupan="越秀滨海新城"> <p class="item-bnzf">预约看房</p> </a> 
   <a href="javascript:" data-value="400-819-6579" class="item mobileTel"> <p class="item-dhzx">电话咨询</p> </a> 
  </div> 
  <!-- IM --> 
  <script>
    //参数必须要定义
    var href = window.location.href;
    var index = href.indexOf('?');
    if (index != -1) {
        href = href.substr(0 ,index);
    }
    var _chat = [{b:0,c:2,d:12,e:href,f:"34",g:"62",h:"7031803",i:"1",j:"219.144.212.23"},{data:{type:12,name:"越秀滨海新城",img:"http://static.loupan.com/upfile2/image/20170811/20170811144924_9278279.jpg",areaRoom:"南沙",price:"价格待定",fromUrl:href},desc:"客户给你发了一条楼盘信息",ext:""}];

    //统一一键调用参数手机号b一定要传
    //        (function(){var _im = document.createElement("div");_im.setAttribute('style','width:44px;height:44px;border-radius:50%;background:#16b955;color:#fffff;position:fixed;z-index:999999;bottom:80px;right:15px');_im.innerHTML="<img src='/////chat/img/chat-img.png' width='44' height='44' />";_im.addEventListener("click", function(){window.location.href='/////chat/mobile.html?_chat='+encodeURI(JSON.stringify(_chat));});document.body.appendChild(_im);})();
    // 点击跳转
    function im_chat (tel) {
        _chat[0].b = tel;
        window.location.href='//tools.loupan.com/chat/mobile.html?_chat='+encodeURI(JSON.stringify(_chat));
    }
</script> 
  <!-- 右侧菜单 --> 
  <section class="right-menu"> 
   <div class="bg"></div> 
   <div class="swiper-container"> 
    <div class="swiper-wrapper"> 
     <div class="swiper-slide"> 
      <ul class="list"> 
       <li> <a href="http://user2.loupan.com/m_session/index/" class="item item-grzx">个人中心</a> </li> 
       <li> <a href="http://m.loupan.com/gz/" class="item item-sy">首页</a> </li> 
       <li> <a href="http://m.loupan.com/gz/loupan/" class="item item-xf">新房</a> </li> 
       <li> <a href="http://m.loupan.com/gz/esf/p1/" class="item item-esf">二手房</a> </li> 
       <li> <a href="http://m.loupan.com/gz/zu/p1/" class="item item-zf">租房</a> </li> 
       <li> <a href="http://m.loupan.com/gz/zxgs/" class="item item-zf">装修</a> </li> 
       <li> <a href="http://m.loupan.com/gz/news/" class="item item-zx">楼讯</a> </li> 
       <li> <a href="http://m.loupan.com/ask/" class="item item-wd">问答</a> </li> 
       <li> <a href="http://m.loupan.com/fangdai/" class="item item-fdjsq">房贷计算器</a> </li> 
       <li> <a href="http://m.loupan.com/gz/fangjia/" class="item item-fj">房价</a> </li> 
       <li> <a href="http://m.loupan.com/gz/gongjijin/" class="item item-gjjcx">公积金查询</a> </li> 
       <li> <a href="http://m.loupan.com/gz/shebao/" class="item item-sbcx">社保查询</a> </li> 
      </ul> 
     </div> 
    </div> 
   </div> 
  </section> 

 </body>
</html>