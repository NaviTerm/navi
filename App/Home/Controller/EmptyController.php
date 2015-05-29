<?php
namespace Home\Controller;
use Think\Controller;
class EmptyController extends Controller{

    public function _initialize(){
        parent::_initialize();
    }

    public function index() {
        $this->_empty();
    }

    public function _empty() {
        header('HTTP/1.1 404 Not Found');
        $this->display('Public:404');
    }


}
