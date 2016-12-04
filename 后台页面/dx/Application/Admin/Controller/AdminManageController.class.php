<?php
namespace Admin\Controller;
use Think\Controller;
use Common\Controller\RestfulController;

class AdminManageController extends RestfulController {
    public function index(){
      $this->display();
    }
}
