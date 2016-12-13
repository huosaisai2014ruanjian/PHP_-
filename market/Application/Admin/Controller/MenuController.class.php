<?php

/**
 * User: 霍赛赛
 * Date: 2016-12-05
 * Time: 14:35
 */
namespace Admin\Controller;
use Think\Controller;
class MenuController extends Controller
{
    /**
     * 创建菜单
     */
    public function manage(){
        $access_token=\Common\Library\Wechat::getAccessToken();

        $url="https://api.weixin.qq.com/cgi-bin/menu/get?access_token=$access_token";
        $menuStr=\Common\Library\Wechat::menuView($url);
        $menu = json_decode($menuStr);
        $this->assign("menu",$menu->menu->button);
        $this->display();
    }
    public function create(){
  $access_token=\Common\Library\Wechat::getAccessToken();
  $url="https://api.weixin.qq.com/cgi-bin/menu/create?access_token=$access_token";
  $menu=I('menu');//主要是这里数据的组织
  $menuStr=array();
  $menuStr['button']=$menu;
  $menu=json_encode($menuStr,JSON_UNESCAPED_UNICODE);
  $result=\Common\Library\Wechat::createMenu($url,$menu);
   echo $result['errmsg'];
}
   /**
 * 查看菜单
 */
  public function view(){
 $access_token=\Common\Library\Wechat::getAccessToken();
  $url="https://api.weixin.qq.com/cgi-bin/menu/get?access_token=$access_token";

  $menuStr=\Common\Library\Wechat::menuView($url);
  $menu = json_decode($menuStr);
  $this->assign("menu",$menu->menu->button);
  $this->display();
}

}