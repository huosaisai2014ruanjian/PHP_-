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
<link href="/Public/css/login.css" rel="stylesheet" type="text/css" />
<title>用户注册</title>
</head>
<body>

<!--登录页-->
<div class="content">
	<div class="mybody">
    	<div class="bread"><span>选址中国</span> > <a href="#">用户注册</a></div>
		<!--用户注册-->
        	<div class="search search1">
                    <form action="/index.php/Home/Login/zhuce1" method="post">
                    	<select name=""><option value="">+86</option></select>
                        <input type="text" placeholder="手机号码" class="tel" name="tel"/>
                        <input type="text" placeholder="验证码" class="check" name="ptel"/>
                        <input type="button" value="获取验证码" class="addcheck" id="huoqu" />
                        <input type="password" value="输入密码"  name="password"/>
                        <input type="password" value="确认新密码" name="repassword" />
                        <input  id="agreement" name="agreement" type="checkbox" value="" />&nbsp;&nbsp;已阅读并同意<a href="#">《选址中国的服务条款》</a>
                        <input id="tijiao" type="button" value="注  册" class="login_button" name="submit"/>
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

</div>
</body>

<script language="javascript" type="text/javascript">
var huoqu=document.getElementById("huoqu");
huoqu.onclick=function(){
    huoqu.value="正在发送！";

}
var agree=document.getElementById("agreement");
var tijiao=document.getElementById("tijiao");
agree.onclick=function(){
    if(agree.checked==true){
         tijiao.type="submit";
          //tijiao.style.width="100px";
    }
     if(agree.checked==false){
         tijiao.type="button";
         //tijiao.style.width="400px";
     }
}

</script>
</html>