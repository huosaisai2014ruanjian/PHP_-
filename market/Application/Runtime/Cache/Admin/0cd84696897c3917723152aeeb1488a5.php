<?php if (!defined('THINK_PATH')) exit();?>
   <form action="/index.php/Admin/Area/doAdd1" method="post" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);" novalidate="novalidate">
   <input type="hidden" name="id" />
    省区：
     <select name="id">
	   <option value="0" selected="selected">请选择</option>
	     <?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($selectpid) == $vo["id"]): ?><option selected="selected"  value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option>
          <?php else: ?>
            <option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
     </select>
     </br>
     </br>
     市区：<input type="input" name="name" class="required" alt="添加的市区"/><span class="info">请输入添加的市区</span></br></br>
     <div class="formBar" style="position:absolute;bottom:0;right:0;width:98%;">
         <ul>
        <li><div class="buttonActive"><div class="buttonContent"><button type="submit" name="submit">添加</button></div></div></li>
        <li>
          <div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
        </li>
      </ul>
     </div>
	 
   </form>