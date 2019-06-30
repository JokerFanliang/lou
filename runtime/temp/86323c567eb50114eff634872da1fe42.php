<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"D:\phpStudy\PHPTutorial\WWW\lou/application/admin\view\user\index.html";i:1560268293;s:71:"D:\phpStudy\PHPTutorial\WWW\lou\application\admin\view\public\head.html";i:1560266739;s:71:"D:\phpStudy\PHPTutorial\WWW\lou\application\admin\view\public\left.html";i:1557629886;s:71:"D:\phpStudy\PHPTutorial\WWW\lou\application\admin\view\public\foot.html";i:1534821326;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>管理中心 - 网站管理员 </title>
    <meta name="Copyright" content="Douco Design." />
    <link rel="stylesheet" href="/public/static/extend/uploadimg/upImg.css" />
    <link rel="stylesheet" href="/public/static/admin/css/public.css">
    
    <script type="text/javascript" src="/public/static/admin/js/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="/public/static/admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/static/extend/uploadimg/upImg.js"></script>
    <script type="text/javascript" src="/public/static/admin/js/global.js"></script>
    <script type="text/javascript" src="/public/static/extend/layer/layer.js"></script>
    <script type="text/javascript" src="/public/static/extend/umeditor/ueditor.config.js" charset="utf-8" ></script>
    <script type="text/javascript" src="/public/static/extend/umeditor/ueditor.all.min.js" charset="utf-8" ></script>
    <script type="text/javascript" src="/public/static/extend/umeditor/lang/zh-cn/zh-cn.js"></script>
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
            <li><a href="/admin/User/index"><i class="manager"></i><em>用户管理</em></a></li>
        </ul>
        <ul>
            <li><a href="/admin/Type/index"><i class="manager"></i><em>图书类别管理</em></a></li>
        </ul>
        <ul>
            <li><a href="/admin/Book/index"><i class="manager"></i><em>图书管理</em></a></li>
        </ul>

        <ul>
            <li><a href="/admin/Order/index"><i class="manager"></i><em>订单管理</em></a></li>
        </ul>

        <ul>
            <li><a href="/admin/Message/index"><i class="manager"></i><em>评价管理</em></a></li>
        </ul>

    </div>
</div>
<script type="text/javascript">

    function del(id) {
        layer.confirm('确定要删除吗？',  function(){
            window.location.href="/admin/User/del?id="+id;
        });
    }
</script>
<div id="dcMain"><!-- 当前位置 -->
    <div id="urHere">管理中心<b>></b><strong>用户管理</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3>
        用户列表
    </h3>
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
        <tr>
            <th width="30" align="center">编号</th>
            <th align="center">用户名</th>
            <th align="center">真实姓名</th>
            <th align="center">手机号</th>
            <th align="center">注册时间</th>
            <th align="center">操作</th>
        </tr>
        <?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
        <tr>

            <td align="center"><?php echo $list->id; ?></td>
            <td align="center"><?php echo $list->username; ?></td>
            <td align="center"><?php echo $list->realname; ?></td>
            <td align="center"><?php echo $list->phone; ?></td>
            <td align="center"><?php echo $list->create_time; ?></td>
            <td align="center">
                <a href="/admin/user/edit/<?php echo $list->id; ?>">编辑</a> 
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <?php echo $lists->render(); ?>
    </div>
 </div>
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