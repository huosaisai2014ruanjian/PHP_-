<?php if (!defined('THINK_PATH')) exit();?>
<body>
	<form action="/index.php/Admin/Bid/doAdd" method="post" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);" novalidate="novalidate">
		<table>
			<tr>
				<td>需求内容：</td>
				<td><textarea name="xuqiu" class="required"></textarea> </td>
			</tr>
			<tr>
				<td>需求用户：</td>
				<td><input type="text" name="xuser" class="required"/></td>
			</tr>
			<input type="text" name="zhuangtai"  style="display:none" />
			<tr>
				<td>委托人：</td>
				<td><input type="text" name="tuser"/></td>
			</tr>
			<tr>
				<td>委托反馈：</td>
				<td><textarea name="fankui"></textarea></td>
			</tr>
		</table>
		<div class="formBar" style="position:absolute;bottom:0;right:0;width:100%;">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li>	<div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>

</body>