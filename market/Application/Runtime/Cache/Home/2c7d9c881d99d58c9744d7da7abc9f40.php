<?php if (!defined('THINK_PATH')) exit();?><!--
* document：我的消息
 * User: 马豪珍
 * Date: 2016-12-06
 * Time: 15:56
-->
<!DOCTYPE html>
<html>
<head>
  <title>我的消息</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--IE8-->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"><!--屏幕自适应-->
  <link rel="stylesheet" type="text/css" href="/php_-/market/Public/lib/weui.min.css">
  <link rel="stylesheet" type="text/css" href="/php_-/market/Public/css/jquery-weui.css">
  <style type="text/css">
  html,body{
    height: 100%;
  }

  </style>
<body>
<div class="weui_tab">
  <div class="weui_tab_bd">
   <!--其中放我们的代码内容-->
  
   <!--导航开始-->
   <div class="weui_tab">
   <div class="weui_navbar">
    <a class="weui_navbar_item">
      留言消息
    </a>
   </div>
   <div class="weui_tab_bd">
    <!--第二个主题开始-->
    <div class="content">

   <!--图文标题开始部分-->
  <div class="weui_panel weui_panel_access">
  <div class="weui_panel_bd">
  <!--系统通知-->
      <?php if(is_array($messages)): $i = 0; $__LIST__ = $messages;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$message): $mod = ($i % 2 );++$i;?><a href="/php_-/market/index.php/Home/Gooddetail/index/id/<?php echo ($message["goods_id"]); ?>" class="weui_media_box weui_media_appmsg">
      <div class="weui_media_hd">
        <img class="weui_media_appmsg_thumb" src="/php_-/market/Public/images/speaker.png">
      </div>
      <div class="weui_media_bd">
        <h4 class="weui_media_title"><?php echo ($message["nickname"]); ?></h4>
        <p class="weui_media_desc"><?php echo ($message["content"]); ?></p>
      </div>
      <div class="weui_cell_ft"><?php echo ($message["time"]); ?></div>
    </a><?php endforeach; endif; else: echo "" ;endif; ?>

  </div>
</div>
  <!--图文标题结束部分-->
  </div>
    <!--第二个主题结束-->

   </div>
  </div>

   <!--导航结束-->

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
      $(".weui_navbar .weui_navbar_item").click(function(){
           $(".weui_navbar .weui_navbar_item").removeClass("weui_bar_item_on");
           $(this).addClass("weui_bar_item_on");
           //判断是第几个
           var which = $(this).index();
           //让所有的内容区域隐藏
           $(".weui_tab_bd .content").hide();
           //console.log( $(".weui_tab_bd .content").html())
            $(".weui_tab_bd .content:eq("+which+")").show();
           //console.log(which);
           
      });
    </script>
</html>