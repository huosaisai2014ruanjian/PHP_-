<?php
//时间：2016.12.5-7 
//编写者：兰天旭 
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index() {
        $User = M('cat');
        $list= $User->select();
        //活动轮播图的获取
        $User1 = M('active');
        $Carousel= $User1->limit(2)->order('time desc')->select();
        //显示商品信息
        for ($i=1; $i < 7; $i++) { 
            $goods[$i]  =   D('GoodsView')->where("cat.id=$i")->limit(4)->order('time desc')->select();
        }
        foreach ($goods as $key => $value) {
            foreach ($value as $keys => $v) {
                $goods[$key][$keys]['photo']=explode(';',$goods[$key][$keys]['photo']);
                $goods[$key][$keys]['photo']=$goods[$key][$keys]['photo'][0];
            }
        }
        for ($i=1; $i < count($goods)+1; $i++) { 
            $this->assign("goods$i",$goods[$i]);
        }
        $this->assign('list',$list);
        $this->assign('Carousel',$Carousel);
        $this->display();
    } 
}