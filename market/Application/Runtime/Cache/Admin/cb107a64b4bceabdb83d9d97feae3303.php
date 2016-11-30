<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>baike fenlei</title>
</head>
<body>
	<h1>选址中国--攻略--百科<?php if(is_array($temp)): $i = 0; $__LIST__ = $temp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?>--<?php echo ($t["fenlei"]); endforeach; endif; else: echo "" ;endif; ?></h1></br>
	查看分类</br></br><a href="/index.php/Admin/Gonglue/badd"  target="navTab" class="add button"><span name="button">添加</span></a></br></br>
	<?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i;?><a href="/index.php/Admin/Gonglue/blists?fenlei=<?php echo ($r["fenlei"]); ?>" target="navTab" class="add button"><span name="button">查看<?php echo ($r["fenlei"]); ?></span></a></br></br><hr><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>