<?php
namespace Admin\Controller;
use Think\Controller;
class LinkController extends SystemController {
    public function _initialize() {
        parent::_initialize();
        // $this->is_login();      
    }

    public function index(){
        $this->display();
    }
    public function add(){
        if(I('post.')){
            $data = I('post.');
            $data['addtime'] = time();
            $link = M('link');
            $result = $link->create($data);
            if($result){
                $result1 = $link->add($result);
                 if($result1){
                    $this->success("添加成功",U('link/index'));
                }else{
                    $this->error("添加失败");
                }
            }else{
                $this->display();
            }
        }
            $this->display();
        
    }
    public function category(){

    	$this->display();
    }
    public function huishou(){

    	$this->display();
    }

}