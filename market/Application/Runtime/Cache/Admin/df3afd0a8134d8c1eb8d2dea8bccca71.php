<?php if (!defined('THINK_PATH')) exit();?>  <script type="text/javascript">
    function selectProv(pid, cid){
      if((typeof pid) != 'string'){
        pid = this.value;
      }else{
        $("#provi").val(pid);
      }
      $.ajax({
        type: 'GET',
        url: '/index.php/Admin/Subway/addline2',
        data: {pid:pid},
        dataType: 'text',
        success: function(data) {   
          var array = new Array();
          array = data.split(';');         
          $("#city_line").empty();
          for(var i=0;i<array.length-1;i=i+2){
            $("#city_line").append("<option value='"+array[i+1]+"'>"+array[i]+"</option>");
          }
          if((typeof cid) == 'string'){
            $("#city_line").val(cid);
          }
        }
      });
    }
    document.getElementById("provi").onchange = selectProv;
    var pid = '<?php echo ($pid); ?>';
    var cid = '<?php echo ($cid); ?>';
    if(pid && cid){
      selectProv(pid, cid);
    }
  </script>
 
    <form action="/index.php/Admin/Subway/doaddline" method="post" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);" novalidate="novalidate">
    <input type="hidden" name="id" />
    请选择所属省份：
      <select name="provinceidpid" id="provi">
        <?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
    </br>
    </br>
    请选择所属城市：
      <select id="city_line" name="cityid">
          <option value="1">北京市</option>    
      </select>
     </br>
     </br>
     添加的线路:<input type="input" name="line" class="required" alt="添加的线路"/><span class="info">请输入添加的线路</span></br></br>
     <div class="formBar" style="position:absolute;bottom:0;right:0;width:100%;">
        <ul>
        <li><div class="buttonActive"><div class="buttonContent"><button type="submit" name="submit">添加</button></div></div></li>
        <li>
          <div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
        </li>
      </ul>
     </div> 
   </form>