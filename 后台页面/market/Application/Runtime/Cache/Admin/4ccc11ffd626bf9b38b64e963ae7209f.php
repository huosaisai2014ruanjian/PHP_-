<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" method="post" action="/market/index.php/Admin/Transaction/index/"></form>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="/market/index.php/Admin/Transaction/add" target="navTab"><span>添加</span></a></li>
			<li><a class="delete" href="/market/index.php/Admin/Transaction/destroy/id/{sid_user}" target="ajaxTodo" title="确定要删除吗？" warn="请选择一个用户"><span>删除</span></a></li>
			<li><a class="edit" href="/market/index.php/Admin/Transaction/edit/id/{sid_user}" target="navTab" warn="请选择一个用户"><span>修改</span></a></li>				
		</ul>
	</div>
	<table class="list" width="98%" targetType="navTab" asc="asc" desc="desc" layoutH="70" >
		<thead>
			<tr>
				<th>id</th>
				<th>卖家id</th>
				<th>买家id</th>
				<th>商品id</th>
				<th>商品状态</th>
			</tr>	
		</thead>
		<tbody>

			<?php if(is_array($results)): $i = 0; $__LIST__ = $results;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="<?php echo ($d["id"]); ?>">
					<td><?php echo ($d["id"]); ?></td>
					<td><?php echo ($d["seller_id"]); ?></td>
					<td><?php echo ($d["buyer_id"]); ?></td>
					<td><?php echo ($d["goods_id"]); ?></td>
					<td><?php echo ($d["condition"]); ?></td>				
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
	var data="/market/index.php/Admin/Transaction/index";
	sousuo.onclick=function(){
		this.value='';
	}
	submit.onmouseover=function(){	
	data="/market/index.php/Admin/Transaction/search?condition="+sousuo.value;
	this.href=data;
	}
</script>