<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" method="post" action="/index.php/Admin/Rstag/index/">
	<input type="hidden" name="status" value="${param.status}">
	<input type="hidden" name="keywords" value="${param.keywords}">
	<input type="hidden" name="pageNum" value="1">
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>">
	<input type="hidden" name="orderField" value="${param.orderField}">
</form>

<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="/code/index.php/Admin/Rstag/add" target="dialog"><span>添加</span></a></li>
			<li><a class="delete" href="/code/index.php/Admin/Rstag/del?id={sid_user}" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a class="edit" href="/code/index.php/Admin/Rstag/edit?id={sid_user}" target="dialog"><span>修改</span></a></li>
			<li class="line">line</li>
		</ul>
	</div>
</div>

<table class="table" width="100%" layoutH="138">
		<?php static $num=1;?>
		<thead>
			<tr>
				<th>ID</th>
				<th>标签名称</th>
				<th>排序</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($inf)): $i = 0; $__LIST__ = $inf;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><tr rel="<?php echo ($i["id"]); ?>" target="sid_user">
				<td><?php echo ($i["id"]); ?></td>
				<td><?php echo ($i["tag"]); ?></td>
				<td><?php echo ($i["od"]); ?></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
</table>
		
<div class="panelBar">
		<div class="pages">
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
				<option value="20">20</option>
				<option value="2">2</option>
				<option value="50">50</option>
				<option value="100">100</option>
				<option value="200">200</option>
			</select>
			<span>条，共<?php echo ($totalCount); ?>条</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="20" currentPage="<?php echo ($currentPage); ?>"></div>

	</div>