<?php if (!defined('THINK_PATH')) exit();?><!--
 * document：个人中心
 * User: 马豪珍
 * Date: 2016-12-08
 * Time: 10:01
-->
<!DOCTYPE html>
<html>

<head>
    <title>我</title>
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
    }
    
    .weui_cell_primary p,
    .weui_cell_ft {
        font-size: 18px;
    }
    
    .weui_cell {
        padding-top: 18px;
        padding-bottom: 18px;
    }
    
    .touxiang {
        padding-top: 24px;
        padding-bottom: 24px;
    }
    
    .shengri {
        border-bottom: 25px solid #f0f0f0;
    }
    </style>

    <body>
        <div class="weui_tab">
            <div class="weui_tab_bd">
                <!--其中放我们的代码内容-->
                <div class="weui_panel">
                    <div class="weui_panel_bd">
                        <div class="weui_media_box weui_media_small_appmsg">
                            <div class="weui_cells weui_cells_access">
                                <a class="touxiang weui_cell" href="javascript:;">
                                    <!--<div class="weui_cell_hd"><img src="{}"></div>-->
                                    <div class="weui_cell_bd weui_cell_primary">
                                        <p>我的头像</p>
                                    </div>
                                    <span class="weui_cell_ft">
            <div style="right:20px; border-radius:50%; overflow:hidden;">
              <img src="<?php echo ($personals["head"]); ?>" style="position: absolute;top:12px;right: 35px; height:50px; width:50px;border-radius:50%;"/>
            </div>
          </span>
                                </a>
                            </div>
                            <div class="weui_cells weui_cells_access">
                                <a class="weui_cell" href="/market/index.php/Home/Personal/editname">
                                    <div class="weui_cell_hd"><img src=""></div>
                                    <div class="weui_cell_bd weui_cell_primary">
                                        <p>昵称</p>
                                    </div>
                                    <span class="weui_cell_ft"><?php echo ($personals["nickname"]); ?></span>
                                </a>
                            </div>
                            <div class="weui_cells weui_cells_access">
                                <a class="weui_cell" href="/market/index.php/Home/Personal/sex">
                                    <div class="weui_cell_hd"><img src=""></div>
                                    <div class="weui_cell_bd weui_cell_primary">
                                        <p>性别</p>
                                    </div>
                                    <span class="weui_cell_ft"><?php echo ($personals["sex"]); ?></span>
                                </a>
                            </div>
                            <div class="weui_cells weui_cells_access shengri">
                                <a class="weui_cell" href="/market/index.php/Home/Personal/birth">
                                    <div class="weui_cell_hd"><img src=""></div>
                                    <div class="weui_cell_bd weui_cell_primary">
                                        <p>生日</p>
                                    </div>
                                    <span class="weui_cell_ft"><?php echo ($personals["birth"]); ?></span>
                                </a>
                            </div>
                            <div class="weui_cells weui_cells_access">
                               <a class="weui_cell" href="/market/index.php/Home/Personal/CertificateAuthority">
                                    <div class="weui_cell_hd">
                                        <img src=""/>
                                    </div>
                                    <div class="weui_cell_bd weui_cell_primary">
                                        <p style="color:#000000;">
                                            认证
                                        </p>
                                    </div>
                                <?php if(($personals["rz_status"]) == "1"): ?><span class="weui_cell_ft">
                                        已认证
                                    </span>
                                <?php else: ?>
                                    <?php if(($personals["rz_status"]) == "2"): ?><span class="weui_cell_ft">
                                            审核中
                                        </span>
                                    <?php else: ?>
                                        <span class="weui_cell_ft">
                                            进入认证
                                        </span><?php endif; endif; ?>
                                </a>
                            </div>
                            <div class="weui_cells weui_cells_access">
                                <a class="weui_cell" href="javascript:;">
                                    <div class="weui_cell_hd">
                                        <img src=""/>
                                    </div>
                                    <div class="weui_cell_bd weui_cell_primary">
                                        <p>
                                            绑定的手机号
                                        </p>
                                    </div>
                                    <?php if(($personals["rz_status"]) == "1"): ?><span class="weui_cell_ft">
                                            <?php echo ($personals["phonenumber"]); ?>
                                        </span>
                                    <?php else: ?>
                                        <span class="weui_cell_ft">
                                            请先认证
                                        </span><?php endif; ?>
                                </a>
                            </div>
                            <div class="weui_cells weui_cells_access">
                                <a class="weui_cell" href="javascript:;">
                                    <div class="weui_cell_hd"><img src=""></div>
                                    <div class="weui_cell_bd weui_cell_primary">
                                        <p>学院</p>
                                    </div>
                                    <?php if(($personals["rz_status"]) == "1"): ?><span class="weui_cell_ft"><?php echo ($personals["college"]); ?></span>
                                        <?php else: ?>
                                        <span class="weui_cell_ft">请先认证</span><?php endif; ?>
                                </a>
                            </div>
                            <div class="weui_cells weui_cells_access">
                                <a class="weui_cell" href="javascript:;">
                                    <div class="weui_cell_hd"><img src=""></div>
                                    <div class="weui_cell_bd weui_cell_primary">
                                        <p>年级</p>
                                    </div>
                                    <?php if(($personals["rz_status"]) == "1"): ?><span class="weui_cell_ft"><?php echo ($personals["grade"]); ?></span>
                                        <?php else: ?>
                                        <span class="weui_cell_ft">请先认证</span><?php endif; ?>
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

</html>