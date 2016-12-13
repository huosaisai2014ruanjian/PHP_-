<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" method="post" action="/demo/index.php/Admin/ThinkUser/index">
    <div class="pageContent">
        <div class="panelBar">
            <ul class="toolBar">
                <li class=""><a class="add" href="/demo/index.php/Admin/ThinkUser/create" target="navTab"><span>添加</span></a></li>
                <li class=""><a class="delete" href="/demo/index.php/Admin/ThinkUser/destroy?id={sid_user}" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
                <li class=""><a class="edit" href="/demo/index.php/Admin/users/edit?uid={sid_user}" target="navTab"><span>修改</span></a></li>
                <li class="line">line</li>
            </ul>
        </div>
        <table class="list" width="98%" targetType="navTab" asc="asc" desc="desc" layoutH="70" >
            <thead>
            <tr>
                <th><div>用户名</div></th>
                <th><div>密码</div></th>
            </tr>
            </thead>
            <tbody>

            <?php if(is_array($results)): $i = 0; $__LIST__ = $results;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="<?php echo ($vo["id"]); ?>">
                    <td><div><?php echo ($vo['name']); ?></div></td>
                    <td><div><?php echo ($vo['passwd']); ?></div></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <div class="panelBar">
            <div class="pages">
                <span>显示</span>
                <select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                </select>
                <span>条，共<?php echo ($totalCount); ?>条</span>
            </div>
            <div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="20" currentPage="<?php echo ($currentPage); ?>"></div>

        </div>
    </div></form>
<script>

</script>