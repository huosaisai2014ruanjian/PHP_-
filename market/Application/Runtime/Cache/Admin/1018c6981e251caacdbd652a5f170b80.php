<?php if (!defined('THINK_PATH')) exit();?>
	<form class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone());" novalidate="novalidate" action="/index.php/Admin/Tag/edit" method="post">
	<?php if(is_array($t)): $i = 0; $__LIST__ = $t;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?><input type="hidden" name="id" value="<?php echo ($t["id"]); ?>"/></br></br>
			&nbsp;标签名称:&nbsp;&nbsp;<input type="text" name="tag" value="<?php echo ($t["tag"]); ?>" class="required"/></br></br>
			<!--&nbsp;标签分类:&nbsp;&nbsp;<input type="text" name="sort" value="<?php echo ($t["sort"]); ?>" class="required"/></br></br>
			-->
			<select name="sort">
				<option>关联标签</option>
				<option>热门搜索标签</option>
				<option>房源标签</option>
			</select>
			&nbsp;<input type="submit" name="submit" value="提交修改"/><?php endforeach; endif; else: echo "" ;endif; ?>
	</form>