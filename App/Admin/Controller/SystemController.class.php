<?php
namespace Admin\Controller;
use Think\Controller;
class SystemController extends Controller{
	public $userid;
	public $_user;	
    /**
     * 初始化
     * 如果 继承本类的类自身也需要初始化那么需要在使用本继承类的类里使用parent::_initialize();
     */
    public function _initialize() {
    	
		$this->userid = session("userid");
		$this->is_login();	
        if(!S('_user')){
            $_user = $this->userinfo();
            S('_user',$_user,3600);//查询完数据 写入缓存
        }else{
            $_user = S('_user');
        }
        $this->assign("_user",$_user);
    }

	public function userinfo(){
		$data = M("member")->where('userid='.$this->userid)->find();
		return $data;
	}

	public function is_login(){

	    if(!$this->userid){
	      return $this->error("请登录",U('admin/member/login'));
	    }else{
	    	return true;
	    }
	}



}