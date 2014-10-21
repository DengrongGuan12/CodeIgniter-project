
<section class="content">
    <section class="widget" style="height: 1100px; min-height:300px">
        <header>
            <span class="icon">&#128196;</span>
            <hgroup>
                <h1>发布问题</h1>
            </hgroup>
        </header>
        <div class="content">
            <form onsubmit="return checkInputs();" action="http://127.0.0.1/CodeIgniter-project/index.php/ask_question/getData/" method="post" name="form1">
                <div class="field-wrap">
                    <input id="title" name="title" type="text" value="标题"/>
                    <div id="title-error" class="red" style="margin-top: 0px;">
                        <p>标题不能为空！</p>
                    </div>
                </div>
                <div class="green">
                    <p>你可以通过复制粘贴来插入图片，像编辑word文档一样来编辑你的问题吧！</p>
                </div>
                <div class="field-wrap wysiwyg-wrap">
                    <textarea value="输入具体内容" id="content" class="post" rows="5" name="content"></textarea>

                </div>
                <div id="content-error" class="red" style="margin-top: 0px;">
                    <p>内容不能为空！</p>
                </div>
                <div class="tags">
                    选择所属标签:
                    <ul class="tag-list">
                        <li class="tag1" id="cc" onclick="myCheckbox('cc',this);" onmouseover="this.className='tag2'" onmouseout="this.className='tag1'">html</li>

                    </ul>
                </div>
                <br />
                悬赏分：
                <select name="credit">
                    <option value="0" selected="selected">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>

                
                <button class="green">提交</button>
                <div id="submit-error" class="red" style="margin-top: 3px;">
                    <p>发布失败(你一天只能发布3个问题)!</p>
                </div>
                <div id="submit-success" class="orange" style="margin-top: 3px;">
                    <p>发布成功(你可以在 管理->我发布的问题 中找到该问题)!</p>
                </div>
            </form>
            <script type="text/javascript">
                function checkInputs(){
                    var title=document.form1.title;
                    var content=document.form1.content;
                    if(title.value.length==0||title.value=="标题"){
                        $("#title-error").fadeIn();
                        title.focus();
                        return false;
                    }else if(content.value.length==0||content.value=="Initial content"||content.value=="<p><br></p>"){
                        $("#content-error").fadeIn();
                        content.focus();
                        return false;
                    }else{
                        $("#title-error").fadeOut();
                        $("#content-error").fadeOut();
                        title.value="";
                        content.value="";
                        return true;
                    }

                }

            </script>
        </div>
    </section>
