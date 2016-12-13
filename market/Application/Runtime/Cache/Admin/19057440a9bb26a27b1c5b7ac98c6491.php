<?php if (!defined('THINK_PATH')) exit();?><form action="/index.php/Admin/Consultant/upload" enctype="multipart/form-data" method="post" class="pageForm required-validate"  novalidate="novalidate" >
	<!-- 顾客姓名:<input type="text" name="name" /></br> -->
	<div class="pageFormContent nowrap" layoutH="34">
		<dl>
			<dt>顾问分类:</dt>
			<dd><input class="required" type="text" name="sort" /></dd>
		</dl>	
		<dl>
			<dt>证件照片:</dt>
			<dd><input type="file" name="pphoto" /></dd></dl>
		<dl>
			<dt>名片照片:</dt>
			<dd><input type="file" name="bphoto" /></br></dd>
		</dl>			
		<div class="formBar" style="position:absolute;bottom:0;right:0;width:100%;">
			<ul>
				<li>
					<div class="buttonActive">
						<div class="buttonContent">
							<button name="submit" type="submit"  value="submit">保存</button> 
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