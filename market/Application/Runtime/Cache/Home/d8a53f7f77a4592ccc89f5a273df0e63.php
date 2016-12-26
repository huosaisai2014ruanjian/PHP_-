<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <title>修改性别</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE8-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!--屏幕自适应-->
    <link rel="stylesheet" type="text/css" href="/market/Public/lib/weui.min.css">
    <link rel="stylesheet" type="text/css" href="/market/Public/css/jquery-weui.css">
    <style type="text/css">
    html,
    body {
        height: 100%;
        background-color: rgb(238, 238, 238);
    }
    
    p {
        font-size: 18px;
    }
    
    .weui_cell {
        padding-top: 18px;
        padding-bottom: 18px;
    }
    </style>

    <body>
        <div class="weui_tab">
            <div class="weui_tab_bd">
                <!--其中放我们的代码内容-->
                <form id="form1" method="post" action="/market/index.php/Home/Personal/sex">
                    <input type="hidden" name="sex" class="sex" value="">
                </form>
                <div class="weui_panel">
                    <div class="weui_panel_bd">
                        <div class="weui_media_box weui_media_small_appmsg">
                            <div class="weui_cells weui_cells_access">
                                <a class="weui_cell" id="nan" href="javascript:;">
                                    <div class="weui_cell_hd"><img src=""></div>
                                    <div class="weui_cell_bd weui_cell_primary">
                                        <p>男</p>
                                    </div>
                                    <span class="weui_cell_ft"></span>
                                </a>
                            </div>
                            <div class="weui_cells weui_cells_access">
                                <a class="weui_cell" id="nv" href="javascript:;">
                                    <div class="weui_cell_hd"><img src=""></div>
                                    <div class="weui_cell_bd weui_cell_primary">
                                        <p>女</p>
                                    </div>
                                    <span class="weui_cell_ft"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="/market/Public/lib/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="/market/Public/js/jquery-weui.min.js"></script>
    <script type='text/javascript' src='/market/Public/js/swiper.js' charset='utf-8'></script>
    <script type="text/javascript">
    $("#nan").click(function() {
        $(".sex").val('男');
        // alert($(".sex").val());
        $("#form1").submit();
    });
    $("#nv").click(function() {
        $(".sex").val('女');
        // alert($(".sex").val());    
        $("#form1").submit();
    });
    </script>

</html>