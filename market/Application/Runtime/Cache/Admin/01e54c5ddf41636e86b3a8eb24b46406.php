<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/code/index.php/Admin/Area" method="post">
	<input type="hidden" name="pageNum" value="1"/>
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST["_order"]); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST["_sort"]); ?>"/>
</form>


<script type="text/javascript">
  var op = new Object();
  op.close = undefined;
  op.drawable = true;
  op.fresh = true;
  op.mask = false;
  op.max = false;
  op.maxable = true;
  op.minable = true;
  op.param = "";
  op.resizable = true;

  function showDialog(url, id, title){
    $.pdialog.open(url, id, title, op);
  }

  function changeimage(){
      //获取减号图片
      var changes = document.getElementsByName("change");
      for(var i=0; i<changes.length;i++){
            changes[i].onclick=function(){
                  //如果当前显示的是减号图片，则换成加号图片，并隐藏子菜单
                  if(this.src.indexOf("/code/Public/Area/images/tree_folder3.gif")!==-1){
                        this.src = "/code/Public/Area/images/tree_folder4.gif";
					              var node =  this.parentNode.parentNode.getElementsByTagName("ul")[0];
						            node.style.display="none";
                  }else{
                  //如果当前显示的是加号图片，则换成减号图片，并显示子菜单
                        this.src = "/code/Public/Area/images/tree_folder3.gif";
                        var node =  this.parentNode.parentNode.getElementsByTagName("ul")[0].style.display="block";
                  }
            }
      }
  }
  changeimage();
	  function changeimage1(which){
      //获取减号图片

                  //如果当前显示的是减号图片，则换成加号图片，并隐藏子菜单
                  if(which.src.indexOf("/code/Public/Area/images/tree_folder3.gif")!==-1){
                        which.src = "/code/Public/Area/images/tree_folder4.gif";
                        var node =  which.parentNode.parentNode.getElementsByTagName("ul")[0];
                        node.style.display="none";
                  }else{
                  //如果当前显示的是加号图片，则换成减号图片，并显示子菜单
                        which.src = "/code/Public/Area/images/tree_folder3.gif";
                        var node =  which.parentNode.parentNode.getElementsByTagName("ul")[0].style.display="block";
                  }

    }

    function GetCity(province){
      $.ajax({
        type: 'GET',
        url: '/code/index.php/Admin/Area/getarea/id/'+province,
        dataType: 'text',
        success: function (data) {
          var array= new Array();
          array=data.split(';');
          var temp='#'+province;
          if(document.getElementById(province).innerHTML.trim()==""){
          for(var i=0;i<array.length-1;i++)
          {
            var code= new Array();
            code= array[i].split('^');
            $(temp).append("<li><div onclick='GetArea("+code[0]+");'><img src='/code/Public/Area/images/tree_line4.gif' valign='abvmiddle'/><img src='/code/Public/Area/images/tree_line2.gif' valign='abvmiddle'/><img src='/code/Public/Area/images/tree_folder4.gif' valign='abvmiddle' class='tag' name='change' onclick='changeimage1(this);'/>"+code[1]+"<a href=\"javascript:showDialog('/code/index.php/Admin/Area/addarea/mid/"+ code[0] + "', 'D_"+ code[0] + "', '添加区');\" class='addpic'> + </a>"+"<font onclick='deletecity("+code[0]+")' target='ajaxTodo'>&nbsp;&nbsp;-</font>"+"</div><ul class='thirdMenu' id='city"+code[0]+"'></ul></li>");
          }
          }
        }
      });
    }
    function GetArea(city){
      $.ajax({ 
        type: 'GET',
        url: '/code/index.php/Admin/Area/getcity/id/'+city,
        dataType: 'text',
        success: function (data) {
          //alert(data);
          var array= new Array();
          array=data.split(';');
          var temp='#city'+city;
          if(document.getElementById('city'+city).innerHTML.trim()==""){
          for(var i=0;i<array.length-1;i++)
          {
		        var code= new Array();
            code= array[i].split('^');
            $(temp).append("<li><div onclick='GetCircle("+code[0]+");'><img src='/code/Public/Area/images/tree_line4.gif' valign='abvmiddle'/><img src='/code/Public/Area/images/tree_line4.gif' valign='abvmiddle'/><img src='/code/Public/Area/images/tree_line2.gif' valign='abvmiddle'/><img src='/code/Public/Area/images/tree_folder4.gif' valign='abvmiddle' class='tag' name='change' onclick='changeimage1(this);'/>"+code[1]+"<a href=\"javascript:showDialog('/code/index.php/Admin/Area/addcircle/mid/"+ code[0] + "', 'D_"+ code[0] + "', '添加商圈');\" class='addpic'> + </a>"+"<font onclick='deletearea("+code[0]+")' target='ajaxTodo'>&nbsp;&nbsp;-</font>"+"</div><ul class='thirdMenu' id='area"+code[0]  +"'></ul></li>");
          }     }
        }
      });
    }
    function GetCircle(area){
      $.ajax({ 
        type: 'GET',
        url: '/code/index.php/Admin/Area/getcircle/id/'+area,
        dataType: 'text',
        success: function (data) {
          //alert(data);
          var array= new Array();
          array=data.split(';');
          var temp='#area'+area;
          if(document.getElementById('area'+area).innerHTML.trim()==""){
            for(var i=0;i<array.length-1;i++)
            {
              var code= new Array();
              code= array[i].split('^');
              $(temp).append('<li><div onclick="changeimage1()"><img src="/code/Public/Area/images/tree_line4.gif" valign="abvmiddle"/><img src="/code/Public/Area/images/tree_line4.gif" valign="abvmiddle"/><img src="/code/Public/Area/images/tree_line4.gif" valign="abvmiddle"/><img src="/code/Public/Area/images/tree_line2.gif" valign="abvmiddle"/>'+code[1]+"<font onclick='deletecircle("+code[0]+")' target='dialog' >&nbsp;&nbsp;-</font>"+"</div></li>");
            }     
          }
        }
      });
    }

    function deletecircle(id){
      testConfirmMsg('/code/index.php/Admin/Area/deletecircle/id/'+id,id);
    }
    function deletearea(id){
	     testConfirmMsg('/code/index.php/Admin/Area/deletearea/id/'+id,id);
    }
    function deletecity(id){
	   testConfirmMsg('/code/index.php/Admin/Area/deletecity/id/'+id,id);
    }
    function deleteprovince(id){
	   testConfirmMsg('/code/index.php/Admin/Area/deleteprovince/id/'+id,id);
    }
	
	function testConfirmMsg(url, data){
		alertMsg.confirm("确认删除? 请选择保存或取消！", {
			okCall: function(){
				$.post(url, data, DWZ.ajaxDone, "json");
				 navTabPageBreak();  
			}
		});
	}

</script>

<div class="pageContent">
  <div class="panelBar">
    <ul class="toolBar">
      
      <li><a class="add" href="/code/index.php/Admin/Area/addprovince" rel="areapage1" target="dialog" fresh="false"><span>添加省区</span></a></li>
      <li><a class="add" href="/code/index.php/Admin/Area/addcity" rel="areapage2" target="dialog" fresh="false"><span>添加市区</span></a></li>
      <li><a class="add" href="/code/index.php/Admin/Area/addarea" rel="areapage3" target="dialog" fresh="false"><span>添加区</span></a></li>
      <li><a class="add" href="/code/index.php/Admin/Area/addcircle" rel="areapage4" target="dialog" fresh="false"><span>添加商圈</span></a></li>
      <!--<li><a class="delete" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
      <li><a class="edit" target="navTab"><span>修改</span></a></li>-->
    </ul>
  </div>
  </div>


  <div class="warp">

      <div class="right">
       <div class="tree" >

        <ul id="province">
          <?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pro): $mod = ($i % 2 );++$i;?><li class="provinceli"><div onclick="GetCity(<?php echo ($pro["id"]); ?>);"><img src="/code/Public/Area/images/tree_folder4.gif" valign="abvmiddle" class="tag"  name="change"/><?php echo ($pro["name"]); ?><a href="/code/index.php/Admin/Area/addcity/pid/<?php echo ($pro["id"]); ?>"  target="dialog"  title='添加市' class="addpic"> + </a> <font href="javascript:;" onclick='deleteprovince(<?php echo ($pro["id"]); ?>)'   >&nbsp;&nbsp;-&nbsp;&nbsp;</font> </div>

                <ul id="<?php echo ($pro["id"]); ?>">
                </ul>
             </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        </div>
 

<link href="/code/Public/Area/css/content.css" rel="stylesheet" type="text/css" />