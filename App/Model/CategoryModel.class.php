<?php
namespace Model;
use Think\Model;
class CategoryModel extends Model{
	function catinfo($catid){
		return $this->where("id=".$catid)->find();
	}
	function check_add($data){
		if(!$data) return false;
		if($this->getByDir($data['dir'])) return false;
		// if($this->getByName($data['name'])) return false;
		$result = $this->create($data);
		if($result){
			$insertid = $this->add($result);
			return $insertid;
		}else{
			return false;
		}
	}

	function check_save($data){
		if(!$data) return false;
		$find = $this->getByDir($data['dir']);
		if($find){ 
			$id = $find['id'];
			if($id != $data['id']) return false;//dir防重复
		}
		// if($this->getByName($data['name'])) return false;
		$result = $this->create($data);
		if($result){
			$rowid = $this->save($result);
			return $rowid;
		}else{
			return false;
		}
	}

	function del($id){
		if(!is_array($id)){
			$result =  $this->delete($id) ? true : false ;
		}else{
			foreach ($id as $key => $value) {
				$result =  $this->delete($value['id']) ? true : false ;
			}
		}
		return $result;
	}

	function update_items(){
		$article = M('article')->field('catid,count(*) as num')->where('status=3')->group('catid')->select();
		foreach ($article as $key => $value) {
			$this->where('id='.$value['catid'])->save(array('items'=>$value['num']));
		}
		return true;
	}
}