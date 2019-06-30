<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:82:"D:\phpStudy\PHPTutorial\WWW\blog1\public/../application/admin\view\user\index.html";i:1557380486;s:73:"D:\phpStudy\PHPTutorial\WWW\blog1\application\admin\view\public\head.html";i:1534821245;s:73:"D:\phpStudy\PHPTutorial\WWW\blog1\application\admin\view\public\left.html";i:1557380565;s:73:"D:\phpStudy\PHPTutorial\WWW\blog1\application\admin\view\public\foot.html";i:1534821326;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>管理中心 - 网站管理员 </title>
    <meta name="Copyright" content="Douco Design." />
    <link rel="stylesheet" href="/static/extend/uploadimg/upImg.css" />
    <link rel="stylesheet" href="/static/admin/css/public.css">
    
    <script type="text/javascript" src="/static/admin/js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="/static/admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="/static/extend/uploadimg/upImg.js"></script>
    <script type="text/javascript" src="/static/admin/js/global.js"></script>
    <script type="text/javascript" src="/static/extend/layer/layer.js"></script>
    <script type="text/javascript" src="/static/extend/umeditor/ueditor.config.js" charset="utf-8" ></script>
    <script type="text/javascript" src="/static/extend/umeditor/ueditor.all.min.js" charset="utf-8" ></script>
    <script type="text/javascript" src="/static/extend/umeditor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
<?php $username=user("username")?>
<div id="dcWrap"> <div id="dcHead">
    <div id="head">
        <div class="logo"><a href="index.html"><!--<img src="images/dclogo.gif" alt="logo">-->
        </a></div>
        <div class="nav">
            <ul class="navRight">
                <li class="M noLeft"><a href="JavaScript:void(0);">您好,&nbsp;&nbsp;<?php echo $username; ?></a>
                </li>
                <li class="noRight"><a href="<?php echo url('Index/loginout'); ?>">安全退出</a></li>
            </ul>
        </div>
    </div>
</div></div>
<div id="dcLeft">
    <div id="menu">
        <ul>
            <li><a href="/admin/Admin/index"><i class="manager"></i><em>网站管理员</em></a></li>
        </ul>

        <ul>
            <li><a href="/admin/Subject/index"><i class="manager"></i><em>课程管理</em></a></li>
            <li><a href="/admin/Students/index"><i class="manager"></i><em>学生管理</em></a></li>
            <li><a href="/admin/Grade/index"><i class="manager"></i><em>成绩管理</em></a></li>
            <li><a href="/admin/User/index"><i class="manager"></i><em>博主信息</em></a></li>
            <li><a href="/admin/Article/index"><i class="manager"></i><em>内容管理</em></a></li>
        </ul>

    </div>
</div>
<div id="dcMain">
    <!-- 当前位置 -->
    <div id="urHere">管理中心<b>></b><strong>博主信息</strong> </div>   
    <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <form action=""  method="post">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <td width="100" align="right">姓名</td>
                <td>
                    <input type="text" name="realname" size="40" class="inpMain" value="<?php echo $user->realname; ?>" />
                </td>
            </tr>
            <tr>
                <td width="100" align="right">邮箱</td>
                <td>
                    <input type="text" name="email" size="40" class="inpMain" value="<?php echo $user->email; ?>" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" class="btn" value="修改" />
                </td>
            </tr>
        </table>
    </form>
    </div>
</div>
<div class="clear"></div>
<div class="clear"></div>
<div id="dcFooter">
    <div id="footer">
        <div class="line"></div>
        <ul>
            版权所有 ©2015  琼ICP备0000000000号。
        </ul>
    </div>
</div><!-- dcFooter 结束 -->
<div class="clear"></div> </div>
</body>
</html>