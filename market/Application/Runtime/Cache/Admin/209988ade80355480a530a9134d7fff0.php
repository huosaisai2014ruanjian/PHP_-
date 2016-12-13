<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" method="post" action="/index.php/Admin/Gonglue/index/" >
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
									<li><a class="add" href="/index.php/Admin/GonglueInfo/add" target="navTab" ><span>添加</span></a></li>
									<li class="line">line</li>
									<li><a class="delete" href="/index.php/Admin/GonglueInfo/del?id={sid_user}" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
									<li class="line">line</li>
									<li><a class="edit" href="/index.php/Admin/GonglueInfo/edit?id={sid_user}" target="navTab"><span>修改</span></a></li>
									<li class="line">line</li>
									<li><a class="edit" href="/index.php/Admin/GonglueInfo/show?id={sid_user}" target="dialog"><span>详情</span></a></li>
								</ul>
							</div>
						</div>
							<table class="table" width="100%" layoutH="0">
							<thead>
								<tr>
									<th>题目</th>
									<th>简介</th>
								<!-- 	<th>详情</th> -->
									<th>时间</th>
									<th>标签</th>
									<th>分类</th>
								</tr>
								</thead>
								<tbody>
								<?php if(is_array($gonglueInfolist)): $i = 0; $__LIST__ = $gonglueInfolist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><tr rel="<?php echo ($i["id"]); ?>" target="sid_user">
										<td><?php echo ($i["title"]); ?></td>
										<td><?php echo ($i["summary"]); ?></td>
										<!-- <td><?php echo (htmlspecialchars_decode($i["content"])); ?></td> -->
										<td><?php echo ($i["time"]); ?></td>
										<td><?php echo ($i["tag"]); ?></td>
										<td><?php echo ($i["gongluetypeid"]); ?></td>
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