<?php
/**
 * Created by PhpStorm.
 * User: 周博学
 * Date: 2016/12/7
 * Time: 11:00
 */

namespace Home\Controller;

use Think\Controller;
use Common\Controller\RestfulController;

class GooddetailController extends Controller
{
        public function index(){
            $where1 = I('get.');
            // $id=I('get.id');
            // dump($where);exit;
            $goodsModel = D('GoodsView');
            $usersModel = M('users');
            $MessageModel = M('message');
            $goods = $goodsModel->where($where1)->find();
            $where = $goods['seller_id'];
            $imgarray=explode(';',$goods['photo']);//将图片URL分割 存到数组
           
            $users = $usersModel->where("id = $where")->find();
            //$userhead = $userModel->where($where)->field('head');
            //dump($users);exit;
            $where = array();
            $where['goods_id'] = I('get.id');
            $where['belong_id'] = 0;
            $Message = $MessageModel->where($where)->select();
            $i = 0;
            foreach($Message as $key=>$value) {

                    $result[$i]['id'] = $value['id'];
                    $result[$i]['fromuser_id'] = $value['fromuser_id'];
                    $result[$i]['content'] = $value['content'];
                    $map['id'] = $value['fromuser_id'];
                    $result[$i]['nickname'] = $usersModel->where($map)->getfield('nickname');
                    $result[$key]['time'] = $value['time'];
                    $result[$i]['userimg']=$usersModel->where($map)->getfield('head');
                    $where = array();
                    $where['belong_id'] = $value['id'];
                    $Messages = $MessageModel->where($where)->select();
                    $j = 0;
                    foreach($Messages as $key => $val){
                        $map['id'] = $val['fromuser_id'];
                        $Messages[$j]['fromnickname'] = $usersModel->where($map)->getfield('nickname');
                        $map['id'] = $val['touser_id'];
                        $Messages[$j]['tonickname'] = $usersModel->where($map)->getfield('nickname');
                        $j = $j+1;
                    }
                    $result[$i]['temp'] = $Messages;
                    $i = $i+1;
            }
            $userid=session('id');
            $goodid=I('get.id');
            $result1=M('collection')->where("user_id=$userid and goods_id=$goodid")->find();
             if ($result1) {
                 $a=1;
             }else{
                 $a=0;
            }
            $this->assign('xihuan',$a); 
            //dump($a);       exit; 
            $this->assign('good',$goods);
            $this->assign('img_url',$imgarray);
            //dump($imgarray);
            $this->assign('user',$users);
            $this->assign('result',$result);
            $viewadd = M('goods')->where($where1)->setInc('times',1);//页面每刷新一次，浏览次数加1 
            $this->display();
             
        }
        public function addmessage(){
            $data = array(

                'content' => I("post.comment"),
                'time' =>date( 'Y-m-d h:i:s',time()),
                'goods_id' => I("post.goods_id"),
                'fromuser_id' => I('post.fromuser_id'),
                'touser_id' => I('post.fromuser_id'),
                'belong_id' => I('post.belong_id'),
            );
           //dump($data);exit;
            $comment = M("message"); // 实例化User对象
            if (1) {//条件
                $add = $comment->add($data);
                if ($add) {
                     $this->redirect('Gooddetail/index', array('id' => I("post.goods_id")));
                } else {
                    $this->error('评论失败');
                }
            } else {

            }

        }
        public function remessage(){
            $id=session('id');

            $data = array(
                'content' =>I("post.comment"),
                'goods_id' =>I('post.goods_id'),
                'fromuser_id' => "$id",
                "touser_id"=>I('post.touser_id'),
                'belong_id' => I('post.belong_id'),
            );
            $recomment = M("message");
            if (1) {//条件
                $add = $recomment->add($data);
                if ($add) {
                     $this->redirect('Gooddetail/index', array('id' => I("post.goods_id")));
                } else {
                    $this->error('回复失败');
                }
            } else {

            }

        }
        
        public function xihuan(){
             $data=I('post.');
             $data['user_id']=session('id');
             //echo $data;exit;
            $result=M('collection')->add($data);
         }
        public function quxiaoxihuan(){
             $data=I('post.');
             $userid=session('id');
             $goodid=$data['goods_id'];
             //echo $data;exit;
             $result=M('collection')->where("user_id=$userid and goods_id=$goodid")->delete();
         }
}