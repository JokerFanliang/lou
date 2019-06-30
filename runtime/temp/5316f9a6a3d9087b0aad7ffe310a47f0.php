<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"D:\phpStudy\PHPTutorial\WWW\book\public/../application/index\view\order\index.html";i:1557671100;s:72:"D:\phpStudy\PHPTutorial\WWW\book\application\index\view\public\head.html";i:1557670971;s:72:"D:\phpStudy\PHPTutorial\WWW\book\application\index\view\public\left.html";i:1557639538;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>图书屋</title>
		<link rel="stylesheet" href="/static/index/css/recss.css" />
		<link rel="stylesheet" href="/static/index/css/subNav.css" />
		<link rel="stylesheet" href="/static/index/css/header-footer.css" />
		<link rel="stylesheet" href="/static/index/css/userInfo.css" />
	</head>

	<body>
		<!-- 共用头部范围开始  -->
		    <?php $user=custom()?>
    <div class="header">
      <div class="centerBox clear">
        <div class="left">
          <span>欢迎访问</span><span class="font-w">书屋</span> &nbsp;
          <?php if($user): ?>
          <a href="/index/login/loginout" class="redText">退出</a>
          &nbsp;
          <span><a href="/index/user/index" class="redText">个人中心
            </a></span>
          <?php else: ?>
          <a href="/index/login/login" class="redText">登录</a>&nbsp;
          <span>|</span>&nbsp;
          <a href="/index/login/reg" class="redText">注册</a>
          <?php endif; ?>
          
        </div>
      </div>
    </div>
    <!-- logo 搜索 层 -->
    <div class="top centerBox clear">
      <div class="logoBox left">
        <a href="index.html">
          <img src="/static/index/images/logo.png" alt="" class="logoImg" />
        </a>
      </div>
      <div class="search left">
        <form action="/index/index/index" method="get">
        <div class="searchBox clear">
          <input type="text" name="name" class="serchInp left" placeholder="三体" />
          <a href="product-list.html">
            <button type="submit" class="searchBtn left">搜索</button>
          </a>
        </div>
      </form>
        <!-- 搜索推荐  -->
<!--         <div class="searchMsgBox fs-12">
          <a href="product-list.html" class="searchMsg">三国演义</a>
          <a href="product-list.html" class="searchMsg">水浒传</a>
          <a href="product-list.html" class="searchMsg">封神榜</a>
          <a href="product-list.html" class="searchMsg">仙剑奇侠传</a>
          <a href="product-list.html" class="searchMsg">三只小猪</a>
          <a href="product-list.html" class="searchMsg">小蝌蚪找妈妈</a>
        </div> -->
      </div>
      <?php if($user): ?>
<!--       <a href="/index/order/cart" class="cartBtn">
        <div class="shp-cart left fs-14">
          我的购物车 >
          <b class="icon icon-cart "></b>
          <p class="cartNum">10</p>
        </div>
      </a> -->
      <?php endif; ?>
    </div>
    <!--导航栏-->
    <div class="nav">
      <div class="centerBox mainNav whiteText">
        <div class="allNav left tac">
<!--           <b class="icon icon-san"></b>
          <span>全部图书分类</span>
          <div class="allNav-subBox whiteText fs-14 left">
            <?php foreach($types as $list): ?>
            <a>
            <div class="allNav-sub clear">
              <p class="left">男装女装</p>              
            </div>
            </a>
            <?php endforeach; ?>
          </div>
 -->
        </div>
        <div class="navSub">
          <div class="clear">
            <a href="/" class="left active">全部</a>
            <?php foreach($types as $list): ?>
            <a href="/index/index/index?type_id=<?php echo $list->id; ?>" class="left"><?php echo $list->name; ?></a>
            <?php endforeach; ?>

          </div>
        </div>
      </div>
    </div>
		<!-- 共用头部范围结束  -->
		<!--导航栏-->
		<div class="mainBox">
			<div class="clear centerBox h-100">
								<?php $left=getLeft();?>
				<div class="leftNavBox left fs-14">
					<a href="/index/user/index" class="leftNavA <?php if($left=='index')echo 'active';?>">基本信息</a>
					<a href="/index/order/index" class="leftNavA <?php if($left=='order')echo 'active';?>">全部订单</a>
					<a href="/index/user/info" class="leftNavA <?php if($left=='info')echo 'active';?>">官方客服</a>
				</div>
				<div class="rightBox right h-100">
					<div class="rightDetaileBox wh-100">
						<div class="detaileTitle fs-14">
							全部订单
						</div>
						<div class="detaileMainBox clear">
							<!-- 右侧各分类盒子 范围  -->
							<div class="orderNavBox fs-14">
								<a href="/index/order/index" class="orderNav <?php if($type_id=='' && $sta==3)echo 'active';?>">全部订单</a>
								<a href="/index/order/index?type=1" class="orderNav <?php if($type_id==1 && $sta==3)echo 'active';?>">线上付款</a>
								<a href="/index/order/index?type=2" class="orderNav <?php if($type_id==2 && $sta==3)echo 'active';?>">货到付款</a>
								<a href="/index/order/index?state=0" class="orderNav <?php if($type_id=='' && $sta==0)echo 'active';?>">待发货</a>
								<a href="/index/order/index?state=1" class="orderNav <?php if($type_id=='' && $sta==1)echo 'active';?>">待收货</a>
								<a href="/index/order/index?state=2" class="orderNav <?php if($type_id=='' && $sta==2)echo 'active';?>">已收货</a>
<!-- 								<a href="#" class="orderNav">待评价</a> -->
							</div>
							<div class="orderDetaileBox">
								<div class="orderDetaileTitleBox clear">
									<div class="tab-dib-vam tab-1">
										订单详情
									</div>
									<div class="tab-dib-vam tab-4">
										订单号
									</div>
									<div class="tab-dib-vam tab-3">
										单价
									</div>
									<div class="tab-dib-vam tab-4">
										数量
									</div>
									<div class="tab-dib-vam tab-5">
										小计
									</div>
									<div class="tab-dib-vam tab-3">
										订单类型
									</div>
									<div class="tab-dib-vam tab-9">
										物流状态
									</div>
									<div class="tab-dib-vam tab-7">
										操作
									</div>
								</div>
								<div class="orderDetaileMainBox">
									<!-- 循环壳子  -->
									<?php foreach($lists as $order): ?>
									<div class="orderDetaileMsgBox fs-12 tac">
										<div class="tab-dib-vam tab-1">
											<div class="w-100">
												<div class="orderImgBox tab-dib-vam">
													<img src="<?php echo $order->book->img; ?>" alt="" class="orderImg" />
												</div>
												<div class="orderName tab-dib-vam">
													<?php echo $order->book->name; ?>
												</div>
											</div>
										</div>
										<div class="tab-dib-vam tab-4">
											<?php echo $order->id; ?>
										</div>
										<div class="tab-dib-vam tab-3">
											￥<span class="orderPrice"><?php echo $order->price; ?></span>
										</div>
										<div class="tab-dib-vam tab-4">
											<span class="orderNum"><?php echo $order->num; ?></span>
										</div>
										<div class="tab-dib-vam tab-5 redText">
											￥<span class="orderPriceSubTotle"><?php echo $order->money; ?></span>
										</div>
										<div class="tab-dib-vam tab-3">
											<span class="orderPrice"><?php echo $order->type==1?"线上付款" : "货到付款"; ?></span>
										</div>
										<div class="tab-dib-vam tab-9">
											<span class=""><?php echo $order->state==0?"待发货" : ($order->state==1 ? "待收货" : "已收货"); ?></span>
										</div>
										<div class="tab-dib-vam tab-7">
											<?php if($order->state==2): ?>
											<a href="/index/order/del?id=<?php echo $order->id; ?>" class="orderBtn delBtn">删除订单</a>
											<?php endif; if($order->state==1): ?>
											<a href="/index/order/receive?id=<?php echo $order->id; ?>" class="orderBtn buysBtn">去收货</a>
											<?php endif; if($order->state==2): if($order->is_mes==0): ?>
											<a href="/index/order/message?id=<?php echo $order->id; ?>" class="orderBtn msgBtn">去评价</a>
											<?php else: ?>
											<a href="/index/order/showmessage?id=<?php echo $order->id; ?>" class="orderBtn msgBtn">查看评价</a>
											<?php endif; endif; ?>
										</div>
									</div>
									<?php endforeach; ?>
									<!-- 循环壳子  -->
									
									
								</div>
<!-- 								<div class="pageBox tac bd">
									如需放分页可放在此处
								</div> -->
							</div>
							<!-- 右侧各分类盒子 范围  -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 底部共用范围结束  -->
		<script src="/static/index/js/jquery-1.11.3.js" type="text/javascript" charset="utf-8"></script>
	</body>

</html>