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
        <div class="content no-padding timeline">
            <?php foreach(array_keys($answers) as $aid):?>
                <div class="tl-post comments">
                    <span class="icon">&#59168;</span>
                    <p>

                        John Doe:
                        Lorem ipsum dolor sit amet, consecteteur adipiscing elit sed
                        diam nonummy.sdfasfsadfasdfsadfasdfasdfsadfasdfsadfasdfsadfsadfasdfasdfasdfsadfsadf
                        <br />
                        <br />
                        <button>赞</button>
                        <button>认同此答案</button>
                        <button>追问</button>
                    </p>
                </div>
            <?php endforeach;?>

            <div class="tl-post comments">
                <span class="icon">&#59168;</span>
                <p>
                    <strong>The best designs of 2012</strong><br />
                    <a href="#">John Doe says:</a> Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                    <span class="reply"><input type="text" value="Respond to comment..."/></span>
                </p>
            </div>
            <div class="tl-post comments">
                <span class="icon">&#59168;</span>
                <p>
                    <strong>How to design for retina display</strong><br />
                    <a href="#">John Doe says:</a> Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                    <span class="reply"><input type="text" value="Respond to comment..."/></span>
                </p>
            </div>
            <div class="tl-post comments">
                <span class="icon">&#59168;</span>
                <p>
                    <strong>The best designs of 2012</strong><br />
                    <a href="#">John Doe says:</a> Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                    <span class="reply"><input type="text" value="Respond to comment..."/></span>
                </p>
            </div>
            <div class="tl-post comments">
                <span class="icon">&#59168;</span>
                <p>
                    <strong>How to design for retina display</strong><br />
                    <a href="#">John Doe says:</a> Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.
                    <span class="reply"><input type="text" value="Respond to comment..."/></span>
                </p>
            </div>
            <div class="tl-post comments">
                <span class="icon">&#59168;</span>
                <p>
                    <strong>The best designs of 2012</strong><br />
                    <a href="#">John Doe says:</a> Lorem ipsum dolor sit amet, consecteteur adipiscing elit sed diam nonummy.
                    <span class="reply"><input type="text" value="Respond to comment..."/></span>
                </p>
            </div>
            <div class="tl-post comments">
                <span class="icon">&#59168;</span>
                <p>
                    <strong>How to design for retina display</strong><br />
                    <a href="#">John Doe says:</a> Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum..
                    <span class="reply"><input type="text" value="Respond to comment..."/></span>
                </p>
            </div>
            <div class="tl-post comments">
                <span class="icon">&#59168;</span>
                <p>
                    <strong>The best designs of 2012</strong><br />
                    <a href="#">John Doe says:</a> Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                    <span class="reply"><input type="text" value="Respond to comment..."/></span>
                </p>
            </div>
            <div class="tl-post comments">
                <span class="icon">&#59168;</span>
                <p>
                    <strong>How to design for retina display</strong><br />
                    <a href="#">John Doe says:</a> Lorem ipsum dolor sit amet, consecteteur adipiscing elit sed diam nonummy.
                    <span class="reply"><input type="text" value="Respond to comment..."/></span>
                </p>
            </div>
            <div class="tl-post comments">
                <span class="icon">&#59168;</span>
                <p>
                    <strong>The best designs of 2012</strong><br />
                    <a href="#">John Doe says:</a> Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                    <span class="reply"><input type="text" value="Respond to comment..."/></span>
                </p>
            </div>
            <div class="tl-post comments">
                <span class="icon">&#59168;</span>
                <p>
                    <strong>How to design for retina display</strong><br />
                    <a href="#">John Doe says:</a> Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.
                    <span class="reply"><input type="text" value="Respond to comment..."/></span>
                </p>
            </div>
            <div class="tl-post comments">
                <span class="icon">&#59168;</span>
                <p>
                    <strong>The best designs of 2012</strong><br />
                    <a href="#">John Doe says:</a> Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                    <span class="reply"><input type="text" value="Respond to comment..."/></span>
                </p>
            </div>
            <div class="tl-post comments">
                <span class="icon">&#59168;</span>
                <p>
                    <strong>How to design for retina display</strong><br />
                    <a href="#">John Doe says:</a> Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                    <span class="reply"><input type="text" value="Respond to comment..."/></span>
                </p>
            </div>
            <div class="tl-post comments">
                <span class="icon">&#59168;</span>
                <p>
                    <strong>The best designs of 2012</strong><br />
                    <a href="#">John Doe says:</a> Lorem ipsum dolor sit amet, consecteteur adipiscing elit sed diam nonummy.
                    <span class="reply"><input type="text" value="Respond to comment..."/></span>
                </p>
            </div>
        </div>
    </section>