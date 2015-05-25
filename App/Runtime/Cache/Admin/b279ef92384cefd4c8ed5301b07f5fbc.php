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
<form action="<?php if($list): echo U('message/update'); else: echo U('message/add'); endif; ?>" method="post">
    <input type="hidden" name="itemid" value="<?php echo ($list[itemid]); ?>">
    <ul class="forminfo">
    <li>
        <label style="height:25px;line-height:25px;"><span class="f_red">*</span>留言分类</label>
        <select name="typeid" id="typeid" style="border: 1px solid rgb(169, 169, 169);height:25px;">
            <option value="1" <?php if($list[typeid] == 1): ?>selected<?php endif; ?>>问题</option>
            <option value="2" <?php if($list[typeid] == 2): ?>selected<?php endif; ?>>建议</option>
            <option value="3" <?php if($list[typeid] == 3): ?>selected<?php endif; ?>>合作</option>
            <option value="4" <?php if($list[typeid] == 4): ?>selected<?php endif; ?>>投诉</option>
        </select>
    </li>
    <li>
        <label><span class="f_red">*</span>联系人</label>
        <input name="username" id="username" type="text" placeholder="请填写名称" class="dfinput" value="<?php echo ($list[username]); ?>"/>
    </li>
    <li>
        <label><span class="f_red">*</span>手机号码</label>
        <input name="telephone" id="telephone" value="<?php echo ($list[telephone]); ?>" type="tel" class="dfinput" value="<?php echo ($list[telephone]); ?>" placeholder="请填写手机号码"/>
    </li>
    <li>
        <label>QQ</label>
        <input name="qq" id="qq" value="<?php echo ($list[qq]); ?>" type="number" class="dfinput" value="<?php echo ($list[qq]); ?>" placeholder="请填写QQ号码"/>
    </li>
    <li>
        <label>Email</label>
        <input name="email" id="email" value="<?php echo ($list[email]); ?>" type="email" class="dfinput" value="<?php echo ($list[email]); ?>" placeholder="请填写邮箱地址"/>
    </li>
    <li>
        <label><span class="f_red">*</span>留言内容</label>
        <textarea class="link-textarea" name="content" id="content"><?php echo ($list[content]); ?></textarea>
    </li>
    <li>
        <label>&nbsp;</label>
        <input name="" type="submit" class="btn" value="确认添加"/>
    </li>
    </ul>
</form>    
    
    </div>


</body>

</html>