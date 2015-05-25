<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="<?php echo (AD_SKIN); ?>css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo (AD_SKIN); ?>js/jquery.js"></script>

<script type="text/javascript">
$(document).ready(function(){

  $(".tiptop a").click(function(){
  $(".tip,.tip1").fadeOut(200);
});

/*  $(".sure").click(function(){
  $(".tip").fadeOut(100);
});*/

  $(".cancel").click(function(){
  $(".tip,.tip1").fadeOut(100);
});
  $(".add_table").click(function(){
  $(".tip").fadeIn(200);
});

  
});
</script>
<script type="text/javascript">
$(function(){
     $('.confirm').click(function(){
            var result = confirm('确定要删除所选分类吗?');
            // alert(result);
            var id = '';
            if(result){
                // console.log($("[name=input_check]:checked"));
                $("[name=input_check]:checked").each(function() { 
                   // console.log($(this).value);
                   id = id+',' + $(this).val();
                });
                if (id != '' && id.substr(0,1)==','){
                    id=id.substr(1);
                    $.ajax({
                        url:'<?php echo U("category/del");?>',
                        type:'POST',
                        data:{id,id},
                        success:function(data){
/*                            var arr = id.split(',');
                            for (var i = arr.length - 1; i >= 0; i--) {
                                $('#tr_'+arr[i]).remove();
                            };*/
                            //alert('分类删除成功');
                            location.reload();
                            // console.log(data);
                        },
                        error:function(data){
                            // console.log("错了");
                            alert('删除失败,请刷新页面后重试');
                        }
                    });                    
                }else{
                    alert('请选择分类!');
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
      $(".form_all").click(function(){
            $("#form_all").submit();
            // alert('ahhh');
      });
})
   function change_cat(id){
        var name = $('[name=name_'+id+']:text').val();
        var dir = $('[name=dir_'+id+']:text').val();
        var listorder = $('[name=listorder_'+id+']:text').val();
        $("#change_id").val(id);
        $('#change_name').val(name);
        $('#change_dir').val(dir);
        $('#change_listorder').val(listorder);
        $(".tip1").fadeIn(500);
   }
</script>
<style type="text/css">
    #fromdata .input30{
        border:1px solid #ddd;
    }
    .tip1{
          width: 485px;
          height: 260px;
          position: absolute;
          top: 10%;
          left: 30%;
          background: #fcfdfd;
          box-shadow: 1px 8px 10px 1px #9b9b9b;
          border-radius: 1px;
          display: none;
          z-index: 111111
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
    
    <div class="tools">
    
    	<ul class="toolbar">
        <li class="add_table"><span><img src="<?php echo (AD_SKIN); ?>images/t01.png" /></span>添加</li>
        <li class="confirm"><span><img src="<?php echo (AD_SKIN); ?>images/t03.png" /></span>删除</li>        
        <li class="form_all"><span><img src="<?php echo (AD_SKIN); ?>images/t02.png" /></span>更新分类</li>
<!-- <li><span><img src="<?php echo (AD_SKIN); ?>images/t04.png" /></span>统计</li> -->
        </ul>
        
        
<!--         <ul class="toolbar1">
        <li><span><img src="<?php echo (AD_SKIN); ?>images/t05.png" /></span>设置</li>
        </ul> -->
    
    </div>
    
    
    <table class="tablelist">
    	<thead>
    	<tr>
        <th><input  type="checkbox"  id="checkall"/></th>
        <th>分类id<i class="sort"><img src="<?php echo (AD_SKIN); ?>images/px.gif" /></i></th>
         <th>排序</th>       
        <th>分类名称</th>
        <th>分类目录</th>
        <th>文章数</th>
        <th>操作</th>
        </tr>
        </thead>
<form action="<?php echo U('category/update_all');?>" method="post" id="form_all">
        <tbody id="fromdata">
        <?php if(is_array($lists)): foreach($lists as $key=>$t): ?><tr id="tr_<?php echo ($t[id]); ?>">
                <td><input class="input_check" name="input_check" type="checkbox" value="<?php echo ($t[id]); ?>" /></td>
                <td><?php echo ($t[id]); ?></td>
                <td><input type="text" name="listorder_<?php echo ($t[id]); ?>" value="<?php echo ($t[listorder]); ?>" class="input30"/></td>        
                <td><input type="text" name="name_<?php echo ($t[id]); ?>" value="<?php echo ($t[name]); ?>"  class="input30" /></td>
                <td><input type="text" name="dir_<?php echo ($t[id]); ?>" value="<?php echo ($t[dir]); ?>" class="input30"  /></td>
                <td><?php echo ($t[items]); ?></td>
                <td><a onclick="change_cat(<?php echo ($t[id]); ?>)" class="tablelink">编辑</a>     <a href="<?php echo U('category/del','id='.$t[id]);?>" class="tablelink"> 删除</a></td>
                </tr><?php endforeach; endif; ?>
        </tbody>
</form>
    </table>
    
   
    <div class="pagin">
        <div class="message">共<i class="blue"><?php echo ($count); ?></i>条记录</div>
       <div class="page">
           <?php echo ($page); ?>
       </div>
    </div>
 
     <div class="tip">
         <form action="<?php echo U('category/add');?>" method="post">    
                <div class="tiptop"><span>添加分类</span><a></a></div>  
              <div class="tipinfo" style="margin-left:0">
               <table class="tablelist">
                    <tr>
                        <th>分类名</th>
                        <th>分类目录</th>
                        <th>排序</th>
                    </tr>

                    <tr>
                        <td><input name="name" required="" type="text" class="input30" value="" /></td>
                        <td><input name="dir" type="text" class="input30" value="" /></td>
                        <td><input name="listorder" type="number" class="input30" value="0" /></td>
                    </tr>
                  
                </table>  
                </div>
                
                <div class="tipbtn">
                <input name="" type="submit"  class="sure" value="确定" />&nbsp;
                <input name="" type="button"  class="cancel" value="取消" />
                </div>
        </form>      
    </div>   

     <div class="tip1" >
         <form action="<?php echo U('category/update');?>" method="post">    
                <div class="tiptop"><span>修改分类</span><a></a></div>  
              <div class="tipinfo" style="margin-left:0">
               <table class="tablelist">
                    <tr>
                        <th>分类名</th>
                        <th>分类目录</th>
                        <th>排序</th>
                    </tr>
                    <tr>
                        <td><input id="change_id" type="hidden" name="id" value="" /><input id="change_name" name="name" required="" type="text" class="input30" value="" /></td>
                        <td><input id="change_dir" name="dir" type="text" class="input30" value="" /></td>
                        <td><input id="change_listorder" name="listorder" type="number" class="input30" value="0" /></td>
                    </tr>
                </table>  
                </div>
                
                <div class="tipbtn">
                <input name="" type="submit"  class="sure" value="确定" />&nbsp;
                <input name="" type="button"  class="cancel" value="取消" />
                </div>
        </form>      
    </div>  
<!--     <div class="tip">
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

</div> -->
    
    
    
    
    </div>
    
    <script type="text/javascript">
	$('.tablelist tbody tr:odd').addClass('odd');
	</script>

</body>

</html>