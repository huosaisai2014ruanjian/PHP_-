<?php if (!defined('THINK_PATH')) exit();?><style>
	.pageFormContent dd{
		width:200px;
	}
</style>	
		<form action="/index.php/Admin/Yhgl/edit" method="post" onsubmit="return validateCallback(this, navTabAjaxDone);" class="pageForm required-validate" enctype="multipart/form-data"  novalidate="novalidate">
<div class="body">
		<div id="left"  style="text-align:left;width:30%;height:500px;float:left;sroll:no;">

					<div class="pageFormContent nowrap" layoutH="34">
						<input type="hidden" name="id" value="<?php echo ($d["id"]); ?>"/>
						<dl>
							<dt>用户姓名:</dt>
							<dd>
								<input  type="text" name="name"  class="required" value="<?php echo ($d["name"]); ?>"/>	
							</dd>
						</dl>
						<dl>
							<dt>联系方式:</dt>
							<dd>
								<input type="text" class="phone required" name="tel" value="<?php echo ($d["tel"]); ?>" />
							</dd>
						</dl>
						<dl>
							<dt>客服电话:</dt>
							<dd>
								<input type="text" class="phone" name="ptel" value="<?php echo ($d["ptel"]); ?>" />
							</dd>
						</dl>
						<dl>
							<dt>从业年限:</dt>
							<dd>
								<input type="text" name="time" value="<?php echo ($d["time"]); ?>"/>
							</dd>
						</dl>
						<dl>
							<dt>个人专长:</dt>
							<dd>
								<input type="text" name="specialty" value="<?php echo ($d["specialty"]); ?>"/>
							</dd>
						</dl>
						<dl>
							<dt>个人介绍:</dt>
							<dd>
								<input type="text"  name="introduction" value="<?php echo ($d["introduction"]); ?>"/>
							</dd>
						</dl>
						<dl>
							<dt>有无顾问:</dt>
							<dd id="radvistor">
								
								
							</dd>
						</dl>	
						<dl>
							<dt>认证达人:</dt>
							<dd id='rauthenticate'>
							
							</dd>
						</dl>

    				</div>
	    </div>
<div id="right" style="text-align:left;height:500px;float:left;sroll:no; width:30%;" >
			<div id="up" style="display: none; height: 200px; margin-top: 20px; ">	
			
									<!-- !!!!!!!!!!!!!! -->
									<h1>认证顾问添加</h1><br><hr>												
									 <div class="pageFormContent nowrap" > 
									<input type="hidden" name="auserid" value="<?php echo ($a["userid"]); ?>">
										<dl>
											<dt><h1>顾问分类:</h1></dt>
											<dd>
												<input type="text" name="sort" value="<?php echo ($a["sort"]); ?>">
											</dd>
										</dl>	
										<dl>
											<dt><h1>证件照片:</h1></dt>
											<dd>
												<input type="file" name="pphoto"><br>
											</dd>
										</dl>
										<dl>
											<dt><h1>名片照片:</h1></dt>
											<dd>
												<input type="file" name="bphoto"><br>
											</dd>
										</dl>								

									 </div>	 
								
									<!-- !!!!!!!!! -->
							</div>
										<div id="down" style="display: none; height:200px;scroll=no;margin-top:20px;">
							<!-- !!!!!!!!!!!!!!! -->
											<h1>认证达人添加</h1><br><hr>
											<div class="pageFormContent nowrap"> 
												<input type="hidden" name="buserid" value="<?php echo ($b["userid"]); ?>">
												<input type="hidden" name="rank" value="<?php echo ($b["rank"]); ?>">
												<input type="hidden" name="aname" value="<?php echo ($b["name"]); ?>">
												<input type="hidden" name="tname" value="<?php echo ($d["name"]); ?>">

												<dl>
													<dt><h1>认证编号:</h1></dt>
													<dd>
														<!-- <input type="text" name="aname"  value="<?php echo ($b["name"]); ?>"> -->
														<?php echo ($d["id"]); ?>
													</dd>
												</dl>	
												<dl>
													<dt><h1>标签名称:</h1></dt>
													<dd>
														<input type="text" name="tagname"  value="<?php echo ($b["tag"]); ?>" >
													</dd>
												</dl>	
											
											</div> 
											
							<!-- !!!!!!!!!!!! -->
								
							</div>
		</div>

		
	</div>
	<!-- <div class="down"> -->
	<div class="formBar" style="position:absolute;bottom:0;right:0;width:100%;">
		<ul>
			<li>
				<div class="buttonActive">
					<div class="buttonContent">
					<button name="submit_edituser" type="submit" value="submit">保存</button>
				<!-- <input type="submit" name="submit_adduser" value="添加"/>
				 --><!-- <a href="#"  class="add button" onclick="document.formname.submit()" value="submit"> <span>注册</span></a> -->
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
if(<?php echo ($d["advistor"]); ?>==1){
	document.getElementById('up').style.display="block";
}if(<?php echo ($d["authenticate"]); ?>==1){
	document.getElementById('down').style.display="block";
}
if(<?php echo ($d["advistor"]); ?>==1){
document.getElementById('radvistor').innerHTML="<input type='radio'  name='advistor'  value='1' checked='checked'/>有<input type='radio' name='advistor' value='0' />无";
								}
else{
document.getElementById('radvistor').innerHTML="<input type='radio'  name='advistor'  value='1' />有<input type='radio' name='advistor' value='0' checked='checked'/>无";
								
								}
if(<?php echo ($d["authenticate"]); ?>==1){
	document.getElementById('rauthenticate').innerHTML="<input type='radio'  name='authenticate'  value='1' checked='checked'/>有<input type='radio' name='authenticate' value='0' />无";
						}
else{
	document.getElementById('rauthenticate').innerHTML="<input type='radio'  name='authenticate'  value='1' />有<input type='radio' name='authenticate' value='0' checked='checked'/>无";	
						}
	var advistor=document.getElementsByName('advistor');
	var authenticate=document.getElementsByName('authenticate');
	var submit_edituser=document.getElementsByName('submit_edituser')[0].value;
	// var tiaozhuan=document.getElementById('tiaozhuan').href;
	var tiaozhuan=document.getElementsByName('submit_edituser')[0];
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
	// aname.onblur=function(){
	// 	if(this.value==''){
	// 		alert("认证达人姓名不能为空！");		
	// 	}
	// }

	sort.onblur=function(){
		if(this.value==''){
			alert("顾问分类不能为空！");		
		}
	}
	tname.onblur=function(){
		// alert(123);
		if(this.value==''){
			alert("用户姓名不能为空！");
			// alert(123);
		}
	}
	tel.onblur=function(){
		// alert(123);
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
				// 
		
			// if(ad||au){
			// 	document.getElementsByName('submit_edituser')[0].innerHTML="下一步";
				
				 
			// }
			// else{
			// 	document.getElementsByName('submit_edituser')[0].innerHTML="添加";
			
				 
			// }
		
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
		
			// if(ad||au){
			// 	document.getElementsByName('submit_edituser')[0].innerHTML="下一步";
		

				 
			// }
			// else{
			// 	document.getElementsByName('submit_edituser')[0].innerHTML="添加";

				 
			// }
		}
	}

</script>