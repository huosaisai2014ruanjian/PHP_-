<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
	#il{
       height:400px;
	}
	#il .t{
		width:200px;
		text-align: center;
	}
</style>
<div class="pageContent j-resizeGrid">
	<div class="panelBar">
		<ul class="toolBar">
			<li class=""><a class="add" href="<?php echo U('admin/chat/index');?>" target="navTab"><span>聊天管理</span></a></li>
		</ul>
	</div>
<form action="/market/index.php/Admin/Chat/store" method="post" width="100%" class="pageForm required-validate" onsubmit="return validateCallback(this)">
	<table  id="il" class="list" width="98%" targetType="navTab" asc="asc" desc="desc" layoutH="42">
		<tbody>
		
		<tr>
			<td class="t">发送用户ID</td>
			<td>
                <select name="fromuser_id">
				<?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>"><?php echo ($vo['id']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </td>
		</tr>
		<tr>
			<td class="t">接收用户ID</td>
		<td>
                <select name="touser_id">
				<?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>"><?php echo ($vo['id']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </td>
		</tr>
		<tr>
			<td class="t">聊天内容</td>
			<td><textarea name="content" cols="80" rows="5" class="textInput"><?php echo ($row['content']); ?></textarea></td>
		</tr>

		<tr>
			<td class="t"></td>
			<td></td>
			<td class="t"></td>
			<td><input type="submit" value="添加"></td>
		</tr>
		</tbody>
	</table>
</form>