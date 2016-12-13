<?php if (!defined('THINK_PATH')) exit();?><form action="/index.php/Admin/Consultant/edit" enctype="multipart/form-data" method="post"  class="pageForm required-validate" novalidate="novalidate">
	<div class="pageFormContent nowrap" layoutH="34">
		<input type="hidden" name="id" value="<?php echo ($result["id"]); ?>">	
		<dl>
			<dt>顾问分类:</dt>
			<dd><input type="text" name="sort" value="<?php echo ($result["sort"]); ?>"/></dd>
		</dl>
		<dl>
			<dt>证件照片:</dt>
			<dd><input type="file" name="pphoto" /></dd>
		</dl>
		<dl>
			<dt>名片照片:</dt>
			<dd><input type="file" name="bphoto" /></dd>
		</dl>	
	</div>
		<div class="formBar" style="position:absolute;bottom:0;right:0;width:100%;">
			<ul>
				<li>
					<div class="buttonActive">
						<div class="buttonContent">
							<button name="submit_cedit" type="submit" onclick="document.formname.submit()" value="submit">保存</button> 
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
	</div>
</form>