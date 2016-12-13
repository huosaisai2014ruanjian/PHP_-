<?php
//时间：2016.12.5-7 
//编写者：兰天旭 
namespace Home\Controller;

use Common\Controller\BaseController;

class GoodslistController extends BaseController
{
    public function goodslist() {
// $games = M('goods')->join('market_users on market_goods.seller_id = market_users.id')
// ->join('market_category on market_category.id = market_goods.category_id')->
// join('market_users on market_users.id = market_goods.seller_id')
// ->where("market_cat.id=14")->field(array('market_goods.name'=>'name','market_users.nickname'=>
// 	'nickname','market_goods.price'=>'price','market_goods.photo'=>'photo'))
// ->limit(4)->order('time desc')->select();  
   /***
    获取商品
    */
    $num =1;
    if($num==1){
      $id = I('get.id');
      $s = M('cat')->join('market_category on market_cat.id = market_category.cat_id')
->join('market_goods on market_category.id = market_goods.category_id')->
join('market_users on market_users.id = market_goods.seller_id')
->where("market_cat.id=$id")->order('time desc')->select();  
$num = 0;

    }else{
    $id=I('get.id');
     

$goods = M('goods'); 
    $result1 = $goods->join('market_category on market_goods.category_id = market_category.id')
   ->join('market_cat on market_category.cat_id = market_cat.id')->join('market_users on market_goods.seller_id=market_users.id')->where("market_cat.id=$id")->select();
   $num=1;
   }
   // dump($result1);
   /***
   获取商品的一级分类
   */
     $cat = M('cat');
   	 $result = $cat->select();
   	 $this->assign('name',$result1[0]['name']);
      $this->assign('type',$s);
   	 $this->assign('study',$result1);
   	 $this->assign('cat',$result);
     $this->display();
     }
   /***
   获取商品的二级分类
   */
    public function getCatgory(){
    	$id= I('get.id');
    	$catgory = M('category');
    	$result = $catgory->where("cat_id=$id")->select();
    	echo json_encode( $result);
    }
    /***
    获取商品
    */
    public function getGoods(){
    	$id= I('get.id');
    	$goods = M('goods');
    	$result = $goods->join('market_users on market_goods.seller_id=market_users.id')->where("category_id=$id")->select();
    	
    	echo json_encode( $result);
    }
}