<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="<?php echo (AD_SKIN); ?>css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo (AD_SKIN); ?>js/jquery.js"></script>
<script language="javascript">
$(function(){	
	//导航切换
	$(".imglist li").click(function(){
		$(".imglist li.selected").removeClass("selected")
		$(this).addClass("selected");
	})	
})	
</script>
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
$("#Qx").click(function() { 
    var flag = $(this).attr("checked"); 
    $("[type]:checkbox").each(function() { 
         $(this).attr("checked", flag); 
        $(this).val();
    });
});
$(".form_seva").click(function(){
    $("#form_seva").submit();
});

});
</script>
</head>


<body>
<style type="text/css">
.imgtable th{
    text-align: center;
    text-indent: 0 !important;
}
.imgtd input{
    border: 1px solid gray;
}
.imgtable tr td{
    text-align: center;
    text-indent: 0 !important;
}
.message{
    overflow: hidden;
    border: 1px solid gray;
    margin-bottom: 20px;
}
.message li{
    padding: 10px;
    border-bottom: 1px solid gray;
    margin-bottom: -1px;
    overflow: hidden;
    height: 30px;
    line-height: 30px;
    font-size: 14px;
    font-weight: bold;
}
.message li span{
    float: left;
    margin-right: 10px;
    font-size: 14px;
    font-weight: bold;
}
.message li .message_updata{
    float: right;
}
.message li .message_updata a{
    color: blue;
}
.message li .message_updata a:hover{
    text-decoration: underline;
    color: red;
}
</style>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">图片列表</a></li>
    </ul>
    </div>
    
    <div class="rightinfo">
    
    <div class="tools">
    
    	<ul class="toolbar">
        <li onclick="location='<?php echo U('admin/message/add');?>'">
            <span><img src="<?php echo (AD_SKIN); ?>images/t01.png" /></span>添加留言
        </li>
<!--         <li class="click"><span><img src="<?php echo (AD_SKIN); ?>images/t02.png" /></span>修改</li>
        <li><span><img src="<?php echo (AD_SKIN); ?>images/t03.png" /></span>删除</li>
        <li><span><img src="<?php echo (AD_SKIN); ?>images/t04.png" /></span>统计</li> -->
        </ul>
<!--         
        
        <ul class="toolbar1">
        <li><span><img src="<?php echo (AD_SKIN); ?>images/t05.png" /></span>设置</li>
        </ul> -->
    
    </div>
    
<form method="post" id="form_seva" action="<?php echo U('message/update_seva');?>">
<?php if(is_array($lists)): foreach($lists as $key=>$t): ?><ul class="message">
        <li>
            <span>编号:<?php echo ($t[itemid]); ?></span>
            <span>时间:<?php echo (date('Y-m-d H:i:s',$t[addtime])); ?></span>
            <span>IP:<?php echo ($t[ip]); ?></span>
            <span>联系人:<?php echo ($t[username]); ?></span>
            <span>QQ:<?php echo ($t[qq]); ?></span>
            <span>手机号码:<?php echo ($t[telephone]); ?></span>
            <span class="message_updata">
                <a href="<?php echo U('admin/message/update',array('itemid'=>$t[itemid]));?>">编辑</a>&nbsp;&nbsp;
                <a href="<?php echo U('admin/message/delete',array('itemid'=>$t[itemid]));?>">删除</a>
            </span>
        </li>
        <li>
            <span class="f_red">[<?php echo (get_message_type($t[typeid])); ?>]</span>
            <?php echo ($t[content]); ?>
        </li>
    </ul><?php endforeach; endif; ?>
</form>
    
    
    
    
   
    <div class="pagin">
        <div class="message">共<i class="blue"><?php echo ($count); ?></i>条记录</div>
       <div class="page">
           <?php echo ($page); ?>
       </div>
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

</body>

</html>