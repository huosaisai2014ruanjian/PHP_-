$(function(){ 
var page= 1; 
var i = 3;//每版四个图片 
//向右滚动 
$(".next").click(function(){ //点击事件 
var v_wrap = $(this).parents(".scroll"); // 根据当前点击的元素获取到父元素 
var v_show = v_wrap.find(".scroll_list"); //找到视频展示的区域 
var v_cont = v_wrap.find(".box"); //找到视频展示区域的外围区域 
var v_width = v_cont.width(); 
var len = v_show.find("li").length; //我的视频图片个数 
var page_count = Math.ceil(len/i); //只要不是整数，就往大的方向取最小的整数 
if(!v_show.is(":animated")){ 
if(page == page_count){ 
v_show.animate({left:'0px'},"slow"); 
page =1; 
}else{ 
v_show.animate({left:'-='+v_width},"slow"); 
page++; 
} 
} 
}); 
	$(".prev").click(function(){ //点击事件 
var v_wrap = $(this).parents(".scroll"); // 根据当前点击的元素获取到父元素 
var v_show = v_wrap.find(".scroll_list"); //找到视频展示的区域 
var v_cont = v_wrap.find(".box"); //找到视频展示区域的外围区域 
var v_width = v_cont.width(); 
var len = v_show.find("li").length; //我的视频图片个数 
var page_count = Math.ceil(len/i); //只要不是整数，就往大的方向取最小的整数 
if(!v_show.is(":animated")){ 
if(page == 1){ 
v_show.animate({left:'-='+ v_width*(page_count-1)},"slow"); 
page =page_count; 
}else{ 
v_show.animate({left:'+='+ v_width},"slow"); 
page--; 
} 
} 
}); 
}); 