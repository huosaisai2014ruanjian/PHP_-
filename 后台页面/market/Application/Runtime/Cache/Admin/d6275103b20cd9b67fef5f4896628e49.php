<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
	#il{
       height:400px;
	}
	#il .t{
		width:200px;
		text-align: center;
	}
</style>
<div class="pageContent j-resizeGrid">
	<div class="panelBar">
		<ul class="toolBar">
			<li class=""><a class="add" href="<?php echo U('admin/messageManage/index');?>" target="navTab"><span>留言管理</span></a></li>
		</ul>
	</div>
	<form method="post" action="/market/index.php/Admin/Message/store" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);" >
		<div class="pageFormContent" layouth="62" style="height: 462px; overflow: auto;">

	<table  id="il" class="list" width="98%" targetType="navTab" asc="asc" desc="desc">
		<tbody>
			<tr >
			<td class="t">商品ID</td>
			<td>
                <select name="goods_id">
				<?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>"><?php echo ($vo['id']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </td>
		</tr>
		<tr>
			<td class="t">发送用户ID</td>
			<td>
				<select name="fromuser_id">
					<?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>" ><?php echo ($vo['id']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="t">接收用户ID</td>
			<td>
				<select name="touser_id">
					<?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>" ><?php echo ($vo['id']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="t">留言内容</td>
			<td><textarea name="content" cols="80" rows="5" class="required textInput" alt="请输入留言内容" id="name_838"></textarea>
				<label class="alt" for="name_838" style="width: 127px; top: 5px; left: 130px; opacity: 1;">请输入留言内容</label>

			</td>

		</tr>
		<tr>
			<td class="t">所属ID</td>
			<td>
				<select name="belong_id">
					<?php if(is_array($message)): $i = 0; $__LIST__ = $message;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>" ><?php echo ($vo['id']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="t"></td>
			<td></td>
			<td class="t"></td>
			<td><input type="submit" value="添加"></td>
		</tr>
		</tbody>
	</table>
	</div>
</form>
<!--表单提交开始-->
	<!--<p>-->
	<!--<label>部门编号：</label>-->
	<!--<input type="text" readonly="readonly" value="" name="dwz_orgLookup.orgNum" class="textInput readonly">-->
	<!--</p>-->
	<!--<p>-->
	<!--<label>识 别 码：</label>-->
	<!--<input name="code" class="digits textInput" type="text" size="30" alt="请输入数字" id="code_1503">-->
	<!--<label class="alt" for="code_1503" style="width: 177px; top: 5px; left: 130px; opacity: 1;">请输入数字</label></p>-->
	<!--<p>-->
	<!--<label>客户类型：</label>-->
	<!--<div class="combox"><div id="combox_5080983" class="select"><a href="javascript:" class="required" name="type" value="公司">公司</a><select name="type" class="required">-->
	<!--<option value="">请选择</option>-->
	<!--<option value="个人">个人</option>-->
	<!--<option value="公司" selected="">公司</option>-->
	<!--</select></div></div>-->
	<!--</p>-->

	<!--表单提交结束-->