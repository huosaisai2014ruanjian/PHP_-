<?php if (!defined('THINK_PATH')) exit();?> 
	<form action="/index.php/Admin/Tel/doadd3" method="post" class="pageForm required-validate" onsubmit="return validateCallback(this,navTabAjaxDone);" novalidate="novalidate">
		<input type="hidden" name="id" />
		用户姓名 电话：<!--<input type="input" name="usertel" class="required phone" alt="请输入用户电话"/><span class="info">请输入用户电话(至少7位)</span>-->
		<select name="id">
			<?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option selected="selected"  value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?>&nbsp;&nbsp;<?php echo ($vo["tel"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
		</select>
		</br></br>
		绑定的400电话：<input type="input" name="bangdingtel" class="required phone" alt="用户绑定的400电话"/><span class="info">用户绑定的400电话(至少7位)</span></br></br>
		<div class="formBar" style="position:absolute;bottom:0;right:0;width:100%;">
      <ul>
        <!--<li><a class="buttonActive" href="javascript:;"><span>保存</span></a></li>-->
        <li><div class="buttonActive"><div class="buttonContent"><button type="submit" name="submit">添加</button></div></div></li>
        <li>
          <div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
        </li>
      </ul>
    </div>
	</form>