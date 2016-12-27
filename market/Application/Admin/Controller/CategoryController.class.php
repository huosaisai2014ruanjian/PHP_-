/***
 * document：商品分类管理
 * User: 刘迪浩
 */
<?php
namespace Admin\Controller;
use Think\Controller;
use Common\Controller\RestfulController;
class CategoryController extends RestfulController {
   public function index(){
        $cat = M("cat")->select();
        $this->assign('cat',$cat);

        $cat_id = I("get.id");
        $category = $this->_db->where("cat_id='$cat_id'")->select();
        foreach ($category as  $value) {
            echo $value['name'].";";
        }
        $this->display();
        

    }
     public function gettab(){
        $cat = M("cat")->select();
        $this->assign('cat',$cat);
        $cat_id = I("get.id");
        $category= $this->_db->where("cat_id='$cat_id'")->select();
        foreach ($category as  $value) {
            echo $value['id']."^".$value['name'].";";
        }
    }
     public function doadd1(){
        $data=array(
            'id' =>I('post.id'),
            'name' =>I('post.name')
            );
        $addtag1=D("cat");
        $num=$addtag1->add($data);
        if($num>0){
             $this->success("添加一级成功！",U("index"));
        }
        else{
           $this->error($addtag1->getError()); 
        }
}
     public function adderji(){
             $pid= I("get.pid");
             if($pid!=null){
                 $this->assign('selectpid',$pid);
             }
             $cat = M("cat")->select();
             $this->assign('cat',$cat);
             $this->display();
    }
    public function doadd2(){
         if(!IS_POST){
            exit("bad request");
        }
        
        $data=array(
            'name' =>I('post.name'),
            'cat_id' => I("post.id")
            );
         $adderji=D("category");
         $num=$adderji->add($data);
         if($num>0){
             $this->success("添加二级标签成功！",U("index"));
         }
         else{
           $this->error($adderji->getError()); 
         }

    }
    public function deletecategory() {
        $id = I("get.id");
        //var_dump($id);
        if($this->_db->delete($id)){
            $this->success("删除成功！");
        }
        else{
            $this->error($this->_db->getError());
        }
    }

    public function deletecat() {
        $id = I("get.id");
        if(M("cat")->delete($id) && $this->_db->where("cat_id=$id")->delete()){
            $this->success("删除成功！");
        }
        else{
            $this->error(M("cat")->getError());
        }
    }
}
