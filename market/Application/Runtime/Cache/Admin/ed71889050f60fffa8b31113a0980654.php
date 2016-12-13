<?php if (!defined('THINK_PATH')) exit();?><body >
 	<div class="pageContent">
		<div class="tabs" currentindex="1" eventtype="click">
			<div class="tabsHeader">
			 	<div class="tabsHeaderContent">
							<ul>
								<li ><a href="#"><span>查看资讯</span></a></li>
								<li ><a href="#"><span>查看标签</span></a></li>
								<li ><a href="#"><span>查看攻略</span></a></li>
							</ul>
				</div>
			</div>
				<div class="tabsContent" style="height:auto; clear:both;" >
							<div inited="1000">
			 				 	<div class="gridThead" style="position: relative; left: 0px;">
				 				 	<div class="gridScroller" layouth="0" style="width: 100%; height:auto; overflow: auto;">
										<div class="gridTbody">
													<div class="pageContent" style="height:auto;">
														<div class="panelBar">
															<ul class="toolBar">
																<li><a class="add" href="/index.php/Admin/Information/add" target="navTab" ><span>添加</span></a></li>
																<li><a class="delete" href="/index.php/Admin/Information/del?id={sid_user}" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
																<li><a class="edit" href="/index.php/Admin/Information/edit?id={sid_user}" target="navTab"><span>修改</span></a></li>
																<li class="line">line</li>
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
			 				</div>
						   <div inited="1000">
			 				 	<div class="gridThead" style="position: relative; left: 0px;">
				 				 	<div class="gridScroller" layouth="0" style="width: 100%; height:100%; overflow: auto;">
										<div class="gridTbody">
										<!-- ！！！！！！！！！！！！！！！ -->

											<div class="pageContent" style="height:auto;">
												<div class="panelBar">
													<ul class="toolBar">
														<li><a class="add" href="/index.php/Admin/Zxtag/add" target="dialog"><span>添加</span></a></li>
														<li><a class="delete" href="/index.php/Admin/Zxtag/del?id={sid_user}" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
														<li><a class="edit" href="/index.php/Admin/Zxtag/edit?id={sid_user}" target="dialog"><span>修改</span></a></li>
														<li class="line">line</li>
													</ul>
												</div>
											</div>
												<table class="table" width="100%" layoutH="0">
												<thead>
													<tr>
														<th>序号</th>
														<th>标签名称</th>
														
													</tr>
													</thead>
													<?php static $num=1;?>
													<tbody>
													<?php if(is_array($binf)): $i = 0; $__LIST__ = $binf;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><tr rel="<?php echo ($i["id"]); ?>" target="sid_user">
														<td><?php echo $num;$num=$num+1;?></td>
														<td><?php echo ($i["tag"]); ?></td>
													</tr><?php endforeach; endif; else: echo "" ;endif; ?>
													</tbody>
													
												</table>

										<!-- ！！！！！！！！！！！！！！！！！！！！ -->
												
										</div>
									</div>
			 				 	</div>
			 				</div>
						    <div inited="1000">
			 				 	<div class="gridThead" style="position: relative; left: 0px;">
				 				 	<div class="gridScroller" layouth="0" style="width: 100%; height:100%; overflow: auto;">
										<div class="gridTbody">
												<!--000000000000000000000 !!!!!!!!!!!!!!! -->
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
															
															<!--2222222222222222222222 百科 -->
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="/index.php/Admin/Gonglue/badd" target="dialog"><span>添加</span></a></li>
			<li><a class="delete" href="/index.php/Admin/Gonglue/bdels?fenlei={sid_user}" target="ajaxTodo" title="确定要删除吗?"><span>删除分类</span></a></li>
			<li><a class="edit" href="/index.php/Admin/Gonglue/bedits?fenlei={sid_user}" target="dialog"><span>修改分类</span></a></li>
			<li><a class="icon" href="/index.php/Admin/Gonglue/blists?fenlei={sid_user}" target="dialog"><span>查看</span></a></li>

			<li class="line">line</li>
		</ul>
	</div>
</div>
<table class="table" width="100%" layoutH="0">
	<thead><tr><th><h1>分类</h1></th></tr></thead>
	<tbody>
	
	<?php if(is_array($bresult)): $i = 0; $__LIST__ = $bresult;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><tr rel="<?php echo ($r["fenlei"]); ?>" target="sid_user">
	<td><?php echo ($r["fenlei"]); ?></td>
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
 	
	</tbody>
	</table>
															<!--2222222222222222222222 百科 -->
															</div>
															 </div>
															 	 <div inited="1000">
															<div class="gridThead" style="position: relative; left: 0px; height:auto">
															<div class="gridTbody">
															 <!-- 2222222222222政策 -->
															 <div class="pageContent" style="height:auto;">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="/index.php/Admin/Gonglue/zadd" target="dialog"><span>添加</span></a></li>
			<li><a class="delete" href="/index.php/Admin/Gonglue/zdels?fenlei={sid_user}" target="ajaxTodo" title="确定要删除吗?"><span>删除分类</span></a></li>
			<li><a class="edit" href="/index.php/Admin/Gonglue/zedits?fenlei={sid_user}" target="dialog"><span>修改分类</span></a></li>
			<li><a class="icon" href="/index.php/Admin/Gonglue/zlists?fenlei={sid_user}" target="dialog"><span>查看</span></a></li>

			<li class="line">line</li>
		</ul>
	</div>
</div>
	<table class="table" width="100%" layoutH="0">
	<thead><tr><th><h1>分类</h1></th></tr></thead>
	<tbody>
	
	<?php if(is_array($zresult)): $i = 0; $__LIST__ = $zresult;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><tr rel="<?php echo ($r["fenlei"]); ?>" target="sid_user">
	<td><?php echo ($r["fenlei"]); ?></td>
 	
	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
 	
	</tbody></table>
															 <!-- 22222222222222政策 -->
															 </div></div>
															 </div>
															 </div>
															 </div>
														
															 </div>

												</div>
												</div>
												<!--000000000000000000000 !!!!!!!!!!!!!!! -->
										</div>
									</div>
			 				 	</div>
			 				</div>
				</div>
			
		</div>
	</div>

 	
 </body>
 </html>