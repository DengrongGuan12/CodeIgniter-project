<section class="content">
    <section class="widget" style="min-height:300px">
        <header>
            <span class="icon">&#59160;</span>
            <hgroup>
                <h1>我发布的所有问题</h1>
            </hgroup>
        </header>
        <div class="content no-padding timeline">
            <?php foreach ($ids as $id): ?>
                <div class="tl-post comments">
                    <span class="icon">&#59168;</span>
                    <p>
                        <a title="进入问题" href=<?php echo ("http://127.0.0.1/CodeIgniter-project/index.php/question/single_question/".$id);?>><?php echo($titles[$id]);?></a>

                        <br />
                        创建于 <?php echo($dates[$id]);?>
                        <!--                        <span class="reply"><input type="text" value="Respond to comment..."/></span>-->
                    </p>
                </div>
            <?php endforeach; ?>


        </div>
    </section>