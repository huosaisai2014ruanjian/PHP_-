<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/Public/css/public.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/head.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/personal_left.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/personal_table.css" rel="stylesheet" type="text/css" />
<link href="/Public/css/confirmdelete.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/js/confirmdelete.js"></script>
<link href="/Public/css/detailfy.css" rel="stylesheet" type="text/css" />

<script language="JavaScript" src="/Public/js/jquery-1.7.2.min.js"></script>
<title>个人管理-我的预约</title>
</head>
<body>

<div class="header">
    <div class="mybody">
        <div class="logo"><img src="/Public/images/logo2.png" width="193" height="60" alt="logo" /></div>
        <div class="place"><p>北京</p></div>
        <div class="nav">
            <div class="navtop">
            <a href="#" class="log">登录</a>
            <a href="#" class="log sign">注册</a>
            <p>客服热线&nbsp;&nbsp;&nbsp;400&nbsp;-&nbsp;0000&nbsp;-&nbsp;000</p>
            </div>
            <div class="line"></div>
            <a href="#" class="xz"><div class="xzimg"><img src="/Public/images/gl2.png" width="21" height="21" alt="gl"/></div><p>选址攻略</p></a>
            <a href="#" class="xz xz2"><div class="xzimg"><img src="/Public/images/gw2.png" width="21" height="21" alt="gl"/></div><p>选址顾问</p></a>
            <a href="#" class="xz xz2"><div class="xzimg"><img src="/Public/images/jy2.png" width="21" height="21" alt="gl"/></div><p>选址建议</p></a>
        </div>
    </div>
</div>


<!--个人中心房源管理-->
<div class="content">
	<div class="mybody">
    	<div class="bread"><span>选址中国</span> > <a href="#">个人中心</a> > <a href="#">个人管理</a> > <a href="#">我的预约</a></div>
		<!--个人中心left-->
        <div class="personal_left">
        	<div class="user">
            	<a href="#"><img src="/Public/images/user.gif" width="150" height="150" alt="user" /></a>
                <p>欢迎你，王子文<br /><a href="#">申请成为认证经纪人</a></p>
            </div>
            <ul class="left_nav">
                	<li><a href="#">首页</a></li>
                    <li><a href="#">楼盘管理</a></li>
                    <li><a href="#">房源管理</a></li>
                    <li><a href="#">选址攻略</a></li>
                    <li class="left_nav_now person_nav">个人管理
                    	<ul>
                        	<li><a href="#">认证管理</a></li>
                        	<li><a href="#">经验管理</a></li>
                        	<li><a href="#">个人信息管理</a></li>
                    	</ul></li>
                    <li><a href="#">消息中心</a></li>
                    <li><a href="#">投标管理</a></li>
                    <li><a href="#">委托管理</a></li>
                    <li><a href="#">我的收藏</a></li>
			</ul>    	
        </div>
        <!--个人中心right-->
        <div class="personal_table_right">
            <div class="ss ss1">
            	<form action="">
                	<input type="text" value="请输入盘源名称、商圈或地点" name="ssk" />
                    <input type="button" value="" name="ssn" />
                </form>
            </div>
            <div class="table1">
            	<table cellspacing="0">
                	<tr>
                    	<td class="border_top">名称</td>
                        <td class="border_top">所属类别</td>
                        <td class="border_top">更新时间</td>
                        <td class="border_top border_right" colspan="2">操作</td>
                    </tr>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
                    	<td><?php echo ($list["fyname"]); ?></td>
                        <td><?php echo ($list["fysuoshulp"]); ?></td>
                        <td><?php echo ($list["fytime"]); ?></td>
                        <td><a href="#"  name="check">查看</a></td>
                        <td class="border_right"><a href="#" onclick="return alertMsg('确定要删除吗？',1,'/index.php/Home/PersonnalManagement/MyReservationdelete/id/<?php echo ($list["fyid"]); ?>');">取消预约</a></td>
                    </tr>
                    <div class ="box1" name="box1">
                    <div class="close" onclick ="$('.box1').hide()"></div>
                        <ul style="margin-top:50px;margin-left:50px;">
                            <li style="float:left;width:100px;">名称</li>
                            <li style="float:left;width:100px;">所属类别</li>
                            <li style="float:left;width:100px;">更新时间</li>
                        </ul>
                        <ul style="margin-top:70px;margin-left:50px;">
                            <li style="float:left;width:100px;"><?php echo ($list["fyname"]); ?></li>
                            <li style="float:left;width:100px;"><?php echo ($list["fysuoshulp"]); ?></li>
                            <li style="float:left;width:100px;"><?php echo ($list["fytime"]); ?></li>
                        </ul>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
<!--                     <tr>
                    	<td>CRD银座</td>
                        <td>众创空间</td>
                        <td>2016.01.01 17:00</td>
                        <td><a href="#">查看</a></td>
                        <td class="border_right"><a href="#" onclick="return alertMsg('确定要取消预约吗？',1,'#')">取消预约</a></td>
                    </tr>
-->
                </table>
            </div>
             <div class="page">
            	<ul>
                	<li class="up"><a href="#">上一页</a></li>
                    <li class="now">1</li>
                    <li class="num" name="num"><a href="#">2</a></li>
                    <li class="num" name="num"><a href="#">3</a></li>
                    <li class="num" name="num"><a href="#">4</a></li>
                    <li class="num" name="num"><a href="#">5</a></li>
                    <li>...</li>
                    <li class="num" name="num"><a href="#">8</a></li>
                    <li class="up"><a href="#">下一页</a></li>
                </ul>
            </div>
        </div>
	</div>
</div>

<div class="footer">
	<div class="mybody">
	<div class="ewm"><img src="/Public/images/ewm.jpg" width="110" height="110" alt="ewm"/><p>关注选址微信公众号</p></div>
    <div class="footermiddle">
    <ul>
    	<li><a href="#" class="footernav">关于我们</a></li>
        <li><a href="#" class="footernav footernav2">联系我们</a></li>
        <li><a href="#" class="footernav footernav2">平台规则</a></li>
        <li><a href="#" class="footernav footernav2">意见反馈</a></li>
    </ul>
	<p class="bq">版权所有 2016 选址中国有限公司 保留一切权利 京ICP备111111111号</p>
    <p class="dh">联系电话：400-000-000</p>
    </div>
    <div class="footermiddle footerr">
    	<a href="#" class="footernav">友情链接</a>
        <ul>
    	<li><a href="#" class="yqlj">瑞凡特（北京）科技有限公司</a></li>
        <li><a href="#" class="yqlj yqlj2">北京写字楼出租</a></li>
        <li><a href="#" class="yqlj yqlj2">上海写字楼出租</a></li>
        <li><a href="#" class="yqlj yqlj2">深圳写字楼出租</a></li>
        <li><a href="#" class="yqlj">深圳写字楼出租</a></li>
        <li><a href="#" class="yqlj yqlj2">深圳写字楼出租</a></li>
        <li><a href="#" class="yqlj yqlj2">深圳写字楼出租</a></li>
        <li><a href="#" class="yqlj yqlj2">深圳写字楼出租</a></li>
    	</ul>
    </div>
    </div>
</div>

<script type="text/javascript" src="/Public/js/detail.js"></script>
</body>
</html>