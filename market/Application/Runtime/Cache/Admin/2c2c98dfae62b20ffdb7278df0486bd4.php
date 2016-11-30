<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent j-resizeGrid">
    <div class="panelBar">
        <ul class="toolBar">
            <li class=""><a class="add" href="<?php echo U('admin/system/create');?>" target="navTab"><span>添加</span></a></li>
            <li class=""><a class="delete" href="/market/index.php/Admin/System/destroy?id={sid_user}"target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
            <li class=""><a class="edit" href="/market/index.php/Admin/System/show?id={sid_user}" target="navTab"><span>修改</span></a></li>
            <li class="line">line</li>
            <li class=""><a class="icon" href="/market/index.php/Admin/System/content?id={sid_user}" target="navTab" ><span>系统消息内容</span></a></li>
        </ul>
    </div>
    <table class="list" width="98%" targetType="navTab" asc="asc" desc="desc" layoutH="163" >
        <thead>
        <tr>
            <th>系统消息ID</th>
            <th>系统消息</th>
            <th>发布时间</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($results)): $i = 0; $__LIST__ = $results;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="<?php echo ($vo['id']); ?>">
                <td><?php echo ($vo['id']); ?></td>
                <td><?php echo ($vo['content']); ?></td>
                <td><?php echo ($vo['time']); ?></td>
           </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>

</div>