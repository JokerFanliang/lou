<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\phpStudy\PHPTutorial\WWW\blog1\public/../application/index\view\index\index.html";i:1557383192;}*/ ?>
<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="/static/index/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/static/index/css/nprogress.css">
    <link rel="stylesheet" type="text/css" href="/static/index/css/style.css">
    <link rel="stylesheet" type="text/css" href="/static/index/css/font-awesome.min.css">
    <link rel="apple-touch-icon-precomposed" href="/static/index/images/icon.png">
    <script src="/static/index/js/jquery-2.1.4.min.js"></script>
    <!--[if gte IE 9]>
      <script src="/static/index/js/jquery-1.11.1.min.js" type="text/javascript"></script>
      <script src="/static/index/js/html5shiv.min.js" type="text/javascript"></script>
      <script src="/static/index/js/respond.min.js" type="text/javascript"></script>
      <script src="/static/index/js/selectivizr-min.js" type="text/javascript"></script>
    <![endif]-->
    <!--[if lt IE 9]>
      <script>window.location.href='upgrade-browser.html';</script>
    <![endif]-->
</head>
<body class="user-select">
    <header class="header">
  <nav class="navbar navbar-default" id="navbar">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar" aria-expanded="false"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <h1 class="logo hvr-bounce-in"><a href="/" title="博客">博客</a></h1>
      </div>
      <div class="collapse navbar-collapse" id="header-navbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a data-cont="博客" title="博客" href="/">首页</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
    <section class="container">
  <div class="content-wrap">
    <div class="content">
      <?php foreach($lists as $list): ?>
      <article class="excerpt excerpt-1" style="">
      <a class="focus" href="javascript::void(0)" ><img class="thumb" data-original="" src="<?php echo $list->img; ?>"  style="display: inline;"></a>
            <header>
                <h2><a href="/index/index/show?id=<?php echo $list->id; ?>"><?php echo $list->title; ?></a>
                </h2>
            </header>
            <p class="meta">
                <time class="time"><i class="glyphicon glyphicon-time"></i> <?php echo $list->create_time; ?></time>
            </p>
            <p class="note"><?php echo $list->content; ?></p>
        </article>
        <?php endforeach; ?>
        <?php echo $lists->render(); ?>
    </div>
  </div>
  <aside class="sidebar">
    <div class="fixed">
      <div class="widget widget-tabs">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#notice" aria-controls="notice" role="tab" data-toggle="tab" >博主信息</a></li>
        </ul>
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane contact active" id="notice">
            <h2>姓名: <?php echo $user->realname; ?></h2>
                 
            <h2>邮箱: <?php echo $user->email; ?></h2>
          </div>
        </div>
      </div>
    </div>
  </aside>
</section>
    <footer class="footer">
  <div id="gotop"><a class="gotop"></a></div>
</footer>
    <script src="/static/index/js/bootstrap.min.js"></script>
    <script src="/static/index/js/jquery.ias.js"></script>
    <script src="/static/index/js/scripts.js"></script>
</body>
</html>
