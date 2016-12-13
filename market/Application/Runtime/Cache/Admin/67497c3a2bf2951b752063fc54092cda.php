<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/PHP_-/market/index.php/Admin/Users" method="post">
	<input type="hidden" name="pageNum" value="1"/>
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST["_order"]); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST["_sort"]); ?>"/>
    <input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>">
</form>


<div class="pageContent">
    <div class="panelBar">
        <ul class="toolBar">
            <li class=""><a class="add" href="/PHP_-/market/index.php/Admin/users/create" target="navTab"><span>添加</span></a></li>
            <li class=""><a class="delete" href="/PHP_-/market/index.php/Admin/users/destroy?id={sid_user}" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
            <li class=""><a class="edit" href="/PHP_-/market/index.php/Admin/users/edit?id={sid_user}" target="navTab"><span>修改</span></a></li>
            <li class="line">line</li>
        </ul>
    </div>
    <table class="list" width="98%" targetType="navTab" asc="asc" desc="desc" layoutH="70" >
        <thead>
        <tr>
            <th><div>手机号</div></th>
            <th><div>姓名</div></th>            
            <th><div>昵称</div></th>
            <th><div>学院</div></th>
            <th><div>学号</div></th>
            <th><div>性别</div></th>
            <th><div>年级</div></th>
            <th><div>头像</div></th>
            <th><div>验证图片</div></th>
        </tr>
        </thead>
        <tbody>

        <?php if(is_array($results)): $i = 0; $__LIST__ = $results;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="<?php echo ($vo["id"]); ?>">
                <td><div><?php echo ($vo['username']); ?></div></td>
                <td><div><?php echo ($vo['name']); ?></div></td>
                <td><div><?php echo ($vo['nickname']); ?></div></td>
                <td><div><?php echo ($vo['college']); ?></div></td>
                <td><div><?php echo ($vo['num']); ?></div></td>
                <td><div><?php echo ($vo['sex']); ?></div></td>
                <td><div><?php echo ($vo['grade']); ?></div></td>
                <td><div><img src="/PHP_-/market/Public/<?php echo ($vo['head']); ?>" width="40px" height="40px"/></div></td>
                <td><div><img src="/PHP_-/market/Public/<?php echo ($vo['card']); ?>" width="40px" height="40px" /></div></td>
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
</div>
<script>

</script>