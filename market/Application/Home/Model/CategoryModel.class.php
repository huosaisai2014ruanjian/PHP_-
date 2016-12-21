<?php
namespace Home\Model;     //首先定义命名空间

use Think\Model\RelationModel;

class CategoryModel extends RelationModel{
    protected $_link = array(
    	'cat'   => array(
    		'mapping_type' => self::BELONGS_TO,
    		'class_name'   => 'cat',
    		'foreign_key'  => 'cat_id',
    		// 'as_field'     => 'id:cat_id',
    	),
    	);
}
