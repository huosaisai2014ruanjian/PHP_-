<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" method="post" action="/index.php/Admin/Bid/bid">
	 <input type="hidden" name="status" value="${param.status}">
	 <input type="hidden" name="keywords" value="${param.keywords}" />
	 <input type="hidden" name="pageNum" value="1" />
	 <input type="hidden" name="numPerPage" value="${model.numPerPage}" />
	 <input type="hidden" name="orderField" value="${param.orderField}" />
	 <input type="hidden" name="numPerPage" value="<%= Model.numPerPage %>" />
        <input type="hidden" name="orderField" value="<%= param.orderField %>" />
       <input type="hidden" name="orderDirection" value="<%= param.orderDirection %>" />
</form>

<div class="pageHeader">
	<form onsubmit="return navTabSearch(this);" method="post">
	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>
					需求内容：<input type="text" id="text" name="sousuo"/>
				</td>
			</tr>
		</table>
		<div class="subBar">
			<ul>
				<li><a href="#" class="button" target='navTab' class='add button' name='submit' id="submit"><span name='button'>搜索</span></a></li>
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

<table class="table" width="100%" layoutH="138">
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
		<?php if(is_array($toubiao)): $i = 0; $__LIST__ = $toubiao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr rel="<?php echo ($vo["id"]); ?>" target="sid_user">
				<td><?php echo ($vo["xuqiu"]); ?></td>
				<td><?php echo ($vo["xuser"]); ?></td>
				<td><?php echo ($vo["wtime"]); ?></td>
				<td><?php echo ($vo["zhuangtai"]); ?></td>
				<td><?php echo ($vo["tuser"]); ?></td>
				<td><?php echo ($vo["ttime"]); ?></td>
				<td><?php echo ($vo["fankui"]); ?></td>
				<td>
					<a class="button" href="javascript:;" onclick="alertMsg.info('委托人的400电话为：<?php echo ($vo["xuqiu"]); ?>')"><span>记录</span></a>
					<a href="/index.php/Admin/Bid/addfk" class="add" target="dialog">记录</a>
					<a class="delete" href="/index.php/Admin/Bid/xg/id/<?php echo ($vo["id"]); ?>" target="dialog">修改</a>
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
	var up=document.getElementsByName('up')[0];
	var down=document.getElementsByName('down')[0];
	var submit=document.getElementsByName('submit')[0];
	var sousuo=document.getElementsByName('sousuo')[0];
	var data="/index.php/Admin/Bid/bid";
	sousuo.onclick=function(){
		this.value='';
	}
	submit.onmouseover=function(){
	data="/index.php/Admin/Bid/bsearch?condition="+sousuo.value;
	this.href=data;
	}
</script>