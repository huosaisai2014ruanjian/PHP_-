<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" method="post" action="/index.php/Admin/Commission/commission">
  <input type="hidden" name="status" value="${param.status}">
  <input type="hidden" name="keywords" value="${param.keywords}" />
  <input type="hidden" name="pageNum" value="1" />
  <input type="hidden" name="numPerPage" value="${model.numPerPage}" />
  <input type="hidden" name="orderField" value="${param.orderField}" />
</form>

<div class="pageContent">
    <div class="tabs" currentindex="1" eventtype="click">
        <div class="tabsHeader">
            <div class="tabsHeaderContent">
                <ul>
                    <li><a href="#"><span>写字楼</span></a></li>
                    <li><a href="#"><span>独栋</span></a></li>
                    <li><a href="#"><span>众创空间</span></a></li>
                    <li><a href="#"><span>厂房</span></a></li>
                    <li><a href="#"><span>商铺</span></a></li>
                    <li><a href="#"><span>土地</span></a></li>
                </ul>
            </div>
        </div>
        <div class="tabsContent" style="height:405px;">
            <div inited="1000">
                <div class="gridThead" style="position: relative; left: 0px;">
                <table class="table" width="100%" layouth="138">
                <thead>
                    <tr>
                        <th>内容</th>
                        <th>操作</th>
                    </tr>
                </thead></table>
                </div>

                <div class="gridScroller" layouth="138" style="width: 100%; height: 50px; overflow: auto;">
                <div class="gridTbody">
                <table style="width:100%;" class="table"><tbody>
                    <?php if(is_array($office)): $i = 0; $__LIST__ = $office;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$office): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="i" class="hover">
                    <td width="121">面积：<?php echo ($office["area"]); ?>&nbsp;&nbsp;|&nbsp;&nbsp;预算：<?php echo ($office["budget"]); ?>&nbsp;&nbsp;|&nbsp;&nbsp;其他：<?php echo ($office["other"]); ?></td>
                    <td width="120">
                    <?php if($office["reject"] == 1): ?><a class="add" target="dialog" href="/index.php/Admin/Commission/contrast/id/<?php echo ($office["id"]); ?>">详细</a>
                    <?php else: ?><a class="add" href="/index.php/Admin/Commission/detail/id/<?php echo ($office["id"]); ?>" target="dialog">详细</a><?php endif; ?>                    
                    <a class="add" target="dialog" href="/index.php/Admin/Bid/addbid/id/<?php echo ($office["id"]); ?>">通过</a> 
                    <a class="add" target="dialog" href="/index.php/Admin/Commission/reject/id/<?php echo ($office["id"]); ?>">驳回</a> 
                    <a class="add" target="dialog" href="/index.php/Admin/Bid/addbidpj/id/<?php echo ($office["id"]); ?>">到平台投标</a> 
                    <a class="delete" href="/index.php/Admin/Commission/abolish/id/<?php echo ($office["id"]); ?>" target="ajaxTodo" title="确定要删除吗?">作废</a>
                    </td>                   
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody></table></div></div>
            </div>

            <div inited="1000">
                <div class="gridThead" style="position: relative; left: 0px;">
                <table class="table" width="100%" layouth="138">
                <thead>
                    <tr>
                        <th>内容</th>
                        <th>操作</th>
                    </tr>
                </thead></table>
                </div>
                <div class="gridScroller" layouth="138" style="width: 100%; height: 50px; overflow: auto;">
                <div class="gridTbody">
                <table style="width:100%;" class="table"><tbody>
                  <?php if(is_array($building)): $i = 0; $__LIST__ = $building;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$building): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="1">                  
                    <td width="121">面积：<?php echo ($building["area"]); ?>&nbsp;&nbsp;|&nbsp;&nbsp;预算：<?php echo ($building["budget"]); ?>&nbsp;&nbsp;|&nbsp;&nbsp;其他：<?php echo ($building["other"]); ?></td>
                    <td width="120">
                    <?php if($building["reject"] == 1): ?><a class="add" target="dialog" href="/index.php/Admin/Commission/contrast/id/<?php echo ($building["id"]); ?>">详细</a>
                    <?php else: ?><a class="add" href="/index.php/Admin/Commission/detail/id/<?php echo ($building["id"]); ?>" target="dialog">详细</a><?php endif; ?>                    
                    <a class="add" target="dialog" href="/index.php/Admin/Bid/addbid/id/<?php echo ($building["id"]); ?>">通过</a> 
                    <a class="add" target="dialog" href="/index.php/Admin/Commission/reject/id/<?php echo ($building["id"]); ?>">驳回</a> 
                    <a class="add" target="dialog" href="/index.php/Admin/Bid/addbidpj/id/<?php echo ($building["id"]); ?>">到平台投标</a> 
                    <a class="delete" href="/index.php/Admin/Commission/abolish/id/<?php echo ($building["id"]); ?>" target="ajaxTodo" title="确定要删除吗?">作废</a>
                    </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody></table></div></div>
            </div>              

            <div inited="1000">
                <div class="gridThead" style="position: relative; left: 0px;">
                <table class="table" width="100%" layouth="138">
                <thead>
                    <tr>
                        <th>内容</th>
                        <th>操作</th>
                    </tr>
                </thead></table>
                </div>
                <div class="gridScroller" layouth="138" style="width: 100%; height: 50px; overflow: auto;">
                <div class="gridTbody">
                <table style="width:100%;" class="table"><tbody>
                  <?php if(is_array($space)): $i = 0; $__LIST__ = $space;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$space): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="1">
                    <td width="121">面积：<?php echo ($space["area"]); ?>&nbsp;&nbsp;|&nbsp;&nbsp;预算：<?php echo ($space["budget"]); ?>&nbsp;&nbsp;|&nbsp;&nbsp;其他：<?php echo ($space["other"]); ?></td>
                    <td width="120">
                    <?php if($space["reject"] == 1): ?><a class="add" target="dialog" href="/index.php/Admin/Commission/contrast/id/<?php echo ($space["id"]); ?>">详细</a>
                    <?php else: ?><a class="add" href="/index.php/Admin/Commission/detail/id/<?php echo ($space["id"]); ?>" target="dialog">详细</a><?php endif; ?>                    
                    <a class="add" target="dialog" href="/index.php/Admin/Bid/addbid/id/<?php echo ($space["id"]); ?>">通过</a> 
                    <a class="add" target="dialog" href="/index.php/Admin/Commission/reject/id/<?php echo ($space["id"]); ?>">驳回</a> 
                    <a class="add" target="dialog" href="/index.php/Admin/Bid/addbidpj/id/<?php echo ($space["id"]); ?>">到平台投标</a> 
                    <a class="delete" href="/index.php/Admin/Commission/abolish/id/<?php echo ($space["id"]); ?>" target="ajaxTodo" title="确定要删除吗?">作废</a>
                    </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody></table></div></div>
            </div>              

            <div inited="1000">
                <div class="gridThead" style="position: relative; left: 0px;">
                <table class="table" width="100%" layouth="138">
                <thead>
                    <tr>
                        <th>内容</th>
                        <th>操作</th>
                    </tr>
                </thead></table>
                </div>
                <div class="gridScroller" layouth="138" style="width: 100%; height: 50px; overflow: auto;">
                <div class="gridTbody">
                <table style="width:100%;" class="table"><tbody>
                  <?php if(is_array($plant)): $i = 0; $__LIST__ = $plant;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$plant): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="1">
                    <td width="121">面积：<?php echo ($plant["area"]); ?>&nbsp;&nbsp;|&nbsp;&nbsp;预算：<?php echo ($plant["budget"]); ?>&nbsp;&nbsp;|&nbsp;&nbsp;其他：<?php echo ($plant["other"]); ?></td>
                    <td width="120">
                    <?php if($plant["reject"] == 1): ?><a class="add" target="dialog" href="/index.php/Admin/Commission/contrast/id/<?php echo ($plant["id"]); ?>">详细</a>
                    <?php else: ?><a class="add" href="/index.php/Admin/Commission/detail/id/<?php echo ($plant["id"]); ?>" target="dialog">详细</a><?php endif; ?>                    
                    <a class="add" target="dialog" href="/index.php/Admin/Bid/addbid/id/<?php echo ($plant["id"]); ?>">通过</a> 
                    <a class="add" target="dialog" href="/index.php/Admin/Commission/reject/id/<?php echo ($plant["id"]); ?>">驳回</a> 
                    <a class="add" target="dialog" href="/index.php/Admin/Bid/addbidpj/id/<?php echo ($plant["id"]); ?>">到平台投标</a> 
                    <a class="delete" href="/index.php/Admin/Commission/abolish/id/<?php echo ($plant["id"]); ?>" target="ajaxTodo" title="确定要删除吗?">作废</a>
                    </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody></table></div></div>
            </div>              

            <div inited="1000">
                <div class="gridThead" style="position: relative; left: 0px;">
                <table class="table" width="100%" layouth="138">
                <thead>
                    <tr>
                        <th>内容</th>
                        <th>操作</th>
                    </tr>
                </thead></table>
                </div>
                <div class="gridScroller" layouth="138" style="width: 100%; height: 50px; overflow: auto;">
                <div class="gridTbody">
                <table style="width:100%;" class="table"><tbody>
                  <?php if(is_array($shop)): $i = 0; $__LIST__ = $shop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$shop): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="1">
                    <td width="121">面积：<?php echo ($shop["area"]); ?>&nbsp;&nbsp;|&nbsp;&nbsp;预算：<?php echo ($shop["budget"]); ?>&nbsp;&nbsp;|&nbsp;&nbsp;其他：<?php echo ($shop["other"]); ?></td>
                    <td width="120">
                    <?php if($shop["reject"] == 1): ?><a class="add" target="dialog" href="/index.php/Admin/Commission/contrast/id/<?php echo ($shop["id"]); ?>">详细</a>
                    <?php else: ?><a class="add" href="/index.php/Admin/Commission/detail/id/<?php echo ($shop["id"]); ?>" target="dialog">详细</a><?php endif; ?>                    
                    <a class="add" target="dialog" href="/index.php/Admin/Bid/addbid/id/<?php echo ($shop["id"]); ?>">通过</a> 
                    <a class="add" target="dialog" href="/index.php/Admin/Commission/reject/id/<?php echo ($shop["id"]); ?>">驳回</a> 
                    <a class="add" target="dialog" href="/index.php/Admin/Bid/addbidpj/id/<?php echo ($shop["id"]); ?>">到平台投标</a> 
                    <a class="delete" href="/index.php/Admin/Commission/abolish/id/<?php echo ($shop["id"]); ?>" target="ajaxTodo" title="确定要删除吗?">作废</a>
                    </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody></table></div></div>
            </div>

            <div inited="1000">
                <div class="gridThead" style="position: relative; left: 0px;">
                <table class="table" width="100%" layouth="138">
                <thead>
                    <tr>
                        <th>内容</th>
                        <th>操作</th>
                    </tr>
                </thead></table>
                </div>
                <div class="gridScroller" layouth="138" style="width: 100%; height: 50px; overflow: auto;">
                <div class="gridTbody">
                <table style="width:100%;" class="table"><tbody>
                  <?php if(is_array($land)): $i = 0; $__LIST__ = $land;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$land): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="1">              
                    <td width="121">面积：<?php echo ($land["area"]); ?>&nbsp;&nbsp;|&nbsp;&nbsp;预算：<?php echo ($land["budget"]); ?>&nbsp;&nbsp;|&nbsp;&nbsp;其他：<?php echo ($land["other"]); ?></td>
                    <td width="120">
                    <?php if($land["reject"] == 1): ?><a class="add" target="dialog" href="/index.php/Admin/Commission/contrast/id/<?php echo ($land["id"]); ?>">详细</a>
                    <?php else: ?><a class="add" href="/index.php/Admin/Commission/detail/id/<?php echo ($land["id"]); ?>" target="dialog">详细</a><?php endif; ?>                    
                    <a class="add" target="dialog" href="/index.php/Admin/Bid/addbid/id/<?php echo ($land["id"]); ?>">通过</a> 
                    <a class="add" target="dialog" href="/index.php/Admin/Commission/reject/id/<?php echo ($land["id"]); ?>">驳回</a> 
                    <a class="add" target="dialog" href="/index.php/Admin/Bid/addbidpj/id/<?php echo ($land["id"]); ?>">到平台投标</a> 
                    <a class="delete" href="/index.php/Admin/Commission/abolish/id/<?php echo ($land["id"]); ?>" target="ajaxTodo" title="确定要删除吗?">作废</a>
                    </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody></table></div></div>
            </div>                          
        </div>

        <div class="panelBar">
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
        
            <div class="pagination" targetType="dialog" totalCount="200" numPerPage="20" pageNumShown="10" currentPage="1"></div>
        </div>

        <div class="tabsFooter">
            <div class="tabsFooterContent"></div>
        </div>
    </div>
    </div>