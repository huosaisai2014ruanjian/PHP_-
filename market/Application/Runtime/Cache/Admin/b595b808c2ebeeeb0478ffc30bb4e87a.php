<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo (C("sitename")); ?></title>

<link href="/market/Public/dwz/themes/default/style.css" rel="stylesheet" type="text/css" />
<link href="/market/Public/dwz/themes/css/core.css" rel="stylesheet" type="text/css" />
<link href="/market/Public/dwz/themes/css/print.css" rel="stylesheet" type="text/css" media="print">
<!--[if IE]>
<link href="/market/Public/dwz/themes/css/ieHack.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript">  
var UEDITOR_HOME_URL='/market/Public/Ueditor/',ueditor_loader={};  
//编辑器同步  
function editorSyn(ename){  
$.each(ueditor_loader[ename],function(i){  
this.sync();   
});  
}  
</script>  
<link rel="stylesheet" type="text/css" href="/market/Public/Ueditor/themes/default/css/ueditor.min.css"/>   
<script type="text/javascript" charset="utf-8" src="/market/Public/Ueditor/ueditor.config.js"></script>   
<script type="text/javascript" charset="utf-8" src="/market/Public/Ueditor/ueditor.all.min.js"></script>  
<script src="/market/Public/dwz/js/speedup.js" type="text/javascript"></script>
<script src="/market/Public/dwz/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="/market/Public/dwz/js/jquery.cookie.js" type="text/javascript"></script>
<script src="/market/Public/dwz/js/jquery.validate.js" type="text/javascript"></script>
<script src="/market/Public/dwz/js/jquery.bgiframe.js" type="text/javascript"></script>
<script src="/market/Public/xheditor/xheditor-1.2.1.min.js" type="text/javascript"></script>
<script src="/market/Public/xheditor/xheditor_lang/zh-cn.js" type="text/javascript"></script>
<script src="/market/Public/dwz/js/dwz.min.js" type="text/javascript"></script>
<script src="/market/Public/dwz/js/dwz.regional.zh.js" type="text/javascript"></script>

<script type="text/javascript">
 $.ajaxSettings.global=false;
function fleshVerify(){
	//重载验证码
	$('#verifyImg').attr("src", '/market/index.php/Public/verify/'+new Date().getTime());
}
function dialogAjaxMenu(json){
	dialogAjaxDone(json);
	if (json.statusCode == DWZ.statusCode.ok){
		$("#sidebar").loadUrl("/market/index.php/Admin/Public/menu");
	}
}
function navTabAjaxMenu(json){
	navTabAjaxDone(json);
	if (json.statusCode == DWZ.statusCode.ok){
		$("#sidebar").loadUrl("/market/index.php/Admin/Public/menu");
	}
}
$(function(){
	DWZ.init("/market/Public/dwz/dwz.frag.xml", {
		loginUrl:"/market/index.php/Public/login_dialog", loginTitle:"登录",	// 弹出登录对话框
//		loginUrl:"/market/index.php/Public/login",	//跳到登录页面
		statusCode:{ok:1,error:0},
		keys:{statusCode:"status", message:"info"},
		pageInfo:{pageNum:"pageNum", numPerPage:"numPerPage", orderField:"_order", orderDirection:"_sort"}, //【可选】
		debug:false,	// 调试模式 【true|false】
		callback:function(){
			initEnv();
			$("#themeList").theme({themeBase:"/market/Public/dwz/themes"});
		}
	});
});
</script>
</head>

<body scroll="no">
	<div id="layout">
		<div id="header">
			<div class="headerNav">
				<a class="logo" href="/market/index.php">Logo</a>
				<ul class="nav">
					<li><a href="/market/index.php/Public/password/" target="dialog" mask="true">修改密码</a></li>
					<li><a href="/market/index.php/Public/profile/" target="dialog" mask="true">修改资料</a></li>
					<li><a href="/market/index.php/Public/logout/">退出</a></li>
				</ul>
				<ul class="themeList" id="themeList">
					<li theme="default"><div class="selected">蓝色</div></li>
				</ul>
			</div>
		</div>

		<div id="leftside">
			<div id="sidebar_s">
				<div class="collapse">
					<div class="toggleCollapse"><div></div></div>
				</div>
			</div>

			<div id="sidebar">
				<div class="toggleCollapse"><h2>管理中心</h2><div>收缩</div></div>
				<!--  -->
				<div class="accordion" fillSpace="sideBar">
					<div class="accordionHeader">
						<h2><span>Folder</span>账户管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<?php if(is_array($menu_10)): $i = 0; $__LIST__ = $menu_10;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; if((strtolower($item['name'])) != "public"): if((strtolower($item['name'])) != "index"): if(($item['access']) == "1"): ?><li><a href="/market/index.php/<?php echo ($item['name']); ?>/index/" target="navTab" rel="<?php echo ($item['name']); ?>"><?php echo ($item['title']); ?></a></li><?php endif; endif; endif; endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
					<div class="accordionHeader">
						<h2><span>Folder</span>商品管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<?php if(is_array($menu_11)): $i = 0; $__LIST__ = $menu_11;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; if((strtolower($item['name'])) != "public"): if((strtolower($item['name'])) != "index"): if(($item['access']) == "1"): ?><li><a href="/market/index.php/<?php echo ($item['name']); ?>/index/" target="navTab" rel="<?php echo ($item['name']); ?>"><?php echo ($item['title']); ?></a></li><?php endif; endif; endif; endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>					
					<div class="accordionHeader">
						<h2><span>Folder</span>消息管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder">
							<?php if(is_array($menu_12)): $i = 0; $__LIST__ = $menu_12;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; if((strtolower($item['name'])) != "public"): if((strtolower($item['name'])) != "index"): if(($item['access']) == "1"): ?><li><a href="/market/index.php/<?php echo ($item['name']); ?>/index/" target="navTab" rel="<?php echo ($item['name']); ?>"><?php echo ($item['title']); ?></a></li><?php endif; endif; endif; endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div>
				</div>
			</div>
			</div>


		<div id="container">
			<div id="navTab" class="tabsPage">
				<div class="tabsPageHeader">
					<div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
						<ul class="navTab-tab">
							<li tabid="main" class="main"><a href="javascript:void(0)"><span><span class="home_icon">我的主页</span></span></a></li>
						</ul>
					</div>
					<div class="tabsLeft">left</div><!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
					<div class="tabsRight">right</div><!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
					<div class="tabsMore">more</div>
				</div>
				<ul class="tabsMoreList">
					<li><a href="javascript:void(0)">我的主页</a></li>
				</ul>
				<div class="navTab-panel tabsPageContent layoutBox">
					<div class="page unitBox">
						<div class="accountInfo">
							
							<div class="right">
								<p><?php echo (date('Y-m-d g:i a',time())); ?></p>
							</div>
							<p><span><?php echo (C("sitename")); ?></span></p>
							<p>欢迎 <?php echo (session('loginUserName')); ?></p>
						</div>
						<div class="pageFormContent" layoutH="80">
							<div class="divider"></div>
						</div>

					</div>
				</div>
			</div>
		</div>

	</div>

	<div id="footer">Copyright &copy; 2016 校园跳蚤市场<a href="#" target="_blank"></a></div>


</body>
</html>