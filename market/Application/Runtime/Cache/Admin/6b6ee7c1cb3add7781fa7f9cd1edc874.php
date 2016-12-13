<?php if (!defined('THINK_PATH')) exit();?>
	<form class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone());" novalidate="novalidate" action="/index.php/Admin/Rstag/edit" method="post">
	<?php if(is_array($t)): $i = 0; $__LIST__ = $t;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?>&nbsp;标签名称:&nbsp;&nbsp;<input type="text" name="tag" value="<?php echo ($t["tag"]); ?>" class="required"/></br></br>
			&nbsp;标签排序:&nbsp;&nbsp;<input type="text" name="od" value="<?php echo ($t["od"]); ?>" class="required"/></br></br>
			<input type="hidden" name="id" value="<?php echo ($t["id"]); ?>"/></br></br></br></br></br></br></br></br>
			<div class="formBar">
				<ul>
					<!--<li><a class="buttonActive" href="javascript:;"><span>保存</span></a></li>-->
					<li><div class="buttonActive"><div class="buttonContent"><button type="submit" name="submit">保存</button></div></div></li>
					<li>
						<div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
					</li>
				</ul>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
	</form>