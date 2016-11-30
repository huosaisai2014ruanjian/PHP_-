<?php if (!defined('THINK_PATH')) exit();?>	<form action="/index.php/Admin/Gonglue/badd" method="post" enctype="multipart/form-data" method="post" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);" novalidate="novalidate">
		<input type="hidden" name="id"/></br></br>
		标题:<input type="text" name="title" /></br></br>
		<input type="submit" name="submit" value="添加"/>
	</form>