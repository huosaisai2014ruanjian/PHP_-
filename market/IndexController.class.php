<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function receiveMessage()
    {
    	//仅验证时使用
        //\Common\Library\Wechat::valid();
        $wechatObj = new \Common\Library\Wechat();
          //1) 接收数据（xml数据包）
    $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];//php7无效
    //$postStr = file_get_contents("php://input");
    file_put_contents('log.xml',$postStr,FILE_APPEND);
    //2) 转成xml对象
    libxml_disable_entity_loader(true);
    $xmlObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
     
    $content = $xmlObj->Content;
    error_log($xmlObj."\r\n",3,'log.log');
    $toUserName = $xmlObj->FromUserName;
    $FromUserName = $xmlObj->ToUserName;
   
      //判断用户消息类型
      $type = $xmlObj->MsgType; 
      
      switch ($type) {
	   case 'text':
		//回复信息
	
	    switch ($xmlObj->Content) {
	    	case '图文':
	    	
	    	//从数据库news中获取数据
	    	$new = M('news');
	    	$result = $new->where()->select();
	    	
	    	$wechatObj->responseImageTextMsg($toUserName,$FromUserName,$result,count($result));
	    	break;

	      

	       default:
	       
	        //调用回复消息内容
	       $wechatObj->responseTextMsg($toUserName,$FromUserName,$content);
	    		break;
	    }
	   
		break;
		case 'event':
	      
	      switch($xmlObj->Event) {
	       case 'CLICK':
           switch($xmlObj->EventKey) {
           case 'V10003':
           	$new = M('news');
	    	$result = $new->where()->select();
	    	$wechatObj->responseImageTextMsg($toUserName,$FromUserName,$result,count($result));
	        break;
           }
           break;
 	      }
 	      break;
	   default:
		# code...
		break;
}
    

     
    }
    public function te(){
    	$new = M('news');
	    	$result = $new->where()->select();
	    	dump($result);
    }

}