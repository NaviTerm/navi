<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="<?php echo (AD_SKIN); ?>css/style.css" rel="stylesheet" type="text/css" />
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
<form action="<?php echo U('member/group_add');?>" method="post">
    <ul class="forminfo">
    <li><label>会员组名</label><input name="groupname" type="text" class="dfinput" value="" /><i>不能超过30个字符</i></li>
    <li><label>权限</label><input name="quanxian" type="text" class="dfinput" value="" /><i></i></li>
    <li><label>&nbsp;</label><input type="submit" class="btn" value="确认保存"/></li>
    </ul>
</form>    
    
    </div>


</body>

</html>