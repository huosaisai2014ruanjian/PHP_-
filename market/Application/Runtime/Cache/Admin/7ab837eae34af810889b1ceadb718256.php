<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" method="post" action="demo_page1.html">
    <input type="hidden" name="status" value="${param.status}">
    <input type="hidden" name="keywords" value="${param.keywords}" />
    <input type="hidden" name="pageNum" value="1" />
    <input type="hidden" name="numPerPage" value="${model.numPerPage}" />
    <input type="hidden" name="orderField" value="${param.orderField}" />
</form>


<div class="pageHeader">
    <form onsubmit="return navTabSearch(this);" action="" method="post">
    <div class="pageContent">
    <div class="tabs" currentIndex="0" eventType="click">
        
        <div class="tabsContent" style="height:150px;">
            <div>
            <div class="pageContent">
    
    <table class="table" width="100%" layoutH="138">
        <thead>
            <tr>
                <th width="80">内容</th>
                <th width="120">操作</th>
            </tr>
        </thead>
        <tbody>
            
            <?php if(is_array($question)): $i = 0; $__LIST__ = $question;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$question): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="1">
                <td><?php echo ($question["wenti"]); ?></td>
                  
                <td>                 
                <a class="add" target="navTab" href="/index.php/Admin/Strategy/detail/id/<?php echo ($question["id"]); ?>">详细</a>   
                <a class="add" target="navTab" href="">通过</a> 
                <a class="add" target="navTab" href="/index.php/Admin/Strategy/reject/id/<?php echo ($question["id"]); ?>">驳回</a> 
                <a class="add" target="navTab" href="/index.php/Admin/Strategy/abolish/id/<?php echo ($question["id"]); ?>">作废</a>
                </td>
               </tr><?php endforeach; endif; else: echo "" ;endif; ?>         
        </tbody>
    </table>
    </form>
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
        
        <div class="pagination" targetType="navTab" totalCount="200" numPerPage="20" pageNumShown="10" currentPage="1"></div>

    </div>
</div>
            </div>
            <div>

            </div>
            <div>
            
            </div>
            <div>
            
            </div>
            <div>
            
            </div>
            <div>
            
            </div>
        </div>
        <div class="tabsFooter">
            <div class="tabsFooterContent"></div>
        </div>
    </div>
    
    <p>&nbsp;</p>
</div>