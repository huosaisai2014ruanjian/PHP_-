<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" method="post" >

</form>
<body >
	<div class="gridThead" style="position: relative; left: 0px;">
		<div class="gridScroller" layouth="0" style="width: 100%; height:auto; overflow: auto;">
			<div class="gridTbody">
						<div class="pageContent" style="height:auto;">
							<div class="panelBar">
								<ul class="toolBar">
									<li><a class="add" href="/index.php/Admin/Information/add" target="navTab" ><span>添加</span></a></li>
									<li class="line">line</li>
									<li><a class="delete" href="/index.php/Admin/Information/del?id={sid_user}" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
									<li class="line">line</li>
									<li><a class="edit" href="/index.php/Admin/Information/edit?id={sid_user}" target="navTab"><span>修改</span></a></li>
								</ul>
							</div>
						</div>
							<table class="table" width="100%" layoutH="0">
							<thead>
								<tr>
									<th>题目</th>
									<th>简介</th>
									<th>详情</th>
									<th>时间</th>
									<th>标签</th>
								</tr>
								</thead>
								<tbody>
								<?php if(is_array($zinf)): $i = 0; $__LIST__ = $zinf;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><tr rel="<?php echo ($i["id"]); ?>" target="sid_user">
									<td><?php echo ($i["title"]); ?></td>
									<td><?php echo ($i["summary"]); ?></td>
									<td><?php echo ($i["content"]); ?></td>
									<td><?php echo ($i["time"]); ?></td>
									<td><?php echo ($i["tag"]); ?></td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
								</tbody>
								</table>
		</div>
	
</div>
</div>


</body>
</html>