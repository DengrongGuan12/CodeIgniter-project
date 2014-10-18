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
                    <a href=<?php echo("http://127.0.0.1/CodeIgniter-project/index.php/question/cancel_praise/".$id);?>><button>取消赞 <?=$praise_count?></button></a>
                <?php else:?>
                    <a href=<?php echo("http://127.0.0.1/CodeIgniter-project/index.php/question/praise/".$id);?>><button>点赞 <?=$praise_count?></button></a>
                <?php endif;?>
                <?php if(count($answers)==0):?>
                    <a href=<?php echo("http://127.0.0.1/CodeIgniter-project/index.php/question/delete_my_question/".$id);?>><button>删除</button></a>
                <?php endif;?>
            </aside>
        </header>
        <div class="content">
            <div class="field-wrap">
                <input type="text" value="Title"/>
            </div>
            <div class="field-wrap">
                <input type="text" value="Author"/>
            </div>
            <div class="field-wrap">
                <input type="text" value="Tags"/>
            </div>
            <div class="field-wrap wysiwyg-wrap">
                <textarea class="post" rows="5"></textarea>
            </div>
            <button type="submit" class="green">Post</button> <button type="submit" class="">Preview</button>
        </div>
    </section>