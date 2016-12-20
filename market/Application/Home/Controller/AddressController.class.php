<?php
/**
 * Created by PhpStorm.
 * User: 兰天旭
 * Date: 2016/12/20
 * Time: 15:22
 */

namespace Home\Controller;


use Common\Controller\RestfulController;

class AddressController extends RestfulController
{
    public function index(){

        $users = M("users")->select();

        $this->assign('users',$users);
        $category = M("category")->select();
        $this->assign('category',$category);
        $this->display();

    }
    public function doupload(){
        // 获取POST数据
        $data = I('post.');

        // dump($data);exit;

        // 插入到数据表中
        // $result['time']=date('y-m-d h:i:s',time());
        $result = $this->_db->add($data);
        // 善后处理
        if ($result) {
            $this->success('保存成功！');
        } else {
            $this->error('发布失败');
        }

    }

    }

