<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2016/12/1
 * Time: 8:18
 */

namespace Admin\Controller;


use Common\Controller\RestfulController;

class UsersController extends RestfulController
{
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
            $upload->savePath = './Public/Uploads/';
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