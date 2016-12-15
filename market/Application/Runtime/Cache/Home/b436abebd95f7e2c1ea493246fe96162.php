<?php if (!defined('THINK_PATH')) exit();?><!-- * Created by PhpStorm.
 * User: 周博学
 * Date: 2016/12/7
 * Time: 11:00 -->
<!DOCTYPE html>
<html>

<head>
    <title>校园跳蚤市场-商品详情</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="lib/weui.min.css" type="text/css" rel="stylesheet"/>
    <link href="css/jquery-weui.min.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="/PHP_-/market/Public/css/define.css">
    <link rel="stylesheet" href="/PHP_-/market/Public/lib/weui.min.css">
    <link rel="stylesheet" href="/PHP_-/market/Public/css/jquery-weui.css">
    <link rel="stylesheet" href="/PHP_-/market/Public/css/demo.css">
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


        }
    </style>
</head>
<body>
<div class="weui_tab" style="background-color:#EBEBEB;maigin:10px">
    <div class="weui_tab_bd ">
        <div >
            
                    <!--商品封面图片-->
                    <div>
                            
                                <div class="swiper-slide"><img src="/PHP_-/market/Public/<?php echo ($good1); ?>" height="300px" width="100%" alt=""></div>
                            
                        </div>
                  
                    <!--结束商品封面图片-->
                   <!--商品价格等信息  -->
                    <div class="content" style="background-color:#FFFFFF;margin:1px;font-size: 17px;">
                        <p style="color:red;text-align: left;margin:1px;font-family:YouYuan;">&nbsp;&nbsp;<span style="font-size:10px">￥</span><?php echo ($good["price"]); ?>
                        <span style="font-size:10px">浏览次数</span>
                        </p>
                    
                    <div class="goodname" >
                        <p style="font-size: 20px;"><strong>&nbsp;&nbsp;&nbsp;<?php echo ($good["name"]); ?></strong>
                         <span style="color:#9C9C9C;font-size: 16px;float:right"><?php echo ($good["degree"]); ?>成新&nbsp;&nbsp;&nbsp;</span></p>
                    </div>
                                       <div class="description" style="font-family:YouYuan;margin:2px;font-size: 17px;center;margin:2px">
                        &nbsp;&nbsp;<?php echo ($good["description"]); ?>
                    </div>
                    </div>
                <!--卖家信息  -->
                <div class="user" style="background-color:#FFFFFF;margin-top:9px;">
                    <div  >
                        <div  style="width: 100%">
                          <p>&nbsp;&nbsp;<img src="/PHP_-/market/Public/<?php echo ($user["head"]); ?>"style="width:40px;height:40px;border-radius:50px;border:solid rgb(100,100,100) 1px;">
                              <span style="color:#FF8C00"><strong><?php echo ($user["nickname"]); ?></strong></span>
                              <span style="color:#FF8C00">|</span>
                              <span style="color:#FF8C00"><?php echo ($user["college"]); ?></span>
                          </p>
                        </div>
                        <div >
                         <span style="float:left;font-size:8px;color:#000000">&nbsp;&nbsp;年级:<?php echo ($user["grade"]); ?></span>
                       <span style="float:right;font-size:8px;color:#000000">性别:<?php echo ($user["sex"]); ?>&nbsp;&nbsp;</span>
                       
                      <br/>
                        </div>
                    </div>
                </div>
                  <div class="weui-row width" style="background-color:#FFFFFF;margin-top:9px">
                  <p><strong>更多细节</strong></p>
                        <?php if(is_array($good['image'])): $i = 0; $__LIST__ = $good['image'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$img): $mod = ($i % 2 );++$i;?><img src="/PHP_-/market/Public/<?php echo ($img); ?>" style="width: 100% ;height: auto"/><?php endforeach; endif; else: echo "" ;endif; ?>

                     </div>
                     <!--留言-->
                    
                    <div class="weui-row">
                                
                            <div class="weui_cells weui_cells_access" style="width: 100%">
                            <p><strong>留言</strong></p>
                                <a class="weui_cell" href="javascript:;">
                                    <div class="weui_cell_hd" >
                                        <img src="/PHP_-/market/Public/<?php echo ($user["head"]); ?>" alt="icon" style="width:40px;height:40px;border-radius:50px;border:solid rgb(100,100,100) 1px;">
                                    </div>
                                    <div class="weui_cell_bd weui_cell_primary" style="font-size: 9px">
                                        <p style="margin:4px" ><B><?php echo ($user["nickname"]); ?></B>
                                            <span><?php echo ($user["college"]); ?></span></p>
                                            <p style="margin:4px;;font-family:YouYuan"> <?php echo ($message["content"]); ?></p>
                                            <p><?php echo ($message["time"]); ?></p>
                                    </div>
                                   
                                </a>
                            </div>
                        </div>
                    </div>
               
                </br>
                </br>
                </br>

            <!--商品详情结束-->
            <!--底部导航开始-->
            <div class="weui_tabbar">
                <a href="javascript:;" id='hide' class="weui_navbar_item weui_bar_item_on button orange medium" style="display:block;font-size:16px;font-family:'宋体';color:#fff;margin-top:5px;margin-bottom:8px;padding-top:8px">我喜欢</a>
                <a href="javascript:;" id='hide1' class="weui_navbar_item weui_bar_item_on button orange medium" style="display:none; font-size:16px;font-family:'宋体';color:#fff;margin-top:5px;margin-bottom:8px;padding-top:8px">我喜欢♥</a>
                <a class="weui_navbar_item weui_bar_item_on button orange medium" style="font-size:16px;font-family:'宋体';color:#fff;margin:5px 3px 8px 3px;padding-top:8px">联系卖家</a>
                <a href="javascript:;" id='show-actions' class="weui_navbar_item weui_bar_item_on button orange medium" style="font-size:16px;font-family:'宋体';color:#fff;margin-top:5px;margin-bottom:8px;padding-top:8px">购买</a>
                <br />
            </div>
            <!--底部导航结束-->
            <script type="text/javascript" src="/PHP_-/market/Public/lib/jquery-2.1.4.js"></script>
            <script type="text/javascript" src="/PHP_-/market/Public/js/jquery-weui.min.js"></script>
            <script type="text/javascript" src="/PHP_-/market/Public/js/swiper.js"></script>
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

            <script>
                $(document).on("click", "#show-actions", function() {
                    $.actions({
                        title: "选择支付方式",
                        onClose: function() {
                            console.log("close");
                        },
                        actions: [
                            {
                                text: "线下交易",
                                className: "color-primary",
                                onClick: function() {
                                    $.alert("你选择了在线交易");
                                }
                            },
                            {
                                text: "在线支付",
                                className: "color-primary",
                                onClick: function() {
                                    $.alert("暂未开启本服务");
                                }
                            },
                            {
                                text: "我们来联系",
                                className: 'color-danger',
                                onClick: function() {
                                    $.alert("你选择了“我们来联系”");
                                }
                            }
                        ]
                    });
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