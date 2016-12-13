<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/css/public.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/head.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/personal_left.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/personal_form.css" rel="stylesheet" type="text/css" />
<title>个人管理-基本信息</title>
</head>
<body>

<div class="header">
    <div class="mybody">
        <div class="logo"><img src="/Public/images/logo2.png" width="193" height="60" alt="logo" /></div>
        <div class="place"><p>北京</p></div>
        <div class="nav">
            <div class="navtop">
            <a href="#" class="log">登录</a>
            <a href="#" class="log sign">注册</a>
            <p>客服热线&nbsp;&nbsp;&nbsp;400&nbsp;-&nbsp;0000&nbsp;-&nbsp;000</p>
            </div>
            <div class="line"></div>
            <a href="#" class="xz"><div class="xzimg"><img src="/Public/images/gl2.png" width="21" height="21" alt="gl"/></div><p>选址攻略</p></a>
            <a href="#" class="xz xz2"><div class="xzimg"><img src="/Public/images/gw2.png" width="21" height="21" alt="gl"/></div><p>选址顾问</p></a>
            <a href="#" class="xz xz2"><div class="xzimg"><img src="/Public/images/jy2.png" width="21" height="21" alt="gl"/></div><p>选址建议</p></a>
        </div>
    </div>
</div>


<!--个人中心房源管理-->
<div class="content">
	<div class="mybody">
    	<div class="bread"><span>选址中国</span> > <a href="#">个人中心</a> > <a href="#">个人管理</a> > <a href="#">基本信息</a></div>
		<!--个人中心left-->
        <div class="personal_left">
        	<div class="user">
            	<a href="#"><img src="/Public/images/user.gif" width="150" height="150" alt="user" /></a>
                <p>欢迎你，王子文<br /><a href="#">申请成为认证经纪人</a></p>
            </div>
            <ul class="left_nav">
                	<li><a href="#">首页</a></li>
                    <li><a href="#">楼盘管理</a></li>
                    <li><a href="#">房源管理</a></li>
                    <li><a href="#">选址攻略</a></li>
                    <li class="left_nav_now person_nav">个人管理
                    	<ul>
                        	<li><a href="#">认证管理</a></li>
                        	<li><a href="#">经验管理</a></li>
                        	<li><a href="#">个人信息管理</a></li>
                    	</ul></li>
                    <li><a href="#">消息中心</a></li>
                    <li><a href="#">投标管理</a></li>
                    <li><a href="#">委托管理</a></li>
                    <li><a href="#">我的收藏</a></li>
			</ul>    	
        </div>
        <!--个人中心right-->
        <div class="personal_form_right form_bg">
        	<div class="img"><img src="/Public/images/user.gif" alt="img" /></div>
            <div class="form1">
            <form method="post" enctype="multipart/form-data" action="/index.php/Home/PersonnalManagement/EssentialInformationt">
            	<table cellspacing="30">
                	<tr>
                    	<td>姓名</td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo ($user["id"]); ?>"/>
                            <input type="text" name="name" value="<?php echo ($user["name"]); ?>" />
                        </td>
                    </tr>
                    <tr>
                    	<td>电话</td>
                        <td><input type="text" name="tel" value="<?php echo ($user["tel"]); ?>" /></td>
                    </tr>
                    <tr>
                    	<td>年限</td>
                        <td><input type="text" name="time" value="<?php echo ($user["time"]); ?>" /></td>
                    </tr>
                    <tr>
                    	<td>专长</td>
                        <td><input type="text" name="specialty" value="<?php echo ($user["specialty"]); ?>" /></td>
                    </tr>
                    <tr>
                    	<td>单位</td>
                        <td><input type="text" name="company" value="<?php echo ($user["company"]); ?>" /></td>
                    </tr>
                    <tr>
                    	<td>个人介绍</td>
                        <td rowspan="3"><textarea name="introduction"><?php echo ($user["name"]); ?></textarea></td>
                    </tr>
                    <tr>
                    	<td>&nbsp;</td>
                    </tr>
                    <tr>
                    	<td>&nbsp;</td>
                    </tr>
                    <tr>
                    	<td colspan="2" class="button"><input type="submit" value="修改" name="submit" /></td>
                    </tr>
                </table>
            </form>
            </div>
        </div>
	</div>
</div>

<div class="footer">
	<div class="mybody">
	<div class="ewm"><img src="/Public/images/ewm.jpg" width="110" height="110" alt="ewm"/><p>关注选址微信公众号</p></div>
    <div class="footermiddle">
    <ul>
    	<li><a href="#" class="footernav">关于我们</a></li>
        <li><a href="#" class="footernav footernav2">联系我们</a></li>
        <li><a href="#" class="footernav footernav2">平台规则</a></li>
        <li><a href="#" class="footernav footernav2">意见反馈</a></li>
    </ul>
	<p class="bq">版权所有 2016 选址中国有限公司 保留一切权利 京ICP备111111111号</p>
    <p class="dh">联系电话：400-000-000</p>
    </div>
    <div class="footermiddle footerr">
    	<a href="#" class="footernav">友情链接</a>
        <ul>
    	<li><a href="#" class="yqlj">瑞凡特（北京）科技有限公司</a></li>
        <li><a href="#" class="yqlj yqlj2">北京写字楼出租</a></li>
        <li><a href="#" class="yqlj yqlj2">上海写字楼出租</a></li>
        <li><a href="#" class="yqlj yqlj2">深圳写字楼出租</a></li>
        <li><a href="#" class="yqlj">深圳写字楼出租</a></li>
        <li><a href="#" class="yqlj yqlj2">深圳写字楼出租</a></li>
        <li><a href="#" class="yqlj yqlj2">深圳写字楼出租</a></li>
        <li><a href="#" class="yqlj yqlj2">深圳写字楼出租</a></li>
    	</ul>
    </div>
    </div>
</div>

</body>
</html>