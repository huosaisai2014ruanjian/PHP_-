<?php if (!defined('THINK_PATH')) exit();?><style>
    .pageFormContent dd{
        width:135px;
    }

</style>
<form action="/dcxt/index.php/Admin/Cd/addt" method="post" enctype="multipart/form-data" class="pageForm required-validate">
    <div class="pageFormContent nowrap" layoutH="34">
        <input type="hidden" name="id" />
         <dl>
            <dt>名称：</dt>
            <dd>
            <input type="text" name="cd" class="required" maxlength="15"  alt="添加的菜品名称"/>
            </dd>
        </dl>
         <dl>
            <dt>分类：</dt>
            <dd>
                <select name="typeid" id="typeid">
                    <option value="0" selected="selected">请选择</option>
                    <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><option value="<?php echo ($type["id"]); ?>"><?php echo ($type["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </dd>
        </dl>        
        <dl>
            <dt>图片：</dt>
            <dd>
            <input type="file" name="photo" />
            </dd>
        </dl>
        <dl>
            <dt>原价：</dt>
            <dd>
            <input type="text" name="pprice" class="required" maxlength="8" />
            </dd>
        </dl>
        <dl>
            <dt>现价：</dt>
            <dd>
            <input type="text" name="price" class="required" maxlength="8" />
            </dd>
        </dl>   
    </div>
    <div class="formBar" style="position:absolute;bottom:0;right:0;width:100%;">
        <ul>
            <li>
                <div class="buttonActive">
                    <div class="buttonContent">
                        <button type="submit">保存</button>
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