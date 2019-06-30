<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:84:"D:\phpStudy\PHPTutorial\WWW\blog1\public/../application/admin\view\article\edit.html";i:1557382708;s:73:"D:\phpStudy\PHPTutorial\WWW\blog1\application\admin\view\public\head.html";i:1534821245;s:73:"D:\phpStudy\PHPTutorial\WWW\blog1\application\admin\view\public\left.html";i:1557380565;s:73:"D:\phpStudy\PHPTutorial\WWW\blog1\application\admin\view\public\foot.html";i:1534821326;}*/ ?>
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
    <div id="urHere">管理中心<b>></b><strong>内容管理</strong> </div>   
    <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="javascript:history.go(-1);" class="actionBtn">返回列表</a>修改文章</h3>
    <form action=""  method="post" id="form"  enctype="multipart/form-data">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic" >
            <tr>
                <td width="100" align="right">标题</td>
                <td>
                    <input type="text" required="required" name="title" size="40" class="inpMain title" value="<?php echo $list->title; ?>" />
                </td>
            </tr>
             <tr>
                <td align="right">上传图片</td>
                <td>
                    <input type="file" name="img1" class="img">
                </td>
            </tr>
            <tr>
                <td align="right">当前图片</td>
                <td>
                    <img src="<?php echo $list->img; ?>" width="200xp">
                </td>
            </tr>
            <tr>
                <td align="right">内容</td>
                <td>
                    <input type="hidden" name="content" class="content">
                    <script id="editor" type="text/plain" style="width:1024px;height:300px;"><?php echo $list->content; ?></script>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $list->id; ?>">
                    <div class="btn sub">修改</div>
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