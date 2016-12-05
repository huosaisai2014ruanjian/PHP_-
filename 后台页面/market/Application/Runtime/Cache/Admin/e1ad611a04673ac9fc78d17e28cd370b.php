<?php if (!defined('THINK_PATH')) exit();?>
<form id="pagerForm" method="post" action="/market/index.php/Admin/Message/index">
	<input type="hidden" name="status" value="${param.status}">
	<input type="hidden" name="keywords" value="${param.keywords}">
	<input type="hidden" name="pageNum" value="1">
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>">
	<input type="hidden" name="orderField" value="${param.orderField}">
</form>


<div class="pageContent j-resizeGrid">
	<div class="panelBar">
		<ul class="toolBar">
			<li class=""><a class="add" href="<?php echo U('admin/message/create');?>" target="navTab"><span>添加</span></a></li>
			<li class=""><a class="delete" href="/market/index.php/Admin/Message/destroy?id={sid_user}"target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li class=""><a class="edit" href="/market/index.php/Admin/Message/show?id={sid_user}" target="navTab"><span>修改</span></a></li>
			<li class="line">line</li>
			<li class=""><a class="icon" href="/market/index.php/Admin/Message/content?id={sid_user}" target="dialog" ><span>留言内容</span></a></li>
		</ul>
	</div>
		<table class="list" width="98%" targetType="navTab" asc="asc" desc="desc" layoutH="70" >
		<thead>
			<tr>
			    <th>留言ID</th>
				<th>商品ID</th>
				<th>发送用户ID</th>
				<th>接收用户ID</th>
				<th>留言内容</th>
				<th>所属ID</th>
				<th>留言时间</th>
			</tr>	
		</thead>
		<tbody>
			   <?php if(is_array($results)): $i = 0; $__LIST__ = $results;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="<?php echo ($vo['id']); ?>">
				    <td><?php echo ($vo['id']); ?></td>
					<td><?php echo ($vo['goods_id']); ?></td>
					<td><?php echo ($vo['fromuser_id']); ?></td>
					<td><?php echo ($vo['touser_id']); ?></td>
					<td><?php echo ($vo['content']); ?></td>
					<td><?php echo ($vo['belong_id']); ?></td>
					<td><?php echo ($vo['time']); ?></td>
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
			<span>条，共<?php echo ($totalCount); ?>条</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="20" currentPage="<?php echo ($currentPage); ?>"></div>
	</div>  
</div>