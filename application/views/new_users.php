<section class="content">
    <section class="widget" style="min-height:300px">
        <header>
            <span class="icon">&#59160;</span>
            <hgroup>
                <h1>所有新用户(今天注册)</h1>
            </hgroup>
        </header>
        <div class="content no-padding timeline">
            <?php foreach($ids as $id):?>
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
    </section>