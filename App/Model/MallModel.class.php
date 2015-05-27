<?php
namespace Model;
use Think\Model;
class MallModel extends Model{
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
	function add_mall($data){	
			$data['status'] = 3;
			$data['addtime'] = strtotime($data['addtime']);
			$update = $this->create($data);
			$insertid = $this->add($update);
			if($insertid){
				$content = array('itemid'=>$insertid,'content'=>$data['content']);
				$result = M('mall_data')->add($content);		
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