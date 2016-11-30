<?php if (!defined('THINK_PATH')) exit();?><form action="/index.php/Admin/Authenticate/add" enctype="multipart/form-data" method="post" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);" novalidate="novalidate">
	<div class="pageFormContent nowrap" layoutH="34">
		<input type="hidden" name="userid"/>
		<input type="hidden" name="rank" value="1"/>
		<dl>
			<dt>认证姓名:</dt>
			<dd><input type="text" name="name" class="required" /></dd>
		</dl>	
		<dl>
			<dt>标签名称:</dt>
			<dd><input type="text" name="tagname" class="required"/></dd>
		</dl>	
	</div>
	<div class="formBar" style="position:absolute;bottom:0;right:0;width:100%;">
		<ul>
			<li>
				<div class="buttonActive">
					<div class="buttonContent">
						<!-- <button type="submit">保存</button> -->
						<button name="submit_adduser" type="submit" onclick="document.formname.submit()" value="submit">保存</button> 		
						<!-- <button name="submit_adduser" type="submit" onclick="document.formname.submit()" value="submit">保存</button> -->
					</div>
				</div>
			</li>
			<li>
				<div class="button">
					<div class="buttonContent">
						<button type="button" class="close">取消</button>
					</div>
				</div>
			</li>
		</ul>
	</div>	
</form>