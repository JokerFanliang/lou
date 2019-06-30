<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\phpStudy\PHPTutorial\WWW\blog1\public/../application/index\view\index\show.html";i:1557385720;}*/ ?>
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
<body class="user-select single">
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
      <header class="article-header">
        <h1 class="article-title"><?php echo $list->title; ?></h1>
      </header>
      <article class="article-content">
        <p><?php echo $list->content; ?></p>
      </article>

      <div class="title" id="comment">
        <h3>评论</h3>
      </div>
      <div id="respond">
            <form id="comment-form" name="comment-form" action="/index/index/comment" method="POST">
                <div class="comment">
                    <input name="username" id="" class="form-control" size="22" placeholder="您的昵称（必填）" maxlength="15" autocomplete="off" tabindex="1" type="text">
                    <input name="email" id="" class="form-control" size="22" placeholder="您的网址或邮箱（非必填）" maxlength="58" autocomplete="off" tabindex="2" type="text">
                    <input type="hidden" name="id" value="<?php echo $list->id; ?>">
                    <div class="comment-box">
                        <textarea placeholder="您的评论或留言（必填）" name="content" id="comment-textarea" cols="100%" rows="3" tabindex="3"></textarea>
                        <div class="comment-ctrl">
                            <div class="comment-prompt" style="display: none;"> <i class="fa fa-spin fa-circle-o-notch"></i> <span class="comment-prompt-text">评论正在提交中...请稍后</span> </div>
                            <div class="comment-success" style="display: none;"> <i class="fa fa-check"></i> <span class="comment-prompt-text">评论提交成功...</span> </div>
                            <button type="submit" name="comment-submit" id="comment-submit" tabindex="4">评论</button>
                        </div>
                    </div>
                </div>
            </form>
            
        </div>
      <div id="postcomments">
        <ol id="comment_list" class="commentlist">    

        <?php foreach($comments as $comment): ?>
        <li class="comment-content">
          <div class="comment-main">
            <p><?php echo $comment->username; ?><span class="time"><?php echo $comment->create_time; ?></span><br><?php echo $comment->content; if($comment->replay): ?>
                <br><br>博主回复：<?php echo $comment->replay; endif; ?>
              <br>
            </p>
          </div>
        </li>
        <?php endforeach; ?>
      </ol>
      </div>
    </div>
  </div>
  <aside class="sidebar">
    <div class="fixed">
      <div class="widget widget-tabs">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#notice" aria-controls="notice" role="tab" data-toggle="tab" draggable="false">博主信息</a></li>
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
