<?php if (!defined('THINK_PATH')) exit();?><!-- * Created by PhpStorm.
 * User: 兰天旭
 * Date: 2016/12/15
 * Time: 10:00 -->
<!DOCTYPE html>
<html>

<head>
    <title>校园跳蚤市场-商品详情</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="/market/Public/css/define.css">
    <link rel="stylesheet" href="/market/Public/lib/weui.min.css">
    <link rel="stylesheet" href="/market/Public/css/jquery-weui.css">
    <link rel="stylesheet" href="/market/Public/css/demo.css">
    <style>
    .swiper-container {
        width: 100%;
    }
    
    .swiper-container img {
        display: block;
        width: 100%;
    }
    
    html,
    body {
        height: 100%;
    }
    </style>
</head>

<body>
    <div class="weui_tab" style="background-color:#EBEBEB;maigin:10px">
        <!--买家信息 -->
        <div style="background-color:#FFFFFF">
            <p><span style="float:left">收货人</span> <span style="float:right">电话</span></p>
            </br>
            </br>
            </br>
            </br>
        </div>
        <!--信息模块-->
        <!--卖家信息-->
        <div class="user" style="background-color:#FFFFFF;margin-top:9px;">
            <div style="width: 100%">
                <p><img src="<?php echo ($user["head"]); ?>" style="width:40px;height:40px;border-radius:50px;border:solid rgb(100,100,100) 1px;">
                    <span <strong><?php echo ($user["nickname"]); ?></strong></span>
                    <span style="font-family:YouYuan"><?php echo ($user["college"]); ?></span>
                </p>
            </div>
            <!--卖家信息模块结束-->
            <hr/>
            <!--留言-->
            <div>
                <a class="weui_cell" href="javascript:;">
                    <div class="weui_cell_hd">
                        <img src="<?php echo ($user["head"]); ?>" alt="icon" style="width:50px;height:50px;">
                    </div>
                    <div class="weui_cell_bd weui_cell_primary" style="font-size: 9px">
                        <p style="font-family:YouYuan;margin:2px;font-size: 22px;center;margin:2px"> <?php echo ($good["description"]); ?></p>
                        <p><?php echo ($good["price"]); ?> <span>浏览次数<?php echo ($good["times"]); ?></span></p>
                    </div>
                </a>
            </div>
            <!--留言模块结束-->
            <hr/>
            <!--信息模块结束-->
            <div>支付方式:微信支付</div>
            <hr/>
        </div>
        <div style="border-bottom:10px;margin:10px border-top:1px">
            <div style="float:left;">合计:<?php echo ($good["price"]); ?></div>
            <div style="float:right" class="xiadan">确认下单</div>
            <input type="hidden" value="<?php echo ($nonce); ?>" class="hid">
        </div>
    </div>
    </div>
    <script type="text/javascript" src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script type="text/javascript" src="/market/Public/lib/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="/market/Public/js/jquery-weui.min.js"></script>
    <script type="text/javascript" src="/market/Public/js/swiper.js"></script>
    <script type="text/javascript">
    console.log($('.hid'));
      $('.xiadan').click(function(
            function onBridgeReady(){
       WeixinJSBridge.invoke(
        'getBrandWCPayRequest', {
            "appId" ： "",     //公众号名称，由商户传入     
            "timeStamp"：" 1395712654",         //时间戳，自1970年以来的秒数     
            "nonceStr" ： "e61463f8efa94090b1f366cccfbbb444", //随机串     
            "package" ： "prepay_id=u802345jgfjsdfgsdg888",     
            "signType" ： "MD5",         //微信签名方式：     
            "paySign" ： "" //微信签名 
        },function(res){     
            if(res.err_msg == "get_brand_wcpay_request：ok" ) {}     // 使用以上方式判断前端返回,微信团队郑重提示：res.err_msg将在用户支付成功后返回    ok，但并不保证它绝对可靠。 
        }); 
     }
    if (typeof WeixinJSBridge == "undefined"){
    if( document.addEventListener ){
        document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
    }else if (document.attachEvent){
        document.attachEvent('WeixinJSBridgeReady', onBridgeReady); 
        document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
    }
 }else{
    onBridgeReady();
   } 

        ));
    </script>
    <script>
    $(".swiper-container").swiper({
        loop: true,
        autoplay: 2000
    });
    $(".weui_navbar .weui_navbar_item").click(function() {
        $(".weui_navbar .weui_navbar_item").removeClass("weui_bar_item_on"); //谁都没有weui_bar_item_on
        $(this).addClass("weui_bar_item_on"); //点谁谁有weui_bar_item_on
        //判断点击的是第几的选项卡
        var which = $(this).index();

        //让所有的内容区域隐藏
        $(".weui_tab_bd .content").hide();

        //按索引显示对应的内容
        $(".weui_tab_bd .content:eq(" + which + ")").show();
    });
    </script>
    <script type="text/javascript">
    $(document).on("click", "#hide", function() {
        $("#hide").css('display', 'none');
        $("#hide1").css('display', 'block');

    });
    </script>
    <script type="text/javascript">
    $(document).on("click", "#hide1", function() {
        $("#hide1").css('display', 'none');
        $("#hide").css('display', 'block');

    });
    </script>
</body>

</html>