<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/css/public.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/head.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/dynamicdetails.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/contentright.css" rel="stylesheet" type="text/css" />
<title>攻略详情</title>
</head>
<body>

<div class="content">
<div class="mybody">
	<div class="bread"><span>选址中国</span> > <a href="#">选址攻略</a> > <a href="#">攻略详情</a></div>
    <div class="left">
    	<h1><?php echo ($gonglueinfodetail["title"]); ?></h1>
        <div class="fl">
        	<div class="ssfl"><img src="/Public/images/ssfl.gif" width="15" height="15" alt="ssfl" /><span>所属分类：<?php echo ($fenlei["name"]); ?></span></div>
            <div class="ssfl ssfl2"><img src="/Public/images/sj.gif" width="15" height="15" alt="sj" /><span><?php echo ($gonglueinfodetail["time"]); ?> </span></div>
            <div class="ssfl ssfl2"><img src="/Public/images/zz.gif" width="15" height="15" alt="zz" /><span>作者：<?php echo ($fenlei["userid"]); ?></span></div>
        </div>
        <div class="summary" style="margin-left: 60px;font-size: 20px;"><?php echo ($gonglueinfodetail["summary"]); ?></div>
        <br/>
        <br/>
        <div><?php echo (htmlspecialchars_decode($gonglueinfodetail["content"])); ?></div>
    </div>
    <div class="right">
    	<div class="righttop">
        	<h1 class="title">热门资讯<a href="#" class="ckgd">更多&nbsp;>></a></h1>
            <ul class="topul">
        	<li><a href="#">客户最中意的5类写字楼，你Get了吗？</a><span>01-01</span></li>
            <li><a href="#">如果选择创业，哪个SOHO值得考虑？</a><span>01-01</span></li>
            <li><a href="#">春风十里，不如带你逛逛那些写字楼...</a><span>01-01</span></li>
            <li><a href="#">客户最中意的5类写字楼，你Get了吗？</a><span>01-01</span></li>
            <li><a href="#">如果选择创业，哪个SOHO值得考虑？</a><span>01-01</span></li>
            <li><a href="#">春风十里，不如带你逛逛那些写字楼...</a><span>01-01</span></li>
            <li><a href="#">春风十里，不如带你逛逛那些写字楼...</a><span>01-01</span></li>
        </ul>
        </div>
       	<div class="righttop righttop2">
        	<h1 class="title title2">选址达人<a href="#" class="ckgd">更多&nbsp;>></a></h1>
            <div class="xzdr">
       	    	<img src="/Public/images/dr1.jpg" width="150" height="190" alt="dr" class="xzdrimg"/>
                <div class="xzright">
                <div class="drname">
                <h1>宋媛</h1>
                <a>联系TA</a>
                </div>
                <h3>擅长方面</h3>
                <ul>
                	<li>政策解读</li>
                    <li>企业服务</li>
                    <li>政策解读</li>
                    <li>企业服务</li>
                </ul>
                </div>
            </div>
            <div class="xzdr xzdr2">
       	    	<img src="/Public/images/dr2.jpg" width="150" height="190" alt="dr" class="xzdrimg"/>
                <div class="xzright">
                <div class="drname">
                <h1>宋媛</h1>
                <a>联系TA</a>
                </div>
                <h3>擅长方面</h3>
                <ul>
                	<li>政策解读</li>
                    <li>企业服务</li>
                    <li>政策解读</li>
                    <li>企业服务</li>
                </ul>
                </div>
            </div>
             <div class="xzdr xzdr2">
       	    	<img src="/Public/images/dr1.jpg" width="150" height="190" alt="dr" class="xzdrimg"/>
                <div class="xzright">
                <div class="drname">
                <h1>宋媛</h1>
                <a>联系TA</a>
                </div>
                <h3>擅长方面</h3>
                <ul>
                	<li>政策解读</li>
                    <li>企业服务</li>
                    <li>政策解读</li>
                    <li>企业服务</li>
                </ul>
                </div>
            </div>
            <div class="xzdr xzdr2">
       	    	<img src="/Public/images/dr2.jpg" width="150" height="190" alt="dr" class="xzdrimg"/>
                <div class="xzright">
                <div class="drname">
                <h1>宋媛</h1>
                <a>联系TA</a>
                </div>
                <h3>擅长方面</h3>
                <ul>
                	<li>政策解读</li>
                    <li>企业服务</li>
                    <li>政策解读</li>
                    <li>企业服务</li>
                </ul>
                </div>
            </div>
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


</div>
</body>
</html>