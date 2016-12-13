<?php if (!defined('THINK_PATH')) exit();?>  <script type="text/javascript">
    function selectProv(pid, cid){
      $("#provi").val(pid);
      $.ajax({
        type: 'GET',
        url: '/index.php/Admin/Subway/addsite1',
        data: {pid:pid, cid:cid},
        dataType: 'text',
        success: function(data) {   
          var array = new Array();
          array = data.split('|');
          lineid = array[0].split('^');  
          cityid = array[1].split(';');            
          $("#cityline").empty();
          $("#lines").empty();
          for(var i=0;i<lineid.length-1;i=i+2){             
            $("#lines").append("<option value='"+lineid[i+1]+"'>"+lineid[i]+"</option>");       
          }
          for(var i=0;i<cityid.length-1;i=i+2){
            $("#cityline").append("<option value='"+cityid[i+1]+"'>"+cityid[i]+"</option>");
          }
          $("#cityline").val(cid);
        }
      });
    }
    document.getElementById("provi").onchange = function() {
      var pid = this.value;
      $.ajax({
        type: 'GET',
        url: '/index.php/Admin/Subway/addsite1',
        data: {pid:pid},
        dataType: 'text',
        success: function(data) {   
          var array = new Array();
          array = data.split('|');
          lineid = array[0].split('^');  
          cityid = array[1].split(';');            
          $("#cityline").empty();
          $("#lines").empty();
          for(var i=0;i<lineid.length-1;i=i+2){             
            $("#lines").append("<option value='"+lineid[i+1]+"'>"+lineid[i]+"</option>");       
          }
          for(var i=0;i<cityid.length-1;i=i+2){
            $("#cityline").append("<option value='"+cityid[i+1]+"'>"+cityid[i]+"</option>");
          }
        }
      });
    }

    document.getElementById("cityline").onchange = function() {
      var cid = this.value;
      $.ajax({
        type: 'GET',
        url: '/index.php/Admin/Subway/addsite2',
        data: {cid:cid},
        dataType: 'text',
        success: function(data) {   
          var array = new Array();
          array = data.split(';');         
          $("#lines").empty();
          for(var i=0;i<array.length-1;i=i+2){
            $("#lines").append("<option value='"+array[i+1]+"'>"+array[i]+"</option>");
          }
        }
      });
    }
    var pid = '<?php echo ($pid); ?>';
    var cid = '<?php echo ($cid); ?>';
    if(pid && cid){
      selectProv(pid, cid);
    }
  </script>

    <form action="/index.php/Admin/Subway/doaddsite" method="post" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);" novalidate="novalidate">
    <input type="hidden" name="id" />
    请选择所属省份：
      <select name="provinceid" id="provi">
        <?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
    </br>
    </br>
    请选择所属城市：
      <select id="cityline" name="cityid">
          <option value="1">北京市</option>    
      </select>
    </br>
    </br>
    请选择所属线路：
      <select id="lines" name="lineid">
        <?php if(is_array($line)): $i = 0; $__LIST__ = $line;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["line"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
     </br>
     </br>
     添加的站点:<input type="input" name="site" class="required" alt="添加的站点"/><span class="info">请输入添加的站点</span></br></br>
     <div class="formBar" style="position:absolute;bottom:0;right:0;width:100%;">
        <ul>
        <li><div class="buttonActive"><div class="buttonContent"><button type="submit" name="submit">添加</button></div></div></li>
        <li>
          <div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
        </li>
      </ul>
     </div> 
   </form>