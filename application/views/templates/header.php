<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <title>Geek Q and A</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="<?php echo "$base/$css/"."style.css";?>" media="all" />

    <!--[if IE]><link rel="stylesheet" href="<?php echo "$base/$css/"."ie.css";?>" media="all" /><![endif]-->
    <!--[if lt IE 9]><link rel="stylesheet" href="<?php echo "$base/$css/"."lt-ie-9.css";?>" media="all" /><![endif]-->
</head>
<body>
<div class="testing">
    <header class="main">
        <h1><strong>Geek</strong> Q and A</h1>
    </header>
    <section class="user">
        <?php if($status!='OK'):?>
            <div class="profile-img">
                <p>您尚未登录</p>
            </div>
        <?php else:?>
            <div class="profile-img">
                <p><img src="<?php
                    $file = "http://127.0.0.1/CodeIgniter-project/application/images/heads/gdr.gif";
                    $fileExists = @file_get_contents($file,null,null,-1,1) ? true : false ;
                    if($fileExists){
                        echo "$base/$heads/"."$name".".gif";

                    }else{
                        echo "$base/$heads/"."default.gif";

                    }

                    ?>" alt="" height="40" width="40" /> 欢迎回来,<?php echo $name;?></p>
            </div>
        <?php endif;?>

        <div class="buttons">
            <?php if($status!='OK'):?>
                <span class="button blue"><a href="http://127.0.0.1/CodeIgniter-project/index.php/pages/loginpage">登录</a></span>
                <span class="button blue"><a href="http://127.0.0.1/CodeIgniter-project/index.php/pages/registerpage">注册</a></span>
            <?php else:?>
                <span class="button dropdown">
			<a href="#">留言板 <span class="pip">4</span></a>
			<ul class="notice">
                <li>
                    <hgroup>
                        <h1>You have a new task</h1>
                        <h2>Report web statistics week by week.</h2>
                    </hgroup>
                    <p><span>14:24</span></p>
                </li>
                <li>
                    <hgroup>
                        <h1>New comment</h1>
                        <h2>Comment on <em>About page</em> by Darren.</h2>
                    </hgroup>
                    <p><span>11:04</span></p>
                </li>
                <li>
                    <hgroup>
                        <h1>Broken link</h1>
                        <h2>We've spotted a broken link on the <em>Blog page</em>.</h2>
                    </hgroup>
                    <p><span>10:46</span></p>
                </li>
                <li>
                    <hgroup>
                        <h1>User report</h1>
                        <h2><em>Lee Grant</em> has been promoted to admin.</h2>
                    </hgroup>
                    <p><span>09:57</span></p>
                </li>
            </ul>
		</span>
                <span class="button"><a href="http://127.0.0.1/CodeIgniter-project/index.php/ask_question/ask">提问</a></span>
                <span class="button"><a href="http://127.0.0.1/CodeIgniter-project/index.php/pages/myinfo">管理</a></span>
                <span class="button blue"><a href="http://127.0.0.1/CodeIgniter-project/index.php/pages/logout">退出</a></span>

            <?php endif;?>

        </div>
    </section>
</div>
<nav>
    <ul>
        <li class="section"><a href="index.html"><span class="icon">&#128711;</span>Geek Q and A</a></li>
        <li>
            <a href="pages-table.html"><span class="icon">&#128196;</span> 等待回答</a>
            <ul class="submenu">
                <li><a href="page-new.html">最新</a></li>
                <li><a href="page-timeline.html">热门</a></li>
            </ul>
        </li>
        <li>
            <a href="files.html"><span class="icon">&#127748;</span> 热门问答<span class="pip">7</span></a>
            <ul class="submenu">
                <li><a href="files-upload.html">周最热</a></li>
                <li><a href="files.html">月最热</a></li>
            </ul>
        </li>
        <li>
            <a href="blog-timeline.html"><span class="icon">&#59160;</span> 标签<span class="pip">12</span></a>
            <ul class="submenu">
                <li><a href="blog-new.html">热门</a></li>
                <li><a href="blog-table.html">所有标签</a></li>
                <!--				<li><a href="comments-timeline.html">View comments</a></li>-->
            </ul>
        </li>
        <li><a href="users.html"><span class="icon">&#128101;</span> 用户 <span class="pip">3</span></a>
            <ul class="submenu">
                <li><a href="blog-new.html">所有用户</a></li>
                <li><a href="blog-table.html">新用户</a></li>
                <li><a href="blog-table.html">积分最多</a></li>
                <!--				<li><a href="comments-timeline.html">View comments</a></li>-->
            </ul>

        </li>
        <li>
            <a href="ui-elements.html"><span class="icon">&#9881;</span> UI Elements</a>
            <ul class="submenu">
                <li><a href="icon-fonts.html">Icon fonts</a></li>
            </ul>
        </li>
    </ul>
</nav>