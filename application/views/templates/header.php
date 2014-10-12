<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>入门级模板</title>
    <meta name="description" content="Creating Modal Window with Bootstrap">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo "$base/$css/"."signin.css";?>" rel="stylesheet">
    <link href="<?php echo "$base/$css/"."starter-template.css";?>" rel="stylesheet">
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo "$base/$js/"."jqScroll.js";?>"></script>



    <style type="text/css">
        /*解决IE6闪动问题 start*/
        *html{background-image:url(about:blank);background-attachment:fixed;}
        /* toTop */
        .toTop{width:50px;height:50px;background:#CCC;border:0px solid #999;padding:0px;cursor:pointer;position:fixed;right:40px;bottom:140px;}
        *html .toTop{position:absolute;bottom:auto;top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0)));margin-bottom:80px;}

    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#no_login_name').hide();
            $('#no_login_password').hide();
            $('#too_long_name').hide();
            $('#too_long_password').hide();
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
//            $('#login_btn').click(function(event){
//                var login_name=$('#login_name').val();
//                var right_name1=true;
//                var right_name2=true;
//                var right_passwd1=true;
//                var right_passwd2=true;
//                var login_passwd=$('#login_passwd').val();
//                if(login_name.length<1){
//                    $('#no_login_name').fadeIn();
//                    right_name1=false;
//
//                }else{
//                    $('#no_login_name').hide();
//                    right_name1=true;
//                }
//                if(login_passwd.length<1){
//                    $('#no_login_password').show();
//                    right_passwd1=false;
//                }else{
//                    $('#no_login_password').hide();
//                    right_passwd1=true;
//                }
//                if(login_name.length>128){
//                    $('#too_long_name').show();
//                    right_name2=false;
//                }else{
//                    $('#too_long_name').hide();
//                    right_name2=true;
//                }
//                if(login_passwd.length>128){
//                    $('#too_long_password').show();
//                    right_passwd2=false;
//                }else{
//                    $('#too_long_password').hide();
//                    right_passwd2=true;
//                }
//                event.preventDefault();
//                if(right_name1&&right_name2&&right_passwd1&&right_passwd2){
//                    var url="http://CodeIgniter-project/index.php/pages/login";
//                    var data='name='+login_name+'&password='+login_passwd;
//                    var ajax = false;
//                    //开始初始化XMLHttpRequest对象
//                    if(window.XMLHttpRequest)
//                      {   //Mozilla 浏览器
//                         ajax = new XMLHttpRequest();
//                        if (ajax.overrideMimeType)
//                            {   //设置MiME类别
//                             ajax.overrideMimeType("text/xml");
//                            }
//                        }
//                    else if (window.ActiveXObject)
//                        {   // IE浏览器
//                        try
//                         {
//                            ajax = new ActiveXObject("Msxml2.XMLHTTP");
//                          }
//                        catch (e)
//                        {
//                          try
//                            {
//                                ajax = new ActiveXObject("Microsoft.XMLHTTP");
//                                }
//                             catch (e) {}
//                            }
//                        }
//                    if (!ajax)
//                        {   // 异常，创建对象实例失败
//                        window.alert("不能创建XMLHttpRequest对象实例.");
//                        return false;
//                        }
//
//                    //通过Post方式打开连接
//                    ajax.open("POST", url, true);
//                    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
//                    ajax.send(data);
//                    ajax.onreadystatechange = function()
//                    {
//                        //如果执行状态成功，那么就把返回信息写到指定的层里
//                        if (ajax.readyState == 4 && ajax.status == 200)
//                            {
//                            $('#login_error').innerHTML = ajax.responseText;
//                            }
//                        }
//                }
//            });
//        });
        function goto(selector){
            $.scrollTo ( selector , 1000);
        }
        function checkPasswords() {
            var pass1 = document.getElementById("password1");
            var pass2 = document.getElementById("password2");

            if (pass1.value != pass2.value){
                pass1.setCustomValidity("两次输入的密码不匹配");
            }else{
                pass1.setCustomValidity("");
            }

        }
    </script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Geek Q and A</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="搜索问题">
                </div>
                <button type="submit" class="btn btn-default">提交</button>
            </form>
            <?php if($status!='OK'):?>
                <div class="navbar-form navbar-right">
                    <button class="btn btn-success" data-toggle="modal" data-target="#login">
                        登录
                    </button>
                    <button class="btn btn-success" data-toggle="modal" data-target="#sign">
                        注册
                    </button>
                </div>
            <?php else:?>
                <div class="navbar-right" style="margin-top: 5px">
                    <a href="http://127.0.0.1/CodeIgniter-project/index.php/pages/self_info" style="text-decoration: none;"><img src="<?php echo "$base/$heads/"."default.gif";?>" style="width: 40px;height: 40px" class="img-rounded">
                        <font color="#f0ffff"><?php echo $name;?></font>

                    </a>

                    <div class="aw-user-nav-dropdown-list pull-right">

                        <ul>

                        </ul>

                    </div>

                </div>

            <?php endif;?>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    <br />
    <!--    <img src="--><?php //echo "$base/$images/"."logo.png";?><!--" class="img-responsive img-rounded" alt="Responsive image">-->