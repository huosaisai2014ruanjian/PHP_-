<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/css/public.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/head.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/personal_left.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/personal_else.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://libs.useso.com/js/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="/Public/css/style.css">
<title>个人管理-认证管理</title>
</head>
<body>
<form method="post" action="/index.php/Home/PersonnalManagement/CertificationManagement" enctype="multipart/form-data">

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
    	<div class="bread"><span>选址中国</span> > <a href="#">个人中心</a> > <a href="#">个人管理</a> > <a href="#">认证管理</a></div>
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
        <div class="personal_else">
        	<h1>选址顾问<span>（经纪人）</span></h1>
            	<div class="ID">
                    <div class="idcard">
                        <a href="javascript:void(0)"><input type="file" id="uploadid" name="upload1"><img id ="temp" width="252" height="160" alt=""/></a>
                        <p id="id">请扫描您的身份证</p>
                    </div>
                    <div class="idcard">
                        <a href="javascript:void(0)"><input type="file" id="uploadcard" name="upload2"><img id ="temp2" width="252" height="160" alt=""/></a>
                        <p id="card">请扫描您的名片</p>
                    </div>
                </div>
   <input type="submit" value="上传" id="up"/>

<h1>选址达人</h1>
<section class="htmleaf-container">
    <div class="container">
      <div id="single-quad" class="carousel slide" data-ride="carousel" data-shift="1">
        <div class="carousel-inner">
          <ul class="row item active">
            <li class="col-xs-3 one">
              <a href="#">
              <div class="tip">
                    <img src="/Public/images/tip1.gif" alt="" />
                    <p>政策解读</p>
                    <h5>2016.01.01获得</h5>
              </div>
              </a>
            </li>
            <li class="col-xs-3 two">
              <a href="#">
              <div class="tip">
                    <img src="/Public/images/tip2.gif" alt="" />
                    <p>企业服务</p>
                    <h5>2016.01.01获得</h5>
              </div>
              </a>
            </li>
            <li class="col-xs-3 three">
              <a href="#">
              <div class="tip">
                    <img src="/Public/images/tip3.gif" alt="" />
                    <p>政策解读</p>
                    <h5>2016.01.01获得</h5>
              </div>
              </a>
            </li>
            <li class="col-xs-3 four">
              <a href="#">
              <div class="tip">
                    <img src="/Public/images/tip4.gif" alt="" />
                    <p>企业服务</p>
                    <h5>2016.01.01获得</h5>
              </div>
              </a>
            </li>
            <li class="col-xs-3 five">
              <a href="#">
              <div class="tip">
                    <img src="/Public/images/tip5.gif" alt="" />
                    <p>政策解读</p>
                    <h5>2016.01.01获得</h5>
              </div>
              </a>
            </li>
          </ul>
          <ul class="row item">
            <li class="col-xs-3 six">
              <a href="#">
              <div class="tip">
                    <img src="/Public/images/tip1.gif" alt="" />
                    <p>企业服务</p>
                    <h5>2016.01.01获得</h5>
              </div>
              </a>
            </li>
            <li class="col-xs-3 seven">
              <a href="#">
              <div class="tip">
                    <img src="/Public/images/tip2.gif" alt="" />
                    <p>政策解读</p>
                    <h5>2016.01.01获得</h5>
              </div>
              </a>
            </li>
            <li class="col-xs-3 eight">
              <a href="#">
              <div class="tip">
                    <img src="/Public/images/tip3.gif" alt="" />
                    <p>企业服务</p>
                    <h5>2016.01.01获得</h5>
              </div>
              </a>
            </li>
            <li class="col-xs-3 nine">
              <a href="#">
              <div class="tip">
                    <img src="/Public/images/tip4.gif" alt="" />
                    <p>政策解读</p>
                    <h5>2016.01.01获得</h5>
              </div>
              </a>
            </li>
            <li class="col-xs-3 ten">
              <a href="#">
              <div class="tip">
                    <img src="/Public/images/tip5.gif" alt="" />
                    <p>企业服务</p>
                    <h5>2016.01.01获得</h5>
              </div>
              </a>
            </li>
            <li class="col-xs-3 eleven">
              <a href="#">
              <div class="tip">
                    <img src="/Public/images/tip1.gif" alt="" />
                    <p>政策解读</p>
                    <h5>2016.01.01获得</h5>
              </div>
              </a>
            </li>
          </ul>
        </div>
        <a class="carousel-control left" href="#single-quad" data-slide="prev">Previous</a>
        <a class="carousel-control right" href="#single-quad" data-slide="next">Next</a>
      </div>
    </div>
</section>
        <!-- 添加 -->
         <div >
              <a href="#">
              <div class="tip tip_right" id="plus">
                    <img src="/Public/images/+.gif" alt="" />
              </div>
              </a>
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

<script src="/Public/js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="/Public/js/bootstrap.min.js"></script>
<script src="/Public/js/index.js"></script>
<script type='text/javascript'>
  var temp=document.getElementById("temp");
  var temp2=document.getElementById("temp2");
  var id=document.getElementById("id");
  var card=document.getElementById("card");
  var up=document.getElementById("up");
  var plus=document.getElementById("plus");
  var uploadid=document.getElementById("uploadid");
  var uploadcard=document.getElementById("uploadcard");
  if("<?php echo ($d["pphoto"]); ?>")
  {
    temp.src="/Uploads/Uploads/advistor/<?php echo ($d["pphoto"]); ?>";
    id.innerHTML="您的身份证";
  } 
  else{
    temp.src='/Public/images/++.gif';
  }
  if("<?php echo ($d["bphoto"]); ?>")
  {
    temp2.src="/Uploads/Uploads/advistor/<?php echo ($d["bphoto"]); ?>";
    card.innerHTML="您的名片";
  } 
  else{
    temp2.src='/Public/images/++.gif';
  ///Public/images/IDcard_2.jpg
  }
  if("<?php echo ($d["pphoto"]); ?>"&&"<?php echo ($d["bphoto"]); ?>")
  {
    plus.style.marginTop="39px";
    up.style.display="none";
    uploadid.style.display="none";
    uploadcard.style.display="none";
  }
</script>
<script type="text/javascript">
var uploadid=document.getElementById('uploadid');
var uploadcard=document.getElementById('uploadcard');
uploadid.onchange=function(){
  document.getElementById('temp').src=window.URL.createObjectURL(this.files[0]);
}
uploadcard.onchange=function(){
  document.getElementById('temp2').src=window.URL.createObjectURL(this.files[0]);
}
   // var f=document.getElementById("uploadid").value;
   // var c=document.getElementById("uploadcard").value;
   //      if(f==""||c=="")
   //      {return false;}
   //      else
   //      {
   //      if(!/\.(gif|jpg|jpeg|png|GIF|JPG|PNG)$/.test(f)||!/\.(gif|jpg|jpeg|png|GIF|JPG|PNG)$/.test(c))
   //      {
   //        alert("图片类型必须是.gif,jpeg,jpg,png中的一种")
   //        return false;
   //      }
   //      }
</script>
</form>
</body> 
</html>