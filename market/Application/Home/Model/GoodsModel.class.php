<?php
namespace Home\Model;     //首先定义命名空间

use Think\Model\RelationModel;

class GoodsModel extends RelationModel{
    protected $_link = array(
    	'users'   => array(
    		'mapping_type' => self::BELONGS_TO,
    		'class_name'   => 'users',
    		'foreign_key'  => 'seller_id',
    		'as_fields'    => 'nickname:nickname',
            'condition'    => "'nickname'!='1'",
    	),
        'category'  =>  array(
            'mapping_type'  =>  self::BELONGS_TO,
            'class_name'    =>  'category',
            'foreign_key'   =>  'category_id',
            // 'as_fields'     =>  'cat_id:cat_id',   
            'condition'     =>  'cat_id  = 1',
     
        )     
    	);
}
