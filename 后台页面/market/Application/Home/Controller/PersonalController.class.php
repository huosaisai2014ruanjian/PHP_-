<?php
/*
 * document：个人中心
 * User: 马豪珍
 * Date: 2016-12-06
 * Time: 09:30
 */
namespace Home\Controller;

use Think\Controller;

class PersonalController extends Controller {
	//我的消息
    public function mynews(){
      //获取数据库聊天信息
		$chats =  M('market_chat')->join('market_users on market_chat.fromuser_id = market_users.id')->order('time desc')->select();
		$this->assign('chats',$chats);
        $tongzhi = M('market_system')->order('time desc')->limit(1)->select();
        $this->assign('tongzhi',$tongzhi);
        $messages = M('market_message')->join('market_users on market_message.fromuser_id = market_users.id')->order('time desc')->select();
		$this->assign('messages',$messages);
        $this->display();
	}
	//订单
    public function mydingdan(){
      //获取数据库交易记录信息
         // dump($_POST);
        $transaction = M('market_transaction')->join('market_goods on market_transaction.goods_id = market_goods.id')->field(array('market_goods.name'=>'name','market_goods.description'=>'description','market_goods.photo'=>'photo','market_transaction.id'=>'id'))->order('time desc')->where('status=1')->select();
        for ($i=0;$i<count($transaction);$i++)
        {
            $transaction[$i]['photo']=explode(';',$transaction[$i]['photo'])[2];
        }
        $this->assign('transaction',$transaction);
        $this->display();
    }
    //删除订单
    public function delete(){
        $id=I('get.id');
        $transaction['status'] = 0;
        $a=array('status'=>0);
//        dump($a);exit;
        $b = M('market_transaction')->where("id = $id")->save($a);
        if($b){
            $this->redirect('mydingdan');
        }

    }
    //我的收藏
    public function mycollection(){
        $id=4;
        $up = M('market_collection')->join('market_goods on market_collection.goods_id = market_goods.id')->where("market_collection.user_id = $id&&sp_status=1")->field(array('market_goods.name'=>'name','market_goods.description'=>'description','market_goods.photo'=>'photo','market_collection.id'=>'id'))->select();
        $down = M('market_collection')->join('market_goods on market_collection.goods_id = market_goods.id')->where("market_collection.user_id = $id&&sp_status<>1")->field(array('market_goods.name'=>'name','market_goods.description'=>'description','market_goods.photo'=>'photo','market_collection.id'=>'id'))->select();
//dump($up);exit;
        for ($i=0;$i<count($up);$i++)
        {
            $up[$i]['photo']=explode(';',$up[$i]['photo'])[1];
        }
        for ($i=0;$i<count($down);$i++)
        {
            $down[$i]['photo']=explode(';',$down[$i]['photo'])[1];
        }
        $this->assign('up',$up);
        $this->assign('down',$down);
        $this->display();
    }
    //删除收藏的商品

    public function deletesc(){
        // $name = getActionName();   //作为公共的函数使用时添加
        $adminUsersModel = D("market_collection"); //获取当期模块的操作对象
        $id = $_POST['sp'];  //判断id是数组还是一个数值
        //dump($id);
        if(is_array($id)){
            $where = 'id in('.implode(',',$id).')';
        }else{
            $where = 'id='.$id;
        }
       //dump($where); EXIT;
        $b=$adminUsersModel->where($where)->delete();
        if($b){
            $this->redirect('mycollection');
        }
    }
//    public function deletesc(){
//        //dump(I('post.'));
//
//        $id=I('post.');
//        dump($id);
//        $b = M('market_collection')->delete($id);
//        if($b){
//            $this->redirect('mycollection');
//        }
//    }
    //商品管理
    public function spguanli(){
        $seller_id = 6;
        $manage = M('market_goods')->join('market_users on market_goods.seller_id = market_users.id')->where("market_goods.seller_id=$seller_id&&sp_status=1")->field(array('market_goods.name'=>'name','market_goods.description'=>'description','market_goods.photo'=>'photo','market_goods.id'=>'id'))->select();
        $down= M('market_goods')->join('market_users on market_goods.seller_id = market_users.id')->where("market_goods.seller_id=$seller_id&&sp_status<>1")->field(array('market_goods.name'=>'name','market_goods.description'=>'description','market_goods.photo'=>'photo','market_goods.id'=>'id','market_goods.sp_status'=>'status'))->select();
        for ($i=0;$i<count($manage);$i++)
        {
            $manage[$i]['photo']=explode(';',$manage[$i]['photo'])[1];
        }
        for ($i=0;$i<count($down);$i++)
        {
            $down[$i]['photo']=explode(';',$down[$i]['photo'])[1];
        }
//        dump($manage);
//       dump($down);
        $this->assign('manage',$manage);
        $this->assign('down',$down);
        $this->display();
    }
    //已售出商品
    public function saled(){
        $id=I('get.id');
        $a=array('sp_status'=>'已售出');
//        dump($id);
//        dump($a);exit;
        $b = M('market_goods')->where("id = $id")->save($a);
        if($b){
            $this->redirect('spguanli');
        }
    }
    //下架商品
    public function down(){
        $id=I('get.id');
        $a=array('sp_status'=>'已下架');
//        dump($id);
//        dump($a);exit;
        $b = M('market_goods')->where("id = $id")->save($a);
        if($b){
            $this->redirect('spguanli');
        }
    }
    //在售商品
    public function up(){
        $id=I('get.id');
        $a=array('sp_status'=>1);
//        dump($id);
//        dump($a);exit;
        $b = M('market_goods')->where("id = $id")->save($a);
        if($b){
            $this->redirect('spguanli');
        }
    }
    //删除商品
    public function deletesp(){
        $id=I('get.id');
        $b = M('market_goods')->delete($id);
        if($b){
            $this->redirect('spguanli');
        }
    }
    //个人中心
    public function percenter(){
        $id = 7;
        $personals = M('market_users')->where("market_users.id = $id")->find();  //将二维数组变成单个变量输出，不需要循环
        //dump($personals);exit;
        //$identify = M('market_users')->where("market_users.id = $id")->getField('rz_status');
        $this->assign('personals', $personals);
        $this->display();
//        if($identify==1) {
//            $personals = M('market_users')->where("market_users.id = $id")->find();  //将二维数组变成单个变量输出，不需要循环
//            $this->assign('personals', $personals);
//            $this->display();
//        }else{
//            $personals = M('market_users')->where("market_users.id = $id")->field(array('head','username','nickname','sex','birth'))->find();  //将二维数组变成单个变量输出，不需要循环
//            $personals['']
//            //dump($personals);exit;
//            $this->assign('personals', $personals);
//            $this->display();
//        }
    }
}

