/***
 * document：后台用户
 * User: 周博学
 */
<?php
namespace Admin\Controller;
use Common\Controller\RestfulController;
class ThinkUserController extends RestfulController {

    public function create()
    {
        $this->display();
    }

    public function add(){
        $data = I('post.');
        $data['passwd']=md5($data['passwd']);
        $result = $this->_db->add($data);
        // 善后处理
        if ($result) {
            $this->success($this->_tableName . '表数据插入成功！');
        } else {
            $this->error($this->_tableName . '表数据插入失败！');
        }

    }

}
