<?php
namespace Model;
use Think\Model;
class MemberModel extends Model{
	 // 是否批处理验证
	 protected $patchValidate    =   true;
	 // 自动验证定义
	 protected $_validate        =   array(
	 	array('username','require','用户名必须填写'),
	 	array('password','require','密码必须填写'),
	 	array('password','6,12','密码在6到12位之间',0,'length'),
	 	array('mobile','/\d{11}/','请填写正确的电话号码'),
	 	);
	 public function check_add($data){

	 	if(!$data) return false;
	 	$result = $this->create($data);
	 	// return $this->getError();
	 	if(!$result) return false;
	 	
	 	$check = $this->getByUsername($result['username']);//确认数据库中没有重名
	 	if($check) return false;
	 	$result['password'] = md5(md5($result['password']));//密码
	 	$result['loginip'] = get_client_ip();//客户端ip
	 	$result['lastlogin'] = time();//以创建时间为准
	 	$user = $this->add($result);
	 	return $user;
	 }

	 public function check_edit($data){
	 	$this->_validate = '';
	 	if(!$data) return false;
	 	$result = $this->create($data);
	 	if(!$result) return false;
	 	if($result['password']) $result['password'] = md5(md5($result['password']));//是否重置了密码
	 	$user = $this->where("userid=".$result['userid'])->save($result);
	 	return $user;
	 }

	 public function del($username){
	 	$result = $this->where("username='".$username."'")->delete();
	 	return $result;
	 }

	 public function check_login($username,$password){
	 	if($username == '' or $password == '') return false;
	 	$user =  $this->getByUsername($username);
	 	if(!$user or md5(md5($password)) !=$user['password']){
	 		return false;
	 	}
	 	return $user;
	 }
}