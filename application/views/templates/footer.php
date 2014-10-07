</div><!-- /.container -->

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="form-dialog modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Please log in</h4>
            </div>
            <div class="modal-body">
                <form name="form" autocomplete="on" class="form-signin" role="form" action="http://127.0.0.1/CodeIgniter-project/index.php/pages/login" method="post">


                    <input name="email" type="email" class="form-control" placeholder="Email address" required autofocus>
                    <input name="password" type="password" class="form-control" placeholder="Password" required autocomplete="off">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
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
                <h4 class="modal-title" id="myModalLabel">Please sign up</h4>
            </div>
            <div class="modal-body">
                <form name="form" autocomplete="on" class="form-signin" role="form" action="http://127.0.0.1/CodeIgniter-project/index.php/pages/sign" method="post">
                    <input name="email" type="email" class="form-control" placeholder="Email address" required autofocus>
                    <input name="password" type="password" id="password1" class="form-control" placeholder="Password" autocomplete="off" onchange="checkPasswords()" required>
                    <input type="password" id="password2" class="form-control" placeholder="Password Confirm" autocomplete="off" onchange="checkPasswords()" required>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
                   </form>
            </div>
        </div>
    </div>
</div>
<footer id="footer" style="background:#303030">
    <div class="container">
        <p align='center'><font color='white'>Copyright &copy; 2014 DengrongGuan. All rights reserved.</font> </p>
    </div>


</footer>
<div class="toTop" id="roll_top">
    <img height="50" width="50" src="<?php echo "$base/$images/"."top_button.png";?>">
</div>
</body>
</html>