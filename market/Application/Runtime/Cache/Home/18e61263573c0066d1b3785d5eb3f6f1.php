<?php if (!defined('THINK_PATH')) exit();?><!--
 * document：我的收藏
 * User: 马豪珍
 * Date: 2016-12-06
 * Time: 20:01
 -->
<!DOCTYPE html>
<html>
<head>
	<title>我的收藏</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"><!--IE8-->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"><!--屏幕自适应-->
	<link rel="stylesheet" type="text/css" href="/php_-//market/Public/lib/weui.min.css">
	<link rel="stylesheet" type="text/css" href="/php_-//market/Public/css/jquery-weui.css">
	<style type="text/css">
	html,body{
		height: 100%;
	}
  .bianji{
    text-align: right;
  }
  .banner{
    width: 93%;
    margin:0 auto;
    margin-top:30px;

  }
  .banner li{
    text-align: center;
    width: 24.5%;
    list-style-type:none;
    float: right;
  }
  .banner .bjl{
    margin-top: -1px;
    border: 1px solid rgb(238,238,238);
  }
  .banner .bj2{
      margin-top: -1px;
      border: 1px solid rgb(238,238,238);
  }
  .sp1{
    display: none;
    margin-right: 5px;
  }
  .sp2{
      display: none;
      margin-right: 5px;
  }
  .weui_tabbar{
    display: none;
    margin:0 auto;
    text-align: center;
    color: white;
    font-size: 18px;
    height: 40px;
    background-color: orange;
      border:0 none;
  }
  .weui_tabbar p{
 
    margin:auto;
    text-align: center;
  }
	</style>
<body>
<div class="weui_tab">
  <div class="weui_tab_bd">
   <!--其中放我们的代码内容-->
   <div class="weui_navbar">
   <?php if( $a == 1): ?><a class="weui_navbar_item ">
          在售宝贝
        </a>
        <a class="weui_navbar_item weui_bar_item_on">
          失效宝贝
        </a>    
    <?php else: ?>
        <a class="weui_navbar_item weui_bar_item_on">
          在售宝贝
        </a>
        <a class="weui_navbar_item">
          失效宝贝
        </a><?php endif; ?>     
   </div>

  <br/>

  <!--第一个主题开始部分-->
      <form method="post" action="/php_-//market/index.php/Home/Personal/deletesc">
  <?php if( $a == 1): ?><div class="content" style="display: none;">  
  <?php else: ?>
  <div class="content" id="one"><?php endif; ?>
      <ul class="banner">

          <li class="bjl"><a class="bj">编辑</a></li>
      </ul>
      <br/>
  <!--图文标题开始部分-->
  <div class="weui_pan  el weui_panel_access">
  <div class="weui_panel_bd">

    <?php if(is_array($up)): $i = 0; $__LIST__ = $up;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$up): $mod = ($i % 2 );++$i;?><a href="/php_-//market/index.php/Home/Gooddetail/index?id=<?php echo ($up["goods_id"]); ?>" style="margin-top: 1px;" class="weui_media_box weui_media_appmsg">
      <input type="checkbox" name="sp[]" class="sp1" value="<?php echo ($up["id"]); ?>">
      <div class="weui_media_hd">
        <img class="weui_media_appmsg_thumb" src="/php_-//market/Public/<?php echo ($up["photo"]); ?>" >
      </div>
      <div class="weui_media_bd">
        <h4 class="weui_media_title"><?php echo ($up["name"]); ?></h4>
        <p class="weui_media_desc"><?php echo ($up["description"]); ?></p>
      </div>
    </a><?php endforeach; endif; else: echo "" ;endif; ?>

  </div>
</div>

  <input type="submit" class=" weui_tabbar" value="删除">
  <!--图文标题结束部分-->
  </div>
      </form>
  <!--第一个主题结束部分-->

   <!--第二个主题开始部分-->
      <form method="post" action="/php_-//market/index.php/Home/Personal/deletesc">
  <?php if( $a == 1): ?><div class="content" >
  <?php else: ?>
  <div class="content" style="display: none;"><?php endif; ?>
      <ul class="banner">

          <li class="bj2"><a class="b">编辑</a></li>
      </ul>
      <br/>
  <!--图文标题开始部分-->
  <div class="weui_pan  el weui_panel_access">
  <div class="weui_panel_bd">
    <?php if(is_array($down)): $i = 0; $__LIST__ = $down;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$down): $mod = ($i % 2 );++$i;?><a href="/php_-//market/index.php/Home/Gooddetail/index?id=<?php echo ($down["goods_id"]); ?>" class="weui_media_box weui_media_appmsg">
      <input type="checkbox" name="sp[]" class="sp2" value="<?php echo ($down["id"]); ?>">
      <input type="hidden" name="status" value="1">
      <div class="weui_media_hd">
        <img class="weui_media_appmsg_thumb" src="/php_-//market/Public/<?php echo ($down["photo"]); ?>">
      </div>
      <div class="weui_media_bd">
        <h4 class="weui_media_title"><?php echo ($down["name"]); ?></h4>
        <p class="weui_media_desc"><?php echo ($down["description"]); ?></p>
      </div>
    </a><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</div>
    <input type="submit" class="weui_tabbar" value="删除">

  </div>
          </form>
  <!--第二个主题结束部分-->


  </div>
</div>
</body>

<script type="text/javascript" src="/php_-//market/Public/lib/jquery-2.1.4.js"></script>
<script type="text/javascript" src="/php_-//market/Public/js/jquery-weui.min.js"></script>
<script type='text/javascript' src='/php_-//market/Public/js/swiper.js' charset='utf-8'>
</script>
 <script>
      $(".swiper-container").swiper({
        loop: true,
        autoplay: 3000
      });
    </script>
<script>
var bjl=document.getElementsByClassName('bjl')[0];
var bj=document.getElementsByClassName('bj')[0];
var bj2=document.getElementsByClassName('bj2')[0];
var b=document.getElementsByClassName('b')[0];
    bjl.a=0;
    bjl.onclick=function () {
        // alert(2);
        if (bjl.a%2==1) {
            // alert(3);
            $(".sp1").hide();
            $(".weui_tabbar").hide();
            $('.bj').css('color','black');
            bj.innerHTML="编辑"; 
              
        }
        if (bjl.a%2==0) {
            $(".sp1").show();
            $(".weui_tabbar").show();
            $(".a1").css("marginTop","5px");
           
            $('.bj').css('color','red');
            bj.innerHTML="完成";  
        }
        bjl.a+=1;  
    }
bj2.a=0;
bj2.onclick=function () {
    // alert(2);
    if (bj2.a%2==1) {
        // alert(3);
        $(".sp2").hide();
        $(".weui_tabbar").hide();
        $('.b').css('color','black');
        b.innerHTML="编辑";

    }
    if (bj2.a%2==0) {
        $(".sp2").show();
        $(".weui_tabbar").show();
        $(".a1").css("marginTop","5px");

        $('.b').css('color','red');
        b.innerHTML="完成";
    }
    bj2.a+=1;
}
  // $('.bjl').click(function(){
   
  //   $('.bjl').a=0;
  //   if ($('.bjl').a%2==0){
  //     $(".sp").show();
  //     $('.bj').css('color','red');
  //   }
  //   else {

  //     alert($('.bjl').a);
  //     $(".sp").hide();
  //     $('.bj').css('color','black');
  //   }
  //   $('.bjl').a+=1;  
  //});
      $(".weui_navbar .weui_navbar_item").click(function(){
           $(".weui_navbar .weui_navbar_item").removeClass("weui_bar_item_on");
           $(this).addClass("weui_bar_item_on");
           //判断是第几个
           var which = $(this).index();
           //让所有的内容区域隐藏
           $(".weui_tab_bd .content").hide();
           console.log( $(".weui_tab_bd .content").html())
            $(".weui_tab_bd .content:eq("+which+")").show();
           //console.log(which);
           
      });
</script>   
</html>