<?php if (!defined('THINK_PATH')) exit();?><link href="/dcxt/Public/Area/css/content.css" rel="stylesheet" type="text/css" />  
<form id="pagerForm" method="post" action="/index.php/Admin/Wdxt/wdxt/">
	<input type="hidden" name="status" value="${param.status}">
	<input type="hidden" name="keywords" value="${param.keywords}">
	<input type="hidden" name="pageNum" value="1">
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>">
	<input type="hidden" name="orderField" value="${param.orderField}">
</form>

<script type="text/javascript">
    document.getElementById("wdxt_pro").onchange = function() {
      var pid = this.value;  
      $.ajax({
        type: 'GET',
        url: '/dcxt/index.php/Admin/Wdxt/tab2',
        data: {pid:pid},
        dataType: 'text',
        success: function(data) {   
          var array = new Array();
          array = data.split('|');
          questionid = array[0].split('^');  
          tab2id = array[1].split(';');            
          $("#tab2").empty();
          $("#question").empty();
          for(var i=0;i<questionid.length-1;i=i+2){             
            $("#question").append("<li><div onclick='answer("+questionid[i+1]+")'><img src='/dcxt/Public/Area/images/tree_folder4.gif' valign='abvmiddle' class='tag' name='change' onclick='changeimage(this);'/>"+questionid[i]+"<font onclick='deletequestion("+questionid[i+1]+")'>&nbsp;&nbsp;&nbsp;&nbsp;-</font></div><ul id='answer"+questionid[i+1]+"'></ul></li>");
          }
          for(var i=0;i<tab2id.length-1;i=i+2){
            $("#tab2").append(" <option onclick='function(){alert(1);}' value='"+tab2id[i+1]+"'>"+tab2id[i]+"</option>");  

          }
        }
      });
    }

    // function changeimage(which){
    //   if(which.src.indexOf("/dcxt/Public/Area/images/tree_folder3.gif")!==-1){
    //     which.src = "/dcxt/Public/Area/images/tree_folder4.gif";
    //     var node = which.parentNode.parentNode.getElementsByTagName("ul")[0];
    //     node.style.display="none";
    //   }else{
    //     which.src = "/dcxt/Public/Area/images/tree_folder3.gif";
    //     var node = which.parentNode.parentNode.getElementsByTagName("ul")[0];
    //     node.style.display="block";
    //   }
    // }

    // document.getElementById("tab2").onchange = function() {
    //   var cid = this.value;
    //   $.ajax({
    //     type: 'GET',
    //     url: '/dcxt/index.php/Admin/Wdxt/question/cid/'+cid,
    //     dataType: 'text',
    //     success: function (data) {
    //       var array = new Array();
    //       array = data.split(';');  
    //       $("#question").empty();
    //       for(var i=0;i<array.length-1;i=i+2)
    //       {
    //         $("#question").append("<li><div onclick='answer("+array[i+1]+")'><img src='/dcxt/Public/Area/images/tree_folder4.gif' valign='abvmiddle' class='tag' name='change' onclick='changeimage(this);'/>"+array[i]+"<font onclick='deletequestion("+array[i+1]+")'>&nbsp;&nbsp;&nbsp;&nbsp;-</font></div><ul id='answer"+array[i+1]+"'></ul></li>");
    //       }          
    //     }
    //   });
    // }

    // function answer(lid){
    //   $.ajax({
    //     type: 'GET',
    //     url: '/dcxt/index.php/Admin/Wdxt/answer/lid/'+lid,
    //     dataType: 'text',
    //     success: function (data) {
    //       var array = new Array();
    //       array = data.split(';');
    //       var temp = '#answer'+lid;         
    //       $(temp).empty();
    //       for(var i=0;i<array.length-1;i=i+2)
    //       {
    //         $(temp).append('<li><img src="/dcxt/Public/Area/images/tree_line4.gif" valign="abvmiddle"/><img src="/dcxt/Public/Area/images/tree_line2.gif" valign="abvmiddle"/>'+ array[i]+"<font onclick='deleteanswer("+array[i+1]+")'>&nbsp;&nbsp;&nbsp;&nbsp;-</font></li>");
    //       }     
    //     }        
    //   });
    // }

    // function deletequestion(id){
    //   $.ajax({
    //     type: 'GET',
    //     url: '/dcxt/index.php/Admin/Wdxt/deletequestion/id/'+id,
    //     dataType: 'text'
    //   });
    // }
    // function deleteanswer(id){
    //   $.ajax({
    //     type: 'GET',
    //     url: '/dcxt/index.php/Admin/Wdxt/deleteanswer/id/'+id,
    //     dataType: 'text'
    //   });
    // }
</script>








<div class="pageContent">
  <div class="panelBar" style="height:50px;">
<form method="post" >
  <div class="searchBar">
    &nbsp;&nbsp;请选择一级分类：
         <select id="wdxt_pro">
         <option value="0">请选择</option>
          <?php if(is_array($tab1)): $i = 0; $__LIST__ = $tab1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
       </select>      
        &nbsp;&nbsp;
        请选择二级分类：
        
        <select id="tab2">          
              <option value="aa">请选择</option>

        </select>
    <div class="subBar">
      <ul>
        <li>
        <a href="#" class="button"  target='navTab' class='add button' name='submits' id="submit"><span name='button'>搜索</span></a>
        </li>
      </ul>
    </div>
  </div>
</form>
  </div>
</div>

<div class="pageContent">
  <div class="panelBar">
    <ul class="toolBar">
        <li><a class="add" href="/dcxt/index.php/Admin/Wdxt/addquestion" target="dialog"><span>添加问题</span></a></li>   
        <li><a class="delete" href="/dcxt/index.php/Admin/Wdxt/deletequestion?id={sid_user}" target="ajaxTodo"  title="确定要删除吗？" warn="请选择一个问题"><span>删除</span></a></li>
	    <li><a class="edit" href="/dcxt/index.php/Admin/Wdxt/editquestion?id={sid_user}" target="dialog" warn="请选择一个问题"><span>修改</span></a></li>	
	    <li><a class="edit" href="/dcxt/index.php/Admin/Wdxt/answerquestion?id={sid_user}" target="navTab" warn="请选择一个问题"><span>回答</span></a></li>	
	    <li><a class="edit" href="/dcxt/index.php/Admin/Wdxt/answerlist?id={sid_user}" target="navTab" warn="请选择一个问题"><span>答案列表</span></a></li>
        <!--<li><a class="add" href="/dcxt/index.php/Admin/Wdxt/addanswer" target="dialog"><span>添加站点</span></a></li>  -->         
    </ul>
  </div>
  </div>

 <!--  <div class="warp">
    <div class="right">
      <div class="tree">
        <ul id="question">

        </ul>
        </div>
      </div>
    </div> -->

	<table class="list" width="98%" targetType="navTab" asc="asc" desc="desc" layoutH="95">
		<thead>
			<tr>
				<th>序号</th>
				<th>问题</th>
				<th>添加用户类型</th>
			</tr>	
		</thead>
		<tbody>
          <?php if(is_array($question)): $i = 0; $__LIST__ = $question;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="sid_user" rel="<?php echo ($vo["id"]); ?>">
	              <td><?php echo ($vo["id"]); ?></td>
	              <td><?php echo ($vo["question"]); ?></td>
	              <td><?php echo ($vo["usertype"]); ?></td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
				<option value="20">20</option>
				<option value="2">2</option>
				<option value="50">50</option>
				<option value="100">100</option>
				<option value="200">200</option>
			</select>
			<span>条，共<?php echo ($totalCount); ?>条</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="20" currentPage="<?php echo ($currentPage); ?>"></div>

	</div>
<script>
	var submit=document.getElementsByName('submits')[0];
	var sousuo=document.getElementById('tab2');

	submit.onmouseover=function(){
		
		
  data="/dcxt/index.php/Admin/Wdxt/wdxtsearch?condition="+sousuo.value;
  
  this.href=data;
	}
</script>