<?php
namespace Home\Model;

use Think\Model\ViewModel;

class GoodsViewModel extends ViewModel {
   public $viewFields = array(
     'goods'=>array('id','name','price','photo'),
     'category'=>array('id'=>'categoryid', '_on'=>'goods.category_id=category.id'),
     'users'=>array('nickname'=>'nickname', '_on'=>'goods.seller_id=users.id'),
     'cat'=>array('id'=>'catid', '_on'=>'category.cat_id=cat.id'),
   );
 }
