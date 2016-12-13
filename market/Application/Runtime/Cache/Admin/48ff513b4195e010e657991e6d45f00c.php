<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="/marketsai/Public/menu/css/common.css"/>
<link rel="stylesheet" type="text/css" href="/marketsai/Public/menu/css/main.css"/>
<form id="pagerForm" method="post" action="/marketsai/index.php/Admin/Menu/view">
    <input type="hidden" name="status" value="${param.status}">
    <input type="hidden" name="keywords" value="${param.keywords}">
    <input type="hidden" name="pageNum" value="1">
    <input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>">
    <input type="hidden" name="orderField" value="${param.orderField}">
</form>
<div class="pageContent j-resizeGrid">
    <div class="panelBar">
        <ul class="toolBar">
            <li class=""><a class="add" href="<?php echo U('admin/menu/manage');?>" target="navTab"><span>创建菜单</span></a></li>
        </ul>
    </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <span class="res-info"><?php echo ($vo->name); ?></span>
                        <ul style="margin-left:2em;">
                            <?php $sub_button = $vo->sub_button;?>
                            <?php if(is_array($sub_button)): $i = 0; $__LIST__ = $sub_button;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub_vo): $mod = ($i % 2 );++$i;?><li><?php echo ($sub_vo->name); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        
     </div>