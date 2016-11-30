<?php if (!defined('THINK_PATH')) exit();?><div class="pageHeader">
	<form onsubmit="return navTabSearch(this);" action="demo_page1.html" method="post">
	<div class="searchBar">
		<!--<ul class="searchContent">
			<li>
				<label>我的客户：</label>
				<input type="text"/>
			</li>
			<li>
			<select class="combox" name="province">
				<option value="">所有省市</option>
				<option value="北京">北京</option>
				<option value="上海">上海</option>
				<option value="天津">天津</option>
				<option value="重庆">重庆</option>
				<option value="广东">广东</option>
			</select>
			</li>
		</ul>
		-->
		<table class="searchContent">
			<tbody><tr>
				<td>
					我的客户：<input type="text" name="keyword" class="textInput">
				</td>
				<td>
					<div class="combox"><div id="combox_2376868" class="select"><a href="javascript:" class="" name="province" value="">所有省市</a><select class="" name="province">
						<option value="">所有省市</option>
						<option value="北京">北京</option>
						<option value="上海">上海</option>
						<option value="天津">天津</option>
						<option value="重庆">重庆</option>
						<option value="广东">广东</option>
					</select></div></div>
				</td>
				<td>
					建档日期：<input type="text" class="date textInput readonly" readonly="true">
				</td>
			</tr>
		</tbody></table>
		<div class="subBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div></li>
				<li><a class="button" href="demo_page6.html" target="dialog" mask="true" title="查询框"><span>高级检索</span></a></li>
			</ul>
		</div>
	</div>
	</form>
</div>
<div class="pageContent j-resizeGrid">
	<div class="panelBar">
		<ul class="toolBar">
			<li class=""><a class="add" href="<?php echo U('admin/messageManage/add');?>" target="navTab"><span>添加</span></a></li>
			<li class=""><a class="delete" href="/market/index.php/Admin/MessageManage/delete?id={sid_user}"target="ajaxTodo" title="确定要删除吗?"> <span>删除</span></a></li>
			<li class=""><a class="edit" href="/market/index.php/Admin/MessageManage/edit?id={sid_user}" target="navTab"><span>修改</span></a></li>
			<li class="line">line</li>
			<li class=""><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targettype="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>
		</ul>
	</div>
		<table class="list" width="98%" targetType="navTab" asc="asc" desc="desc" layoutH="163" >
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
			   <?php if(is_array($message)): $i = 0; $__LIST__ = $message;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="<?php echo ($i); ?>">
				    <td><?php echo ($vo['id']); ?></td>
					<td><?php echo ($vo['goods_id']); ?></td>
					<td><?php echo ($vo['fromuser_id']); ?></td>
					<td><?php echo ($vo['touser_id']); ?></td>
					<td><?php echo ($vo['content']); ?></td>
					<td><?php echo ($vo['belong_id']); ?></td>
					<td><?php echo ($vo['time1']); ?></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
  
	<div class="resizeMarker" style="height:300px; left:57px;display:none;"></div><div class="resizeProxy" style="height:300px; left:377px;display:none;"></div></div>
	<div class="panelBar">
		<div class="pages">
			<span>显示</span>
			<div class="combox"><div id="combox_4451326" class="select"><a href="javascript:" class="" name="numPerPage" value="20">20</a><select class="" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
				<option value="20">20</option>
				<option value="50">50</option>
				<option value="100">100</option>
				<option value="200">200</option>
			</select></div></div>
			<span>条，共${totalCount}条</span>
		</div>

		<div class="pagination" targettype="navTab" totalcount="200" numperpage="20" pagenumshown="10" currentpage="1">
<ul>
	<li class="j-first disabled">
		<a class="first" href="javascript:;" style="display: none;"><span>首页</span></a>
		<span class="first"><span>首页</span></span>
	</li>
	<li class="j-prev disabled">
		<a class="previous" href="javascript:;" style="display: none;"><span>上一页</span></a>
		<span class="previous"><span>上一页</span></span>
	</li>
	<li class="selected j-num"><a href="javascript:;">1</a></li><li class="j-num"><a href="javascript:;">2</a></li><li class="j-num"><a href="javascript:;">3</a></li><li class="j-num"><a href="javascript:;">4</a></li><li class="j-num"><a href="javascript:;">5</a></li><li class="j-num"><a href="javascript:;">6</a></li><li class="j-num"><a href="javascript:;">7</a></li><li class="j-num"><a href="javascript:;">8</a></li><li class="j-num"><a href="javascript:;">9</a></li><li class="j-num"><a href="javascript:;">10</a></li>
	<li class="j-next">
		<a class="next" href="javascript:;"><span>下一页</span></a>
		<span class="next" style="display: none;"><span>下一页</span></span>
	</li>
	<li class="j-last">
		<a class="last" href="javascript:;"><span>末页</span></a>
		<span class="last" style="display: none;"><span>末页</span></span>
	</li>
	<li class="jumpto"><input class="textInput" type="text" size="4" value="1"><input class="goto" type="button" value="确定"></li>
</ul>
</div>

	</div>
</div>