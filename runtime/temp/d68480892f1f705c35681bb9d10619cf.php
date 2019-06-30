<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"D:\phpStudy\PHPTutorial\WWW\book\public/../application/index\view\index\detail.html";i:1557671315;s:72:"D:\phpStudy\PHPTutorial\WWW\book\application\index\view\public\head.html";i:1557670971;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>图书屋</title>
		<link rel="stylesheet" href="/static/index/css/recss.css" />
		<link rel="stylesheet" href="/static/index/css/header-footer.css" />
		<link rel="stylesheet" href="/static/index/css/subNav.css" />
		<link rel="stylesheet" href="/static/index/css/fangdajing.css" />
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
		<!--主内容区域-->
		<div class="main">
			<div class="centerBox">
				<div class="trailNavBox fs-12">
					<span class="trailTitle font-w fs-18">产品详情</span>
					<!-- <a href="index.html" class="trailNav">首页</a>/
					<a href="product-list.html" class="trailNav">日用百货</a>/ -->
					<a href="detailes.html" class="trailNav">类型/<?php echo $book->type->name; ?></a>
				</div>
				<div class="detaileMainBox clear">
					<div id="product_intro" class="left">
						<div id="preview">
							<div id="mediumDiv">
								<img id="mImg" src="<?php echo $book->img; ?>" />
								<div id="mask"></div>
								<div id="superMask"></div>
							</div>
							<div id="largeDiv"></div>
<!-- 							<div class="down">
								<a class="backward disabled"></a>
								<a class="forward"></a>
								<ul id="icon_list">
									<li><img src="/static/index/images//products/product-s1.jpg" /></li>
								</ul>
							</div> -->
						</div>
					</div>
					<div class="productMsgBox over">
						<form action="" method="post" class="wh-100">
							<div class="b-b-d productName fs-18 font-w">
								<?php echo $book->name; ?>
							</div>
							<div class="textBox">
								<span class="productTitle">商品单价：</span><span class="redText">￥</span><span class="price redText fs-18"><?php echo $book->price; ?></span>
							</div>
							<div class="textBox">
								<span class="productTitle">库存：</span><span class="realnum redText fs-18"><?php echo $book->num; ?></span>
							</div>
							<!--<div class="textBox b-b-d">
								<span class="productTitle">收货地址：</span>
								<span>陕西省西安市雁塔区</span>
								<a href="userAddress.html" target="_blank" class="editAddressBtn fs-12">变更默认地址</a>
							</div>-->

							<div class="textBox b-b-d">
								<span class="productTitle">购买数量：</span>
								<span class="jian"></span>
								<input type="number" readonly="readonly" class="buyNum" value="0" />
								<span class="jia"></span>
							</div>
							<input type="hidden" class="book_id" value="<?php echo $book->id; ?>">
							<div class="fs-14"> 合计：<span class="redText">￥</span><span class="allPrice redText">0.00</span></div>
<!-- 							<button type="button" class="putCartBtn">加入购物车</button> -->
							<!-- 演示跳转的A -->
							<a href="javascript:void(0)">
								<button type="button" class="buy">立即购买</button>
							</a>
						</form>
					</div>
				</div>
				<div class="introBox">
					<div class="detaileTitleBox textBox">
						<span class="detaileTitle ilb">
							商品简介
						</span>
					</div>
					<!--  如果使用富文本编辑器 请选择行的删除下面的类名  introTextBox 类名效果为 padding：30px -->
					<div class="introTextBox">
						<!-- 以下为  模拟测试内容   请删除  -->
						<?php echo $book->info; ?>
						<!-- 以上为   模拟测试内容  请删除  -->
					</div>
				</div>
				<div class="commentBox">
					<div class="detaileTitleBox textBox">
						<span class="detaileTitle ilb">
							商品评价
						</span>
					</div>
					<div class="commentDetaileMainBox">
						<!--循环壳子-->
						<?php foreach($messages as $message): ?>
						<div class="commentDetaileBox">
							<div class="clear">
								<div class="left commentImgBox">
									<div class="commentImg">
										<img src="/static/index/images//me-1.jpg" alt="" class="wh-100" />
									</div>
									<span class="conmentName fs-14"><?php echo $message->user->username; ?></span>
								</div>
								<div class="right commentTime fs-14">
									<?php echo $message->create_time; ?>
								</div>
							</div>
							<div class="textBox commentText">
								<?php echo $message->message; ?>
							</div>
							<div>&nbsp;&nbsp;&nbsp;管理员回复(<?php echo $message->replay_time; ?>) : <?php echo $message->replay; ?></div>
						</div>
						<!--循环壳子-->
						<?php endforeach; ?>

						<!--循环产物-->
					</div>
				</div>
			</div>
		</div>

		<!-- 底部共用范围结束  -->
		<script src="/static/index/js/jquery-1.11.3.js" type="text/javascript" charset="utf-8"></script>
		<script src="/static/index/js/fangdajing.js" type="text/javascript" charset="utf-8"></script>
		<script type="text/javascript">
			$(function() {
				/*
				 *	 规格选择样式功能 
				 */
				$('.radioBox').on('click', '.radioLab', function() {
					$(this).addClass('active').siblings('.active').removeClass('active');
				})

				/*
				 * 	购买数量 按钮 和数量 控制器
				 */

				var buyNum = 0;
				$('.jia').click(function() {
					var realnum=$(".realnum").html();
					var price = parseFloat($('.price').html());
					buyNum = parseInt($(this).prev().val());
					buyNum++;
					if(buyNum>realnum){
						return false;
					}
					$(this).prev().val(buyNum);
					$('.allNum').html(buyNum);
					$(".allPrice").html((buyNum * price).toFixed(2));
				})

				$(".buy").click(function(){
					var num=$(".buyNum").val();
					if(num==0){
						alert("请先选择数量");
						return false;
					}
					var book_id=$(".book_id").val();
					location.href="/index/index/order?book_id="+book_id+"&num="+num;
				})

				$('.jian').click(function() {
					var price = parseFloat($('.price').html());
					buyNum = parseInt($(this).next().val());
					if(buyNum <= 0) {
						buyNum = 0
					} else {
						buyNum--
					};
					$(this).next().val(buyNum);
					$('.allNum').html(buyNum);
					$(".allPrice").html((buyNum * price).toFixed(2));
				})

				$('.radioBox').on('click', '.radioLab', function() {
					var guige = $(this).text();
					$('.speciCheck').html(guige);
				})
			})
		</script>
	</body>

</html>