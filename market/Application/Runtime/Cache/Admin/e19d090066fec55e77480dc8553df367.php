<?php if (!defined('THINK_PATH')) exit();?><form action="/dcxt/index.php/Admin/Wdxt/editquestiont"  method="post" class="pageForm required-validate" onsubmit="return validateCallback(this,navTabAjaxDone);" novalidate="novalidate" >
			<div class="pageFormContent nowrap" layoutH="15" >
				<input type="hidden" name="id" value="<?php echo ($t["id"]); ?>">
				<dl>
					<dt>问题内容修改:</dt>
					<dd>
						<input type="text" name="question" value="<?php echo ($t["question"]); ?>"/>
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