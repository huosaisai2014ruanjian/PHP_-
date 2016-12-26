<?php
namespace Home\Controller;
//时间：2016.12.20 
//编写者：王振儒 

use Org\Util\Rbac;
use Think\Controller;
define('APPID', "wx0ba3a3580561bc85");
define('SECRET',"fdc71908601e1dc5cf9b679fd904e7a9");

class UsersController extends Controller {
    //授权注册，登录
    public function index(){
        /*接收code的值*/
        $code=I('code');
        //dump($code);
        /*2、通过code换取网页授权access_token,这里通过code换取的是一个特殊的网页授权
        access_token,与基础支持中的access_token(该access_token用于调用其他接口)
        不同。公众号可通过下述接口来获取网页授权access_token
        如果网页授权的作用域为snsapi_base，则本步骤中获取到网页
        授权access_token的同时，也获取到了openid，snsaqi_base式的网页授权流程即到此为止*/

        /*以下的调用接口正确返回时的jsno数据包里有
        access_token,expires_in,refresh_token,openid,scope*/
        $url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx0ba3a3580561bc85&secret=fdc71908601e1dc5cf9b679fd904e7a9&code=$code&grant_type=authorization_code";
        $curl = curl_init ($url);
        curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, false );
        $result = curl_exec ($curl);
        curl_close ($curl);
        if(curl_errno()==0){
            $result = json_decode($result);
            // dump($result);
            //3、拉取用户信息(需scope为snsapi_userinfo)
            $access_token=$result->access_token;
            $openid=$result->openid;
            /*开发者通过获取到access_token和openid值作为以下接口的参数来拉取用户信息
            正确返回的json数据包里的参数有openid(用户唯一标识)，nickname(用户昵称),
            sex(用户性别，值为1是男生，值为2是女生),province（个人资料填写的省份）,
            city（普通用户个人资料填写的城市）,country（国家）
            headimgurl（用户头像）,privilege（用户特权）,
            unionid（只有在用户将公众号绑定到微信开放平台账号后
            才会出现该字段）*/
            $url2="https://api.weixin.qq.com/sns/userinfo?access_token=$access_token&openid=$openid&lang=zh_CN";
            $curl = curl_init ($url2);
            curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
            curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, FALSE );
            curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, false );
            $result2 = curl_exec ($curl);
            $user = M('users');
            if(curl_errno()==0){
                $data=json_decode($result2);
                $condition['openid']=$data->openid;      //openid数据
                $condition['nickname']=$data->nickname;  //名字
                $condition['sex']=$data->sex;            //性别
                $condition['headimgurl']=$data->headimgurl;//头像
                $where['openid']=$condition['openid'];
                $result = $user->where($where)->find();
                if (!$result){
                    //如果用户尚未注册
                    //dump(json_decode($result2));
                    //把用户信息分配到视图文件中
                    $this->assign('user',$condition);
                    $this->display();
                }else{
                    $info = $user->where($where)->find();
                    session("openid",$info['openid']);
                    session("rz_status",$info['rz_status']);
                    session('id',$info['id']);
                    $this->redirect('index/index');
                }
            }else {
                dump(curl_errno($curl));
            }
        }
    }

    //用户注册
    public function register() {
        $info = I('post.');
        $users = M('users');
        $result = $users->data($info)->add();
        session("openid",$info['openid']);
        session("rz_status",$info['rz_status']);
        session("id",$result);
        $this->redirect('index/index');
    }
   
    public function my() {
        /*接收code的值*/
        $code=I('code');
        //dump($code);
        /*2、通过code换取网页授权access_token,这里通过code换取的是一个特殊的网页授权
        access_token,与基础支持中的access_token(该access_token用于调用其他接口)
        不同。公众号可通过下述接口来获取网页授权access_token
        如果网页授权的作用域为snsapi_base，则本步骤中获取到网页
        授权access_token的同时，也获取到了openid，snsaqi_base式的网页授权流程即到此为止*/

        /*以下的调用接口正确返回时的jsno数据包里有
        access_token,expires_in,refresh_token,openid,scope*/
        $url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx0ba3a3580561bc85&secret=fdc71908601e1dc5cf9b679fd904e7a9&code=$code&grant_type=authorization_code";
        $curl = curl_init ($url);
        curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, FALSE );
        curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, false );
        $result = curl_exec ($curl);
        curl_close ($curl);
        if(curl_errno()==0){
            $result = json_decode($result);
            // dump($result);
            //3、拉取用户信息(需scope为snsapi_userinfo)
            $access_token=$result->access_token;
            $openid=$result->openid;
            /*开发者通过获取到access_token和openid值作为以下接口的参数来拉取用户信息
            正确返回的json数据包里的参数有openid(用户唯一标识)，nickname(用户昵称),
            sex(用户性别，值为1是男生，值为2是女生),province（个人资料填写的省份）,
            city（普通用户个人资料填写的城市）,country（国家）
            headimgurl（用户头像）,privilege（用户特权）,
            unionid（只有在用户将公众号绑定到微信开放平台账号后
            才会出现该字段）*/
            $url2="https://api.weixin.qq.com/sns/userinfo?access_token=$access_token&openid=$openid&lang=zh_CN";
            $curl = curl_init ($url2);
            curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );
            curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, FALSE );
            curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, false );
            $result2 = curl_exec ($curl);
            $user = M('users');
            if(curl_errno()==0){
                $data=json_decode($result2);
                $condition['openid']=$data->openid;      //openid数据
                $where['openid']=$condition['openid'];
                $id = $user->where($where)->field('id');
                $this->redirect('Personal/zhanghuguanli',array('id'=>$id));
            }else {
                dump(curl_errno($curl));
            }
        }
    }
}
