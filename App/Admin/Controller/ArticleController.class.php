<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends SystemController{
    public function _initialize() {
        parent::_initialize();
    }
	function add(){

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

	function change($itemid='', $type = 'del'){	// 回收站
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
					$this->success($message,U('article/change'));	
				}else{
					$this->error($article->getError(),U('article/change'));	
				}			
		}
	}
	function del($itemid){

		$article = new \Model\ArticleModel();

		$result = $article->del($itemid);

		if($result){
			$this->success('文章已经放入回收站',U('article/change'));	
		}else{
			$this->error($article->getError(),U('article/change'));	
		}	
	}
	function update($itemid){
		$article = new \Model\ArticleModel();
		if(!empty($_POST)){

			$update = $article->create();
			$update = $article->save();
			if($update){
				$this->success('更新成功',U("article/index"));
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
			// }
			$this->display('add');				
		}
	}
	function index(){
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

}