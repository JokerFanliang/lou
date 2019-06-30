<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:82:"D:\phpStudy\PHPTutorial\WWW\book\public/../application/index\view\index\order.html";i:1557666468;s:72:"D:\phpStudy\PHPTutorial\WWW\book\application\index\view\public\head.html";i:1557660286;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>图书屋</title>
		<link rel="stylesheet" href="/static/index/css/recss.css" />
		<link rel="stylesheet" href="/static/index/css/header-footer.css" />
		<link rel="stylesheet" href="/static/index/css/subNav.css" />
		<link rel="stylesheet" href="/static/index/css/cart.css" />
		<link rel="stylesheet" href="/static/index/css/buy.css" />
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

		<!--主内容区域-->
		<div class="main">
			<form action="" method="post">
				<div class="centerBox clear">
					<div class="addressBox">
						<div class="font-w">收货地址</div>
						<div class="fs-14 mgt-10">
							<span class="address">姓名：<?php echo $user->realname; ?></span>
						</div>
						<div class="fs-14 mgt-10">
							<span class="address">手机号：<?php echo $user->phone; ?></span>
						</div>
						<div class="fs-14 mgt-10">
							<span class="address">地址：<?php echo $user->address; ?></span>
						</div>
					</div>
					<div class="payBox">
						<div class="font-w">支付方式</div>
						<div class="fs-14 mgt-10">
<!-- 							<label class="radioLab active">
								微信支付<input type="radio" checked="checked" name="pay"/>
							</label> -->
							<label class="radioLab">
								在线支付<input type="radio" name="pay" value="1"/>
							</label>
							<label class="radioLab">
								货到付款<input type="radio" name="pay" value="2"/>
							</label>
						</div>
					</div>
					<div class="cartHead fs-14 font-w">
						<span class="cartTh w-50">商品</span>
						<span class="cartTh tab-3">单价</span>
						<span class="cartTh tab-4">数量</span>
						<span class="cartTh tab-5">小计</span>
					</div>
					<div class="cartDetaileMainBox fs-14">
						<!-- 循环壳子  -->
						<div class="cartDetaileBox">
							<div class="carTb w-50">
								<div class="cartImgBox carTb">
									<img src="<?php echo $book->img; ?>" alt="" class="wh-100" />
								</div>
								<div class="carTd cartName carTb">
									<?php echo $book->name; ?>
								</div>
							</div>
							<div class="carTb tab-3 cartPrice">
								￥<?php echo $book->price; ?>
							</div>
							<div class="carTb tab-4 tac">
								<span class="buyNum"><?php echo $order->num; ?></span>
							</div>
							<div class="carTb cartSubtotal tab-5">
								￥<?php echo $order->money; ?>
							</div>
						</div>
						<!-- 循环壳子  -->
						<!-- 循环产物  -->

						<!-- 循环产物  -->
					</div>
				</div>
				<input type="hidden" class="order_id" value="<?php echo $order->id; ?>">
				<div class="totalBox centerBox clear fs-14">
					<div class="totalRightBox right h-100">
						<div class="clear h-100">
							<a href="javascript:void(0)" class="gopay right totalBtn tac">去下单</a>
							<!--<button class="right totalBtn">去支付</button>-->
							<div class="right">
<!-- 								<div class="carTf">已选择
									<sapn class="redText chooseNum">0</sapn> 件商品</div> -->
								<div class="carTf">应支付总价 ：
									<sapn class="redText total fs-24">￥<?php echo $order->money; ?></sapn>
								</div>
							</div>
						</div>

					</div>
				</div>
			</form>
		</div>
<!-- 底部共用范围开始  -->
		<!-- 底部共用范围结束  -->
		<script src="/static/index/js/jquery-1.11.3.js" type="text/javascript" charset="utf-8"></script>
		<script>
			$(function() {
				/*
				 *    支付方式选择 
				 */
				$('.payBox').on('click', 'label', function() {
					$(this).addClass('active').siblings('.active').removeClass('active');
				});
			
				/*
				 *    购物数量 
				 */
				$('.chooseNum').html($('.cartDetaileMainBox').find('.cartDetaileBox').length);

				$(".gopay").click(function(){
					var type=$("input[type='radio']:checked").val();
					if(type!=1 && type!=2){
						alert("先选择支付方式");
					}
					var order_id=$(".order_id").val();
					location.href="/index/index/pay?order_id="+order_id+"&type="+type;
				})
			});
		</script>
	</body>

</html>