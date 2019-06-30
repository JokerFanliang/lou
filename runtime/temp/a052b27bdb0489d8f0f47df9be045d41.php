<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:76:"D:\phpStudy\PHPTutorial\WWW\lou/application/admin\view\buildarticle\add.html";i:1561045979;s:71:"D:\phpStudy\PHPTutorial\WWW\lou\application\admin\view\public\head.html";i:1560266739;s:71:"D:\phpStudy\PHPTutorial\WWW\lou\application\admin\view\public\left.html";i:1561265226;s:71:"D:\phpStudy\PHPTutorial\WWW\lou\application\admin\view\public\foot.html";i:1534821326;}*/ ?>
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
            <li><a href="/admin/Banner/index"><i class="manager"></i><em>banner管理</em></a></li>
        </ul>
        <ul>
            <li><a href="/admin/Type/index"><i class="manager"></i><em>类型管理</em></a></li>
            <li><a href="/admin/Housetype/index"><i class="manager"></i><em>户型管理</em></a></li>
            <li><a href="/admin/Position/index"><i class="manager"></i><em>位置管理</em></a></li>
            <li><a href="/admin/Price/index"><i class="manager"></i><em>价格区间</em></a></li>
        </ul>

        <ul>
            <li><a href="/admin/Articletype/index"><i class="manager"></i><em>楼讯类型</em></a></li>
            <li><a href="/admin/Article/index"><i class="manager"></i><em>楼讯内容</em></a></li>
        </ul>
        <ul>
            <li><a href="/admin/Build/index"><i class="manager"></i><em>楼盘管理</em></a></li>
            <li><a href="/admin/Buildarticle/index"><i class="manager"></i><em>动态</em></a></li>
            <li><a href="/admin/Img/index"><i class="manager"></i><em>楼盘图</em></a></li>
            <li><a href="/admin/House/index"><i class="manager"></i><em>户型</em></a></li>
        </ul>
        <ul>
            <li><a href="/admin/Enlist/index"><i class="manager"></i><em>团购报名</em></a></li>
        </ul>
    </div>
</div>

<div id="dcMain">
    <!-- 当前位置 -->
    <div id="urHere">管理中心<b>></b><strong>动态管理</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3>添加动态</h3>
    <form action=""  method="post" id="form" enctype="multipart/form-data">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <td align="right">楼盘</td>
                <td>
                    <select name="build_id">
                        <?php foreach($builds as $build): ?>
                            <option value="<?php echo $build->id; ?>"><?php echo $build->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right">标题</td>
                <td>
                    <input type="text" required name="title" size="40" class="inpMain" value="" />
                </td>
            </tr>
            <tr>
                <td align="right">内容</td>
                <td>
                    <input type="hidden" name="content" class="content">
                    <script id="editor" type="text/plain" style="width:1024px;height:300px;"></script>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <div >
                        <input type="submit" value="添加" class="btn sub">
                    </div>
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
<script>
    var ue = UE.getEditor('editor');
    $(".sub").click(function(){
        var arr = [];
        arr.push(UE.getEditor('editor').getContent());
        var text=arr.join("\n");                
        $(".content").val(text);
        $("#form").submit();
    })
</script>
</body>
</html>