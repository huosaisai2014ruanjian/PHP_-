<?php
/*
 * document：个人中心
 * User: 马豪珍
 * Date: 2016-12-06
 * Time: 09:30
 */
namespace Home\Controller;
use Think\Controller;

class ChuanglanSmsApi {
    public function sendSMS($tos,$content){
          $url="http://service.winic.org:8009/sys_port/gateway/?";
          $data = "id=%s&pwd=%s&to=%s&content=%s&time=";
          $id = iconv('UTF-8','GB2312','kdvnszrqu');
          $pwd = '384913ldh';
          $to = $tos; 
          $content = urlencode(iconv("UTF-8","GB2312",$content)); 
          $rdata = sprintf($data, $id, $pwd, $to, $content);
          
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_POST,1);
          curl_setopt($ch, CURLOPT_POSTFIELDS,$rdata);
          curl_setopt($ch, CURLOPT_URL,$url);
          curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
          //´òÓ¡Ò»ÏÂ²ÎÊý ¿ÉÒÔ¿´µ½ ÔÚGB2312±àÂëÄ£Ê½µÄä¯ÀÀÆ÷ÏÂ ÏÔÊ¾×Ö·ûÊÇÕý³£µÄ
          $result = curl_exec($ch);
          curl_close($ch);
          $result = substr($result,0,3);
          if($result=="000")
          {
              return 'true';
           }
          else
          {
              return 'false';
           }
    }
    //魔术获取
    public function __get($name){
        return $this->$name;
    }
    
    //魔术设置
    public function __set($name,$value){
        $this->$name=$value;
    }    
}


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
        $personals = M('users')->where("market_users.id = $id")->find(); 
        $this->assign('personals', $personals);
        $this->display();
    }
    public function CertificateAuthority(){
        $id=1;
        if (IS_POST) {
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
                     // dump($info);exit;
                //4.获取上传后的信息
                    if($info){
                        //针对多文件
                        foreach ($info as $key => $value) {
                            //获取文件的保存目录
                            $saveFileName=$value['savepath'].$value['savename'];  
                            //把图片存路径写入到$data中    
                            $data['card']=$saveFileName;
                        }
                    }else{
                        $this->error('文件上传失败！');
                        exit(); 
                    }
            // 插入到数据表中
            $result =M('users')->add($data);
            // 善后处理
            if ($result) {
                $this->success($this->_tableName . '表数据插入成功！');
            } else {
                $this->error($this->_tableName . '表数据插入失败！');
            }  
        }
        else{
            $this->display();
        }              
    }     
}

