<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="<?php echo (AD_SKIN); ?>css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo (AD_SKIN); ?>css/select.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo (AD_SKIN); ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo (AD_SKIN); ?>js/jquery.idTabs.min.js"></script>
<script type="text/javascript" src="<?php echo (AD_SKIN); ?>js/select-ui.min.js"></script>
<!-- 顶部加入 -->
<link rel="stylesheet" href="<?php echo (PUB); ?>kindeditor/themes/default/default.css" />
<script charset="utf-8" src="<?php echo (PUB); ?>kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="<?php echo (PUB); ?>kindeditor/lang/zh_CN.js"></script>
<!-- 屏蔽 -->
<!-- <script type="text/javascript" src="<?php echo (AD_SKIN); ?>editor/kindeditor.js"></script> -->
<script type="text/javascript">
  $(function(){
    var editor;
    KindEditor.ready(function(K) {
        editor = K.create('textarea[name="content"]', {
            allowFileManager : true,
            autoHeightMode : true,
            afterCreate : function() {
                this.loadPlugin('autoheight');
            },
            afterUpload : function(url) {
                var firstimageoption = '<option value="' + url + '">' + url + '</option>';
                var selectoption = '<option value="' + url + '" selected="selected">' + url + '</option>';
                $("#firstimage").append(firstimageoption);
                $("#images").append(selectoption);
            }
        });
    });
 })
</script>
<script type="text/javascript">
$(document).ready(function(e) {
    $(".select1").uedSelect({
		width : 345			  
	});
	$(".select2").uedSelect({
		width : 167  
	});
	$(".select3").uedSelect({
		width : 100
	});
  $('.background-images img').click(function(){
    $('.background-images img').removeClass();
    $(this).addClass('checked');
    $("input[name=background]").val($(this).attr('data-num'));
  });

});
</script>
<style>
 .select_img{
      display: none;
      width: 300px;
      height: 170px;
      position: absolute;
      left: 30%;
      top: 20%;
      background: #eee;
      z-index: 9999;
      border-radius: 10px;
      box-shadow: 0px 0px 15px 5px #ddd;
      padding: 10px 20px;
    }
.select_img span {
      display: inline-block;
      width: 45%;
}
.select_img .btn{
        float: left;
        text-align: center;
        line-height: 35px;
        margin:10px 2px;
}
.select_img .btn:hover{
        color:#000;
}
.select_img li{
        height:40px;
}
.select_img input[type=text]{
      height: 32px;
      line-height: 32px;
      border-top: solid 1px #a7b5bc;
      border-left: solid 1px #a7b5bc;
      border-right: solid 1px #ced9df;
      border-bottom: solid 1px #ced9df;
      text-indent: 10px;
      width:60%;
}
 .select_img_tj{
      display: none;
      width: 300px;
      height: 170px;
      position: absolute;
      left: 30%;
      top: 20%;
      background: #eee;
      z-index: 9999;
      border-radius: 10px;
      box-shadow: 0px 0px 15px 5px #ddd;
      padding: 10px 20px;
    }
.select_img_tj span {
      display: inline-block;
      width: 45%;
}
.select_img_tj .btn{
        float: left;
        text-align: center;
        line-height: 35px;
        margin:10px 2px;
}
.select_img_tj .btn:hover{
        color:#000;
}
.select_img_tj li{
        height:40px;
}
.select_img_tj input[type=text]{
      height: 32px;
      line-height: 32px;
      border-top: solid 1px #a7b5bc;
      border-left: solid 1px #a7b5bc;
      border-right: solid 1px #ced9df;
      border-bottom: solid 1px #ced9df;
      text-indent: 10px;
      width:60%;
}
#fun{
      display: none;
      width: 100%;
      height: 100%;
      position: fixed;
      left: 0;
      top: 0;
      background: rgba(0, 0, 0, 0.44);
      z-index: 999;
}
 #img_div{
padding: 10px 0 0 85px;
} 
#img_div img{
  max-width: 350px;
}
.tj_img{
  display: none;
}
#img_tj_div{
  position: absolute;left: 470px;border: 1px solid #ddd;width: 192px;height: 120px;top: -40px;overflow: hidden;
}
.background-images img{max-width:180px;opacity: 0.6;}
.background-images img:hover{opacity:1;}
.background-images .checked{opacity: 1}
</style>
<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    <li><a href="#">系统设置</a></li>
    </ul>
    </div>
    
    <div class="formbody">
    
    
    <div id="usual1" class="usual"> 
    
  	<div id="tab1" class="tabson">
    
    <div class="formtext">Hi，<b><?php if($_user['truename']): echo ($_user['truename']); else: echo ($_user['username']); endif; ?></b>，欢迎您使用企业历程发布功能！</div>
<form action="<?php if($list): echo U('banner/update'); else: echo U('banner/add'); endif; ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="itemid" value="<?php echo ($list[itemid]); ?>" />
    <ul class="forminfo">
    <li><label>标题<b>*</b></label><input name="title" type="text" class="dfinput" value="<?php echo ($list[title]); ?>" maxlength="20"  placeholder="请填写标题" style="width:576px;" required="required"/></li>
   
    <li><label>图片地址</label><input type="text" name="thumb" id="thumb" class="dfinput" readonly="" value="<?php echo ($list[thumb]); ?>" />
      <input  type="button" class="btn" value="上传" onclick="$('.select_img,#fun').show();"/>
        <input  type="button" class="btn" value="删除" onclick="del_img('thumb','img1')"/>
      <div id="img_div"style=""><img src="<?php echo (imgurl($list[thumb],150)); ?>" alt="" id="img1"/></div>
    </li>
    <li class="background-images"><label>选择背景</label>
    <input type="hidden" name="background" value="<?php echo ($list[background]); ?>"/>
    <img src="<?php echo (DH_SKIN); ?>images/banner_bg1.jpg" alt="" data-num="1"<?php if($list[background] == 1): ?>class="checked"<?php endif; ?>/>
    <img src="<?php echo (DH_SKIN); ?>images/banner_bg2.jpg" alt="" data-num="2"<?php if($list[background] == 2): ?>class="checked"<?php endif; ?>/>
    <img src="<?php echo (DH_SKIN); ?>images/banner_bg3.jpg" alt="" data-num="3"<?php if($list[background] == 3): ?>class="checked"<?php endif; ?>/><br />
    <span style="width:82px;display:inline-block"></span>
    <img src="<?php echo (DH_SKIN); ?>images/banner_bg4.jpg" alt="" data-num="4"<?php if($list[background] == 4): ?>class="checked"<?php endif; ?>/>
    <img src="<?php echo (DH_SKIN); ?>images/banner_bg5.jpg" alt="" data-num="5"<?php if($list[background] == 5): ?>class="checked"<?php endif; ?>/>
    <img src="<?php echo (DH_SKIN); ?>images/banner_bg6.jpg" alt="" data-num="6"<?php if($list[background] == 6): ?>class="checked"<?php endif; ?>/>
    </li>
    <li>
      <label>URL<b>*</b></label>  
      <input type="url" name="linkurl" class="dfinput" value="<?php echo ($list[linkurl]); ?>" placeholder="请输入连接地址,必须带http://" />
    </li>

    <li><label>描述<b>*</b></label>
    <textarea id="content7" name="content" style="width:700px;height:250px;visibility:hidden;background:black" ><?php echo ($list[introduce]); ?></textarea>
    </li>

    <li><label>发布时间</label><input name="addtime" type="datetime" class="dfinput" value="<?php echo (date('Y-m-d H:i:s',(isset($list[addtime]) && ($list[addtime] !== ""))?($list[addtime]):time())); ?>
" /></li> 

    <li><label>排序值</label><input name="listorder" type="number" class="dfinput" value="<?php if($list[listorder]): echo ($list[listorder]); else: ?>0<?php endif; ?>" placeholder="数字越大 越靠前"/></li> 

    <li><label>&nbsp;</label><input name="" type="submit" class="btn" value="马上发布"/></li>
    </ul>
</form>
    </div> 

       
	</div>
 <div class="select_img">
     <ul>
     <form name="uploadfrom" id="uploadfrom" action="<?php echo U('admin/images/imgup_png',array('formname'=>'img','id'=>'thumb'));?>" method="post"  enctype="multipart/form-data" target="tarframe">
         <li><h3>图片上传</h3></li>
         <li>本地图片:<input type="file" name="img"  id="img" value="" /></li>
         <li><span>宽度:<input type="text" name="width" id="width" value="500" /></span><span>高度:<input type="text" name="height" id="height" value="440" /></span></li>
         <li><a class="btn" onclick="$('#uploadfrom').submit();">上传</a><a class="btn" onclick="$('.select_img,#fun').hide();">取消</a></li>
       </form>
     </ul>
 </div>
<iframe width="0" height="0" style="display:none;" name="tarframe"></iframe>
 <div id="fun" onclick="$('.select_img,#fun').hide();"></div>

<script type="text/javascript"> 

      //$("#usual1 ul").idTabs(); 
    $('.tablelist tbody tr:odd').addClass('odd');    

    function callback(imgpath,success,id){ 

        if(id == 'thumb'){
            if(success==false){  
              $('.select_img,#fun').hide();
                alert(imgpath); 
            }else{ 
              $('#img').val('');//清除值
              $('#thumb').val(imgpath);//加入值
              $('#img1').attr('src',imgpath);//加入图片
              $('.select_img,#fun').hide();
                alert('上传成功!'); 
            }
        }else if(id == 'thumb_tj'){
            if(success==false){  
              $('.select_img_tj,#fun').hide();
                alert(imgpath); 
            }else{ 
              $('#img_tj').val('');//清除值
              $('#thumb_tj').val(imgpath);//加入值
              $('#img_tj1').attr('src',imgpath);//加入图片
              $('.select_img_tj,#fun').hide();
                alert('上传成功!'); 
            }
        }
  
    }
    function del_img(src_id,img_id){
      var src = $('#'+src_id).val();
      // alert(src);
      $.ajax({
        url:"<?php echo U('admin/article/del_img');?>",
        type:'post',
        data:{src:src},
        success:function(data){
          $('#'+src_id).val('');
          $('#'+img_id).attr('src','<?php echo (AD_SKIN); ?>images/nopic150.gif')
        },
        error:function(data){
          alert("删除失败");
          console.log(data);
        }
      })
    }
    function show_div(value){
      if(value == 2){
          $('.tj_img').show();
      }else{
         $('.tj_img').hide();
      }
    }
</script>

</div>
</body>
</html>