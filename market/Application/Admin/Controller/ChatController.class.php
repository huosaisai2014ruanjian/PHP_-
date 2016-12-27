/***
 * document：在线聊天聊天记录
 * User: 兰天旭、霍赛赛
 */
<?php
namespace Admin\Controller;
use Think\Controller;
use  Common\Controller\RestfulController;
class ChatController extends RestfulController {
   public function create(){
     //获取users表的数据对象
     $users = M('users');
     //获取商品表的数据对象
     $goods = M('goods');
     $res1 = $goods->field('id')->select();
     $res = $users->field('id')->select();
     $res2= $this->_db->field('id')->select();
     $this->assign('users',$res);
     $this->assign('goods',$res1);
     $this->assign('chat',$res2);
     $this->display();
 }
 public function show(){
     // 获取GET参数
     $id = I('id');
     // 获取数据并显示视图
     $users = M('users');
     //获取商品表的数据对象
     $goods = M('goods');
     $res1 = $goods->field('id')->select();
     $res = $users->field('id')->select();
     $res2= $this->_db->field('id')->select();
     $this->assign('id',$id);
     $this->assign('users',$res);
     $this->assign('goods',$res1);
     $this->assign('chat',$res2);
     $this->assign('row', $this->_db->find($id));
     $this->display();
 }
}
