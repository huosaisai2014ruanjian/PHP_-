<?php
namespace Common\Controller;

use Org\Util\Rbac;
use Think\Controller;

abstract class RestfulController extends Controller {
    // 当前待操作的数据表名称
    protected $_tableName = '';
    // 数据表操作对象
    protected $_db;

    function _initialize() {
        //判断是否开启rbac权限验证
        if(C('USER_AUTH_ON')){
            //获取需要验证模块列表
            $requireModules = explode(',', C('REQUIRE_AUTH_MODULE'));
            if(in_array(MODULE_NAME, $requireModules)){
                //当前模块需要校验
                //开始执行rbac验证
                //判断用户是否登录
                if (session('?' . C('USER_AUTH_KEY'))) {
                    //用户已登录
                }else{
                    //用户尚未登录
                    $this->error('您还没有登录，请先登录再访问!', C('USER_AUTH_GATEWAY'));
                }
            }
        }
        if(!$this->_tableName){
        $this->_tableName=lcfirst(CONTROLLER_NAME);
       }        
        // 创建自定义模型类
        // $this->_db = D($this->_tableName);
        // 权限校验
    }
    
    public function index() {
        if(isset($_POST['numPerPage'])){
                $numPerPage=$_POST['numPerPage'];
        }else{
            $numPerPage=5;
        }
        if(isset($_POST['pageNum'])){
            $currentPage=$_POST['pageNum'];
        }else{
            $currentPage=1;
        }
        $count= $this->_db->count();
        $Page = new \Think\Page($count,$numPerPage);
        $show = $Page->show();// 分页显示输出
        $list = $this->_db->limit((($currentPage-1)*$numPerPage).','.$numPerPage)->select();
        $this->assign('results',$list);// 赋值数据集
        $this->assign('numPerPage',$numPerPage);
        $this->assign('totalCount',$count);
        $this->assign('currentPage',$currentPage);
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

        $data = I('post.');
        //dump($data);exit;
        //更新数据到数据表中
        $result = $this->_db->save($data);

        // 善后处理
        if ($result) {
            $this->success($this->_tableName . '表数据更新成功！');
        } else {
            $this->error($this->_tableName . '表数据更新失败！');
        }
    }

    public function destroy()
    {
        $data = I('get.id');
       //删除数据从数据库
        $result = $this->_db->where("id=$data")->delete();
        if ($result) {
            $this->success($this->_tableName . '表数据删除成功！');
        } else {
            $this->error($this->_tableName . '表数据删除失败！');
        }
    }
    public function content(){
        $id= I('get.id');
        $res = $this->_db->find($id);
        $this->assign('row', $res['content']);
        $this->display();
    }
    public function search(){
    if(isset($_GET['condition'])){
      $data=$_GET['condition'];
      $result=$this->_db->where("name like '%$data%'")->select();
      $this->assign('result',$result);
      $this->display();
    }
    }    
}