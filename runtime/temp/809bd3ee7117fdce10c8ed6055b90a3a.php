<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"D:\phpStudy\PHPTutorial\WWW\book\public/../application/index\view\user\index.html";i:1557671339;s:72:"D:\phpStudy\PHPTutorial\WWW\book\application\index\view\public\head.html";i:1557670971;s:72:"D:\phpStudy\PHPTutorial\WWW\book\application\index\view\public\left.html";i:1557639538;}*/ ?>
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
							基本信息
						</div>
						<div class="detaileMainBox clear">
						<form action="" method="post" id="form">
						<!-- 右侧各分类盒子 范围  -->
							<div class="addressDetaileBox">
								<input type="hidden" name="id" value="<?php echo $user->id; ?>">
								<div class="addressInpBox">
									用户：<?php echo $user->username; ?></span>
								</div>
								<br>
								<div class="addressInpBox">
									姓名：<span class="addresName"><input type="text" name="realname" value="<?php echo $user->realname; ?>" style="border:0.5px solid #378888;width:200px;height:30px;"></span>
								</div>
								<br>
								<div class="addressInpBox">
									手机：<span class="addresName"><input type="text" name="phone" value="<?php echo $user->phone; ?>" style="border:0.5px solid #378888;width:200px;height:30px;"></span>
								</div>
								<br>
								<div class="addressInpBox">
									地址：<span class="addresName"><input type="text" name="address" value="<?php echo $user->address; ?>" style="border:0.5px solid #378888;width:200px;height:30px;"></span>
								</div>
								<div class="addressEditBtnBox tar">
									<span class="sub addressEditBtn">修改信息</span>
								</div>
							</div>
						</form>
							<!-- 右侧各分类盒子 范围  -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- 底部共用范围开始  -->

		<!-- 底部共用范围结束  -->
		<script src="/static/index/js/jquery-1.11.3.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(".sub").click(function(){
				$("#form").submit();
			})
		</script>
	</body>

</html>