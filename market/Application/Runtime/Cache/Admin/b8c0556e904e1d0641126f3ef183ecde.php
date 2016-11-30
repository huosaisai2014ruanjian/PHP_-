<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
    </head>
    <body>
        <form method="post" action="/index.php/Admin/Index/doAdd">
            <input type="hidden" name="id" value="<?php echo ($label["id"]); ?>" />
            一级标签
            <input type="input" name="first_label" value="<?php echo ($label["first_label"]); ?>">
            <br/>
            二级标签
            <input type="input" name="second_label" value="<?php echo ($label["second_label"]); ?>">
            <br/>
            状 &nbsp;态 &nbsp;
            <input type="input" name="flag" value="<?php echo ($label["flag"]); ?>">
            <br/>
            <button type="submit">添 加</button>
        </form>
		<h1>问题添加</h1></br><hr>
	<form action="add" method="post">
		用户类型：<select name="type">
					<option>用户</option>
					<option>管理员</option>
					</volist>
				 </select>
		所属分类:<select name="name">
					<?php if(is_array($fenlei)): $i = 0; $__LIST__ = $fenlei;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f): $mod = ($i % 2 );++$i;?><option><?php echo ($f["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				 </select>
		问题:<input type="text" name="wenti" /></br></br>
		<input type="submit" name="submit" value="添加"/>
	</form>
    </body>
</html>