<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
*author:马豪珍
*time：2016-12-20
-->
<!--<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新增地址</title>
</head>
<body>

<div class=""></div>
</body>
</html>-->
<!DOCTYPE html>
<html>
<head>
    <title>软件学院</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--IE8-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"><!--屏幕自适应-->
    <link rel="stylesheet" type="text/css" href="/php_-/market/Public/lib/weui.min.css">
    <link rel="stylesheet" type="text/css" href="/php_-/market/Public/css/jquery-weui.css">
    <style type="text/css">
        html,body{
            height: 100%;
        }
        .swiper-container {
            width: 100%;
        }
        .swiper-container img {
            display: block;
            width: 100%;
        }
    </style>
<body>
<div class="weui_tab">
    <div class="weui_tab_bd">
        <!--顶部幻灯片开始-->
        <div style="border-style:ridge;margin-top: 15px;">
            <p class="shou" style="font-size: 15px; margin-top: 10px; margin-left: 30px;">收货人:PHP项目小组</p>
            <p style="font-size: 15px; margin-top: -5px; margin-left: 30px;">电话:15231531523</p>
            <p style="font-size: 15px; margin-top: -5px; margin-left: 30px;margin-bottom: 10px;">收货地址：河北师范大学新校区软件学院</p>
        </div>

    </div>
    <div class="weui_tabbar" style="height: 65px;">
        <a href="" class="weui_tabbar_item">
            <p class="weui_tabbar_label" style="font-size: 20px; margin-top: 5px;color:red;">新增地址</p>
        </a>
    </div>
</div>
</body>

<script type="text/javascript" src="/php_-/market/Public/lib/jquery-2.1.4.js"></script>
<script type="text/javascript" src="/php_-/market/Public/js/jquery-weui.min.js"></script>
<script type='text/javascript' src="/php_-/market/Public/js/swiper.js" charset='utf-8'>
</script>
<script>
    $(".swiper-container").swiper({
        loop: true,
        autoplay: 3000
    });
</script>
</html>