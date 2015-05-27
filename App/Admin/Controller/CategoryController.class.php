<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends SystemController{
    public function _initialize() {
        parent::_initialize();
    }
	public function index($moduleid){

		$cate = new \Model\CategoryModel();
		$up = $cate->update_items();//更新分类信息
		$count = $cate->where('moduleid='.$moduleid)->count();
		$page = new \Think\Page($count,10);  // 实例化分页类 传入总记录数和每页显示的记录数
		$show = $page->show();              // 分页显示输出
		$lists = $cate->where('moduleid='.$moduleid)->order('listorder desc')->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign("lists",$lists);
		$this->assign("page",$show);
		$this->assign("count",$count);
		$this->assign('moduleid',$moduleid);
		$this->display();
	}

	/*更新分类*/
	public function update($moduleid){

		if(I('post.')){
			$category = new \Model\CategoryModel();
			$result = $category->check_save(I('post.'));

			if($result){
				$this->success('分类修改成功',U('category/index','moduleid='.$moduleid),0);
			}else{
				$this->error('分类修改失败',U('category/index','moduleid='.$moduleid),0);
			}
		}
		// $this->display();
	}
	/*批量更新分类*/
	public function update_all($moduleid){

		if(I('post.')){
			$category = new \Model\CategoryModel();
			$array = array();
			foreach (I('post.') as $key => $value) {             //处理post数据
				list($action,$id) = explode('_', $key);
				$array[$id][$action] = $value;
				$array[$id]['id'] = $id;
			}
	
			foreach ($array as $k => $v) {
				$result += $category->check_save($v);
			}
/*		dump($result);
		exit();		*/
			$this->success('成功修改'.$result.'个分类',U('category/index','moduleid='.$moduleid),0);

		}
	}
	/*添加分类*/
	public function add($moduleid){

		if(I('post.')){
			$data  = I('post.');
			$data['moduleid'] = $moduleid;
/*			dump($data);
			exit();*/
			$category = new \Model\CategoryModel();
			$result = $category->check_add($data);
			if($result){
				$this->success('分类添加成功',U('category/index','moduleid='.$moduleid),0);
			}else{
				$this->error('分类添加失败',U('category/index','moduleid='.$moduleid),0);
			}
		}
	}
	/*删除分类*/
	public function del($id,$moduleid){
		if(!$id) return false;
		$delete = new \Model\CategoryModel();
		$result = $delete->del($id);
		if($result){
			$this->success('分类删除成功',U('category/index','moduleid='.$moduleid));
		}else{
			$this->error('分类删除失败',U('category/index','moduleid='.$moduleid));
		}
	}

}