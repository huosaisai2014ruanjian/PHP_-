<?php if (!defined('THINK_PATH')) exit();?><!--
*author:马豪珍
*time:2016-12-07
-->
<html>
<head>
    <title>校园跳蚤市场-个人中心</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE8-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!--屏幕自适应-->
    <link rel="stylesheet" type="text/css" href="/market/Public/lib/weui.min.css">
    <link rel="stylesheet" type="text/css" href="/market/Public/css/jquery-weui.css">
    <style type="text/css">

    </style>

    <body>
        <!--账户信息模块-->
        <div style="background-color:#FF8C00" width="100% ">
            </br>
            <a class="yhtx" name="center">
                <div style="margin-left:50px"><img style="float:left;border-radius:50%;height:70px;width:70px;" src="<?php echo ($center["head"]); ?>" height="70px" width="70px"></div>
            </a>
            <div style="margin-left:150px">
                <p style="color:#FCFCFC"><?php echo ($center["nickname"]); ?></p>
                <p style="border:1px solid  #FCFCFC; width:100px;"><a href="/market/index.php/Home/Personal/percenter/id/<?php echo ($center["id"]); ?>" style="color:#FCFCFC;">&nbsp;&nbsp;&nbsp;&nbsp;账号管理</a></p>
                </br>
            </div>
        </div>
        <!--列表-->
        <div style="clear: both border:1px solid  #bbbbbb;">
            <div class="weui_cells weui_cells_access">
                <a href="/market/index.php/Home/Personal/mynews" class="weui_cell" href="javascript:;">
                    <div class="weui_cell_hd">
                        <img src="/market/Public/images/email1.png" alt="icon" style="width:25px;margin-right:6px;display:block">
                    </div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>&nbsp;&nbsp;&nbsp;我的消息</p>
                    </div>
                </a>
                <a href="/market/index.php/Home/Personal/mycollection" class="weui_cell" href="javascript:;">
                    <div class="weui_cell_hd">
                        <img src="/market/Public/images/heart2.png" alt="icon" style="width:25px;margin-right:6px;display:block">
                    </div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>&nbsp;&nbsp;&nbsp;我的收藏</p>
                    </div>
                </a>
                <a href="/market/index.php/Home/Personal/spguanli" class="weui_cell" href="javascript:;">
                    <div class="weui_cell_hd">
                        <img src="/market/Public/images/goods.png" alt="icon" style="width:25px;margin-right:6px;display:block">
                    </div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>&nbsp;&nbsp;&nbsp;商品管理</p>
                    </div>
                </a>
                <a href="/market/index.php/Home/Personal/mydingdan" class="weui_cell" href="javascript:;">
                    <div class="weui_cell_hd">
                        <img src="/market/Public/images/goods.png" alt="icon" style="width:25px;margin-right:6px;display:block">
                    </div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>&nbsp;&nbsp;&nbsp;交易记录</p>
                    </div>
                </a>
            </div>
            <input type="hidden" value="<?php echo (session('rz_status')); ?>" id="rz_tus">
        <input type="hidden" value="<?php echo (session('id')); ?>" id="id_num">
        </div>
        <div class="weui_tabbar">
            <a href="/market/index.php/Home/index/index" class="weui_tabbar_item">
                <div class="weui_tabbar_icon">
                    <img src="/market/Public/images/first.png" alt="">
                </div>
                <p class="weui_tabbar_label">首页</p>
            </a>
            <a href="/market/index.php/Home/goods/index" class="weui_tabbar_item" id="rz_sta">
                <div class="weui_tabbar_icon">
                    <img src="/market/Public/images/jiahao.png" width="100%">
                </div>
                <p class="weui_tabbar_label">发布</p>
            </a>
            <a href="javascript:;" class="weui_tabbar_item weui_bar_item_on">
                <div class="weui_tabbar_icon">
                    <img src="/market/Public/images/mine.png" alt="">
                </div>
                <p class="weui_tabbar_label">我的</p>
            </a>
        </div>
    </body>
    <script type="text/javascript" src="/market/Public/lib/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="/market/Public/js/jquery-weui.min.js"></script>
    <script type='text/javascript' src='/market/Public/js/swiper.js' charset='utf-8'>
    </script>
    <script>
    $(".swiper-container").swiper({
        loop: true,
        autoplay: 3000
    });
    $('#rz_sta').click(function() {
    var status = $('#rz_tus').val();
    if (status == '1') {
        return true;
    } else {
        $.confirm({
            title: '尚未认证',
            text: '跳转至认证页面',
            onOK: function () {
               // window.location.href="home/Personal/percenter/id/"+num+"";
              //$state.go('http://www.baidu.com');
              top.location="../Personal/percenter"; 
            },
            onCancel: function () {
            }
          });
          return false;
    }
});
    </script>

</html>