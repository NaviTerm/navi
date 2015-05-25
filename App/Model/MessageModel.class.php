<?php
namespace Model;
use Think\Model;
class MemberModel extends Model{
	 // 是否批处理验证
	 protected $patchValidate    =   true;
	 // 自动验证定义
	 protected $_validate        =   array(
	 	array('content','require','内容必须填写'),
	 	);

}