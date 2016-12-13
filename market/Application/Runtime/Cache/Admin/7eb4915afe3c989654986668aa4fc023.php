<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" method="post" action="/code/index.php/Admin/Tel/index">
  <input type="hidden" name="status" value="${param.status}">
  <input type="hidden" name="keywords" value="${param.keywords}" />
  <input type="hidden" name="pageNum" value="1" />
  <input type="hidden" name="numPerPage" value="${model.numPerPage}" />
  <input type="hidden" name="orderField" value="${param.orderField}" />
</form>
<div class="pageContent">
  <div class="panelBar">
    <ul class="toolBar">
      <li><a class="add" href="/code/index.php/Admin/Tel/add" rel="areapage1" target="dialog" fresh="false"><span>添加</span></a></li>
      <li><a class="delete" href="/code/index.php/Admin/Tel/delete/id/{sid_user}" target="ajaxTodo" title="确定要删除吗?"><span>取消绑定</span></a></li>
      <!--<li><a class="edit" href="/code/index.php/Admin/Tel/modi/id/{sid_user}" target="navTab"><span>修改</span></a></li>-->
      <li><a class="edit" href="/code/index.php/Admin/Tel/modi/id/{sid_user}" rel="areapage1" target="dialog" fresh="false"><span>修改绑定</span></a></li>
    </ul>
  </div>
  </div>
    <table class="table" width="100%" layoutH="138">
    <thead>
       <tr>
        <th>用户姓名</th>
        <th>用户电话</th>
        <th>绑定的400电话</th>
       </tr>
    </thead>
     <tbody>
          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="<?php echo ($d["id"]); ?>">
               <td><?php echo ($d["name"]); ?></td>
               <td><?php echo ($d["tel"]); ?></td>
               <td><?php echo ($d["bangdingtel"]); ?></td>
           </tr><?php endforeach; endif; else: echo "" ;endif; ?>
       </tbody>
    </table>

  <div class="panelBar" style="position:absolute;bottom:0;right:0;width:100%;">
    <div class="pages">
      <span>显示</span>
      <select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
        <option value="20">20</option>
        <option value="50">50</option>
        <option value="100">100</option>
        <option value="200">200</option>
      </select>
      <span>条，共${totalCount}条</span>
    </div>

    <div class="pagination" targetType="navTab" totalCount="200" numPerPage="20" pageNumShown="10" currentPage="1"></div>

  </div>
  <!--<div class="panelBar" style="position:absolute;bottom:0;right:0;width:100%;">
    <?php echo ($page); ?>
  </div>-->