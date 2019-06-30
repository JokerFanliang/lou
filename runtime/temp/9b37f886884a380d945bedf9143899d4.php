<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\phpStudy\PHPTutorial\WWW\lou/application/index\view\enlist\m_index.html";i:1561899131;}*/ ?>
<!doctype html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="icon" href="http://www.loupan.com/public/assets//public/static/index/mobile/images/favicon.ico?v=20180919" type="image/ico" />
		<link rel="shortcut icon" href="http://www.loupan.com/public/assets//public/static/index/mobile/images/favicon.ico?v=20180919" />
		<meta name="applicable-device" content="pc,mobile">
		<meta http-equiv="Cache-Control" content="no-transform" />
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
		<meta name="MobileOptimized" content="width" />
		<meta name="HandheldFriendly" content="true" />
		<meta name="viewport" content="width=device-width ,initial-scale=1, maximum-scale=1, user-scalable=no" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<link rel="canonical" href="http://gz.loupan.com/html/news/201906/3908233.html" />
		<title>广州地铁21号线全线贯通！开通在即！沿线热盘别再错过了-广州楼盘网</title>
		<meta name="Keywords" content="广州地铁,21号线,全线贯通,增城地铁盘,地铁房" />
		<meta name="description" content="广州地铁21号线距离开通又近一步啦！" />
		<link rel="stylesheet" media="all" href="/public/static/index/mobile/css/x_h.css" />
		<link rel="stylesheet" media="all" href="/public/static/index/mobile/css/dtxq.css" />
		<link rel="stylesheet" media="all" href="/public/static/index/mobile/css/share.css" />
		<link rel="stylesheet" media="all" href="/public/static/index/mobile/css/f.css" />
		<link rel="stylesheet" media="all" href="/public/static/index/mobile/css/new_footer.css" />
	</head>

	<body>
		<!--header s-->
		<div class="apply-nav overflow mg-auto area clearfix">
			<div class="overflow clearfix apply-top border-bom" style="height:3.3rem">
				<a href="/" class="apply-return">返回</a>
				<div class="logo">
					<a href="/gz/"><img src="/public/static/index/mobile/images/top_logo_white.png" alt="logo"></a>
				</div>
				<a href="#" class="apply-pup" style="float: right;">弹出</a>
			</div>
			<div class="i-icon mg-auto overflow area clearfix" id="apply-pup-icon">
				<h2>频道导航</h2>
				<ul class="clearfix">
					<li>
						<a href="/">首页</a>
					</li>
					<li>
						<a href="/index/build/index">新房</a>
					</li>
					<li>
						<a href="/index/build/index">商业地产</a>
					</li>
					<li>
						<a href="/index/article/index">楼讯</a>
					</li>
					<li>
						<a href="/index/enlist/index">帮您找房</a>
					</li>
				</ul>
			</div>
		</div>
		<!--header e-->
		<!--幻灯片 结束-->
		<!--wrap s-->
		<div class="wrap">
			<div class="n_page_1">
				<div class="n_pageinfo">
					<h2>帮您找房</h2>
					<form enctype="multipart/form-data" action="" method="post" >
						<input class="txt" type="text" id="name" name="name" required value="" placeholder="请输入您的姓名">
						<input class="txt" type="text" id="mobile" name="phone" required value="" placeholder="请输入您的电话">
						<input class="txt" type="text" id="mobile" name="position" value="" placeholder="请输入区域">
						<div class="s-text">
							<input type="text" class="txt" placeholder="请输入意向楼盘" name="build" id='search_input_loupan' required/>
							<input type="hidden" name="group[house]" id="group_house" />
						</div>
						<input class="txt2" type="submit" value="我要报名"></form>
<!-- 					<h2>报名实况</h2>
					<div id="news" class="maquee">
						<ul>
							<script src="other/show_group_news" type=text/javascript></script>
							<li>
								<div>楼盘网网友（150****6788）</div>
								<div>06-11 13:35</div>
							</li>
							<li>
								<div>楼盘网网友（150****3760）</div>
								<div>06-11 13:13</div>
							</li>

						</ul>
					</div> -->
				</div>
				<div class="clear"></div>

				<div class="mk">
					<div class="mk_top">
						<p>热门楼盘</p>
					</div>
					<div class="mk_middle lp_list yuan">
						<?php foreach($hot_builds as $hot): ?>
						<a href="/">
							<div class="loupan-item"><img src="<?php echo $hot->img; ?>">
								<ul>
									<li class="ui-name"><i><?php echo $hot->name; ?></i></li>
									<li class=""><span> <?php echo $hot->start_price; ?></span><span><?php echo $hot->position->position; ?>- </span></li>
								</ul>
							</div>
						</a>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
		<!-- 新添脚部-->
		<div class="footer_new">
			<p>Copyright xxx网络技术有限公司</p>
			<p>全国统一服务热线 xxx | 邮箱：cs@LouPan.com</p>
			<p>经营性ICP证： 湘ICP备xxx号-55</p>
			<p><img src="/public/static/index/mobile/images/gh.png" alt="gh">湘公网安备 43019002000309(湖南创业工场网络科技有限公司)</p>
			<p>增值电信业务经营许可证：湘B2-20130102</p>
		</div>
		<!--wrap e-->
		<div class="option-box">
			<!--div class="option-cont-hf"><a href="javascript:showshare();" >分享</a></div-->
			<div class="option-cont">
				<a href="/gz/news/list_48">返回</a>
			</div>
		</div>
		<!--bg s-->
		<div id="bg" style="display:none;"></div>
		<!--bg e-->
		<!--share s-->
	</body>

</html>

<script>
	wx.config({
		debug: false,
		appId: 'wx3643417f3deb0bb8',
		timestamp: '1560241412',
		nonceStr: '8D0RizRZWmbOfWGg',
		signature: '94df5a7e188c6454fb1d514776826701c4c1b643',
		jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQQ', 'onMenuShareWeibo']
	});
	wx.ready(function() {
		var img_icon = "http://static.loupan.com/newsimg/media/2019/0611/1222168782954.jpg"; /*2. 分享接口 2.1 监听“分享给朋友”，按钮点击、自定义分享内容及分享结果接口*/
		wx.onMenuShareAppMessage({
			title: "广州地铁21号线全线贯通！开通在即！沿线热盘别再错过了" + '-' + "广州楼盘网",
			desc: '广州地铁21号线距离开通又近一步啦！',
			link: "http://m.loupan.com/gz/news/201906/3908233",
			imgUrl: img_icon,
			trigger: function(res) { /*不要尝试在trigger中使用ajax异步请求修改本次分享的内容，因为客户端分享操作是一个同步操作，这时候使用ajax的回包会还没有返回 alert('用户点击发送给朋友');*/ },
			success: function(res) { /*alert('已分享');*/ },
			cancel: function(res) { /*alert('已取消');*/ },
			fail: function(res) {
				console.log(JSON.stringify(res));
			}
		}); /*2.2 监听“分享到朋友圈”按钮点击、自定义分享内容及分享结果接口*/
		wx.onMenuShareTimeline({
			title: "广州地铁21号线全线贯通！开通在即！沿线热盘别再错过了" + '-' + "广州楼盘网",
			link: "http://m.loupan.com/gz/news/201906/3908233",
			imgUrl: img_icon,
			trigger: function(res) { /*不要尝试在trigger中使用ajax异步请求修改本次分享的内容，因为客户端分享操作是一个同步操作，这时候使用ajax的回包会还没有返回 alert('用户点击分享到朋友圈');*/ },
			success: function(res) { /*alert('已分享');*/ },
			cancel: function(res) { /*alert('已取消');*/ },
			fail: function(res) {
				alert(JSON.stringify(res));
			}
		}); /*2.3 监听“分享到QQ”按钮点击、自定义分享内容及分享结果接口*/
		wx.onMenuShareQQ({
			title: "广州地铁21号线全线贯通！开通在即！沿线热盘别再错过了" + '-' + "广州楼盘网",
			desc: '广州地铁21号线距离开通又近一步啦！',
			link: "http://m.loupan.com/gz/news/201906/3908233",
			imgUrl: img_icon,
			trigger: function(res) { /*alert('用户点击分享到QQ');*/ },
			complete: function(res) { /*alert(JSON.stringify(res));*/ },
			success: function(res) { /*alert('已分享');*/ },
			cancel: function(res) { /*alert('已取消');*/ },
			fail: function(res) { /*alert(JSON.stringify(res));*/ }
		}); /*2.4 监听“分享到微博”按钮点击、自定义分享内容及分享结果接口*/
		wx.onMenuShareWeibo({
			title: "广州地铁21号线全线贯通！开通在即！沿线热盘别再错过了" + '-' + "广州楼盘网",
			desc: '广州地铁21号线距离开通又近一步啦！',
			link: "http://m.loupan.com/gz/news/201906/3908233",
			imgUrl: img_icon,
			trigger: function(res) { /*alert('用户点击分享到微博');*/ },
			complete: function(res) { /*alert(JSON.stringify(res));*/ },
			success: function(res) { /*alert('已分享');*/ },
			cancel: function(res) { /*alert('已取消');*/ },
			fail: function(res) { /*alert(JSON.stringify(res));*/ }
		}); /*8.2 显示右上角菜单*/
		wx.showOptionMenu();
	});
	wx.error(function(res) {
		console.log(res.errMsg);
	});
</script>
<script src="/public/static/index/mobile/js/jquery.min.js"></script>
<script type="text/javascript" src="/public/static/index/mobile/js/hhSwipe.js"></script>
<script src="/public/static/index/mobile/js/show.js?v=2017032402"></script>
<script type="text/javascript">
	var url = encodeURIComponent(document.location.href);
	var title = document.title + url;
	var summary = document.title + url;

	function showshare() {
		$('#share_contain').css('display', 'block');
	}

	function copyToClipBoard() {
		var url = "";
		url += this.location.href;
		$("#fe_text").html(url);
		$("#show_url").show();
		$('#share_contain').hide();
	}

	function shareQzone() {
		window.open('http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?title=' + title + '&url=' + url + '&summary=' + summary);
		void(0);
	}

	function shareRenren() {
		window.open('http://widget.renren.com/dialog/share?resourceUrl=' + url + '&srcUrl=' + url + '&title=' + title + '&description=');
		void(0);
	}

	function shareSina() {
		window.open('http://v.t.sina.com.cn/share/share.php?title=' + title + '&url=' + url + '&summary=' + summary);
		void(0);
	}

	function shareQQWeibo() {
		window.open('http://v.t.qq.com/share/share.php?title=' + title + '&url=' + url + '&summary=' + summary);
		void(0);
	}

	function shareQQ() {
		window.open('http://connect.qq.com/widget/shareqq/index.html?url=' + url + '&title=' + title + '&desc=&summary=&site=');
		void(0);
	}
	$("#news ul li:nth-child(even)").addClass("even");
	$("#news ul li:nth-child(odd)").addClass("odd");

	function autoScroll(obj) {
		$(obj).find("ul").animate({
			marginTop: "-38px"
		}, 500, function() {
			$(this).css({
				marginTop: "0px"
			}).find("li:first").appendTo(this);
		});
	}
	$(function() {
		setInterval('autoScroll(".maquee")', 3000);
	});

	// function checkform() {
	// 	if(!$(".s-text").find(".xieyi").prop("checked")) {
	// 		alert("请确认楼盘网协议!");
	// 		return false;
	// 	}
	// 	if($("#name").val() == '') {
	// 		alert("请填写您的姓名");
	// 		$("#name").focus();
	// 		return false;
	// 	} else if($("#mobile").val() == '') {
	// 		alert("请填写您的手机号码");
	// 		$("#mobile").focus();
	// 		return false;
	// 	}
	// }
	$(function() {
		ajax_get_all_content();
		$("#show_url i").on('click', function() {
			$("#show_url").hide();
			$("#bg").hide();
		});
	}); /** * ajax获取余下文章内容 * @name ajax_get_all_content * @author liuzhiliang/20160912 */
	var py = 'gz';

	function ajax_get_all_content() {
		$("#read_ajax_all").on('click', function() {
			var url = $(this).attr("data-href");
			$.ajax({
				type: "GET",
				url: url,
				data: '',
				success: function(result) {
					if(result != '') {
						$("#ajax_all_page").append(result);
						$(".m-page-sr").remove();
					}
				}
			});
		});
	}
</script>
<script type="text/javascript">
	var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
	document.write(unescape("%3Cspan id='cnzz_stat_icon_30090299'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "w.cnzz.com/c.php%3Fid%3D30090299' type='text/javascript'%3E%3C/script%3E"));
</script>
<script>
	var _hmt = _hmt || [];
	(function() {
		var hm = document.createElement("script");
		hm.src = "https://hm.baidu.com/hm.js?4900141126f29e4b4985573e9bcc03b8";
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(hm, s);
	})();
</script>
<script>
	var _hmt = _hmt || [];
	(function() {
		var hm = document.createElement("script");
		hm.src = "https://hm.baidu.com/hm.js?c3ecc996b09c60b59615ae824a065659";
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(hm, s);
	})();
</script>
<script>
	(function() {
		var bp = document.createElement('script');
		var curProtocol = window.location.protocol.split(':')[0];
		if(curProtocol === 'https') {
			bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
		} else {
			bp.src = 'http://push.zhanzhang.baidu.com/push.js';
		}
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(bp, s);
	})();
</script>
<script>
	(function() {
		var src = (document.location.protocol == "http:") ? "http://js.passport.qihucdn.com/11.0.1.js?f53dadd2091cdc42590b1d804ca43afc" : "https://jspassport.ssl.qhimg.com/11.0.1.js?f53dadd2091cdc42590b1d804ca43afc";
		document.write('<script src="' + src + '" id="sozz"><\/script>');
	})();
</script>
<!-- GrowingIO Analytics code version 2.1 -->
<script type='text/javascript'>
	! function(e, t, n, g, i) {
		e[i] = e[i] || function() {
			(e[i].q = e[i].q || []).push(arguments)
		}, n = t.createElement("script"), tag = t.getElementsByTagName("script")[0], n.async = 1, n.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + g, tag.parentNode.insertBefore(n, tag)
	}(window, document, "script", "assets.growingio.com/2.1/gio.js", "gio");
	gio('init', 'b48577f93a577294', {});
	gio('send');
</script>
<!-- baidu熊掌号 -->
<script src="/public/static/index/mobile/js/c.js?appid=1571411585065842"></script>
<script type="application/ld+json">
	{
		"@context": "https://zhanzhang.baidu.com/contexts/cambrian.jsonld",
		"@id": "http://m.loupan.com/gz/news/201906/3908233",
		"title": "广州地铁21号线全线贯通！开通在即！沿线热盘别再错过了-广州楼盘网",
		"description": "广州地铁21号线距离开通又近一步啦！",
		"pubDate": "2019-06-11T11:49:09",
		"isOriginal": "1"
	}
</script>