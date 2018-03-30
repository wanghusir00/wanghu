<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $list = 'index.html111111';
        $this->assign('list',$list);
        $this->display();
    }
}