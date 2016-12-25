<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>搜索结果</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--IE8-->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"><!--屏幕自适应-->
    <link rel="stylesheet" type="text/css" href="/php_-/market/Public/lib/weui.min.css">
    <link rel="stylesheet" type="text/css" href="/php_-/market/Public/css/jquery-weui.css">
    <style type="text/css">
    html,body{
        height: 100%;
    }
  .chenggong{
    margin-left: 20px;
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
  <div class="chenggong">以下是您搜索<font color="red"><?php echo ($search); ?></font>的结果</div>
  <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(empty($icon)): ?><div> 
    <p> 您找的商品去整形了……………</p>
    <img src="/php_-/market/Public/images/serach/change.jpeg">
   </div>
  <?php else: ?>
  <div class="weui_panel_bd">
   <div> 
    <a href="/php_-/market/index.php/Home/Gooddetail/index?id=<?php echo ($vo['id']); ?>" class="weui_media_box weui_media_appmsg">
      <div class="weui_media_hd">
        <img class="weui_media_appmsg_thumb" src="/php_-/market/Public/<?php echo ($vo['photo']); ?>" alt="商品图片">
      </div>
      <div class="weui_media_bd">
        <h4 class="weui_media_title"><?php echo ($vo['name']); ?></h4>
        <p class="weui_media_desc"><?php echo ($vo['description']); ?></p>
      </div>
    </a>
   </div>
  </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
</div>
  <!--图文标题结束部分-->
  </div>
</div>
</body>

<script type="text/javascript" src="/php_-/market/Public/lib/jquery-2.1.4.js"></script>
<script type="text/javascript" src="/php_-/market/Public/js/jquery-weui.min.js"></script>
</html>