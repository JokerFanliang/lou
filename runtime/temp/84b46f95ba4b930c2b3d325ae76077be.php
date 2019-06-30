<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\phpStudy\PHPTutorial\WWW\book\public/../application/index\view\login\login.html";i:1557634091;}*/ ?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>书屋</title>
		<link rel="stylesheet" href="/static/index/css/recss.css" />
		<link rel="stylesheet" href="/static/index/css/header-footer.css" />
		<link rel="stylesheet" href="/static/index/css/login.css" />
	</head>

	<body>
		<!-- 共用头部范围开始  -->
		<!-- 顶部-->
		<div class="header">
			<div class="centerBox clear">
				<div class="left">
					<span>欢迎访问</span><span class="font-w">书屋</span> &nbsp;
					<a href="/index/login/login" class="redText">登录</a>&nbsp;
					<span>|</span>&nbsp;
					<a href="/index/login/reg" class="redText">注册</a>&nbsp;
					<span>入口</span>
				</div>
			</div>
		</div>
		<!-- logo层  -->
		<div class="centerBox">
			<div class="logoBox">
				<a href="index.html">
					<img src="/static/index/images/logo.png" alt="" class="logoImg" />
				</a>
			</div>
		</div>
		<!--导航栏-->
		<div class="loginBox">
			<div class="centerBox clear">
				<form action="" method="post" class="right loginFormBox" id="form">
					<div class="font-w fs-18">用户登录</div>
					<div class="inputMainBox">
						<div class="inputBox">
							<input type="text" name="username" placeholder="请填写用户名" />
						</div>
						<div class="inputBox">
							<input type="password" name="password" placeholder="请输入密码" />
						</div>
					</div>
					<div class="clear fs-14">
						<a href="/index/login/reg" class="register right redText">没有账号？立即注册</a>
					</div>
					<!-- 跑流程用的a链接  加程序用下面的 button -->
<!-- 					<a href="javascript:void(0)" class="sub loginBtn tac">登录</a> -->
						<button class="loginBtn" type="submit">登录</button>

				</form>
			</div>
		</div>

		<!-- 底部共用范围开始  -->
		<div class="footer">
			<div class="centerBox mgt-25 clear">
				<div class="left">
					<p class="beiAn">©2000-2016 xxxx科技有限有限公司版权所有 京公安网备xxx 陕ICP备xxxxxx号</p>
				</div>
			</div>
		</div>
		<!-- 底部共用范围结束  -->
		<script src="/static/index/js/jquery-1.11.3.js" type="text/javascript" charset="utf-8"></script>
		<script>

		</script>
	</body>

</html>