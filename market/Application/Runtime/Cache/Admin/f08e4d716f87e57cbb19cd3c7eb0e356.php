<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/index.php/Admin/Information" method="post">
	<input type="hidden" name="pageNum" value="1"/>
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST["_order"]); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST["_sort"]); ?>"/>
</form>

<script>
	var op = new Object();
  	op.close = undefined;
  	op.drawable = true;
  	op.fresh = true;
  	op.mask = false;
  	op.max = false;
  	op.maxable = true;
  	op.minable = true;
  	op.param = "";
  	op.resizable = true;
	function Show(id){
		var url = "/index.php/Admin/Information/show?id=" + id;
		$.pdialog.open(url, "D_" + id, "详情", op);
	}
</script>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="/index.php/Admin/Information/add" target="navTab" ><span>添加</span></a></li>
			<li><a class="delete" href="/index.php/Admin/Information/del?id={sid_user}" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a class="edit" href="/index.php/Admin/Information/edit?id={sid_user}" target="navTab"><span>修改</span></a></li>
			<li><a class="edit" href="/index.php/Admin/Information/show?id={sid_user}" target="navTab"><span>详情</span></a></li>
			<li class="line">line</li>
		</ul>
	</div>
</div>

<!-- <a href="/index.php/Admin/Information/add" target="navTab" class="add button"><span name="button">添加</span></a></h1></br><hr> -->
<table class="table" width="100%" layoutH="138">
<thead>
	<tr>
		<td>题目</td>
		<td>简介</td>
		<td>详情</td>
		<td>时间</td>
		<td>标签</td>
		<!-- <td>操作</td> -->
	</tr>
	</thead>
	<tbody>
	<?php if(is_array($inf)): $i = 0; $__LIST__ = $inf;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><tr rel="<?php echo ($i["id"]); ?>" target="sid_user">
		<td><?php echo ($i["title"]); ?></td>
		<td><?php echo ($i["summary"]); ?></td>
		<td><?php echo ($i["content"]); ?></td>
		<td><?php echo ($i["time"]); ?></td>
		<td><?php echo ($i["tag"]); ?></td>
	<!-- 	<td><a href="/index.php/Admin/Information/edit?id=<?php echo ($i["id"]); ?>" target="navTab" class="add button"><span name="button">修改</span></a>&nbsp;<a href="/index.php/Admin/Information/del?id=<?php echo ($i["id"]); ?>" target="navTab" class="add button"><span name="button">删除</span></a></td> -->
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</tbody>
</table>