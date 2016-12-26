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
    public function SendSMS($cellphone){
        $cellphone= I("get.cellphone");
        $chars = array(  "0", "1", "2",  "3", "4", "5", "6", "7", "8", "9" ); 
        $charsLen = count($chars) - 1; 
        shuffle($chars);   
        $vercode = ""; 
        $len=6;
        for ($i=0; $i<$len; $i++) 
        { 
            $vercode=$vercode . $chars[mt_rand(0, $charsLen)]; 
        }        
        // $content='【大学生跳蚤市场】您好，您的验证码是'.$vercode; 
        session('verify',$vercode); 


          // $url="http://service.winic.org:8009/sys_port/gateway/?";
          // $data = "id=%s&pwd=%s&to=%s&content=%s&time=";
          // $id = iconv('UTF-8','GB2312','kdvnszrqu');
          // $pwd = '384913ldh';
          // $to = $cellphone; 
          // $content = urlencode(iconv("UTF-8","GB2312",$content)); 
          // $rdata = sprintf($data, $id, $pwd, $to, $content);
          
          // $ch = curl_init();
          // curl_setopt($ch, CURLOPT_POST,1);
          // curl_setopt($ch, CURLOPT_POSTFIELDS,$rdata);
          // curl_setopt($ch, CURLOPT_URL,$url);
          // curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
          // //´òÓ¡Ò»ÏÂ²ÎÊý ¿ÉÒÔ¿´µ½ ÔÚGB2312±àÂëÄ£Ê½µÄä¯ÀÀÆ÷ÏÂ ÏÔÊ¾×Ö·ûÊÇÕý³£µÄ
          // $result = curl_exec($ch);
          // curl_close($ch);
          // $result = substr($result,0,3);
 //      dump($vercode);
 //        dump($cellphone);
 // dump($ch);
 // $a= array('mobile' => "$cellphone",'message' => "验证码：$vercode"."【大学生跳蚤市场】");
 //     dump($a);   exit;
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, "http://sms-api.luosimao.com/v1/send.json");

// curl_setopt($ch, CURLOPT_HTTP_VERSION  , CURL_HTTP_VERSION_1_0 );
// curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 8);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
// curl_setopt($ch, CURLOPT_HEADER, FALSE);

// curl_setopt($ch, CURLOPT_HTTPAUTH , CURLAUTH_BASIC);
// curl_setopt($ch, CURLOPT_USERPWD  , 'api:key-ec01b7664e1d172a2c0cbc74abbbc67c');

// curl_setopt($ch, CURLOPT_POST, TRUE);
// curl_setopt($ch, CURLOPT_POSTFIELDS, array('mobile' => "$cellphone",'message' => "验证码：$vercode"."【大学生跳蚤市场】"));

// $res = curl_exec( $ch );
// curl_close( $ch );


          echo $vercode;

          // if($result=="000")
          // {
          //     echo '发送成功';
          //  }
          // else
          // {
          //     return 'false';
          //  }
    }

    //个人中心
    public function zhanghuguanli(){
        $id=I('get.id');
        $center = M('users')->where("market_users.id = $id")->find();
        $this->assign('center', $center);
        $this->display();
    }
	//我的消息
    public function mynews(){
        $id=session('id');
        $tongzhi = M('system')->order('time desc')->limit(1)->select();
        $this->assign('tongzhi',$tongzhi);
        $messages = M('message')->join('market_goods on market_message.goods_id = market_goods.id')->join('market_users on market_message.fromuser_id = market_users.id')->where("market_message.touser_id=$id")->order('market_message.time desc')->select();
        $this->assign('messages',$messages);
        //dump($messages);exit;
        $this->display();
    }
	//订单
    public function mydingdan(){
      //获取数据库交易记录信息
         // dump($_POST);
        $id=session('id');
        $transaction = M('transaction')->join('market_users on market_transaction.buyer_id = market_users.id')->join('market_goods on market_transaction.goods_id = market_goods.id')->field(array('market_goods.name'=>'name','market_goods.description'=>'description','market_goods.photo'=>'photo','market_transaction.id'=>'id'))->where("market_users.id=$id and status=1")->order('time desc')->select();
        for ($i=0;$i<count($transaction);$i++)
        {
            $transaction[$i]['photo']=explode(';',$transaction[$i]['photo']);
            $transaction[$i]['photo']= $transaction[$i]['photo'][0];
        }
        $this->assign('transaction',$transaction);
        $this->display();
    }
    //删除订单
    public function delete(){
        $id=session('id');
        $transaction['status'] = 0;
        $a=array('status'=>0);
//        dump($a);exit;
        $b = M('transaction')->where("id = $id")->save($a);
        if($b){
            $this->redirect('mydingdan');
        }

    }
    //我的收藏
    public function mycollection(){
        if(I('get.status')){
            $this->assign('a',1);//默认显示右边
        }else{
            $this->assign('a',0);
        }        
        $id=session('id');
        $up = M('collection')->join('market_goods on market_collection.goods_id = market_goods.id')->where("market_collection.user_id = $id&&sp_status=1")->field(array('market_goods.name'=>'name','market_goods.description'=>'description','market_goods.photo'=>'photo','market_collection.id'=>'id','market_collection.goods_id'=>'goods_id'))->select();
        $down = M('collection')->join('market_goods on market_collection.goods_id = market_goods.id')->where("market_collection.user_id = $id&&sp_status<>1")->field(array('market_goods.name'=>'name','market_goods.description'=>'description','market_goods.photo'=>'photo','market_collection.id'=>'id','market_collection.goods_id'=>'goods_id'))->select();
//dump($up);exit;
        for ($i=0;$i<count($up);$i++)
        {
            $up[$i]['photo']=explode(';',$up[$i]['photo']);
            $up[$i]['photo']=$up[$i]['photo'][0];
        }
        for ($i=0;$i<count($down);$i++)
        {
            $down[$i]['photo']=explode(';',$down[$i]['photo']);
             $down[$i]['photo']=$down[$i]['photo'][0];
        }
        $this->assign('up',$up);
        $this->assign('down',$down);
        $this->display();
    }
    //删除收藏的商品

    public function deletesc(){
        // $name = getActionName();   //作为公共的函数使用时添加
        $adminUsersModel = D("collection"); //获取当期模块的操作对象
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
            if(I('post.status')){
                $this->redirect('mycollection',array('status'=>I('post.status')));
            }
            else{
                $this->redirect('mycollection');
            }
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
        $seller_id = session('id');;
        $manage = M('goods')->join('market_users on market_goods.seller_id = market_users.id')->where("market_goods.seller_id=$seller_id&&sp_status=1")->field(array('market_goods.name'=>'name','market_goods.description'=>'description','market_goods.photo'=>'photo','market_goods.id'=>'id'))->select();
        $down= M('goods')->join('market_users on market_goods.seller_id = market_users.id')->where("market_goods.seller_id=$seller_id&&sp_status<>1")->field(array('market_goods.name'=>'name','market_goods.description'=>'description','market_goods.photo'=>'photo','market_goods.id'=>'id','market_goods.sp_status'=>'status'))->select();
        for ($i=0;$i<count($manage);$i++)
        {
            $manage[$i]['photo']=explode(';',$manage[$i]['photo']);
            $manage[$i]['photo']=$manage[$i]['photo'][0];
        }
        for ($i=0;$i<count($down);$i++)
        {
            $down[$i]['photo']=explode(';',$down[$i]['photo']);
            $down[$i]['photo']=$down[$i]['photo'][0];
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
        $b = M('goods')->where("id = $id")->save($a);
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
        $b = M('goods')->where("id = $id")->save($a);
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
        $b = M('goods')->where("id = $id")->save($a);
        if($b){
            $this->redirect('spguanli');
        }
    }
    //删除商品
    public function deletesp(){
        $id=I('get.id');
        $b = M('goods')->delete($id);
        if($b){
            $this->redirect('spguanli');
        }
    }
    //个人中心
    public function percenter(){
        //$id = I('get.id');
        $id=session('id');
        //dump($id);
        $personals = M('users')->where("market_users.id = $id")->find(); 
        $this->assign('personals', $personals);
        $this->display();
    }
    public function sex(){
        if(IS_POST){
            $id=session('id');
            $data=I('post.');
//           dump($data);
//            $id = $_SESSION['id'];
//            dump($id);
            $a=M('users')->where("id=$id")->find();
//            dump($a);
//            dump($a['sex']);
           if($a['sex']==$data['sex']){
               $this->redirect('percenter');
           } else{
               $result =  M('users')->where("id=$id")->save($data);
               if ($result) {
                $this->redirect('percenter');
            }
           }
           // dump($result);
            // 善后处理
        }else{
            $this->display();
        }
    }
    public function editname(){
        if(IS_POST){
            $id=session('id');
            $data = I('post.');
            $result = M('users')->where("id=$id")->save($data);
            if($result){
                $this->redirect('percenter');
            }
        }else{
            $this->display();
        }
    }
    public function birth(){
        if(IS_POST){
            $data = I('post.');
            $id=session('id');
            $result = M('users')->where("id=$id")->save($data);
            if($result){
                $this->redirect('percenter');
            }
        }else{
            $this->display();
        }
    }
    public function CertificateAuthority(){
        $id=1;
        if (IS_POST) {
            // dump(session());

            // exit;
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
                 //   dump($data);exit;
            $result =M('users')->where("id=$id")->save($data);
            // 善后处理
            if ($result) {
                $this->redirect('Personal/rzsuccess');
            } else {
                $this->error($this->_tableName . '表数据插入失败！');
            }  
        }
        else{
            $this->display();
        }              
    }     
    public function rzsuccess(){
        $this->display();
    }
}

