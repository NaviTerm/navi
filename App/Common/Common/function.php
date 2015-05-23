<?php

	function userinfo($username){
		$data = M("member")->where("username='".$username."'")->find();
		return $data;
	}
	function group_name($groupid){
		$data = M("group")->where("id=".$groupid)->find();
		return $data['name'];
	}
	function imgurl($imgurl = '', $width = '') {
		if($imgurl) {
			return strpos($imgurl, '://') === false ? $imgurl : $imgurl;
		} else {
			return AD_SKIN.'images/nopic'.$width.'.gif';
		}
	}
	function get_cat($catid) {
		$catid = intval($catid);
		return $catid ? M('category')->where('id='.$catid)->find() : array();
	}
	function get_catname($catid) {
		$catid = intval($catid);
		$catinfo = M('category')->where('id='.$catid)->find();
		return $catinfo['name'];
	}
	function get_level_name($level){
		switch ($level) {
			case '0':
				return "无";
				break;
			case '1':
				return "一级";
				break;	
			case '2':
				return "二级";
				break;
			case '3':
				return "三级";
				break;			
			default:
				break;
		}
	}
	function get_typeid_name($typeid){
		switch($typeid){
			case '1':
				return "行业网站";
				break;
			case '2':
				return "公司网站";
				break;
			default:
				break;
		}
	}
	function get_message_type($typeid){
		switch($typeid){
			case '1':
				return "问题";
				break;
			case '2':
				return "建议";
				break;
			case '3':
				return "合作";
				break;
			case '4':
				return "投诉";
				break;
			default:
				break;
		}
	}