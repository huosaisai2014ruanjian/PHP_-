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
<form action="" method="post" width="100%" >
	
	<table  id="il" class="list" width="98%" targetType="navTab" asc="asc" desc="desc" layoutH="163">
		<tbody>
			<tr >
			<td class="t">商品ID</td>
			<td><input type="text" name="goods_id"></td>
		</tr>
		<tr>
			<td class="t">发送用户ID</td>
			<td><input type="text" name="fromuser_id"></td>
		</tr>
		<tr>
			<td class="t">接收用户ID</td>
			<td><input type="text" name="touser_id"></td>
		</tr>
		<tr>
			<td class="t">留言内容</td>
			<td><input type="text" name="content"></td>
		</tr>
		<tr>
			<td class="t">所属ID</td>
			<td><input type="text" name="belong_id"></td>
		</tr>
		<tr>
			<td class="t">留言时间</td>
			<td>
				<div class="unit">
				<input type="text" name="date10" class="date textInput readonly" datefmt="yyyy-MM-dd HH:mm:ss" readonly="true">
				<a class="inputDateButton" href="javascript:;">选择</a>
				<span class="info">yyyy-MM-dd HH:mm:ss</span>
			</div>
			</td>
		</tr>
		</tbody>
	</table>
</form>
<!--表单提交开始-->
<div class="right">
	<div class="buttonContent"><button type="submit">确认修改</button></div>
</div>
<!--表单提交结束-->