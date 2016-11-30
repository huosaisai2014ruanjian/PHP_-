<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/index.php/Admin/Gltag" method="post">
	<input type="hidden" name="pageNum" value="1"/>
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST["_order"]); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST["_sort"]); ?>"/>
</form>


<script type="text/javascript">

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
  changeimage();
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

function test(tab){
      $.ajax({
        type: 'GET',
        url: '/index.php/Admin/Gltag/gettab/id/'+tab,
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
            $(temp).append("<li><div onclick='city("+code[0]+");'><img src='/Public/Area/images/tree_line4.gif' valign='abvmiddle'/><img src='/Public/Area/images/tree_line2.gif' valign='abvmiddle'/>"+code[1]+"  <a  href='javascript:;' onclick='deletenode("+code[0]+");' class='deletepic'> - </a> </ul></li>");
          }
          }
        }
      });
    }
	
	 function deleteparentnode(id){
		testConfirmMsg('/index.php/Admin/Gltag/deleteparentNode/id/'+id,id);
    }
	
	function deletenode(id){
		testConfirmMsg('/index.php/Admin/Gltag/deleteNode/id/'+id,id);
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
      <li><a class="add" href="/index.php/Admin/Gltag/addyiji" rel="areapage1" target="dialog" fresh="false"><span>添加一级关联标签</span></a></li>
      <li><a class="add" href="/index.php/Admin/Gltag/adderji" rel="areapage2" target="dialog" fresh="false"><span>添加二级关联标签</span></a></li>
    </ul>
  </div>
  </div>
   
  <div class="warp">
      <div class="right">
       <div class="tree" >
        <ul id="tab1">
          <?php if(is_array($tab1)): $i = 0; $__LIST__ = $tab1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tab): $mod = ($i % 2 );++$i;?><li class="provinceli"><div onclick="test(<?php echo ($tab["id"]); ?>);"><img src="/Public/Area/images/tree_folder4.gif" valign="abvmiddle" class="tag"  name="change"/><?php echo ($tab["name"]); ?><a href="/index.php/Admin/Gltag/adderji/pid/<?php echo ($tab["id"]); ?>"  target="dialog"  title='添加二级标签' class="addpic"> + </a>  <a  href="javascript:;" onclick='deleteparentnode(<?php echo ($tab["id"]); ?>);' class="deletepic"> - </a> </div>
                <ul id="<?php echo ($tab["id"]); ?>">
                </ul>
             </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        </div>
      

<link href="/Public/Area/css/content.css" rel="stylesheet" type="text/css" />