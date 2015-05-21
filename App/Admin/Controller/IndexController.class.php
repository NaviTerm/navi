<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends SystemController {
    public function _initialize() {
        parent::_initialize();
        // $this->is_login();      
    }

    public function index(){

        $this->display();
    }
    public function top(){
        // var_dump(S('_user'));
    	 $this->display();
    }
    public function left(){

    	$this->display();
    }
    public function main(){

    	$this->display();
    }
    public function right(){

    	$this->display();	
    }

}