<?php if (!defined('THINK_PATH')) exit();?><style type="text/css">
    #il{
        height:400px;
    }
    #il .t{
        width:200px;
        text-align: center;
    }
</style>
<div class="pageContent j-resizeGrid">
    <div class="panelBar">
        <ul class="toolBar">
            <li class=""><a class="add" href="<?php echo U('admin/system/index');?>" target="navTab"><span>留言管理</span></a></li>
        </ul>
    </div>
    <form action="/market/index.php/Admin/System/store" method="post" width="100%" >

        <table  id="il" class="list" width="98%" targetType="navTab" asc="asc" desc="desc" layoutH="163">
            <tbody>
            <tr>
                <td class="t">系统消息内容</td>
                <td>
				<textarea name="content" height="200px" width="100px">

				</textarea>
                </td>
            </tr>

            <tr>
                <td class="t"></td>

                <td class="t"></td>
                <td><input type="submit" value="添加"></td>
            </tr>
            </tbody>
        </table>
    </form>