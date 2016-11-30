<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/css/public.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/head.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/bidlist.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/confirmdelete.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/js/confirmdelete.js"></script>

<title>投标列表</title>
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


<div class="content">
<div class="mybody">
	<div class="bread"><span>选址中国</span> > <a href="#">投标列表</a></div>
    <div class="ss">
    <div class="search">
    	<form>
            <input type="text" placeholder="请输入盘源名称、商圈或地点" class="searchtext">
            <input type="button" value="开始搜索" class="searchbutton">
        </form>
    </div>
    </div>
    <div class="content">
    <ul class="contentul">

    <?php if(is_array($toubiao)): $i = 0; $__LIST__ = $toubiao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
            <div class="list">
                <div class="listleft">
                    <h1><?php echo ($vo["xuqiu"]); ?></h1>
                    <div class="time">
                        <img src="/Public/images/time.gif" width="13" height="16" alt="time"/>
                        <span class="sj">时间：<?php echo ($vo["wtime"]); ?></span>
                        <span class="qy">企业</span>
                        <span class="qy xzl">写字楼</span>
                        <span class="qy qz">求租</span>
                    </div>
                    <div class="yusuan">
                        <span>预算：<?php echo ($vo["budget"]); ?></span>
                        <span class="yusuan2">面积：<?php echo ($vo["area"]); ?></span>
                        <span class="yusuan2">联系人：<?php echo ($vo["xuser"]); ?></span>
                    </div>
                    <p>需求详情：<?php echo ($vo["xqxq"]); ?></p>
                </div>
                <div class="listright">
                    <form>
                    <?php if(($vo["zhuangtai"] == '未投标') ): ?><input type="button"  value="我要投标" onclick="return alertMsg('确定要投标吗？',1,'#');" class="button1">
                         <input type="button" value="查看详情" class="button1 button2"  onclick="location.href='./bidmessage/id/<?php echo ($vo["id"]); ?>'" >
                    <?php else: ?>
                        <input type="button" value="我要投标" disabled="disabled" style="cursor:default" class="button1 button3">
                        <input type="button" value="查看详情" class="button1 button2" onclick="location.href='./bidmessage/id/<?php echo ($vo["id"]); ?>'" ><?php endif; ?>
                    </form>
                </div>
            </div>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>

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