<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript">

   function changeimage(){
      //获取减号图片

      var changes = document.getElementsByName("change");
      for(var i=0; i<changes.length;i++){
            changes[i].onclick=function(){
                  //如果当前显示的是减号图片，则换成加号图片，并隐藏子菜单
                  if(this.src.indexOf("/Public/Area/images/tree_folder3.gif")!==-1){
                        this.src = "/Public/Area/images/tree_folder4.gif";
					              var node =  this.parentNode.parentNode.getElementsByTagName("ul")[0];
						            node.style.display="none";
                  }else{
                  //如果当前显示的是加号图片，则换成减号图片，并显示子菜单
                        this.src = "/Public/Area/images/tree_folder3.gif";
                        var node =  this.parentNode.parentNode.getElementsByTagName("ul")[0].style.display="block";
                  }
            }
      }
  }
 
	  function changeimage1(which){
      //获取减号图片

                  //如果当前显示的是减号图片，则换成加号图片，并隐藏子菜单
                  if(which.src.indexOf("/Public/Area/images/tree_folder3.gif")!==-1){
                        which.src = "/Public/Area/images/tree_folder4.gif";
                        var node =  which.parentNode.parentNode.getElementsByTagName("ul")[0];
                        node.style.display="none";
                  }else{
                  //如果当前显示的是加号图片，则换成减号图片，并显示子菜单
                        which.src = "/Public/Area/images/tree_folder3.gif";
                        var node =  which.parentNode.parentNode.getElementsByTagName("ul")[0].style.display="block";
                  }

  }

function test(province){
      $.ajax({
        type: 'GET',
        url: '/index.php/Admin/Area/getarea/id/'+province,
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
            $(temp).append("<li><div onclick='city("+code[0]+");'><img src='/Public/Area/images/tree_line4.gif' valign='abvmiddle'/><img src='/Public/Area/images/tree_line2.gif' valign='abvmiddle'/><img src='/Public/Area/images/tree_folder4.gif' valign='abvmiddle' class='tag' name='change' onclick='changeimage1(this);'/>"+code[1]+"<a href='/index.php/Admin/Area/addarea1/mid/"+ code[0] + "'  target='dialog'  title='添加区' class='addpic'> + </a>  <a href='#' class='deletepic'> - </a>"+"</div><ul class='thirdMenu' id='city"+code[0]+"'></ul></li>");
          }
          }
        }
      });
    }
    function city(city){
      $.ajax({ 
        type: 'GET',
        url: '/index.php/Admin/Area/getcity/id/'+city,
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
            $(temp).append("<li><div onclick='area("+code[0]+");'><img src='/Public/Area/images/tree_line4.gif' valign='abvmiddle'/><img src='/Public/Area/images/tree_line4.gif' valign='abvmiddle'/><img src='/Public/Area/images/tree_line2.gif' valign='abvmiddle'/><img src='/Public/Area/images/tree_folder4.gif' valign='abvmiddle' class='tag' name='change' onclick='changeimage1(this);'/>"+code[1]+"</div><ul class='thirdMenu' id='area"+code[0]  +"'></ul></li>");
          }     }
        }
      });
    }
    function area(area){
      $.ajax({ 
        type: 'GET',
        url: '/index.php/Admin/Area/getcircle/id/'+area,
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
            $(temp).append('<li><div onclick="changeimage1()"><img src="/Public/Area/images/tree_line4.gif" valign="abvmiddle"/><img src="/Public/Area/images/tree_line4.gif" valign="abvmiddle"/><img src="/Public/Area/images/tree_line4.gif" valign="abvmiddle"/><img src="/Public/Area/images/tree_line2.gif" valign="abvmiddle"/>'+code[1]+"</div></li>");
          }     }
        }
      });
    }
</script>



<div class="pageContent">
  <div class="panelBar">
    <ul class="toolBar">
      
      <li><a class="add" href="/index.php/Admin/Area/addprovince" rel="areapage1" target="dialog" fresh="false"><span>添加省区</span></a></li>
      <li><a class="add" href="/index.php/Admin/Area/addcity" rel="areapage2" target="dialog" fresh="false"><span>添加市区</span></a></li>
      <li><a class="add" href="/index.php/Admin/Area/addarea" rel="areapage3" target="dialog" fresh="false"><span>添加区</span></a></li>
      <li><a class="add" href="/index.php/Admin/Area/addcircle" rel="areapage4" target="dialog" fresh="false"><span>添加商圈</span></a></li>
      <!--<li><a class="delete" target="ajaxTodo" title="确定要删除吗?"><span>删除</span></a></li>
      <li><a class="edit" target="navTab"><span>修改</span></a></li>-->
      <li class="line">line</li>
    </ul>
  </div>
  </div>

  <div class="warp">      

  <div class="warp">      

  <div class="warp">

      <div class="right">
       <div class="tree" >
        <ul id="province">
          <?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pro): $mod = ($i % 2 );++$i;?><li class="provinceli"><div onclick="test(<?php echo ($pro["id"]); ?>);"><img src="/Public/Area/images/tree_folder4.gif" valign="abvmiddle" class="tag"  name="change"/><?php echo ($pro["name"]); ?><a href="/index.php/Admin/Area/addcity/pid/<?php echo ($pro["id"]); ?>"  target="dialog"  title='添加市' class="addpic"> + </a>  <a href="#" class="deletepic"> - </a> </div>

                <ul id="<?php echo ($pro["id"]); ?>">

                </ul>
             </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        </div>
      </div>
    </div>

<link href="/Public/Area/css/content.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
changeimage();
</script>