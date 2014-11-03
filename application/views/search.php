<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <title>Geek Q and A</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="<?php echo "$base/$css/"."jquery-ui.css";?>" media="all" />
    <link rel="stylesheet" href="<?php echo "$base/$css/"."style.css";?>" media="all" />
    <link rel="stylesheet" href="<?php echo "$base/$css/"."ui.css";?>" media="all" />



    <!--[if IE]><link rel="stylesheet" href="<?php echo "$base/$css/"."ie.css";?>" media="all" /><![endif]-->
    <!--[if lt IE 9]><link rel="stylesheet" href="<?php echo "$base/$css/"."lt-ie-9.css";?>" media="all" /><![endif]-->
</head>
<body>
<div class="testing">
    <header class="main">
        <h1><strong>Geek</strong> Q and A</h1>
        <div>
            <form method="post" action="http://127.0.0.1/CodeIgniter-project/index.php/pages/search/">
                <input type="text" placeholder="输入 回车搜索..." name="search" autofocus x-webkit-speech required>
            </form>

        </div>
    </header>
    <section class="user">
        <?php if($status!='OK'):?>
            <div class="profile-img">
                <p>您尚未登录</p>
            </div>
        <?php else:?>
            <div class="profile-img">
                <p><img src="<?php
                    $file = "http://127.0.0.1/CodeIgniter-project/application/images/heads/".$name.".gif";
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
        <li class="section"><a href="http://127.0.0.1/CodeIgniter-project/"><span class="icon">&#128711;</span>Geek Q and A</a></li>
        <li>
            <a href="http://127.0.0.1/CodeIgniter-project/index.php/question/no_answer_questions"><span class="icon">&#128196;</span> 等待回答</a>
            <ul class="submenu">
                <li><a href="http://127.0.0.1/CodeIgniter-project/index.php/question/no_answer_questions">尚未回答</a></li>
                <li><a href="http://127.0.0.1/CodeIgniter-project/index.php/question/no_end_questions">尚未结帖</a></li>
            </ul>
        </li>
        <li>
            <a href="http://127.0.0.1/CodeIgniter-project/index.php/question/hot_questions"><span class="icon">&#127748;</span> 热门问答<span class="pip">7</span></a>
            <ul class="submenu">
                <li><a href="http://127.0.0.1/CodeIgniter-project/index.php/question/more_praise_in_week">周最热</a></li>
                <li><a href="http://127.0.0.1/CodeIgniter-project/index.php/question/more_praise_in_month">月最热</a></li>
            </ul>
        </li>
        <li>
            <a href="http://127.0.0.1/CodeIgniter-project/index.php/tag/all_tags"><span class="icon">&#59160;</span> 标签<span class="pip">12</span></a>
            <ul class="submenu">
                <li><a href="http://127.0.0.1/CodeIgniter-project/index.php/tag/hot_tags">热门</a></li>
                <li><a href="http://127.0.0.1/CodeIgniter-project/index.php/tag/all_tags">所有标签</a></li>
                <!--				<li><a href="comments-timeline.html">View comments</a></li>-->
            </ul>
        </li>
        <li><a href="http://127.0.0.1/CodeIgniter-project/index.php/user/all_users"><span class="icon">&#128101;</span> 用户 <span class="pip">3</span></a>
            <ul class="submenu">
                <li><a href="http://127.0.0.1/CodeIgniter-project/index.php/user/new_users">新用户</a></li>
                <li><a href="http://127.0.0.1/CodeIgniter-project/index.php/user/users_of_more_credit">积分最多</a></li>
                <!--				<li><a href="comments-timeline.html">View comments</a></li>-->
            </ul>

        </li>
    </ul>
</nav>
<section class="content">
    <div class="widget-container">
        <section class="widget">
            <header>
                <span class="icon">&#59243;</span>
                <hgroup>
                    <h1>搜索结果</h1>
                </hgroup>
            </header>
            <div class="content">
                <div id="tabs">
                    <ul>
                        <li><a href="#tabs-1">用户</a></li>
                        <li><a href="#tabs-2">问答</a></li>
                        <li><a href="#tabs-3">标签</a></li>
                    </ul>
                    <div id="tabs-1" style="height:230px;overflow: auto;">
                        <?php if(count($user_ids)==0):?>
                            <p>未找到匹配的用户！</p>
                        <?php else:?>
                            <div class="content no-padding timeline">
                                <?php foreach($user_ids as $id):?>
                                    <div class="tl-post">
                                        <span class="icon">&#128100;</span>
                                        <p>
                                            <img src="<?php
                                            $file = "http://127.0.0.1/CodeIgniter-project/application/images/heads/".$names[$id].".gif";
                                            $fileExists = @file_get_contents($file,null,null,-1,1) ? true : false ;
                                            if($fileExists){
                                                echo "$base/$heads/"."$names[$id]".".gif";

                                            }else{
                                                echo "$base/$heads/"."default.gif";

                                            }

                                            ?>" alt="" height="40" width="40" /> <?php echo $names[$id];?>
                                            积分：<?php echo($credits[$id]);?>
                                            注册时间:<?php echo($dates[$id]);?>
                                            <!--                        <span class="reply"><input type="text" value="Respond to comment..."/></span>-->
                                        </p>
                                    </div>
                                <?php endforeach;?>


                            </div>
                        <?php endif;?>

                    </div>
                    <div id="tabs-2" style="height:230px;overflow: auto;">
                        <?php if(count($qa_ids)==0):?>
                            <p>未找到匹配的问题或答案！</p>
                        <?php else:?>
                            <div class="content no-padding timeline">
                                <?php foreach ($qa_ids as $id): ?>
                                    <div class="tl-post comments">
                                        <span class="icon">&#59168;</span>
                                        <p>
                                            <a title="进入问题" href=<?php echo ("http://127.0.0.1/CodeIgniter-project/index.php/question/single_question/".$qids[$id]);?>><?php echo($contents[$id]);?></a>

                                            <br />
                                            创建于 <?php echo($qa_dates[$id]);?>
                                            <!--                        <span class="reply"><input type="text" value="Respond to comment..."/></span>-->
                                        </p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif;?>

                    </div>
                    <div id="tabs-3" style="height:230px;overflow: auto;">
                        <?php if(count($tags)==0):?>
                            <p>未找到匹配的标签！</p>
                        <?php else:?>
                            <p>
                                <?php foreach(array_keys($tags) as $id):?>
                                    <a class="tag button" title="进入标签" href="<?php echo("http://127.0.0.1/CodeIgniter-project/index.php/tag/all_questions_of_tag/".$id);?>">
                                        <?php echo($tags[$id]);?>
                                        <span class="pip tag-pip"><?php echo($q_count_of_tag[$id]);?></span>
                                    </a>
                                <?php endforeach;?>
                            </p>
                        <?php endif;?>

                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<script src="<?php echo "$base/$js/"."jquery.min.js";?>"></script>
<script src="<?php echo "$base/$js/"."jquery.wysiwyg.js";?>"></script>
<script src="<?php echo "$base/$js/"."custom.js";?>"</script>
<script src="<?php echo "$base/$js/"."jquery.checkbox.min.js";?>"></script>

<script src="<?php echo "$base/$js/"."jquery.tablesorter.min.js";?>"></script>
<script src="<?php echo "$base/$js/"."jquery-ui.js";?>"></script>

<script type="text/javascript">
    $( "#tabs" ).tabs();


</script>
</body>
</html>