<?php if (!defined('THINK_PATH')) exit();?><link href="/Public/Area/css/content.css" rel="stylesheet" type="text/css" />      
<script type="text/javascript">
    document.getElementById("subway_pro").onchange = function() {
      var pid = this.value;  
      $.ajax({
        type: 'GET',
        url: '/index.php/Admin/Subway/city',
        data: {pid:pid},
        dataType: 'text',
        success: function(data) {   
          var array = new Array();
          array = data.split('|');
          lineid = array[0].split('^');  
          cityid = array[1].split(';');            
          $("#city").empty();
          $("#line").empty();
          for(var i=0;i<lineid.length-1;i=i+2){             
            $("#line").append("<li><div onclick='site("+lineid[i+1]+")'><img src='/Public/Area/images/tree_folder4.gif' valign='abvmiddle' class='tag' name='change' onclick='changeimage(this);'/>"+lineid[i]+"<font onclick='deleteline("+lineid[i+1]+")' class='subclass'>&nbsp;&nbsp;-&nbsp;&nbsp;</font></div><ul id='site"+lineid[i+1]+"'></ul></li>");
          }
          for(var i=0;i<cityid.length-1;i=i+2){
            $("#city").append("<option value='"+cityid[i+1]+"'>"+cityid[i]+"</option>");              
          }
        }
      });
    }

    function changeimage(which){
      if(which.src.indexOf("/Public/Area/images/tree_folder3.gif")!==-1){
        which.src = "/Public/Area/images/tree_folder4.gif";
        var node = which.parentNode.parentNode.getElementsByTagName("ul")[0];
        node.style.display="none";
      }else{
        which.src = "/Public/Area/images/tree_folder3.gif";
        var node = which.parentNode.parentNode.getElementsByTagName("ul")[0];
        node.style.display="block";
      }
    }

    document.getElementById("city").onchange = function() {
      var cid = this.value;
      $.ajax({
        type: 'GET',
        url: '/index.php/Admin/Subway/line/cid/'+cid,
        dataType: 'text',
        success: function (data) {
          var array = new Array();
          array = data.split(';');  
          $("#line").empty();
          for(var i=0;i<array.length-1;i=i+2)
          {
            $("#line").append("<li><div onclick='site("+array[i+1]+")'><img src='/Public/Area/images/tree_folder4.gif' valign='abvmiddle' class='tag' name='change' onclick='changeimage(this);'/>"+array[i]+"<font onclick='deleteline("+array[i+1]+")' class='subclass'>&nbsp;&nbsp;-&nbsp;&nbsp;</font></div><ul id='site"+array[i+1]+"'></ul></li>");
          }          
        }
      });
    }

    function site(lid){
      $.ajax({
        type: 'GET',
        url: '/index.php/Admin/Subway/site/lid/'+lid,
        dataType: 'text',
        success: function (data) {
          var array = new Array();
          array = data.split(';');
          var temp = '#site'+lid;         
          $(temp).empty();
          for(var i=0;i<array.length-1;i=i+2)
          {
            $(temp).append('<li><img src="/Public/Area/images/tree_line4.gif" valign="abvmiddle"/><img src="/Public/Area/images/tree_line2.gif" valign="abvmiddle"/>'+ array[i]+"<font onclick='deletesite("+array[i+1]+")'>&nbsp;&nbsp;&nbsp;&nbsp;-</font></li>");
          }     
        }        
      });
    }

    function deleteline(id){
      $.ajax({
        type: 'GET',
        url: '/index.php/Admin/Subway/deleteline/id/'+id,
        dataType: 'text'
      });
    }
    function deletesite(id){
      $.ajax({
        type: 'GET',
        url: '/index.php/Admin/Subway/deletesite/id/'+id,
        dataType: 'text'
      });
    }
</script>

<div class="pageContent">
  <div class="panelBar">
 
      &nbsp;&nbsp;请选择所属省份：
      <select id="subway_pro">
          <?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>      
      &nbsp;&nbsp;
      请选择所属城市：
      <select id="city">          
            <option value="1">北京市</option>
      </select>
 
  </div>
</div>

<div class="pageContent">
  <div class="panelBar">
    <ul class="toolBar">
      <li><a class="add" href="/index.php/Admin/Subway/addline" target="dialog"><span>添加线路</span></a></li>    
      <li><a class="add" href="/index.php/Admin/Subway/addsite" target="dialog"><span>添加站点</span></a></li>          
    </ul>
  </div>
  </div>

  <div class="warp">
    <div class="right">
      <div class="tree">
        <ul id="line">
          <?php if(is_array($line)): $i = 0; $__LIST__ = $line;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><div onclick="site(<?php echo ($vo["id"]); ?>)"><img src='/Public/Area/images/tree_folder4.gif' valign='abvmiddle' class='tag' name='change' onclick='changeimage(this);'/><?php echo ($vo["line"]); ?><font onclick='deleteline(<?php echo ($vo["id"]); ?>)' class='subclass'>&nbsp;&nbsp;-&nbsp;&nbsp;</font></div><ul id="site<?php echo ($vo["id"]); ?>"></ul></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        </div>
      </div>
    </div>