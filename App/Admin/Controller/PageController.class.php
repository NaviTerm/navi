<?php
namespace Admin\Controller;
use Think\Controller;
class PageController extends SystemController{
    public function _initialize() {
        parent::_initialize();
    }
	public function index(){
		$list = M('page')->where('status=3')->order('listorder desc')->select();
		$this->assign('lists',$list);
		$this->display();
	}
	public function add(){
		if(I('post.')){
			$data = I('post.');
			$data['addtime'] = $data['edittime'] = strtotime($data['addtime']);
			$data['keyword'] = $data['keyword'] == '' ? mb_substr(strip_tags($data['title']),0,20,'UTF-8') : $data['keyword'];
			$data['introduce'] = $data['introduce'] == '' ? mb_substr(strip_tags($data['content']),0,100,'UTF-8') : $data['introduce'];
			$data['status'] = 3;
			$data['username'] = $_SESSION['username'];
			$data['hits'] = mt_rand(0,10);

			$page = M('page');
			$redata = $page->create($data);
			if($redata){
				$result = $page->add($redata);
				// return $result;
				$this->success("发布成功",U('page/index'),0);
			}else{
				$this->error($redata);
			}
		}else{
			$this->display();
		}
	}

	public function update($itemid){

		$page = M('page');
		if(I('post.')){
			$data = I('post.');
			$data['edittime'] = time();
			$redata = $page->create($data);
			$result = $page->save($redata);
			$result ? $this->success('修改成功',U('page/index'),0) : $this->error('修改失败');
		}else{
			$list = $page->where('itemid='.$itemid)->find();
			$this->assign('lists',$list);
			$this->display('page/add');			
		}

	}
	public function del($itemid){
		$page = M('page');
		$id = strstr($itemid,',') ? explode(',', $itemid) : $itemid;
		if(is_array($id)){
			$array = array();
			foreach($id as $k => $v){
				$array['itemid'] = $v;
				$array['status'] = 0;
				$redata += $page->save($array);
			}
		}else{
			$data = array('itemid'=>$itemid,'status'=>0);
			$redata = $page->save($data);
		}
		$redata ? $this->success("成功删除".$redata."个单页",U('page/index'),0) : $this->error("删除失败");
	}

	public function listorder(){
		if(I('post.')){
			$page = M('page');
			$data = I('post.');
			$array = array();
			foreach (I('post.') as $key => $value) {      //处理post数据
				list($action,$id) = explode('_', $key);
				$array[$id][$action] = $value;
				$array[$id]['itemid'] = $id;
			}
			foreach($array as $k => $v){
				$result += $page->save($v);
			}
			$this->success($result.'个单页排序被更新',U('page/index'),0);
		}
	}
}