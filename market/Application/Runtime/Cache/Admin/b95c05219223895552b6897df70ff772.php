<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>添加信息</title>
</head>
<body>
	<form action="/index.php/Admin/Bid/xiugai/id/<?php echo ($xg["id"]); ?>" method="post" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);" novalidate="novalidate">
		<table>
			<tr>
				<td>需求内容：</td>
				<td><textarea name="xuqiu" class="required" placeholder="<?php echo ($xg["xuqiu"]); ?>"><?php echo ($xg["xuqiu"]); ?></textarea> </td>
			</tr>
			<tr>
				<td>需求用户：</td>
				<td><input type="text" name="xuser" class="required" value="<?php echo ($xg["xuser"]); ?>"/></td>
			</tr>
			<input type="text" name="zhuangtai"  style="display:none" />
			<tr>
				<td>委托人：</td>
				<td><input type="text" name="tuser" class="required" value="<?php echo ($xg["tuser"]); ?>" /></td>
			</tr>
			<tr>
				<td>委托反馈：</td>
				<td><textarea name="fankui" class="required"><?php echo ($xg["fankui"]); ?></textarea></td>
			</tr>
		</table>
		<div class="formBar" style="position:absolute;bottom:0;right:0;width:100%;">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li>
					<div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
				</li>
			</ul>
		</div>
	</form>

</body>
</html>