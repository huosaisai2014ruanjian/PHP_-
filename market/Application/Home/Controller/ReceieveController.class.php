<?php
/*
 * document：微信接收信息
 * User: 霍赛赛
 * Date: 2016-12-06
 * Time: 10:24
 */
  namespace Home\Controller;
  use Think\Controller;
  class ReceieveController extends Controller{
      
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
          $toUserName = $xmlObj->FromUserName;
          $FromUserName = $xmlObj->ToUserName;
         //判断用户消息类型
        $type = $xmlObj->MsgType; 
        switch ($type) {
		     case 'event':
	       switch($xmlObj->Event) {
          case 'subscribe':
           $new = M('news');
           $result = $new->where()->select();
           $wechatObj->responseImageTextMsg($toUserName,$FromUserName,$result,count($result));
          break;
           }
           break;
	     default:
		  //转至客服系统
          $wechatObj->responseServiceMsg($toUserName,$FromUserName);
		   break;
      }
    

     
    }
         
  }