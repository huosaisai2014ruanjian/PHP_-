<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" method="post">
</form>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="delete" href="/dcxt/index.php/Admin/Wdxt/deleteanswer?id={sid_user}" target="ajaxTodo" title="确定要删除吗？" warn="请选择一个用户"><span>删除</span></a></li>
			<!-- <li><a class="edit" href="/dcxt/index.php/Admin/Wdxt/answerdetail?id={sid_user}" target="dialog" warn="请选择一个用户"><span>详情</span></a></li>	 -->
			<li><a class="edit" href="/dcxt/index.php/Admin/Wdxt/answerdetail?id={sid_user}" target="dialog" warn="请选择一个用户"><span>答案详情</span></a></li>		
		</ul>
	</div>
	<table class="list" targetType="navTab" asc="asc" desc="desc" layoutH="60" width="98%" >
		<thead width="100px">
			<tr>
				<th >答案</th>
				<th >回答用户类型</th>
			</tr>	
		</thead>
		<tbody width="100px">
			<?php if(is_array($a)): $i = 0; $__LIST__ = $a;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="<?php echo ($a["id"]); ?>" width="100px">
					<td ><p><?php echo (subtext($a["answer"],105)); ?></p></td>
					<td ><?php echo ($a["usertype"]); ?></td>
				</tr>
				<div id="divtest" style="display:none">	<?php echo (subtext($a["answer"],105)); ?></div><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>

	<div class="panelBar" >
		<div class="pages">
			<span>显示</span>
			<select name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
				<option value="20">20</option>
				<option value="50">50</option>
				<option value="100">100</option>
				<option value="200">200</option>
			</select>
			<span>条，共23条</span>
		</div>	
		<div class="pagination" targetType="navTab" totalCount="200" numPerPage="20" pageNumShown="10" currentPage="2"></div>
	</div>
</div>
<!-- <script type="text/javascript">
var p=document.getElementsByTagName('p');
for (var i = p.length - 1; i >= 0; i--) {
	p[i].innerHTML="<?php echo (subtext($a["answer"],105)); ?>";
}

</script> -->