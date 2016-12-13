<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>information list</title>
	<style>
	td{
		width:100px;
		text-align:left;
	}
	</style>
</head>
<body>
	<h1>资讯展示&nbsp;&nbsp;&nbsp;<a href="/index.php/Home/Information/add" target="navTab" class="add button"><span name="button">添加</span></a></h1></br><hr>
	<table>
		<tr>
			<td>题目</td>
			<td>简介</td>
			<td>详情</td>
			<td>时间</td>
			<td>标签</td>
			<td>操作</td>
		</tr>
		<?php if(is_array($inf)): $i = 0; $__LIST__ = $inf;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><tr>
			<td><?php echo ($i["title"]); ?></td>
			<td><?php echo ($i["summary"]); ?></td>
			<td><?php echo ($i["content"]); ?></td>
			<td><?php echo ($i["time"]); ?></td>
			<td><?php echo ($i["tag"]); ?></td>
			<td><a href="/index.php/Home/Information/edit?id=<?php echo ($i["id"]); ?>" target="navTab" class="add button"><span name="button">修改</span></a>&nbsp;<a href="/index.php/Home/Information/del?id=<?php echo ($i["id"]); ?>" target="navTab" class="add button"><span name="button">删除</span></a></td>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		
	</table>
</body>
</html>