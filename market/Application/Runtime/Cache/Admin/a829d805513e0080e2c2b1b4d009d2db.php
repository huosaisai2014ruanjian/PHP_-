<?php if (!defined('THINK_PATH')) exit();?>

<form action="/code/index.php/Admin/Yhgl/add" method="post" onsubmit="return validateCallback(this, navTabAjaxDone);" class="pageForm required-validate" enctype="multipart/form-data"  novalidate="novalidate">
	<div class="body" >
		<div id="left"  style="text-align:left;witdh:30%;height:500px;float:left;sroll:no;">	
				<div class="pageFormContent nowrap" layoutH="34">
				<table>
				<tr>
					<td>用户姓名:</td>
					<td><input  type="text" name="name"  class="required"/>	</td>
				</tr>
				<tr>
					<td>联系方式:</td>
					<td><input type="text" class="phone required" name="tel"/></td>
				</tr>
				<tr>
					<td>客服电话:</td>
					<td><input type="text" class="phone" name="ptel" /></td>
				</tr>
				<tr>
					<td>从业年限:</td>
					<td><input type="text" name="time"/></td>
				</tr>
				<tr>
					<td>个人专长:</td>
					<td><input type="text" name="specialty"/></td>
				</tr>
				<tr>
					<td>个人介绍:</td>
					<td><input type="text"  name="introduction"/></td>
				</tr>
				<tr>
					<td>有无顾问:</td>
					<td><input type="radio"  name="advistor"  value="1"/>有<input type="radio" name="advistor" value="0" checked="checked"/>无</td>
				</tr>	
				<tr>
					<td>认证达人:</td>
					<td><input type="radio" name="authenticate" value="1"/>是<input type="radio" name="authenticate" value="0" checked="checked"/>否</td>
				</tr>
				</table>
    		</div>
	    </div>
	    <div id="right" style="text-align:left;height:500px;float:left;sroll:no; witdh:30%;">
			<div id="up" style="display: none; height: 200px; margin-top: 20px; ">	
				<h1>认证顾问添加</h1><br><hr>	
				<div class="pageFormContent nowrap" >											
				<tr>
					<td><h1>顾问分类:</h1></td>
					<td><input type="text" name="sort"></td>
				</tr>	
				<tr>
					<td><h1>证件照片:</h1></td>
					<td><input type="file" name="pphoto"></td>
				</tr>
				<tr>
					<td><h1>名片照片:</h1></td>
					<td><input type="file" name="bphoto"></td>
				</tr>	
				</div>							
			</div>
			<div id="down" style="display: none; height:200px;scroll=no;margin-top:20px;">
				<h1>认证达人添加</h1><br><hr>
				<div class="pageFormContent nowrap" >
				<input type="hitden" name="rank" value="1">
				<tr>
					<td><h1>认证姓名:</h1></td>
					<td><input type="text" name="aname"></td>
				</tr>	
				<tr>
					<td><h1>标签名称:</h1></td>
					<td><input type="text" name="tagname"></td>
				</tr>	
				</div>
			</div>
		</div>	
	</div>
	<!-- <div class="down"> -->
	<div class="formBar" style="position:absolute;bottom:0;right:0;witdh:100%;">
		<ul>
			<li>
				<div class="buttonActive">
					<div class="buttonContent">
					<button name="submit_atduser" type="submit" value="submit">保存</button>
				<!-- <input type="submit" name="submit_atduser" value="添加"/>
				 --><!-- <a href="#"  class="atd button" onclick="document.formname.submit()" value="submit"> <span>注册</span></a> -->
						<!-- <button type="submit">保存</button> -->
					</div>
				</div>
			</li>
			<li>
				<div class="button">
					<div class="buttonContent">
						<button type="button" class="close">取消</button>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<!-- </div> -->
</form>
<script type="text/javascript">
	var advistor=document.getElementsByName('advistor');
	var authenticate=document.getElementsByName('authenticate');
	var submit_atduser=document.getElementsByName('submit_atduser')[0].value;
	var tiaozhuan=document.getElementsByName('submit_atduser')[0];
	var up=document.getElementById('up');
	var down=document.getElementById('down');
	var ad=false;var au=false;
	var tname=document.getElementsByName('name')[0];
	var tel=document.getElementsByName('tel')[0];
	var sort=document.getElementsByName('sort')[0];
	var aname=document.getElementsByName('aname')[0];
	tiaozhuan.onclick=function(){
		if(tname.value==''||tel.value.length<11){
			alert("信息不完整！");	
		}
	}
	aname.onblur=function(){
		if(this.value==''){
			alert("认证达人姓名不能为空！");		
		}
	}
	sort.onblur=function(){
		if(this.value==''){
			alert("顾问分类不能为空！");		
		}
	}
	tname.onblur=function(){
		if(this.value==''){
			alert("用户姓名不能为空！");
		}
	}
	tel.onblur=function(){
		if(this.value.length<11){
			alert('电话号码格式有误请重新输入 ！');
		}
	}
	for(var i=0;i<2;i++){
		advistor[i].onclick=function(){
			if(this.value=='1'){
				ad=true;	
				up.style.display="block";
			}
			else{
				ad=false;
				up.style.display="none";
			}
			if(ad||au){
				document.getElementsByName('submit_atduser')[0].innerHTML="下一步";
			}
			else{
				document.getElementsByName('submit_atduser')[0].innerHTML="添加";	 
			}
		}	
	}		
		for(var i=0;i<2;i++){
			authenticate[i].onclick=function(){
			if(this.value=='1'){
				au=true;
				down.style.display="block";
			}
			else{
				au=false;
				down.style.display="none";	
			}
			if(ad||au){
				document.getElementsByName('submit_atduser')[0].innerHTML="下一步";	 
			}
			else{
				document.getElementsByName('submit_atduser')[0].innerHTML="添加"; 
			}
		}
	}
</script>