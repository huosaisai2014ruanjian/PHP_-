<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <title>更改绑定</title>
</head>
<body>
   <form method="post" action="/index.php/Admin/Tel/doModi/id/<?php echo ($tels["id"]); ?>" class="pageForm required-validate" onsubmit="return validateCallback(this,navTabAjaxDone);" novalidate="novalidate">
     <input type="hidden" name="id" value="<?php echo ($tels["id"]); ?>" />
     用户姓名电话：
     <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["name"]); ?>&nbsp;&nbsp;&nbsp;<?php echo ($vo["tel"]); endforeach; endif; else: echo "" ;endif; ?>
     </br></br>
     绑定的400电话：
     <input type="input" name="bangdingtel" value="<?php echo ($tels["bangdingtel"]); ?>" class="required phone"/>
     </br>
     </br>
     <div class="formBar" style="position:absolute;bottom:0;right:0;width:100%;">
      <ul>
        <li><div class="buttonActive"><div class="buttonContent"><button type="submit" name="submit">确认修改</button></div></div></li>
        <li>
          <div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
        </li>
      </ul>
    </div>
   </form>

</body>
</html>