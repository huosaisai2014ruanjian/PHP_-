<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript">  
    window.UEDITOR_HOME_URL = "/Public/dwz/Ueditor/";
</script>
<script src="/Public/jquery.js" type="text/javascript"></script> 
<script src="/Public/chosen/public/chosen.jquery.js" type="text/javascript"></script>
 <link rel="stylesheet" href="/Public/chosen/public/chosen.css">
<script type="text/javascript" src="/Public/dwz/Ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/dwz/Ueditor/ueditor.all.min.js"></script>

  <script type="text/javascript">
    document.getElementById("pro").onchange = function() {
      var pid = this.value;
      
      $.ajax({
        type: 'GET',
        url: '/index.php/Admin/Area/addarea1',
        data: {pid:pid},
        dataType: 'text',
        success: function(data) {   
          var array = new Array();
          array = data.split(';');         
          $("#city").empty();
           $("#city").append("<option selected='selected' value='0'>请选择</option>");
          for(var i=0;i<array.length-1;i=i+2){
             
            $("#city").append("<option value='"+array[i+1]+"'>"+array[i]+"</option>");
          }
        }
      });
    }

    document.getElementById("city").onchange = function citychange() {
      var mid = this.value;
      
      $.ajax({
        type: 'GET',
        url: '/index.php/Admin/Area/addcircle1',
        data: {mid:mid},
        dataType: 'text',
        success: function(data) {   
          var array = new Array();
          array = data.split(';');         
          $("#area").empty();
            $("#area").append("<option selected='selected' value='0'>请选择</option>");
          for(var i=0;i<array.length-1;i=i+2){
            $("#area").append("<option value='"+array[i+1]+"'>"+array[i]+"</option>");
                      
          }
        }
      });
    }
    var pid = '<?php echo ($pid); ?>';
    var cid = '<?php echo ($cid); ?>';
    var aid = '<?php echo ($aid); ?>';
    if(pid && cid && aid){
      $("#pro").val(pid);
      $("#city").val(cid);
      $("#area").val(aid);
    }
  </script>
 
    <form action="/index.php/Admin/Fygl/doadd" method="post" enctype="multipart/form-data"  class="pageForm required-validate" onsubmit="beforeSubmit();return validateCallback(this, navTabAjaxDone);" novalidate="novalidate" >
    <div class="pageFormContent" layouth="90">
        <input type="hidden" name="id"/> 
         <input type="hidden" name="tag" id="tag">
        <dl>
            <dt>省区:</dt>
            <dd>
                <select name="provinceid" id="pro">
                    <option value="0" selected="selected">请选择</option>
                    <?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </dd>
        </dl>
        <dl>
            <dt>市区:</dt>
            <dd>
                <select id="city" name="cityid">
                   <option value="0" selected="selected">请选择</option>
                   <?php if(is_array($city)): $i = 0; $__LIST__ = $city;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>    
                 </select>
            </dd>
        </dl>
        <dl>
            <dt>区县:</dt>
            <dd>
                <select id="area" name="areaid">
                    <option value="0" selected="selected">请选择</option>
                    <?php if(is_array($area)): $i = 0; $__LIST__ = $area;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>     
                  </select>
            </dd>
        </dl>
        <dl>
            <dt>项目名称:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>项目地址:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>地图标注:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>开发主体:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>设计单位:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>规划面积:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
               <dl>
            <dt>建筑面积:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>施工阶段:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>项目介绍:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>招商电话:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>姓名:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>手机号:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>土地性质:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>产权年限:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
               <dl>
            <dt>证照信息:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>容积率:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>绿化率:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>楼栋数量:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>电梯品牌:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>可否注册:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>入驻企业:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>项目动态:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>招商地址:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
               <dl>
            <dt>产业方向:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>行业类别:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>物业公司:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>物业费:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>供水:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>供电:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>供暖:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>燃气:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>安保:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
               <dl>
            <dt>消防:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>停车位:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>机场:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>铁路:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>港口:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>公路:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>地铁:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>公交:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        
        <dl>
            <dt>商业:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
                <span class="info"></span>
            </dd>
        </dl>
        <dl>
            <dt>餐饮:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
            </dd>
        </dl>
        <dl>
            <dt>咖啡厅:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
            </dd>
        </dl>
        <dl>
            <dt>教育:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
            </dd>
        </dl>
        <dl>
            <dt>金融:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
            </dd>
        </dl>
        <dl>
            <dt>医疗:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
            </dd>
        </dl>
        <dl>
            <dt>酒店:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
            </dd>
        </dl>
        <dl>
            <dt>会展:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
            </dd>
        </dl>
        <dl>
            <dt>物流:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
            </dd>
        </dl>
        <dl>
            <dt>康体:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
            </dd>
        </dl>
        <dl>
            <dt>旅游:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
            </dd>
        </dl>
        <dl>
            <dt>政府机构:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
            </dd>
        </dl>
        <dl>
            <dt>企业服务:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
            </dd>
        </dl>
        <dl>
            <dt>规划图:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
            </dd>
        </dl>
        <dl>
            <dt>交通图:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
            </dd>
        </dl>
        <dl>
            <dt>效果图:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
            </dd>
        </dl>
        <dl>
            <dt>实景图:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
            </dd>
        </dl>
        <dl>
            <dt>楼作图:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
            </dd>
        </dl>
        <dl>
            <dt>广告片、招商中心:</dt>
            <dd>
                <input type="text" name="title" class="required"/>
            </dd>
        </dl>
        
        <dl>
            <dt>详情:</dt>
            <dd>
            <!--<input type="hidden" name="content" id="content" value=""/>
            <script id="uecontainer" name="uecontainer" type="text/plain"></script>-->
            </dd>
        </dl>
		
		  <dl>
            <dt>标签:</dt>
            <dd> 
             <select class="chzn-select" data-placeholder="请填写标签" style="width:350px;" tabindex="1" multiple="multiple" > 
				<option value=""></option> 
				<?php if(is_array($s)): $i = 0; $__LIST__ = $s;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$s): $mod = ($i % 2 );++$i;?><option value="<?php echo ($s["name"]); ?>"><?php echo ($s["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select> 
            </dd>
        </dl>
    </div>
    <div class="formBar">
        <ul>
            <li>
                <div class="buttonActive"><div class="buttonContent"><button type="submit">添加</button></div></div>
            </li>
        </ul>
    </div>
    </form>

<script type="text/javascript">  
   $(".chzn-select").chosen();
   $(".chzn-select").chosen().change(function(){

      $("#tag").val( $(".chzn-select").val());
      // alert($("#tag").val());
});
    // jQuery("#obj_branch_id").trigger("liszt:updated");
    var ue = UE.getEditor('uecontainer');
    function beforeSubmit() {
        var html = ue.getContent();
        $("#content").val(html);
    }
</script>