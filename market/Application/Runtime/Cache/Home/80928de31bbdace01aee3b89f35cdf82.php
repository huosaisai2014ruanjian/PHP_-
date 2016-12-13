<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/css/public.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/head.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/setquestion.css" rel="stylesheet" type="text/css" />
<title>我要提问</title>
</head>
<body>

<div class="header">
    <div class="mybody">
        <div class="logo"><img src="/Public/images/logo2.png" width="193" height="60" alt="logo" /></div>
        <div class="place"><p>北京</p></div>
        <div class="nav">
            <div class="navtop">
            <a href="#" class="log">登录</a>
            <a href="#" class="log sign">注册</a>
            <p>客服热线&nbsp;&nbsp;&nbsp;400&nbsp;-&nbsp;0000&nbsp;-&nbsp;000</p>
            </div>
            <div class="line"></div>
            <a href="#" class="xz"><div class="xzimg"><img src="/Public/images/gl2.png" width="21" height="21" alt="gl"/></div><p>选址攻略</p></a>
            <a href="#" class="xz xz2"><div class="xzimg"><img src="/Public/images/gw2.png" width="21" height="21" alt="gl"/></div><p>选址顾问</p></a>
            <a href="#" class="xz xz2"><div class="xzimg"><img src="/Public/images/jy2.png" width="21" height="21" alt="gl"/></div><p>选址建议</p></a>
        </div>
    </div>
</div>


<div class="content">
<div class="mybody">
    <div class="bread"><span>选址中国</span> > <a href="#">我要提问</a></div>
    <div class="quesform">
      <form method="post" enctype="multipart/form-data" action="/index.php/Home/Question/setquestion">
            <div class="questop">
                <h1 class="title">概况</h1>
                <textarea class="text" name="question"></textarea>
            </div>
            <div class="questop">
                <h1 class="title">分类</h1>
                <select class="select"  name="tab2">
                    <?php if(is_array($tab2)): $i = 0; $__LIST__ = $tab2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab2): $mod = ($i % 2 );++$i;?><option><?php echo ($tab2["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
            <div class="questop">
                <h1 class="title">详情</h1>
                <textarea class="text text2" name="detail"></textarea>
            </div>
            <div class="questop">
                <h1 class="title">图片</h1>
                <p id="nownum">0/6</p>
                <div class="img" style="margin-left:72px;">
    <!--                <a href="#"><img src="/Public/images/img1.gif" width="190" height="140"  /></a>
                    <a href="#"><img src="/Public/images/img3.gif" width="190" height="140" class="img2"/></a> -->
                    <input type="file" class="upload" id="upload1" name="upload1"><img src="/Public/images/l+.gif" class="img2" id="img21" />


                    <input type="file" class="upload" id="upload2" name="upload2"><img src="/Public/images/l+.gif" class="img2" id="img22" />
                    <input type="file" class="upload" id="upload3" name="upload3"><img src="/Public/images/l+.gif" class="img2" id="img23" />
                    <input type="file" class="upload" id="upload4" name="upload4"><img src="/Public/images/l+.gif" class="img2" id="img24" />
                    <input type="file" class="upload" id="upload5" name="upload5"><img src="/Public/images/l+.gif" class="img2" id="img25" />
                    <input type="file" class="upload" id="upload6" name="upload6"><img src="/Public/images/l+.gif" class="img2" id="img26" />               
                </div>
            </div>
            <div class="questop">
                <input type="submit" value="确认发布" name="submit" class="button"/>
            </div>
        </form>
    </div>
</div>

<div class="footer">
	<div class="mybody">
	<div class="ewm"><img src="/Public/images/ewm.jpg" width="110" height="110" alt="ewm"/><p>关注选址微信公众号</p></div>
    <div class="footermiddle">
    <ul>
    	<li><a href="#" class="footernav">关于我们</a></li>
        <li><a href="#" class="footernav footernav2">联系我们</a></li>
        <li><a href="#" class="footernav footernav2">平台规则</a></li>
        <li><a href="#" class="footernav footernav2">意见反馈</a></li>
    </ul>
	<p class="bq">版权所有 2016 选址中国有限公司 保留一切权利 京ICP备111111111号</p>
    <p class="dh">联系电话：400-000-000</p>
    </div>
    <div class="footermiddle footerr">
    	<a href="#" class="footernav">友情链接</a>
        <ul>
    	<li><a href="#" class="yqlj">瑞凡特（北京）科技有限公司</a></li>
        <li><a href="#" class="yqlj yqlj2">北京写字楼出租</a></li>
        <li><a href="#" class="yqlj yqlj2">上海写字楼出租</a></li>
        <li><a href="#" class="yqlj yqlj2">深圳写字楼出租</a></li>
        <li><a href="#" class="yqlj">深圳写字楼出租</a></li>
        <li><a href="#" class="yqlj yqlj2">深圳写字楼出租</a></li>
        <li><a href="#" class="yqlj yqlj2">深圳写字楼出租</a></li>
        <li><a href="#" class="yqlj yqlj2">深圳写字楼出租</a></li>
    	</ul>
    </div>
    </div>
</div>

</body>
<script type="text/javascript">
var image=document.getElementsByClassName('img2');
var upload=document.getElementsByClassName('upload');
var img=document.getElementsByClassName('img')[0];
var nownum=document.getElementById('nownum');
    for (var i = upload.length - 1; i >= 0; i--) {
        upload[i].i=i;
        upload[i].onchange=function(){
            //限制上传类型
            photoExt=this.value.substr(this.value.lastIndexOf(".")).toLowerCase();//获得文件后缀名
            if(photoExt!='.jpg'&&photoExt!='.gif'&&photoExt!='.jpeg'&&photoExt!='.png'){
                alert("图片类型必须是.gif,jpeg,jpg,png中的一种");
                return false;
            }
            var fileSize = 0;
            var isIE = /msie/i.test(navigator.userAgent) && !window.opera;            
            if (isIE && !this.files) {          
                 var filePath = this.value;            
                 var fileSystem = new ActiveXObject("Scripting.FileSystemObject");   
                 var file = fileSystem.GetFile (filePath);               
                 fileSize = file.Size;         
            }else {  
                 fileSize = this.files[0].size;     
            } 
            fileSize=Math.round(fileSize/1024*100)/100; //单位为KB
            if(fileSize>=5120){
                alert("照片最大尺寸为5MB，请重新上传!");
                return false;
            }
            //图片显示效果
            image[this.i].src=window.URL.createObjectURL(this.files[0]);
            var num=this.i+1;
            if (num<6) {    
            image[num].style.display = "inline"; 
            upload[num].style.display = "inline";
            upload[num-1].style.display = "none";
            }
            if (num>=3) {
                img.style.height="298px";
            } 
            if (num==6) {
                upload[num-1].style.display = "none";
            }
            //计数
            nownum.innerHTML = num+'/6';
        }
    }
// function getPhotoSize(obj){

// }
</script>

</html>