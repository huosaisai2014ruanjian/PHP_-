<?php if (!defined('THINK_PATH')) exit();?><!-- * Created by PhpStorm.
 * User: 兰天旭
 * Date: 2016/12/15
 * Time: 10:00 -->
<!DOCTYPE html>
<html>

<head>
    <title>校园跳蚤市场-支付</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"> 
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">  
    <link rel="stylesheet" type="text/css" href="/php_-/market/Public/css/define.css">
    <link rel="stylesheet" href="/php_-/market/Public/lib/weui.min.css">
    <link rel="stylesheet" href="/php_-/market/Public/css/jquery-weui.css">
    <link rel="stylesheet" href="/php_-/market/Public/css/demo.css">
    <!--<link rel="stylesheet" type="text/css" href="css/jquery-weui.css">
    <link rel="stylesheet" type="text/css" href="css/demo.css">
    <link rel="stylesheet" type="text/css" href="css/define.css">-->

    <style>
        .swiper-container {
            width: 100%;
        }
        .swiper-container img {
            display: block;
            width: 100%;
        }
        html,body{
            height: 100%;
            background-color: rgb(248,248,248);
        }
        .xinxi{
            background-image: url("/php_-/market/Public/images/kuang.png");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            height: 80px;
            background-color: #FFFFFF;
        }
        a{
            text-decoration:none;
            color: #242a2b;
        }
        .shou{
            padding-top:15px;
        }

    </style>
</head>
<body>
<div  class="weui_tab" style="maigin:10px">
    <!--买家信息 -->
    <div class="xinxi">
        <p class="shou" style="font-size: 12px; margin-top: 15px; margin-left: 30px;">收货人:PHP项目小组</p>
        <p style="font-size: 12px; margin-top: -5px; margin-left: 30px;">电话:15231531523</p>
        <p style="font-size: 12px; margin-top: -5px; margin-left: 30px;">收货地址：河北师范大学新校区软件学院</p>
    </br>

    </div>
<!--信息模块开始-->
      <!--卖家信息-->
    <div class="user" style="background-color:#FFFFFF;margin-top:9px;">
    <div  style="width: 100%">
      <img src="/php_-/market/Public/<?php echo ($user["head"]); ?>"style="width:40px;height:40px;border-radius:50px;border:solid rgb(100,100,100) 1px; margin-top: 10px; margin-left: 8px;">
          <p style="margin-top: -40px; margin-left: 60px;"><strong><?php echo ($user["nickname"]); ?></strong></p>
        <p style="font-family:YouYuan;margin-top:-3px;margin-left: 60px;"><?php echo ($user["college"]); ?></p>
      </p>
    </div>
        <!--卖家信息模块结束-->
                <hr/>
        <!--商品信息开始-->
        <div style="height: 100%;">
       <a class="weui_cell" href="javascript:;">
        <div class="weui_cell_hd" >
            <img src="/php_-/market/Public/<?php echo ($user["head"]); ?>" style="width:70px;height:80px;margin-top: 5px; margin-left: 8px;">
        </div>
        <div class="weui_cell_bd weui_cell_primary" style="font-size: 9px">                
        <p style="font-family:YouYuan;font-size: 20px;"> <?php echo ($good["description"]); ?></p>
        <p style="margin-left: 30px;font-size: 15px;">￥<?php echo ($good["price"]); ?>
        <span style="margin-left: 10px;font-size: 15px;">浏览次数：<?php echo ($good["times"]); ?></span></p>
        </div>
       </a>
        </div>
        <!--商品信息结束-->
    </div>

 <!--信息模块结束-->
        <div style="margin-top: 15px;margin-bottom: 15px;font-family: KaiTi;font-size: 20px;margin-left: 10px;"><span><strong>支付方式</strong></span></div>
    <div style="background-color: #FFFFFF;height: 50px;">
        <img src="/php_-/market/Public/images/pay.png" style="margin-top: 8px; margin-left: 2px;">
    </div>
        </div>

        <div style="margin-top: -165px;">
            <hr/>
            <p class="weui_tabbar_label" style="width: 120px;margin-top:25px;font-size: 15px">合计:<?php echo ($good["price"]); ?></p></div>
            <a href="javascript:;" class="weui_btn weui_btn_warn" style="text-align: center;margin-top:-30px;margin-right:5px;width: 120px;float: right;font-family: KaiTi;font-size: 20px;">确认下单</a>
        </div>
</div>

<script type="text/javascript" src="/php_-/market/Public/lib/jquery-2.1.4.js"></script>
<script type="text/javascript" src="/php_-/market/Public/js/jquery-weui.min.js"></script>
<script type="text/javascript" src="/php_-/market/Public/js/swiper.js"></script>
<script>
    $(".swiper-container").swiper({
        loop: true,
        autoplay: 2000
    });
    $(".weui_navbar .weui_navbar_item").click(function(){
        $(".weui_navbar .weui_navbar_item").removeClass("weui_bar_item_on");//谁都没有weui_bar_item_on
        $(this).addClass("weui_bar_item_on");//点谁谁有weui_bar_item_on
            //判断点击的是第几的选项卡
             var which = $(this).index();
            //让所有的内容区域隐藏
             $(".weui_tab_bd .content").hide();
            //按索引显示对应的内容
            $(".weui_tab_bd .content:eq("+which+")").show();
        });
</script>           
<script type="text/javascript">
    $(document).on("click","#hide",function(){
        $("#hide").css('display','none');
        $("#hide1").css('display','block');
    });

</script>
<script type="text/javascript">
    $(document).on("click","#hide1",function(){
    $("#hide1").css('display','none');
    $("#hide").css('display','block');
    });
</script>
</body>
</html>