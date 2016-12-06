<?php
namespace Admin\Controller;
use Think\Controller;
use Common\Controller\RestfulController;

class TransactionController extends RestfulController {
    public function add(){        

      $this->display();
    }
   public function edit(){
   	    $id = I('get.id');
        // 获取数据并显示视图
        $this->assign('id',$id);
        $this->assign('rows', $this->_db->find($id));
        $this->display();
   }
}
