<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>入门级模板</title>
    <meta name="description" content="Creating Modal Window with Bootstrap">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo "$base/$css/"."common.css";?>" rel="stylesheet">
    <link href="<?php echo "$base/$css/"."aw-font.css";?>" rel="stylesheet">
    <link href="<?php echo "$base/$css/"."style.css";?>" rel="stylesheet">
    <link href="<?php echo "$base/$css/"."link.css";?>" rel="stylesheet">
    <link href="<?php echo "$base/$css/"."font-awesome.css";?>" rel="stylesheet">
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo "$base/$js/"."jqScroll.js";?>"></script>
    <script type="text/javascript" src="<?php echo "$base/$js/"."app.js";?>"></script>
    <script type="text/javascript" src="<?php echo "$base/$js/"."aw-template.js";?>"></script>
    <script type="text/javascript" src="<?php echo "$base/$js/"."common.js";?>"></script>
    <script type="text/javascript" src="<?php echo "$base/$js/"."functions.js";?>"></script>
    <script type="text/javascript" src="<?php echo "$base/$js/"."jquery.form.js";?>"></script>
    <script type="text/javascript" src="<?php echo "$base/$js/"."plug-in_module.js";?>"></script>
    <script type="text/javascript" src="<?php echo "$base/$js/"."compatibility.js";?>"></script>



    <style type="text/css">
        /*解决IE6闪动问题 start*/
        *html{background-image:url(about:blank);background-attachment:fixed;}
        /* toTop */
        .toTop{width:50px;height:50px;background:#CCC;border:0px solid #999;padding:0px;cursor:pointer;position:fixed;right:40px;bottom:140px;}
        *html .toTop{position:absolute;bottom:auto;top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0)));margin-bottom:80px;}

    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            /*返回顶部*/
            $('#roll_top').hide();

            $(window).scroll(function () {
                if ($(window).scrollTop() > 20) {
                    $('#roll_top').fadeIn(400);//当滑动栏向下滑动时，按钮渐现的时间
                } else {
                    $('#roll_top').fadeOut(0);//当页面回到顶部第一屏时，按钮渐隐的时间
                }
            });
            $('#roll_top').click(function () {
                $('html,body').animate({
                    scrollTop : '0px'
                }, 300);//返回顶部所用的时间 返回顶部也可调用goto()函数
            });

            function goto(selector){
                $.scrollTo ( selector , 1000);
            }
    </script>
</head>
<body>
<div class="aw-top-menu-wrap">
    <div class="aw-wecenter aw-top-menu clearfix">
        <div class="container">
            <!-- logo -->
            <div class="aw-logo hidden-xs">
                <a href="http://127.0.0.1/CodeIgniter-project/pages/views">Geek Q and A</a>
            </div>
            <!-- end logo -->
            <!-- 搜索框 -->
            <div class="aw-search-box  hidden-xs hidden-sm">
                <form class="navbar-search pull-right" action="http://127.0.0.1/CodeIgniter-project/index.php/pages/search" id="global_search_form" method="post">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="搜索问题、话题或人" autocomplete="off" name="q" id="aw-search-query" class="search-query" />
                        <span class="input-group-addon" title="搜索" id="global_search_btns" onClick="$('#global_search_form').submit();"><i class="fa fa-search"></i></span>
                        <div class="clearfix"></div>
                        <div class="aw-dropdown">
                            <i class="i-dropdown-triangle"></i>
                            <p class="title">输入关键字进行搜索</p>
                            <ul class="aw-dropdown-list"></ul>
                            <p class="search"><span>搜索:</span><a onClick="$('#global_search_form').submit();"></a></p>
                            <p><a href="" onClick="$('#header_publish').click();" class="pull-right btn btn-normal btn-success publish">发起问题</a></p>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end 搜索框 -->
            <!-- 导航 -->
            <div class="aw-top-nav navbar">
                <div class="navbar-header">
                    <button  class="navbar-toggle pull-left">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <nav role="navigation" class="collapse navbar-collapse bs-navbar-collapse">
                    <ul class="nav navbar-nav">

                        <li><a href="http://127.0.0.1/WebCenter/?/explore/" class="">问题</a></li>

                        <!-- <li><a href="http://127.0.0.1/WebCenter/?/question/square/" class="">问题</a></li>

                        <li><a href="http://127.0.0.1/WebCenter/?/article/square/" class="">文章</a></li> -->

                        <li><a href="http://127.0.0.1/CodeIgniter-project/pages/tag" >标签</a></li>

                        <li><a href="http://127.0.0.1/CodeIgniter-project/pages/users" class="active">用户</a></li>

                    </ul>
                </nav>
            </div>
            <!-- end 导航 -->
            <!-- 用户栏 -->
            <div class="aw-user-nav">
                <!-- 登陆&注册栏 -->
						<span>
							<a href="http://127.0.0.1/CodeIgniter-project/pages/register">注册</a>
							<a href="http://127.0.0.1/CodeIgniter-project/pages/login">登录</a>
						</span>
                <!-- end 登陆&注册栏 -->
            </div>
            <!-- end 用户栏 -->
            <!-- 发起 -->
            <!-- end 发起 -->
        </div>
    </div>
</div>