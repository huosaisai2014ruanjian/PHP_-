<?php if (!defined('THINK_PATH')) exit();?><style>
    .pageFormContent dd{
        width:135px;
    }
    .upload{
        display: none;
    }
    #upload1{
        display: block;
    }
    #nownum{
        float: none;
        display: inline;
    }
</style>
<script type="text/javascript">
function showImage()
{
    // 获取文件路径
    var path = document.getElementById('upload').value;
    // 创建 img
    var img = document.getElementById('img');
    // 载入图像
    img.src = path;
    img.style.cssText = "";
}
</script>
<form action="/market/index.php/Admin/Users/update" method="post" enctype="multipart/form-data" class="pageForm required-validate">
    <div class="pageFormContent nowrap" layoutH="37">
        <dl>
            <dd>
                <input type="hidden" name="id" class="required" maxlength="30" alt="用于登陆的账户" value="<?php echo ($users["id"]); ?>" />
            </dd>
        </dl>
        <dl>
            <dt>手机号：</dt>
            <dd>
                <input type="text" name="username" class="required" maxlength="30" alt="用于登陆的账户" value="<?php echo ($users["username"]); ?>" />
            </dd>
        </dl>
        <dl>
            <dt>昵称：</dt>
            <dd>
                <input type="text" name="name" class="required" maxlength="8" value="<?php echo ($users["name"]); ?>" />
                <!--                 <select name="typeid" id="typeid">
                                    <option value="0" selected="selected">请选择</option>
                                    <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><option value="<?php echo ($type["id"]); ?>"><?php echo ($type["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select> -->
            </dd>
        </dl>
        <dl>
            <dt>性别：</dt>
            <dd>
                <?php if(($users["sex"] == '男')): ?><input type="radio" name="sex" value="男" class="required" checked/>男&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="sex" value="女" class="required" />女
                <?php else: ?>
                <input type="radio" name="sex" value="男" class="required"/>男&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="sex" value="女" class="required" checked/>女<?php endif; ?>
                
                <!--                 <select name="typeid" id="typeid">
                                    <option value="0" selected="selected">请选择</option>
                                    <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><option value="<?php echo ($type["id"]); ?>"><?php echo ($type["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select> -->
            </dd>
        </dl>
        <dt>年级：</dt>
        <dd>
        <option value="0" selected="selected">请选择</option>
            <select name="grade" id="college_id">
                <?php if(($users["grade"] == '2013届')): ?><option value="2013届" selected="selected">2013届</option>
                    <option value="2014届">2014届</option>
                    <option value="2015届">2015届</option>
                    <option value="2016届">2016届</option>
                    <option value="2017届">2017届</option>
                <?php elseif(($users["grade"] == '2014届')): ?>
                    <option value="2013届">2013届</option>
                    <option value="2014届" selected="selected">2014届</option>
                    <option value="2015届">2015届</option>
                    <option value="2016届">2016届</option>
                    <option value="2017届">2017届</option>
                <?php elseif(($users["grade"] == '2015届')): ?>
                    <option value="2013届">2013届</option>
                    <option value="2014届">2014届</option>
                    <option value="2015届" selected="selected">2015届</option>
                    <option value="2016届">2016届</option>
                    <option value="2017届">2017届</option>
                <?php elseif(($users["grade"] == '2016届')): ?>
                    <option value="2013届">2013届</option>
                    <option value="2014届">2014届</option>
                    <option value="2015届">2015届</option>
                    <option value="2016届" selected="selected">2016届</option>
                    <option value="2017届">2017届</option>
                <?php elseif(($users["grade"] == '2017届')): ?> 
                <?php else: ?>
                    <option value="2013届">2013届</option>
                    <option value="2014届">2014届</option>
                    <option value="2015届">2015届</option>
                    <option value="2016届">2016届</option>
                    <option value="2017届" selected="selected">2017届</option><?php endif; ?>
            </select>
        </dd>
        <dl>
            <dt>学号：</dt>
            <dd>
                <input type="text" name="num" class="required" maxlength="10" value="<?php echo ($users["num"]); ?>" />
                <!--                 <select name="typeid" id="typeid">
                                    <option value="0" selected="selected">请选择</option>
                                    <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><option value="<?php echo ($type["id"]); ?>"><?php echo ($type["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select> -->
            </dd>
        </dl>
        <dl>
        <dt>学院：</dt>
        <dd>
            <select name="college" id="college_id">
                <option value="0" selected="selected">请选择</option>
                <?php if(is_array($college)): $i = 0; $__LIST__ = $college;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$temp): $mod = ($i % 2 );++$i; if(($user["college"] == $temp)): ?><option value="<?php echo ($temp["name"]); ?>" selected="selected"><?php echo ($temp["name"]); ?></option>
                    <?php else: ?>
                        <option value="<?php echo ($temp["name"]); ?>" selected="selected"><?php echo ($temp["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </dd>
        </dl>
        <dl>
            <dt>上传头像：<p id="nownum"></p></dt>
            <dd>
                <input type="file" id="upload" name="head" value="<?php echo ($users["head"]); ?>" onChange="showImage()"/>
            </dd>
        </dl>
        <dl>
            <dt>上传一卡通：<p id="nownum"></p></dt>
            <dd>
                <input type="file" id="upload" name="card" value="<?php echo ($users["card"]); ?>" onChange="showImage()"/>
            </dd>
        </dl>



    </div>
    <div class="formBar" style="position:absolute;bottom:0;right:0;width:100%;">
        <ul>
            <li>
                <div class="buttonActive">
                    <div class="buttonContent">
                        <button type="submit">保存</button>
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
</form>
<script type="text/javascript">
    var upload=document.getElementsByClassName('upload');
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

            var num=this.i+1;
            if (num<6) {
                upload[num].style.display = "inline";
            }
            //计数
            nownum.innerHTML = num+'/6';
        }
    }
</script>