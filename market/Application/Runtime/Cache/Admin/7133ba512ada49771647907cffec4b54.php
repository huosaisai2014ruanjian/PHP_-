<?php if (!defined('THINK_PATH')) exit();?><div class="pageHeader">
	<form onsubmit="return navTabSearch(this);" method="post">
	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>
					需求内容：<input type="text" id="text" name="sousuobs"/>
				</td>
			</tr>
		</table>
		<div class="subBar">
			<ul>
				<li><a href="#" class="button" target='navTab' class='add button' name='submitbs' id="submitbs"><span name='button'>搜索</span></a></li>
			</ul>
		</div>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="/index.php/Admin/Bid/add" target="dialog"><span>添加</span></a></li>
			<li><a class="delete" href="/index.php/Admin/Bid/deletetb/id/{sid_user}" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a class="edit" href="/index.php/Admin/Bid/xg/id/{sid_user}" target="dialog"><span>修改</span></a></li>
		</ul>
	</div>
</div>

	<table class="list" width="98%" targetType="navTab" asc="asc" desc="desc" layoutH="163">
		<thead>
			<tr>
				<th>需求</th>
				<th>需求用户</th>
				<th>委托时间</th>
				<th>投标状态</th>
				<th>投标人</th>
				<th>投标时间</th>
				<th>投标人反馈</th>
				<th>操作</th>
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr rel="<?php echo ($d["id"]); ?>" target="sid_user">
				<td><?php echo ($d["xuqiu"]); ?></td>
				<td><?php echo ($d["xuser"]); ?></td>
				<td><?php echo ($d["wtime"]); ?></td>
				<td><?php echo ($d["zhuangtai"]); ?></td>
				<td><?php echo ($d["tuser"]); ?></td>
				<td><?php echo ($d["ttime"]); ?></td>
				<td><?php echo ($d["fankui"]); ?></td>
				<td>
					<a href="/index.php/Admin/Bid/addfk" class="add" target="navTab">记录</a>
					<a class="delete" href="/index.php/Admin/Bid/deletetb/id/<?php echo ($d["id"]); ?>" target="navTab">删除</a>
					<a class="delete" href="/index.php/Admin/Bid/xg/id/<?php echo ($d["id"]); ?>" target="navTab">修改</a>
				</td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>

<div class="panelBar" style="position:absolute;bottom:0;right:0;width:100%;">
		<div class="pages">
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
				<option value="20">20</option>
				<option value="50">50</option>
				<option value="100">100</option>
				<option value="200">200</option>
			</select>
			<span>条，共--条</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="200" numPerPage="20" pageNumShown="10" currentPage="1"></div>
</div>


<script>
	var submit=document.getElementsByName('submitbs')[0];
	var sousuo=document.getElementsByName('sousuobs')[0];
	var data="/index.php/Admin/Bid/bid";
	sousuo.onclick=function(){
		this.value='';
	}
	submit.onmouseover=function(){
	data="/index.php/Admin/Bid/bsearch?condition="+sousuo.value;
	this.href=data;
	}
</script>