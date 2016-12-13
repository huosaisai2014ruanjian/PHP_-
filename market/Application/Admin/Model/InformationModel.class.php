<?php
namespace Home\Model;
use Think\Model;
class InformationModel extends Model{
	protected $_validate = array(
			array("title", "require", "标题不能为空",1)
		);
	protected $_auto = array(
				array("time", 'getTime',3, 'function')
			);
}