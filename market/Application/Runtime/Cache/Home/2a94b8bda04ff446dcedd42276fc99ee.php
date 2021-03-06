<?php if (!defined('THINK_PATH')) exit();?><!--
*document：公众号主页
*user:霍赛赛、兰天旭、周博学、王振儒、刘迪浩、马豪珍
*time:2016-12-14
-->
<!DOCTYPE html>
<html>

<head>
    <title>校园跳蚤市场</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE8-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!--屏幕自适应-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" type="text/css" href="/market/Public/lib/weui.min.css">
    <link rel="stylesheet" type="text/css" href="/market/Public/css/jquery-weui.css">
    <link rel="stylesheet" type="text/css" href="/market/Public/css/index1.css">
    <link rel="stylesheet" href="/market/Public/css/swiper-3.3.1.min.css" />
    <link rel="stylesheet" href="/market/Public/css/list/style.css">
    <link rel="stylesheet" href="/market/Public/css/list/Up.css">
    <style type="text/css">
    html,
    body {
        height: 100%;
    }
    
    #messa {
        margin-right: -10px;
        padding-left: 3px;
    }
    
    .dian {
        margin-right: -15px;
    }
    
    .swiper-wrapper {
        height: 190px;
    }
    </style>
</head>

<body>
    <div class="weui_tab">
        <div class="weui_tab_bd">
            <!--搜索开始-->
            <div class="weui_search_bar" id="search_bar">
                <form action="/market/index.php/Home/Serach/index" method="post" class="weui_search_outer">
                    <div class="weui_search_inner">
                        <i class="weui_icon_search"></i>
                        <input type="search" name="search" class="weui_search_input" id="search_input" placeholder="搜索" required/>
                        <a href="javascript:" class="weui_icon_clear" id="search_clear"></a>
                    </div>
                    <label for="search_input" class="weui_search_text" id="search_text">
                        <i class="weui_icon_search"></i>
                        <span>搜索</span>
                    </label>
                </form>
                <a href="javascript:;" class="weui_search_cancel" id="search_cancel">取消</a>
            </div>
            <!--搜索结束-->
            <!--幻灯片开始-->
            <div class="swiper-container" data-space-between='10' data-pagination='.swiper-pagination' data-autoplay="1000">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="javascript:;"><img src="/market/Public/images/hua.jpg" width="100%" height="100%" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="javascript:;"><img src="/market/Public/images/lunbo.jpg" width="100%" height="100%" alt=""></a>
                    </div>
                    <div class="swiper-slide">
                        <a href="javascript:;"><img src="/market/Public/images/paimail.jpg" width="100%" height="100%" alt=""></a>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <!--幻灯片结束-->
            <!--商品分类开始-->
            <div class="recommed" style="background-color: rgb(246,246,246);">
                <!-- <div class="rec" style="margin:10px;font-family: KaiTi; font-size: 25px;" ><p>商品分类</p></div> -->
                <div class="weui-row weui-no-gutter" width="100%" id="fenlei">
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $catgory = M('category'); $res = $catgory->where('cat_id'.'='.$vo['id'])->find(); ?>
                        <div class="weui-col-33" style="font-family: KaiTi;padding-left:20px;padding-right:20px" align="center">
                            <a href="/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo["id"]); ?>&name=<?php echo ($vo["name"]); ?>&book=<?php echo $res['name']; ?>"><img src="/market/Public/<?php echo ($vo["imgurl"]); ?>" width="50%" height="50%"></a>
                            <a href="/market/index.php/Home/Goodslist/goodslist?id=<?php echo ($vo["id"]); ?>&name=<?php echo ($vo["name"]); ?>&book=书籍">
                                <p style="text-align:center"><?php echo ($vo["name"]); ?></p>
                            </a>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <!--商品分类结束-->
            <!--商品列表开始-->
            <a href="/market/index.php/Home/Goodslist/goodslist?id=1&name=学习用品&book=书籍">
                <div class="weui-row">
                    <div class="weui-col-15" style="margin-top:5px"><img src="/market/Public/images/taiyang.png" style="margin-left:20px"></div>
                    <div class="weui-col-80">
                        <p style="margin-top:5px;color:#46a3ff;font-family:'楷体';font-size:25px">学习用品</p>
                    </div>
                </div>
            </a>
            <div class="allsp">
                <?php if(is_array($goods1)): $i = 0; $__LIST__ = $goods1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><figure>
                        <a href="/market/index.php/Home/Gooddetail/index?id=<?php echo ($vo['id']); ?>">
                            <img src="/market/Public/<?php echo ($vo["photo"]); ?>" alt="商品" class="xqtp" id="wang">
                        </a>
                        <p><?php echo ($vo["name"]); ?></p>
                        <div class="info">
                            <em class="sat">&yen;<?php echo ($vo["price"]); ?><small>&yen;<?php echo ($vo["price"]); ?></small></em>
                            <a href="/market/index.php/Home/Gooddetail/index?id=<?php echo ($vo['id']); ?>"><img src="/market/Public/images/u20.png" alt="购物车" style="width: 30px;height: 30px;margin-right:10px;margin-buttom:10px" align="right"></a>
                        </div>
                    </figure><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="clear"></div>
            </div>
            <!--商品列表结束-->
            <!--商品列表开始-->
            <a href="/market/index.php/Home/Goodslist/goodslist?id=2&name=电子数码&book=手机">
                <div class="weui-row">
                    <div class="weui-col-15"><img src="/market/Public/images/taiyang.png" style="margin-left:20px"></div>
                    <div class="weui-col-80">
                        <p style="margin-top:5px;color:#46a3ff;font-family:'楷体';font-size:25px">电子数码</p>
                    </div>
                </div>
            </a>
            <div class="allsp">
                <?php if(is_array($goods2)): $i = 0; $__LIST__ = $goods2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><figure>
                        <a href="/market/index.php/Home/Gooddetail/index?id=<?php echo ($vo['id']); ?>">
                            <img src="/market/Public/<?php echo ($vo["photo"]); ?>" alt="商品" class="xqtp" id="wang">
                        </a>
                        <p><?php echo ($vo["name"]); ?></p>
                        <div class="info">
                            <em class="sat">&yen;<?php echo ($vo["price"]); ?><small>&yen;<?php echo ($vo["price"]); ?></small></em>
                            <a href="/market/index.php/Home/Gooddetail/index?id=<?php echo ($vo['id']); ?>"><img src="/market/Public/images/u20.png" alt="购物车" style="width: 30px;height: 30px;margin-right:10px;margin-buttom:10px" align="right"></a>
                        </div>
                    </figure><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="clear"></div>
            </div>
            <!--商品列表结束-->
            <!--商品列表开始-->
            <a href="/market/index.php/Home/Goodslist/goodslist?id=3&name=服装服饰&book=T恤">
                <div class="weui-row">
                    <div class="weui-col-15"><img src="/market/Public/images/taiyang.png" style="margin-left:20px"></div>
                    <div class="weui-col-80">
                        <p style="margin-top:5px;color:#46a3ff;font-family:'楷体';font-size:25px">服装服饰</p>
                    </div>
                </div>
            </a>
            <div class="allsp">
                <?php if(is_array($goods3)): $i = 0; $__LIST__ = $goods3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><figure>
                        <a href="/market/index.php/Home/Gooddetail/index?id=<?php echo ($vo['id']); ?>">
                            <img src="/market/Public/<?php echo ($vo["photo"]); ?>" alt="商品" class="xqtp" id="wang">
                        </a>
                        <p><?php echo ($vo["name"]); ?></p>
                        <div class="info">
                            <em class="sat">&yen;<?php echo ($vo["price"]); ?><small>&yen;<?php echo ($vo["price"]); ?></small></em>
                            <a href="/market/index.php/Home/Gooddetail/index?id=<?php echo ($vo['id']); ?>"><img src="/market/Public/images/u20.png" alt="购物车" style="width: 30px;height: 30px;margin-right:10px;margin-buttom:10px" align="right"></a>
                        </div>
                    </figure><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="clear"></div>
            </div>
            <!--商品列表结束-->
            <!--商品列表开始-->
            <a href="/market/index.php/Home/Goodslist/goodslist?id=4&name=出行工具&book=自行车">
                <div class="weui-row">
                    <div class="weui-col-15"><img src="/market/Public/images/taiyang.png" style="margin-left:20px"></div>
                    <div class="weui-col-80">
                        <p style="margin-top:5px;color:#46a3ff;font-family:'楷体';font-size:25px">出行工具</p>
                    </div>
                </div>
            </a>
            <div class="allsp">
                <?php if(is_array($goods4)): $i = 0; $__LIST__ = $goods4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><figure>
                        <a href="/market/index.php/Home/Gooddetail/index?id=<?php echo ($vo['id']); ?>">
                            <img src="/market/Public/<?php echo ($vo["photo"]); ?>" alt="商品" class="xqtp" id="wang">
                        </a>
                        <p><?php echo ($vo["name"]); ?></p>
                        <div class="info">
                            <em class="sat">&yen;<?php echo ($vo["price"]); ?><small>&yen;<?php echo ($vo["price"]); ?></small></em>
                            <a href="/market/index.php/Home/Gooddetail/index?id=<?php echo ($vo['id']); ?>"><img src="/market/Public/images/u20.png" alt="购物车" style="width: 30px;height: 30px;margin-right:10px;margin-buttom:10px" align="right"></a>
                        </div>
                    </figure><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="clear"></div>
            </div>
            <!--商品列表结束-->
            <!--商品列表开始-->
            <a href="/market/index.php/Home/Goodslist/goodslist?id=5&name=运动器材&book=哑铃">
                <div class="weui-row">
                    <div class="weui-col-15"><img src="/market/Public/images/taiyang.png" style="margin-left:20px"></div>
                    <div class="weui-col-80">
                        <p style="margin-top:5px;color:#46a3ff;font-family:'楷体';font-size:25px">运动器材</p>
                    </div>
                </div>
            </a>
            <div class="allsp">
                <?php if(is_array($goods5)): $i = 0; $__LIST__ = $goods5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><figure>
                        <a href="/market/index.php/Home/Gooddetail/index?id=<?php echo ($vo['id']); ?>">
                            <img src="/market/Public/<?php echo ($vo["photo"]); ?>" alt="商品" class="xqtp" id="wang">
                        </a>
                        <p><?php echo ($vo["name"]); ?></p>
                        <div class="info">
                            <em class="sat">&yen;<?php echo ($vo["price"]); ?><small>&yen;<?php echo ($vo["price"]); ?></small></em>
                            <a href="/market/index.php/Home/Gooddetail/index?id=<?php echo ($vo['id']); ?>"><img src="/market/Public/images/u20.png" alt="购物车" style="width: 30px;height: 30px;margin-right:10px;margin-buttom:10px" align="right"></a>
                        </div>
                    </figure><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="clear"></div>
            </div>
            <!--商品列表结束-->
            <!--商品列表开始-->
            <a href="/market/index.php/Home/Goodslist/goodslist?id=6&name=虚拟物品&book=游戏账号">
                <div class="weui-row">
                    <div class="weui-col-15"><img src="/market/Public/images/taiyang.png" style="margin-left:20px"></div>
                    <div class="weui-col-80">
                        <p style="margin-top:5px;color:#46a3ff;font-family:'楷体';font-size:25px">虚拟物品</p>
                    </div>
                </div>
            </a>
            <div class="allsp">
                <?php if(is_array($goods6)): $i = 0; $__LIST__ = $goods6;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><figure>
                        <a href="/market/index.php/Home/Gooddetail/index?id=<?php echo ($vo['id']); ?>">
                            <img src="/market/Public/<?php echo ($vo["photo"]); ?>" alt="商品" class="xqtp" id="wang">
                        </a>
                        <p><?php echo ($vo["name"]); ?></p>
                        <div class="info">
                            <em class="sat">&yen;<?php echo ($vo["price"]); ?><small>&yen;<?php echo ($vo["price"]); ?></small></em>
                            <a href="/market/index.php/Home/Gooddetail/index?id=<?php echo ($vo['id']); ?>"><img src="/market/Public/images/u20.png" alt="购物车" style="width: 30px;height: 30px;margin-right:10px;margin-buttom:10px" align="right"></a>
                        </div>
                    </figure><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="clear"></div>
            </div>
            <!--商品列表结束-->
            <br />
            <br />
        </div>
        <div class="weui_tabbar">
            <a href="/market/index.php/Home/index/index" class="weui_tabbar_item weui_bar_item_on">
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
            <a href="/market/index.php/Home/Personal/zhanghuguanli/id/<?php echo (session('id')); ?>" class="weui_tabbar_item">
                <div class="weui_tabbar_icon">
                    <img src="/market/Public/images/mine.png" alt="">
                </div>
                <p class="weui_tabbar_label">我的</p>
            </a>
        </div>
        <input type="hidden" value="<?php echo (session('rz_status')); ?>" id="rz_tus">
        <input type="hidden" value="<?php echo (session('id')); ?>" id="id_num">
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
            onOK: function() {
                // window.location.href="home/Personal/percenter/id/"+num+"";
                //$state.go('http://www.baidu.com');
                top.location = "../Personal/percenter";
            },
            onCancel: function() {}
        });
        return false;
    }
});
// console.log($("#wang"));
var wang = $(".allsp #wang");
var w_length = $(".allsp #wang").length;
for (var i = 0; i < wang.length; i++) {
    console.log($(wang[i]).css("width"));
    var img_width = $(wang[i]).css("width");
    // var img_height = wang[i].height; 
    $(wang[i]).css("height", img_width);
};
$('#rz_sta').click(function() {
    var status = $('#rz_tus').val();
    if (status == '1') {
        return true;
    } else {
        $.confirm({
            title: '尚未认证',
            text: '跳转至认证页面',
            onOK: function() {
                // window.location.href="home/Personal/percenter/id/"+num+"";
                //$state.go('http://www.baidu.com');
                top.location = "../Personal/percenter";
            },
            onCancel: function() {}
        });
        return false;
    }
});
</script>

</html>