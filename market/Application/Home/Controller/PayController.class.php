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

class PayController extends Controller
{
        public function Pay(){

            $where=I('get.');//从商品列表页获取商品ID
            $good = M('Goods')->where($where)->find();//找到商品
            $arr=explode(';',$good['photo']);//将图片URL分割 存到数组
            $len=count($arr);
            for ($j=0; $j < $len; $j++) {
                $good ['image'][]=$arr[$j];
            }
            $sellid = $good['seller_id'][''];//卖家ID
            $user = M('users')->where($sellid)->find();//dump($user);exit; //以卖家ID得到该卖家信息
            $message= M('message')->where($sellid)->find();
                    //dump($good['image']['1']);exit;
            $good1= $good['image']['1'];

            //dump($message);exit;
            $this->assign('user',$user);
            $this->assign('good',$good);//分好的数组 单个图片URL传到VIEW
            $this->assign('message',$message);
            $this->assign('good1',$good1);




            $this->display();

        }
}