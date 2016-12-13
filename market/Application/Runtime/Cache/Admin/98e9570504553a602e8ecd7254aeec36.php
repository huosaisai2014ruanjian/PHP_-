<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
    </head>
    <body>       
    <div style="top: 12px; left: 406px; z-index: 1000; height: 360px; width: 420px;">
    <div class="pageContent" style="width: 506px;">
    <form action="/index.php/Admin/Commission/doReject" method="post" class="pageForm" onsubmit="return validateCallback(this, dialogAjaxDone)">    
        <div class="pageFormContent" layouth="58" style="height: 163px; overflow: auto;">
        发布人类型：<?php echo ($detail["publisher"]); ?>
        <br/><br/>
        需求种类：<?php echo ($detail["demand"]); ?>
        <br/><br/>
        姓名：<?php echo ($detail["name"]); ?>
        <br/><br/>
        交易类型：<?php echo ($detail["trade"]); ?>
        <br/><br/>        
        面积：<?php echo ($detail["area"]); ?>
        <br/><br/>
        预算：<?php echo ($detail["budget"]); ?>
        <br/><br/>
        其他：<?php echo ($detail["other"]); ?>
        <br/><br/>
        委托时间：<?php echo ($detail["commission_time"]); ?>
        </div>
        </form>
    </div>
    </div>
    <div class="dialogFooter"><div class="dialogFooter_r"><div class="dialogFooter_c"></div></div></div>
    <div class="resizable_h_l" tar="nw"></div>
    <div class="resizable_h_r" tar="ne"></div>
    <div class="resizable_h_c" tar="n"></div>
    <div class="resizable_c_l" tar="w" style="height:300px;"></div>
    <div class="resizable_c_r" tar="e" style="height:300px;"></div>
    <div class="resizable_f_l" tar="sw"></div>
    <div class="resizable_f_r" tar="se"></div>
    <div class="resizable_f_c" tar="s"></div>   
    </body>
    </body>
</html>