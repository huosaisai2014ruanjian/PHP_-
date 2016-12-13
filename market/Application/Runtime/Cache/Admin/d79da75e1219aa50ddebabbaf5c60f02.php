<?php if (!defined('THINK_PATH')) exit();?>
<form class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);" novalidate="novalidate" action="/index.php/Admin/LpType/editTag" method="post">
	<div class="pageFormContent nowrap" layouth="97">
        <input type="hidden" name="id" value="<?php echo ($t["id"]); ?>"/> 
        <input type="hidden" name="type" value="<?php echo ($type); ?>"/> 
        <dl>
            <dt>标签名称:</dt>
            <dd>
                <input type="text" name="name" class="required" value="<?php echo ($t["name"]); ?>"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>排序:</dt>
            <dd>
                <input type="text" name="od" class="digits" value="<?php echo ($t["od"]); ?>"/>
            </dd>
        </dl>
    </div>
    <div class="formBar">
        <ul>
            <li>
                <div class="buttonActive"><div class="buttonContent"><button type="submit" name="submit">修改</button></div></div>
            </li>
        </ul>
    </div>
</form>