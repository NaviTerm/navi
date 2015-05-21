<?php /* Smarty version Smarty-3.1.6, created on 2015-05-18 16:36:14
         compiled from "./App/Admin/View\Index\top.html" */ ?>
<?php /*%%SmartyHeaderCode:47685559a47eb8c9f8-30829433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '382f351ef43f8b895745d54d66a59dc18b59cb02' => 
    array (
      0 => './App/Admin/View\\Index\\top.html',
      1 => 1431938114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47685559a47eb8c9f8-30829433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Smarty' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5559a47ec6762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5559a47ec6762')) {function content_5559a47ec6762($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="<?php echo $_smarty_tpl->tpl_vars['Smarty']->value['AD_SKIN'];?>
css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="<?php echo $_smarty_tpl->tpl_vars['Smarty']->value['AD_SKIN'];?>
js/jquery.js"></script>
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

<body style="background:url(<?php echo $_smarty_tpl->tpl_vars['Smarty']->value['AD_SKIN'];?>
images/topbg.gif) repeat-x;">

    <div class="topleft">
    <a href="main.html" target="_parent"><img src="<?php echo $_smarty_tpl->tpl_vars['Smarty']->value['AD_SKIN'];?>
images/logo.png" title="系统首页" /></a>
    </div>
        
    <ul class="nav">
    <li><a href="default.html" target="rightFrame" class="selected"><img src="<?php echo $_smarty_tpl->tpl_vars['Smarty']->value['AD_SKIN'];?>
images/icon01.png" title="工作台" /><h2>工作台</h2></a></li>
    <li><a href="imgtable.html" target="rightFrame"><img src="<?php echo $_smarty_tpl->tpl_vars['Smarty']->value['AD_SKIN'];?>
images/icon02.png" title="模型管理" /><h2>模型管理</h2></a></li>
    <li><a href="imglist.html"  target="rightFrame"><img src="<?php echo $_smarty_tpl->tpl_vars['Smarty']->value['AD_SKIN'];?>
images/icon03.png" title="模块设计" /><h2>模块设计</h2></a></li>
    <li><a href="tools.html"  target="rightFrame"><img src="<?php echo $_smarty_tpl->tpl_vars['Smarty']->value['AD_SKIN'];?>
images/icon04.png" title="常用工具" /><h2>常用工具</h2></a></li>
    <li><a href="computer.html" target="rightFrame"><img src="<?php echo $_smarty_tpl->tpl_vars['Smarty']->value['AD_SKIN'];?>
images/icon05.png" title="文件管理" /><h2>文件管理</h2></a></li>
    <li><a href="tab.html"  target="rightFrame"><img src="<?php echo $_smarty_tpl->tpl_vars['Smarty']->value['AD_SKIN'];?>
images/icon06.png" title="系统设置" /><h2>系统设置</h2></a></li>
    </ul>
            
    <div class="topright">    
    <ul>
    <li><span><img src="<?php echo $_smarty_tpl->tpl_vars['Smarty']->value['AD_SKIN'];?>
images/help.png" title="帮助"  class="helpimg"/></span><a href="#">帮助</a></li>
    <li><a href="#">关于</a></li>
    <li><a href="login.html" target="_parent">退出</a></li>
    </ul>
     
    <div class="user">
    <span>admin</span>
    <i>消息</i>
    <b>5</b>
    </div>    
    
    </div>

</body>
</html>
<?php }} ?>