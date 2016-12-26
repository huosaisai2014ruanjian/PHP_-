<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/market/index.php/Admin/Goods" method="post">
    <input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="_order" value="<?php echo ($_REQUEST["_order"]); ?>" />
    <input type="hidden" name="_sort" value="<?php echo ($_REQUEST["_sort"]); ?>" />
    <input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>">
</form>

<div class="pageHeader" id="Goods_indexid">
    <form method="post">
        <div class="searchBar">
            商品名称：
            <input type="text" id="text" name="sousuo" value="请输入搜索内容" />
            <div class="subBar">
                <ul>
                    <li>
                        <a href="#" class="button" target='navTab' class='add button' name='submit' id="submit"><span name='button'>搜索</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </form>
</div>
<div class="pageContent">
    <div class="panelBar">
        <ul class="toolBar">
            <li><a class="add" href="/market/index.php/Admin/Goods/add" target="navTab"><span>添加</span></a></li>
            <li><a class="delete" href="/market/index.php/Admin/Goods/destroy/id/{sid_user}" target="ajaxTodo" title="确定要删除吗？" warn="请选择一个用户"><span>删除</span></a></li>
            <li><a class="edit" href="/market/index.php/Admin/Goods/edit?id={sid_user}" target="navTab" warn="请选择一个用户"><span>修改</span></a></li>
            <li><a class="icon" href="/market/index.php/Admin/Goods/lists/id/{sid_user}" target="dialog"><span>详情</span></a></li>
        </ul>
    </div>
    <table class="list" width="98%" targetType="navTab" asc="asc" desc="desc" layoutH="126">
        <thead>
            <tr>
                <th>id</th>
                <th>名称</th>
                <th>价格</th>
                <th>图片</th>
                <th>描述</th>
                <th>浏览次数</th>
                <th>是否全新</th>
                <th>发布时间</th>
                <th>所属二级分类</th>
                <th>卖家id</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($results)): $i = 0; $__LIST__ = $results;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="<?php echo ($d["id"]); ?>">
                    <td><?php echo ($d["id"]); ?></td>
                    <td><?php echo ($d["name"]); ?></td>
                    <td><?php echo ($d["price"]); ?></td>
                    <td>
                        <?php if(is_array($d['image'])): $i = 0; $__LIST__ = $d['image'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$img): $mod = ($i % 2 );++$i;?><img src="/market/Public/<?php echo ($img); ?>" style="height: 29px;width: 29px;" /><?php endforeach; endif; else: echo "" ;endif; ?>
                    </td>
                    <td><?php echo (subtext($d["description"],10)); ?></td>
                    <td><?php echo ($d["times"]); ?></td>
                    <td><?php echo ($d["degree"]); ?></td>
                    <td><?php echo ($d["time"]); ?></td>
                    <td><?php echo ($d["category_id"]); ?></td>
                    <td><?php echo ($d["seller_id"]); ?></td>
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
var up = document.getElementsByName('up')[0];
var down = document.getElementsByName('down')[0];
var submit = document.getElementsByName('submit')[0];
var sousuo = document.getElementsByName('sousuo')[0];
var data = "/market/index.php/Admin/Goods/index";
sousuo.onclick = function() {
    this.value = '';
}
submit.onmouseover = function() {
    data = "/market/index.php/Admin/Goods/search?condition=" + sousuo.value;
    this.href = data;
}
</script>