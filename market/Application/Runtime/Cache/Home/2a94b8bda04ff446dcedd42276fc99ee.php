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
	<link rel="stylesheet" type="text/css" href="/php_-/market/Public/lib/weui.min.css">
	<link rel="stylesheet" type="text/css" href="/php_-/market/Public/css/jquery-weui.css">
  <link rel="stylesheet" type="text/css" href="/php_-/market/Public/css/index1.css">
  <link rel="stylesheet" href="/php_-/market/Public/css/swiper-3.3.1.min.css" />
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
  <form action="/php_-/market/index.php/Home/Serach/index" method="post" class="weui_search_outer">
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
    <div><img id="messa" src="/php_-/market/Public/images/message5.png" width="30px" height="30px"><span><img src="/php_-/market/Public/images/bullet-red.png" class="dian"></span></div>
  </div>
</div>
   <!--接束-->
<!--幻灯片开始-->
    <div class="swiper-container" data-space-between='10' data-pagination='.swiper-pagination' data-autoplay="1000">
  <div class="swiper-wrapper">
    <div class="swiper-slide"><a href="action.html"><img src="/php_-/market/Public/images/hua.jpg" width="100%" height="100%" alt=""></a></div>
    <div class="swiper-slide"><a href="action.html"><img src="/php_-/market/Public/images/lunbo.jpg" width="100%" height="100%" alt=""></a></div>
    <div class="swiper-slide"><a href="action.html"><img src="/php_-/market/Public/images/paimail.jpg" width="100%" height="100%" alt=""></a></div>
  </div>
  <div class="swiper-pagination"></div>
</div>
<!--幻灯片结束-->
<!--商品分类开始-->
<div class="recommed" style="background-color: rgb(246,246,246);" >
<div class="rec" style="margin:10px;font-family: KaiTi; font-size: 25px;" ><p>商品分类</p></div>
<div class="weui-row weui-no-gutter" width="100%" id="fenlei">
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="weui-col-33" style="font-family: KaiTi;"align="center"><a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo["id"]); ?>"><img src="/php_-/market/Public/<?php echo ($vo["imgurl"]); ?>" width="65%" height="65%"></a>
        <a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo["id"]); ?>"><p style="text-align:center"><?php echo ($vo["name"]); ?></p></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
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
              <a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>"><img src="/php_-/market/Public/images/shuijing.jpg" width="35%" height="25%"></a>
              <a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>"><img src="/php_-/market/Public/images/shouji.jpg" width="30%" height="25%"></a>
              <a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>"><img src="/php_-/market/Public/images/bangong.png" width="30%" height="35%"></a>
            </div>
        </div>
        <div class="swiper-slide" width="100%" height="80%">
            <div class="baodaninfo">
             <a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>"><img src="/php_-/market/Public/images/shoes.png" width="30%" height="35%"></a>
             <a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>"><img src="/php_-/market/Public/images/shouji.jpg" width="30%" height="25%"></a>
             <a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>"><img src="/php_-/market/Public/images/ball1.png" width="30%" heighheight="35%"></a>
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
  <a style="background-color:#FFFFFF" class="weui_cell" href="/php_-/market/index.php/Home/Goodslist/goodslist?id=8">
    <div class="weui_cell_bd weui_cell_primary">
      <img src="/php_-/market/Public/images/taiyang.png" width="10%" height="10%" class="taiyang">
      <p style="color:#000000;">学习用品</p>
    </div>
  </a>
</div>
<!--标题栏结束-->
<!--内容栏开始-->
<div class="weui-row weui-no-gutter" >
    <?php if(is_array($study)): $i = 0; $__LIST__ = $study;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="weui-col-50" align="center"><a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>">
   <img src="/php_-/market/Public/<?php echo ($vo["photo"]); ?>" ></a>
     <p class="goodname" style="text-align:center;font-size:6px;"><?php echo ($vo["name"]); ?>
      <p class="price" style="text-align:center;color: #FF0000;">&yen;<?php echo ($vo["price"]); ?></p>
     </p>
  </div><?php endforeach; endif; else: echo "" ;endif; ?>
  <HR style="align:center; color:#FCFCFC; width:100%;"  SIZE=1>
    <?php if(is_array($study)): $i = 0; $__LIST__ = $study;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="weui-col-50" align="center"><a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>">
            <img src="/php_-/market/Public/<?php echo ($vo["photo"]); ?>" ></a>
            <p class="goodname" style="text-align:center;font-size:6px;"><?php echo ($vo["name"]); ?>
            <p class="price" style="text-align:center;color: #FF0000;">&yen;<?php echo ($vo["price"]); ?></p>
            </p>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
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
              <a style="background-color:#FFFFFF" class="weui_cell" href="/php_-/market/index.php/Home/Goodslist/goodslist?id=10">
                  <div class="weui_cell_bd weui_cell_primary">
                      <img src="/php_-/market/Public/images/taiyang.png" width="10%" height="10%" class="taiyang">
                      <p style="color:#000000;">电子数码</p>
                  </div>
              </a>
          </div>
          <!--标题栏结束-->
          <!--内容栏开始-->
          <div class="weui-row weui-no-gutter" >
              <?php if(is_array($electronics)): $i = 0; $__LIST__ = $electronics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="weui-col-50" align="center"><a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>">
                      <img src="/php_-/market/Public/<?php echo ($vo["photo"]); ?>" ></a>
                      <p class="goodname" style="text-align:center;font-size:6px;"><?php echo ($vo["name"]); ?>
                      <p class="price" style="text-align:center;color: #FF0000;">&yen;<?php echo ($vo["price"]); ?></p>
                      </p>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
              <HR style="align:center; color:#FCFCFC; width:100%;"  SIZE=1>
              <?php if(is_array($electronics)): $i = 0; $__LIST__ = $electronics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="weui-col-50" align="center"><a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>">
                      <img src="/php_-/market/Public/<?php echo ($vo["photo"]); ?>" ></a>
                      <p class="goodname" style="text-align:center;font-size:6px;"><?php echo ($vo["name"]); ?>
                      <p class="price" style="text-align:center;color: #FF0000;">&yen;<?php echo ($vo["price"]); ?></p>
                      </p>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
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
              <a style="background-color:#FFFFFF" class="weui_cell" href="/php_-/market/index.php/Home/Goodslist/goodslist?id=11">
                  <div class="weui_cell_bd weui_cell_primary">
                      <img src="/php_-/market/Public/images/taiyang.png" width="10%" height="10%" class="taiyang">
                      <p style="color:#000000;">服装服饰</p>
                  </div>
              </a>
          </div>
          <!--标题栏结束-->
          <!--内容栏开始-->
          <div class="weui-row weui-no-gutter" >
              <?php if(is_array($cloths)): $i = 0; $__LIST__ = $cloths;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="weui-col-50" align="center"><a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>">
                      <img src="/php_-/market/Public/<?php echo ($vo["photo"]); ?>" ></a>
                      <p class="goodname" style="text-align:center;font-size:6px;"><?php echo ($vo["name"]); ?>
                      <p class="price" style="text-align:center;color: #FF0000;">&yen;<?php echo ($vo["price"]); ?></p>
                      </p>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
              <HR style="align:center; color:#FCFCFC; width:100%;"  SIZE=1>
              <?php if(is_array($cloths)): $i = 0; $__LIST__ = $cloths;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="weui-col-50" align="center"><a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>">
                      <img src="/php_-/market/Public/<?php echo ($vo["photo"]); ?>" ></a>
                      <p class="goodname" style="text-align:center;font-size:6px;"><?php echo ($vo["name"]); ?>
                      <p class="price" style="text-align:center;color: #FF0000;">&yen;<?php echo ($vo["price"]); ?></p>
                      </p>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
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
              <a style="background-color:#FFFFFF" class="weui_cell" href="/php_-/market/index.php/Home/Goodslist/goodslist?id=12">
                  <div class="weui_cell_bd weui_cell_primary">
                      <img src="/php_-/market/Public/images/taiyang.png" width="10%" height="10%" class="taiyang">
                      <p style="color:#000000;">出行工具</p>
                  </div>
              </a>
          </div>
          <!--标题栏结束-->
          <!--内容栏开始-->
          <div class="weui-row weui-no-gutter" >
              <?php if(is_array($bike)): $i = 0; $__LIST__ = $bike;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="weui-col-50" align="center"><a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>">
                      <img src="/php_-/market/Public/<?php echo ($vo["photo"]); ?>" ></a>
                      <p class="goodname" style="text-align:center;font-size:6px;"><?php echo ($vo["name"]); ?>
                      <p class="price" style="text-align:center;color: #FF0000;">&yen;<?php echo ($vo["price"]); ?></p>
                      </p>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
              <HR style="align:center; color:#FCFCFC; width:100%;"  SIZE=1>
              <?php if(is_array($bike)): $i = 0; $__LIST__ = $bike;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="weui-col-50" align="center"><a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>">
                      <img src="/php_-/market/Public/<?php echo ($vo["photo"]); ?>" ></a>
                      <p class="goodname" style="text-align:center;font-size:6px;"><?php echo ($vo["name"]); ?>
                      <p class="price" style="text-align:center;color: #FF0000;">&yen;<?php echo ($vo["price"]); ?></p>
                      </p>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
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
              <a style="background-color:#FFFFFF" class="weui_cell" href="/php_-/market/index.php/Home/Goodslist/goodslist?id=13">
                  <div class="weui_cell_bd weui_cell_primary">
                      <img src="/php_-/market/Public/images/taiyang.png" width="10%" height="10%" class="taiyang">
                      <p style="color:#000000;">运动器材</p>
                  </div>
              </a>
          </div>
          <!--标题栏结束-->
          <!--内容栏开始-->
          <div class="weui-row weui-no-gutter" >
              <?php if(is_array($sports)): $i = 0; $__LIST__ = $sports;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="weui-col-50" align="center"><a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>">
                      <img src="/php_-/market/Public/<?php echo ($vo["photo"]); ?>" ></a>
                      <p class="goodname" style="text-align:center;font-size:6px;"><?php echo ($vo["name"]); ?>
                      <p class="price" style="text-align:center;color: #FF0000;">&yen;<?php echo ($vo["price"]); ?></p>
                      </p>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
              <HR style="align:center; color:#FCFCFC; width:100%;"  SIZE=1>
              <?php if(is_array($sports)): $i = 0; $__LIST__ = $sports;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="weui-col-50" align="center"><a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>">
                      <img src="/php_-/market/Public/<?php echo ($vo["photo"]); ?>" ></a>
                      <p class="goodname" style="text-align:center;font-size:6px;"><?php echo ($vo["name"]); ?>
                      <p class="price" style="text-align:center;color: #FF0000;">&yen;<?php echo ($vo["price"]); ?></p>
                      </p>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
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
              <a style="background-color:#FFFFFF" class="weui_cell" href="/php_-/market/index.php/Home/Goodslist/goodslist?id=14">
                  <div class="weui_cell_bd weui_cell_primary">
                      <img src="/php_-/market/Public/images/taiyang.png" width="10%" height="10%" class="taiyang">
                      <p style="color:#000000;">虚拟物品</p>
                  </div>
              </a>
          </div>
          <!--标题栏结束-->
          <!--内容栏开始-->
          <div class="weui-row weui-no-gutter" >
              <?php if(is_array($games)): $i = 0; $__LIST__ = $games;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="weui-col-50" align="center"><a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>">
                      <img src="/php_-/market/Public/<?php echo ($vo["photo"]); ?>" ></a>
                      <p class="goodname" style="text-align:center;font-size:6px;"><?php echo ($vo["name"]); ?>
                      <p class="price" style="text-align:center;color: #FF0000;">&yen;<?php echo ($vo["price"]); ?></p>
                      </p>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
              <HR style="align:center; color:#FCFCFC; width:100%;"  SIZE=1>
              <?php if(is_array($games)): $i = 0; $__LIST__ = $games;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="weui-col-50" align="center"><a href="/php_-/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo['id']); ?>">
                      <img src="/php_-/market/Public/<?php echo ($vo["photo"]); ?>" ></a>
                      <p class="goodname" style="text-align:center;font-size:6px;"><?php echo ($vo["name"]); ?>
                      <p class="price" style="text-align:center;color: #FF0000;">&yen;<?php echo ($vo["price"]); ?></p>
                      </p>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
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
        <img src="/php_-/market/Public/images/shop.png" alt="">
      </div>
      <p class="weui_tabbar_label">首页</p>
    </a>
    <a href="/market/index.php/home/goods/upload.html" class="weui_tabbar_item" >
      <div class="weui_tabbar_icon">
        <img src="/php_-/market/Public/images/jiahao.jpg" width="100%">
      </div>
      <p class="weui_tabbar_label">发布</p>
    </a>
    <a href="javascript:;" class="weui_tabbar_item">
      <div class="weui_tabbar_icon">
        <img src="/php_-/market/Public/images/my.png" alt="">
      </div>
      <p class="weui_tabbar_label">我的</p>
    </a>
  </div>
</div>
</div>
</body>

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