<?php
namespace Home\Controller;

use Think\Controller;

class JssdkController extends Controller
{

public function index()
{
  $jssdk=new \Common\Library\JSSDK('wx3351f7d4358315ee','479763fa9047220098398eaf9714e1d0'); 
  $signPackage = $jssdk->getSignPackage();
//统一支付下单接口为了获取prepay_id
  //1.组织数据
     $appid = "wx70d0f4e9a9dba3ea";  //公众账号ID
     $mch_id ="1413613802";          //商户号
     $nonce_str=$this->random();     //随机字符串
     $sign=$signPackage;             //签名           
     $body = "校园跳蚤市场-商品支付"; //商品描述
     $out_trade_no=$this->dingdanhao();//商户订单号
     $total_fee="1";                   //标价金额
     $spbill_create_ip="123.206.29.24"; //终端IP 不需要用户填写
     $notify_url="http://www.lansongs.com/index.php/home/pay/zhifu";//回调地址
     $trade_type="JSAPI";             //交易类型
     $openid=session('openid');//必传参数，获取用户openID；
     dump($signPackage);exit;
  $this->assign('signPackage',$signPackage);

  $this->display();

}
//获取随机字符串
  public function random(){
  	 $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $str = "";
    for ($i = 0; $i <32; $i++) {
      $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
    }
    return $str;
  }
//获取订单号32位
public function dingdanhao(){
    $time = (string)time();//10位
    //生成随机数
     $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $str = "";
    for ($i = 0; $i <22; $i++) {
      $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
    }
    $out_trade_no=$time.$str;
    return $out_trade_no;
}

}