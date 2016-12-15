<?php
/**
 * Created by PhpStorm.
 * User: 王振儒
 * Date: 2016/12/8
 * Time: 15:07
 */
namespace Admin\Controller;
use Think\Controller;
use Common\Controller\RestfulController;
class IndexController extends Controller {

    public function index(){
		$menu  = array();
		$menu_10  = array();
        $node = M("think_node");
		$id = $node->getField("id");
		$where['level']=3;
		$where['status']=1;
		//$where['pid']=$id;
        if(!empty($_GET['tag'])){
            $this->assign('menuTag',$_GET['tag']);
        }

		$where['id']=array('in','10,17');
		$list = $node->where($where)->field('id,name,title')->order('sort asc')->select();
        foreach($list as $key=>$module) {
            $module['access'] =   1;
            $menu_10[$key]  = $module;
        }
		$this->assign('menu_10',$menu_10);

		$where['id']=array('in','11,13,14');
		$list = $node->where($where)->field('id,name,title')->order('sort asc')->select();
		foreach($list as $key=>$module) {
			$module['access'] =   1;
			$menu_11[$key]  = $module;
		}
		$this->assign('menu_11',$menu_11);

		$where['id']=array('in','12,15,16');
		$list	=	$node->where($where)->field('id,name,title')->order('sort asc')->select();
		foreach($list as $key=>$module) {
			$module['access'] =   1;
			$menu_12[$key]  = $module;
		}
		$this->assign('menu_12',$menu_12);

        $where['id']=array('in','18');
        $list =   $node->where($where)->field('id,name,title')->order('sort asc')->select();
        $accessList = $_SESSION['_ACCESS_LIST'];
        foreach($list as $key=>$module) {
            $module['access'] =   1;
            $menu_13[$key]  = $module;
        }
        $this->assign('menu_13',$menu_13);

		
		C('SHOW_RUN_TIME',false);			// 运行时间显示
		C('SHOW_PAGE_TRACE',false);
		 
		
        $this->show();
    }

    public function change(){
        $id = I('get.id');
        $flag = M("associatedLabel2")->where("id=$id")->getfield("flag");        
        if($flag == "上线")
            $data['flag'] = '下线';
        else
            $data['flag'] = '上线';
        if(M("associatedLabel2")->where("id=$id")->save($data))
            $this->success("修改成功!", U('index'));
    }

    public function delete(){
        $id = $_GET['id'];
        if(M("associatedLabel2")->delete($id)){
            $this->success("删除成功！");
        }       
    }

    public function modi(){
        $id = $_GET['id'];
        $label = M("associatedLabel2")->find($id);
        $this->assign('label',$label);
        $this->display();
    }

    public function doModi() {
        if (!IS_POST) {
            exit("error param");
        }
        $Model = M("associatedLabel2");
        if ($Model->create() && $Model->save()) {
            $this->success("修改成功!", U('index'));
        }
        else {
            $this->error($Model->getError());
        }
    }

    public function add(){
    	if(IS_POST){
    		 //var_dump($_POST);exit();
	    	$addq=M('question');
	    	$addq->create();
	    	$name=I('post.name');
	    	$id=M('fenlei')->field('id')->where("name='$name'")->select();
	    	$id=$id[0]['id'];
	    	if(I('post.wenti')=='用户')
	    	{$answer='用户';}
	    	else
	    	{$answer='管理员';}
	    	$data=array(
	    		'wenti'  =>I('post.wenti'),
	    		'idf'=>$id,
	    		'answer'=>$answer
	    		);
		  	$addq->add($data);
			$w=I('post.wenti');
		  	$result=$addq->where("wenti='$w'")->count();
		  	if($result>0){
		  		$this->success("添加成功！",U('index'));
		  	}
		  	else{
		  		$this->error($addq->getError());
		  	}
	 	 }
	  else{
		  $fenlei=M('fenlei')->select();
		  $this->assign('fenlei',$fenlei);
	      $this->display();
   		 }		
        $this->display();
    }

    public function doAdd(){
        if(!IS_POST){
            exit("bad request");
        }
        $Model = M("associatedLabel2");
        if(!$Model->create()){
            $this->error($Model->getError());          
        }
        if($Model->add()){
            $this->success("添加成功",U("index"));
        }
        else{
            $this->error("添加失败");
        }
    }
	
	protected function checkUser() {
		if(!isset($_SESSION[C('USER_AUTH_KEY')])) {
			$this->assign('jumpUrl','Public/login');
			$this->error('没有登录');
		}
	}

	// 顶部页面
	public function top() {
		C('SHOW_RUN_TIME',false);			// 运行时间显示
		C('SHOW_PAGE_TRACE',false);
		$model	=	M("Group");
		$list	=	$model->where('status=1')->getField('id,title');
		$this->assign('nodeGroupList',$list);
		$this->display();
	}
	// 尾部页面
	public function footer() {
		C('SHOW_RUN_TIME',false);			// 运行时间显示
		C('SHOW_PAGE_TRACE',false);
		$this->display();
	}
	// 菜单页面
	public function menu() {
        //$this->checkUser();
        //if(isset($_SESSION[C('USER_AUTH_KEY')])) {
            //显示菜单项
            $menu  = array();
          /*   if(isset($_SESSION['menu'.$_SESSION[C('USER_AUTH_KEY')]])) {

                //如果已经缓存，直接读取缓存
                $menu   =   $_SESSION['menu'.$_SESSION[C('USER_AUTH_KEY')]];
            }else { */
                //读取数据库模块列表生成菜单项
                $node    =   M("think_node");
				$id	=	$node->getField("id");
				$where['level']=2;
				$where['status']=1;
				$where['pid']=$id;
                $list	=	$node->where($where)->field('id,name,group_id,title')->order('sort asc')->select();
                $accessList = $_SESSION['_ACCESS_LIST'];
                foreach($list as $key=>$module) {
                    // if(isset($accessList[strtoupper(APP_NAME)][strtoupper($module['name'])]) || $_SESSION['administrator']) {
                        //设置模块访问权限
                        $module['access'] =   1;
                        $menu[$key]  = $module;
                   // }
                }
                //缓存菜单访问
                $_SESSION['menu'.$_SESSION[C('USER_AUTH_KEY')]]	=	$menu;
           //}
            if(!empty($_GET['tag'])){
                $this->assign('menuTag',$_GET['tag']);
            }
			//dump($menu);
            $this->assign('menu',$menu);
			
		//}
		C('SHOW_RUN_TIME',false);			// 运行时间显示
		C('SHOW_PAGE_TRACE',false);
		$this->display();
	}
	
	public function menu_10() {
        //$this->checkUser();
        //if(isset($_SESSION[C('USER_AUTH_KEY')])) {
            //显示菜单项
            $menu  = array();
          /*   if(isset($_SESSION['menu'.$_SESSION[C('USER_AUTH_KEY')]])) {

                //如果已经缓存，直接读取缓存
                $menu   =   $_SESSION['menu'.$_SESSION[C('USER_AUTH_KEY')]];
            }else { */
                //读取数据库模块列表生成菜单项
                $node = M("think_node");
				$id = $node->getField("id");
				$where['level']=2;
				$where['status']=1;
				$where['pid']=$id;
				$where['group_id']=10;
                $list	=	$node->where($where)->field('id,name,group_id,title')->order('sort asc')->select();
                $accessList = $_SESSION['_ACCESS_LIST'];
                foreach($list as $key=>$module) {
                    // if(isset($accessList[strtoupper(APP_NAME)][strtoupper($module['name'])]) || $_SESSION['administrator']) {
                        //设置模块访问权限
                        $module['access'] =   1;
                        $menu[$key]  = $module;
                   // }
                }
                //缓存菜单访问
                $_SESSION['menu'.$_SESSION[C('USER_AUTH_KEY')]]	=	$menu;
           //}
            if(!empty($_GET['tag'])){
                $this->assign('menuTag',$_GET['tag']);
            }
			//dump($menu);
            $this->assign('menu_10',$menu);
			
		//}
		C('SHOW_RUN_TIME',false);			// 运行时间显示
		C('SHOW_PAGE_TRACE',false);
		$this->display();
	}
	 
    // 后台首页 查看系统信息
    public function main() {
        $info = array(
            '操作系统'=>PHP_OS,
            '运行环境'=>$_SERVER["SERVER_SOFTWARE"],
            'PHP运行方式'=>php_sapi_name(),
            'ThinkPHP版本'=>THINK_VERSION.' [ <a href="http://thinkphp.cn" target="_blank">查看最新版本</a> ]',
            '上传附件限制'=>ini_get('upload_max_filesize'),
            '执行时间限制'=>ini_get('max_execution_time').'秒',
            '服务器时间'=>date("Y年n月j日 H:i:s"),
            '北京时间'=>gmdate("Y年n月j日 H:i:s",time()+8*3600),
            '服务器域名/IP'=>$_SERVER['SERVER_NAME'].' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]',
            '剩余空间'=>round((@disk_free_space(".")/(1024*1024)),2).'M',
            'register_globals'=>get_cfg_var("register_globals")=="1" ? "ON" : "OFF",
            'magic_quotes_gpc'=>(1===get_magic_quotes_gpc())?'YES':'NO',
            'magic_quotes_runtime'=>(1===get_magic_quotes_runtime())?'YES':'NO',
            );
        $this->assign('info',$info);
        $this->display();
    }

	// 用户登录页面
	public function login() {
		if(!isset($_SESSION[C('USER_AUTH_KEY')])) {
			$this->display();
		}else{
			$this->redirect('Index/index');
		}
	}

	//public function index()
	//{
		//如果通过认证跳转到首页
	//	redirect(__APP__);
	//}

	// 用户登出
    public function logout()
    {
        if(isset($_SESSION[C('USER_AUTH_KEY')])) {
			unset($_SESSION[C('USER_AUTH_KEY')]);
			unset($_SESSION);
			session_destroy();
            $this->assign("jumpUrl",__URL__.'/login/');
            $this->success('登出成功！');
        }else {
            $this->error('已经登出！');
        }
    }

	// 登录检测
	public function checkLogin() {
		if(empty($_POST['usersname'])) {
			$this->error('帐号错误！');
		}elseif (empty($_POST['password'])){
			$this->error('密码必须！');
		}
		// elseif (empty($_POST['verify'])){
		// 	$this->error('验证码必须！');
		// }
        //生成认证条件
        $map = array();
		// 支持使用绑定帐号登录
		$map['username'] = $_POST['username'];
        $map["status"] = array('gt',0);
        var_dump($map);
        exit;
		// if($_SESSION['verify'] != md5($_POST['verify'])) {
		// 	$this->error('验证码错误！');
		// }
		import ( '@.ORG.Util.RBAC' );
        $authInfo = RBAC::authenticate($map);
        //使用用户名、密码和状态的方式进行认证
        if(false === $authInfo) {
            $this->error('帐号不存在或已禁用！');
        }else {
            if($authInfo['password'] != md5($_POST['password'])) {
            	$this->error('密码错误！');
            }
            $_SESSION[C('USER_AUTH_KEY')]	=	$authInfo['id'];
            $_SESSION['email']	=	$authInfo['email'];
            $_SESSION['loginUserName']		=	$authInfo['nickname'];
            $_SESSION['lastLoginTime']		=	$authInfo['last_login_time'];
			$_SESSION['login_count']	=	$authInfo['login_count'];
            if($authInfo['account']=='admin') {
            	$_SESSION['administrator']		=	true;
            }
            //保存登录信息
			$User	=	M('User');
			$ip		=	get_client_ip();
			$time	=	time();
            $data = array();
			$data['id']	=	$authInfo['id'];
			$data['last_login_time']	=	$time;
			$data['login_count']	=	array('exp','login_count+1');
			$data['last_login_ip']	=	$ip;
			$User->save($data);

			// 缓存访问权限
            RBAC::saveAccessList();
			$this->success('登录成功！');

		}
	}
    // 更换密码
    public function changePwd()
    {
		$this->checkUser();
        //对表单提交处理进行处理或者增加非表单数据
		if(md5($_POST['verify'])	!= $_SESSION['verify']) {
			$this->error('验证码错误！');
		}
		$map	=	array();
        $map['password']= pwdHash($_POST['oldpassword']);
        if(isset($_POST['account'])) {
            $map['account']	 =	 $_POST['account'];
        }elseif(isset($_SESSION[C('USER_AUTH_KEY')])) {
            $map['id']		=	$_SESSION[C('USER_AUTH_KEY')];
        }
        //检查用户
        $User    =   M("User");
        if(!$User->where($map)->field('id')->find()) {
            $this->error('旧密码不符或者用户名错误！');
        }else {
			$User->password	=	pwdHash($_POST['password']);
			$User->save();
			$this->success('密码修改成功！');
         }
    }
	public function profile() {
		$this->checkUser();
		$User	 =	 M("User");
		$vo	=	$User->getById($_SESSION[C('USER_AUTH_KEY')]);
		$this->assign('vo',$vo);
		$this->display();
	}
	public function verify()
    {
		$type	 =	 isset($_GET['type'])?$_GET['type']:'gif';
        import("@.ORG.Util.Image");
        Image::buildImageVerify(4,1,$type);
    }
// 修改资料
	/* public function change() {
		$this->checkUser();
		$User	 =	 D("User");
		if(!$User->create()) {
			$this->error($User->getError());
		}
		$result	=	$User->save();
		if(false !== $result) {
			$this->success('资料修改成功！');
		}else{
			$this->error('资料修改失败!');
		}
	} */
}