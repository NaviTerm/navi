<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends SystemController{
    public function _initialize() {
        parent::_initialize();
    }
    /*添加文章*/
	public function add(){

		$article = new \Model\ArticleModel();

		if(!empty($_POST)){

			$result = $article->add_article(I('post.'));
			if($result){
				$this->success('更新成功',U("article/index"));
			}else{
				$this->error($article->getError());
			}
		}else{
			$cate = M('category')->select();//获取分类
			$this->assign('category',$cate);
			$this->display();				
		}
	}
	/*回收站*/
	public function change($itemid='', $type = 'del'){	// 回收站
		// var_dump($itemid)
		$article = new \Model\ArticleModel();
		//显示回收站
		if(empty($itemid)){
			$count = $article->where("status=0")->count();
			$page = new \Think\Page($count,10);  // 实例化分页类 传入总记录数和每页显示的记录数
			$show = $page->show();              // 分页显示输出
			$lists = $article->where('status=0')->order('itemid desc')->limit($page->firstRow.','.$page->listRows)->select();
			$this->assign("lists",$lists);
			$this->assign("page",$show);
			$this->assign("count",$count);
			//查询分类
			$this->display();
		}else{

				$itemid = strstr($itemid,',') ? explode(',',$itemid ) : $itemid ;
				//判断动作 del是彻底删除  否则就是恢复
				if($type == 'del'){
					$result = $article->delete($itemid);
					$content = M('article_data')->delete($itemid);	
					$message = '文章已经彻底删除';
				}else{
					$result = $article->change($itemid);
					$message = '文章已经恢复';
				}
				
				// dump($result);
				// exit();
				if($result){
					$this->success($message,U('article/change'),0);	
				}else{
					$this->error($article->getError(),U('article/change'));	
				}			
		}
	}
	/*删除文章 (修改status,放入回收站)*/
	public function del($itemid){

		if(strstr($itemid, ',')){
			$id = $itemid;
			$itemid = explode(',', $id);

		}
		$article = new \Model\ArticleModel();

		$result = $article->del($itemid);

		if($result){
			$this->success('成功删除'.$result.'篇文章',U('article/change'),0);	
		}else{
			$this->error($article->getError(),U('article/change'));	
		}	
	}
	/*文章更新*/
	public function update($itemid){
		$article = new \Model\ArticleModel();
		if(!empty($_POST)){
			$art = $article->create();
			$content = array('itemid'=>$_POST['itemid'],'content'=>$_POST['content']);
			$update = $article->save(); //更新文章 成功+1
			$update += M('article_data')->save($content); //更新内容  成功+1
			if($update){
				$this->success('更新成功',U("article/index"),0);
			}else{
				$this->error($article->getError());
			}
		}else{
			$cate = M('category')->select();//获取分类
			$this->assign('category',$cate);
			$list = $article->where("itemid=".$itemid)->find();//获取当前文章信息
			$content = M('article_data')->where("itemid=".$itemid)->find();
			$list['content'] = $content['content'];
			$this->assign("list",$list);
			$this->display('add');				
		}
	}
	/*文章首页*/
	public function index(){
		$article = M("article");
		$category = M('category')->select();
		$this->assign('category',$category);
		$count = $article->where("status=3")->count();
		$page = new \Think\Page($count,10);  // 实例化分页类 传入总记录数和每页显示的记录数
		$show = $page->show();              // 分页显示输出
		$lists = $article->where('status=3')->order('itemid desc')->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign("lists",$lists);
		$this->assign("page",$show);
		$this->assign("count",$count);
		$this->display();
	}
	//删除图片
	public function del_img($src){	
		return unlink($src) ? true : false ;//删除原图
	}

	/*更新排序*/
	public function listorder(){
		if(I('post.')){
			$data = I('post.');
			$array = array();
			foreach ($data as $key => $value) {             //处理post数据
				list($action,$id) = explode('_', $key);
				$array[$id][$action] = $value;
				$array[$id]['itemid'] = $id;
			}
			foreach ($array as $k => $v) {
				$v['listorder'] = $v['listorder'] >= 0 ? $v['listorder'] : 0 ;
				$result += M('article')->save($v);
			}
			$this->success('成功修改'.$result.'篇文章排序',U('article/index'),0);		
		}
	}

	/*批量更新分类  $id=1  or $id="1,2,3"*/
	public function change_cat($id,$catid){
		$itemid = strstr($id,',') ? explode(',', $id) : $id ;
		$article = M('article');
		if(is_array($itemid)){
			$array = array();			
			foreach ($itemid as $k => $v) {
				$array['itemid'] = $v;
				$array['catid'] = $catid;
				$redata = $article->create($array);
				$result += $article->save($redata);				
			}

		}else{
			$redata = $article->create(array('itemid'=>$itemid,'catid'=>$catid));
			$result = $article->save($redata);

		}
		return $result;
	}
}