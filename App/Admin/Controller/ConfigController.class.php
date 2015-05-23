<?php
namespace Admin\Controller;
use Think\Controller;
class ConfigController extends SystemController{
	public function _initialize(){
        parent::_initialize();
	}
	public function index(){
		$config = M('config');
		if(I('post.')){
			$data = I('post.');
			$con = array();
			foreach($data as $k => $v){
				$con['value'] = $v;
				$result += $config->where("name='".$k."'")->save($con);
			}
			$result ? $this->success('配置更新成功',U('config/index'),0) : $this->error('配置更新失败,你都做了些什么?',U('config/index'));
		}else{
			$arr = array();
			$result = $config->select();
			foreach($result as $k => $v){
				$arr[$v['name']] = $v['value'];
			}
			$this->assign('list',$arr);
			$this->display();			
		}
		
	}
}