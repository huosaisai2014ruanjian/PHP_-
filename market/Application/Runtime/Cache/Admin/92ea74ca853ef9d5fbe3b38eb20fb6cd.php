<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/code/index.php/Admin/Subway" method="post">
	<input type="hidden" name="pageNum" value="1"/>
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST["_order"]); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST["_sort"]); ?>"/>
</form>

    
<script type="text/javascript">
    document.getElementById("subway_pro").onchange = function() {
      var pid = this.value;  
      $.ajax({
        type: 'GET',
        url: '/code/index.php/Admin/Subway/city',
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
            $("#line").append("<li class='provinceli' id='line"+lineid[i+1]+"'><div onclick='site("+lineid[i+1]+")'><img src='/code/Public/Area/images/tree_folder4.gif' valign='abvmiddle' class='tag' name='change' onclick='changeimage(this);'/>"+lineid[i]+"<font onclick='deletelineajax("+lineid[i+1]+")' class='subclass'>&nbsp;&nbsp;-&nbsp;&nbsp;</font></div><ul id='site"+lineid[i+1]+"'></ul></li>");
          }
          for(var i=0;i<cityid.length-1;i=i+2){
            $("#city").append("<option value='"+cityid[i+1]+"'>"+cityid[i]+"</option>");              
          }
        }
      });
    }

    function changeimage(which){
      if(which.src.indexOf("/code/Public/Area/images/tree_folder3.gif")!==-1){
        which.src = "/code/Public/Area/images/tree_folder4.gif";
        var node = which.parentNode.parentNode.getElementsByTagName("ul")[0];
        node.style.display="none";
      }else{
        which.src = "/code/Public/Area/images/tree_folder3.gif";
        var node = which.parentNode.parentNode.getElementsByTagName("ul")[0];
        node.style.display="block";
      }
    }

    document.getElementById("city").onchange = function() {
      var cid = this.value;
      $.ajax({
        type: 'GET',
        url: '/code/index.php/Admin/Subway/line/cid/'+cid,
        dataType: 'text',
        success: function (data) {
          var array = new Array();
          array = data.split(';');  
          $("#line").empty();
          for(var i=0;i<array.length-1;i=i+2)
          {
            $("#line").append("<li  class='provinceli'><div onclick='site("+array[i+1]+")'><img src='/code/Public/Area/images/tree_folder4.gif' valign='abvmiddle' class='tag' name='change' onclick='changeimage(this);'/>"+array[i]+"<font onclick='deletelineajax("+array[i+1]+")' class='subclass'>&nbsp;&nbsp;-&nbsp;&nbsp;</font></div><ul id='site"+array[i+1]+"'></ul></li>");
          }          
        }
      });
    }

    function site(lid){
      $.ajax({
        type: 'GET',
        url: '/code/index.php/Admin/Subway/site/lid/'+lid,
        dataType: 'text',
        success: function (data) {
          var array = new Array();
          array = data.split(';');
          var temp = '#site'+lid;         
          $(temp).empty();
          for(var i=0;i<array.length-1;i=i+2)
          {
            $(temp).append('<li id="site'+array[i+1]+'"><img src="/code/Public/Area/images/tree_line4.gif" valign="abvmiddle"/><img src="/code/Public/Area/images/tree_line2.gif" valign="abvmiddle"/>'+ array[i]+"<font onclick='deletesiteajax("+array[i+1]+")'>&nbsp;&nbsp;&nbsp;&nbsp;-</font></li>");
          }     
        }        
      });
    }

	function deletelineajax(id){
	alertMsg.confirm("确认删除? 请选择删除或取消！", {
			okCall: function(){
				  $.ajax({
					type: 'GET',
					url: '/code/index.php/Admin/Subway/deleteline/id/'+id,
					dataType: 'text',
					success: function(data) {   
					   var fnode=  document.getElementById("line"+id).parentNode;
						
					  fnode.removeChild(document.getElementById("line"+id));
					}
				  });
			}
		});
	}
	
	function deletesiteajax(id){
	alertMsg.confirm("确认删除? 请选择删除或取消！", {
			okCall: function(){
				 $.ajax({
						type: 'GET',
						url: '/code/index.php/Admin/Subway/deletesite/id/'+id,
						dataType: 'text',
						success: function(data) {   
						   var fnode=  document.getElementById("site"+id).parentNode;
						  fnode.removeChild(document.getElementById("site"+id));
						}
				  });
			}
		});
		
     
	}
	
	function add_line_site(a){
    var href = a.href;
    var index = href.indexOf("?");
    var pid = $("#subway_pro").val();
    var cid = $("#city").val();
    if(index > 0){
      href = href.substring(0, index);
    }
    a.href = href + "?pid=" + pid + "&cid=" + cid;
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
      <li><a class="add" href="/code/index.php/Admin/Subway/addline" onclick="add_line_site(this);" target="dialog"><span>添加线路</span></a></li>    
      <li><a class="add" href="/code/index.php/Admin/Subway/addsite" onclick="add_line_site(this);" target="dialog"><span>添加站点</span></a></li>          
    </ul>
  </div>
  </div>

  <div class="warp">
    <div class="right">
      <div class="tree">
        <ul id="line">
          <?php if(is_array($line)): $i = 0; $__LIST__ = $line;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="provinceli" id="line<?php echo ($vo["id"]); ?>"><div onclick="site(<?php echo ($vo["id"]); ?>)"><img src='/code/Public/Area/images/tree_folder4.gif' valign='abvmiddle' class='tag' name='change' onclick='changeimage(this);'/><?php echo ($vo["line"]); ?><font href="javascript:;" onclick='deletelineajax(<?php echo ($vo["id"]); ?>)' class='subclass'>&nbsp;&nbsp;-&nbsp;&nbsp;</font></div><ul id="site<?php echo ($vo["id"]); ?>"></ul></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        </div>
      </div>
    </div>
<link href="/code/Public/Area/css/content.css" rel="stylesheet" type="text/css" />