<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
    </head>
    <body>       
        问题：<?php echo ($question["wenti"]); ?>
        <br/>
        答案：
        <?php if(is_array($answer)): $i = 0; $__LIST__ = $answer;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$answer): $mod = ($i % 2 );++$i;?><br/>
            <?php echo ($answer["content"]); endforeach; endif; else: echo "" ;endif; ?>
        <br/>        
        <br/>
        <form action="/index.php/Admin/#Admin/Strategy/strategy" method="post">
        <button>返回</button>
        </form>
    </body>
</html>