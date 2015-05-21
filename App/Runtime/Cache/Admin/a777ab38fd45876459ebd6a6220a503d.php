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

 function group_edit(data){
    var id = data.name.replace("groupid_","");
    // console.log(id);
    var message = '';
    var text = '';    
    if(data.value){
        $.ajax({
            url:"<?php echo U('member/group_edit');?>",
            type:"post",
            data:{id:id,name:data.value},
            success:function(data){
               $("#message").html("修改成功");
               setTimeout("delete_html()",5000);
            },
            error:function(data){
                $("#message").html("修改失败");
                setTimeout("delete_html()",5000);
            }
        });   
    }
 }

 function delete_html(){
        $("#message").html("");
 }


</script>
<style>
    .input{
         border: 1px solid #C2BDBD;
          height: 89%;
          width: 89%;
          padding: 0 0 0 10px;
    }
</style>

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
    
    <table class="tablelist" style="width:40%">
        <thead>
        <tr>
        <th>会员组id<i class="sort"><img src="<?php echo (AD_SKIN); ?>images/px.gif" /></i></th>
        <th>组名称</th>
        <th>用户数量</th>
        <th>操作</th>
        </tr>
        </thead>
        <tbody>
    <?php if(is_array($list)): foreach($list as $count=>$t): ?><tr>
            <td><?php echo ($t[id]); ?></td>
            <td><input type="text" name="groupid_<?php echo ($t[id]); ?>" data="<?php echo ($t[id]); ?>" value="<?php echo ($t[name]); ?>" onblur="group_edit(this)" class="input" /></td>
            <td><?php echo ($t[count]); ?></td>
            <td><a href="<?php echo U('member/group_del',array('id'=>$t[id]));?>" class="tablelink"> 删除</a></td>
            </tr><?php endforeach; endif; ?>   

        </tbody>
    </table>
<div><h3 id="message"></h3></div>
    <div class="tools" style="margin:20px 0 0 0;">
    
        <ul class="toolbar">
        <li onclick="location='<?php echo U('member/group_add');?>'"><span><img src="<?php echo (AD_SKIN); ?>images/t01.png" /></span>添加</li>
<!--         <li><span><img src="<?php echo (AD_SKIN); ?>images/t02.png" /></span>修改</li>
        <li><span><img src="<?php echo (AD_SKIN); ?>images/t03.png" /></span>删除</li>
        <li><span><img src="<?php echo (AD_SKIN); ?>images/t04.png" /></span>统计</li> -->
        </ul>
<!--         <ul class="toolbar1">
        <li><span><img src="<?php echo (AD_SKIN); ?>images/t05.png" /></span>设置</li>
        </ul> -->
    
    </div>
    
    <div class="pagin">
    	<div class="message">共<i class="blue"><?php echo ($count+1); ?></i>条记录</div>
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