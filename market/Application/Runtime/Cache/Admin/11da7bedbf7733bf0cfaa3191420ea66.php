<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" method="post" action="/index.php/Admin/Lpgl/index/">
	<input type="hidden" name="status" value="${param.status}">
	<input type="hidden" name="keywords" value="${param.keywords}">
	<input type="hidden" name="pageNum" value="1">
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>">
	<input type="hidden" name="orderField" value="${param.orderField}">
</form>
<body >
	<div class="gridThead" style="position: relative; left: 0px;">
		<div class="gridScroller" layouth="0" style="width: 100%; height:auto; overflow: auto;">
			<div class="gridTbody">
						<div class="pageContent" style="height:auto;">
							<div class="panelBar">
								<ul class="toolBar">
									<li><a class="add" href="/index.php/Admin/Lpgl/addLp" target="navTab" ><span>添加</span></a></li>
									<li class="line">line</li>
									<li><a class="delete" href="/index.php/Admin/Lpgl/del?id={sid_user}" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
									<li class="line">line</li>
									<li><a class="edit" href="/index.php/Admin/Lpgl/edit?id={sid_user}" target="navTab"><span>修改</span></a></li>
									<li class="line">line</li>
									<li><a class="edit" href="/index.php/Admin/Lpgl/show?id={sid_user}" target="dialog"><span>详情</span></a></li>
								</ul>
							</div>
						</div>
							<table class="table" width="100%" layoutH="0">
							<thead>
								<tr>
									<th>房源名称</th>
									<th>工位数</th>
									<th>装修程度</th>
									<th>面积</th>
									<th>入驻时间</th>
									<th>所在楼层</th>
									<th>价格包含</th>
									<th>操作</th>
								</tr>
								</thead>
								<tbody>
								<?php if(is_array($zinf)): $i = 0; $__LIST__ = $zinf;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><tr rel="<?php echo ($i["id"]); ?>" target="sid_user">
									<td><?php echo ($i["title"]); ?></td>
									<td><?php echo ($i["summary"]); ?></td>
									<td><?php echo ($i["time"]); ?></td>
									<td><?php echo ($i["tag"]); ?></td>
									<td><?php echo ($i["time"]); ?></td>
									<td><?php echo ($i["tag"]); ?></td>
									<td><?php echo ($i["time"]); ?></td>
									<td>删除<br />
										查看详情<br />
										选择楼盘
									</td>
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
	</div>
		</div>
	
</div>
</div>


</body>
</html>