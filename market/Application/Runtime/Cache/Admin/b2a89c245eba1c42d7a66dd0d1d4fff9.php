<?php if (!defined('THINK_PATH')) exit();?>
	<form action="/index.php/Admin/Zxtag/add" method="post"  enctype="multipart/form-data" method="post" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);" novalidate="novalidate">
		<input type="hidden" name="id" /></br></br>
		标签名称:<input type="text" name="tag" /></br></br>
		<input type="submit" name="submit" value="添加"/>
	</form>
</body>
</html>