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

class GoodDetailController extends Controller
{
        public function index(){

//            $where=I('get');//从商品列表页获取商品Id;
//            $goodsModel = M('Goods');
//            $Message = M('Message');
//            $good = M('Goods')->where($where)->find();//找到商品
//            $arr=explode(';',$good['photo']);//将图片URL分割 存到数组
//            $len=count($arr);
//            for ($j=0; $j < $len; $j++) {
//                $good ['image'][] = $arr[$j];
//            }
//            $sellid = $good['seller_id'][''];//卖家ID
//            $user = M('users')->where("id=$sellid")->find();//dump($user);exit; //以卖家ID得到该卖家信息
//
//            $good1= $good['image']['1'];
//            //dump($message);exit;
//            $result=M('message')->join('market_goods on market_message.goods_id = market_goods.id')->join('market_users on market_message.fromuser_id = market_users.id')->where($where)
//                ->field(array('market_message.time'=>'time',
//                                'market_users.nickname'=>'nickname',
//                                'market_users.head'=>'head',
//                                'market_message.content'=>'content',
//                                'market_goods.id'=>'goods_id',
//                                'market_message.fromuser_id'=>'fromuser_id',
//                                'market_message.touser_id'=>'touser_id',
//                                'market_users.college'=>'college',
//                                'market_message.belong_id'=>'belong_id',
//                    ))->select();
//            $Message =
//            //dump($sellid);
//            //dump($user);exit;
//            dump($result);exit;
//            //dump($good);exit;
//            $this->assign('result',$result);
//            $this->assign('user',$user);
//            $this->assign('good',$good);//分好的数组 单个图片URL传到VIEW
//            $this->assign('good1',$good1);
            $where = I('get.');
            $goodsModel = M('goods');
            $usersModel = M('users');
            $MessageModel = M('message');
            $goods = $goodsModel->where($where)->find();
            $imgarray=explode(';',$goods['photo']);//将图片URL分割 存到数组

            $users = $usersModel->where($where)->find();

            $where = array();
            $where['goods_id'] = I('get.id');
            $where['belong_id'] = 0;
            $Message = $MessageModel->where($where)->select();
            $i = 0;
            foreach($Message as $key=>$value) {
                    $result[$i]['content'] = $value['content'];
                    $map['id'] = $value['fromuser_id'];
                    $result[$i]['nickname'] = $usersModel->where($map)->getfield('nickname');
                    $result[$key]['time'] = $value['time'];
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
            $userid=1;
            $goodid=I('get.id');
            $result1=M('collection')->where("user_id=$userid and goods_id=$goodid")->find();
            if ($result1) {
                $a=1;
            }else{
                $a=0;
            }
            // dump($result);
            // dump($goodid);exit;
            $this->assign('xihuan',$a);
            $this->assign('good',$goods);
            $this->assign('img_url',$imgarray);
            $this->assign('user',$users);
            $this->assign('result',$result);
            $viewadd = $goodsModel->where($where)->setInc('times',1);//页面每刷新一次，浏览次数加1 
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
                    $id= I("post.goods_id");
                    $this->redirect("home/goodDetail/index/id/$id");
                } else {
                    $this->error('评论失败');
                }
            } else {

            }

        }
        public function remessage(){


            $data = array(
                'content' =>I("post.comment"),
                'goods_id' =>I('post.goods_id'),
                'fromuser_id' => "1",
                "touser_id"=>I('post.fromuser_id'),
                'belong_id' => '2',
            );
            $recomment = M("message");
            if (1) {//条件
                $add = $recomment->add($data);
                if ($add) {
                    $this->success('回复成功');
                } else {
                    $this->error('回复失败');
                }
            } else {

            }

        }
        public function xihuan(){
            $data=I('post.');
            $data['user_id']=1;
            //echo $data;exit;
            $result=M('collection')->add($data);
        }
        public function quxiaoxihuan(){
            $data=I('post.');
            $userid=1;
            $goodid=$data['goods_id'];
            //echo $data;exit;
            $result=M('collection')->where("user_id=$userid and goods_id=$goodid")->delete();
        }

}