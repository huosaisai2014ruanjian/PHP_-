<?php if (!defined('THINK_PATH')) exit();?><form action="/index.php/Admin/Authenticate/edit" enctype="multipart/form-data" method="post" class="pageForm required-validate"  novalidate="novalidate">
			<div class="pageFormContent nowrap" layoutH="15">
				<input type="hidden" name="id" value="<?php echo ($result["id"]); ?>">
				<dl>
					<dt>认证姓名:</dt>
					<dd>
						<input type="text" name="tag" value="<?php echo ($result["name"]); ?>"/>
					</dd>
				</dl>	
				<dl>
					<dt>标签名称:</dt>
					<dd>
						<input type="text" name="tag" value="<?php echo ($result["tag"]); ?>"/>
					</dd>
				</dl>
				<div class="formBar" style="position:absolute;bottom:0;right:0;width:100%;">
					<ul>
						<li>
							<div class="buttonActive">
								<div class="buttonContent">
									<!-- <button type="submit">保存</button> -->
									<button name="submit_aedit" type="submit" onclick="document.formname.submit()" value="submit">保存</button> 
										
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
			</div>
<!--			<input type="submit" name="submit" value="提交"/> -->
			</form>