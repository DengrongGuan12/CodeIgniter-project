<div class="widget-container">

</div>
</section>

<script src="<?php echo "$base/$js/"."jquery.min.js";?>"></script>
<script src="<?php echo "$base/$js/"."jquery.wysiwyg.js";?>"></script>
<script src="<?php echo "$base/$js/"."custom.js";?>"</script>
<script src="<?php echo "$base/$js/"."cycle.js";?>"></script>
<script src="<?php echo "$base/$js/"."jquery.checkbox.min.js";?>"></script>
<script src="<?php echo "$base/$js/"."flot.js";?>"></script>
<script src="<?php echo "$base/$js/"."flot.resize.js";?>"></script>
<script src="<?php echo "$base/$js/"."flot-time.js";?>"></script>
<script src="<?php echo "$base/$js/"."flot-pie.js";?>"></script>
<script src="<?php echo "$base/$js/"."flot-graphs.js";?>"></script>
<script src="<?php echo "$base/$js/"."cycle.js";?>"></script>
<script src="<?php echo "$base/$js/"."jquery.tablesorter.min.js";?>"></script>

<script type="text/javascript">
    $('#title-error').hide();
    $('#content-error').hide();
    $('#submit-error1').hide();
    $('#submit-error2').hide();
    $('#submit-error3').hide();
    $('#submit-success').hide();
    // Feature slider for graphs
    $('.cycle').cycle({
        fx: "scrollHorz",
        timeout: 0,
        slideResize: 0,
        prev:    '.left-btn',
        next:    '.right-btn'
    });
    function myCheckbox(obj,thisobj)
    {
        var o = document.getElementById(obj);
        if(o.checked)
        {
            thisobj.style.backgroundColor="#f88";
            o.checked = false;
        }
        else
        {
            thisobj.style.backgroundColor="#88f";
            o.checked = true;
        }
    }
</script>
</body>
</html>