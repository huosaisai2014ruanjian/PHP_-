<?php
namespace Home\Controller;


use Org\Util\Rbac;
use Think\Controller;
use Common\Controller\BaseController;

class UserController extends BaseController {
    public function login() {
        $this->display();
    }

    public function dologin() {
        // 构造condition条件
        $condition = array();
        $condition['name'] = I('post.username');
        $condition['passwd'] = I('post.password', '', 'md5');
        // 调用RBAC方法实现用户校验
        $authInfo = Rbac::authenticate($condition);
        if ($authInfo) {    // 用户名和密码成立
            // 写入session数据（自由修改）
            session('loginedUserName', $authInfo['name']);
            // 写入权限认证识别号
            session(C('USER_AUTH_KEY'), $authInfo['id']);
            // 在session中写入当前角色的权限列表
            Rbac::saveAccessList($authInfo['id']);
            // 登录成功后的跳转
            $this->success('登录成功！', '/Admin');
        } else {
            $this->error('用户名或密码错误，请重新登录！');
        }
    }
    public function logout_do(){
        session(null); // 清空当前的session
        session('[destroy]'); // 销毁session
        $this->success('退出成功，正在跳转...',C('USER_AUTH_GATEWAY'));
    }   
}