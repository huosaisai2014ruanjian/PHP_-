<?php if (!defined('THINK_PATH')) exit();?>
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

   <form action="/index.php/Admin/Area/doAdd3" method="post" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);" novalidate="novalidate">
   <input type="hidden" name="id" />
   省区：
    
      <select name="provinceid" id="pro">
	    <option value="0" selected="selected">请选择</option>
        <?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
    </br>
    </br>
    市区：
      <select id="city" name="cityid">
	    <option value="0" selected="selected">请选择</option>
        <?php if(is_array($city)): $i = 0; $__LIST__ = $city;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>     
      </select>
     </br>
     </br>
    区(县)：
      <select id="area" name="areaid">
	    <option value="0" selected="selected">请选择</option>
        <?php if(is_array($area)): $i = 0; $__LIST__ = $area;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>     
      </select>
     </br>
     </br>
     商圈：<input type="input" name="name" class="required" alt="添加的区"/><span class="info">请输入添加的商圈</span></br></br>
     <div class="formBar" style="position:absolute;bottom:0;right:0;width:98%;">
         <ul>
        <li><div class="buttonActive"><div class="buttonContent"><button type="submit" name="submit">添加</button></div></div></li>
        <li>
          <div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
        </li>
      </ul>
     </div>
   
   </form>