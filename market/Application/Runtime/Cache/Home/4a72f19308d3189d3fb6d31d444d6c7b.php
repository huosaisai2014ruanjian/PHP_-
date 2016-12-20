<?php if (!defined('THINK_PATH')) exit();?><!--
 * document：我的订单
 * User: 马豪珍
 * Date: 2016-12-06
 * Time: 15:56
-->
<!DOCTYPE html>
<html>
<head>
	<title>我的订单</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"><!--IE8-->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"><!--屏幕自适应-->
	<link rel="stylesheet" type="text/css" href="/php_-/market/Public/lib/weui.min.css">
	<link rel="stylesheet" type="text/css" href="/php_-/market/Public/css/jquery-weui.css">
  <link rel="stylesheet" type="text/css" href="/php_-/market/Public/css/button.css">
	<style type="text/css">
	html,body{
		height: 100%;
	}
  .chenggong h2{
    color: #FF9224;
   }  
  .chenggong{
    margin-left: 20px;
   }
  .anniu{
    
    display: block;
    margin-right: 0px;
  }
  .sc{
    margin-right: 20px;
    float: right;
  }
  
	</style>
<body>
<div class="weui_tab">
  <div class="weui_tab_bd">
   <!--其中放我们的代码内容-->
  
  <!--图文标题开始部分-->
  <div class="weui_panel weui_panel_access">
  <div class="chenggong"><h2>订单</h2></div>
  <div class="weui_panel_bd">

      <?php if(is_array($transaction)): $i = 0; $__LIST__ = $transaction;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$transaction): $mod = ($i % 2 );++$i;?><div>
    <a href="/php_-/market/index.php/Home/Gooddetail/index?id=<?php echo ($transaction["id"]); ?>" class="weui_media_box weui_media_appmsg">
      <div class="weui_media_hd">
        <img class="weui_media_appmsg_thumb" src="/php_-/market/Public/<?php echo ($transaction["photo"]); ?>" >
      </div>
      <div class="weui_media_bd">
        <h4 class="weui_media_title"><?php echo ($transaction["name"]); ?></h4>
        <p class="weui_media_desc"><?php echo ($transaction["description"]); ?></p>
      </div>
    </a>

    <div class="anniu"><a href="/php_-/market/index.php/Home/Personal/delete/id/<?php echo ($transaction["id"]); ?>" class="button orange medium sc">删除订单记录</a> </div><br/>
   </div><?php endforeach; endif; else: echo "" ;endif; ?>

  </div>
</div>
  <!--图文标题结束部分-->

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
    </script>
</html>