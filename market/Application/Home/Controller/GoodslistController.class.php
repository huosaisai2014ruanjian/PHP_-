<?php
//时间：2016.12.5-26 
//编写者：兰天旭、周博学、霍赛赛、王振儒
namespace Home\Controller;

use Think\Controller;

class GoodslistController extends Controller
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
      
        $catid= I('get.catid');
        
        if($catid){
       $goods = M('goods');
       $name=I('get.name');
       $book = I('get.book');
    $result = $goods->join('market_category on market_goods.category_id = market_category.id')
   ->join('market_cat on market_category.cat_id = market_cat.id')
        ->join('market_users on market_goods.seller_id=market_users.id')
        ->where("market_cat.id=$catid")
        ->field(array('market_goods.name'=>'name',
            'market_goods.degree'=>'degree',
            'market_goods.description'=>'description',
            'market_goods.price'=>'price',
            'market_users.nickname'=>'nickname',
            'market_users.college'=>'college',
            'market_goods.photo'=>'photo',
            'market_users.head'=>'head',
            'market_goods.id'=>'id',
           // 'market_goods.cat_id'=>'cat_id',
            )
        )->select();
        for ($i=0;$i<count($result);$i++)
        {
            $result[$i]['photo']=explode(';',$result[$i]['photo']);
            $result[$i]['photo']=$result[$i]['photo'][0];
        }
       //获取商品的二级分类
        $catgory = M('category');
      $result1 = $catgory->where("cat_id=$catid")->select();   
     $this->assign('book',$book);
     $this->assign('cat',$name);
     $this->assign('category',$result1);
     $this->assign('name',$result[0]['name']);
     $this->assign('type',$result);
     $this->display();
     
    }
    else{
    $id=I('get.id');
    $name=I('get.name');
    $book=I('get.book');
$goods = M('goods');
    $result = $goods->join('market_category on market_goods.category_id = market_category.id')
   ->join('market_cat on market_category.cat_id = market_cat.id')
        ->join('market_users on market_goods.seller_id=market_users.id')
        ->where("market_cat.id=$id")
        ->field(array('market_goods.name'=>'name',
            'market_goods.degree'=>'degree',
            'market_goods.description'=>'description',
            'market_goods.price'=>'price',
            'market_users.nickname'=>'nickname',
            'market_users.college'=>'college',
            'market_goods.photo'=>'photo',
            'market_users.head'=>'head',
            'market_goods.id'=>'id',
           // 'market_goods.cat_id'=>'cat_id',
            )
        )
        ->select();
        for ($i=0;$i<count($result);$i++)
        {
            $result[$i]['photo']=explode(';',$result[$i]['photo']);
            $result[$i]['photo']=$result[$i]['photo'][0];
        }
        
       
  //dump($result);exit;
   /***
   获取商品的一级分类
   */

  	// $result1 = $cat->select();
       // dump($result);exit;
      $this->assign('book',$book);
     $this->assign('cat',$name);
   	 $this->assign('name',$result[0]['name']);
   	 $this->assign('type',$result);
      $this->display();
     }
   }
    /***
   获取商品的二级分类
   */
    public function getCatgory(){
      $id= I('get.id');
      $name = I('get.name');
      $book = I('get.book');
      $goods = M('goods');
      $result = $goods->join('market_users on market_goods.seller_id=market_users.id')->where("category_id=$id")->field(array('market_goods.name'=>'name',
            'market_goods.degree'=>'degree',
            'market_goods.description'=>'description',
            'market_goods.price'=>'price',
            'market_users.nickname'=>'nickname',
            'market_users.college'=>'college',
            'market_goods.photo'=>'photo',
            'market_users.head'=>'head',
            'market_goods.id'=>'id',
           // 'market_goods.cat_id'=>'cat_id',
            )
        )->select();
      $this->assign('name',$name);
      $this->assign('book',$book);
      $this->assign('type',$result);
      $this->display();
      
    }
    /***
    获取商品
    */
    // public function getGoods(){
    // 	$id= I('get.id');
    // 	$goods = M('goods');
    // 	$result = $goods->join('market_users on market_goods.seller_id=market_users.id')->where("category_id=$id")->select();
    	
    // 	echo json_encode( $result);
    // }
}