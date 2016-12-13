<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/css/public.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/head.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/personal_left.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/personal_table.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/personal_else.css" rel="stylesheet" type="text/css" />
<title>投标消息</title>
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
    	<div class="bread"><span>选址中国</span> > <a href="#">个人中心</a> > <a href="#">投标管理</a> > <a href="#">投标消息</a></div>
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
                    <li class="person_nav">个人管理
                    	<ul>
                        	<li><a href="#">认证管理</a></li>
                        	<li><a href="#">经验管理</a></li>
                        	<li><a href="#">个人信息管理</a></li>
                    	</ul></li>
                    <li><a href="#">消息中心</a></li>
                    <li class="left_nav_now"><a href="#">投标管理</a></li>
                    <li><a href="#">委托管理</a></li>
                    <li><a href="#">我的收藏</a></li>
			</ul>
        </div>
        <!--个人中心right-->
        <div class="personal_else">
        	<h1>消息列表</h1>
            <div class="ss ss2">
            	<form action="">
                	<input type="text" placeholder="请输入房源名称、商圈或地点" name="ssk" />
                    <input type="button" value="" name="ssn" />
                </form>
            </div>
            <div class="else_licon">
            	<div class="else_li_top">
                	<h3><a href="#"><?php echo ($show["xuqiu"]); ?></a></h3>
                    <p class="top_p1">时间：<?php echo ($show["wtime"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;<span class="green"><?php echo ($show["publisher"]); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="yellow"><?php echo ($show["demand"]); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="blue"><?php echo ($show["trade"]); ?></span><span class="litop_right">预算：<?php echo ($show["budget"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;面积：<?php echo ($show["area"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;联系人：<?php echo ($show["xuser"]); ?></span></p>
                    <p class="top_p2">需求详情：<?php echo ($show["xqxq"]); ?></p>
                </div>

                <?php if(is_array($xqyjfk)): $i = 0; $__LIST__ = $xqyjfk;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xqyjfk): $mod = ($i % 2 );++$i;?><div class="else_li">
                	<h3><a href="#">选址中国</a><span>时间：<?php echo ($xqyjfk["ftime"]); ?></span></h3>
                    <p><?php echo ($xqyjfk["fktext"]); ?></p>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
             <div class="page">
            	<ul>
                	<li class="up"><a href="#">上一页</a></li>
                    <li class="now">1</li>
                    <li class="num"><a href="#">2</a></li>
                    <li class="num"><a href="#">3</a></li>
                    <li class="num"><a href="#">4</a></li>
                    <li class="num"><a href="#">5</a></li>
                    <li>...</li>
                    <li class="num"><a href="#">8</a></li>
                    <li class="up"><a href="#">下一页</a></li>
                </ul>
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