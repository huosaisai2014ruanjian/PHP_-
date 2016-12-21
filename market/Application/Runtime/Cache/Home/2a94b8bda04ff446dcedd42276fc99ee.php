<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--时间：2016.12.5-7 
    编写者：兰天旭  -->
<html>
<head>
	<title>校园跳蚤市场</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"><!--IE8-->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"><!--屏幕自适应-->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" type="text/css" href="/php_-/market/Public/lib/weui.min.css">
	<link rel="stylesheet" type="text/css" href="/php_-/market/Public/css/jquery-weui.css">
  <link rel="stylesheet" type="text/css" href="/php_-/market/Public/css/index1.css">
  <link rel="stylesheet" href="/php_-/market/Public/css/swiper-3.3.1.min.css" />
	<style type="text/css">
	html,body{
		height: 100%;
	}
	</style>
<body >
  <h1><?php echo (session('openid')); ?></h1>
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
    <div><img id="messa" src="/php_-/market/Public/images/message5.png" width="30px" height="30px"><span><img src="/php_-/market/Public/images/bullet-red.png"></span></div>
  </div>
</div>
   <!--接束-->
   <!--幻灯片开始-->
   
    <div class="swiper-container" data-space-between='10' data-pagination='.swiper-pagination' data-autoplay="1000">
   
  <div class="swiper-wrapper">
  <?php if(is_array($Carousel)): $i = 0; $__LIST__ = $Carousel;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="swiper-slide"><a href="action.html"><img src="/php_-/market/Public/<?php echo ($vo["active_img"]); ?>" width="100%" height="100%" alt=""></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>

  <div class="swiper-pagination"></div>

</div>

<!--幻灯片结束-->
    <div class="recommed" style="color:#8C8C8C" >
      <div class="rec" style="margin:10px"><p>商品分类</p></div>
      
 
<div class="weui-row weui-no-gutter" >
  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="weui-col-33" style="border:1px solid #B5B5B5"align="center"><a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo["id"]); ?>"><img src="/php_-/market/Public/<?php echo ($vo["imgurl"]); ?>" ></a>
     <a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo["id"]); ?>"><p style="text-align:center;color:black" ><?php echo ($vo["name"]); ?></p></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
  
        </div>
    </div>
   
    <!--二手推荐-->
    
    <div class="recommed">
      <div class="rec" style="margin:5px"><p>二手推荐</p></div>
   <div class="wrapper">
  <section class="main">
    <div class="swiper-container" id="registerCont">
      <div class="swiper-wrapper" height="100px">
        <div class="swiper-slide">
            <div class="baodaninfo" >
              <img src="/php_-/market/Public/images/comm2.jpg" width="30%" height="100px">
              <img src="/php_-/market/Public/images/apple4.jpg" width="30%" height="100px">
              <img src="/php_-/market/Public/images/shoes.png" width="30%" height="100px">
            </div>
        </div>
        <div class="swiper-slide">
            <div class="baodaninfo">
              <img src="/php_-/market/Public/images/apple4.jpg" width="30%" height="100px">
              <img src="/php_-/market/Public/images/books.png" width="30%" height="100px">
              <img src="/php_-/market/Public/images/ball1.png" width="30%" height="100px">
            </div>
        </div>
      </div>
    </div>
  </section>
</div>
</div>

<!--商品分类接束-->
<!--商品列表-->
<div>
<!--标题栏-->
<div>
  </a>
  <hr/>
  <a style="background-color:#FFFFFF" class="weui_cell" href="/php_-/market/index.php/Home/Goodslist/goodslist?id=8">
   
    <div class="weui_cell_bd weui_cell_primary">
      <p style="color:#000000">学习用品</p>
    </div>
   <div class="weui_cell_hd">
      <img src="/php_-/market/Public/images/more.png" alt="icon" style="width:25px;margin-right:6px;display:block">
    </div>
  </a>
</div>
<!--标题栏结束-->
<!--内容栏-->
<div class="weui-row weui-no-gutter">
<?php if(is_array($goods1)): $i = 0; $__LIST__ = $goods1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="weui-col-50" style="border:1px solid #B5B5B5"align="center"><a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>">
   <img src="/php_-/market/Public/<?php echo ($vo["photo"]); ?>" ></a>
     <p class="goodname" style="text-align:center"><?php echo ($vo["name"]); ?>
     <p class="nickname" style="text-align:center"><?php echo ($vo["nickname"]); ?>
      <p class="price" style="text-align:center; color:red" >价格:<?php echo ($vo["price"]); ?></p>
      </p>
     </p>
  </div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<!--内容栏结束-->
</div>
<!--商品列表栏结束--> 

<!--商品列表-->
<div>
<!--标题栏-->
<div>
  </a>
  <hr/>
  <a style="background-color:#FFFFFF" class="weui_cell" href="/php_-/market/index.php/Home/Goodslist/goodslist?id=10">
   
    <div class="weui_cell_bd weui_cell_primary">
      <p style="color:#000000">电子数码</p>
    </div>
   <div class="weui_cell_hd">
      <img src="/php_-/market/Public/images/more.png" alt="icon" style="width:25px;margin-right:6px;display:block">
    </div>
  </a>
</div>
<!--标题栏结束-->
<!--内容栏-->
<div class="weui-row weui-no-gutter">
<?php if(is_array($goods2)): $i = 0; $__LIST__ = $goods2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="weui-col-50" style="border:1px solid #B5B5B5"align="center"><a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>">
   <img src="/php_-/market/Public/<?php echo ($vo["photo"]); ?>" ></a>
     <p class="goodname" style="text-align:center"><?php echo ($vo["name"]); ?>
     <p class="nickname" style="text-align:center"><?php echo ($vo["nickname"]); ?>
      <p class="price" style="text-align:center; color:red" >价格:<?php echo ($vo["price"]); ?></p>
      </p>
     </p>
  </div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<!--内容栏结束-->
</div>
<!--商品列表栏结束--> 
<!--商品列表-->
<div>
<!--标题栏-->
<div>
  </a>
  <hr/>
  <a style="background-color:#FFFFFF" class="weui_cell" href="/php_-/market/index.php/Home/Goodslist/goodslist?id=11">
   
    <div class="weui_cell_bd weui_cell_primary">
      <p style="color:#000000">服装饰品</p>
    </div>
   <div class="weui_cell_hd">
      <img src="/php_-/market/Public/images/more.png" alt="icon" style="width:25px;margin-right:6px;display:block">
    </div>
  </a>
</div>
<!--标题栏结束-->
<!--内容栏-->
<div class="weui-row weui-no-gutter">
<?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="weui-col-50" style="border:1px solid #B5B5B5"align="center"><a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>">
   <img src="/php_-/market/Public/<?php echo ($vo["photo"]); ?>" ></a>
     <p class="goodname" style="text-align:center"><?php echo ($vo["name"]); ?>
     <p class="nickname" style="text-align:center"><?php echo ($vo["nickname"]); ?>
      <p class="price" style="text-align:center; color:red" >价格:<?php echo ($vo["price"]); ?></p>
      </p>
     </p>
  </div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<!--内容栏结束-->
</div>
<!--商品列表栏结束--> 
<!--商品列表-->
<div>
<!--标题栏-->
<div>
  </a>
  <hr/>
  <a style="background-color:#FFFFFF" class="weui_cell" href="/php_-/market/index.php/Home/Goodslist/goodslist?id=12">
   
    <div class="weui_cell_bd weui_cell_primary">
      <p style="color:#000000">出行工具</p>
    </div>
   <div class="weui_cell_hd">
      <img src="/php_-/market/Public/images/more.png" alt="icon" style="width:25px;margin-right:6px;display:block">
    </div>
  </a>
</div>
<!--标题栏结束-->
<!--内容栏-->
<div class="weui-row weui-no-gutter">
<?php if(is_array($goods4)): $i = 0; $__LIST__ = $goods4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="weui-col-50" style="border:1px solid #B5B5B5"align="center"><a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>">
   <img src="/php_-/market/Public/<?php echo ($vo["photo"]); ?>" ></a>
     <p class="goodname" style="text-align:center"><?php echo ($vo["name"]); ?>
     <p class="nickname" style="text-align:center"><?php echo ($vo["nickname"]); ?>
      <p class="price" style="text-align:center; color:red" >价格:<?php echo ($vo["price"]); ?></p>
      </p>
     </p>
  </div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<!--内容栏结束-->
</div>
<!--商品列表栏结束--> 
<!--商品列表-->
<div>
<!--标题栏-->
<div>
  </a>
  <hr/>
  <a style="background-color:#FFFFFF" class="weui_cell" href="/php_-/market/index.php/Home/Goodslist/goodslist?id=13">
   
    <div class="weui_cell_bd weui_cell_primary">
      <p style="color:#000000">运动器材</p>
    </div>
   <div class="weui_cell_hd">
      <img src="/php_-/market/Public/images/more.png" alt="icon" style="width:25px;margin-right:6px;display:block">
    </div>
  </a>
</div>
<!--标题栏结束-->
<!--内容栏-->
<div class="weui-row weui-no-gutter">
<?php if(is_array($goods5)): $i = 0; $__LIST__ = $goods5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="weui-col-50" style="border:1px solid #B5B5B5"align="center"><a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>">
   <img src="/php_-/market/Public/<?php echo ($vo["photo"]); ?>" ></a>
     <p class="goodname" style="text-align:center"><?php echo ($vo["name"]); ?>
     <p class="nickname" style="text-align:center"><?php echo ($vo["nickname"]); ?>
      <p class="price" style="text-align:center; color:red" >价格:<?php echo ($vo["price"]); ?></p>
      </p>
     </p>
  </div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<!--内容栏结束-->
</div>
<!--商品列表栏结束--> 
<!--商品列表-->
<div>
<!--标题栏-->
<div>
  </a>
  <hr/>
  <a style="background-color:#FFFFFF" class="weui_cell" href="/php_-/market/index.php/Home/Goodslist/goodslist?id=14">
   
    <div class="weui_cell_bd weui_cell_primary">
      <p style="color:#000000">虚拟物品</p>
    </div>
   <div class="weui_cell_hd">
      <img src="/php_-/market/Public/images/more.png" alt="icon" style="width:25px;margin-right:6px;display:block">
    </div>
  </a>
</div>
<!--标题栏结束-->
<!--内容栏-->
<div class="weui-row weui-no-gutter">
<?php if(is_array($goods6)): $i = 0; $__LIST__ = $goods6;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="weui-col-50" style="border:1px solid #B5B5B5"align="center"><a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>">
   <img src="/php_-/market/Public/<?php echo ($vo["photo"]); ?>" ></a>
     <p class="goodname" style="text-align:center"><?php echo ($vo["name"]); ?>
     <p class="nickname" style="text-align:center"><?php echo ($vo["nickname"]); ?>
      <p class="price" style="text-align:center; color:red" >价格:<?php echo ($vo["price"]); ?></p>
      </p>
     </p>
  </div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<!--内容栏结束-->
</div>
<!--商品列表栏结束--> 

 

<!--底部开始-->
  <div class="footer">
    @2012-2016跳蚤市场-最方便可靠的二手市场
  </div>
<!--底部接束-->
  </div>
  <div class="weui_tabbar">
    <a href="javascript:;" class="weui_tabbar_item weui_bar_item_on">
      <div class="weui_tabbar_icon">
        <img src="/php_-/market/Public/images/shop.png" alt="">
      </div>
      <p class="weui_tabbar_label">首页</p>
    </a>
    <a href="/market/index.php/home/goods/index" class="weui_tabbar_item" id="certain">
      <div class="weui_tabbar_icon">
        <img src="/php_-/market/Public/images/fabu.png" alt="">
      </div>
      <p class="weui_tabbar_label">发布</p>
    </a>
    <a href="/market/index.php/home/users/index/id/1" class="weui_tabbar_item">
      <div class="weui_tabbar_icon">
        <img src="/php_-/market/Public/images/my.png" alt="">
      </div>
      <p class="weui_tabbar_label">我的</p>
    </a>
  </div>
</div>
</div>
</body>
<script type="text/javascript" src="/php_-/market/Public/js/Libs/jquery.min.js" ></script>
<script type="text/javascript" src="/php_-/market/Public/js/Libs/jquery.json.js" ></script>
<script type="text/javascript" src="/php_-/market/Public/js/Libs/swiper-3.3.1.jquery.min.js" ></script>
<script type="text/javascript" src="/php_-/market/Public/js/Addpolicy.js"></script>
<script type="text/javascript" src="/php_-/market/Public/lib/jquery-2.1.4.js"></script>
<script type="text/javascript" src="/php_-/market/Public/js/jquery-weui.min.js"></script>
<script type='text/javascript' src='/php_-/market/Public/js/swiper.js' charset='utf-8'>
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