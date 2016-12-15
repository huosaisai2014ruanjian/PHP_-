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

            $where=I('get.id');//从商品列表页获取商品ID
            //dump($where);exit;
            $good = M('Goods')->where("id=$where")->find();//找到商品
            $arr=explode(';',$good['photo']);//将图片URL分割 存到数组
            $len=count($arr);
            for ($j=0; $j < $len; $j++) {
                $good ['image'][]=$arr[$j];
            }
            $sellid = $good['seller_id'][''];//卖家ID
            $user = M('users')->where("id=$sellid")->find();//dump($user);exit; //以卖家ID得到该卖家信息

            $good1= $good['image']['1'];
            //dump($message);exit;
            $result=M('message')->join('market_goods on market_message.goods_id = market_goods.id')->join('market_users on market_message.fromuser_id = market_users.id')->where("goods_id = $where")
                ->field(array('market_message.time'=>'time',
                                'market_users.nickname'=>'nickname',
                                'market_users.head'=>'head',
                                'market_message.content'=>'content',
                                'market_goods.id'=>'goods_id',
                                'market_message.fromuser_id'=>'fromuser_id',
                                'market_message.touser_id'=>'touser_id',
                                'market_users.college'=>'college'
                    ))->select();
            //dump($sellid);
            //dump($user);exit;
            //dump($result);exit;
            //dump($good);exit;
            $this->assign('result',$result);
            $this->assign('user',$user);
            $this->assign('good',$good);//分好的数组 单个图片URL传到VIEW
            $this->assign('good1',$good1);




            $this->display();

        }
        public function addmessage(){
            $data = array(

                'content' => I("post.comment"),
                'time' =>date( 'Y-m-d h:i:s',time()),
                'goods_id' => I("post.goods_id"),
                'fromuser_id' => I('post.fromuser_id'),
                'touser_id' => I('post.fromuser_id'),
                'belong_id' => '1',
            );
           //dump($data);exit;
            $comment = M("message"); // 实例化User对象
            if (1) {//条件
                $add = $comment->add($data);
                if ($add) {
                    $this->success('评论成功');
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

}