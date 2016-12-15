<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>校园跳蚤市场-列表</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<!--   <link href="/PHP_-/market/Public/dwz/themes/css/core.css" rel="stylesheet" type="text/css" /> -->
  <link rel="stylesheet" type="text/css" href="/PHP_-/market/Public/lib/weui.css">


  <link href="/PHP_-/market/Public/css/jquery-weui.min.css" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="/PHP_-/market/Public/css/define.css">
  <link href="/PHP_-/market/Public/css/base.css" rel="stylesheet" /> 

<!-- 	<link href="/PHP_-/market/Public/lib/weui.min.css" type="text/css" rel="stylesheet"/>
	<link href="/PHP_-/market/Public/css/jquery-weui.min.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="/PHP_-/market/Public/css/define.css">
  <link href="/PHP_-/market/Public/css/base.css" rel="stylesheet" />  -->
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
        <li><a href="/PHP_-/market/index.php/Home/Home/goodslist?cat_id=<?php echo ($vo['cat_id']); ?>">电子</a></li> 
        <li><a href="/PHP_-/market/index.php/Home/Home/goodslist?cat_id=<?php echo ($vo['cat_id']); ?>">交通</a></li> 
        <li><a href="/PHP_-/market/index.php/Home/Home/goodslist?cat_id=<?php echo ($vo['cat_id']); ?>">虚拟</a></li> 
        <li><a href="/PHP_-/market/index.php/Home/Home/goodslist?cat_id=<?php echo ($vo['cat_id']); ?>">学习</a></li> 
        <li><a href="/PHP_-/market/index.php/Home/Home/goodslist?cat_id=<?php echo ($vo['cat_id']); ?>">兼职</a></li> 
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

  <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/PHP_-/market/index.php/Home/GoodDetail/index?id=6" class="weui_media_box weui_media_appmsg">
      <div class="goodslist">
        <img class="weui_media_appmsg_thumb" src="/PHP_-/market/Public/<?php echo ($vo["photo"]); ?>" height="100" width="100" alt="">
      </div>
      <div class="weui_media_bd">
      	<h4 class="weui_media_title"><?php echo ($vo["name"]); ?></h4>
        <br>
        <p class="weui_media_desc"><?php echo ($vo["description"]); ?></p>
        <h5 class="price"><?php echo ($vo["price"]); ?></h5>
        <p class="ifnew"><?php echo ($vo["degree"]); ?>成新</p>

      </div>
      <div style="text-align: right">
      		<img src="/PHP_-/market/Public/<?php echo ($vo["head"]); ?>" style=" height:40px;width:40px;">
      		<p class="weui_media_desc"><?php echo ($vo["nickname"]); ?></p>
      		<p class="weui_media_desc"><?php echo ($vo["college"]); ?></p>
      </div>
    </a><?php endforeach; endif; else: echo "" ;endif; ?>
    


<script type="text/javascript" src="/PHP_-/market/Public/lib/jquery-2.1.4.js"></script>
<script type="text/javascript" src="/PHP_-/market/Public/js/jquery-weui.min.js"></script>
<script type="text/javascript" src="/PHP_-/market/Public/js/swiper.js"></script>
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