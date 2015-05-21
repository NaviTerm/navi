<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="<?php echo (AD_SKIN); ?>css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo (AD_SKIN); ?>js/jquery.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $(".click").click(function(){
  $(".tip").fadeIn(200);
  });
  
  $(".tiptop a").click(function(){
  $(".tip").fadeOut(200);
});

  $(".sure").click(function(){
  $(".tip").fadeOut(100);
});

  $(".cancel").click(function(){
  $(".tip").fadeOut(100);
});

});
</script>


</head>


<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">数据表</a></li>
    <li><a href="#">基本内容</a></li>
    </ul>
    </div>
    
    <div class="rightinfo">
    
    <div class="tools">
    
    	<ul class="toolbar">
        <li onclick="location='<?php echo U('admin/member/add');?>'"><span><img src="<?php echo (AD_SKIN); ?>images/t01.png" /></span>添加</li>
<!--         <li class="click"><span><img src="<?php echo (AD_SKIN); ?>images/t02.png" /></span>修改</li>
        <li><span><img src="<?php echo (AD_SKIN); ?>images/t03.png" /></span>删除</li>
        <li><span><img src="<?php echo (AD_SKIN); ?>images/t04.png" /></span>统计</li> -->
        </ul>
        
        
        <ul class="toolbar1">
        <li><span><img src="<?php echo (AD_SKIN); ?>images/t05.png" /></span>设置</li>
        </ul>
    
    </div>
    
    <table class="tablelist">
        <thead>
        <tr>
        <th><input name="" type="checkbox" value="" checked="checked"/></th>
        <th>用户id<i class="sort"><img src="<?php echo (AD_SKIN); ?>images/px.gif" /></i></th>
        <th>用户</th>
        <th>用户组</th>
        <th>真实姓名</th>
        <th>手机号</th>
        <th>最后登录时间</th>
        <th>操作</th>
        </tr>
        </thead>
        <tbody>
<?php if(is_array($list)): foreach($list as $count=>$t): ?><tr>
        <td><input name="userid[]" type="checkbox" value="<?php echo ($t[uesrid]); ?>" /></td>
        <td><?php echo ($t[userid]); ?></td>
        <td><?php echo ($t[username]); ?></td>
        <td><?php echo (group_name($t[groupid])); ?></td>
        <td><?php echo ($t[truename]); ?></td>
        <td><?php echo ($t[mobile]); ?></td>
        <td><?php echo (date('Y-m-d H:i:s',$t[lastlogin])); ?></td>
        <td><a href="<?php echo U('edit',array('username'=>$t[username]));?>" class="tablelink">编辑</a>     <a href="<?php echo U('del',array('username'=>$t[username]));?>" class="tablelink"> 删除</a></td>
        </tr><?php endforeach; endif; ?>   

        </tbody>
    </table>
   
    <div class="pagin">
    	<div class="message">共<i class="blue"><?php echo ($count+1); ?></i>条记录，当前显示第&nbsp;<i class="blue">2&nbsp;</i>页</div>
        <ul class="paginList">
        <li class="paginItem"><a href="javascript:;"><span class="pagepre"></span></a></li>
        <li class="paginItem"><a href="javascript:;">1</a></li>
        <li class="paginItem current"><a href="javascript:;">2</a></li>
        <li class="paginItem"><a href="javascript:;">3</a></li>
        <li class="paginItem"><a href="javascript:;">4</a></li>
        <li class="paginItem"><a href="javascript:;">5</a></li>
        <li class="paginItem more"><a href="javascript:;">...</a></li>
        <li class="paginItem"><a href="javascript:;">10</a></li>
        <li class="paginItem"><a href="javascript:;"><span class="pagenxt"></span></a></li>
        </ul>
    </div>
    
    
    <div class="tip">
    	<div class="tiptop"><span>提示信息</span><a></a></div>
        
      <div class="tipinfo">
        <span><img src="<?php echo (AD_SKIN); ?>images/ticon.png" /></span>
        <div class="tipright">
        <p>是否确认对信息的修改 ？</p>
        <cite>如果是请点击确定按钮 ，否则请点取消。</cite>
        </div>
        </div>
        
        <div class="tipbtn">
        <input name="" type="button"  class="sure" value="确定" />&nbsp;
        <input name="" type="button"  class="cancel" value="取消" />
        </div>
    
    </div>
    
    
    
    
    </div>
    
    <script type="text/javascript">
	$('.tablelist tbody tr:odd').addClass('odd');
	</script>

</body>

</html>