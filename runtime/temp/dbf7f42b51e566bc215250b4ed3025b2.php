<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpStudy\PHPTutorial\WWW\lou/application/index\view\index\m_index.html";i:1561900717;}*/ ?>
<!DOCTYPE html>

<html lang="zh-cn">

<head>

    <meta charset="UTF-8">

    <meta content="yes" name="apple-mobile-web-app-capable" />

    <meta content="yes" name="apple-touch-fullscreen" />

    <meta content="telephone=no" name="format-detection">

    <meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=0.5, minimum-scale=0.5, user-scalable=no, viewport-fit=cover">

    <title>广州房产_广州房产网_广州房地产信息网 - 广州楼盘网</title>

    <meta name="Keywords" content="广州房产网,广州房产,广州房地产,广州房地产信息网"/>

    <meta name="description" content="广州房产网是广州房产信息网权威平台，是为广州楼市提供广州房产、广州房地产、广州楼盘、广州房价、广州楼盘地图等楼讯服务的广州房地产网，楼盘网广州站打造广州房产网旗舰品牌。"/>


    <!-- 此js必须在head标签里面 -->

    <script src="/public/static/index/mobile/js/flexible_css.js"></script>

    <script src="/public/static/index/mobile/js/flexible.js"></script>

    <link rel="stylesheet" href="/public/static/index/mobile/css/swiper.min.css">

    <link rel="stylesheet" href="/public/static/index/mobile/css/base.css">

    <link rel="stylesheet" href="/public/static/index/mobile/css/index.css">



    <link rel="stylesheet" href="/public/static/index/mobile/css/new_footer.css">



</head>

<body>

<input type="hidden" class="page_flag_name" value="home" data-site_id="34">

<!-- 页面主体内容 -->

    <div class="pages pages-index">

        <!-- header -->

        <div class="header-index">

            <div class="logo">

                <a href="http://m.loupan.com/gz/"></a>

            </div>

            <div class="search">

                <p id="showSearch">请输入楼盘名称/关键词</p>

            </div>

        </div>



        <!-- banner -->

        <div class="swiper-container banner">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <a href="http://gz.loupan.com/loupan/7031803.html">
                        <img src="other/75" onerror="this.src='/public/static/index/mobile/images/lazy_img.jpg'" alt="越秀滨海新城">
                    </a>
                </div>
                                           
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <!-- 菜单滑动区域 -->
        <div class="swiper-container swiper-menu">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="menu">
                        <a href='/index/build/index?type=0' class='item item-xf'>

                            <span></span>

                            <p>新房</p>

                        </a>

                        <a href='/index/build/index?type=1' class='item item-sydc'>

                            <span></span>

                            <p>商业地产</p>

                        </a>

                        <a href='/index/Article/index' class='item item-esf'>

                            <span></span>

                            <p>楼讯</p>

                        </a>

                        <a href='/index/enlist/index' class='item item-zf'>

                            <span></span>

                            <p>帮您找房</p>

                        </a>

                    </div>
                </div>            
            </div>

            <div class="swiper-pagination"></div>

        </div>

        <!-- 新闻滚动区
        <div class="newsRoll">
            <div class="img"></div>
            <div class="swiper-container list">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide swiper-no-swiping">

                        <a href="http://m.loupan.com/gz/news/201906/3908233" class="item">广州地铁21号线全线贯通！开通在即！沿线热盘别再错过了</a>

                    </div>
                    
                </div>
            </div>
        </div>
        -->
        
        <!-- 预约 
        <div class="enter">
            <div class="txt">
                <div class="tit">专属置业顾问<span>免费带您看房</span></div>
                <div class="desc">海量房源/特价优惠/最优推荐</div>
            </div>
            <div class="btn">
                <a rel="nofollow" href="http://m.loupan.com/gz/group_buy_yykf/?group_buy_id=21004" class="btn">预约看房</a>
            </div>
        </div>
        -->

        <!-- 新房 -->

        <div class="houseList">
            <h2>新房</h2>
            <div class="list">
                <?php foreach($new_builds as $new): ?>
                <div class="item-box">
                    <a href="/index/build/show?id=<?php echo $new->id; ?>" class="item">
                        <div class="img">
                            <img src="<?php echo $new->img; ?>" data-src="<?php echo $new->img; ?>" alt="<?php echo $new->name; ?>">
                         </div>
                        <div class="text">
                            <h3><div class="tit"><?php echo $new->name; ?></div></h3>
                            <div class="address"><?php echo $new->position->position; ?></div>
                            <div class="tags">
                                <span><?php echo $new->item; ?></span>
                            </div>
                            <div class="other">
                                <div class="price"><?php echo $new->start_price; ?></div>
                            </div>
                        </div>
                    </a>
<!--                     <div class="btn">
                        <div class="button mobileTel" data-value="400-819-0357">售楼热线</div>
                    </div> -->
                </div>  
                <?php endforeach; ?>
                <a href="/index/build/index" class="more">
                    <p>查看更多</p>
                </a>
            </div>

        </div>

        <!-- 商业地产 -->

        <div class="houseList">
            <h2>商业地产</h2>
            <div class="list">

                <?php foreach($bus_builds as $bus): ?>
                <div class="item-box">
                    <a href="/index/build/show?id=<?php echo $bus->id; ?>" class="item">
                        <div class="img">
                            <img src="<?php echo $bus->img; ?>" data-src="<?php echo $bus->img; ?>" alt="<?php echo $bus->name; ?>">
                         </div>
                        <div class="text">
                            <h3><div class="tit"><?php echo $bus->name; ?></div></h3>
                            <div class="address"><?php echo $bus->position->position; ?></div>
                            <div class="tags">
                                <span><?php echo $bus->item; ?></span>
                            </div>
                            <div class="other">
                                <div class="price"><?php echo $bus->start_price; ?></div>
                            </div>
                        </div>
                    </a>
<!--                     <div class="btn">
                        <div class="button mobileTel" data-value="400-819-0357">售楼热线</div>
                    </div> -->
                </div>  
                <?php endforeach; ?> 

                <a href="/index/build/index" class="more">
                    <p>查看更多</p>
                </a>
            </div>

        </div>

        <!-- 房产楼讯 -->

        <div class="iNews">
            <h2>房产楼讯</h2>
            <div class="list">
                <?php foreach($articles as $article): ?>
                <a href="/index/article/detail?id=<?php echo $article->id; ?>" class="item">
                    <div class="img">
                        <img src="<?php echo $article->img; ?>" data-src="<?php echo $article->img; ?>" alt="<?php echo $article->title; ?>" >
                    </div>
                    <div class="text">
                        <div class="tit"><?php echo $article->title; ?></div>
                        <div class="date"><?php echo $article->create_time; ?></div>
                        <div class="tag"><?php echo $article->type->name; ?></div>
                    </div>
                </a>
                <?php endforeach; ?>
                <a href="/index/article/index" class="more">
                    <p>查看更多</p>
                </a>
            </div>
        </div>  
        <!--    新添脚部-->
        <div class="footer_new">
            <p>Copyright 广州楼盘网网络技术有限公司</p>
            <p>全国统一服务热线 4008180066转111666 | 邮箱：cs@LouPan.com</p>
            <p>经营性ICP证： 湘ICP备12003586号-55</p>
            <p><img src="/public/static/index/mobile/images/gh.png" alt="gh">湘公网安备 43019002000309(湖南创业工场网络科技有限公司)</p>
            <p>增值电信业务经营许可证：湘B2-20130102</p>
        </div>

    </div>

    <!-- 底部浮动 -->
    <div class="footFloat">
        <a rel="nofollow" href="http://m.loupan.com/gz/group_buy_yykf/?group_buy_id=21004" class="item">
            <p class="item-yykf">预约看房</p>
        </a>
        <a href="javascript:" data-value="4008197089,9999" class="item mobileTel">
            <p class="item-dhzx">电话咨询</p>
        </a>
    </div>

    <!-- 搜索界面 -->
    <section class="pages-search">
        <header>
            <div class="left">
                <a href="javascript:;" class="back"></a>
            </div>
            <div class="center">新房搜索</div>
            <div class="right"></div>
        </header>
        <div class="search">
            <input type="text" name="kw" placeholder="请输入楼盘名称/关键词" >
            <input type="hidden" name="site_id" value="34">
            <input type="hidden" name="lp_url" value="/gz/loupan">
            <ul class="list searchLoupanResult">

            </ul>
        </div>
        <div class="history">
            <h2>最近热搜</h2>
            <div class="list">
                <a href="http://m.loupan.com/gz/loupan/7096225">远洋招商保利东湾</a>
                <a href="http://m.loupan.com/gz/loupan/6076464">南沙湾东苑</a>
                <a href="http://m.loupan.com/gz/loupan/7031718">招商雍景湾</a>
            </div>
        </div>
    </section>

    <script>
        var version = '201905281638';
    </script>
    <script src="/public/static/index/mobile/js/require.js" data-main="http://public.loupan.com/public/assets_v4_m/js/index.js"></script>
</body>

</html>



