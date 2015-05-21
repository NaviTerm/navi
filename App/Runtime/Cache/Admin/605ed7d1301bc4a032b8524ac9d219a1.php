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
<form action="<?php if($user): echo U('member/edit'); else: echo U('member/add'); endif; ?>" method="post">
<?php if($user): ?><input type="hidden" name="userid" value="<?php echo ($user['userid']); ?>" /><?php endif; ?>
    <ul class="forminfo">
    <li><label>用户名</label><input name="username" type="text"  class="dfinput" value="<?php echo ($user['username']); ?>"
    <?php if($user['password']): ?>readonly="readonly"<?php endif; ?> /><i>用户不能超过30个字符</i></li>
    <li><label>密码</label><input name="password" type="text" class="dfinput"  value=""
     <?php if($user['password']): ?>placeholder='无需修改请留空'<?php endif; ?> /><i>用户密码</i></li>
    <li><label>真实姓名</label><input name="truename" type="text" class="dfinput"  value="<?php echo ($user['truename']); ?>" /><i></i></li>
    <li><label>邮箱</label><input name="email" type="email" class="dfinput"  value="<?php echo ($user['email']); ?>" /><i></i></li>
    <li><label>联系电话</label><input name="mobile" type="number" class="dfinput"  value="<?php echo ($user['mobile']); ?>" /><i></i></li>
    <li><label>用户组</label><cite>
    <select name="groupid" style="border:1px solid #000;">
     <?php if($user[groupid] != null): ?><option value="<?php echo ($user['groupid']); ?>"><?php echo (group_name($user['groupid'])); ?></option><?php endif; ?>   
    <?php if(is_array($group)): foreach($group as $key=>$t): ?><option value="<?php echo ($t[id]); ?>"><?php echo ($t[name]); ?></option><?php endforeach; endif; ?>
    </select></cite></li>
    <li><label>&nbsp;</label><input name="" type="submit" class="btn" value="确认保存"/></li>
    </ul>
</form>    
    
    </div>


</body>

</html>