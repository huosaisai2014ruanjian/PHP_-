<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/demo/index.php/Admin/Category" method="post">
	<input type="hidden" name="pageNum" value="1"/>
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST["_order"]); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST["_sort"]); ?>"/>
    <input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>">
</form>

<script type="text/javascript">

   function changeimage(){
      //获取减号图片

      var changes = document.getElementsByName("change");
      for(var i=0; i<changes.length;i++){
            changes[i].onclick=function(){
                  //如果当前显示的是减号图片，则换成加号图片，并隐藏子菜单
                  if(this.src.indexOf("/demo/Public/Area/images/tree_folder3.gif")!==-1){
                        this.src = "/demo/Public/Area/images/tree_folder4.gif";
                        var node =  this.parentNode.parentNode.getElementsByTagName("ul")[0];
                        node.style.display="none";
                  }else{
                  //如果当前显示的是加号图片，则换成减号图片，并显示子菜单
                        this.src = "/demo/Public/Area/images/tree_folder3.gif";
                        var node =  this.parentNode.parentNode.getElementsByTagName("ul")[0].style.display="block";
                  }
            }
      }
  }
  changeimage();
    function changeimage1(which){
      //获取减号图片

                  //如果当前显示的是减号图片，则换成加号图片，并隐藏子菜单
                  if(which.src.indexOf("/demo/Public/Area/images/tree_folder3.gif")!==-1){
                        which.src = "/demo/Public/Area/images/tree_folder4.gif";
                        var node =  which.parentNode.parentNode.getElementsByTagName("ul")[0];
                        node.style.display="none";
                  }else{
                  //如果当前显示的是加号图片，则换成减号图片，并显示子菜单
                        which.src = "/demo/Public/Area/images/tree_folder3.gif";
                        var node =  which.parentNode.parentNode.getElementsByTagName("ul")[0].style.display="block";
                  }

  }

function test(tab){
      $.ajax({
        type: 'GET',
        url: '/demo/index.php/Admin/Category/gettab/id/'+tab,
        dataType: 'text',
        success: function (data) {
          var array= new Array();
          array=data.split(';');
          var temp='#'+tab;
          if(document.getElementById(tab).innerHTML.trim()==""){
          for(var i=0;i<array.length-1;i++)
          {
            var code= new Array();
            code= array[i].split('^');
            $(temp).append("<li><div onclick='city("+code[0]+");'><img src='/demo/Public/Area/images/tree_line4.gif' valign='abvmiddle'/><img src='/demo/Public/Area/images/tree_line2.gif' valign='abvmiddle'/>"+code[1]+"<font onclick='deletecategory("+code[0]+")' target='dialog' >&nbsp;&nbsp;-</font>"+"</div></li>");
          }
          }
        }
      });
    }

    function deletecat(id){
     testConfirmMsg('/demo/index.php/Admin/Category/deletecat/id/'+id,id);
    }
    function deletecategory(id){
    testConfirmMsg('/demo/index.php/Admin/Category/deletecategory/id/'+id,id);
    }
  function testConfirmMsg(url, data){
    alertMsg.confirm("确认删除? 请选择删除或取消！", {
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
      
      <li><a class="add" href="/demo/index.php/Admin/Category/addyiji" rel="areapage1" target="dialog" fresh="false"><span>添加一级</span></a></li>
      <li><a class="add" href="/demo/index.php/Admin/Category/adderji" rel="areapage2" target="dialog" fresh="false"><span>添加二级</span></a></li>
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

        <ul id="cat">
          <?php if(is_array($cat)): $i = 0; $__LIST__ = $cat;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab): $mod = ($i % 2 );++$i;?><li class="provinceli"><div onclick="test(<?php echo ($tab["id"]); ?>);"><img src="/demo/Public/Area/images/tree_folder4.gif" valign="abvmiddle" class="tag"  name="change"/><?php echo ($tab["name"]); ?><a href="/demo/index.php/Admin/Category/adderji/pid/<?php echo ($tab["id"]); ?>"  target="dialog"  title='添加二级标签' class="addpic"> + </a> <font onclick='deletecat(<?php echo ($tab["id"]); ?>)' target='dialog'>&nbsp;&nbsp;-</font> </div>

                <ul id="<?php echo ($tab["id"]); ?>">

                </ul>
             </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        </div>
      </div>
    </div>

<link href="/demo/Public/Area/css/content.css" rel="stylesheet" type="text/css" />