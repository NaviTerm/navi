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
<script type="text/javascript">
$(function(){

      $("#checkall").click(function() { 
            var flag = $(this).attr("checked"); 
            $("[name=input_check]:checkbox").each(function() { 
                $(this).attr("checked", flag); 
          });
      });
      $(".listorder").click(function(){
            $("#listorder").submit();
      });
})
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
            <li class="listorder"><span><img src="<?php echo (AD_SKIN); ?>images/t02.png" /></span>更新排序</li>
            </ul>
        
        </div>
    <table class="imgtable">
    
    <thead>
    <tr>
    <th><input type="checkbox" id="checkall"/></th>
    <th>单页id</th>
    <th>排序</th>
    <th>标题</th>
    <th>发布人</th>
    <th>编辑时间</th>
    <th>点击</th>
    <th>操作</th>    
    </tr>
    </thead>
    
    <tbody>
    <form action="<?php echo U('page/listorder');?>" method="post" id="listorder">
<?php if(is_array($lists)): foreach($lists as $key=>$t): ?><tr id="tr_<?php echo ($t[itemid]); ?>">
    <td><input class="input_check" name="input_check" type="checkbox" value="<?php echo ($t[itemid]); ?>" /></td>
    <td><?php echo ($t[itemid]); ?></td> 
    <td width="90"><input type="text" name="listorder_<?php echo ($t[itemid]); ?>" value="<?php echo ($t[listorder]); ?>" class="input10" /></td>   
    <td><a href="#" title="<?php echo ($t[title]); ?>" target="_blank"><?php echo ($t[title]); ?></a></td>
    <td><?php echo ($t[username]); ?></td>
    <td><?php echo (date('Y-m-d H:i:s',(isset($t[edittime]) && ($t[edittime] !== ""))?($t[edittime]):time())); ?></td>
    <td><?php echo ($t[hits]); ?></td>    
    <td><a href="<?php echo U('admin/page/update',array('itemid'=>$t[itemid]));?>">编辑</a>&nbsp;&nbsp;<a href="<?php echo U('admin/page/del',array('itemid'=>$t[itemid]));?>">删除</a></td>
    </tr><?php endforeach; endif; ?>
</form>    
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