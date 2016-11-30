<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="/index.php/Admin/Gonglue/badd" target="dialog"><span>添加</span></a></li>
			<li><a class="delete" href="/index.php/Admin/Gonglue/bdel?id={sid_user}" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a class="edit" href="/index.php/Admin/Gonglue/bedit?id={sid_user}" target="dialog"><span>修改</span></a></li>
			<li class="line">line</li>
		</ul>
	</div>
</div>
<style>
	td{
		width:100px;
		text-align:left;
	}
	</style>
<body>
<!-- 	<h1>选址中国--攻略--百科--类别:<?php echo $_GET['fenlei'];?></h1></br> -->
	<!-- <a href="/index.php/Admin/Gonglue/badd" target="navTab" class="add button"><span name="button">添加</span></a></br></br> -->
	<table class="table" width="100%" layoutH="138">
	<thead>
		<tr>
			<th>题目</th>
			<th>详情</th>
			<th>标签</th>
			<th>用户类别</th>
		<!-- 	<td>操作</td> -->

		</tr>
		</thead>
		<tbody>
		<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><tr rel="<?php echo ($i["id"]); ?>" target="sid_user">
			<td><?php echo ($i["title"]); ?></td>
			<td><?php echo ($i["content"]); ?></td>
			<td><?php echo ($i["tag"]); ?></td>
			<td><?php echo ($i["user"]); ?></td>
	<!-- 		<td><a href="/index.php/Admin/Gonglue/bedit?id=<?php echo ($i["id"]); ?>" target="navTab" class="add button"><span name="button">修改</span></a>&nbsp;<a href="/index.php/Admin/Gonglue/bdel?id=<?php echo ($i["id"]); ?>" target="navTab" class="add button"><span name="button">删除</span></a></td> -->
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
		
	</table>
</body>
</html>