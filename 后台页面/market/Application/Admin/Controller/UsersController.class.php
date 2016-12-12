<?php
/**
 * Created by PhpStorm.
 * User: 王振儒
 * Date: 2016/12/5
 * Time: 15:07
 */

namespace Admin\Controller;


use Common\Controller\RestfulController;

class UsersController extends RestfulController
{
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
        $url = 'http://' . $_SERVER['SERVER_NAME'] . '/market/Public';
        $count= $this->_db->count();
        $Page = new \Think\Page($count,$numPerPage);
        $show = $Page->show();// 分页显示输出
        $list = $this->_db->limit((($currentPage-1)*$numPerPage).','.$numPerPage)->select();
        $this->assign('results',$list);// 赋值数据集
        $this->assign('numPerPage',$numPerPage);
        $this->assign('totalCount',$count);
        $this->assign('currentPage',$currentPage);
        $this->assign('img_url',$url);
        $this->display();
    }
    public function create()
    {
        $CollegeModel = M("college");
        $list = $CollegeModel->select();
        $this->assign('college',$list);
        $this->display();
    }
    public function add() {
        $userModel = M('Users');
        $map = I("post.");
        //上传头像信息
        if (!empty($_FILES)) {
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =     './Public';//上传根目录
            $upload->savePath  =     '/uploads/'; // 设置附件上传（子）目录
            $upload->autoSub = true;
            $upload->subName = 'usersphoto';
            $info=$upload->upload();
            if ($info) {
                $map['head'] = $info['head']['savepath'] . $info['head']['savename'];
                $map['card'] = $info['card']['savepath'] . $info['card']['savename'];
            }
        }
        $result = $userModel->add($map);
        if($result) {
            $this->success('数据添加成功');
        }else{
            $this->error('数据添加失败');
        }
    }
    public function edit() {
        $id = I('get.id');
        $College = M('college');
        $result = $this->_db ->find($id);
        $college = $College->select();
        $this->assign('college',$college);
        $this->assign('users',$result);
        $this->display();
    }    
    public function update()
    {
        $userModel = M('Users');
        $map = I("post.");
        //上传头像信息
        if (!empty($_FILES)) {
            $info = '';
            $upload = new \Think\Upload(); //  实例化上传类
            $upload->maxSize = 3145728; //  设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); //  设置附件上传类
            $upload->rootPath = './Public';//上传根目录
            $upload->savePath = '/uploads/'; // 设置附件上传（子）目录
            // 开启子目录保存 并调用自定义函数get_user_id生成子目录
            $upload->autoSub = true;
            $upload->subName = 'usersphoto';
            $info = $upload->upload();
            if ($info) {
                $map['head'] = $info['head']['savepath'] . $info['head']['savename'];
                $map['card'] = $info['card']['savepath'] . $info['card']['savename'];
            }
        }
        $result = $userModel->save($map);
        if($result) {
            $this->success();
        }else{
            $this->error('数据添加失败');
        }
    }


}