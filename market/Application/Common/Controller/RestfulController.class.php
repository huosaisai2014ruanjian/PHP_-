<?php
namespace Common\Controller;


use Think\Controller;

abstract class RestfulController extends Controller {
    // 当前待操作的数据表名称
    protected $_tableName = '';
    // 数据表操作对象
    protected $_db;
    protected function _initialize() {
            //获取表名 （通过控制器名）
       if(!$this->_tableName){
        $this->_tableName=lcfirst(CONTROLLER_NAME);
       }        
        // 创建自定义模型类
        $this->_db = D($this->_tableName);
        // 权限校验

    }

    public function index() {
        $this->assign('results', $this->_db->select());
        $this->display();
    }

    public function create() {
        $this->display();
    }

    public function store() {
        // 获取POST数据
        $data = I('post.');
        // 插入到数据表中
       $result = $this->_db->add($data);
        // 善后处理
        if ($result) {
            $this->success($this->_tableName . '表数据插入成功！','http://127.0.0.1/market/index.php/admin');
        } else {
            $this->error($this->_tableName . '表数据插入失败！');
        }
    }

    public function show() {
        // 获取GET参数
        $id = I('id');
        // 获取数据并显示视图
        $this->assign('id',$id);
        $this->assign('row', $this->_db->find($id));
        $this->display();
    }

    public function edit() {
        $this->display();
    }

    public function update() {
        $id= I('get.id');

        $data = I('post.');

        //更新数据到数据表中
        $result = $this->_db->where("id=$id")->save($data);

        // 善后处理
        if ($result) {
            $this->success($this->_tableName . '表数据更新成功！', 'http://127.0.0.1/market/index.php/admin');
        } else {
            $this->error($this->_tableName . '表数据更新失败！');
        }
    }

    public function destroy()
    {
        $data = I('get.id');
       //删除数据从数据库
        $result = $this->_db->where($data)->delete();
        if(!$result){
            return 0;
        }
    }

    public function content(){
        $id= I('get.id');
        $res = $this->_db->find($id);
        $this->assign('row', $res['content']);
        $this->display();
    }
}