<?php if (!defined('THINK_PATH')) exit();?>
	<form action="/index.php/Admin/Tag2/edit" method="post" class="pageForm required-validate" >
	<div class="pageFormContent nowrap" layoutH="97">
		</br></br>
		<dl>
			<dt>标签名称:</dt>
			<dd>
				<?php if(is_array($t)): $i = 0; $__LIST__ = $t;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?><input type="hidden" name="id" value="<?php echo ($t["id"]); ?>"/>
					<input type="text" name="name" value="<?php echo ($t["name"]); ?>" class="required" /><?php endforeach; endif; else: echo "" ;endif; ?>
			</dd>
		</dl>		
	</div>
	<div class="formBar">
		<ul>
			<li>
				<div class="buttonActive">
					<div class="buttonContent">
						<button type="submit" name="submit">保存</button>
					</div>
				</div>
			</li>
			<li>
				<div class="button">
					<div class="buttonContent">
						<button type="button" class="close">取消</button>
					</div>
				</div>
			</li>
		</ul>
	</div>	
	</form>