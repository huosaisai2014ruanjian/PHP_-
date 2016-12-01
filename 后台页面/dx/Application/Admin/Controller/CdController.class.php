<?php
namespace Admin\Controller;
use Think\Controller;
class CdController extends Controller {
    public function cd(){
        if(isset($_POST['numPerPage'])){
                $numPerPage=$_POST['numPerPage'];
        }else{
            $numPerPage=20;
        }
        if(isset($_POST['pageNum'])){
            $currentPage=$_POST['pageNum'];
        }else{
            $currentPage=1;
        }
        $count= M("cd")->count();
        $Page = new \Think\Page($count,$numPerPage);
        $show = $Page->show();// 分页显示输出
        $list = M("cd")->join('market_type on market_cd.typeid = market_type.id')->field(array('market_cd.id'=>'id','cd','photo','pprice','price','jryh','jrzt','xctj','typeid','name'))->limit((($currentPage-1)*$numPerPage).','.$numPerPage)->select();
        $this->assign('cd',$list);// 赋值数据集
        $this->assign('numPerPage',$numPerPage);
        $this->assign('totalCount',$count);
        $this->assign('currentPage',$currentPage);
        $this->display();
    }
    public function add(){
        $data=M('type');
        $type=$data->select();
        $this->assign("type",$type);        
        $this->display();
    }
    public function addt(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     'Uploads';  // 设置附件上传根目录
        $upload->savePath  =     './Uploads/'; // 设置附件上传（子）目录
        // 开启子目录保存 并调用自定义函数get_user_id生成子目录
        $upload->autoSub = true;
        $upload->subName = 'cdphoto';
        // 上传文件 
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
          $this->error($upload->getError(),$_SERVER["HTTP_REFERER"],1);
        }else{// 上传成功 
            if(I('post.typeid')==0)
            {
                $this->error('请选择分类');
            }
            $data=array(
                'cd' =>I('post.cd'),
                'photo' => I('post.photo'),
                'pprice' =>I('post.pprice'),
                'price' =>I('post.price'),
                'photo' =>$info['photo']['savename'],
                'typeid' =>I('post.typeid'),
                'jryh' =>0,
                'jrzt' =>0,
                'xctj' =>0
            );
            if(!M("cd")->create($data)){
                $this->error(M("cd")->getError());
            }
            if(M("cd")->add($data)){
                $this->success("添加成功",$_SERVER["HTTP_REFERER"],1);
            }
            else{
                $this->error("添加失败",$_SERVER["HTTP_REFERER"],1);
            }
        }
    }
    public function edit() {
        $id=$_GET['id'];

        $data=M('cd');
        $cd=$data->find($id);
        $this->assign("thistypeid",$cd['typeid']);
        $this->assign("cd",$cd);
        $data=M('type');
        $type=$data->select();
        $this->assign("type",$type);         
        $this->display();
    }
    public function editt() {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     'Uploads';  // 设置附件上传根目录
        $upload->savePath  =     './Uploads/'; // 设置附件上传（子）目录
        // 开启子目录保存 并调用自定义函数get_user_id生成子目录
        $upload->autoSub = true;
        $upload->subName = 'cdphoto';
        // 上传文件 
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $cd = M("cd"); // 实例化cd对象
            // 根据表单提交的POST数据创建数据对象
            $cd->create();
            $cd->save(); // 根据条件保存修改的数据
               $this->redirect('index/index');
        }else{// 上传成功
            $cd = M("cd"); // 实例化cd对象
            // 根据表单提交的POST数据创建数据对象
            $cd->create();
            $cd->photo=$info['photo']['savename'];
            $cd->save(); // 根据条件保存修改的数据
                $this->redirect('index/index');
        }
    }
    public function delete() {
        $id = $_GET['id'];
        if(M("cd")->delete($id)){
            $this->success("删除成功！");
        }  

    }
}
