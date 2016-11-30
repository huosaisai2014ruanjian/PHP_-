<?php if (!defined('THINK_PATH')) exit();?><style>
	.pageFormContent dd{
		width:135px;
	}

</style>
<form action="/dcxt/index.php/Admin/Tag2/add" method="post"  class="pageForm required-validate" onsubmit="return validateCallback(this)">
	<div class="pageFormContent nowrap" layoutH="34">
		<input type="hidden" name="id" />
		<dl>
			<dt>标签名称:</dt>
			<dd>
				<input  type="text" name="name" class="required"/>	
			</dd>
		</dl>	
	</div>
	<div class="formBar" style="position:absolute;bottom:0;right:0;width:100%;">
		<ul>
			<li>
				<div class="buttonActive">
					<div class="buttonContent">
						<button type="submit">保存</button>
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