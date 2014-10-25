
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
                <div class="tags" id="tags" style="margin-bottom: 5px;">
                    选择所属标签:
                    <select name="tag1" id="tag1">
                        <?php foreach(array_keys($tags) as $id):?>
                            <option value=<?php echo($id);?>><?php echo($tags[$id]);?></option>
                        <?php endforeach;?>
                    </select>
<!--                    <ul class="tag-list">-->
<!--                        <li class="tag1" id="cc" onclick="myCheckbox('cc',this);" onmouseover="this.className='tag2'" onmouseout="this.className='tag1'">html</li>-->
<!---->
<!--                    </ul>-->
                </div>
                <br />
                <div style="margin-bottom: 5px; margin-left: -5px;">
                    <a class="button add" href="javascript:addTag()">添加标签</a>
                    <a class="button delete" href="javascript:deleteTag()">删除标签</a>
                </div>

                <br />
                <script type="text/javascript">
                    var count= 1 ;
                    var maxTag = 5;
                    function addTag(){
                        if(count >= maxTag){
                            alert("最多5个标签！");return;//限制最多maxfile个文件框
                        }
                        count++;
                        //自增id不同的HTML对象，并附加到容器最后
                        var newSelect="<select name=tag"+count+" id=tag"+count+">"
                            <?php foreach(array_keys($tags) as $id):?>
                            +"<option value=<?php echo($id);?>><?php echo($tags[$id]);?></option>"
                            <?php endforeach;?>
                            +"</select>";
                        document.getElementById("tags").insertAdjacentHTML("beforeEnd", newSelect);
                    }
                    function deleteTag(){
                        if(count==1){
                            alert("最少一个标签！");
                            return;
                        }else{
                            document.getElementById("tag"+count).parentNode.removeChild(document.getElementById("tag"+count));
                            count--;
                        }

                    }
                </script>
                悬赏分：
                <select name="credit" id="credit">
                    <?php for($i=0;$i<=$credit;$i++):?>
                        <option value=<?php echo($i);?>><?php echo($i);?></option>
                    <?php endfor;?>
                </select>
                <br />
                <br />

                
                <button class="green">提交</button>
                <div id="submit-result"></div>



            </form>
            <script type="text/javascript">
                function contains(a, obj) {
                    var i = a.length;
                    if(i==0){
                        return false;
                    }
                    while (i--) {
                        if (a[i] === obj) {
                            return true;
                        }
                    }
                    return false;
                }
                function checkInputs(){
                    var title=document.form1.title;
                    var content=document.form1.content;
                    var submit_result=document.getElementById("submit-result");
                    if(title.value.length==0||title.value=="标题"){
                        $("#title-error").fadeIn();
                        title.focus();
                        return false;
                    }else if(content.value.length==0||content.value=="<p>Initial content</p>"||content.value=="<p><br></p>"){
                        $("#content-error").fadeIn();
                        content.focus();
                        return false;
                    }else{
                        $("#title-error").fadeOut();
                        $("#content-error").fadeOut();
                        var credit=document.getElementById("credit");
                        var index=credit.selectedIndex;
                        var credit_value=credit.options[index].value;
                        var tags=new Array();
                        for(var i=1;i<=5;i++){
                            if(document.getElementById("tag"+i)){
                                var tag=document.getElementById("tag"+i);
                                var index=tag.selectedIndex;
                                var tag_value=tag.options[index].value;
                                if(!contains(tags,tag_value)){
                                    tags.push(tag_value);
                                }else{
                                    continue;
                                }
                            }

                        }
                        var len=tags.length;
                        var tags_str=tags[0];
                        for(var i=1;i<len;i++){
                            tags_str=tags_str+","+tags[i];
                        }
                        var url="http://127.0.0.1/CodeIgniter-project/index.php/ask_question/getData/";
                        var ajax = null;
                        var postStr="title="+title.value+"&content="+content.value+"&tags="+tags_str+"&credit="+credit_value;
                        if(window.XMLHttpRequest){
                            ajax = new XMLHttpRequest();
                        }
                        else if(window.ActiveXObject){
                            ajax = new ActiveXObject("Microsoft.XMLHTTP");
                        }
                        else{
                            return false;
                        }
                        ajax.open("POST",url,true);
                        ajax.send(postStr);
                        //返回数据的处理函数
                        ajax.onreadystatechange = function(){
                            if (ajax.readyState == 4 && ajax.status == 200){
                                submit_result.innerHTML = ajax.responseText;
                                title.value="";
                                content.value="";
                            }
                        }


                        return false;
                    }

                }

            </script>
        </div>
    </section>
