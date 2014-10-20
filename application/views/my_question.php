<section class="content">
    <section class="widget" style="min-height:300px">
        <header>
            <span class="icon">&#59160;</span>
            <hgroup>
                <h1>标题：<?php echo("$title");?></h1>

                <h1>悬赏分：<?php echo($credit);?></h1>
            </hgroup>

            <aside>

                <?php if($ifPraise):?>
                    <a href=<?php echo("http://127.0.0.1/CodeIgniter-project/index.php/question/cancel_praiseQ/".$id);?>><button>取消赞 <?=$praise_count?></button></a>
                <?php else:?>
                    <a href=<?php echo("http://127.0.0.1/CodeIgniter-project/index.php/question/praiseQ/".$id);?>><button>点赞 <?=$praise_count?></button></a>
                <?php endif;?>
                <?php if(count($answers)==0):?>
                    <a href=<?php echo("http://127.0.0.1/CodeIgniter-project/index.php/question/delete_my_question/".$id);?>><button>删除</button></a>
                <?php endif;?>
            </aside>
        </header>
        <div class="content no-padding timeline">
            <div>
                <p>
                    <?php echo("内容：<br />".$content);?>
                </p>
            </div>
            <?php if($end!=0):?>
                <div class="tl-post comments">
                    <span class="icon">&#59168;</span>
                    <p>

                        <?php echo($agree_answer[2]."的回答(已被认同):".$agree_answer[1]);?>
                        <?php if($agree_answer[0]):?>
                            <a href=<?php echo("http://127.0.0.1/CodeIgniter-project/index.php/question/cancel_praiseA/".$end."/".$id);?>><button>取消赞 <?=$agree_answer[3]?></button></a>
                        <?php else:?>
                            <a href=<?php echo("http://127.0.0.1/CodeIgniter-project/index.php/question/praiseA/".$end."/".$id);?>><button>点赞 <?=$agree_answer[3]?></button></a>
                        <?php endif;?>

                    </p>
                </div>
            <?php endif;?>

            <?php foreach(array_keys($answers) as $aid):?>
                <div class="tl-post comments">
                    <span class="icon">&#59168;</span>
                    <p>

                        <?php echo($answers[$aid][2]."的回答:".$answers[$aid][1]);?>
                        <?php if($answers[$aid][0]):?>
                            <a href=<?php echo("http://127.0.0.1/CodeIgniter-project/index.php/question/cancel_praiseA/".$aid."/".$id);?>><button>取消赞 <?=$answers[$aid][3]?></button></a>
                        <?php else:?>
                            <a href=<?php echo("http://127.0.0.1/CodeIgniter-project/index.php/question/praiseA/".$aid."/".$id);?>><button>点赞 <?=$answers[$aid][3]?></button></a>
                        <?php endif;?>
                        <?php if($end==0):?>
                            <a href=<?php echo("http://127.0.0.1/CodeIgniter-project/index.php/question/agree/".$id."/".$aid);?>><button>认同此答案</button></a>
                            <button>追问</button>
                        <?php endif;?>

                    </p>
                </div>
            <?php endforeach;?>


        </div>
    </section>