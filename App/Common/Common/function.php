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
			default:
				break;
		}

	}
	