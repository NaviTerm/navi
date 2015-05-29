<?php
namespace Model;
use Think\Model;
class ArticleModel extends Model{
	function del($id){
		if(!is_array($id)){
			$art = $this->find($id);
			$art['status'] = 0;
			$result =  $this->save($art);
		}else{
			foreach ($id as $key => $value) {
				$art = $this->find($value);
				$art['status'] = 0;
				$result += $this->save($art);	
			}
		}
		
		return $result;
	}
	function delete_all($id){

		$content = M('article_data');
		if(!is_array($id)){
				$result = $this->delete($id);
				$result += $content->delete($id);
		}else{
			foreach ($id as $key => $value) {
				$result += $this->delete($value);
				$result += $content->delete($value);
			}
		}

		return $result;	
	}
	function add_article($data){

			$data['addtime'] = $data['edittime'] = strtotime(I('post.addtime'));			
			$data['status'] = 3;
			$data['introduce'] = substr(strip_tags(I('post.content')), 0,200);
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
			if(is_array($id)){
				$art = array();
				foreach($id as $k => $v){
					$art['itemid'] = $v;
					$art['status'] = 3;
					$result =  $this->save($art);	
				}
			}else{
				$art['itemid'] = $id;
				$art['status'] = 3;
				$result =  $this->save($art);			
			}
			return $result;
	}
}