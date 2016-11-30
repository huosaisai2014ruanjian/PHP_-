<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
	#il{
       height:400px;
	}
	#il .t{
		width:200px;
		text-align: center;
	}
	.right{
        position: absolute;
        right:150px;
        top:430px;
	}
</style>
<div class="pageContent j-resizeGrid">
	<div class="panelBar">
		<ul class="toolBar">
			<li class=""><a class="add" href="<?php echo U('admin/messageManage/index');?>" target="navTab"><span>留言管理</span></a></li>
		</ul>
	</div>
<form action="/market/index.php/Admin/Message/update?id=<?php echo ($id); ?>" method="post" width="100%" >
	
	<table  id="il" class="list" width="98%" targetType="navTab" asc="asc" desc="desc" layoutH="163">
		<tbody>

			<tr >
			<td class="t">商品ID</td>
			<td><input type="text" name="goods_id" value="<?php echo ($row['goods_id']); ?>"></td>
		</tr>
		<tr>
			<td class="t">发送用户ID</td>
			<td><input type="text" name="fromuser_id"value="<?php echo ($row['fromuser_id']); ?>"></td>
		</tr>
		<tr>
			<td class="t">接收用户ID</td>
			<td><input type="text" name="touser_id" value="<?php echo ($row['touser_id']); ?>"></td>
		</tr>
		<tr>
			<td class="t">留言内容</td>
			<td><input type="text" name="content" value="<?php echo ($row['content']); ?>"></td>
		</tr>
		<tr>
			<td class="t">所属ID</td>
			<td><input type="text" name="belong_id" value="<?php echo ($row['belong_id']); ?>"></td>
		</tr>

		<tr>
			<td class="t"></td>
			<td></td>
			<td class="t"></td>
			<td><input type="submit" value="修改"></td>
		</tr>
		</tbody>
	</table>
</form>
<!--表单提交开始-->