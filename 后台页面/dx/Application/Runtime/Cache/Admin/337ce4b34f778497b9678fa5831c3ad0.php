<?php if (!defined('THINK_PATH')) exit();?><form action="/dx/index.php/Admin/Category/doadd1" method="post" class="pageForm required-validate" onsubmit="return validateCallback(this,navTabAjaxDone);" novalidate="novalidate">
     <input type="hidden" name="id" />
     名称：<input type="input" name="name" class="required" alt="添加的一级分类"/><span class="info">请输入添加的一级分类</span></br></br>
     <div class="formBar" style="position:absolute;bottom:0;right:0;width:100%;">
         <ul>
        <li><div class="buttonActive"><div class="buttonContent"><button type="submit" name="submit">添加</button></div></div></li>
        <li>
          <div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
        </li>
      </ul>
     </div>
	</form>