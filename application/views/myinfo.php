<section class="alert">
    <div class="green">
        <p>你好，gdr <a href="#">你发布的问题</a> 有新回答啦！</p>
        <span class="close">&#10006;</span>
    </div>
</section>
<section class="content">
    <div class="widget-container">
        <section class="widget small">
            <header>
                <span class="icon">&#59170;</span>
                <hgroup>
                    <h1>个人信息设置</h1>
                </hgroup>
            </header>
            <div class="content">
                <div class="field-wrap">
                    设置新头像<br /><br />
                    <?php echo form_open_multipart('pages/do_upload');?>

                    <input type="file" name="userfile" size="20" />
                    <br /><br />
                    支持JPG、JPEG、GIF和PNG文件，最大2M。<br /><br />
                    <button class="green" type="submit">上传头像</button>

                    <?php echo $info;?>
                    </form>

                </div>
                <div class="field-wrap">
                    <br />
                    修改密码<br /><br />
                    <form name="form">
                        <input id="passwd1" placeholder="新密码" type="password" name="password" required/>
                        <input id="passwd2" placeholder="确认密码" type="password" name="password" required/>
                        <button class="green" onclick="checkPasswords();">修改</button>
                        <div id="msg"></div>
                        <script type="text/javascript">
                            function checkPasswords(){
                                var pass1 = document.getElementById("passwd1");
                                var pass2 = document.getElementById("passwd2");

                                if (pass1.value != pass2.value){
                                    $('#msg').innerHTML="<font color='#dc143c'>两次输入的密码不同！</font>";
                                    return false;
//            return false;
                                }else{
//                                    pass1.setCustomValidity("");
                                    //获取接受返回信息层
                                    var msg = document.getElementById('msg');
                                    //接收表单的URL地址
                                    var url = "http://127.0.0.1/CodeIgniter-project/index.php/pages/changePassword";
                                    //需要POST的值，把每个变量都通过&来联接
                                    var postStr = "password="+$('#passwd1').attr("value");

                                    //实例化Ajax
                                    var ajax = null;
                                    if(window.XMLHttpRequest){
                                        ajax = new XMLHttpRequest();
                                    }
                                    else if(window.ActiveXObject){
                                        ajax = new ActiveXObject(”Microsoft.XMLHTTP”);
                                    }
                                    else{
                                        return;
                                    }

                                    //通过Post方式打开连接
                                    ajax.open("POST", url, true);
                                    //定义传输的文件HTTP头信息
                                    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                                    //发送POST数据
                                    ajax.send(postStr);

                                    //返回数据的处理函数
                                    ajax.onreadystatechange = function(){
                                        if (ajax.readyState == 4 && ajax.status == 200){
                                            msg.innerHTML = ajax.responseText;
                                        }
                                    }
                                    return false;

//            return true;
                                }
                            }

                        </script>
                    </form>

                </div>






            </div>
        </section>

        <section class="widget 	small">
            <header>
                <span class="icon">&#128318;</span>
                <hgroup>
                    <h1>我的积分:<font color="#7fffd4"><?php echo $credit;?></font></h1>
                </hgroup>
            </header>
            <div class="content">
                <h1>积分规则：</h1>
                <br /><br />
                <p>注册成功后，你会有20个积分；</p>
                <p>当你提问时可以为该问题设置相应的积分值，该积分值将从你现有的积分里扣除，
                    所以你所设置的积分值必须小于你现有的积分；否则问题将无法发布！
                </p>
                <p>当尚未有人回答你的问题时你可以撤销此问题，被扣除的积分将会重新加到你的积分里；</p>
                <p>当有人回答了你的问题并且你表示同意后该积分值会被加到回答者的积分里；</p>
                <p>如果你一直得不到满意的答案或者对他人的答案一直不予同意，
                    系统将会选择一个点赞次数最多或者浏览次数最多的回答将积分给回答者。</p>
                <br />
                <h1>如何增加自己的积分？</h1>
                <br /><br />
                <p>你可以通过用高质量的答案来回答别人的问题。</p>



            </div>
        </section>
    </div>

    <div class="widget-container">
        <section class="widget small">
            <header>
                <span class="icon">&#59168;</span>
                <hgroup>
                    <h1>我发布的问题</h1>
                </hgroup>
            </header>
            <div class="content no-padding timeline">
                <div class="tl-post">
                    <span class="icon">&#59168;</span>
                    <p>
                        <a href="#">John Doe says:</a> Lorem ipsum dolor sit amet, consecteteur adipiscing elit sed diam nonummy.
<!--                        <span class="reply"><input type="text" value="Respond to comment..."/></span>-->
                    </p>
                </div>
                <div class="tl-post">
                    <span class="icon">&#59168;</span>
                    <p>
                        <a href="#">John Doe says:</a> Lorem ipsum dolor sit amet, consecteteur adipiscing elit sed diam nonummy.
                        <!--                        <span class="reply"><input type="text" value="Respond to comment..."/></span>-->
                    </p>
                </div>
                <div class="tl-post">
                    <span class="icon">&#59168;</span>
                    <p>
                        <a href="#">John Doe says:</a> Lorem ipsum dolor sit amet, consecteteur adipiscing elit sed diam nonummy.
<!--                        <span class="reply"><input type="text" value="Respond to comment..."/></span>-->
                    </p>
                </div>
                <div class="tl-post">
                    <span class="icon">&#59168;</span>
                    <p>
                        <a href="#">John Doe says:</a> Lorem ipsum dolor sit amet, consecteteur adipiscing elit sed diam nonummy.
                        Lorem ipsum dolor sit amet, consecteteur adipiscing elit sed diam nonummy.Lorem ipsum dolor sit amet, consecteteur adipiscing elit sed diam nonummy.
                        <!--                        <span class="reply"><input type="text" value="Respond to comment..."/></span>-->
                    </p>
                </div>


            </div>
            <span class="show-more" style="margin-left: 36px"><a	 href="#">更多</a></span>
        </section>

        <section class="widget small">
            <header>
                <span class="icon">&#128363;</span>
                <hgroup>
                    <h1>我回答的问题</h1>
                </hgroup>
            </header>
            <div class="content no-padding timeline">
                <div class="tl-post">
                    <span class="icon">&#9993;</span>
                    <p>
                        <a href="#">John Doe says:</a> Lorem ipsum dolor sit amet, consecteteur adipiscing elit sed diam nonummy.
                        <!--                        <span class="reply"><input type="text" value="Respond to comment..."/></span>-->
                    </p>
                </div>
                <div class="tl-post">
                    <span class="icon">&#9993;</span>
                    <p>
                        <a href="#">John Doe says:</a> Lorem ipsum dolor sit amet, consecteteur adipiscing elit sed diam nonummy.
                        <!--                        <span class="reply"><input type="text" value="Respond to comment..."/></span>-->
                    </p>
                </div>
                <div class="tl-post">
                    <span class="icon">&#9993;</span>
                    <p>
                        <a href="#">John Doe says:</a> Lorem ipsum dolor sit amet, consecteteur adipiscing elit sed diam nonummy.
                        <!--                        <span class="reply"><input type="text" value="Respond to comment..."/></span>-->
                    </p>
                </div>
                <div class="tl-post">
                    <span class="icon">&#9993;</span>
                    <p>
                        <a href="#">John Doe says:</a> Lorem ipsum dolor sit amet, consecteteur adipiscing elit sed diam nonummy.
                        Lorem ipsum dolor sit amet, consecteteur adipiscing elit sed diam nonummy.Lorem ipsum dolor sit amet, consecteteur adipiscing elit sed diam nonummy.
                        <!--                        <span class="reply"><input type="text" value="Respond to comment..."/></span>-->
                    </p>
                </div>


            </div>
            <span class="show-more" style="margin-left: 36px"><a	 href="#">更多</a></span>
        </section>

    </div>
    <div class="widget-container">
        <div style="height:80px">
            Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a> - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a>
        </div>
    </div>


</section>