<?php

namespace Home\Controller;


use Think\Controller;

class EditaddressController extends Controller
{
    public function editaddress(){
        $id=I('get.id');
        $address = M("address")->where("id = $id")->find();
        // dump($address);
        // exit;
        $this->assign('address',$address);
        
        $this->display();

    }
   
    public function doupload(){
        // 获取POST数据
        $data = I('post.');

       
        $id = $data['id'][''];

        // 插入到数据表中
        // $result['time']=date('y-m-d h:i:s',time());
      $b = M('address')->where("id = $id")->save($data);
        // 善后处理
        if ($b) {
            $this->success('保存成功！');
        } else {
            $this->error('发布失败');
        }

    }

    }

