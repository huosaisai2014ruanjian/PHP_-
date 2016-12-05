<?php if (!defined('THINK_PATH')) exit();?><form action="/market/index.php/Admin/Category/doAdd2" method="post" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);" novalidate="novalidate">
   <input type="hidden" name="id" />
    一级分类：
     <select name="id">
     <option selected="selected"  value="0">请选择</option>
	     <?php if(is_array($cat)): $i = 0; $__LIST__ = $cat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($selectpid) == $vo["id"]): ?><option selected="selected"  value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option>
          <?php else: ?>
            <option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
     </select>
     </br>
     </br>
     二级分类：<input type="input" name="name" class="required" alt="请输入添加的二级分类/><span class="info">请输入添加的二级分类</span></br></br>
     <div class="formBar" style="position:absolute;bottom:0;right:0;width:100%;">
         <ul>
        <li><div class="buttonActive"><div class="buttonContent"><button type="submit" name="submit">添加</button></div></div></li>
        <li>
          <div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
        </li>
      </ul>
     </div>
	 
   </form>