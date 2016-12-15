<?php if (!defined('THINK_PATH')) exit();?><!--
*author:马豪珍
*time:2016-12-14
-->
<!DOCTYPE html>
<html>
<head>
	<title>校园跳蚤市场</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"><!--IE8-->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"><!--屏幕自适应-->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" type="text/css" href="lib/weui.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-weui.css">
  <link rel="stylesheet" type="text/css" href="css/index1.css">
  <link rel="stylesheet" href="css/swiper-3.3.1.min.css" />
	<style type="text/css">
	html,body{
		height: 100%;
	}
  #messa{
    margin-right: -10px;
    padding-left: 3px;
  }
  .dian{
    margin-right: -15px;
  }
  .swiper-wrapper{
    height: 190px;
  }
	</style>
<body >
    <div class="weui_tab">
  <div class="weui_tab_bd">
  <!--搜索-->
  <div class="weui_search_bar" id="search_bar">
  <form class="weui_search_outer">
    <div class="weui_search_inner">
      <i class="weui_icon_search"></i>
      <input type="search" class="weui_search_input" id="search_input" placeholder="搜索" required/>
      <a href="javascript:" class="weui_icon_clear" id="search_clear"></a>
    </div>
    <label for="search_input" class="weui_search_text" id="search_text">
      <i class="weui_icon_search"></i>
      <span>搜索</span>
    </label>
  </form>
  <a href="javascript:" class="weui_search_cancel" id="search_cancel">取消</a>
  <div class="me">
    <div><img id="messa" src="images/message5.png" width="30px" height="30px"><span><img src="images/bullet-red.png" class="dian"></span></div>
  </div>
</div>
   <!--接束-->
<!--幻灯片开始-->
    <div class="swiper-container" data-space-between='10' data-pagination='.swiper-pagination' data-autoplay="1000">
  <div class="swiper-wrapper">
    <div class="swiper-slide"><a href="action.html"><img src="images/hua.jpg" width="100%" height="100%" alt=""></a></div>
    <div class="swiper-slide"><a href="action.html"><img src="images/lunbo.jpg" width="100%" height="100%" alt=""></a></div>
    <div class="swiper-slide"><a href="action.html"><img src="images/paimail.jpg" width="100%" height="100%" alt=""></a></div>
  </div>
  <div class="swiper-pagination"></div>
</div>
<!--幻灯片结束-->
<!--商品分类开始-->
<div class="recommed" style="background-color: rgb(246,246,246);" >
<div class="rec" style="margin:10px;font-family: KaiTi; font-size: 25px;" ><p>商品分类</p></div>
<div class="weui-row weui-no-gutter" width="100%" id="fenlei">  
  <div class="weui-col-33" style="font-family: KaiTi;"align="center"><a href="#"><img src="images/xuexitu.jpg" width="65%" height="65%"></a>
     <p style="text-align:center">学习用品</p></div>      
  <div class="weui-col-33" style="font-family: KaiTi;" align="center"><a href="#"><img src="images/dianzi.jpg" width="70%" height="70%"></a>
     <p style="text-align:center">电子数码</p></div>     
  <div class="weui-col-33" style="font-family: KaiTi;"align="center"><a href="#"><img src="images/fushi.jpg" width="70%" height="70%"></a>
     <p style="text-align:center">服装饰品</p></div> 
  <div class="weui-col-33" style="font-family: KaiTi;"align="center"><a href="#"><img src="images/che.jpg" width="65%" height="65%"></a>
     <p style="text-align:center">出行工具</p></div>      
  <div class="weui-col-33" style="font-family: KaiTi;"align="center"><a href="#"><img src="images/yundong.jpg" width="65%" height="65%"></a>
     <p style="text-align:center">运动器材</p></div>     
  <div class="weui-col-33" style="font-family: KaiTi;"align="center"><a href="#"><img src="images/xuni.jpg" width="65%" height="65%"></a> 
     <p style="text-align:center">虚拟物品</p></div>    
</div>
</div>
<!--商品分类结束--> 

<!--二手推荐开始-->
<div class="recommed">
<div class="rec" style="margin:5px; font-family: KaiTi; font-size: 20px;"><p>二手推荐</p></div>
<div class="wrapper" id="tuijian">
  <section class="main">
    <div class="swiper-container" id="registerCont">
      <div class="swiper-wrapper" height="80px">
        <div class="swiper-slide">
            <div class="baodaninfo" width="100%" height="80%">
              <img src="images/shuijing.jpg" width="35%" height="25%">
              <img src="images/shouji.jpg" width="30%" height="25%">
              <img src="images/bangong.png" width="30%" height="35%">
            </div>
        </div>
        <div class="swiper-slide" width="100%" height="80%">
            <div class="baodaninfo">
              <img src="images/shoes.png" width="30%" height="35%">
              <img src="images/shouji.jpg" width="30%" height="25%">
              <img src="images/ball1.png" width="30%" heighheight="35%">
            </div>
        </div>
      </div>
    </div>
  </section>
</div>
</div>
<!--二手推荐结束-->
<!--商品列表开始-->
<div>
<!--标题栏开始-->
<div>
  </a>
  <hr/>
  <a style="background-color:#FFFFFF" class="weui_cell" href="javascript:;">   
    <div class="weui_cell_bd weui_cell_primary">
      <img src="images/taiyang.png" width="10%" height="10%" class="taiyang">
      <p style="color:#000000;">学习用品</p>
    </div>
  </a>
</div>
<!--标题栏结束-->
<!--内容栏开始-->
<div class="weui-row weui-no-gutter" >
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/teacher.png" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">教师资格证辅导书
      <p class="price" style="text-align:center;color: #FF0000;">&yen;22</p>
     </p>
  </div>
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/six.png" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">六级真题卷子
      <p class="price" style="text-align:center;color: #FF0000;">&yen;13</p>
     </p>
  </div>
  <HR style="align:center; color:#FCFCFC; width:100%;"  SIZE=1>
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/xinling.jpg" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">值得收藏的漫画书
      <p class="price" style="text-align:center;color: #FF0000;">&yen;23</p>
     </p>
  </div>
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/dian.jpg" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">人生的巅峰
      <p class="price" style="text-align:center;color: #FF0000;">&yen;15</p>
     </p>
  </div>
</div>
<!--内容栏结束-->
</div>
<!--商品列表结束--> 

<!--商品列表开始-->
<div>
<!--标题栏开始-->
<div>
  </a>
  <hr/>
  <a style="background-color:#FFFFFF" class="weui_cell" href="javascript:;">   
    <div class="weui_cell_bd weui_cell_primary">
      <img src="images/taiyang.png" width="10%" height="10%" class="taiyang">
      <p style="color:#000000;">学习用品</p>
    </div>
  </a>
</div>
<!--标题栏结束-->
<!--内容栏开始-->
<div class="weui-row weui-no-gutter" >
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/teacher.png" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">教师资格证辅导书
      <p class="price" style="text-align:center;color: #FF0000;">&yen;22</p>
     </p>
  </div>
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/six.png" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">六级真题卷子
      <p class="price" style="text-align:center;color: #FF0000;">&yen;13</p>
     </p>
  </div>
  <HR style="align:center; color:#FCFCFC; width:100%;"  SIZE=1>
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/xinling.jpg" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">值得收藏的漫画书
      <p class="price" style="text-align:center;color: #FF0000;">&yen;23</p>
     </p>
  </div>
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/dian.jpg" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">人生的巅峰
      <p class="price" style="text-align:center;color: #FF0000;">&yen;15</p>
     </p>
  </div>
</div>
<!--内容栏结束-->
</div>
<!--商品列表结束--> 

<!--商品列表开始-->
<div>
<!--标题栏开始-->
<div>
  </a>
  <hr/>
  <a style="background-color:#FFFFFF" class="weui_cell" href="javascript:;">   
    <div class="weui_cell_bd weui_cell_primary">
      <img src="images/taiyang.png" width="10%" height="10%" class="taiyang">
      <p style="color:#000000;">学习用品</p>
    </div>
  </a>
</div>
<!--标题栏结束-->
<!--内容栏开始-->
<div class="weui-row weui-no-gutter" >
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/teacher.png" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">教师资格证辅导书
      <p class="price" style="text-align:center;color: #FF0000;">&yen;22</p>
     </p>
  </div>
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/six.png" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">六级真题卷子
      <p class="price" style="text-align:center;color: #FF0000;">&yen;13</p>
     </p>
  </div>
  <HR style="align:center; color:#FCFCFC; width:100%;"  SIZE=1>
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/xinling.jpg" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">值得收藏的漫画书
      <p class="price" style="text-align:center;color: #FF0000;">&yen;23</p>
     </p>
  </div>
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/dian.jpg" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">人生的巅峰
      <p class="price" style="text-align:center;color: #FF0000;">&yen;15</p>
     </p>
  </div>
</div>
<!--内容栏结束-->
</div>
<!--商品列表结束--> 

<!--商品列表开始-->
<div>
<!--标题栏开始-->
<div>
  </a>
  <hr/>
  <a style="background-color:#FFFFFF" class="weui_cell" href="javascript:;">   
    <div class="weui_cell_bd weui_cell_primary">
      <img src="images/taiyang.png" width="10%" height="10%" class="taiyang">
      <p style="color:#000000;">学习用品</p>
    </div>
  </a>
</div>
<!--标题栏结束-->
<!--内容栏开始-->
<div class="weui-row weui-no-gutter" >
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/teacher.png" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">教师资格证辅导书
      <p class="price" style="text-align:center;color: #FF0000;">&yen;22</p>
     </p>
  </div>
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/six.png" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">六级真题卷子
      <p class="price" style="text-align:center;color: #FF0000;">&yen;13</p>
     </p>
  </div>
  <HR style="align:center; color:#FCFCFC; width:100%;"  SIZE=1>
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/xinling.jpg" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">值得收藏的漫画书
      <p class="price" style="text-align:center;color: #FF0000;">&yen;23</p>
     </p>
  </div>
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/dian.jpg" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">人生的巅峰
      <p class="price" style="text-align:center;color: #FF0000;">&yen;15</p>
     </p>
  </div>
</div>
<!--内容栏结束-->
</div>
<!--商品列表结束--> 

<!--商品列表开始-->
<div>
<!--标题栏开始-->
<div>
  </a>
  <hr/>
  <a style="background-color:#FFFFFF" class="weui_cell" href="javascript:;">   
    <div class="weui_cell_bd weui_cell_primary">
      <img src="images/taiyang.png" width="10%" height="10%" class="taiyang">
      <p style="color:#000000;">学习用品</p>
    </div>
  </a>
</div>
<!--标题栏结束-->
<!--内容栏开始-->
<div class="weui-row weui-no-gutter" >
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/teacher.png" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">教师资格证辅导书
      <p class="price" style="text-align:center;color: #FF0000;">&yen;22</p>
     </p>
  </div>
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/six.png" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">六级真题卷子
      <p class="price" style="text-align:center;color: #FF0000;">&yen;13</p>
     </p>
  </div>
  <HR style="align:center; color:#FCFCFC; width:100%;"  SIZE=1>
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/xinling.jpg" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">值得收藏的漫画书
      <p class="price" style="text-align:center;color: #FF0000;">&yen;23</p>
     </p>
  </div>
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/dian.jpg" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">人生的巅峰
      <p class="price" style="text-align:center;color: #FF0000;">&yen;15</p>
     </p>
  </div>
</div>
<!--内容栏结束-->
</div>
<!--商品列表结束--> 

<!--商品列表开始-->
<div>
<!--标题栏开始-->
<div>
  </a>
  <hr/>
  <a style="background-color:#FFFFFF" class="weui_cell" href="javascript:;">   
    <div class="weui_cell_bd weui_cell_primary">
      <img src="images/taiyang.png" width="10%" height="10%" class="taiyang">
      <p style="color:#000000;">学习用品</p>
    </div>
  </a>
</div>
<!--标题栏结束-->
<!--内容栏开始-->
<div class="weui-row weui-no-gutter" >
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/teacher.png" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">教师资格证辅导书
      <p class="price" style="text-align:center;color: #FF0000;">&yen;22</p>
     </p>
  </div>
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/six.png" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">六级真题卷子
      <p class="price" style="text-align:center;color: #FF0000;">&yen;13</p>
     </p>
  </div>
  <HR style="align:center; color:#FCFCFC; width:100%;"  SIZE=1>
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/xinling.jpg" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">值得收藏的漫画书
      <p class="price" style="text-align:center;color: #FF0000;">&yen;23</p>
     </p>
  </div>
  <div class="weui-col-50" align="center"><a href="#">
   <img src="images/1/dian.jpg" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;">人生的巅峰
      <p class="price" style="text-align:center;color: #FF0000;">&yen;15</p>
     </p>
  </div>
</div>
<!--内容栏结束-->
</div>
<!--商品列表结束--> 
<!--底部开始-->
  <div class="footer">
    <p>@2014-2016跳蚤市场-最方便可靠的校园二手市场</p>
    <p>联系我们：1379173944@qq.com 地址：河北师范大学软件学院</p>
    <p>Copyright www.lansongs.com. All Rights Reserved.
  </div>
<!--底部接束-->
  <div class="weui_tabbar">
    <a href="javascript:;" class="weui_tabbar_item weui_bar_item_on">
      <div class="weui_tabbar_icon">
        <img src="images/shop.png" alt="">
      </div>
      <p class="weui_tabbar_label">首页</p>
    </a>
    <a href="javascript:;" class="weui_tabbar_item" >
      <div class="weui_tabbar_icon">
        <img src="images/jiahao.jpg" width="100%">
      </div>
      <p class="weui_tabbar_label">发布</p>
    </a>
    <a href="javascript:;" class="weui_tabbar_item">
      <div class="weui_tabbar_icon">
        <img src="images/my.png" alt="">
      </div>
      <p class="weui_tabbar_label">我的</p>
    </a>
  </div>
</div>
</div>
</body>

<script type="text/javascript" src="lib/jquery-2.1.4.js"></script>
<script type="text/javascript" src="js/jquery-weui.min.js"></script>
<script type='text/javascript' src='js/swiper.js' charset='utf-8'>
</script>
 <script>
      $(".swiper-container").swiper({
        loop: true,
        autoplay: 3000
      });
       $("#messa").click(function(){
         $(".me span").hide();
     });
</script>
</html>