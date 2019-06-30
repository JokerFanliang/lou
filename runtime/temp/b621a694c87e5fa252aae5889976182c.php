<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:82:"D:\phpStudy\PHPTutorial\WWW\book\public/../application/index\view\index\index.html";i:1557671318;s:72:"D:\phpStudy\PHPTutorial\WWW\book\application\index\view\public\head.html";i:1557670971;}*/ ?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <title>图书屋</title>
    <link rel="stylesheet" href="/static/index/css/recss.css" />
    <link rel="stylesheet" href="/static/index/css/header-footer.css" />
    <link rel="stylesheet" href="/static/index/css/subNav.css" />
    <link rel="stylesheet" href="/static/index/css/product-list.css" />
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
    <div class="main">
      <div class="centerBox clear">
        <div class="navTitle fs-14"><a href="index.html">类型</a> / <a href="#"><?php echo $type_name; ?></a></div>
        <!--循环壳子-->
        <?php foreach($books as $book): ?>
        <div class="left detaileBox">
          <div class="detaileImgBox tac">
            <a href="/index/index/detail?id=<?php echo $book->id; ?>">
              <img src="<?php echo $book->img; ?>" class="wh-100 detaileImg" alt="" />
            </a>
          </div>
          <div class="redText priceBox fs-14">￥<span class="fs-18 price"><?php echo $book->price; ?></span>
            <span class="oldPrice fs-14">库存：<?php echo $book->num; ?></span>
          </div>
          <p class="msg fs-14"><?php echo $book->name; ?></p>
          <!--  点击事件 请绑在  joinCartBox 这里 -->          
          <div class="joinCartBox clear">

<!--               <img src="/static/index/images/nongzi-buy.png" alt="" class="joinCart"/> -->
          </div>
        </div>
        <!--循环壳子-->
        <?php endforeach; ?>
        
      </div>
<!--       <div class="pageBox centerBox tac w-100 bd">
        此处用于放置分页插件  去除类名 bd 就能去掉边框  高度给的 60px
      </div> -->
    </div>
    <!-- 底部共用范围开始  -->
    <!-- 底部共用范围结束  -->
    <script src="/static/index/js/jquery-1.11.3.js" type="text/javascript" charset="utf-8"></script>
    <script>
      $(function() {
        $('.checkDetailBox').on('click', 'label', function() {
          var check=$(this).find('[type="checkbox"]').is(":checked");
          if(check){
            $(this).addClass('active');
          }else{
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
      });
    </script>
  </body>

</html>