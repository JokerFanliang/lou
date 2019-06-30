<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:71:"D:\phpStudy\PHPTutorial\WWW\lou/application/admin\view\price\index.html";i:1560577178;s:71:"D:\phpStudy\PHPTutorial\WWW\lou\application\admin\view\public\head.html";i:1560266739;s:71:"D:\phpStudy\PHPTutorial\WWW\lou\application\admin\view\public\left.html";i:1561265226;s:71:"D:\phpStudy\PHPTutorial\WWW\lou\application\admin\view\public\foot.html";i:1534821326;}*/ ?>
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
<script type="text/javascript">

    function del(id) {
        layer.confirm('确定要删除吗？',  function(){
            window.location.href="/admin/Price/del?id="+id;
        });
    }
</script>
<div id="dcMain"><!-- 当前位置 -->
    <div id="urHere">管理中心<b>></b><strong>价格区间</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3>
        <a href="<?php echo url('Price/add'); ?>" class="actionBtn">添加价格区间</a>价格区间列表
    </h3>

        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
         <th width="30" align="center">编号</th>
         <th align="center">价格区间</th>
         <th align="center">添加时间</th>
         <th align="center">操作</th>
     </tr>
            <?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
         <tr>

      <td align="center"><?php echo $list->id; ?></td>
      <td align="center"><?php echo $list->price; ?></td>
      <td align="center"><?php echo $list->create_time; ?></td>
      <td align="center">
        <a href="<?php echo url('Price/edit'); ?>?id=<?php echo $list->id; ?>">编辑</a> 
        | <a href="javascript::void(0)" onclick="javascript:return del('<?php echo $list->id; ?>')">删除</a>
        </td>
         </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
         </table>
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