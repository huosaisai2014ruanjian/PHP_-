<?php
namespace Common\Library;
//define your token

//define("TOKEN", "zhangzhimin");
define('SAPPID', "wx70d0f4e9a9dba3ea");
define('SSECRET',"a2a2489a996c00465d69c0623ec7a5a3");
// define('APPID', "wx3351f7d4358315ee");
// define('SECRET',"479763fa9047220098398eaf9714e1d0");
define('APPID', "wx0ba3a3580561bc85");
define('SECRET',"fdc71908601e1dc5cf9b679fd904e7a9");


class Wechat
{
	public function valid()
    {
        $echoStr = $_GET["echostr"];

        //清空缓存
        ob_clean();
        //valid signature , option
        if(self::checkSignature()){
        	echo $echoStr;
        	exit;
        }
    }
/**
 * 1、接收用户发送过来的数据
 */
public function receiveMessage(){
    //1) 接收数据（xml数据包）
    //$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];//php7无效
    $postStr = file_get_contents("php://input");
    file_put_contents('log.xml',$postStr,FILE_APPEND);
    //2) 转成xml对象
    libxml_disable_entity_loader(true);
    $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
    //3) 返回xml对象
    return $postObj;
}
/**
 * 2、回复文本消息函数
 */
public function responseTextMsg($toUserName,$fromUserName,$content){
    //1) 组织xml数据包
    $xmlStr = "<xml>
<ToUserName><![CDATA[%s]]></ToUserName>
<FromUserName><![CDATA[%s]]></FromUserName>
<CreateTime>%s</CreateTime>
<MsgType><![CDATA[text]]></MsgType>
<Content><![CDATA[%s]]></Content>
</xml>";
$resultStr = sprintf($xmlStr, $toUserName,$fromUserName,time(),$content);
file_put_contents('log.xml',$resultStr,FILE_APPEND);
    //2) 发送消息
    echo $resultStr;
}
/***
   微信支付统一下单接口
*/
   public function weixincheck($appid,$mch_id,$nonce_str,$sign,$body,$out_trade_no,$total_fee,$spbill_create_ip,$notify_url,$trade_type,$openid){
       $xmlStr="<xml>
    <appid><![CDATA[$appid]]></appid>
    <body><![CDATA[$body]]></body>
    <mch_id><![CDATA[$mch_id]]></mch_id>
    <nonce_str><![CDATA[$nonce_str]]></nonce_str>
    <sign><![CDATA[$sign]]></sign>
    <notify_url><![CDATA[$notify_url]]></notify_url>
    <openid><![CDATA[$openid]]></openid>
    <out_trade_no><![CDATA[$out_trade_no]]></out_trade_no>
    <spbill_create_ip><![CDATA[$spbill_create_ip]]></spbill_create_ip>
    <total_fee><![CDATA[$total_fee]]></total_fee>
    <trade_type><![CDATA[$trade_type]]></trade_type>
 </xml> ";
 
// $xmlStr="<xml><appid>wx2421b1c4370ec43b</appid>
//     <attach>支付测试</attach>
//     <body>JSAPI支付测试</body>
//     <mch_id>10000100</mch_id>
//     <nonce_str>1add1a30ac87aa2db72f57a2375d8fec</nonce_str>
//     <notify_url>http://wxpay.wxutil.com/pub_v2/pay/notify.v2.php</notify_url>
//     <openid>oUpF8uMuAJO_M2pxb1Q9zNjWeS6o</openid>
//     <out_trade_no>1415659990</out_trade_no>
//     <spbill_create_ip>14.23.150.211</spbill_create_ip>
//     <total_fee>1</total_fee>
//     <trade_type>JSAPI</trade_type>
//     <sign>0CB01533B8C1EF103065174F50BCA001</sign></xml>";   
    $url = "https://api.mch.weixin.qq.com/pay/unifiedorder";
      $res = $this->weixinxiadan($url,$xmlStr);
      //dump($res);
   }
/***
   执行微信统一下单
*/
   public function weixinxiadan($url,$xmlStr){
        $curl = curl_init ($url);//初始化CURL会话
    dump(1);
    curl_setopt ( $curl, CURLOPT_POST, 1 );
    curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
   
    curl_setopt ( $curl,  CURLOPT_SSL_VERIFYPEER, FALSE );
    curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, false );
    curl_setopt ( $curl, CURLOPT_POSTFIELDS, $xmlStr);
    $result = curl_exec ($curl);
   
      if(curl_errno()==0){
        dump($result);
        // $result=json_decode($result,true);
        // return $result;
        // dump($result);
        dump(2);
      }else {
        dump(curl_error($curl));
       // dump(3);
      }
    curl_close ( $curl );
   }
/***
   回复客服消息
*/
   public function responseServiceMsg($toUserName,$FromUserName){
    //1) 组织xml数据包
    $xmlStr = "<xml>
   <ToUserName><![CDATA[%s]]></ToUserName>
   <FromUserName><![CDATA[%s]]></FromUserName>
   <CreateTime>%s</CreateTime>
   <MsgType><![CDATA[transfer_customer_service]]></MsgType>
   <TransInfo>
         <KfAccount><![CDATA[test1@test]]></KfAccount>
     </TransInfo>
   </xml>";
   $resultStr = sprintf($xmlStr, $toUserName,$fromUserName,time());
   //file_put_contents('log.xml',$resultStr,FILE_APPEND);
    //2) 发送消息
    echo $resultStr;
   }
/**
 * 3、回复图片消息
 */
public function responseImageMsg(){

}

/**
 * 4、回复语音消息
 */
public function responseVoiceMsg(){

}

/**
 * 5、回复视频消息
 */
public function responseVideoMsg(){

}
/**
 * 6、回复图文消息
 */
public function responseImageTextMsg($toUserName,$fromUserName,$result,$num){
    error_log('response', 3, 'log.log');
    $time = time();
    //1、组织xml数据包
    $tpl="<xml>
<ToUserName><![CDATA[$toUserName]]></ToUserName>
<FromUserName><![CDATA[$fromUserName]]></FromUserName>
<CreateTime>$time</CreateTime>
<MsgType><![CDATA[news]]></MsgType>
<ArticleCount>$num</ArticleCount>
<Articles>";

foreach($result as $tmp){
    $title=$tmp['title'];
    $description=$tmp['description'];
    $picurl = "__PUBLIC__/".$tmp['thumb'];
    $url = $tmp['url'];
    $tpl .="<item>
<Title><![CDATA[$title]]></Title> 
<Description><![CDATA[$description]]></Description>
<PicUrl><![CDATA[$picurl]]></PicUrl>
<Url><![CDATA[$url]]></Url>
</item>";
file_put_contents('imageText.xml',$tpl);
}

$tpl .= "</Articles>
</xml>";
    //2、发送消息给用户
    echo $tpl;
}
/**
 * 7、回复音乐消息
 */
public function responseMusicMsg(){

}


public function responseMsg()
{
	//get post data, May be due to the different environments
	$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

  	//extract post data
	if (!empty($postStr)){
            /* libxml_disable_entity_loader is to prevent XML eXternal Entity Injection,
               the best way is to check the validity of xml by yourself */
            libxml_disable_entity_loader(true);
          	$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $fromUsername = $postObj->FromUserName;
            $toUsername = $postObj->ToUserName;
            $keyword = trim($postObj->Content);
            $time = time();
            $textTpl = "<xml>
						<ToUserName><![CDATA[%s]]></ToUserName>
						<FromUserName><![CDATA[%s]]></FromUserName>
						<CreateTime>%s</CreateTime>
						<MsgType><![CDATA[%s]]></MsgType>
						<Content><![CDATA[%s]]></Content>
						<FuncFlag>0</FuncFlag>
						</xml>";             
			if(!empty( $keyword ))
            {
          		$msgType = "text";
            	$contentStr = "Welcome to wechat world!";
            	$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
            	echo $resultStr;
            }else{
            	echo "Input something...";
            }

    }else {
    	echo "";
    	exit;
    }
}
	
private function checkSignature()
{
    // you must define TOKEN by yourself
    if (!defined("TOKEN")) {
        throw new Exception('TOKEN is not defined!');
    }
    
    $signature = $_GET["signature"];
    $timestamp = $_GET["timestamp"];
    $nonce = $_GET["nonce"];
    		
	$token = TOKEN;
	$tmpArr = array($token, $timestamp, $nonce);
    // use SORT_STRING rule
	sort($tmpArr, SORT_STRING);
	$tmpStr = implode( $tmpArr );
	$tmpStr = sha1( $tmpStr );
	
	if( $tmpStr == $signature ){
		return true;
	}else{
		return false;
	}
}

/**
 * 创建菜单
 */
/*
public function createMenu($url, $menu){
    $curl = new Curl\Curl();
    $curl->setOpt(CURLOPT_SSL_VERIFYPEER, FALSE);//加上这条就可以啦！
    $curl->post($url, $menu);
    if($curl->error){
        echo $curl->error_code;//错误代码
        echo $curl->error_message;//错误代码
    }else{
        echo $curl->response;//返回信息
    }
}
*/
public function createMenu($url,$menu){
    $curl = curl_init ($url);//初始化CURL会话
    $timeout = 5;
    
    curl_setopt ( $curl, CURLOPT_POST, 1 );
    curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt ( $curl, CURLOPT_CONNECTTIMEOUT, $timeout );
    curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, FALSE );
    curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, false );
    curl_setopt ( $curl, CURLOPT_POSTFIELDS, $menu);
    $result = curl_exec ($curl);
   
      if(curl_errno()==0){
        $result=json_decode($result,true);
        return $result;
      }else {
        return curl_error($curl);
      }
    curl_close ( $curl );
}
public function getAccessToken(){
     
     //打开缓存文件
     $str = trim(file_get_contents('access_token.php'));
     $access_token = json_decode($str);
     if($access_token->expire_time < time() || !$access_token){//access_token过期了或缓存文件未创建
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".APPID."&secret=".SECRET;  
        $newStr = file_get_contents($url);
        $access_token = json_decode($newStr);
        $access_token->expire_time=time()+7000;
        file_put_contents('access_token.php',json_encode($access_token));
     }
     return $access_token->access_token;
}
/***
 获取服务号的token
*/
public function getserAccessToken(){
     
     //打开缓存文件
     $str = trim(file_get_contents('serviceAccess_token.php'));
     $access_token = json_decode($str);
     if($access_token->expire_time < time() || !$access_token){//access_token过期了或缓存文件未创建
        $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".SAPPID."&secret=".SSECRET;  
        $newStr = file_get_contents($url);
        $access_token = json_decode($newStr);
        $access_token->expire_time=time()+7000;
        file_put_contents('serviceAccess_token.php',json_encode($access_token));
     }
     return $access_token->access_token;
}
public function addMedia($url,$filePath,$formData){
    $curl = curl_init ($url);//初始化CURL会话
    $timeout = 5;
    
    $data= array(
        "media"=>"@{$filePath}",
        'form-data'=>$formData
        );
    curl_setopt ( $curl, CURLOPT_POST, 1 );
    curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt ( $curl, CURLOPT_CONNECTTIMEOUT, $timeout );
    curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, FALSE );
    curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, false );
    curl_setopt ( $curl, CURLOPT_POSTFIELDS, $data );
    $result = curl_exec ($curl);
   
      if(curl_errno()==0){
        $result=json_decode($result,true);
        return $result;
      }else {
        return curl_error($curl);
      }
    curl_close ($curl);
}
public function getMediaList($url,$data){
    $curl = curl_init($url);  
    curl_setopt($curl, CURLOPT_HEADER, 0);//过滤头部  
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);//获取的信息以文件流的形式返回，而不是直接输出。 
    curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, FALSE ); 
    curl_setopt($curl,CURLOPT_POST,true); // post传输数据  
    curl_setopt($curl,CURLOPT_POSTFIELDS,$data);// post传输数据  
    $responseText = curl_exec($curl);  
    $res = json_decode($responseText, true); 
    curl_close($curl);  
      
    return $res;  
}
public function addNews($url,$data){
    $curl = curl_init ($url);
    curl_setopt ( $curl, CURLOPT_POST, 1 );
    curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt ( $curl, CURLOPT_CONNECTTIMEOUT, $timeout );
    curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, FALSE );
    curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, false );
    curl_setopt ( $curl, CURLOPT_POSTFIELDS, $data);
    $result = curl_exec ($curl);
    curl_close ($curl);
    if(curl_errno()==0){
        return $result;
      }else {
        dump(curl_errno($curl));
    }
}

public function getInfo($url, $data){
   $curl = curl_init ($url);
    curl_setopt ( $curl, CURLOPT_POST, 1 );
    curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, false );
    curl_setopt ( $curl, CURLOPT_POSTFIELDS, $data);
    $result = curl_exec ($curl);
    curl_close ($curl);
    if(curl_errno()==0){
        return $result;
      }else {
        dump(curl_errno($curl));
    } 
}

/**
 * 获取菜单数据
 */
public function menuView($url){
    $curl = curl_init ($url);
    curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, false );
    $result = curl_exec ($curl);
    curl_close ($curl);
    if(curl_errno()==0){
        return $result;
      }else {
        dump(curl_errno($curl));
    } 
}
 /***
  获取奇闻轶事
 */
  public function anecdotes($url,$header){
    $ch = curl_init($url);
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);
     curl_close ($curl);
    if(curl_errno()==0){
        return json_decode($res,true);
      }else {
        dump(curl_errno($curl));
    } 
        
  }
  /***
  获取所在城市为获取天气做准备
  */
  public function city($url,$header){
      $ch = curl_init($url);
    // 添加apikey到header
     curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);
     curl_close ($curl);
    if(curl_errno()==0){
        return json_decode($res,true);
      }else {
        dump(curl_errno($curl));
    } 

  }
  /***
  获取所在城市天气预报
  */
  public function weather($url,$header){
      $ch = curl_init($url);
    // 添加apikey到header
     curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res1 = curl_exec($ch);
     curl_close ($curl);
    if(curl_errno()==0){
        return json_decode($res1,true);
      }else {
        dump(curl_errno($curl));
    } 

  }
  /***
   删除图文列表
  */
   public function deletePictureText($url,$data)
   {
     $curl = curl_init ($url);
     curl_setopt ( $curl, CURLOPT_POST, 1 );
     curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
     curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, false );
     curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, false );
     curl_setopt ( $curl, CURLOPT_POSTFIELDS, $data);
     $result = curl_exec ($curl);
     curl_close ($curl);
     if(curl_errno()==0){
        return json_decode($result,true);
      }else {
        dump(curl_errno($curl));
    } 
   }

/***
  增加客服账号
*/
  public function account($url,$data){
      $curl = curl_init ($url);
     curl_setopt ( $curl, CURLOPT_POST, 1 );
     curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
     curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, false );
     curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, false );
     curl_setopt ( $curl, CURLOPT_POSTFIELDS, $data);
     $result = curl_exec ($curl);
     curl_close ($curl);
     if(curl_errno()==0){
        return json_decode($result,true);
      }else {
        dump(curl_errno($curl));
    } 
   }
 /***
   增加客服头像
 */  
 public function addImage($url,$formData){
      $curl = curl_init ($url);
     curl_setopt ( $curl, CURLOPT_POST, 1 );
     curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
     curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, false );
     curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, false );
     curl_setopt ( $curl, CURLOPT_POSTFIELDS, $formData);
     $result = curl_exec ($curl);
     curl_close ($curl);
     if(curl_errno()==0){
        return json_decode($result,true);
      }else {
        dump(curl_errno($curl));
    } 
   } 
  
 /***
  获取客服账户信息
 */
  public function getAccount($url){
     $curl = curl_init ($url);
     curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
     curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, false );
     curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, false );
     $result = curl_exec ($curl);
     curl_close ($curl);
     if(curl_errno()==0){
        return json_decode($result,true);
      }else {
        dump(curl_errno($curl));
      } 
    } 
  
  /***
   删除客服账号
  */
   public function deleteAccount($url){
     $curl = curl_init ($url);
     curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
     curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, false );
     curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, false );
     $result = curl_exec ($curl);
     curl_close ($curl);
     if(curl_errno()==0){
        return json_decode($result,true);
      }else {
        dump(curl_errno($curl));
      } 
    
  }
 










  }
?>