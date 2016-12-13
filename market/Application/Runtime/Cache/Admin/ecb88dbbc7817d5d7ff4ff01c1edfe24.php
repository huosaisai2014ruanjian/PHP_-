<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript">  
    window.UEDITOR_HOME_URL = "/Public/dwz/Ueditor/";
</script>
<script src="/Public/jquery.js" type="text/javascript"></script> 
<script src="/Public/chosen/public/chosen.jquery.js" type="text/javascript"></script>
 <link rel="stylesheet" href="/Public/chosen/public/chosen.css">
<script type="text/javascript" src="/Public/dwz/Ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/dwz/Ueditor/ueditor.all.min.js"></script>
 
    <form action="/index.php/Admin/Information/add" method="post" enctype="multipart/form-data"  class="pageForm required-validate" onsubmit="beforeSubmit();return validateCallback(this, navTabAjaxDone);" novalidate="novalidate" >
    <div class="pageFormContent nowrap" layouth="97">
        <input type="hidden" name="id"/> 
         <input type="hidden" name="tag" id="tag">
        <dl>
            <dt>标题:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>简介:</dt>
            <dd>
                <input type="text" name="summary" />
            </dd>
        </dl>
		
        <dl>
            <dt>详情:</dt>
            <dd>
            <input type="hidden" name="content" id="content" value=""/>
            <script id="uecontainer" name="uecontainer" type="text/plain"></script>
            </dd>
        </dl>
		
		  <dl>
            <dt>标签:</dt>
            <dd> 
             <select class="chzn-select" data-placeholder="请填写标签" style="width:350px;" tabindex="1" multiple="multiple" > 
				<option value=""></option> 
				<?php if(is_array($s)): $i = 0; $__LIST__ = $s;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><option value="<?php echo ($s["name"]); ?>"><?php echo ($s["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select> 
            </dd>
        </dl>
    </div>
    <div class="formBar">
        <ul>
            <li>
                <div class="buttonActive"><div class="buttonContent"><button type="submit">添加</button></div></div>
            </li>
        </ul>
    </div>
    </form>

<script type="text/javascript">  
   $(".chzn-select").chosen();
   $(".chzn-select").chosen().change(function(){

      $("#tag").val( $(".chzn-select").val());
      // alert($("#tag").val());
});
    // jQuery("#obj_branch_id").trigger("liszt:updated");
    var ue = UE.getEditor('uecontainer');
    function beforeSubmit() {
        var html = ue.getContent();
        $("#content").val(html);
    }
</script>