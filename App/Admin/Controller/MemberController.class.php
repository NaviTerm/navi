<?php
namespace Admin\Controller;
use Think\Controller;
class MemberController extends Controller{

	public function index(){
		$list = M("member")->select();
		$this->assign("list",$list);
		$this->display();
	}
	public function add(){
		if(I('post.')){
			$data = I('post.');

			$member = new \Model\MemberModel();
			$result = $member->check_add($data);

			if($result){
				$this->success("会员信息添加成功",U('member/index'));
			}else{
				$this->error("会员信息添加失败");
			}
		}else{
			$group = M('group')->select();
			$this->assign('group',$group);
			$this->display();			
		}

	}
	public function del($username){
		$member = new \Model\MemberModel();
		$result = $member->del($username);
		// var_dump($result);
		if($result){
			$this->success("会员删除成功",U('member/index'));
		}else{
			$this->error("会员删除失败");
		}

	}
	public function edit($username){
		if(I('post.')){
			$data = array_filter(I('post.'));
			$member = new \Model\MemberModel();
			$result = $member->check_edit($data);
			var_dump($member->getError());
			if($result){
				$this->success("会员信息修改成功",U('member/index'));
			}else{
				$this->error("会员信息修改失败");
			}
		}else{
			$list = M("group")->select();
			$this->assign('group',$list);
			$user = userinfo($username);
			$this->assign('user',$user);
			$this->display('add');			
		}

	}


	public function login(){
		$_session['username'] ? $this->success('',U('admin/index/index'),0) : '';
		if($_POST){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$user = new \Model\MemberModel();
			$result = $user->check_login($username,$password);
			// var_dump($result);die();
				if(!$result){
					 $this->error('用户名或密码不正确',U('admin/member/login'));
				}else{
					 session('username',$result['username']);
					 session('userid',$result['userid']);
			 	     $ip = get_client_ip();//客户端ip
	 				 $logintime = time();//登录时间
					 $this->success('登录成功',U('admin/index/index'),1);
				}
		}else{
			$this->display();
		}
		
	}
	public function logout(){
		session(null);
		$this->success("注销成功",U('member/login'));
	}








	public function group(){
		$list = M("group")->select();
		$array = array();
		//加入用户数量
		foreach ($list as $key => $value) {
			$array[$key] = $value;
			$array[$key]['count'] = M('member')->where('groupid='.$value['id'])->count();
		}
		// var_dump($array);
		$this->assign('list',$array);
		$this->display();
	}
	public function group_del($id){

		if((int)$id && $id != 1){
			$group = M("group")->where("id=".$id)->delete();
			if($group){
				$this->success("删除成功",U('member/group'));
			}else{
				$this->error("删除失败",U('member/group'));
			}
		}else{
			$this->error("无法删除管理员分组",U('member/group'));
		}

	}
	public function group_edit($id,$name){
		$group = M("group")->where("id=".$id)->save(array("name"=>$name));
/*		$return = array();
		if($group){
			$return['status'] = 1;
			$return['message'] = "更新成功";
		}else{
			$return['status'] = 0;
			$return['message'] = "更新失败";
		}*/
		$this->ajaxReturn($group);
	}
	public function group_add(){
		// var_dump(I('post.'));
		if(I('post.')){
			$data = I('post.');
			$name = $data['groupname'];
			$group = M("group")->add(array("name"=>$name));
			if($group){
				$this->success("添加成功",U('member/group_add'));
			}else{
				$this->error("添加失败",U('member/group_add'));
			}
		}else{
			$this->display();
		}
		// if($post.){
		// 	var_dump(I.$post);
		// }else{
		// 	
		// }
		
	}
}