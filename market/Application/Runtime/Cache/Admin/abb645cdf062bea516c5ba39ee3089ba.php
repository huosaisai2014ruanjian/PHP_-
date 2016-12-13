<?php if (!defined('THINK_PATH')) exit();?>
	<form class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);" novalidate="novalidate" action="/index.php/Admin/Rstag/add" method="post">
		&nbsp;标签名称:&nbsp;&nbsp;<input type="text" name="tag" class="required" /></br></br>
		&nbsp;标签排序:&nbsp;&nbsp;<input type="text" name="od" value="<?php echo ($t["od"]); ?>" class="required"/></br></br>
		<input type="hidden" name="id" /></br></br></br></br></br></br></br></br></br></br></br>
		<div class="formBar">
			<ul>
				<!--<li><a class="buttonActive" href="javascript:;"><span>保存</span></a></li>-->
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li>
					<div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
				</li>
			</ul>
		</div>
	</form>