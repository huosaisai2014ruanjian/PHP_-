<?php if (!defined('THINK_PATH')) exit();?>  <script type="text/javascript">
    document.getElementById("tab1i").onchange = function() {
      var pid = this.value;
      $.ajax({
        type: 'GET',
        url: '/index.php/Admin/Wdxt/addquestion2',
        data: {pid:pid},
        dataType: 'text',
        success: function(data) {   
          var array = new Array();
          array = data.split(';');         
          $("#tab2_question").empty();
          for(var i=0;i<array.length-1;i=i+2){
            $("#tab2_question").append("<option value='"+array[i+1]+"'>"+array[i]+"</option>");
           //alert(array[i]);
          }
        }
      });
    }
  </script>
 
    <form action="/index.php/Admin/Wdxt/doaddquestion" method="post" class="pageForm required-validate" onsubmit="return validateCallback(this, navTabAjaxDone);" novalidate="novalidate">
    <input type="hidden" name="id" />
    请选择一级分类：
      <select name="tab1id" id="tab1i">
      <option value="0">请选择</option>
        <?php if(is_array($tab1)): $i = 0; $__LIST__ = $tab1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
    </br>
    </br>
    请选择二级分类：
      <select id="tab2_question" name="tab2id">
          <option value="1">请选择</option>    
      </select>
     </br>
     </br>
     添加的问题:<input type="input" name="question" class="required" alt="添加的问题"/><span class="info">请输入添加的问题</span></br></br>
     <div class="formBar" style="position:absolute;bottom:0;right:0;width:100%;">
        <ul>
        <li><div class="buttonActive"><div class="buttonContent"><button type="submit" name="submit">添加</button></div></div></li>
        <li>
          <div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div>
        </li>
      </ul>
     </div> 
   </form>