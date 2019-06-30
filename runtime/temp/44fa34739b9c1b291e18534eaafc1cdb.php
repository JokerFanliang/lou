<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"D:\phpStudy\PHPTutorial\WWW\book\public/../application/index\view\user\info.html";i:1557639334;s:72:"D:\phpStudy\PHPTutorial\WWW\book\application\index\view\public\head.html";i:1557637397;s:72:"D:\phpStudy\PHPTutorial\WWW\book\application\index\view\public\left.html";i:1557639538;}*/ ?>
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
        <div class="searchBox clear">
          <input type="text" class="serchInp left" placeholder="三体" />
          <a href="product-list.html">
            <button class="searchBtn left">搜索</button>
          </a>
        </div>
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
      <a href="/index/order/cart" class="cartBtn">
        <div class="shp-cart left fs-14">
          我的购物车 >
          <b class="icon icon-cart "></b>
          <p class="cartNum">10</p>
        </div>
      </a>
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
							官方客服
						</div>
						<div class="detaileMainBox">
							<!-- 右侧各分类盒子 范围  -->
							<div class="serviceBox fs-14">
								如有问题请致电客服：010-123324325
							</div>							
							<!-- 右侧各分类盒子 范围  -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- 底部共用范围结束  -->
		<script src="/static/index/js/jquery-1.11.3.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function() {
				/*
				 *	地址选择效果 
				 */
				$('.addressBox').on('click', '.addressDefaultBtn', function() {
					$(this).addClass('active').parents('.addressDetaileBox').addClass('active').siblings().removeClass('active').find('.addressDefaultBtn').removeClass('active');
				})
				
				/*
				 * 	关闭模态框
				 * 
				 */
				$('.mtkCloseBtn').click(function(){
					$('.mtk').hide();
				})
				
				/*
				 *	 打开模态框  修改或添加地址
				 */
//				service
				// 添加地址打开
				$('.addressBtn').click(function(){
					var dizhiNum=$('.addressMainBox').find('.addressDetaileBox').length;
					if(dizhiNum>=4){
						alert('已添加4个地址无法再添加更多地址了亲');
						return false;
					}else{
						$('.mtk').show();
					}
				})
				
				$('.addressMainBox').on('click','.addressEditBtn',function(){
					$('.mtk').show();
				})
			})
		</script>
	</body>

</html>