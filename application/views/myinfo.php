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
                <span class="icon">&#128319;</span>
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
                    <button class="green">上传头像</button>

                    <?php echo $info;?>

                </div>






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