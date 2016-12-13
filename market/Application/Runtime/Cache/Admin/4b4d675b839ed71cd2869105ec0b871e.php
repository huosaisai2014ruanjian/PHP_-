<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" method="post" action="/index.php/Admin/Yhgl/index/">
	<input type="hidden" name="status" value="${param.status}">
	<input type="hidden" name="keywords" value="${param.keywords}">
	<input type="hidden" name="pageNum" value="1">
	<input type="hidden" name="numPerPage" value="${model.numPerPage}">
	<input type="hidden" name="orderField" value="${param.orderField}">
</form>

<div class="pageHeader" id="yhgl_indexid" >
<form method="post" >
	<div class="searchBar">
			用户姓名：
			<input type="text" id="text" name="sousuo" value="请输入搜索内容"/>
		<div class="subBar">
			<ul>
				<li>
				<a href="#" class="button" target='navTab' class='add button' name='submit' id="submit"><span name='button'>搜索</span></a>
				</li>
			</ul>
		</div>
	</div>
</form>

	<hr><a href="/code/index.php/Admin/Consultant/lists" target="navTab" class="add button">
	<span name="button">顾问列表</span></a>
	<a href="/code/index.php/Admin/Authenticate/lists" target="navTab" class="add button">
	<span name="button">达人列表</span></a>
	<a href="/code/index.php/Admin/Tag2/lists" target="navTab" class="add button">
	<span name="button">标签列表</span>
	<a href="/code/index.php/Admin/Yhgl/ban" target="navTab" class="add button">
	<span name="button">封号用户</span></a> 
</div> 
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="/code/index.php/Admin/Yhgl/add" target="navTab"><span>添加</span></a></li>
			<li><a class="delete" href="/code/index.php/Admin/Yhgl/del/id/{sid_user}" target="ajaxTodo" title="确定要删除吗？" warn="请选择一个用户"><span>删除</span></a></li>
			<li><a class="edit" href="/code/index.php/Admin/Yhgl/edit?id={sid_user}" target="navTab" warn="请选择一个用户"><span>修改</span></a></li>		
		</ul>
	</div>
	<table class="list" width="98%" targetType="navTab" asc="asc" desc="desc" layoutH="163" >
		<thead>
			<tr>
				<th>用户姓名</th>
				<th>手机号</th>
				<th>认证状态</th>
				<th>操作</th>
			</tr>	
		</thead>
		<tbody>
			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="<?php echo ($d["id"]); ?>">
					<td><?php echo ($d["name"]); ?></td>
					<td><?php echo ($d["tel"]); ?></td>
					<td><?php echo ($d["authenticate"]); ?></td>
					<td>
						<a href="/code/index.php/Admin/Yhgl/lists?id=<?php echo ($d["id"]); ?>" target="navTab" class="add button"><span>详情</span></a>
						<a href="/code/index.php/Admin/Yhgl/jinggao?id=<?php echo ($d["id"]); ?>" target="navTab" class="add button"><span>警告</span></a>
						<a href="/code/index.php/Admin/Yhgl/fenghao?id=<?php echo ($d["id"]); ?>" target="navTab" class="add button"><span>封号</span></a>
						<a href="/code/index.php/Admin/Echeck/echeck?id=<?php echo ($d["id"]); ?>" target="navTab" class="add button"><span>经验查看</span></a>
					</td>
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
<script>
	var up=document.getElementsByName('up')[0];
	var down=document.getElementsByName('down')[0];
	var submit=document.getElementsByName('submit')[0];
	var sousuo=document.getElementsByName('sousuo')[0];
	var data="/code/index.php/Admin/Yhgl/index";
	sousuo.onclick=function(){
		this.value='';
	}
	submit.onmouseover=function(){	
	data="/code/index.php/Admin/Yhgl/search?condition="+sousuo.value;
	this.href=data;
	}
</script>