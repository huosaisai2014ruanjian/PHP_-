<?php if (!defined('THINK_PATH')) exit();?>

	<form action="/index.php/Admin/Area/doadd" method="post" class="pageForm required-validate" onsubmit="return validateCallback(this,navTabAjaxDone);" novalidate="novalidate">
     <input type="hidden" name="id" />
     名称：<input type="input" name="name" class="required" alt="添加的省区"/><span class="info">请输入添加的省区</span></br></br>
     <div class="formBar" style="position:absolute;bottom:0;right:0;width:98%;">
         <ul>
        <li><div class="buttonActive"><div class="buttonContent"><button type="submit" name="submit">添加</button></div></div></li>
        <li>
          <div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
        </li>
      </ul>
     </div>
	</form>