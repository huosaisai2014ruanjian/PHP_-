<?php
namespace Home\Model;

use Think\Model\ViewModel;

class GoodsViewModel extends ViewModel {
   public $viewFields = array(
     'goods'=>array('id','name','price','photo','seller_id','description','degree','time','times'),
     'category'=>array('id'=>'categoryid', '_on'=>'goods.category_id=category.id'),
     'users'=>array('nickname'=>'nickname','phonenumber'=>'phonenumber', '_on'=>'goods.seller_id=users.id'),
     'cat'=>array('id'=>'catid','_on'=>'category.cat_id=cat.id'),
   );
 }
