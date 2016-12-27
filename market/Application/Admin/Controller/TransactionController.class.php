/***
 * document：交易记录
 * User: 刘迪浩、马豪珍
 */
<?php
namespace Admin\Controller;
use Think\Controller;
use Common\Controller\RestfulController;

class TransactionController extends RestfulController {
    public function store() {

        // 获取POST数据
        $data = I('post.');
        // 插入到数据表中
        $result = $this->_db->add($data);
        // 善后处理
        if ($result) {
            $this->success($this->_tableName . '表数据插入成功！');
        } else {
            $this->error($this->_tableName . '表数据插入失败！');
        }
    }
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
