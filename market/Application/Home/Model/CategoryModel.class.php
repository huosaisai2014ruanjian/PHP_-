<?php
namespace Home\Model;     //首先定义命名空间

use Think\Model\RelationModel;

class CategoryModel extends RelationModel{
    protected $_link = array(
    	// 'Goods' => array(
    	// 	'mapping_type' => self::HAS_MANY,
    	// 	'class_name'   => 'Goods',
    	// 	'foreign_key'  => 'cat_id',
    	// 	// 'as_field'     => 'id:goods_id',
    	// ),
    	// 'users' => array(
    	// 	'mapping_type' => self::HAS_MANY,
    	// 	'class_name'   => 'Goods',
    	// 	'foreign_key'  => 'cat_id',
    	// 	// 'as_field'     => 'id:goods_id',
    	// ),
    	'cat'   => array(
    		'mapping_type' => self::BELONGS_TO,
    		'class_name'   => 'cat',
    		'foreign_key'  => 'cat_id',
    		// 'as_field'     => 'id:goods_id',
    	),
    	);
}
