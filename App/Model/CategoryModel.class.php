<?php
namespace Model;
use Think\Model;
class CategoryModel extends Model{
	function catinfo($catid){
		return $this->where("id=".$catid)->find();
	}
}