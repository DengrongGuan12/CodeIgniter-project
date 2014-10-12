</div><!-- /.container -->

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="form-dialog modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">请登录</h4>
            </div>
            <div class="modal-body">
                <form name="form" class="form-signin" method="post" action="http://127.0.0.1/CodeIgniter-project/index.php/pages/login">


                    <input id="login_name" name="name" type="text" class="form-control" placeholder="用户名">
<!--                    <span id="no_login_name"><font color="#dc143c">用户名不能为空！</font></span>-->
<!--                    <span id="too_long_name"><font color="#dc143c">用户名太长！</font></span>-->
                    <input id="login_passwd" name="password" type="password" class="form-control" placeholder="密码">
<!--                    <span id="no_login_password"><font color="#dc143c">密码不能为空！</font></span>-->
<!--                    <span id="too_long_password"><font color="#dc143c">密码太长！</font></span>-->
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> 记住我
                        </label>
                    </div>
                    <span id="login_error"></span>
                    <button class="btn btn-lg btn-primary btn-block" id="login_btn" type="submit">登录</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="sign" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="form-dialog modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">请注册</h4>
            </div>
            <div class="modal-body">
                <form name="form" class="form-signin">
                    <input name="name" type="text" class="form-control" placeholder="用户名" required maxlength="128">
                    <input name="password" type="password" id="password1" class="form-control" placeholder="密码" required maxlength="128" onchange="checkPasswords()">
                    <input type="password" id="password2" class="form-control" placeholder="确认密码" required maxlength="128" onchange="checkPasswords()">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> 记住我
                        </label>
                    </div>
                    <span id="sign_error"></span>
                    <button class="btn btn-lg btn-primary btn-block">注册</button>
                   </form>
            </div>
        </div>
    </div>
</div>
<div id="footer" style="background:#303030">
    <div class="container" align="center">
        <p align='center'><font color='white'>Copyright &copy; 2014 DengrongGuan. All rights reserved.</font> </p>
    </div>


</div>
<div class="toTop" id="roll_top">
    <img height="50" width="50" src="<?php echo "$base/$images/"."top_button.png";?>">
</div>
<!--<script type="text/javascript" src="--><?php //echo "$base/$js/"."login.js";?><!--"></script>-->
</body>
</html>