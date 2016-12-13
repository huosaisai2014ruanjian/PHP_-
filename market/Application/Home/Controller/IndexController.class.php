<?php
//时间：2016.12.5-7 
//编写者：兰天旭 
namespace Home\Controller;

use Common\Controller\BaseController;

class IndexController extends BaseController
{
    public function index() {
$User = M('cat');
$list= $User->select();

$User1 = M('active');
$Carousel= $User1->limit(2)->order('time desc')->select();
// 	
//$study = M('cat')->join('market_category on market_cat.id = market_category.cat_id')->join('market_goods on market_category.id = market_goods.category_id')->where("market_cat.id=8")->select();  
//dump($study);exit;
        //显示学习用品商品信息
$study = M('cat')->join('market_category on market_cat.id = market_category.cat_id')
->join('market_goods on market_category.id = market_goods.category_id')->
join('market_users on market_users.id = market_goods.seller_id')
->where("market_cat.id=8")->field(array('market_goods.name'=>'name','market_users.nickname'=>'nickname','market_goods.price'=>'price','market_goods.photo'=>'photo'))->limit(4)->order('time desc')->select();  

        //显示电子数码商品信息
$electronics = M('cat')->join('market_category on market_cat.id = market_category.cat_id')
->join('market_goods on market_category.id = market_goods.category_id')->
join('market_users on market_users.id = market_goods.seller_id')
->where("market_cat.id=10")->field(array('market_goods.name'=>'name','market_users.nickname'=>'nickname','market_goods.price'=>'price','market_goods.photo'=>'photo'))->limit(4)->order('time desc')->select();  

        //显示服装饰品商品信息
$cloths = M('cat')->join('market_category on market_cat.id = market_category.cat_id')
->join('market_goods on market_category.id = market_goods.category_id')->
join('market_users on market_users.id = market_goods.seller_id')
->where("market_cat.id=11")->field(array('market_goods.name'=>'name','market_users.nickname'=>'nickname','market_goods.price'=>'price','market_goods.photo'=>'photo'))->limit(4)->order('time desc')->select();  

        //显示出行工具商品信息
$bike = M('cat')->join('market_category on market_cat.id = market_category.cat_id')
->join('market_goods on market_category.id = market_goods.category_id')->
join('market_users on market_users.id = market_goods.seller_id')
->where("market_cat.id=12")->field(array('market_goods.name'=>'name','market_users.nickname'=>'nickname','market_goods.price'=>'price','market_goods.photo'=>'photo'))->limit(4)->order('time desc')->order('time desc')->select();  

        //显示运动器材商品信息
$sports = M('cat')->join('market_category on market_cat.id = market_category.cat_id')
->join('market_goods on market_category.id = market_goods.category_id')->
join('market_users on market_users.id = market_goods.seller_id')
->where("market_cat.id=13")->field(array('market_goods.name'=>'name','market_users.nickname'=>'nickname','market_goods.price'=>'price','market_goods.photo'=>'photo'))->limit(4)->order('time desc')->select();  

        //显示虚拟物品商品信息
$games = M('cat')->join('market_category on market_cat.id = market_category.cat_id')
->join('market_goods on market_category.id = market_goods.category_id')->
join('market_users on market_users.id = market_goods.seller_id')
->where("market_cat.id=14")->field(array('market_goods.name'=>'name','market_users.nickname'=>'nickname','market_goods.price'=>'price','market_goods.photo'=>'photo'))->limit(4)->order('time desc')->select();  

//dump($study);
$this->assign('list',$list);
$this->assign('Carousel',$Carousel);

$this->assign('study',$study);
$this->assign('electronics',$electronics);
$this->assign('bike',$bike);
$this->assign('sports',$sports);
$this->assign('cloths',$cloths);
$this->assign('games',$games);
        $this->display();
    }

}