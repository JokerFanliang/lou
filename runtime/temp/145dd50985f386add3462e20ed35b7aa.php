<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpStudy\PHPTutorial\WWW\lou/application/index\view\build\m_index.html";i:1561901217;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="yes" name="apple-touch-fullscreen" />
    <meta content="telephone=no" name="format-detection">
    <meta name="viewport"
          content="width=device-width, initial-scale=0.5, maximum-scale=0.5, minimum-scale=0.5, user-scalable=no, viewport-fit=cover">
    <title>广州新房_一手房_新开楼盘_价格信息-广州楼盘网</title>
    <meta name="Keywords" content="广州新房,广州新楼盘,广州一手房,广州房价"/>
    <meta name="description" content="广州楼盘网新房频道为您精心推荐广州新开楼盘和公寓商铺等一手房源信息，通过提供实时变动的房产价格走势及专业的买卖服务，为您在广州找一个新家。"/>
    <link rel="canonical" href="http://gz.loupan.com/xinfang/" />
    <!-- 此js必须在head标签里面 -->
    <script src="/public/static/index/mobile/js/flexible_css.js"></script>
    <script src="/public/static/index/mobile/js/flexible.js"></script>

    <link rel="stylesheet" href="/public/static/index/mobile/css/swiper.min.css">
    <link rel="stylesheet" href="/public/static/index/mobile/css/base.css">
    <link rel="stylesheet" href="/public/static/index/mobile/css/xinfang.css">
    <link rel="stylesheet" href="/public/static/index/mobile/css/new_footer.css">
</head>

<body>

<input type="hidden" class="page_flag_name" value="loupan_list" data-site_id="34" data-area_id="0">

<div class="pages pages-xflb">

    <!-- header -->
    <header class="header-inner">
        <div class="left">
            <a href="javascript:window.history.back();" class="back"></a>
        </div>
        <div class="center"><a href="http://m.loupan.com/gz/"><img src="/public/static/index/mobile/images/top_logo.png" alt="logo"></a></div>
        <div class="right">
            <a href="javascript:;" class="menu" id="showMenu"></a>
        </div>

    </header>

    <!-- 搜索 -->

    <div class="search">

        <p id="showSearch">请输入楼盘名称/关键词</p>
<!--        <a href="#" class="map">地图</a>-->
    </div>

    <!-- 新闻滚动区 -->
<!--     <div class="newsRoll">
        <div class="img"></div>
        <div class="swiper-container list">
            <div class="swiper-wrapper">

                <div class="swiper-slide swiper-no-swiping">
                    <a href="/gz/loupan/7021453/dongtai_2343430">金地香山湖洋房带装修16000元/㎡</a>
                </div>

                <div class="swiper-slide swiper-no-swiping">
                    <a href="/gz/loupan/7090824/dongtai_2343055">​万科未来森林在售80-95㎡复式</a>
                </div>
            </div>

        </div>

    </div> -->

    <!-- 筛选 -->
    <div class="choose">
        <div class="items">
            <div class="item item-location" data-type="location">
                <p>位置</p>
            </div>
            <div class="item item-price" data-type="price">
                <p>价格</p>
            </div>
            <div class="item item-type" data-type="type">
                <p>开盘</p>
            </div>
            <div class="item item-more" data-type="more">
                <p>更多</p>
            </div>
        </div>
        <div class="result">
            <div class="swiper-container choose-swiper">
                <div class="swiper-wrapper"></div>
            </div>
        </div>
    </div>

    <!-- 列表 -->
    <div class="list">
        <?php foreach($builds as $build): ?>
        <div class="item">
            
            <a href="/index/build/show?id=<?php echo $build->id; ?>">
                <div class="img">
                    <img src="<?php echo $build->img; ?>" alt="<?php echo $build->img; ?>">
                </div>
                <div class="text">
                    <div class="tit">
                        <p><?php echo $build->name; ?></p><!-- <span>精</span> -->
                    </div>
                    <div class="address"><?php echo $build->position->position; ?></div>
                    <div class="tags">
                        <span><?php echo $build->item; ?></span>
                    </div>
                    <div class="other">
                        <p> <?php echo $build->start_price; ?></p>
                        <span class="button mobileTel" data-value="400-819-7225">售楼热线 </span>
                    </div>
                </div>
            </a>
            

            <div class="info info-dt"></div>
        </div>

        <?php endforeach; ?>          
    </div>
    <!-- 加载列表结果 -->
    <div class="list-result">已经到底了</div>
    <!-- 热门链接 -->

    <div class="hotBottomLink">
        <ul class="tab-head">
            <li class="active">热门城市</li>
            <li>推荐楼盘</li>
            <li>房产知识</li>
            <li>综合推荐</li>
        </ul>

        <ul class="tab-body">
            <!-- 热门城市 -->
            <li class="active">
                <a href="http://m.loupan.com/sh/">上海房产网</a>
                <a href="http://m.loupan.com/sz/">深圳房产网</a>
                <a href="http://m.loupan.com/wh/">武汉房产网</a>
            </li>

            <!-- 推荐楼盘 -->
            <li>
                <a href="http://m.loupan.com/gz/loupan/7076242/">星河湾区壹号</a>
                <a href="http://m.loupan.com/gz/loupan/7068178/">万科桃源里</a>
                <a href="http://m.loupan.com/gz/loupan/7028733/">阳光城丽景湾</a>     
            </li>

            <!-- 专题链接 -->
            <li>
                <a href="http://m.loupan.com/zhuanti/1">准备</a>
                <a href="http://m.loupan.com/zhuanti/3">看房/选房</a>
                <a href="http://m.loupan.com/zhuanti/4">认购</a>
            </li>

            <!-- 综合推荐 -->
            <li>
                <a href="http://m.loupan.com/gz/loupan/">新房</a>
                <a href="http://m.loupan.com/gz/esf/p1/">二手房</a>
                <a href="http://m.loupan.com/gz/zu/p1/">租房</a>
            </li>

        </ul>

    </div>

    <!-- 浮动排序 -->
<!--     <div class="sort" id="showSort"></div> -->

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
    <a href="javascript:" class="test-enter item" data-id="21007" data-site_id="34" data-title="帮您找房" data-desc="海量房源为您优选，优质房源为您推荐。">
        <p class="item-bnzf">帮您找房</p>
    </a>
    <!--不是开通im站点并且设置了商桥代码的显示之前的im代码-->
    <a href="javascript:" data-value="400-819-6572" class="item mobileTel">
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
            <a href="http://m.loupan.com/gz/loupan/7096225" class="item">远洋招商保利东湾</a>
            <a href="http://m.loupan.com/gz/loupan/6076464" class="item">南沙湾东苑</a>
        </div>
    </div>

</section>

<!-- 右侧菜单 -->

<section class="right-menu">
    <div class="bg"></div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <ul class="list">
                    <li>
                        <a href="/" class="item item-sy">首页</a>
                    </li>
                    <li>
                        <a href="/index/build/index" class="item item-xf">新房</a>
                    </li>

                    <li>
                        <a href="/index/build/index" class="item item-esf">商业地产</a>
                    </li>
                    <li>
                        <a href="/index/article/index" class="item item-zf">楼讯</a>
                    </li>
                    <li>
                        <a href="/index/enlist/index" class="item item-zf">帮你找房</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- 滑动排序 -->

<!-- <section class="bottom-sort">

    <div class="bg"></div>

    <div class="swiper-container">

        <div class="swiper-wrapper">

            <div class="swiper-slide">

                <ul class="list">

                    <li>

                        <a href="http://m.loupan.com/gz/loupan//" class="active">默认排序</a>

                    </li>

                    <li>

                        <a href="http://m.loupan.com/gz/loupan/o1/" >人气最高</a>

                    </li>

                    <li>

                        <a href="http://m.loupan.com/gz/loupan/o2/" >单价最高</a>

                    </li>

                    <li>

                        <a href="http://m.loupan.com/gz/loupan/o3/" >单价最低</a>

                    </li>

                    <li>

                        <a href="http://m.loupan.com/gz/loupan/o4/" >最新开盘</a>

                    </li>

                </ul>

            </div>

        </div>

    </div>

</section> -->

<!-- 顶部筛选 -->

<section class="top-choose">
    <div class="btns">
        <div class="item item-location" data-type="location">
            <p>位置</p>
        </div>
        <div class="item item-price" data-type="price">
            <p>价格</p>
        </div>
        <div class="item item-type" data-type="type">
            <p>开盘</p>
        </div>
        <div class="item item-more" data-type="more">
            <p>更多</p>
        </div>
    </div>

    <div class="choose">
        <div class="item item-location">
            <!--第一列-->
            <div class="column column-1" data-index="1">
                <div class="i active" data-type="quyu">区域</div>
                <div class="i" data-type="ditie">地铁</div>
            </div>
            <!-- 第二列 -->

            <!-- 第二列 区域-->

            <div class="column column-2 active" data-parent="quyu" data-index="2">

                <div class="i">
                    <a href="http://m.loupan.com/gz/loupan/">不限</a>
                </div>
                <div class='i' data-type="nansha">南沙</div>
                <div class='i' data-type="fanyu">增城</div>
            </div>

            <!-- 第二列 地铁-->
            <div class="column column-2" data-parent="ditie" data-index="2">
                <div class="i">
                    <a href="http://m.loupan.com/gz/loupan/">不限</a>
                </div>
                <div class="i" data-type="APM线">
                    <a  href="http://m.loupan.com/gz/loupan/a1368-d1451/">APM线</a>
                </div>
                <div class="i" data-type="1号线">
                    <a  href="http://m.loupan.com/gz/loupan/a1368-d1434/">1号线</a>
                </div>       
            </div>

            <!--第三列-->
            <!-- 第三列 区域-版块-->
            <div class="column column-3" data-parent="nansha" data-index="3">
                <div class="i">
                    <a href="http://m.loupan.com/gz/loupan/nansha/">不限</a>
                </div>
                <div class="i">
                    <a href="http://m.loupan.com/gz/loupan/nansha/c7393/">万顷沙</a>
                </div>
            </div>

            <div class="column column-3" data-parent="fanyu" data-index="3">
                <div class="i">
                    <a href="http://m.loupan.com/gz/loupan/fanyu/">不限</a>
                </div>                                    
                <div class="i">
                    <a href="http://m.loupan.com/gz/loupan/fanyu/c7230/">石基</a>
                </div>
            </div>

            <div class="column column-3" data-parent="zengcheng" data-index="3">
                <div class="i">
                    <a href="http://m.loupan.com/gz/loupan/zengcheng/">不限</a>
                </div>
                <div class="i">
                    <a href="http://m.loupan.com/gz/loupan/zengcheng/c7174/">朱村</a>
                </div>            
            </div>
        </div>

        <div class="item item-price">
            <a href="http://m.loupan.com/gz/loupan/">不限</a>
            <a  href="http://m.loupan.com/gz/loupan/m18/">10000以下</a>
            <a  href="http://m.loupan.com/gz/loupan/m22/">15000-20000</a>
            <a  href="http://m.loupan.com/gz/loupan/m21/">20000-25000</a>
        </div>

        <div class="item item-type">
            <a href="http://m.loupan.com/gz/loupan/">不限</a>
            <a  href="http://m.loupan.com/gz/loupan/k11/">最近开盘</a>
            <a  href="http://m.loupan.com/gz/loupan/k21/">未来一个月</a>
        </div>
        <div class="item item-more">
            <a href="http://m.loupan.com/gz/loupan/">不限</a>
            <a  href="http://m.loupan.com/gz/loupan/k11/">最近开盘</a>
            <a  href="http://m.loupan.com/gz/loupan/k21/">未来一个月</a>
        </div>

    </div>

</section>

<input type="hidden" id="next_page" value="http://m.loupan.com/gz/loupan/p2/">

<!-- 报名相关 -->

<input type="hidden" name="site_id" value="34">

<input type="hidden" name="cityarea_id" value="0">

<input type="hidden" name="cross_group_buy_url" value="http://cs.loupan.com/group_buy/group_buy_sign_in">



<script>

    var version = '201905281638';

</script>



<script src="/public/static/index/mobile/js/require.js" data-main="http://public.loupan.com/public/assets_v4_m/js/list.js"></script>

</body>

</html>