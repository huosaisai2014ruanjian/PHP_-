<?php if (!defined('THINK_PATH')) exit();?><!-- 
 * document：商品详情
 * User: 周博学
 * Date: 2016/12/17
 * Time: 11:00
-->
<!DOCTYPE html>
<html>

<head>
    <title>校园跳蚤市场-商品详情</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link href="/market/Public/lib/weui.min.css" type="text/css" rel="stylesheet" />
    <link href="/market/Public/css/jquery-weui.min.css" type="text/css" rel="stylesheet" />
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
    <div class="weui_tab" style="background-color:#EBEBEB;maigin:10px;height: 100%">
        <div class="weui_tab_bd ">
            <div>
                <!--商品封面图片-->
                <div>
                    <div class="swiper-slide"><img src="/market/Public<?php echo ($img_url[0]); ?>" height="300px" width="100%" alt=""></div>
                </div>
                <!--结束商品封面图片-->
                <!--商品价格等信息  -->
                <div class="content" style="background-color:#FFFFFF;margin:1px;font-size: 17px;">
                    <div class="goodname">
                        <p style="font-size: 20px;"><strong>&nbsp;&nbsp;&nbsp;<?php echo ($good["name"]); ?></strong>
                            <span style="color:#9C9C9C;font-size: 16px;float:right;padding-top:30px">
                            <?php if($good["degree"] == '否'): ?>非全新
                            <?php else: ?>
                            全新<?php endif; ?>
                            &nbsp;&nbsp;&nbsp;</span></p>
                    </div>
                    <div class="description" style="font-family:YouYuan;margin:2px;font-size: 17px;margin:2px">&nbsp;&nbsp;<?php echo ($good["description"]); ?>
                    </div>
                    <p style="color:red;text-align: right;margin:1px;font-family:YouYuan;padding-right:20px">&nbsp;&nbsp;
                        <span style="font-size:10px;">￥</span><?php echo ($good["price"]); ?>
                        <span style="font-size:10px">浏览次数<?php echo ($good["times"]); ?></span>
                    </p>
                </div>
                <!--卖家信息  -->
                <div class="user" style="background-color:#FFFFFF;margin-top:9px;">
                    <div>
                        <div style="width: 100%">
                            <p>&nbsp;&nbsp;<img src="<?php echo ($user["head"]); ?>" style="width:40px;height:40px;border-radius:50px;border:solid rgb(100,100,100) 1px;">
                                <span style="color:#FF8C00"><strong><?php echo ($user["nickname"]); ?></strong></span>
                                <span style="color:#FF8C00">|</span>
                                <span style="color:#FF8C00"><?php echo ($user["college"]); ?></span>
                            </p>
                        </div>
                        <div>
                            <span style="float:left;font-size:8px;color:#000000">&nbsp;&nbsp;年级:<?php echo ($user["grade"]); ?></span>
                            <span style="float:right;font-size:8px;color:#000000">性别:<?php echo ($user["sex"]); ?>&nbsp;&nbsp;</span>
                            <br/>
                        </div>
                    </div>
                </div>
                <div class="weui-row width" style="background-color:#FFFFFF;margin-top:9px">
                    <p><strong>更多细节</strong></p>
                    <?php if(is_array($img_url)): $i = 0; $__LIST__ = $img_url;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$img): $mod = ($i % 2 );++$i;?><img src="/market/Public/<?php echo ($img); ?>" style="width: 100% ;height: auto" /><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <!--留言-->
                <div class="weui-row">
                    <p><strong>留言</strong></p>
                    <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mesg): $mod = ($i % 2 );++$i;?><div class="weui_cells weui_cells_access" style="width: 100%">
                            <a class="weui_cell" href="javascript:;">
                                <div class="weui_cell_hd">
                                    <img src="<?php echo ($mesg["userimg"]); ?>" alt="icon" style="width:40px;height:40px;border-radius:50px;border:solid rgb(100,100,100) 1px;">
                                </div>
                                <div class="weui_cell_bd weui_cell_primary" style="font-size: 9px">
                                    <p style="margin:4px">
                                        <input type="hidden" value="<?php echo ($mesg["id"]); ?>" id="id">
                                        <input type="hidden" value="<?php echo ($mesg["fromuser_id"]); ?>">
                                        <B><?php echo ($mesg["nickname"]); ?></B>
                                        <p style="margin:4px;;font-family:YouYuan"><?php echo (reFace($mesg["content"])); ?></p>
                                        <p><?php echo ($mesg["time"]); ?></p>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <?php if(is_array($mesg["temp"])): $i = 0; $__LIST__ = $mesg["temp"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$temp): $mod = ($i % 2 );++$i;?><div class="weui_cells weui_cells_access" style="width: 100%">
                                <a class="weui_cell" href="javascript:;">
                                    <div class="weui_cell_bd weui_cell_primary" style="font-size: 9px">
                                        <?php echo ($temp["fromnickname"]); ?> <span class="blue" style="color:blue">回复 </span><?php echo ($temp["tonickname"]); ?>:
                                        <p style="margin:4px;;font-family:YouYuan"><?php echo (reFace($temp["content"])); ?></p>
                                        <p><?php echo ($temp["time"]); ?></p>
                                    </div>
                                </a>
                            </div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
                    <form action="<?php echo U('Gooddetail/addMessage');?>" method="post" style="width: 100%">
                        <div class="weui_cells weui_cells_access" style="width: 100%">
                            <p><strong>我要留言</strong>
                            </p>
                            <div class="input-group">
                                <span class="emotion input-group"><img src="/market/Public/Face/0.jpg" style="height: 40px;width: 40px"></span>
                            </div>
                            <div class="weui_cell_bd weui_cell_primary" style="font-size: 9px">
                                <input type="hidden" name="goods_id" value="<?php echo ($good["id"]); ?>">
                                <input type="hidden" name="fromuser_id" value="<?php echo (session('id')); ?>">
                                <input type="hidden" name="touser_id" value="<?php echo ($goods["seller_id"]); ?>">
                                <input type="hidden" name="belong_id" value="0">
                                <textarea class="weui_textarea" id="content-text" name="comment" rows="10" placeholder="请输入留言内容"></textarea>
                                <div class="textareaTip weui_textarea_counter"><span id="textareaCount">0</span>/200</div>
                                <span style="float: right">
                                        <button class="weui_btn weui_btn_mini weui_btn_default"  type="submit" >发布留言</button>
                                    </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </br>
            </br>
            </br>
            <!--商品详情结束-->
            <!--底部导航开始-->
            <div class="weui_tabbar">
                <input type="hidden" id="goodid" value="<?php echo ($good["id"]); ?>" />
                <?php if( $xihuan == 0): ?><a href="javascript:;" id='hide' class="weui_navbar_item weui_bar_item_on button orange medium" style="display:block;font-size:16px;font-family:'宋体';color:#fff;margin-top:5px;margin-bottom:8px;padding-top:8px;padding-left:10px;"><img src="/market/Public/images/bxxin.png" style="position:absolute;left:8px;top:1px;height:30px;" />我喜欢</a>
                    <a href="javascript:;" id='hide1' class="weui_navbar_item weui_bar_item_on button orange medium" style="display:none; font-size:16px;font-family:'宋体';color:#fff;margin-top:5px;margin-bottom:8px;padding-top:8px;padding-left:10px;"><img src="/market/Public/images/xxin.png" style="position:absolute;left:8px;top:1px;height:30px;" />我喜欢</a>
                    <?php else: ?>
                    <a href="javascript:;" id='hide' class="weui_navbar_item weui_bar_item_on button orange medium" style="display:none;font-size:16px;font-family:'宋体';color:#fff;margin-top:5px;margin-bottom:8px;padding-top:8px;padding-left:10px;"><img src="/market/Public/images/bxxin.png" style="position:absolute;left:8px;top:1px;height:30px;" />我喜欢</a>
                    <a href="javascript:;" id='hide1' class="weui_navbar_item weui_bar_item_on button orange medium" style="display:block; font-size:16px;font-family:'宋体';color:#fff;margin-top:5px;margin-bottom:8px;padding-top:8px;padding-left:10px;"><img src="/market/Public/images/xxin.png" style="position:absolute;left:8px;top:1px;height:30px;" />我喜欢</a><?php endif; ?>
                <a href="tel:<?php echo ($good["phonenumber"]); ?>" class="weui_navbar_item weui_bar_item_on button orange medium" style="font-size:16px;font-family:'宋体';color:#fff;margin:5px 3px 8px 3px;padding-top:8px;padding-left:20px;"><img src="/market/Public/images/pho1.png" height="30px" style="position:absolute;left:12px;top:0px;">联系卖家</a>
                <a href="javascript:;" id='show-actions' class="weui_navbar_item weui_bar_item_on button orange medium" style="font-size:16px;font-family:'宋体';color:#fff;margin-top:5px;margin-bottom:8px;padding-top:8px">购买</a>
                <br />
            </div>
            <!--底部导航结束-->
            <script type="text/javascript" src="/market/Public/lib/jquery-2.1.4.js"></script>
            <script type="text/javascript" src="/market/Public/js/jquery-weui.min.js"></script>
            <script type="text/javascript" src="/market/Public/js/swiper.js"></script>
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
            <script type="text/javascript" src="/market/Public/lib/jquery-2.1.4.js"></script>
            <script type="text/javascript" src="/market/Public/js/jquery-weui.min.js"></script>
            <script>
            $(document).on("click", "#show-actions", function() {
                $.actions({
                    title: "选择支付方式",
                    onClose: function() {
                        console.log("close");
                    },
                    actions: [{
                        text: "线下交易",
                        className: "color-primary",
                        onClick: function() {
                            $.alert("请点击下方联系卖家按钮");
                        }
                    }, {
                        text: "在线支付",
                        className: "color-primary",
                        onClick: function() {
                            window.location.href = "/market/index.php/Home/pay/pay";
                        }
                    }]
                });
            });
            </script>
            <script type="text/javascript">
            $(document).on("click", "#hide", function() {

                $("#hide").css('display', 'none');
                $("#hide1").css('display', 'block');
                var dat = $('#goodid').val();
                $.ajax({
                    type: "POST", //用POST方式传输
                    url: '/market/index.php/Home/Gooddetail/xihuan', //目标地址
                    data: {
                        'goods_id': dat
                    },
                });
            });
            </script>
            <script type="text/javascript">
            $(document).on("click", "#hide1", function() {
                $("#hide1").css('display', 'none');
                $("#hide").css('display', 'block');
                var dat = $('#goodid').val();
                $.ajax({
                    type: "POST", //用POST方式传输
                    url: '/market/index.php/Home/Gooddetail/quxiaoxihuan', //目标地址
                    data: {
                        'goods_id': dat
                    },
                });
            });
            </script>
            <script type="text/javascript">
            $(function() {
                $(".weui_cell").click(
                    function(e) {
                        var $this = $(this);
                        var id = $this.children().next().children().children().val();
                        var fromuser_id = $this.children().next().children().children().next().val();
                        if ($this.next().hasClass('2')) {
                            $this.next().remove();
                        } else {
                            $this.after("<form class='2' action='/market/index.php/Home/Gooddetail/remessage' method='post' style='width: 100%'> <div class='weui_cells weui_cells_access' style='width: 100%'> <p><strong>回复</strong></p> <div class='weui_cell_bd weui_cell_primary' style='font-size: 9px'> <input type='hidden' name='goods_id' value='<?php echo ($good["id"]); ?>'> <input type='hidden' name='fromuser_id' value=''> <input type='hidden' name='touser_id' value='" + fromuser_id + "'> <input type='hidden' name='belong_id' value='" + id + "'><textarea class='weui_textarea' id='recomment' name='comment' rows='3' placeholder='请输入回复内容'></textarea> <span style='float: right'> <button class='weui_btn weui_btn_mini weui_btn_default'  type='submit' >回复</button> </span> </div> </div></form>")
                        }
                    }
                )
            })
            </script>
            <script type="text/javascript" src="/market/Public/js/jquery-1.7.2.min.js"></script>
            <script type="text/javascript" src="/market/Public/js/jquery.qqFace.js"></script>
            <script type="text/javascript">
            $(function() {
                $('.emotion').qqFace({
                    id: 'facebox', //表情ID
                    assign: 'content-text', //赋予到具体位置
                    path: '/market/Public/Face/' //表情路径
                });

                // var v_id = $(e.target).attr('id');//获取元素id;
                // $("#pid").val(v_id);
                // $('.emotion2').qqFace({
                //     id: 'facebox', //表情ID
                //     assign: 'content-text2', //赋予到具体位置
                //     path: '/market/Public/Face/'   //表情路径
                // });


                $(".submit-btn").click(function() {
                    var $this = $(this);
                    var name = $this.parent().siblings().children('.name1').val();
                    var content = $this.parent().siblings().children('.comment').val();
                    // if (name == "" || content == "") {
                    //     alert("昵称或者评论不能为空哦");
                    //     return false;
                    // }
                });
                $(".submit-btn").click(function() {
                    var $this = $(this);
                    var name = $this.parent().siblings().children('.name1').val();
                    var content = $this.parent().siblings().children('.comment').val();
                    if (name == "" || content == "") {
                        alert("昵称或者评论不能为空哦");
                        return false;
                    }
                });
            });
            </script>
            <script>
            $(function() {
                $('textarea').keyup(function(event) {
                    /* Act on the event */
                    var maxLength = 200;
                    var len = $('textarea').val().length;
                    $('#textareaCount').html(len);
                    if (parseInt($('#textareaCount').text()) > 200) {
                        $('#textareaCount').html('200');
                        var res = $(this).val().substring(0, 200);
                        $(this).val(res);
                    }
                });
            });
            </script>
            <script type="text/javascript" src="/market/Public/js/jquery-weui.min.js"></script>
            <script type='text/javascript' src='/market/Public/js/swiper.js' charset='utf-8'></script>
            <script>
            $(document).ready(function() {
                var a = "<?php echo ($good["time"]); ?>";
                var d = new Date(Date.parse(a.replace(/-/g, "/")));
                var myDate = new Date();
                if (myDate.getTime() - d.getTime() - 8000 < 0) {
                    $.toptip('发布成功', 'success');
                    //alert(myDate.getTime()-d.getTime());
                };
            });
            </script>
</body>

</html>