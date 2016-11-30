<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" method="post" action="/index.php/Admin/Gonglue/index/">
	<input type="hidden" name="status" value="${param.status}">
	<input type="hidden" name="keywords" value="${param.keywords}">
	<input type="hidden" name="pageNum" value="1">
	<input type="hidden" name="numPerPage" value="${numPerPage}">
	<input type="hidden" name="orderField" value="${param.orderField}">
</form>

<div class="pageContent" style="height:auto;">
<div class="tabs" currentindex="1" eventtype="click">
	<div class="tabsHeader">
				<div class="tabsHeaderContent">
				<ul>
					<li><a href="#"><span>百科</span></a></li>
					<li><a href="#"><span>政策</span></a></li>
																	
				</ul>
				</div>
	</div>
	<div class="tabsContent" style="height:auto; clear:both;" >
				<div inited="1000">
				<div class="gridThead" style="position: relative; left: 0px; height:auto">
				<!-- 百科 -->
					<div class="pageContent">
						<div class="panelBar">
							<ul class="toolBar">
								<li><a class="add" href="/index.php/Admin/Gonglue/badd" target="dialog"><span>添加</span></a></li>
								<li><a class="delete" href="/index.php/Admin/Gonglue/bdels?id={sid_user}" target="ajaxTodo" title="确定要删除吗?"><span>删除分类</span></a></li>
								<li><a class="edit" href="/index.php/Admin/Gonglue/bedits?id={sid_user}" target="dialog"><span>修改分类</span></a></li>
								<!-- <li><a class="icon" href="/index.php/Admin/Gonglue/blists?fenlei={sid_user}" target="dialog"><span>查看</span></a></li> -->

								<li class="line">line</li>
							</ul>
						</div>
					</div>
					<table class="table" width="100%" layoutH="0">
						<thead><tr><th><h1>分类</h1></th></tr></thead>
						<tbody>
						
						<?php if(is_array($bresult)): $i = 0; $__LIST__ = $bresult;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><tr rel="<?php echo ($r["id"]); ?>" target="sid_user">
							<td><?php echo ($r["title"]); ?></td>
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
			<span>条，共<?php echo ($totalCount_B); ?>条</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount_B); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="20" currentPage="<?php echo ($currentPage); ?>"></div>

	</div>
					<!-- 百科 -->
			    </div>
			    </div>
		    	<div inited="1000">
				<div class="gridThead" style="position: relative; left: 0px; height:auto">
				<div class="gridTbody">
				<!-- 政策 -->
				 <div class="pageContent" style="height:auto;">
				 <div class="panelBar">
					<ul class="toolBar">
						<li><a class="add" href="/index.php/Admin/Gonglue/zadd" target="dialog"><span>添加</span></a></li>
						<li><a class="delete" href="/index.php/Admin/Gonglue/zdels?id={sid_user}" target="ajaxTodo" title="确定要删除吗?"><span>删除分类</span></a></li>
						<li><a class="edit" href="/index.php/Admin/Gonglue/zedits?id={sid_user}" target="dialog"><span>修改分类</span></a></li>
						<!-- <li><a class="icon" href="/index.php/Admin/Gonglue/zlists?fenlei={sid_user}" target="dialog"><span>查看</span></a></li> -->

						<li class="line">line</li>
					</ul>
				</div>
				</div>
				<table class="table" width="100%" layoutH="0">
				<thead><tr><th><h1>分类</h1></th></tr></thead>
				<tbody>
				
				<?php if(is_array($zresult)): $i = 0; $__LIST__ = $zresult;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><tr rel="<?php echo ($r["id"]); ?>" target="sid_user">
					<td><?php echo ($r["title"]); ?></td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			 	
				</tbody>
				</table>
				<!--政策 -->
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
			<span>条，共<?php echo ($totalCount_Z); ?>条</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount_Z); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="20" currentPage="<?php echo ($currentPage); ?>"></div>

	</div>
	</div>
		        </div>
		        </div>
			    </div>
	 </div>
     </div>
     </div>
														
										
</body>
</html>