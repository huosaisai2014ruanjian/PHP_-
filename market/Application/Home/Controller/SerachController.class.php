<?php
/***
 * document：公众号内部搜索
 * User: 霍赛赛
 * Date: 2016-12-13
 * Time: 15:46
 */
namespace Home\Controller;
use Think\Controller;
class SerachController extends Controller
{
	public function index(){
	//1、获取搜索数据
		 $search = $_POST['search'];
		
	//2.通过匹配分类的名称显示列表
		  $goods = M('goods');
		  $map['name']=array('LIKE',"%$search%");
	 	  $result = $goods->where($map)->select();
	 	  if(!$result){
	 	  	$result[0]['id']=0;
	 	  }
	 	  $this->assign('icon',$result[0]['id']);
	 	  $this->assign('search',$search);
	 	  $this->assign('goods',$result);
          $this->display();
	 	  // if($result){
	 	  // 	//2.1 如果在表中

     //         $id = $result['id'];
     //         $this->success("",U("/Home/Goodslist/index?id=$id"));
	 	  // }else{
     //         //2.2如果不在表中
	 	  // 	 $this->display();
	 	  // }
	//2、精确匹配判断数据是否在商品表中pass
	// 	 $goods = M('goods');
	// 	 $result = $goods->field('name')->select();
	// 	 //判断是否在二维数组$result中
 //        if($this->inshuzu($search,$result)){
 //        //2.1 如果在表中
 //        	$id = $goods->where($search)->find();
 //        	$this->success("",U("/Home/GoodDetail/index?id=$id"));
 //        }else{
	//   //2.2如果不在表中
 //           $this->display();
 //       }
	// }
	// /***
	// 判断是否在二维数组中
	// */
	// public function inshuzu($search,$array){
 //          foreach($array as $val){
 //           if(in_array($search,$val)){
 //              return true;
 //           }
 //         }
 //         return false;
	// }
}
    public function getTimes(){
    	$times = I('get.time');
    	dump($times);
    }
}