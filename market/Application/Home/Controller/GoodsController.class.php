<?php
/**
 * Created by PhpStorm.
 * User: 周博学
 * Date: 2016/12/6
 * Time: 15:22
 */

namespace Home\Controller;


use Common\Controller\RestfulController;

class GoodsController extends RestfulController
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

        //dump($data);exit;
        //上传文件
        //1.创建对象
        $upload = new \Think\Upload();// 实例化上传类
        //2.设置参数
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Public';//上传根目录
        $upload->savePath  =     '/uploads/'; // 设置附件上传（子）目录
        // 开启子目录保存 并调用自定义函数get_user_id生成子目录
        $upload->autoSub = true;
        $upload->subName = 'goodsphoto';
        //3.执行文件上传操作（上传后的处理）
        $info=$upload->upload();
        //dump($info);exit;
        //4.获取上传后的信息
        if($info){
            //dump($info);
            //针对多文件
            foreach ($info as $key => $value) {
                //获取文件的保存目录
                $saveFileName=$value['savepath'].$value['savename'];
                //把图片存路径写入到$data中
                $data['photo']=$data['photo'].';'.$saveFileName;
                // $data[$key]=$saveFileName ;
            }
            $data['photo']=substr($data['photo'], 1);
            //dump($data);exit;
        }else{
            $this->error($upload->getError());
            exit();
        }
        // 插入到数据表中
        // $result['time']=date('y-m-d h:i:s',time());
        $result = $this->_db->add($data);
        // 善后处理
        if ($result) {
           // $this->success('发布成功！');
        	$this->redirect("home/goodDetail/index/id/$result");
        } else {
            $this->error('发布失败');
        }

    }

    }

