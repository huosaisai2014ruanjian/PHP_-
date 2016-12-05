<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" method="post" action="/dx/index.php/Admin/cd/cd/">
  <input type="hidden" name="status" value="${param.status}">
  <input type="hidden" name="keywords" value="${param.keywords}">
  <input type="hidden" name="pageNum" value="1">
  <input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>">
  <input type="hidden" name="orderField" value="${param.orderField}">
</form>

<div class="pageContent">
  <div class="panelBar">
    <ul class="toolBar">
        <li><a class="add" href="/dx/index.php/Admin/cd/add" target="dialog"><span>添加菜品</span></a></li>   
        <li><a class="delete" href="/dx/index.php/Admin/cd/delete?id={sid_user}" target="ajaxTodo"  title="确定要删除吗？" warn="请选择一个菜品"><span>删除</span></a></li>
      <li><a class="edit" href="/dx/index.php/Admin/cd/edit?id={sid_user}" target="dialog" warn="请选择一个菜品"><span>修改</span></a></li>       
    </ul>
  </div>

  <table class="list" width="98%" targetType="navTab" asc="asc" desc="desc" layoutH="63">
    <thead>
      <tr>
        <th>菜名</th>
        <th>图片</th>
        <th>原价</th>
        <th>现价</th>
        <th>分类</th>
      </tr> 
    </thead>
    <tbody> 
          <?php if(is_array($cd)): $i = 0; $__LIST__ = $cd;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="<?php echo ($vo["id"]); ?>">
                <td><?php echo ($vo["cd"]); ?></td>
                <td><img src="/dx/Uploads/Uploads/cdphoto/<?php echo ($vo["photo"]); ?>" style="height: 100px;width: 100px;"/></td>
                <td><?php echo ($vo["pprice"]); ?></td>
                <td><?php echo ($vo["price"]); ?></td>
                <td><?php echo ($vo["name"]); ?></td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
  </table>
  <div class="panelBar">
    <div class="pages">
      <span>显示</span>
      <select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
        <option value="20">20</option>
        <option value="2">2</option>
        <option value="50">50</option>
        <option value="100">100</option>
        <option value="200">200</option>
      </select>
      <span>条，共<?php echo ($totalCount); ?>条</span>
    </div>
    <div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="20" currentPage="<?php echo ($currentPage); ?>"></div>
  </div>
    </div>