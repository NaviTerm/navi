<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="<?php echo (AD_SKIN); ?>css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="<?php echo (AD_SKIN); ?>js/jquery.js"></script>
<script type="text/javascript">
$(function(){	
	//顶部导航切换
	$(".nav li a").click(function(){
		$(".nav li a.selected").removeClass("selected")
		$(this).addClass("selected");
	})	
})	
</script>


</head>

<body style="background:url(<?php echo (AD_SKIN); ?>images/topbg.gif) repeat-x;">

    <div class="topleft">
    <a href="main.html" target="_parent"><img src="<?php echo (AD_SKIN); ?>images/logo.png" title="系统首页" /></a>
    </div>
        
    <ul class="nav">
    <li><a href="default.html" target="rightFrame" class="selected"><img src="<?php echo (AD_SKIN); ?>images/icon01.png" title="工作台" /><h2>工作台</h2></a></li>
    <li><a href="imgtable.html" target="rightFrame"><img src="<?php echo (AD_SKIN); ?>images/icon02.png" title="模型管理" /><h2>模型管理</h2></a></li>
    <li><a href="imglist.html"  target="rightFrame"><img src="<?php echo (AD_SKIN); ?>images/icon03.png" title="模块设计" /><h2>模块设计</h2></a></li>
    <li><a href="tools.html"  target="rightFrame"><img src="<?php echo (AD_SKIN); ?>images/icon04.png" title="常用工具" /><h2>常用工具</h2></a></li>
    <li><a href="computer.html" target="rightFrame"><img src="<?php echo (AD_SKIN); ?>images/icon05.png" title="文件管理" /><h2>文件管理</h2></a></li>
    <li><a href="<?php echo U('config/index');?>"  target="rightFrame"><img src="<?php echo (AD_SKIN); ?>images/icon06.png" title="系统设置" /><h2>系统设置</h2></a></li>
    </ul>
            
    <div class="topright">    
    <ul>
    <li><span><img src="<?php echo (AD_SKIN); ?>images/help.png" title="帮助"  class="helpimg"/></span><a href="#">帮助</a></li>
    <li><a href="#">关于</a></li>
    <li><a href="<?php echo U('member/logout');?>" target="_parent">退出</a></li>
    </ul>
     
    <div class="user">
    <span><?php echo ($_user['username']); ?></span>
    <i>消息</i>
    <b><?php echo ($_user['message']); ?></b>
    </div>    
    
    </div>

</body>
</html>