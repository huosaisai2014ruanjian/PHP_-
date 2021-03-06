
/***
 * document：商品管理
 * User: 刘迪浩、马豪珍
 */
<?php
namespace Admin\Controller;
use Think\Controller;
use Common\Controller\RestfulController;
class GoodsController extends RestfulController {
    public function index() {
        if(isset($_POST['numPerPage'])){
                $numPerPage=$_POST['numPerPage'];
        }else{
            $numPerPage=10;
        }
        if(isset($_POST['pageNum'])){
            $currentPage=$_POST['pageNum'];
        }else{
            $currentPage=1;
        }
        $count= $this->_db->count();
        $Page = new \Think\Page($count,$numPerPage);
        $show = $Page->show();// 分页显示输出
        $list = $this->_db->limit((($currentPage-1)*$numPerPage).','.$numPerPage)->select();
        for ($i=0; $i < count($list); $i++) { 
            $arr=explode(';',$list[$i]['photo']);
            $len=count($arr);
            for ($j=0; $j < $len; $j++) { 
                $list[$i]['image'][]=$arr[$j];
            }
        }
        //dump($list);exit;
        $this->assign('results',$list);// 赋值数据集
        $this->assign('numPerPage',$numPerPage);
        $this->assign('totalCount',$count);
        $this->assign('currentPage',$currentPage);
        $this->display();
    }

    public function add(){
        $users = M("users")->select();
        $this->assign('users',$users);
        $category = M("category")->select();
        $this->assign('category',$category); 
        $this->display();       
    }
    public function storephoto() {
        // 获取POST数据
        $data = I('post.');

        //dump($data);exit;
        //上传文件
            //1.创建对象
                $upload = new \Think\Upload();// 实例化上传类
            //2.设置参数
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath  =     './Public';//上传根目录
                $upload->savePath  =     '/uploads/'; // 设置附件上传（子）目录
                // 开启子目录保存 并调用自定义函数get_user_id生成子目录
                $upload->autoSub = true;
                $upload->subName = 'goodsphoto';
            //3.执行文件上传操作（上传后的处理）
                $info=$upload->upload();
                 // dump($info);exit;
            //4.获取上传后的信息
                if($info){
                    //dump($info);
                    //针对多文件
                    foreach ($info as $key => $value) {
                        //获取文件的保存目录
                        $saveFileName=$value['savepath'].$value['savename'];                      
                        //把图片存路径写入到$data中    
                        $data['photo']=$data['photo'].';'.$saveFileName;
                        // $data[$key]=$saveFileName ;
                    }
                    $data['photo']=substr($data['photo'], 1);
                }else{
                    $upload->error('文件上传失败！');
                    exit(); 
                }
        // 插入到数据表中
        // $result['time']=date('y-m-d h:i:s',time());
        $result = $this->_db->add($data);
        // 善后处理
        if ($result) {
            $this->success($this->_tableName . '表数据插入成功！');
        } else {
            $this->error($this->_tableName . '表数据插入失败！');
        }
    }    
    public function edit(){
        $id=$_GET['id'];
        $goods = $this->_db->where("id=$id")->find();
        $this->assign('goods',$goods);  
        $users = M("users")->select();
        $this->assign('users',$users);
        $category = M("category")->select();
        $this->assign('category',$category);         
        $this->display();   
    }
    public function update() {
        // 获取POST数据
        $data = I('post.');
        // dump($data);
         if ($data['if']=="yes") {
        
        //dump($data);exit;
        //上传文件
            //1.创建对象
                $upload = new \Think\Upload();// 实例化上传类
            //2.设置参数
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath  =     './Public';//上传根目录
                $upload->savePath  =     '/uploads/'; // 设置附件上传（子）目录
                // 开启子目录保存 并调用自定义函数get_user_id生成子目录
                $upload->autoSub = true;
                $upload->subName = 'goodsphoto';
            //3.执行文件上传操作（上传后的处理）
                $info=$upload->upload();
              //echo "1"; dump($info);
            //4.获取上传后的信息
                if($info){
                    //dump($info);
                    //针对多文件
                    foreach ($info as $key => $value) {
                        //获取文件的保存目录
                        $saveFileName=$value['savepath'].$value['savename'];                      
                        //把图片存路径写入到$data中    
                        $data['photo']=$data['photo'].';'.$saveFileName;
                        // $data[$key]=$saveFileName ;
                    }
                    $data['photo']=substr($data['photo'], 1);
                }else{
                    $this->error('文件上传失败！');
                    exit(); 
                }
        }
        // 插入到数据表中
        // $result['time']=date('y-m-d h:i:s',time());
            // echo "2"; dump($data);     
        // exit;
        $result = $this->_db->save($data);

        // 善后处理
        if ($result) {
            $this->success($this->_tableName . '表数据插入成功！');
        } else {
            $this->error($this->_tableName . '表数据插入失败！');
        }
    }
    public function lists(){
        $id=$_GET['id'];
        $list = $this->_db->where("id=$id")->find();
        $arr=explode(';',$list['photo']);
        $len=count($arr);
        for ($j=0; $j < $len; $j++) { 
            $list["image$j"]=$arr[$j];
        }     
        $this->assign('goods',$list);          
        $this->display();         
    } 
    public function search(){
        if(isset($_GET['condition'])){
            $data=$_GET['condition'];
            //dump($_GET['condition']);
        if(isset($_POST['numPerPage'])){
                $numPerPage=$_POST['numPerPage'];
        }else{
            $numPerPage=10;
        }
        if(isset($_POST['pageNum'])){
            $currentPage=$_POST['pageNum'];
        }else{
            $currentPage=1;
        }
        $count= $this->_db->count();
        $Page = new \Think\Page($count,$numPerPage);
        $show = $Page->show();// 分页显示输出
        $list = $this->_db->where("name like '%$data%'")->limit((($currentPage-1)*$numPerPage).','.$numPerPage)->select();
        for ($i=0; $i < count($list); $i++) { 
            $arr=explode(';',$list[$i]['photo']);
            $len=count($arr);
            for ($j=0; $j < $len; $j++) { 
                $list[$i]["image$j"]=$arr[$j];
            }
        }
        $this->assign('result',$list);// 赋值数据集
        $this->assign('numPerPage',$numPerPage);
        $this->assign('totalCount',$count);
        $this->assign('currentPage',$currentPage);
        $this->display();            
        }
    }

}
