<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\phpStudy\PHPTutorial\WWW\case1\public/../application/admin\view\login\login.html";i:1525940845;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<meta http-equiv="Pragma" content="no-cache"> 
<meta http-equiv="Cache-Control" content="no-cache"> 
<meta http-equiv="Expires" content="0"> 
<title>后台管理</title>
<link href="/static/admin/css/login.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="login_box">
      <div class="login_l_img"><img src="/static/admin/image/login-img.png" /></div>
      <div class="login">
          <div class="login_logo"><a href="#"><img src="/static/admin/image/login_logo.png" /></a></div>
          <div class="login_name">
               <p>后台管理系统</p>
          </div>
          <form method="post" action="<?php echo url('Login/login'); ?>">
              <input name="username" type="text" placeholder="用户名">
              <input name="password" type="password" id="password" placeholder="密码" />
              <input value="登录" style="width:100%;" type="submit">
          </form>
      </div>
      <!--<div class="copyright">某某有限公司 版权所有©2016-2018 技术支持电话：000-00000000</div>-->
</div>
</body>
</html>
