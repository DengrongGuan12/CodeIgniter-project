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
</head>
<body class="login">
<section>
    <h1><strong>Geek</strong> Q and A</h1>
    <form method="post" action="http://127.0.0.1/CodeIgniter-project/index.php/pages/sign">
        <input type="text" placeholder="用户名" name="name" required/>
        <input placeholder="密码" type="password" name="password" required/>
        <input placeholder="确认密码" type="password" name="password" required/>
        <?php if($success==0):?>
            <font color="#dc143c">该用户名已经被注册，请重新输入用户名！</font>
        <?php endif;?>
        <button class="blue" type="submit">注册</button>
    </form>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript">
    // Page load delay by Curtis Henson - http://curtishenson.com/articles/quick-tip-delay-page-loading-with-jquery/
    $(function(){
//	$('.login button').click(function(e){
//		// Get the url of the link
//		var toLoad = $(this).attr('href');
//
//		// Do some stuff
//		$(this).addClass("loading");
//
//			// Stop doing stuff
//			// Wait 700ms before loading the url
//			setTimeout(function(){window.location = toLoad}, 10000);
//
//		// Don't let the link do its natural thing
//		e.preventDefault
//	});

        $('input').each(function() {

//       var default_value = this.value;

            $(this).focus(function(){
//               if(this.value == default_value) {
//                       this.value = '';
//               }
            });

            $(this).blur(function(){
//               if(this.value == '') {
//                       this.value = default_value;
//               }
            });

        });
    });
</script>
</body>
</html>