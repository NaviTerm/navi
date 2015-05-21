<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="<?php echo (AD_SKIN); ?>css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="<?php echo (AD_SKIN); ?>js/jquery.js"></script>

<script type="text/javascript">
$(function(){	
	//导航切换
	$(".menuson li").click(function(){
		$(".menuson li.active").removeClass("active")
		$(this).addClass("active");
	});
	
	$('.title').click(function(){
		var $ul = $(this).next('ul');
		$('dd').find('ul').slideUp();
		if($ul.is(':visible')){
			$(this).next('ul').slideUp();
		}else{
			$(this).next('ul').slideDown();
		}
	});
})	
</script>


</head>

<body style="background:#f0f9fd;">
	<div class="lefttop"><span></span>菜单</div>
    
    <dl class="leftmenu">

    <dd>
    <div class="title">
    <span><img src="<?php echo (AD_SKIN); ?>images/leftico02.png" /></span>会员管理
    </div>
    <ul class="menuson">
        <li class="active"><cite></cite><a href="<?php echo U('member/index');?>" target="rightFrame">会员列表</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('member/add');?>" target="rightFrame">添加会员</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('member/group');?>" target="rightFrame">会员组管理</a><i></i></li>
        </ul>     
    </dd> 

    <dd>
    <div class="title">
    <span><img src="<?php echo (AD_SKIN); ?>images/leftico02.png" /></span>文章管理
    </div>
    <ul class="menuson">
        <li><cite></cite><a href="<?php echo U('article/index');?>" target="rightFrame">文章列表</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('article/add');?>" target="rightFrame">添加文章</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('article/category');?>" target="rightFrame">文章分类</a><i></i></li>
        <li id="change"><cite></cite><a href="<?php echo U('article/change');?>" target="rightFrame" >回收站</a><i></i></li>
        </ul>     
    </dd> 

    <dd>
    <div class="title">
    <span><img src="<?php echo (AD_SKIN); ?>images/leftico02.png" /></span>单页管理
    </div>
    <ul class="menuson">
        <li><cite></cite><a href="<?php echo U('article/index');?>" target="rightFrame">单页列表</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('article/add');?>" target="rightFrame">添加单页</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('article/category');?>" target="rightFrame">单页分类</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('article/huishou');?>" target="rightFrame" id="">回收站</a><i></i></li>
        </ul>     
    </dd>

    <dd>
    <div class="title">
    <span><img src="<?php echo (AD_SKIN); ?>images/leftico02.png" /></span>产品管理
    </div>
    <ul class="menuson">
        <li><cite></cite><a href="<?php echo U('news/index');?>" target="rightFrame">产品列表</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('news/add');?>" target="rightFrame">添加产品</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('news/category');?>" target="rightFrame">产品分类</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('news/huishou');?>" target="rightFrame">回收站</a><i></i></li>
        </ul>     
    </dd>

    <dd>
    <div class="title">
    <span><img src="<?php echo (AD_SKIN); ?>images/leftico02.png" /></span>友情链接
    </div>
    <ul class="menuson">
        <li><cite></cite><a href="<?php echo U('news/index');?>" target="rightFrame">链接列表</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('news/add');?>" target="rightFrame">添加链接</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('news/category');?>" target="rightFrame">链接分类</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('news/huishou');?>" target="rightFrame">回收站</a><i></i></li>
        </ul>     
    </dd>

    <dd>
    <div class="title">
    <span><img src="<?php echo (AD_SKIN); ?>images/leftico01.png" /></span>管理信息
    </div>
    	<ul class="menuson">
        <li><cite></cite><a href="index.html" target="rightFrame">首页模版</a><i></i></li>
        <li><cite></cite><a href="right.html" target="rightFrame">数据列表</a><i></i></li>
        <li><cite></cite><a href="imgtable.html" target="rightFrame">图片数据表</a><i></i></li>
        <li><cite></cite><a href="form.html" target="rightFrame">添加编辑</a><i></i></li>
        <li><cite></cite><a href="imglist.html" target="rightFrame">图片列表</a><i></i></li>
        <li><cite></cite><a href="imglist1.html" target="rightFrame">自定义</a><i></i></li>
        <li><cite></cite><a href="tools.html" target="rightFrame">常用工具</a><i></i></li>
        <li><cite></cite><a href="filelist.html" target="rightFrame">信息管理</a><i></i></li>
        <li><cite></cite><a href="tab.html" target="rightFrame">Tab页</a><i></i></li>
        <li><cite></cite><a href="error.html" target="rightFrame">404页面</a><i></i></li>
        </ul>    
    </dd>
        
    
    <dd>
    <div class="title">
    <span><img src="<?php echo (AD_SKIN); ?>images/leftico02.png" /></span>其他设置
    </div>
    <ul class="menuson">
        <li><cite></cite><a href="#">编辑内容</a><i></i></li>
        <li><cite></cite><a href="#">发布信息</a><i></i></li>
        <li><cite></cite><a href="#">档案列表显示</a><i></i></li>
        </ul>     
    </dd> 
    
    
    <dd><div class="title"><span><img src="<?php echo (AD_SKIN); ?>images/leftico03.png" /></span>编辑器</div>
    <ul class="menuson">
        <li><cite></cite><a href="#">自定义</a><i></i></li>
        <li><cite></cite><a href="#">常用资料</a><i></i></li>
        <li><cite></cite><a href="#">信息列表</a><i></i></li>
        <li><cite></cite><a href="#">其他</a><i></i></li>
    </ul>    
    </dd>  
    
    
    <dd><div class="title"><span><img src="<?php echo (AD_SKIN); ?>images/leftico04.png" /></span>日期管理</div>
    <ul class="menuson">
        <li><cite></cite><a href="#">自定义</a><i></i></li>
        <li><cite></cite><a href="#">常用资料</a><i></i></li>
        <li><cite></cite><a href="#">信息列表</a><i></i></li>
        <li><cite></cite><a href="#">其他</a><i></i></li>
    </ul>
    
    </dd>   
    
    </dl>
    
</body>
</html>