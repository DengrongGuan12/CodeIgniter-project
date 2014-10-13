﻿<!DOCTYPE html>
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
            <p><img src="<?php echo "$base/$heads/"."default.gif";?>" alt="" height="40" width="40" /> 欢迎回来,<?php echo $name;?></p>
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
            <span class="button">提问</span>
            <span class="button">管理</span>
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

<section class="alert">
	<div class="green">	
		<p>Hi Lee, you have <a href="#">3 new pages</a> and <a href="#">16 comments</a> to approve, better get going!</p>
		<span class="close">&#10006;</span>
	</div>
</section>
<section class="content">
	<section class="widget">
		<header>
			<span class="icon">&#128200;</span>
			<hgroup>
				<h1>Website Statistics</h1>
				<h2>An insiders view</h2>
			</hgroup>
			<aside>
				<button class="left-btn">&#59229;</button><button class="right-btn">&#59230;</button>
			</aside>
		</header>
		<div class="content cycle">
			<div id="flot-example-2" class="graph-area"></div>
			<div id="flot-example-1" class="graph-area"></div>
		</div>
		</div>
	</section>
	
	<div class="widget-container">
		<section class="widget small">
			<header>
				<span class="icon">&#59168;</span>
				<hgroup>
					<h1>Latest comments</h1>
					<h2>What they're saying</h2>
				</hgroup>
				<aside>
					<span>
						<a href="#">&#9881;</a>
						<ul class="settings-dd">
							<li><label>Option a</label><input type="checkbox" /></li>
							<li><label>Option b</label><input type="checkbox" checked="checked" /></li>
							<li><label>Option c</label><input type="checkbox" /></li>
						</ul>
					</span>
				</aside>
			</header>
			<div class="content no-padding timeline">
				<div class="tl-post comments">
					<span class="icon">&#59168;</span>
					<p>
						<a href="#">John Doe says:</a> Lorem ipsum dolor sit amet, consecteteur adipiscing elit sed diam nonummy.
						<span class="reply"><input type="text" value="Respond to comment..."/></span>
					</p>
				</div>
				<div class="tl-post comments">
					<span class="icon">&#59168;</span>
					<p>
						<a href="#">John Doe says:</a> Lorem ipsum dolor sit amet, consecteteur adipiscing elit sed diam nonummy.
						<span class="reply"><input type="text" value="Respond to comment..."/></span>
					</p>
				</div>
				<span class="show-more"><a	 href="#">More</a></span>
			</div>
		</section>
		
		<section class="widget 	small">
			<header>
				<span class="icon">&#128319;</span>
				<hgroup>
					<h1>Quick Post</h1>
					<h2>Speed things up</h2>
				</hgroup>
				<aside>
					<span>
						<a href="#">&#9881;</a>
						<ul class="settings-dd">
							<li><label>Option a</label><input type="checkbox" /></li>
							<li><label>Option b</label><input type="checkbox" checked="checked" /></li>
							<li><label>Option c</label><input type="checkbox" /></li>
						</ul>
					</span>
				</aside>
			</header>
			<div class="content">
				<div class="field-wrap">
					<input type="text" value="Title"/>
				</div>
				<div class="field-wrap">
					<textarea id="quick_post" rows="5"></textarea>
				</div>
				<button type="submit" class="green">Post</button> <button type="submit" class="">Preview</button>
			</div>
		</section>
	</div>
	
	<div class="widget-container">
		<section class="widget small">
			<header> 
				<span class="icon">&#128318;</span>
				<hgroup>
					<h1>Website figures</h1>
					<h2>Facts &amp; figures</h2>
				</hgroup>
				<aside>
					<span>
						<a href="#">&#9881;</a>
						<ul class="settings-dd">
							<li><label>Option a</label><input type="checkbox" /></li>
							<li><label>Option b</label><input type="checkbox" checked="checked" /></li>
							<li><label>Option c</label><input type="checkbox" /></li>
						</ul>
					</span>
				</aside>
			</header>
			<div class="content">
				<section class="stats-wrapper">
					<div class="stats">
						<p><span>64</span></p>
						<p>Pages</p>
					</div>
					<div class="stats">
						<p><span>362</span></p>
						<p>Comments</p>
					</div>
				</section>
				<section class="stats-wrapper">
					<div class="stats">
						<p><span>7</span></p>
						<p>Users</p>
					</div>
					<div class="stats">
						<p><span>927</span></p>
						<p>Assets</p>
					</div>
				</section>
			</div>
		</section>
		
		<section class="widget small">
			<header> 
				<span class="icon">&#128363;</span>
				<hgroup>
					<h1>Timeline</h1>
					<h2>Insiders news</h2>
				</hgroup>
				<aside>
					<span>
						<a href="#">&#9881;</a>
						<ul class="settings-dd">
							<li><label>Option a</label><input type="checkbox" /></li>
							<li><label>Option b</label><input type="checkbox" checked="checked" /></li>
							<li><label>Option c</label><input type="checkbox" /></li>
						</ul>
					</span>
				</aside>
			</header>
			<div class="content no-padding timeline">
				<div class="tl-post">
					<span class="icon">&#128206;</span>
					<p><a href="#">John Doe</a> attached an image to a blog post.</p>
				</div>
				<div class="tl-post">
					<span class="icon">&#59172;</span>
					<p><a href="#">John Doe</a> added his location.</p>
				</div>
				<div class="tl-post">
					<span class="icon">&#59170;</span>
					<p><a href="#">John Doe</a> edited his profile.</p>
				</div>
				<div class="tl-post">
					<span class="icon">&#9993;</span>
					<p><a href="#">John Doe</a> has sent you  private message.</p>
				</div>
				<div class="pie graph-area"></div>
			</div>
		</section>
		
	</div>
	<div class="widget-container">
		<div style="height:80px">
		Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a> - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a>
		</div>
	</div>
</section>
<!--<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>-->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>-->
<script src="<?php echo "$base/$js/"."jquery.min.js";?>"></script>
<script src="<?php echo "$base/$js/"."jquery.wysiwyg.js";?>"></script>
<script src="<?php echo "$base/$js/"."custom.js";?>"</script>
<script src="<?php echo "$base/$js/"."cycle.js";?>"></script>
<script src="<?php echo "$base/$js/"."jquery.checkbox.min.js";?>"></script>
<script src="<?php echo "$base/$js/"."flot.js";?>"></script>
<script src="<?php echo "$base/$js/"."flot.resize.js";?>"></script>
<script src="<?php echo "$base/$js/"."flot-time.js";?>"></script>
<script src="<?php echo "$base/$js/"."flot-pie.js";?>"></script>
<script src="<?php echo "$base/$js/"."flot-graphs.js";?>"></script>
<script src="<?php echo "$base/$js/"."cycle.js";?>"></script>
<script src="<?php echo "$base/$js/"."jquery.tablesorter.min.js";?>"></script>
<script type="text/javascript">
// Feature slider for graphs
$('.cycle').cycle({
	fx: "scrollHorz",
	timeout: 0,
    slideResize: 0,
    prev:    '.left-btn', 
    next:    '.right-btn'
});
</script>
</body>
</html>