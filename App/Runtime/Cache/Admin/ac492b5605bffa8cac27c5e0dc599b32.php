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

});
</script>
</head>


<body>

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
        <li onclick="location='<?php echo U('admin/article/add');?>'"><span><img src="<?php echo (AD_SKIN); ?>images/t01.png" /></span>添加文章</li>
<!--         <li class="click"><span><img src="<?php echo (AD_SKIN); ?>images/t02.png" /></span>修改</li>
        <li><span><img src="<?php echo (AD_SKIN); ?>images/t03.png" /></span>删除</li>
        <li><span><img src="<?php echo (AD_SKIN); ?>images/t04.png" /></span>统计</li> -->
        </ul>
<!--         
        
        <ul class="toolbar1">
        <li><span><img src="<?php echo (AD_SKIN); ?>images/t05.png" /></span>设置</li>
        </ul> -->
    
    </div>
    

    <table class="imgtable">
    
    <thead>
    <tr>
    <th>id</th>    
    <th width="100px;">缩略图</th>
    <th>标题</th>
    <th>分类</th>
    <th>级别</th>
    <th>发布人</th>
    <th>点击</th>
    <th>操作</th>    
    </tr>
    </thead>
    
    <tbody>
<?php if(is_array($lists)): foreach($lists as $key=>$t): ?><tr>
    <td><?php echo ($t[itemid]); ?></td>    
    <td class="imgtd"><img src="<?php echo (imgurl($t[thumb],150)); ?>" /></td>
    <td><a href="#"><?php echo ($t[title]); ?></a><p>发布时间：<?php echo (date('Y-m-d H:i:s',$t[addtime])); ?></p><p>编辑时间：<?php echo (date('Y-m-d H:i:s',$t[edittime])); ?></p></td>
    <td><?php echo (get_catname($t[catid])); ?></td>
    <td><?php echo (get_level_name($t[level])); ?></td>
    <td><?php echo ($t[username]); ?></td>
    <td><?php echo ($t[hits]); ?></td>    
    <td><a href="<?php echo U('admin/article/update',array('itemid'=>$t[itemid]));?>">编辑</a>&nbsp;&nbsp;<a href="<?php echo U('admin/article/del',array('itemid'=>$t[itemid]));?>">删除</a></td>
    </tr><?php endforeach; endif; ?>
    
    </tbody>
    
    </table>
    
    
    
    
    
   
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
    
<script type="text/javascript">
	$('.imgtable tbody tr:odd').addClass('odd');
	</script>
    
</body>

</html>