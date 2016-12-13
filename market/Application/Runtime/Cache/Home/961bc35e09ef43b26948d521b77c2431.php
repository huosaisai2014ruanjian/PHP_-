<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>校园跳蚤市场-列表</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<!--   <link href="/marketsai/Public/dwz/themes/css/core.css" rel="stylesheet" type="text/css" /> -->
  <link rel="stylesheet" type="text/css" href="/marketsai/Public/lib/weui.css">


  <link href="/marketsai/Public/css/jquery-weui.min.css" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="/marketsai/Public/css/define.css">
  <link href="/marketsai/Public/css/base.css" rel="stylesheet" /> 

<!-- 	<link href="/marketsai/Public/lib/weui.min.css" type="text/css" rel="stylesheet"/>
	<link href="/marketsai/Public/css/jquery-weui.min.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="/marketsai/Public/css/define.css">
  <link href="/marketsai/Public/css/base.css" rel="stylesheet" />  -->
	<style>
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
<div class="weui_search_bar" id="search_bar">
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
</div>



	<!-- 搜索筛选器 分类 -->

<div class="weui_panel weui_panel_access">
<!--第一个分类-->
  <section class="job-module"> 
  <dl class="retrie"> 
    <dt>
      <a id="type" href="javascript:;">分类</a>
      <a id="goods" href="javascript:;">商品</a>
      <a id="school" href="javascript:;">学校</a>
      <a id="price" href="javascript:;">价格</a>
    </dt> 
    <dd class="type"> 
      <ul class="slide downlist"> 
        <li><a href="#">不限</a></li> 
        <li><a href="/marketsai/index.php/Home/Home/goodslist?cat_id=<?php echo ($vo['cat_id']); ?>">电子</a></li> 
        <li><a href="/marketsai/index.php/Home/Home/goodslist?cat_id=<?php echo ($vo['cat_id']); ?>">交通</a></li> 
        <li><a href="/marketsai/index.php/Home/Home/goodslist?cat_id=<?php echo ($vo['cat_id']); ?>">虚拟</a></li> 
        <li><a href="/marketsai/index.php/Home/Home/goodslist?cat_id=<?php echo ($vo['cat_id']); ?>">学习</a></li> 
        <li><a href="/marketsai/index.php/Home/Home/goodslist?cat_id=<?php echo ($vo['cat_id']); ?>">兼职</a></li> 
      </ul> 
    </dd> 
    <dd class="goods"> 
      <ul class="slide downlist"> 
        <li><a href="#">四级</a></li> 
        <li><a href="#">六级</a></li> 
        <li><a href="#">考研</a></li> 
      </ul> 
    </dd> 
    <dd class="school"> 
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
    </dd>  
  </dl> 
</section> 

  <div class="weui_panel_bd">
   
  <?php if(is_array($study)): $i = 0; $__LIST__ = $study;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/marketsai/index.php/Home/home/GoodDetail/index?id=<?php echo ($vo['id']); ?>" class="weui_media_box weui_media_appmsg">
      <div class="goodslist">
        <img class="weui_media_appmsg_thumb" src="/marketsai/Public/<?php echo ($vo["photo"]); ?>" height="100" width="100" alt="">
      </div>
      <div class="weui_media_bd">
        <h4 class="weui_media_title"><?php echo ($vo["name"]); ?></h4>
        <h5 class="price"><?php echo ($vo["price"]); ?></h5>
        <p class="ifnew"><?php echo ($vo["degree"]); ?>成新</p>
        <p class="weui_media_desc"><?php echo ($vo["description"]); ?></p>
      </div>
      <div>
          <img src="images/userhead.png" height="50" width="50">
          <p class="sellername"><?php echo ($vo["nickname"]); ?></p>
          <p class="sellername"><?php echo ($vo["college"]); ?></p>
      </div>
    </a><?php endforeach; endif; else: echo "" ;endif; ?>
  <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/marketsai/index.php/Home/GoodDetail/index?id=6" class="weui_media_box weui_media_appmsg">
      <div class="goodslist">
        <img class="weui_media_appmsg_thumb" src="/marketsai/Public/<?php echo ($vo["photo"]); ?>" height="100" width="100" alt="">
      </div>
      <div class="weui_media_bd">
      	<h4 class="weui_media_title"><?php echo ($vo["name"]); ?></h4>
        <h5 class="price"><?php echo ($vo["price"]); ?></h5>
        <p class="ifnew"><?php echo ($vo["degree"]); ?>成新</p>
        <p class="weui_media_desc"><?php echo ($vo["description"]); ?></p>
      </div>
      <div>
      		<img src="/marketsai/Public/<?php echo ($vo["head"]); ?>" height="50" width="50">
      		<p class="sellername"><?php echo ($vo["nickname"]); ?></p>
      		<p class="sellername"><?php echo ($vo["college"]); ?></p>
      </div>
    </a><?php endforeach; endif; else: echo "" ;endif; ?>
    
<!--第二个分类-->
     <!--  <div class="weui_panel_hd">照相机</div>
  <div class="weui_panel_bd">
    <a href="gooddetail.html" class="weui_media_box weui_media_appmsg">
      <div class="goodslist">
        <img class="weui_media_appmsg_thumb" src="images/goods.png" height="100" width="100" alt="">
      </div>
      <div class="weui_media_bd">
      	
      	<h4 class="weui_media_title">二手iphone</h4>
        <h5 class="price">50￥</h5>
        <p class="ifnew">9成新</p>
        <p class="weui_media_desc">刚用了一个月急需用钱，着急出售刚用了一个月急需用钱，着急出售刚用了一个月急需用钱，着急出售</p>
      </div>
      <div>
      		<img src="images/userhead.png" height="50" width="50">
      		<p class="sellername">赵四</p>
      		<p class="sellername">软件学院</p>
      </div>
    </a> 
    <a href="gooddetail.html" class="weui_media_box weui_media_appmsg">
      <div class="goodslist">
        <img class="weui_media_appmsg_thumb" src="images/goods.png" height="100" width="100" alt="">
      </div>
      <div class="weui_media_bd">
      	
      	<h4 class="weui_media_title">二手iphone</h4>
        <h5 class="price">50￥</h5>
        <p class="ifnew">9成新</p>
        <p class="weui_media_desc">刚用了一个月急需用钱，着急出售刚用了一个月急需用钱，着急出售刚用了一个月急需用钱，着急出售</p>
      </div>
      <div>
      		<img src="images/userhead.png" height="50" width="50">
      		<p class="sellername">赵四</p>
      		<p class="sellername">软件学院</p>
      </div>
    </a> 
<!--  <a class="weui_panel_ft" href="javascript:void(0);">查看更多</a>
</div>  -->

<script type="text/javascript" src="/marketsai/Public/lib/jquery-2.1.4.js"></script>
<script type="text/javascript" src="/marketsai/Public/js/jquery-weui.min.js"></script>
<script type="text/javascript" src="/marketsai/Public/js/swiper.js"></script>
<script>
      $(".swiper-container").swiper({
        loop: true,
        autoplay: 2000
      });

   
    </script>
<script type="text/javascript">
$(function(){ 
  $('.retrie dt a').click(function(){
    var $t=$(this);
    if($t.hasClass('up')){
      $(".retrie dt a").removeClass('up');
      $('.downlist').hide();
      $('.mask').hide();
    }else{
      $(".retrie dt a").removeClass('up');
      $('.downlist').hide();
      $t.addClass('up');
      $('.downlist').eq($(".retrie dt a").index($(this)[0])).show();
      $('.mask').show();
    }
  });
  $(".type ul li a:contains('"+$('#type').text()+"')").addClass('selected');
  $(".goods ul li a:contains('"+$('#goods').text()+"')").addClass('selected');
  $(".school ul li a:contains('"+$('#school').text()+"')").addClass('selected');
  $(".price ul li a:contains('"+$('#price').text()+"')").addClass('selected');
});
</script>
</body>
</html>