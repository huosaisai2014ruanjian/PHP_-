<?php if (!defined('THINK_PATH')) exit();?><!--
*author:马豪珍
*time:2016-12-07
-->
<!DOCTYPE html>
<html>
<head>
	<title>商品管理</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"><!--IE8-->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"><!--屏幕自适应-->
	<link rel="stylesheet" type="text/css" href="/php_-/market/Public/lib/weui.min.css">
	<link rel="stylesheet" type="text/css" href="/php_-/market/Public/css/jquery-weui.css">
  <link rel="stylesheet" type="text/css" href="/php_-/market/Public/css/button.css">
	<style type="text/css">
	html,body{
		height: 100%;
	}
  .anniu{
    margin-left: 14px;
  }
	</style>
<body>
<div class="weui_tab">
  <div class="weui_tab_bd">
   <!--其中放我们的代码内容-->
      <!--导航开始-->
      <div class="weui_tab">
          <div class="weui_navbar">
              <a class="weui_navbar_item weui_bar_item_on">
                  在卖宝贝
              </a>
              <a class="weui_navbar_item">
                  下架宝贝
              </a>
          </div>
          <div class="weui_tab_bd">
              <!--第一个主题开始-->
              <div class="content">
  <!--图文标题开始部分-->
  <div class="weui_panel weui_panel_access">
  <div class="weui_panel_bd">
    <?php if(is_array($manage)): $i = 0; $__LIST__ = $manage;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$manage): $mod = ($i % 2 );++$i;?><div>
      <a href="gooddetail.html" class="weui_media_box weui_media_appmsg">
      <div class="weui_media_hd">
        <img class="weui_media_appmsg_thumb" src="/php_-/market/Public/<?php echo ($manage["photo"]); ?>">
      </div>
      <div class="weui_media_bd">
        <h4 class="weui_media_title"><?php echo ($manage["name"]); ?></h4>
        <p class="weui_media_desc"><?php echo ($manage["description"]); ?></p>
      </div>
      </a>
      <div class="anniu">
        <a href="changegood.html" class="button orange medium">修改商品</a>
        <a href="/php_-/market/index.php/Home/Personal/saled/id/<?php echo ($manage["id"]); ?>" class="button orange medium saled" >已卖出</a>
        <a href="/php_-/market/index.php/Home/Personal/down/id/<?php echo ($manage["id"]); ?>" class="button orange medium">不想卖了</a>
      </div>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
</div>
  <!--图文标题结束部分-->
              </div>
              <!--第一个主题结束-->
              <!--第二个主题开始-->
              <div class="content" style="display: none;">
                  <!--图文标题开始部分-->
                  <div class="weui_panel weui_panel_access">
                      <div class="weui_panel_bd">
                          <?php if(is_array($down)): $i = 0; $__LIST__ = $down;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$down): $mod = ($i % 2 );++$i;?><div>
                                  <a href="gooddetail.html" class="weui_media_box weui_media_appmsg">
                                      <div class="weui_media_hd">
                                          <img class="weui_media_appmsg_thumb" src="/php_-/market/Public/<?php echo ($down["photo"]); ?>">
                                      </div>
                                      <div class="weui_media_bd">
                                          <h4 class="weui_media_title"><?php echo ($down["name"]); ?></h4>
                                          <p class="weui_media_desc"><?php echo ($down["description"]); ?></p>
                                      </div>
                                      <p><?php echo ($down["status"]); ?></p>
                                  </a>
                                  <div class="anniu">
                                      <a href="/php_-/market/index.php/Home/Personal/up/id/<?php echo ($down["id"]); ?>" class="button orange medium" id="dingdan">重新上架</a>
                                      <a href="/php_-/market/index.php/Home/Personal/deletesp/id/<?php echo ($down["id"]); ?>" class="button orange medium">彻底删除</a>
                                  </div>
                              </div><?php endforeach; endif; else: echo "" ;endif; ?>
                      </div>
                  </div>
                  <!--图文标题结束部分-->
              </div>
              <!--第二个主题结束-->
          </div>
      </div>
      <!--导航结束-->
  </div>
</div>
</body>

<script type="text/javascript" src="/php_-/market/Public/lib/jquery-2.1.4.js"></script>
<script type="text/javascript" src="/php_-/market/Public/js/jquery-weui.min.js"></script>
<script type='text/javascript' src='/php_-/market/Public/js/swiper.js' charset='utf-8'>
</script>
 <script>
      $(".swiper-container").swiper({
        loop: true,
        autoplay: 3000
      });
      $(".weui_navbar .weui_navbar_item").click(function(){
          $(".weui_navbar .weui_navbar_item").removeClass("weui_bar_item_on");
          $(this).addClass("weui_bar_item_on");
          //判断是第几个
          var which = $(this).index();
          //让所有的内容区域隐藏
          $(".weui_tab_bd .content").hide();
          //console.log( $(".weui_tab_bd .content").html())
          $(".weui_tab_bd .content:eq("+which+")").show();
          //console.log(which);
      });
      $(".saled").click(function(){
          //组织要传输的数据
          var url = $(this).attr('herf');
          alert(1);
          var data = array();
          data['image']= $('.weui_media_appmsg_thumb').attr('src');
          data['name'] = $('.weui_media_title').html();
          data['description'] = $('.weui_media_desc').html();
          //console.log(data);
//        $.post(url,data,function(da){
//             alert(da);
//        });
          return false;
      });
    </script>
</html>