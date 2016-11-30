<?php if (!defined('THINK_PATH')) exit();?>
<form class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone());" novalidate="novalidate" action="/index.php/Admin/LpType/addTag" method="post">
	<div class="pageFormContent nowrap" layouth="97">
        <input type="hidden" name="type" value="<?php echo ($type); ?>"/> 
        <dl>
            <dt>标签名称:</dt>
            <dd>
                <input type="text" name="name" class="required" value=""/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>排序:</dt>
            <dd>
                <input type="text" name="od" class="digits" value=""/>
            </dd>
        </dl>
    </div>
    <div class="formBar">
        <ul>
            <li>
                <div class="buttonActive"><div class="buttonContent"><button type="submit" name="submit">添加</button></div></div>
            </li>
        </ul>
    </div>
</form>