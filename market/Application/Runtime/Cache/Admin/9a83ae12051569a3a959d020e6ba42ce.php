<?php if (!defined('THINK_PATH')) exit();?>	<form action="/index.php/Admin/Gonglue/zeditst" method="post"  enctype="multipart/form-data" method="post" class="pageForm required-validate"  novalidate="novalidate" onsubmit="return validateCallback(this, navTabAjaxDone);">
	
		<h1>修改</h1><hr></br>
		<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
		分类:<input type="text" name="title" value="<?php echo ($title); ?>"></br></br>
		<input type="submit" name="zsubmits" value="提交修改"/>
	</form>