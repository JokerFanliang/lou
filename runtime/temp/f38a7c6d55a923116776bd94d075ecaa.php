<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"D:\phpStudy\PHPTutorial\WWW\book\public/../application/index\view\order\cart.html";i:1557636097;s:72:"D:\phpStudy\PHPTutorial\WWW\book\application\index\view\public\head.html";i:1557637397;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>新村集</title>
		<link rel="stylesheet" href="/static/index/css/recss.css" />
		<link rel="stylesheet" href="/static/index/css/header-footer.css" />
		<link rel="stylesheet" href="/static/index/css/subNav.css" />
		<link rel="stylesheet" href="/static/index/css/cart.css" />
	</head>

	<body>
		<!-- 共用头部范围开始  -->
		<!-- 顶部-->
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

		<!--主内容区域-->
		<div class="main">
			<form action="" method="post">

				<div class="centerBox clear">
					<div class="cartHead fs-14 font-w">
						<span class="cartTh tab-1">全选</span>
						<span class="cartTh tab-2">商品</span>
						<span class="cartTh tab-3">单价</span>
						<span class="cartTh tab-4">数量</span>
						<span class="cartTh tab-5">小计</span>
						<span class="cartTh tab-6">操作</span>
					</div>
					<div class="cartDetaileMainBox fs-14">
						<div class="cartDetaileBox">
							<div class="cartCheck tab-1 carTb tac">
								<label class="cartLab">
								<input type="checkbox" class="catCheck"/>
							</label>
							</div>
							<div class="carTb tab-2">
								<div class="cartImgBox carTb">
									<img src="/static/index/image/floor-2.jpg" alt="" class="wh-100" />
								</div>
								<div class="carTd cartName carTb">
									一件可厉害可厉害的衣服，好看，柔软，不静电一件可厉害可厉害的衣服，好看，柔软，不静电一件可厉害可厉害的衣服，好看，柔软，不静电一件可厉害可厉害的衣服，好看，柔软，不静电一件可厉害可厉害的衣服，好看，柔软，不静电一件可厉害可厉害的衣服，好看，柔软，不静电一件可厉害可厉害的衣服，好看，柔软，不静电一件可厉害可厉害的衣服，好看，柔软，不静电一件可厉害可厉害的衣服，好看，柔软，不静电一件可厉害可厉害的衣服，好看，柔软，不静电
								</div>
							</div>
							<div class="carTb tab-3 cartPrice">
								￥66666.66
							</div>
							<div class="carTb tab-4 tac">
								<div class="carTb jian">-</div>
								<input type="number" class="buyNum carTb" value="1" />
								<div class="carTb jia">+</div>
							</div>
							<div class="carTb cartSubtotal tab-5">￥66666.66</div>
						 
							<div class="carTb tab-6">
								<a href="#"class="delBtn">删除</a>
							</div>
						</div>
						<div class="cartDetaileBox">
							<div class="cartCheck tab-1 carTb tac">
								<label class="cartLab">
								<input type="checkbox" class="catCheck"/>
							</label>
							</div>
							<div class="carTb tab-2">
								<div class="cartImgBox carTb">
									<img src="/static/index/image/floor-2.jpg" alt="" class="wh-100" />
								</div>
								<div class="carTd cartName carTb">
									一件可厉害可厉害的衣服，好看，柔软，不静电一件可厉害可厉害的衣服，好看，柔软，不静电一件可厉害可厉害的衣服，好看，柔软，不静电一件可厉害可厉害的衣服，好看，柔软，不静电一件可厉害可厉害的衣服，好看，柔软，不静电一件可厉害可厉害的衣服，好看，柔软，不静电一件可厉害可厉害的衣服，好看，柔软，不静电一件可厉害可厉害的衣服，好看，柔软，不静电一件可厉害可厉害的衣服，好看，柔软，不静电一件可厉害可厉害的衣服，好看，柔软，不静电
								</div>
							</div>
							<div class="carTb tab-3 cartPrice">
								￥66666.66
							</div>
							<div class="carTb tab-4 tac">
								<div class="carTb jian">-</div>
								<input type="number" class="buyNum carTb" value="1" />
								<div class="carTb jia">+</div>
							</div>
							<div class="carTb cartSubtotal tab-5">￥66666.66</div>
						 
							<div class="carTb tab-6">
								<a href="#"class="delBtn">删除</a>
							</div>
						</div>

						<!-- 循环产物  -->
					</div>
				</div>
				<div class="pageBox centerBox tac w-100 bd">分页放这里</div>
				<div class="totalBox centerBox clear fs-14">
					<div class="totalLeftBox left">
						<input type="checkbox" id="allCheckInp" class="carTb"/>
						<label for="allCheckInp" class="allCheckLab carTb">全选</label>
						<span class="delMore carTb"> 删除选中的商品 </span>
						<span class="delAll carTb"> 清空购物车 </span>
					</div>
					<div class="totalRightBox right h-100">
						<div class="clear h-100">
							<!-- 跑圈用 a -->
							<a href="buy.html" class="right totalBtn tac">去结算</a>
							<!--<button class="right totalBtn">去结算</button>-->
							<div class="right">
								<div class="carTf">已选择
									<sapn class="redText">0</sapn> 件商品</div>
								<div class="carTf">总价 ：
									<sapn class="redText total fs-24">￥666660</sapn>
								</div>
							</div>
						</div>

					</div>
				</div>
			</form>
		</div>

		<!-- 底部共用范围结束  -->
		<script src="/static/index/js/jquery-1.11.3.js" type="text/javascript" charset="utf-8"></script>
		<script>
			$(function() {
				$('.checkDetailBox').on('click', 'label', function() {
					var check = $(this).find('[type="checkbox"]').is(":checked");
					if(check) {
						$(this).addClass('active');
					} else {
						$(this).removeClass('active');
					}
				});

				/**
				 *
				 *      查询选中的 复选框 
				 *
				 */
				$('.checkBtn').click(function() {
					$.each($('.checkDetailBox').find('input[type="checkbox"]'), function(i, e) {
						if($(e).is(':checked')) {
							// 遍历出所选的复选框  
							console.log($(e).parent().text());
						}

					});
				});
				
				
				
				var buyNum = 0;
				$('.cartDetaileMainBox').on('click','.jia',function() {
					buyNum = parseInt($(this).prev().val());
					buyNum++;
					$(this).prev().val(buyNum);
				})

				$('.cartDetaileMainBox').on('click','.jian',function() {
					buyNum = parseInt($(this).next().val());
					if(buyNum <= 1) {
						buyNum = 1
					} else {
						buyNum--
					};
					$(this).next().val(buyNum);
				})
				
				$('.cartDetaileMainBox').on('blur','.buyNum',function(){
					var buyNums=$(this).val();
					if(buyNums<1 || buyNums%1!==0){
						$(this).val(1);
					}
					
				})
			});
		</script>
	</body>

</html>