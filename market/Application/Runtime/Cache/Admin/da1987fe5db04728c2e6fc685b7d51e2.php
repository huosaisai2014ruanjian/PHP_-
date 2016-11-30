<?php if (!defined('THINK_PATH')) exit();?>
	<form class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);" novalidate="novalidate" action="/index.php/Admin/Tag/add" method="post">
		<input type="hidden" name="id" /></br></br>
		&nbsp;标签名称:&nbsp;&nbsp;<input type="text" name="tag" class="required" /></br></br>
		<!--&nbsp;标签分类:&nbsp;&nbsp;<select ><input type="text" name="sort" value="<?php echo ($t["sort"]); ?>" class="required"/></br></br>
		-->
		<select name="sort">
			<option>关联标签</option>
			<option>热门搜索标签</option>
			<option>房源标签</option>
		</select>
		&nbsp;<input type="submit" name="submit" value="添加"/>
	</form>