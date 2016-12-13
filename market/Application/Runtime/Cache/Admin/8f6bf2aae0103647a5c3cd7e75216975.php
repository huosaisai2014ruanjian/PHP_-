<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript">  
    window.UEDITOR_HOME_URL = "/Public/Ueditor/";
</script>
<script type="text/javascript" src="/Public/Ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/Ueditor/ueditor.all.min.js"></script>
<!-- <div class="pageContent"> -->
    <form action="/index.php/Admin/Wdxt/answerquestiont" enctype="multipart/form-data" method="post" class="pageForm required-validate" onsubmit="beforeSubmit();return validateCallback(this, navTabAjaxDone);" novalidate="novalidate" >
    <div class="pageFormContent nowrap" layouth="97">
    
        <dl>
            <dt>问题：</dt>
            <dd>
		<?php if(is_array($q)): $i = 0; $__LIST__ = $q;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$q): $mod = ($i % 2 );++$i;?><input type="hidden" name="id" value="<?php echo ($q["id"]); ?>"/>
			<p>  <?php echo ($q["question"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
            </dd>
        </dl>
        <dl>
            <dt>答案:</dt>
            <dd>
            <input type="hidden" name="content" id="content" value="" />
            <script id="uecontainer" name="answer" type="text/plain"></script>
            </dd>
        </dl>
    </div>
    <div class="formBar" style="position:absolute;bottom:0;right:0;width:100%;">
        <ul>
            <li>
                <div class="buttonActive"><div class="buttonContent"><button type="submit" name="submit_answerquestion">添加</button></div></div>
            </li>
        </ul>
    </div>
    </form>
<!-- </div> -->
<script type="text/javascript">  
    var ue = UE.getEditor('uecontainer');
    function beforeSubmit() {
        var html = ue.getContent();
        $("#content").val(html);
    }
</script>