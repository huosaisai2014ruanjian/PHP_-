<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>添加信息</title>
</head>
<body>
	<form action="/index.php/Admin/Bid/doAddfk" method="post" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);" novalidate="novalidate">
		<table>
			<tr>
				<td>需求：</td>
				<td>
				<select name="xuqiu">
					<?php if(is_array($toubiao)): $i = 0; $__LIST__ = $toubiao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option name="xuqiu" value="<?php echo ($vo["xuqiu"]); ?>"><?php echo ($vo["xuqiu"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</td>
			</tr>
			<tr>
				<td>反馈信息：</td>
				<td><textarea name="fktext" class="required"></textarea> </td>
			</tr>
			<tr>
				<td>反馈角色：</td>
				<td><input type="text" name="fuser" class="required"></td>
			</tr>

			<tr>
				<td>记录人：</td>
				<td><input type="text" name="juser" class="required"/></td>
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