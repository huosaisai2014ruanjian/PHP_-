<?php if (!defined('THINK_PATH')) exit();?> <link rel="stylesheet" type="text/css" href="/market/Public/menu/css/common.css"/>
 <link rel="stylesheet" type="text/css" href="/market/Public/menu/css/main.css"/>
 <form id="pagerForm" method="post" action="/market/index.php/Home/Menu/manage">
    <input type="hidden" name="status" value="${param.status}">
    <input type="hidden" name="keywords" value="${param.keywords}">
    <input type="hidden" name="pageNum" value="1">
    <input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>">
    <input type="hidden" name="orderField" value="${param.orderField}">
</form>
<div class="pageContent j-resizeGrid">
    <div class="panelBar">
        <ul class="toolBar">
            <li class=""><a class="add" href="/market/index.php/Home/Menu/view" target="navTab"><span>显示</span></a></li>
        </ul>
    </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>自定义菜单</h1><span>如想添加主菜单，请先创建好主菜单再创建子菜单</span>
            </div>
           <div class="result-content">
    <button><a href="#" class="addM">添加主菜单</a></button>
    <p style="height:20px"></p>
    <ul class="sys-info-list">
        <form action="/market/index.php/Home/Menu/create" method="post" id="only">
        <?php $ii=1;?>
        <?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="mainM">
            <input type="text" value="<?php echo ($vo->name); ?>" name="name"/>
            <span>
                <?php $type=$vo->type; ?>
                <?php if($type=='click'): ?><input type="radio" value="click" name="type<?php echo ($ii); ?>" checked/>点击
                <input type="radio" value="view" name="type<?php echo ($ii); ?>" /> 链接
                <?php else: ?>
                    <input type="radio" value="click" name="type<?php echo ($ii); ?>" /> 点击
                    <input type="radio" value="view" name="type<?php echo ($ii); ?>" checked="checked" /> 链接<?php endif; ?>
            </span>
            <input type="text" name="value" value="<?php echo ($vo->key); echo ($vo->url); ?>"/>&nbsp;<a href="#" class="add"><i class="icon-font"></i></a>&nbsp;<a href="#" class="delete"><i class="icon-font"></i></a>
            <ul style="margin-left:2em;">

                <?php $sub_button = $vo->sub_button;$j=1;?>
                <?php if(is_array($sub_button)): $i = 0; $__LIST__ = $sub_button;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub_vo): $mod = ($i % 2 );++$i;?><li>
                <input type="text" value="<?php echo ($sub_vo->name); ?>" name="name"/><span>
                <?php $type=$sub_vo->type; ?>
                <?php if($type=='click'): ?><input type="radio" value="click" name="<?php echo ($sub_vo->name); ?>" checked/> 点击
                <input type="radio" value="view" name="<?php echo ($sub_vo->name); ?>" /> 链接
                <?php else: ?>
                    <input type="radio" value="click" name="<?php echo ($sub_vo->name); ?>" />点击 
                    <input type="radio" value="view" name="<?php echo ($sub_vo->name); ?>" checked="checked" /> 链接<?php endif; ?>
            </span>
            <input type="text" name="value" value="<?php echo ($sub_vo->key); echo ($sub_vo->url); ?>"/>&nbsp;<a href="" class="delete"><i class="icon-font"></i></a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </li>
        <?php $ii++; endforeach; endif; else: echo "" ;endif; ?>
        <input type="button" value="创建菜单" id="createMenu" />
        </form>
    </ul>
</div>
        </div>

</div>
</body>
<script type="text/javascript" src="/market/Public/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript">
$("#createMenu").click(function(){
var menu = new Array(); //存储菜单对象
    //一级菜单
    $(".sys-info-list>form>li").each(function(){
         var menuObj=new Object();
         menuObj.
         name=$(this).children("input[name='name']").val();
         menuObj.type=$(this).children('span').children("input[type='radio']:checked").val();
         if(menuObj.type=="click"){
            menuObj.key=$(this).children("input[name='value']").val();
         }else{
            menuObj.url=$(this).children("input[name='value']").val();
         }
         //组织子菜单数据
         menuObj.sub_button=new Array();
         $(this).children("ul").children("li").each(function(){
            var sub_menuObj=new Object();
             sub_menuObj.name=$(this).children("input[name='name']").val();
             sub_menuObj.type=$(this).children('span').children("input[type='radio']:checked").val();
             if(sub_menuObj.type=="click"){
                sub_menuObj.key=$(this).children("input[name='value']").val();
             }else{
                sub_menuObj.url=$(this).children("input[name='value']").val();
             }
             menuObj.sub_button.push(sub_menuObj);
         });
        menu.push(menuObj);
    });
    var url=$("#only").attr('action');
    $.post(url,{'menu':menu},function(data){
        if(data=='ok'){
            alert('菜单创建成功');
            window.location.href="/market/index.php/Home/Menu/view";
        }else{
            alert(data);

        }
    });
    
}) ;
//当点击添加按钮时添加一个主菜单
   var b=10;
   $(".result-content a.addM").click(function(){
      if($(".sys-info-list li.mainM").length>=3){
        alert("最多添加3个主菜单");
        return false;
      }
     //创建li后再添加li
     
    var li = $("<li class='mainM'></li>");
    var name='<input type="text" value="" name="name">';
    var span='<span> <input type="radio" value="click" checked name="type'+b+'"> 点击 <input type="radio" value="view" name="type'+b+'"> 链接 </span>';
    
    var  a1 = '&nbsp;<a href="#" class="add"><i class="icon-font"></i></a>';
    var a='&nbsp;<a href="#" class="delete"><i class="icon-font"></i></a> ';
    var value='<input type="text" name="value" value="">';
    li.append(name);
    li.append(span);
    li.append(value);
    li.append(a1);
    li.append(a);
    b=b+1;
    $("#createMenu").before(li);
    return true;
   });
   
//点击添加按钮时，添加一个子菜单

$(".sys-info-list a.add").click(function(){
    if($(this).parent().children('ul').children().length>=5){
        alert("最多添加5个子菜单");
        return false;

    }
    
    var i =$(this).parent().index()+1;
    var j=$(this).parent().children('ul').children().length+1;
    //创建li后再添加li
    var li = $("<li></li>");
    var name='<input type="text" value="" name="name">';
    var span='<span> <input type="radio" value="click" checked name="type'+i+j+'"> 点击 <input type="radio" value="view" name="type'+i+j+'"> 链接 </span>';
    var a='&nbsp;<a href="#" class="delete"><i class="icon-font"></i></a> ';
    var value='<input type="text" name="value" value="">';
    li.append(name);
    li.append(span);
    li.append(value);
    li.append(a);
    $(this).parent().children('ul').append(li);
   
    return false;
});
//点击删除按钮时，删除相应的菜单（只是在客户端删除）
$(".sys-info-list a.delete").click(function(){
    $(this).parent().remove();
    window.setTimeout("alert('此菜单已临时删除，单击创建菜单按钮即会彻底删除')",300)
    return false;
});
</script>