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
<form action="/marketsai/index.php/Admin/Goods/storephoto" method="post" enctype="multipart/form-data" class="pageForm required-validate">
    <div class="pageFormContent nowrap" layoutH="37">
         <dl>
            <dt>名称：</dt>
            <dd>
            <input type="text" name="name" class="required" maxlength="30" alt="添加的商品名称"/>
            </dd>
        </dl>
         <dl>
            <dt>价格：</dt>
            <dd>
            <input type="text" name="price" class="required" maxlength="8" />
<!--                 <select name="typeid" id="typeid">
                    <option value="0" selected="selected">请选择</option>
                    <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><option value="<?php echo ($type["id"]); ?>"><?php echo ($type["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select> -->
            </dd>
        </dl>        
        <dl>
            <dt>图片：<p id="nownum">0/6</p></dt>
            <dd>
            <input type="file" class="upload" name="photo1" id="upload1" />
            <input type="file" class="upload" name="photo2"  />
            <input type="file" class="upload" name="photo3"  />
            <input type="file" class="upload" name="photo4"  />
            <input type="file" class="upload" name="photo5"  />
            <input type="file" class="upload" name="photo6"  />  
            </dd>
        </dl>
        <dl>
            <dt>描述：</dt>
            <dd>
            <input type="text" name="description" class="required" maxlength="500" />
            </dd>
        </dl>
        <dl>
            <dt>是否全新：</dt>
            <dd>
                <input type="radio" name="degree" value="是">是
                <input type="radio" name="degree" value="否">否
            </dd>
        </dl>
        <dl>
            <dt>所属二级分类：</dt>
            <dd>
                <select name="category_id" id="category_id">
                    <option value="0" selected="selected">请选择</option>
                    <?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?><option value="<?php echo ($category["id"]); ?>"><?php echo ($category["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </dd>
        </dl> 
        <dl>
            <dt>卖家id：</dt>
            <dd>
                <select name="seller_id" id="seller_id">
                    <option value="0" selected="selected">请选择</option>
                    <?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$users): $mod = ($i % 2 );++$i;?><option value="<?php echo ($users["id"]); ?>"><?php echo ($users["id"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
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
var buttonContent=document.getElementsByClassName('buttonContent');

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
    buttonContent[0].onclick=function () {
                
        if (upload[0].value=="") {
            alert("请上传商品图片！");return false;
        }
    }

</script>