<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/css/index.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/public.css" rel="stylesheet" type="text/css" />
<script src="/Public/js/min/jquery-v1.10.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/js/edit.js"></script>
<script src="/Public/js/min/modernizr-custom-v2.7.1.min.js" type="text/javascript"></script>
<script src="/Public/js/min/jquery-finger-v0.1.0.min.js" type="text/javascript"></script>
<script language="JavaScript" src="/Public/js/jquery-1.7.2.min.js"></script>
<!--Include flickerplate-->
<link href="/Public/css/flickerplate.css"  type="text/css" rel="stylesheet">
<script src="/Public/js/min/flickerplate.min.js" type="text/javascript"></script>
<script src="http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js" type="text/javascript"></script>
<script src="/Public/js/public.js" type="text/javascript"></script>
<script type="text/javascript" src="http://int.dpool.sina.com.cn/iplookup/iplookup.php? 
format=js"></script> 

<!--Execute flickerplate-->
<script>
	$(document).ready(function(){
		$('.flicker-example').flicker();
	});
	 function getIpPlace() {
		 return remote_ip_info["city"];
     }
</script>
<title>选址中国</title>
</head>
<body>




<div class="header">
<!-- 轮播图代码部分begin -->
<div class="flicker-example" data-block-text="false" style="position:absolute;z-index:-999">
  <ul>
    <li data-background="/Public/images/banner.jpg"></li>
    <li data-background="/Public/images/banner.jpg"></li>
    <li data-background="/Public/images/banner.jpg"></li>
    <li data-background="/Public/images/banner.jpg"></li>
    <li data-background="/Public/images/banner.jpg"></li>
  </ul>
</div>
<!-- 代码部分end -->

	<div class="mybody">

    <div class="headtop">
    	<div class="logo"><img src="/Public/images/logo.png" width="193" height="60" alt="logo" /></div>
        <div class="place">
        <select>
 		 <option value ="1" name="1"><script>document.write(getIpPlace());</script></option>
	</select>

        </div>
        <div class="nav">
        	<div class="navtop">
        	<a href="#" class="log">登录</a>
            <a href="#" class="log sign">注册</a>
            <p>客服热线&nbsp;&nbsp;&nbsp;400&nbsp;-&nbsp;0000&nbsp;-&nbsp;000</p>
            </div>
            <div class="line"></div>
            <a href="#" class="xz"><div class="xzimg"><img src="/Public/images/gl.png" width="21" height="21" alt="gl"/></div><p>选址攻略</p></a>
            <a href="#" class="xz xz2"><div class="xzimg"><img src="/Public/images/gw.png" width="21" height="21" alt="gl"/></div><p>选址顾问</p></a>
            <a href="#" class="xz xz2"><div class="xzimg"><img src="/Public/images/jy.png" width="21" height="21" alt="gl"/></div><p>选址建议</p></a>

        </div>
        </div>
        <div class="xfdiv">
        <div class="xf">
            <a href="#" class="xz3" onclick="jQuery('.box').show()"><div class="wtxz"><img src="/Public/images/wtxz.png" width="20" height="20" alt="wtxz" /></div><p>委托选址</p></a>
            <a href="#" class="xz3 xz4"><div class="wtxz"><img src="/Public/images/fbfy.png" width="20" height="20" alt="wtxz" /></div><p>发布房源</p></a>
            <a href="#" class="xz3 xz4"><div class="wtxz"><img src="/Public/images/xzxq.png" width="20" height="20" alt="wtxz" /></div><p>选址需求</p></a>
          <a href="#" class="xz3 xz4"><div class="wtxz"><img src="/Public/images/wytw.png" width="20" height="20" alt="wtxz" /></div><p>我要提问</p></a>
            <a href="#" class="xz3 xz4"><div class="wtxz"><img src="/Public/images/gfwx.png" width="28" height="20" alt="gfwx" /></div><p>官方微信</p></a>
        </div>
        </div>
        <div class="search">
        	<div class="snav">
            	<ul>
                	<li><a href="#">独栋</a></li>
                    <li><a href="#">写字楼</a></li>
                    <li><a href="#">众创空间</a></li>
                    <li><a href="#">厂房</a></li>
                    <li><a href="#">商铺</a></li>
                    <li><a href="#">土地</a></li>
                </ul>
            </div>
            <form>
            	<input type="text" placeholder="请输入房源名称、商圈或地点" class="searchtext">
                <input type="button" value="开始搜索" class="searchbutton">
            </form>
        </div>
        <div class="bannerc">
<!-- 原换页按钮
        <div class="bannerchange"><img src="/Public/images/bannerc_h.png" width="10" height="10" alt="bc" /></div>
        <div class="bannerchange"><img src="/Public/images/bannerc.png" width="10" height="10" alt="bc" /></div>
        <div class="bannerchange"><img src="/Public/images/bannerc.png" width="10" height="10" alt="bc" /></div>
        <div class="bannerchange"><img src="/Public/images/bannerc.png" width="10" height="10" alt="bc" /></div>
        <div class="bannerchange"><img src="/Public/images/bannerc.png" width="10" height="10" alt="bc" /></div>
         -->
    	 </div>
        <div class="b_nav">
        	<ul>
            	<li class="bnli"><a href="#" class="bnfirst">主页</a></li>
                <li class="bnli"><a href="#" class="bnfirst2">独栋</a></li>
                <li class="bnli"><a href="#" class="bnfirst2">写字楼</a></li>
                <li class="bnli"><a href="#" class="bnfirst2">众创空间</a></li>
                <li class="bnli"><a href="#" class="bnfirst2">厂房</a></li>
                <li class="bnli"><a href="#" class="bnfirst2">商铺</a></li>
                <li class="bnlast"><a href="#" class="bnfirst2">土地</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="mybody">
  <div class="ctop">
    	<div class="ctop1">
   	  		<img src="/Public/images/dtzf.png" width="90" height="90" alt="dtzf" />
        	<h1>地图找房</h1>
        </div>
        <div class="ctop1 ctop2 ctop3">
   	  		<img src="/Public/images/yhfy.png" width="90" height="90" alt="dtzf" />
        	<h1>优惠房源</h1>
        </div>
        <div class="ctop1 ctop2">
   	  		<img src="/Public/images/zcjd.png" width="90" height="90" alt="dtzf" />
        	<h1>政策解读</h1>
        </div>
        <div class="ctop1 ctop2 ctop3">
   	  		<img src="/Public/images/qyfw.png" width="90" height="90" alt="dtzf" />
        	<h1>企业服务</h1>
        </div>
  </div>
  <div class="rdzx">
  	<h1 class="title">热点资讯</h1>
  	<div class="rdzximg"><p><a href="#">热追踪&nbsp;|&nbsp;中国十大城市租房成本在这里</a></p><a href="#"><img src="/Public/images/rdzx.png" width="400" height="250" alt="rdzx" /></a></div>
    <div class="rdzxright">
    	<h1><a href="#" class="rdtit">回望“副中心”大事记 北京城市副中心“三级跳”</a><a href="#" class="ckgd">查看更多&nbsp;>></a></h1>
        <ul>
        	<li><a href="#">[热点] 利好停不下来 燕郊上榜《京津冀产业转移指南》</a><span>2016-07-01</span></li>
            <li><a href="#">[问答] 各国工作几年可以购买一套房</a><span>2016-07-01</span></li>
            <li><a href="#">[热点] 急！买房后女友突然入狱 收房无望</a><span>2016-07-01</span></li>
            <li><a href="#">[百科] 二手房商住两用 房怎么缴税</a><span>2016-07-01</span></li>
            <li><a href="#">[热点] 我可以不买学区房么？</a><span>2016-07-01</span></li>
        </ul>
    </div>
  </div>
  <div class="xzzc">
  	<div class="xzl">
    	<h1 class="title">选址政策<a href="#" class="ckgd ckgd2">查看更多&nbsp;>></a></h1>
        <div class="xzimg">
   	    <a href="#"><img src="/Public/images/xzzc.png" width="280" height="181" alt="xzzc" /> </a>
        <a href="#"><img src="/Public/images/xzzc.png" width="280" height="181" alt="xzzc" / class="xzimg2"></a>
        </div>
        <ul>
        	<li><a href="#">[热点] 利好停不下来 燕郊上榜《京津冀产业转移指南》</a><span>2016-07-01</span></li>
            <li><a href="#">[问答] 各国工作几年可以购买一套房</a><span>2016-07-01</span></li>
            <li><a href="#">[热点] 急！买房后女友突然入狱 收房无望</a><span>2016-07-01</span></li>
            <li><a href="#">[百科] 二手房商住两用 房怎么缴税</a><span>2016-07-01</span></li>
            <li><a href="#">[热点] 我可以不买学区房么？</a><span>2016-07-01</span></li>
        </ul>
    </div>
    <div class="xzl xzr">
    	<h1 class="title">选址百科<a href="#" class="ckgd ckgd2">查看更多&nbsp;>></a></h1>
        <div class="xzimg">
   	    <a href="#"><img src="/Public/images/xzzc.png" width="280" height="181" alt="xzzc" /> </a>
        <a href="#"><img src="/Public/images/xzzc.png" width="280" height="181" alt="xzzc" / class="xzimg2"></a>
        </div>
        <ul>
        	<li><a href="#">[热点] 利好停不下来 燕郊上榜《京津冀产业转移指南》</a><span>2016-07-01</span></li>
            <li><a href="#">[问答] 各国工作几年可以购买一套房</a><span>2016-07-01</span></li>
            <li><a href="#">[热点] 急！买房后女友突然入狱 收房无望</a><span>2016-07-01</span></li>
            <li><a href="#">[百科] 二手房商住两用 房怎么缴税</a><span>2016-07-01</span></li>
            <li><a href="#">[热点] 我可以不买学区房么？</a><span>2016-07-01</span></li>
        </ul>
    </div>
  </div>
  <div class="ggw"><a href="#"><img src="/Public/images/ggw.png" width="1200" height="100" alt="ggw" /></a></div>
  <div class="lp">
  	<h1 class="title2">楼盘</h1>
    <ul>
    	<li><a href="#" class="lphover">独栋</a></li>
        <li><a href="#" class="lpli">写字楼</a></li>
        <li><a href="#" class="lpli"></a></li>
        <li><a href="#" class="lpli">独栋</a></li>
        <li><a href="#" class="lpli">独栋</a></li>
        <li><a href="#" class="lpli">独栋</a></li>
        <li><a href="#" class="lpli">独栋</a></li>
    </ul>
    <div class="lpimg">
   	  <div class="lpimg1"><p><a href="#">中国铁建梧桐汇</a><span>23000/平</span></p><a href="#"><img src="/Public/images/lp1.png" width="277" height="201" alt="lp" /></a></div>
      <div class="lpimg1 lpimg2"><p><a href="#">尚峯壹號</a><span>25000/平</span></p><a href="#"><img src="/Public/images/lp2.png" width="277" height="201" alt="lp" /></a></div>
      <div class="lpimg1 lpimg2"><p><a href="#">京投银泰檀香府</a><span>价格待定</span></p><a href="#"><img src="/Public/images/lp3.png" width="277" height="201" alt="lp" /></a></div>
      <div class="lpimg1 lpimg2"><p><a href="#">中国铁建梧桐汇</a><span>23000/平</span></p><a href="#"><img src="/Public/images/lp4.png" width="277" height="201" alt="lp" /></a></div>
    </div>
    <div class="lpimg lpimg3">
   	  <div class="lpimg1"><p><a href="#">中国铁建梧桐汇</a><span>23000/平</span></p><a href="#"><img src="/Public/images/lp3.png" width="277" height="201" alt="lp" /></a></div>
      <div class="lpimg1 lpimg2"><p><a href="#">中国铁建梧桐汇</a><span>23000/平</span></p><a href="#"><img src="/Public/images/lp4.png" width="277" height="201" alt="lp" /></a></div>
      <div class="lpimg1 lpimg2"><p><a href="#">中国铁建梧桐汇</a><span>23000/平</span></p><a href="#"><img src="/Public/images/lp1.png" width="277" height="201" alt="lp" /></a></div>
      <div class="lpimg1 lpimg2"><p><a href="#">中国铁建梧桐汇</a><span>23000/平</span></p><a href="#"><img src="/Public/images/lp2.png" width="277" height="201" alt="lp" /></a></div>
    </div>
  </div>
  <div class="ggw"><a href="#"><img src="/Public/images/ggw.png" width="1200" height="100" alt="ggw" /></a></div>
  <div class="lp">
  	<h1 class="title2 title3">房源</h1>
    <ul>
    	<li><a href="#" class="lphover">独栋</a></li>
        <li><a href="#" class="lpli">写字楼</a></li>
        <li><a href="#" class="lpli"></a></li>
        <li><a href="#" class="lpli">独栋</a></li>
        <li><a href="#" class="lpli">独栋</a></li>
        <li><a href="#" class="lpli">独栋</a></li>
        <li><a href="#" class="lpli">独栋</a></li>
    </ul>
    <div class="lpimg">
   	   <div class="lpimg1"><p><a href="#">中国铁建梧桐汇</a><span>23000/平</span></p><a href="#"><img src="/Public/images/lp1.png" width="277" height="201" alt="lp" /></a></div>
      <div class="lpimg1 lpimg2"><p><a href="#">尚峯壹號</a><span>25000/平</span></p><a href="#"><img src="/Public/images/lp2.png" width="277" height="201" alt="lp" /></a></div>
      <div class="lpimg1 lpimg2"><p><a href="#">京投银泰檀香府</a><span>价格待定</span></p><a href="#"><img src="/Public/images/lp3.png" width="277" height="201" alt="lp" /></a></div>
      <div class="lpimg1 lpimg2"><p><a href="#">中国铁建梧桐汇</a><span>23000/平</span></p><a href="#"><img src="/Public/images/lp4.png" width="277" height="201" alt="lp" /></a></div>
    </div>
    <div class="lpimg lpimg3">
   	  <div class="lpimg1"><p><a href="#">中国铁建梧桐汇</a><span>23000/平</span></p><a href="#"><img src="/Public/images/lp3.png" width="277" height="201" alt="lp" /></a></div>
      <div class="lpimg1 lpimg2"><p><a href="#">中国铁建梧桐汇</a><span>23000/平</span></p><a href="#"><img src="/Public/images/lp4.png" width="277" height="201" alt="lp" /></a></div>
      <div class="lpimg1 lpimg2"><p><a href="#">中国铁建梧桐汇</a><span>23000/平</span></p><a href="#"><img src="/Public/images/lp1.png" width="277" height="201" alt="lp" /></a></div>
      <div class="lpimg1 lpimg2"><p><a href="#">中国铁建梧桐汇</a><span>23000/平</span></p><a href="#"><img src="/Public/images/lp2.png" width="277" height="201" alt="lp" /></a></div>
    </div>
  </div>
  <div class="ggw"><a href="#"><img src="/Public/images/ggw2.png" width="1200" height="200" alt="ggw" /></a></div>
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

<!-- 委托选址弹窗 -->
<form>
    <div class="box">
        <div class="box1">
        <div class="box2">
         <div class="close" onclick="jQuery('.box').hide()"></div>
             <div style="overflow:hidden;margin-top:30px;" id="one">
                     <div style="width:75px;height:30px;float:left;text-align:center; line-height:30px; border: 2px solid rgb(47,138,185); color:rgb(47,137,187); font:bold;  margin-bottom:10px;">企业</div> <div  class="abox">代理人</div>
             </div>
             <div style="overflow:hidden;" id="two">
                     <div style="width:75px;height:30px;float:left;text-align:center; line-height:30px; border: 2px solid rgb(47,138,185); color:rgb(47,137,187); font:bold;  margin-bottom:10px;">独栋</div> <div  class="abox">写字楼</div> <div  class="abox">众创空间</div> <div  class="abox">厂房</div><div  class="abox"> 商铺</div>   <div  class="abox">土地</div>
             </div>
             <div><input type="text" placeholder="您的姓名" class="inputtext"></div>
             <div style="overflow:hidden;"><input type="text" placeholder="手机号（我们会为您保守这个秘密）" style="float:left;" class="inputtext"><button href="javascript:void(0);" name="yzm" style="float:left;margin-left:20px;"><p style="color:white;display: inline-block;padding:7px 20px;background-color: rgb(47,137,187);">获取验证码</p></button> </div>
             <div><input type="text" placeholder="验证码" class="inputtext"></div>
             <div><input type="text" placeholder="面积" class="inputtext"></div>
             <div style="overflow:hidden;" id="three"> <div style="width:75px;height:30px;float:left;text-align:center; line-height:30px; border: 2px solid rgb(47,138,185); color:rgb(47,137,187); font:bold;  margin-bottom:10px;">求租</div><div class="abox">购买</div></div>
             <div><input type="text" placeholder="预算" class="inputtext"></div>
             <div><textarea placeholder="填写您的位置或其他需求" class="inputtextarea"></textarea></div>
             <button href="javascript:void(0);" name="yzm" style="float:left;"><p style="color:white;display: inline-block;padding:7px 20px;background-color: rgb(47,137,187);font-size:18px;">确认提交<span style="color:white;">（感谢您的填写）</span></p></button>

        </div>
        </div>
    </div>
    </form>
    <!-- 委托选址弹窗 -->
</body>
<script src="/Public/js/edit.js" type="text/javascript"></script>
</html>