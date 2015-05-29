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
     $('.del_all').click(function(){
            var result = confirm('确定要删除所选文章吗?');
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
                        url:'<?php echo U("article/del");?>',
                        type:'POST',
                        data:{itemid:id},
                        success:function(data){
                            // var arr = id.split(',');
                            // for (var i = arr.length - 1; i >= 0; i--) {
                            //     $('#tr_'+arr[i]).remove();
                            // };
                            // alert('分类删除成功');
                            location.reload();//直接刷新页面
                            // console.log(data);
                        },
                        error:function(data){
                            // console.log("错了");
                            alert('删除失败,请刷新页面后重试');
                        }
                    });                    
                }else{
                    alert('请选择文章!');
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
      $(".listorder").click(function(){
            $("#listorder").submit();
      });
})
   function change_cat(){
            var result = confirm('确定要移动所选文章吗?');
            // alert(result);
            var id = '';
            var catid = $("#change_cat").val();
            if(result && catid > 0){
                $("[name=input_check]:checked").each(function() { 
                   id = id+',' + $(this).val();//得到所选id
                });
                if(id){
                        $.ajax({
                            url:"<?php echo U('article/change_cat');?>",
                            type:'POST',
                            data:{id:id,catid:catid},
                            success:function(data){
                                alert("移动成功");
                                location.reload();
                                console.log(data);
                            },
                            error:function(data){
                                alert('移动失败');
                                location.reload();
                            }
                        });
                }else{
                    alert("请选择文章");
                }

            }
   }
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
        <!-- <li class=""><span><img src="<?php echo (AD_SKIN); ?>images/t02.png" /></span>移动到</li>         -->
        <li>
            <select id="change_cat" style="height:100%" onchange="change_cat()">
                     <option value="0">移动到分类</option>
                <?php if(is_array($category)): foreach($category as $key=>$t): ?><option value="<?php echo ($t[id]); ?>"><?php echo ($t[name]); ?></option><?php endforeach; endif; ?>    
            </select>
        </li>
        <li class="del_all"><span><img src="<?php echo (AD_SKIN); ?>images/t03.png" /></span>删除</li>
        <li class="listorder"><span><img src="<?php echo (AD_SKIN); ?>images/t02.png" /></span>更新排序</li>
        </ul>
    
    </div>
    

    <table class="imgtable">
    
    <thead>
    <tr>
    <th width="50"><input type="checkbox" id="checkall"/></th>
    <th width="50">id</th>
    <th width="80">排序</th>
    <th width="120">缩略图</th>
    <th>标题</th>
    <th>分类</th>
    <th width="80">级别</th>
    <th width="80">发布人</th>
    <th width="50">点击</th>
    <th width="100">操作</th>    
    </tr>
    </thead>
    
    <tbody>

    <form action="<?php echo U('article/listorder');?>" method="post" id="listorder">
<?php if(is_array($lists)): foreach($lists as $key=>$t): ?><tr id="tr_<?php echo ($t[itemid]); ?>">
    <td><input class="input_check" name="input_check" type="checkbox" value="<?php echo ($t[itemid]); ?>" /></td>
    <td><?php echo ($t[itemid]); ?></td> 
    <td width="90"><input type="text" name="listorder_<?php echo ($t[itemid]); ?>" value="<?php echo ($t[listorder]); ?>" class="input10" /></td>   
    <td class="imgtd"><img src="<?php echo (imgurl($t[thumb],150)); ?>" /></td>
    <td><a href="#" title="<?php echo (msubstr($t[title],0,20)); ?>" target="_blank"><?php echo (msubstr($t[title],0,20)); ?></a><p>发布时间：<?php echo (date('Y-m-d H:i:s',$t[addtime])); ?></p><p>编辑时间：<?php echo (date('Y-m-d H:i:s',$t[edittime])); ?></p></td>
    <td><?php echo (get_catname($t[catid])); ?></td>
    <td><?php echo (get_level_name($t[level])); ?></td>
    <td><?php echo ($t[username]); ?></td>
    <td><?php echo ($t[hits]); ?></td>    
    <td><a href="<?php echo U('admin/article/update',array('itemid'=>$t[itemid]));?>">编辑</a>&nbsp;&nbsp;<a href="<?php echo U('admin/article/del',array('itemid'=>$t[itemid]));?>">删除</a></td>
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