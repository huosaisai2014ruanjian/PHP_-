<?php if (!defined('THINK_PATH')) exit();?><style>

</style>
<body>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="/index.php/Admin/Consultant/upload" target="dialog" class="add button"><span>添加</span></a></li>
			<li><a class="delete" href="/index.php/Admin/Consultant/del?id={sid_user}" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a class="edit" href="/index.php/Admin/Consultant/edit?id={sid_user}" target="dialog"><span>修改</span></a></li>			
		</ul>
	</div>
	<table class="table" width="100%" layoutH="90">
	<thead>
		<tr>
			<th>顾问编号</th>
			<th>顾问类别</th>
			<th>证件照片</th>
			<th>名片照片</th>
		</tr>
	</thead>
	<tbody>
		<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr style="height: 75px;" target="sid_user" rel="<?php echo ($d["id"]); ?>">
				<td ><?php echo ($d["id"]); ?></td>
				<td ><?php echo ($d["sort"]); ?></td>
				<td ><img src="/Uploads/Uploads/advistor/<?php echo ($d["pphoto"]); ?>" style="height: 100px;width: 100px;"/></td>
				<td ><img src="/Uploads/Uploads/advistor/<?php echo ($d["bphoto"]); ?>" style="height: 100px;width: 100px;"/></td>
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
</body>
</html>