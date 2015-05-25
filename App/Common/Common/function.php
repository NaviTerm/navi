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



/**
 * 字符串截取，支持中文和其他编码
 * static
 * access public
 * @param string $str 需要转换的字符串
 * @param string $start 开始位置
 * @param string $length 截取长度
 * @param string $charset 编码格式
 * @param string $suffix 截断显示字符
 * return string
 */
function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true) {
    if(function_exists("mb_substr"))
        $slice = mb_substr($str, $start, $length, $charset);
    elseif(function_exists('iconv_substr')) {
        $slice = iconv_substr($str,$start,$length,$charset);
        if(false === $slice) {
            $slice = '';
        }
    }else{
        $re['utf-8']   = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
        $re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
        $re['gbk']    = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
        $re['big5']   = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
        preg_match_all($re[$charset], $str, $match);
        $slice = join("",array_slice($match[0], $start, $length));
    }
    return $suffix ? $slice.'...' : $slice;
}
