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
<form action="<?php if($list): echo U('link/update'); else: echo U('link/add'); endif; ?>" method="post">
    <input type="hidden" name="itemid" value="<?php echo ($list[itemid]); ?>">
    <ul class="forminfo">
    <li>
        <label style="height:25px;line-height:25px;"><span class="f_red">*</span>网站分类</label>
        <select name="typeid" id="typeid" style="border: 1px solid rgb(169, 169, 169);height:25px;">
            <option value="1" <?php if($list[typeid] == 1): ?>selected<?php endif; ?>>行业网站</option>
            <option value="2" <?php if($list[typeid] == 2): ?>selected<?php endif; ?>>公司网站</option>
        </select>
    </li>
    <li>
        <label>网站名称</label>
        <input name="title" id="title" type="text" placeholder="请填写网站名称" class="dfinput" value="<?php echo ($list[title]); ?>"/>
        <i>
            <select name="level" id="level" style="border: 1px solid rgb(169, 169, 169);">
                <option value="1" <?php if($list[level] == 1): ?>selected<?php endif; ?>>1级别</option>
                <option value="2" <?php if($list[level] == 2): ?>selected<?php endif; ?>>2级别</option>
                <option value="3" <?php if($list[level] == 3): ?>selected<?php endif; ?>>3级别</option>
            </select>
        </i>
    </li>
    <li>
        <label>网站介绍</label>
        <textarea class="link-textarea" name="introduce" id="introduce"><?php echo ($list[introduce]); ?></textarea>
    </li>
    <li>
        <label>网站地址</label>
        <input name="linkurl" id="linkurl" value="<?php echo ($list[linkurl]); ?>" type="url" class="dfinput" value="<?php echo ($list[linkurl]); ?>" placeholder="地址前面必须带http://"/>
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