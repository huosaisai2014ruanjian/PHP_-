<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo (C("sitename")); ?></title>
<link href="/Public/dwz/themes/css/login.css" rel="stylesheet" type="text/css" />
<script src="/Public/dwz/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script language="JavaScript">
<!--
function fleshVerify(type){ 
	//重载验证码
	var timenow = new Date().getTime();
	if (type){
		$('#verifyImg').attr("src", '/index.php/Admin/Public/verify/adv/1/'+timenow);
	}else{
		$('#verifyImg').attr("src", '/index.php/Admin/Public/verify/'+timenow);
	}
}
//-->
</script>
</head>
<body>
<div id="login">
	<div id="login_header">
		<h1 class="login_logo">
			<a href="/index.php"><img src="/Public/dwz/themes/default/images/login_logo.gif" /></a>
		</h1>
		<div class="login_headerContent">
			<div class="navList">
				<ul>
					<li><a href="#">设为首页</a></li>
					<li><a href="#">升级说明</a></li>
					<li><a href="#">反馈</a></li>
					<li><a href="#">帮助</a></li>
				</ul>
			</div>
			<h2 class="login_title"><img src="/Public/dwz/themes/default/images/login_title.png" /></h2>
		</div>
	</div>
	<div id="login_content">
		<div class="loginForm">
			<form method="post" action="/index.php/admin/">
				<p>
					<label>帐号：</label>
					<input type="text" name="account" size="20" class="login_input" />
				</p>
				<p>
					<label>密码：</label>
					<input type="password" name="password" size="20" class="login_input" />
				</p>
				<p>
					<label>验证码：</label>
					<input class="code" name="verify" type="text" size="5" />
					<span><img id="verifyImg" SRC="/index.php/Admin/Public/verify/" onClick="fleshVerify()" border="0" alt="点击刷新验证码" style="cursor:pointer" align="absmiddle"></span>
				</p>
				<div class="login_bar">
					<input class="sub" type="submit" value=" " />
				</div>
			</form>
		</div>
		<div class="login_banner"><img src="/Public/dwz/themes/default/images/login_banner.jpg" /></div>
		<div class="login_main">
			<!--<ul class="helpList">
				<li><a href="#">下载驱动程序</a></li>
				<li><a href="#">如何安装密钥驱动程序？</a></li>
				<li><a href="#">忘记密码怎么办？</a></li>
				<li><a href="#">为什么登录失败？</a></li>
			</ul>-->
			<div class="login_inner">
				<p>测试账号(用户名/密码)</p>
				<p>管理员：admin/admin</p>
				<p>领导：leader/leader</p>
				<p>员工：member/member</p>
				<p>演示：demo/demo</p>
			</div>
		</div>
	</div>
	<div id="login_footer">
		Copyright &copy; 2009 <?php echo (C("COMPANY")); ?> Inc. All Rights Reserved.
	</div>
</div>

</body>
</html>