<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:81:"D:\phpStudy\PHPTutorial\WWW\book\public/../application/admin\view\order\edit.html";i:1557630198;s:72:"D:\phpStudy\PHPTutorial\WWW\book\application\admin\view\public\head.html";i:1534821245;s:72:"D:\phpStudy\PHPTutorial\WWW\book\application\admin\view\public\left.html";i:1557629886;s:72:"D:\phpStudy\PHPTutorial\WWW\book\application\admin\view\public\foot.html";i:1534821326;}*/ ?>
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
<div id="dcMain">
    <!-- 当前位置 -->
    <div id="urHere">管理中心<b>></b><strong>订单管理</strong> </div>   
    <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="javascript:history.go(-1);" class="actionBtn">返回列表</a>修改订单</h3>
    <form action=""  method="post" id="form"  enctype="multipart/form-data">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic" >
            <tr>
                <td width="100" align="right">书名</td>
                <td>
                    <?php echo $list->book->name; ?>
                </td>
            </tr>
            <tr>
                <td width="100" align="right">金额</td>
                <td>
                    <?php echo $list->money; ?>
                </td>
            </tr>
            <tr>
                <td width="100" align="right">联系人</td>
                <td>
                    <?php echo $list->user->realname; ?>
                </td>
            </tr>
            <tr>
                <td width="100" align="right">手机号</td>
                <td>
                    <?php echo $list->user->phone; ?>
                </td>
            </tr>
            <tr>
                <td width="100" align="right">地址</td>
                <td>
                    <?php echo $list->user->address; ?>
                </td>
            </tr>
            <tr>
                <td width="100" align="right">订单状态</td>
                <td>
                    <?php echo $list->type==2?"货到付款" : "已付款"; ?>
                </td>
            </tr>
            <tr>
                <td width="100" align="right">物流状态</td>
                <td>
                    <select name="state">
                        <option value="0" <?php if($list->type==0)echo 'selected';?>>待发货</option>
                        <option value="1" <?php if($list->type==1)echo 'selected';?>>已发货</option>
                        <option value="2" <?php if($list->type==2)echo 'selected';?>>已收货</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $list->id; ?>">
                    <input type="submit" class="btn" name="修改">
<!--                     <div class="btn sub">添加</div> -->
                </td>
            </tr>
        </table>
    </form>
    </div>
</div>
<div class="clear"></div>
<script>
    //实例化编辑器
    var ue = UE.getEditor('editor');
    $(".sub").click(function(){
        var title=$.trim($(".title").val());
        if(title==""){
            alert("标题不能为空");
            return false;
        }
        var arr = [];
        arr.push(UE.getEditor('editor').getContent());
        var text=arr.join("\n");                
        $(".content").val(text);

        $("#form").submit();
    })
</script>
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