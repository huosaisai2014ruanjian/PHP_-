<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <title>校园跳蚤市场-列表</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!--   <link href="/market/Public/dwz/themes/css/core.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" type="text/css" href="/market/Public/lib/weui.css">
    <link href="/market/Public/css/jquery-weui.min.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/market/Public/css/define.css">
    <link href="/market/Public/css/base.css" rel="stylesheet" />
    <!--  <link href="/market/Public/lib/weui.min.css" type="text/css" rel="stylesheet"/>
  <link href="/market/Public/css/jquery-weui.min.css" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="/market/Public/css/define.css">
  <link href="/market/Public/css/base.css" rel="stylesheet" />  -->
    <style>
    .html,
    body {
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
</head>

<body>
    <!-- <div class="weui_search_bar" id="search_bar">
  <form class="weui_search_outer">
    <div class="weui_search_inner">
      <i class="weui_icon_search"></i>
      <input type="search" class="weui_search_input" id="search_input" placeholder="搜索" required/>
      <a href="javascript:" class="weui_icon_clear" id="search_clear"></a>
    </div>
    <label for="search_input" class="weui_search_text" id="search_text">
      <i class="weui_icon_search"></i>
      <span>搜索</span>
    </label>
  </form>
  <a href="javascript:" class="weui_search_cancel" id="search_cancel">取消</a>
</div> -->
    <!-- 搜索筛选器 分类 -->
    <div class="weui_tab">
        <div class="weui_tab_bd" style="padding-bottom:48px">
            <div class="weui_panel weui_panel_access">
                <!--第一个分类-->
                <section class="job-module">
                    <dl class="retrie">
                        <dt>
                            <a id="type" href="javascript:;"><?php echo ($cat); ?></a>
                            <a id="goods" href="javascript:;"><?php echo ($book); ?></a>
                        </dt>
                        <dd>
                            <ul class="slide downlist">
                                <!--  <li><a href="#">不限</a></li> -->
                                <li><a href="/market/index.php/Home/goodslist/goodslist?catid=1&name=学习物品&book=书籍">学习物品</a></li>
                                <li><a href="/market/index.php/Home/goodslist/goodslist?catid=2&name=电子数码&book=手机">电子数码</a></li>
                                <li><a href="/market/index.php/Home/goodslist/goodslist?catid=3&name=服装服饰&book=T恤">服装服饰</a></li>
                                <li><a href="/market/index.php/Home/goodslist/goodslist?catid=4&name=出行工具&book=自行车">出行工具</a></li>
                                <li><a href="/market/index.php/Home/goodslist/goodslist?catid=5&name=运动器材&book=哑铃">运动器材</a></li>
                                <li><a href="/market/index.php/Home/goodslist/goodslist?catid=6&name=虚拟物品&book=游戏账号">虚拟物品</a></li>
                            </ul>
                        </dd>
                        <dd class="goods">
                            <ul class="slide downlist">
                                <?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $cat = M('cat'); $res = $cat->where('id'.'='.$vo['cat_id'])->getfield('name'); ?>
                                        <li><a href="/market/index.php/Home/goodslist/getCatgory?id=<?php echo ($vo['id']); ?>&book=<?php echo ($vo['name']); ?>&name=<?php echo $res; ?>"><?php echo ($vo['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </dd>
                        <!-- <dd class="school"> 
      <ul class="slide downlist"> 
        <li><a href="#">不限</a></li> 
        <li><a href="#">河北师大</a></li> 
        
      </ul> 
    </dd>
    <dd class="price"> 
      <ul class="slide downlist"> 
        <li><a href="#">不限</a></li> 
        <li><a href="#">10元一下</a></li> 
        <li><a href="#">100以上</a></li> 
      </ul> 
    </dd>   -->
                    </dl>
                </section>
                <div class="weui_panel_bd">
                    <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/market/index.php/Home/Gooddetail/index?id=<?php echo ($vo['id']); ?>" class="weui_media_box weui_media_appmsg">
                            <div class="goodslist">
                                <img class="weui_media_appmsg_thumb" src="/market/Public/<?php echo ($vo["photo"]); ?>" height="100" width="100" alt="">
                            </div>
                            <div class="weui_media_bd">
                                <h4 class="weui_media_title"><?php echo ($vo["name"]); ?></h4>
                                <br />
                                <p class="weui_media_desc">&nbsp;&nbsp;<?php echo ($vo["description"]); ?></p>
                                <div style="margin-top:15px;margin-left:30px">
                                    <h5 class="price">￥<?php echo ($vo["price"]); ?></h5>
                                    <p class="weui_media_desc">&nbsp;&nbsp;<?php echo ($vo["degree"]); ?>成新</p>
                                </div>
                            </div>
                            <div style="text-align:right">
                                <img src="<?php echo ($vo["head"]); ?>" style="height:40px;width=40px;">
                                <p class="weui_media_desc"><?php echo ($vo["nickname"]); ?></p>
                                <p class="weui_media_desc"><?php echo ($vo["college"]); ?></p>
                            </div>
                        </a><?php endforeach; endif; else: echo "" ;endif; ?>
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
                <a href="/market/index.php/Home/Personal/zhanghuguanli/id/<?php echo (session('id')); ?>" class="weui_tabbar_item">
                    <div class="weui_tabbar_icon">
                        <img src="/market/Public/images/mine.png" alt="">
                    </div>
                    <p class="weui_tabbar_label">我的</p>
                </a>
            </div>
            <input type="hidden" value="<?php echo (session('rz_status')); ?>" id="rz_tus">
        </div>
        <script type="text/javascript" src="/market/Public/lib/jquery-2.1.4.js"></script>
        <script type="text/javascript" src="/market/Public/js/jquery-weui.min.js"></script>
        <script type="text/javascript" src="/market/Public/js/swiper.js"></script>
        <script>
        $(".swiper-container").swiper({
            loop: true,
            autoplay: 2000
        });
        </script>
        <script type="text/javascript">
        $(function() {
            $('.retrie dt a').click(function() {
                var $t = $(this);
                if ($t.hasClass('up')) {
                    $(".retrie dt a").removeClass('up');
                    $('.downlist').hide();
                    $('.mask').hide();
                } else {
                    $(".retrie dt a").removeClass('up');
                    $('.downlist').hide();
                    $t.addClass('up');
                    $('.downlist').eq($(".retrie dt a").index($(this)[0])).show();
                    $('.mask').show();
                }
            });
            $(".type ul li a:contains('" + $('#type').text() + "')").addClass('selected');
            $(".goods ul li a:contains('" + $('#goods').text() + "')").addClass('selected');
            $(".school ul li a:contains('" + $('#school').text() + "')").addClass('selected');
            $(".price ul li a:contains('" + $('#price').text() + "')").addClass('selected');
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
</body>

</html>