<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
ul,li,div {padding:0;margin:0;}
#ta li{float:left;width:100px;height:30px;line-height:30px;text-align:center;background-color:#ccc;border:1px #bbb solid;border-bottom:none;}
#tab li {float:left;width:100px;height:30px;line-height:30px;text-align:center;background-color:#fff;border:1px #bbb solid;border-bottom:none;}
#tab div{display:none;}
#tab div.fl {display:block;background-color:#ccc;}
ul li.fli {background-color:#ccc;color:red;}
ul {overflow:hidden;zoom:1;list-style-type:none;}
#tab_con {width:304px;height:200px;}
#tab_con div {width:304px;height:200px;display:none;border:1px #bbb solid;border-top:none;}
#tab_con div.fdiv {display:block;background-color:#ccc;}
</style>

<div class="pageContent">
  <div class="panelBar">
    <ul class="toolBar">
      
      <li><a class="add" href="/dcxt/index.php/Admin/Wdxt/addyi" rel="areapage1" target="dialog" fresh="false"><span>添加一级标签</span></a></li>
      <li><a class="add" href="/dcxt/index.php/Admin/Wdxt/adder" rel="areapage2" target="dialog" fresh="false"><span>添加二级标签</span></a></li>
      <!--<li><a class="add" href="/dcxt/index.php/Admin/Area/addarea" rel="areapage3" target="dialog" fresh="false"><span>添加区</span></a></li>
      <li><a class="add" href="/dcxt/index.php/Admin/Area/addcircle" rel="areapage4" target="dialog" fresh="false"><span>添加商圈</span></a></li>
      <li class="line">line</li>-->
    </ul>
  </div>
  </div>

<ul id='ta'>
<p>一级分类：</p>
	<?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><li><?php echo ($type["name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<script type="text/javascript">
var fls=document.getElementById("ta").getElementsByTagName("li");
 fls[0].className = 'fli'; 
</script>
<ul id="tab" >
<p>二级分类：</p>
<div>
	<?php if(is_array($fenlei1)): $i = 0; $__LIST__ = $fenlei1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fenlei1): $mod = ($i % 2 );++$i;?><li><?php echo ($fenlei1["name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<div>	
	<?php if(is_array($fenlei2)): $i = 0; $__LIST__ = $fenlei2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fenlei2): $mod = ($i % 2 );++$i;?><li><?php echo ($fenlei2["name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</ul><br/><br/>
<br/>

<script type="text/javascript">
var flis=document.getElementById("tab").getElementsByTagName("li");
var fls=document.getElementById("tab").getElementsByTagName("div");
 flis[0].className = 'fli'; 
 fls[0].className = 'fl'; 
</script>
<div id="tab_con">
<p>问题：&nbsp;&nbsp;&nbsp;<a href="/dcxt/index.php/Admin/Index/add">添加</a></p>
<div>
	<?php if(is_array($question1)): $i = 0; $__LIST__ = $question1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$q1): $mod = ($i % 2 );++$i;?><p><?php echo ($q1["wenti"]); ?>(由<?php echo ($q1["answer"]); ?>添加)</p><a href="/dcxt/index.php/Admin/Index/del?id=<?php echo ($q1["id"]); ?>">删除</a>&nbsp;<a href="/dcxt/index.php/Admin/Index/answer?id=<?php echo ($q1["id"]); ?>">回答</a><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<div>
	<?php if(is_array($question2)): $i = 0; $__LIST__ = $question2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$q2): $mod = ($i % 2 );++$i;?><p><?php echo ($q2["wenti"]); ?>(由<?php echo ($q2["answer"]); ?>添加)</p><a href="/dcxt/index.php/Admin/Index/del?id=<?php echo ($q2["id"]); ?>">删除</a>&nbsp;<a href="/dcxt/index.php/Admin/Index/answer?id=<?php echo ($q2["id"]); ?>">回答</a><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<div>
	<?php if(is_array($question3)): $i = 0; $__LIST__ = $question3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$q3): $mod = ($i % 2 );++$i;?><p><?php echo ($q3["wenti"]); ?>(由<?php echo ($q3["answer"]); ?>添加)</p><a href="/dcxt/index.php/Admin/Index/del?id=<?php echo ($q3["id"]); ?>">删除</a>&nbsp;<a href="/dcxt/index.php/Admin/Index/answer?id=<?php echo ($q3["id"]); ?>">回答</a><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<script type="text/javascript">
var divs=document.getElementById("tab_con").getElementsByTagName("div");
 divs[0].className = 'fdiv'; 
</script>
</div>











<script type="text/javascript">
var tas=document.getElementById("ta").getElementsByTagName("li");//1
var tab=document.getElementById("tab").getElementsByTagName("div");//2
var tabs=document.getElementById("tab").getElementsByTagName("li");//2
var divs=document.getElementById("tab_con").getElementsByTagName("div");//3

for(var i=0;i<tas.length;i++){
tas[i].onclick=function(){change1(this);}
}
function change1(obj){
for(var i=0;i<tas.length;i++)
{
	if(tas[i]==obj){
	tas[i].className="fli";
	tab[i].className="fl";
	}
	else{
	tas[i].className="";
	tab[i].className="";
	}
}
}
for(var i=0;i<tabs.length;i++){
tabs[i].onclick=function(){change(this);}
}
function change(obj){
for(var i=0;i<tabs.length;i++)
{
	if(tabs[i]==obj){
	tabs[i].className="fli";
	divs[i].className="fdiv";
	}
	else{
	tabs[i].className="";
	divs[i].className="";
	}
}
}
</script>