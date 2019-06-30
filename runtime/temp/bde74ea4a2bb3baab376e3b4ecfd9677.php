<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:83:"D:\phpStudy\PHPTutorial\WWW\case6\public/../application/admin\view\grade\index.html";i:1555918299;s:73:"D:\phpStudy\PHPTutorial\WWW\case6\application\admin\view\public\head.html";i:1534821245;s:73:"D:\phpStudy\PHPTutorial\WWW\case6\application\admin\view\public\left.html";i:1555917899;s:73:"D:\phpStudy\PHPTutorial\WWW\case6\application\admin\view\public\foot.html";i:1534821326;}*/ ?>
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
        </ul>

    </div>
</div>
<script type="text/javascript">

    function del(id) {
        layer.confirm('确定要删除吗？',  function(){
            window.location.href="/admin/Grade/del?id="+id;
        });
    }
</script>
<div id="dcMain"><!-- 当前位置 -->
    <div id="urHere">管理中心<b>></b><strong>成绩管理</strong> </div>   <div id="manager" class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3>
        <a href="<?php echo url('Grade/add'); ?>" class="actionBtn">添加成绩</a>成绩列表
    </h3>
    <div class="filter">
        <form action="" method="get">
            <select name="subject_id">
                <option value="">按课程检索</option>
                <?php foreach($subjects as $subject): ?>
                <option value="<?php echo $subject->id; ?>"><?php echo $subject->name; ?></option>
                <?php endforeach; ?>
            </select>
            <select name="student_id">
                <option value="">按学生检索</option>
                <?php foreach($students as $student): ?>
                <option value="<?php echo $student->id; ?>"><?php echo $student->realname; ?></option>
                <?php endforeach; ?>
            </select>
            <input name="submit" class="btnGray" type="submit" value="筛选" />
        </form>
    </div>
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
         <th width="30" align="center">编号</th>
         <th align="center">课程</th>
         <th align="center">姓名</th>
         <th align="center">成绩</th>
         <th align="center">学院</th>
         <th align="center">班级</th>
         <th align="center">操作</th>
     </tr>
            <?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?>
         <tr>
        <?php 
            $sub=isset($list->subject->name) ? $list->subject->name : "";
            $realname=isset($list->student->realname) ? $list->student->realname : "";
            $college=isset($list->student->college) ? $list->student->college : "";
            $class=isset($list->student->class) ? $list->student->class : "";

        ?>
      <td align="center"><?php echo $list->id; ?></td>
      <td align="center"><?php echo $sub; ?></td>
      <td align="center"><?php echo $realname; ?></td>
      <td align="center"><?php echo $list->grade; ?></td>
      <td align="center"><?php echo $college; ?></td>
      <td align="center"><?php echo $class; ?></td>
      <td align="center">
        <a href="<?php echo url('Grade/edit'); ?>?id=<?php echo $list->id; ?>">编辑</a> 
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