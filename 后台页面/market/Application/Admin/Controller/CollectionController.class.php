<?php
/**
 * Created by PhpStorm.
 * User: z
 * Date: 2016/12/1
 * Time: 8:18
 */

namespace Admin\Controller;
header('Content-Type:text/html; charset=utf-8');
use Common\Controller\RestfulController;

class CollectionController extends RestfulController
{
    public function index(){
        $where['user_id'] = I('get.id');
        $CollectionModel = M('collection');
        $GoodsModel = M('goods');
        $goodslist_id = $CollectionModel->where($where)->field('goods_id')->select();
        foreach($goodslist_id as $id) {
            $list[] = $id['goods_id'];
        }
        $map['id']  = array('in',$list);
        $goodslist = $GoodsModel->where($map)->select();
        $url = 'http://' . $_SERVER['SERVER_NAME'] . '/company/Public';
        $this->assign('img_url',$url);
        $this->assign('goodslist',$goodslist);
        $this->display();
    }
    public function destroy() {
        $map['goods_id'] = I('get.id');
        $CollectionModel = M('collection');
        $result = $CollectionModel->where($map)->delete();
        if($result) {
            $this->success();
        }else{
            $this->error();
        }
    }

}