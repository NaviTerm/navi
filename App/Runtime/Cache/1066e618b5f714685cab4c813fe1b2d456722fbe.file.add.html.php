<?php /* Smarty version Smarty-3.1.6, created on 2015-05-18 16:34:27
         compiled from "./App/Admin/View\Member\add.html" */ ?>
<?php /*%%SmartyHeaderCode:313685559a33d9701f6-56766228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1066e618b5f714685cab4c813fe1b2d456722fbe' => 
    array (
      0 => './App/Admin/View\\Member\\add.html',
      1 => 1431938046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313685559a33d9701f6-56766228',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5559a33da663a',
  'variables' => 
  array (
    'Think' => 0,
    'group' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5559a33da663a')) {function content_5559a33da663a($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="<?php echo $_smarty_tpl->tpl_vars['Think']->value['AD_SKIN'];?>
css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">表单</a></li>
    </ul>
    </div>
    
    <div class="formbody">
    
    <div class="formtitle"><span>基本信息</span></div>
    
    <ul class="forminfo">
    <li><label>用户名</label><input name="username" type="text" class="dfinput" /><i>用户不能超过30个字符</i></li>
    <li><label>密码</label><input name="password" type="text" class="dfinput" /><i>用户密码</i></li>
    <li><label>真实姓名</label><input name="truenmae" type="text" class="dfinput" /><i></i></li>
    <li><label>邮箱</label><input name="email" type="email" class="dfinput" /><i></i></li>
    <li><label>联系电话</label><input name="mobile" type="number" class="dfinput" /><i></i></li>
    <li><label>用户组</label><cite>
    <select name="groupid" >
    <?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['t']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['t']->value['name'];?>
</option>
    <?php } ?>
    </select></cite></li>
    <li><label>&nbsp;</label><input name="" type="button" class="btn" value="确认保存"/></li>
    </ul>
    
    
    </div>


</body>

</html>
<?php }} ?>