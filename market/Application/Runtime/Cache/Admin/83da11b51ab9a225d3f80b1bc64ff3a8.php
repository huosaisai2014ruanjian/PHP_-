<?php if (!defined('THINK_PATH')) exit();?>
<form id="pagerForm" method="post" action="LpType/ssbqgl">
	<input type="hidden" name="status" value="${param.status}">
	<input type="hidden" name="keywords" value="${param.keywords}" />
	<input type="hidden" name="pageNum" value="1" />
	<input type="hidden" name="numPerPage" value="${model.numPerPage}" />
	<input type="hidden" name="orderField" value="${param.orderField}" />
</form>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="/index.php/Admin/LpType/addTag?type=<?php echo ($type); ?>" target="dialog"><span>添加</span></a></li>
			<li><a class="delete" href="/index.php/Admin/LpType/delTag?id={id}" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a class="edit" href="/index.php/Admin/LpType/editTag?type=<?php echo ($type); ?>&id={id}" target="dialog"><span>修改</span></a></li>
			<li class="line">line</li>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="138">
		<?php static $num=1;?>
		<thead>
			<tr>
				<th width="80">ID</th>
				<th>标签名称</th>
				<th width="100">排序</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($tag)): $i = 0; $__LIST__ = $tag;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><tr rel="<?php echo ($i["id"]); ?>" target="id">
					<td><?php echo ($i["id"]); ?></td>
					<td><?php echo ($i["name"]); ?></td>
					<td><?php echo ($i["od"]); ?></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
				<option value="20">20</option>
				<option value="50">50</option>
				<option value="100">100</option>
				<option value="200">200</option>
			</select>
			<span>条，共${totalCount}条</span>
		</div>

		<div class="pagination" targetType="navTab" totalCount="200" numPerPage="20" pageNumShown="10" currentPage="1"></div>

	</div>
</div>