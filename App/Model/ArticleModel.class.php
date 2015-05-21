<?php
namespace Model;
use Think\Model;
class ArticleModel extends Model{
	function del($id){
		if(!is_array($id)){
			$art = $this->find($id);
			$art['status'] = 0;
			// dump($art);
			$result =  $this->save($art) ? true : false ;
		}else{
			foreach ($id as $key => $value) {
				$art = $this->find($value);
				$art['status'] = 0;
				$result = $this->save($art) ? true : false ;	
			}
		}
		
		return $result;
	}
	function add_article($data){

			$data['addtime'] = $data['edittime'] = strtotime(I('post.addtime'));			
			$data['status'] = 3;
			$data['introduce'] = substr(I('post.content'), 0,200);
			$data['username'] = $_SESSION['username'] ? $_SESSION['username'] : get_client_ip();
			$data['hits'] = mt_rand(0,10);
			$update = $this->create($data);
			$insertid = $this->add($update);
			if($insertid){
				$content = array('itemid'=>$insertid,'content'=>$data['content']);
				// $table_content = M('article_data');
				$result = M('article_data')->add($content);
				return $result;
			}else{
				return false;
			}
			
	}
	function change($id){
			$art = $this->find($id);
			$art['status'] = 3;
			$result =  $this->save($art) ? true : false ;
			return $result;
	}
}