<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"D:\phpStudy\PHPTutorial\WWW\lou/application/admin\view\build\add.html";i:1561878607;s:71:"D:\phpStudy\PHPTutorial\WWW\lou\application\admin\view\public\head.html";i:1560266739;s:71:"D:\phpStudy\PHPTutorial\WWW\lou\application\admin\view\public\left.html";i:1561265226;s:71:"D:\phpStudy\PHPTutorial\WWW\lou\application\admin\view\public\foot.html";i:1534821326;}*/ ?>
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
    <div id="urHere">管理中心<b>></b><strong>楼盘</strong> </div>   
    <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="javascript:history.go(-1);" class="actionBtn">返回列表</a>添加楼盘</h3>
    <form action=""  method="post" enctype="multipart/form-data">
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
            <tr>
                <td width="100" align="right">所属分类</td>
                <td>
                    <select name="types_id">
                        <option value="0">新房</option>
                        <option value="1">商业地产</option>
                    </select>
                </td>
                <td width="100" align="right">楼盘名</td>
                <td>
                    <input type="text" required="required" name="name" size="40" class="inpMain" value="" />
                </td>
            </tr>
            <tr>
                <td width="100" align="right">楼盘类型</td>
                <td>
                    <select name="type_id">
                        <?php foreach($types as $type): ?>
                        <option value="<?php echo $type->id; ?>"><?php echo $type->name; ?></option>
                        <?php endforeach; ?>
                        
                    </select>
                </td>
                <td width="100" align="right">楼盘户型</td>
                <td>
                    <select name="housetype_id">
                        <?php foreach($housetypes as $housetype): ?>
                        <option value="<?php echo $housetype->id; ?>"><?php echo $housetype->name; ?></option>
                        <?php endforeach; ?>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td width="100" align="right">楼盘位置</td>
                <td>
                    <select name="position_id">
                        <?php foreach($positions as $position): ?>
                        <option value="<?php echo $position->id; ?>"><?php echo $position->position; ?></option>
                        <?php endforeach; ?>
                        
                    </select>
                </td>
                <td width="100" align="right">楼盘价格</td>
                <td>
                    <select name="price_id">
                        <?php foreach($prices as $price): ?>
                        <option value="<?php echo $price->id; ?>"><?php echo $price->price; ?></option>
                        <?php endforeach; ?>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td width="100" align="right">开盘时间</td>
                <td>
                    <input type="text" required="required" name="start_time" size="40" class="inpMain" value="" />
                </td>
                <td width="100" align="right">起价</td>
                <td>
                    <input type="text" required="required" name="start_price" size="40" class="inpMain" value="" />
                </td>
            </tr>
            <tr>
                <td width="100" align="right">联系电话</td>
                <td>
                    <input type="text" required="required" name="telephone" size="40" class="inpMain" value="" />
                </td>
                <td width="100" align="right">地址</td>
                <td>
                    <input type="text" required="required" name="address" size="40" class="inpMain" value="" />
                </td>
            </tr>
            <tr>
                <td width="100" align="right">开盘描述</td>
                <td>
                    <input type="text" required="required" name="desc" size="40" class="inpMain" value="" />
                </td>
                <td width="100" align="right">交房时间</td>
                <td>
                    <input type="text" required="required" name="give_time" size="40" class="inpMain" value="" />
                </td>
            </tr>
            <tr>
                <td width="100" align="right">装修状况</td>
                <td>
                    <input type="text" required="required" name="renova" size="40" class="inpMain" value="" />
                </td>
                <td width="100" align="right">备案名</td>
                <td>
                    <input type="text" required="required" name="beian" size="40" class="inpMain" value="" />
                </td>
            </tr>
            <tr>
                <td width="100" align="right">预售许可证</td>
                <td>
                    <input type="text" required="required" name="permit" class="inpMain"  />
                </td>
                <td width="100" align="right">产权年限</td>
                <td>
                    <input type="text" required="required" name="year" size="40" class="inpMain" value="" />
                </td>
            </tr>
            <tr>
                <td width="100" align="right">特色</td>
                <td>
                    <input type="text" required="required" name="item" size="40" class="inpMain" value="" />
                </td>
                <td width="100" align="right">物业公司</td>
                <td>
                    <input type="text" required="required" name="wy_company" size="40" class="inpMain" value="" />
                </td>
            </tr>
            <tr>
                <td width="100" align="right">物业类别</td>
                <td>
                    <input type="text" required="required" name="wy_type" size="40" class="inpMain" value="" />
                </td>
                <td width="100" align="right">物业费</td>
                <td>
                    <input type="text" required="required" name="wx_money" size="40" class="inpMain" value="" />
                </td>
            </tr>
            <tr>
                <td width="100" align="right">开发商</td>
                <td>
                    <input type="text" required="required" name="create_company" size="40" class="inpMain" value="" />
                </td>
                <td width="100" align="right">车位</td>
                <td>
                    <input type="text" required="required" name="car_num" size="40" class="inpMain" value="" />
                </td>
            </tr>
            <tr>
                <td width="100" align="right">建筑面积</td>
                <td>
                    <input type="text" required="required" name="build_s" size="40" class="inpMain" value="" />
                </td>
                <td width="100" align="right">占地面积</td>
                <td>
                    <input type="text" required="required" name="space_s" size="40" class="inpMain" value="" />
                </td>
            </tr>
            <tr>
                <td width="100" align="right">规划户数</td>
                <td>
                    <input type="text" required="required" name="number" size="40" class="inpMain" value="" />
                </td>
                <td width="100" align="right">容积率</td>
                <td>
                    <input type="text" required="required" name="rjl" size="40" class="inpMain" value="" />
                </td>
            </tr>
            <tr>
                <td width="100" align="right">绿化率</td>
                <td>
                    <input type="text" required="required" name="lhl" size="40" class="inpMain" value="" />
                </td>
                <td width="100" align="right">容积率</td>
                <td>
                    <input type="text" required="required" name="rjl" size="40" class="inpMain" value="" />
                </td>
            </tr>
            <tr>
                <td width="100" align="right">项目简介</td>
                <td>
                    <textarea name="jianjie" cols="80" rows="10"></textarea>
                </td>
                <td width="100" align="right">周边配套</td>
                <td>
                    <textarea name="zbpt" cols="80" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td width="100" align="right">小区配套</td>
                <td>
                    <textarea name="xqpt" cols="80" rows="10"></textarea>
                </td>
                <td width="100" align="right">交通状况</td>
                <td>
                    <textarea name="trans" cols="80" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td width="100" align="right">审核</td>
                <td>
                    <select name="check">
                        <option value="0">待审核</option>
                        <option value="1">通过</option>
                        <option value="2">未通过</option>
                    </select>
                </td>
                <td width="100" align="right">展示图</td>
                <td>
                    <input type="file" required="required" name="img" />
                </td>
            </tr>
            <tr>
                <td width="100" align="right">是否热门</td>
                <td>
                    <select name="is_hot">
                        <option value="0">否</option>
                        <option value="1">是</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" class="btn" value="添加" />
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