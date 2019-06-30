<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"D:\phpStudy\PHPTutorial\WWW\lou/application/index\view\build\index.html";i:1561889045;s:71:"D:\phpStudy\PHPTutorial\WWW\lou\application\index\view\public\head.html";i:1561876054;}*/ ?>
<!doctype html>
<html lang="zh-cn">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="applicable-device" content="pc">
  <meta name="renderer" content="webkit">
  <meta name="mobile-agent" content="format=html5; url=http://m.loupan.com/gz/loupan/">
  <meta name="mobile-agent" content="format=xhtml; url=http://m.loupan.com/gz/loupan/">
  <link rel="alternate" media="only screen and(max-width: 640px)" href="/public/static/index/pc/css/null_054d5847ce41416d8b3d6fcdcb59fc03.">
  <title>广州新房_一手房_新开楼盘_价格信息-广州楼盘网</title>
  <meta name="Keywords" content="广州新房,广州新楼盘,广州一手房,广州房价">
  <meta name="description" content="广州楼盘网新房频道为您精心推荐广州新开楼盘和公寓商铺等一手房源信息，通过提供实时变动的房产价格走势及专业的买卖服务，为您在广州找一个新家。">
  <link rel="stylesheet" media="all" href="/public/static/index/pc/css/base_e556b7d6dfdb415990e231ea8ad035ac.css">
  <link rel="stylesheet" media="all" href="/public/static/index/pc/css/xinfang.css">
  <link rel="icon" href="/public/static/index/pc/css/favicon.ico" type="image/ico">
  <link rel="shortcut icon" href="/public/static/index/pc/css/favicon.ico">
  <meta name="format-detection" content="telephone=no">
 </head>
 <body>
  <!--顶部广告-->
  <div class="AD m-adv load-ad" id="A12626" data-adid="12626" ad-position="left" data-type="full"></div>
  <div class="AD m-adv load-ad" id="A12625" data-adid="12625" ad-position="left" data-type="full"></div>
  <div class="AD m-adv load-ad" id="A12671" data-adid="12671" ad-position="left" data-type="full"></div>
  <div class="AD m-adv load-ad" id="A12672" data-adid="12672" ad-position="left" data-type="full"></div>
  <div class="AD m-adv load-ad" id="A12673" data-adid="12673" ad-position="left" data-type="full"></div>
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
   <input type="hidden" id="cityarea_id" value="0">
   <div class="AD m-adv load-ad" id="A12628" data-adid="12628" ad-position="left" data-type="fix"></div>
   <div class="AD m-adv load-ad" id="A12627" data-adid="12627" ad-position="right" data-type="fix"></div>
   <!-- 主体内容 -->
   <div class="pages pages-list">
    <div class="inner-search">
     <div class="box">
<!--       <div class="inner-postion box">
       <a href="http://gz.loupan.com">广州房地产</a> &gt; 
       <a href="http://gz.loupan.com/xinfang/">广州楼盘</a>
      </div> -->
<!--       <div class="btn">
       <button class="publicGroupBuy" data-site_id="34" data-group_buy_id="21003" data-isapp="0" data-title="预约看房" data-desc="时间地点您来定，全程服务我来帮">预约看房</button>
      </div> -->
      <div class="tel">
       咨询电话：
       <span>400-819-6572</span>
      </div>
      <div class="s">
       <form action="/index.php/so/" id="search_form_id" method="post" autocomplete="off" target="_blank">
        <input type="hidden" name="search_type" id="search_type" value="house">
        <div class="b">
         <input type="text" placeholder="请输入楼盘名/关键词" id="search_input_loupan" name="q">
         <button type="submit" id="search_house_id"></button>
        </div>
       </form>
       <ul id="search_ul_loupan"></ul>
      </div>
     </div>
    </div>
    <!-- 筛选 -->
    <div class="list-choose box">
     <div class="tab">
      <a href="http://gz.loupan.com/xinfang/" class="active">找房</a>
     </div>
     <div class="choose">
      <div class="item">
       <div class="tit">
        区域：
       </div>
       <div class="txt">
        <div class="options">
         <a href="/" class="active">全部</a>
         <?php foreach($positions as $position): ?>
         <a href="/"><?php echo $position->position; ?></a>
         <?php endforeach; ?>
        </div>
       </div>
      </div>
      <div class="item">
       <div class="tit">
        价格：
       </div>
       <div class="txt">
        <div class="options">
         <a href="/" class="active">全部</a>
         <?php foreach($prices as $price): ?>
         <a href="/">10000以下</a>
         <?php endforeach; ?>
         <span>（单价：元/㎡）</span>
        </div>
       </div>
      </div>
      <div class="item">
       <div class="tit">
        户型：
       </div>
       <div class="txt">
        <div class="options">
         <a href="/" class="active">全部</a>
         <?php foreach($housetypes as $housetype): ?>
         <a href="/"><?php echo $housetype->name; ?></a>
         <?php endforeach; ?>
        </div>
       </div>
      </div>

      <div class="item">
       <div class="tit">
        类型：
       </div>
       <div class="txt">
        <div class="options">
         <a href="/" class="active">全部</a>
         <?php foreach($types as $type): ?>
         <a href="/"><?php echo $type->name; ?></a>
         <?php endforeach; ?>
        </div>
       </div>
      </div>
<!--       <div class="result">
       <div class="tit">
        已选条件
       </div>
       <div class="txt"></div>
       <div class="btn">
        <a href="http://gz.loupan.com/xinfang/" class="remove">清空</a>
       </div>
      </div> -->
     </div>
    </div>
    <!-- main -->
    <div class="main box">
     <div class="left">
      <!-- 排序 -->
      <div class="choose">
       <div class="tab">
        <a href="http://gz.loupan.com/xinfang/" class="active">全部楼盘(1564)</a>
        <!-- <a href="http://gz.loupan.com/xinfang/y1/">优惠楼盘(16)</a> -->
       </div>
<!--        <div class="turn">
        <span>1/63</span>
        <a href="http://gz.loupan.com/xinfang/p2/" class="next">下一页 &gt;</a>
       </div> -->
<!--        <div class="sort">
        <a href="http://gz.loupan.com/xinfang/" class="normal active">默认排序</a>
        <a href="http://gz.loupan.com/xinfang/o4/" class="normal ">最新开盘</a>
        <a href="http://gz.loupan.com/xinfang/o1/" class="normal ">最高人气</a>
        <a href="http://gz.loupan.com/xinfang/o3/" class="">售价</a>
       </div> -->
      </div>
      <!-- 列表 -->
      <ul class="list-house">
      <?php foreach($builds as $build): ?>
       <li><a href="/index/build/show?id=<?php echo $build->id; ?>" class="img" target="_blank"><img src="<?php echo $build->img; ?>" data-src="<?php echo $build->img; ?>" alt="<?php echo $build->name; ?>"><i class="tb-icon"></i></a>
        <div class="text">
         <h2><a href="/index/build/show?id=<?php echo $build->id; ?>" target="_blank"><?php echo $build->name; ?></a></h2>
         <!--地理位置-->
         <div class="address">
          <span><?php echo $build->position->position; ?></span>
<!--           <a href="http://gz.loupan.com/loupan/7031803.html#zhoubianpeitao" class="map" target="_blank">查看地图</a> -->
         </div>
         <!--户型信息等-->
         <div class="info">
          <span class="tag"><a href="#" target="_blank"> <?php echo $build->housetype->name; ?> </a></span> &nbsp;|&nbsp; 
          <span class="area"><a href="http://gz.loupan.com/layout/list-7031803.html" target="_blank"> 面积：<?php echo $build->area; ?> </a></span>
         </div>
         <!--楼盘状态标签-->
         <div class="label">
          <!-- <span><?php echo $build->item; ?></span> -->
          <!-- 物业类型 -->
          <!-- <span>住宅</span> -->
          <!-- 特色标签 -->
<!--           <span>活动优惠</span>
          <span>性价比佳</span>
          <span>买贵包赔</span>
          <span>低首付</span>
          <span>教育配套</span> -->
         </div>
         <!--优惠动态展示-->
         <div class="desc desc-yh">
           <?php echo $build->item; ?>
         </div>
        </div>
        <div class="other">
         <div class="price">
          <span><?php echo $build->start_price; ?></span>
         </div>
         <div class="tel">
          <span><?php echo $build->telephone; ?></span>
         </div>
         <div class="im-item"></div>
        </div>
       </li>
       <?php endforeach; ?>
       
      </ul>
      <!-- 分页 -->
<!--       <div class="page-turn">
       <div class="item-turn">
        <a href="/xinfang/" class="z-crt">1</a>
        <a href="/xinfang/p2/" class="">2</a>
        <a href="/xinfang/p3/" class="">3</a>
        <a href="/xinfang/p4/" class="">4</a>
        <a href="/xinfang/p5/" class="">5</a>
        <i>...</i>
        <a href="/xinfang/p63/">63</a>
        <a href="/xinfang/p2/" class="pagenxt">下一页</a>
        <span class="jump">到第<input class="u-num" type="text" id="page-jump" value="2" onkeyup="value=value.replace(/^(0+)|[^\d]+/g,'')">页</span>
        <a href="javascript:;" class="btn" onclick="javascript:if(document.getElementById('page-jump').value==''){return false}location.href='/xinfang/p'+document.getElementById('page-jump').value+'/'">确定</a>
       </div>
      </div> -->

     </div>
     <!-- 右侧栏 -->
     <div class="right">
            <!-- 帮您找房 -->
      <div class="help-house">
       <form action="" method="post">
        <input type="hidden" name="name" value="楼盘网网友">
        <input type="hidden" name="group_buy_id" value="21001">
        <input type="hidden" name="site_id" value="34">
        <input type="hidden" name="isapp" value="0">
        <h5>帮您找房</h5>
        <div class="item item-select">
         <select name="position" required>
          <option>请选择区域</option>
          <?php foreach($positions as $pos): ?>
          <option value="<?php echo $pos->position; ?>"><?php echo $pos->position; ?></option>
          <?php endforeach; ?>
        </select>
        </div>
        <div class="item item-input">
         <input type="text" name="build" required placeholder="意向楼盘">
        </div>

        <div class="item item-input">
         <input type="text" class="required" required name="name" placeholder="请填写您的姓名">
        </div>
        <div class="item item-input">
         <input type="text" class="required" required name="phone" placeholder="请填写您的手机号码">
        </div>
        <div class="btn">
         <button type="submit" id="zf" class="ajax_tg_submit_new" name="ajax_tg_submit_new">提交</button>
        </div>
       </form>
      </div>
      <!-- 热门楼盘 -->
      <div class="sort-list">
       <h5>热门楼盘</h5>
       <ul>
        <?php foreach($hot_builds as $key=>$hot_build): ?>
        <li><a href="/index/build/show?id=<?php echo $hot_build->id; ?>" target="_blank"><span><?php echo $key+1; ?></span><p><?php echo $hot_build->name; ?></p><p><?php echo $hot_build->start_price; ?></p><i><?php echo $hot_build->position->position; ?></i></a></li>
        <?php endforeach; ?>
       </ul>
      </div>
     </div>

    </div>
    <script src="/public/static/index/pc/js/jquery-1.7.2.min.js"></script>

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
          </ul>
          <ul class="list">
           <li><a href="/loupan/7083005.html" title="科慧花园" target="_blank" hidefocus="true">科慧花园</a></li>
           <li><a href="/loupan/7085193.html" title="碧桂园藏珑府" target="_blank" hidefocus="true">碧桂园藏珑府</a></li>
           
          </ul></li>
         <li>
          <ul class="list">
           <li><a href="http://gz.loupan.com/fangjia/nansha/" title="南沙房价" target="_blank">南沙房价</a></li>
           <li><a href="http://gz.loupan.com/fangjia/fanyu/" title="番禺房价" target="_blank">番禺房价</a></li>
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
       <input name="backurl" type="hidden" value="/xinfang/">
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
   <script type="text/javascript" src="/34"></script>
   <script src="/public/static/index/pc/js/require.js" data-main="http://public.loupan.com/public/assets_v4/js/house_list.js?ver=201906111346"></script>
  </div>
 </body>
</html>