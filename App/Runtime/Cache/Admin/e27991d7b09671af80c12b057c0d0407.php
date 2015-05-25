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
$('.menuson li').remove('active');
$('#change').addClass('active');
});
</script>
<script type="text/javascript">
$(function(){
     $('.del_all').click(function(){
            var result = confirm('确定要恢复所选文章吗?');
            var id = '';
            if(result){
                $("[name=input_check]:checked").each(function() { 
                   id = id+',' + $(this).val();
                });
                if (id != '' && id.substr(0,1)==','){
                    id=id.substr(1);
                    $.ajax({
                        url:'<?php echo U("article/change");?>',
                        type:'POST',
                        data:{itemid:id,type:'back'},
                        success:function(data){
                            // var arr = id.split(',');
                            // for (var i = arr.length - 1; i >= 0; i--) {
                            //     $('#tr_'+arr[i]).remove();
                            // };
                            alert('恢复成功');
                            location.reload();//直接刷新页面
                            // console.log(data);
                        },
                        error:function(data){
                            // console.log("错了");
                            alert('删除失败,请刷新页面后重试');
                        }
                    });                    
                }else{
                    alert('请选择待恢复的文章!');
                }
                // console.log(id);
            }
      });
      $("#checkall").click(function() { 
            var flag = $(this).attr("checked"); 
            $("[name=input_check]:checkbox").each(function() { 
                $(this).attr("checked", flag); 
          });
      });
      $('.huifu').click(function(){
        alert('功能开发中 , 敬请期待');
      })
      
})
</script>

</head>


<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">数据表</a></li>
    <li><a href="#">回收站</a></li>
    </ul>
    </div>
    
    <div class="rightinfo">
    
    <div class="tools">
    
    	<ul class="toolbar">
        <li class="del_all"><span><img src="<?php echo (AD_SKIN); ?>images/t01.png" /></span>一键恢复</li>
        <!-- <li class="click"><span><img src="<?php echo (AD_SKIN); ?>images/t02.png" /></span></li> -->
<!-- <li><span><img src="<?php echo (AD_SKIN); ?>images/t03.png" /></span>删除</li>
<li><span><img src="<?php echo (AD_SKIN); ?>images/t04.png" /></span>统计</li> -->
        </ul>
    
    </div>
    
    
    <table class="tablelist">
    	<thead>
    	<tr>
        <th><input name="" type="checkbox" value="" id="checkall" /></th>
        <th>编号<i class="sort"><img src="<?php echo (AD_SKIN); ?>images/px.gif" /></i></th>
        <th>标题</th>
        <th>用户</th>
        <th>分类</th>
        <th>发布时间</th>
        <th>是否审核</th>
        <th>操作</th>
        </tr>
        </thead>
        <tbody>
<?php if(is_array($lists)): foreach($lists as $key=>$t): ?><tr>
        <td><input name="input_check" type="checkbox" value="<?php echo ($t[itemid]); ?>" /></td>
        <td><?php echo ($t['itemid']); ?></td>
        <td><?php echo ($t['title']); ?></td>
        <td><?php echo ($t['username']); ?></td>
        <td><?php echo (get_catname($t['catid'])); ?></td>
        <td><?php echo (date('Y-m-d H:i:s',$t['addtime'])); ?></td>
        <td><?php if($t['status']==3): ?>已审核<?php else: ?>未审核<?php endif; ?></td>
        <td><a href="<?php echo U('admin/article/change',array('itemid'=>$t[itemid],'type'=>'back'));?>" class="tablelink">恢复正常</a>   <a href="<?php echo U('admin/article/change',array('itemid'=>$t[itemid],'type'=>'del'));?>"  class="tablelink"> 删除</a></td>
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
    
    <script type="text/javascript">
	$('.tablelist tbody tr:odd').addClass('odd');
	</script>

</body>

</html>