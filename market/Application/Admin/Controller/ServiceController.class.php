/***
 * document：客服
 * User: 霍赛赛
 */
<?php
namespace Admin\Controller;
use Think\Controller;
class ServiceController extends Controller{
   /***
   增加客服账号
   **/
   public function account(){
   	//获取服务号的token
     //$access_token=\Common\Library\Wechat::getserAccessToken();
    $access_token = "";
     $url ="https://api.weixin.qq.com/customservice/kfaccount/add?access_token=$access_token";
     $data ='{
          "kf_account" : "saisai@php内训项目",
          "nickname" : "客服saisai"
       }';
      $result=\Common\Library\Wechat::account($url,$data); 
      dump($result['errmsg']);
   //    if($result['errmsg']=='ok'){
   //          //客服账号添加成功邀请绑定客服账号
   //    	   $url1='https://api.weixin.qq.com/customservice/kfaccount/inviteworker?access_token=$access_token';
   //    	   $data ='{
      	   	
   //                  "kf_account" : "test1@test",
   //                   "invite_wx" : "test_kfwx"    
   //            }';
   //    $result=\Common\Library\Wechat::account($url,$data);   
   //    if($result['errmsg']=='ok') {
   //    	  //邀请成功，增加客服头像
   //    	$this->display();
   //    }
   //   else{
   //   	echo $result;
   //   }
   // }
 }
   /***
   添加客服头像
   */
    public function addImage(){
    	//文件上传获取表单数据
    	$data=I('post.');
    	$filename=$data['filename'];
    	$type=$data['type'];
    	$access_token=\Common\Library\Wechat::getserAccessToken();
    	$kf_account='';
    	$url="https://api.weixin.qq.com/customservice/kfaccount/uploadheadimg?access_token=ACCESS_TOKEN&kf_account=$kf_account";
    	$formData=array(
			'filename'=>$_SERVER['DOCUMENT_ROOT'].$filename,
			'filelengh'=>filesize($filePath),
			'content-type'=>$type
		);
		$result=\Common\Library\Wechat::addImage($url,$formData);
    }
    /***
    获取客服账户信息
    */
    public function getAccount(){
    	$access_token=\Common\Library\Wechat::getserAccessToken();
    	$url='https://api.weixin.qq.com/cgi-bin/customservice/getkflist?access_token=$access_token';
    	$result= \Common\Library\Wechat::getAccount($url);
    	$this->assign('result',$result);
    	$this->display();
    }
    /***
    删除客服账号
    */
    public function deleteAccount(){
    	$access_token=\Common\Library\Wechat::getserAccessToken();
    	$kf_account='';
    	$url='https://api.weixin.qq.com/customservice/kfaccount/del?access_token=$access_token&kf_account=$kf_account';
    	$result= \Common\Library\Wechat::deleteAccount($url);
    	dump($result);
    }
    
}
