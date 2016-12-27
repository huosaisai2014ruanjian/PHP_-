<?php
/**
 * document：支付功能
 * User: 霍赛赛、兰天旭
 * Date: 2016/12/7
 * Time: 11:00
 */
namespace Home\Controller;

use Think\Controller;
use Common\Controller\RestfulController;

class PayController extends Controller
{        
     public function index(){     
     }
     public function Pay(){
       //统一支付下单接口为了获取prepay_id
  //1.组织数据t
     $appid = "wx70d0f4e9a9dba3ea";  //公众账号ID
    
     $mch_id ="1413613802";          //商户号
     $nonce_str=$this->random();     //随机字符串
     $sign=$this->signature();             //签名           
     $body = "Tencenttopupcenter-prepaidphoneQQmembers"; //商品描述
     $out_trade_no=$this->dingdanhao();//商户订单号
     $total_fee="1";                   //标价金额
     $spbill_create_ip="123.206.29.24"; //终端IP 不需要用户填写
     $notify_url="http://www.lansongs.com/market/test.php";//回调地址
     $trade_type="JSAPI";             //交易类型
     $openid="oCUy_waN_G1OFUMu9BTgozgikrY4";//必传参数，获取用户openID；
     $wechat = new \Common\Library\Wechat();
     //$wechat->weixincheck($appid,$mch_id,$nonce_str,$sign,$body,$out_trade_no,$total_fee,$spbill_create_ip,$notify_url,$trade_type,$openid);
    //获取订单的信息
    $where=I('get.');//从商品列表页获取商品ID
    $good = M('Goods')->where($where)->find();//找到商品
    $arr=explode(';',$good['photo']);//将图片URL分割 存到数组
    $len=count($arr);
    for ($j=0; $j < $len; $j++) {
        $good ['image'][]=$arr[$j];
    }
    $sellid = $good['seller_id'][''];//卖家ID
    $user = M('users')->where($sellid)->find();//dump($user);exit; //以卖家ID得到该卖家信息
    $message= M('message')->where($sellid)->find();
            //dump($good['image']['1']);exit;
    $good1= $good['image']['1'];

    //dump($message);exit;
    $this->assign('nonce',$appid);
    $this->assign('user',$user);
    $this->assign('good',$good);//分好的数组 单个图片URL传到VIEW
    $this->assign('message',$message);
    $this->assign('good1',$good1);
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
     $chars = "0123456789";
    $str = "";
    for ($i = 0; $i <4; $i++) {
      $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
    }
    $out_trade_no=$time.$str;
   // dump($out_trade_no);
    return $out_trade_no;
   }
//获取签名
   public function signature(){
    $appid = "wx70d0f4e9a9dba3ea";  //公众账号ID
     $mch_id ="1413613802";          //商户号
     $nonce_str=$this->random();     //随机字符串
     $body = "Tencenttopupcenter-prepaidphoneQQmembers"; //商品描述
     $out_trade_no=$this->dingdanhao();//商户订单号
     $total_fee="1";                   //标价金额
     $spbill_create_ip="123.206.29.24"; //终端IP 不需要用户填写
     $notify_url="http://www.lansongs.com/market/test.php";//回调地址
     $trade_type="JSAPI";             //交易类型
     $openid="oCUy_waN_G1OFUMu9BTgozgikrY4";//必传参数，获取用户openID；
     $stringA = "appid=$appid&body=$body&mch_id=$mch_id&nonce_str=$nonce_str&notify_url=$notify_url&openid=$openid&out_trade_no=$out_trade_no&spbill_create_ip=$spbill_create_ip&total_fee=$total_fee&trade_type=$trade_type";
     $key = "a2a2489a996c00465d69c0623ec7a5a3"; //秘钥
     $stringSignTemp = MD5($stringA.$key);
     //dump($stringSignTemp);
      $sign = strtoupper($stringSignTemp); //将所有的字符转换为大写
      //dump($sign);
      return $sign;

   }
}