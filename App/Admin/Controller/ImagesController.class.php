<?php
namespace Admin\Controller;
use Think\Controller;
class ImagesController extends Controller{


		// public $path = $this->config['rootPath'].

/*
$formname  图片表单名
return $imgurl
*/
		public function imgup($formname,$id){

			$width=I('post.width',0,'intval');    //缩略图的宽度获取
			$height=I('post.height',0,'intval');     //缩略图的高度获取

			if($_FILES[$formname]['error'] != 4){ //如果有上传文件

				$config = array(
			        'exts'          =>  array('jpeg','jpg','png','gif'), //允许上传的文件后缀
			        'rootPath'      =>  '.'.PUB, //保存根路径
			        'savePath'      =>  'upload/', //保存路径
			        'replace'       =>  true, //存在同名是否覆盖
					);
				$upload = new \Think\Upload($config);
				$img = $_FILES[$formname];
				$result = $upload->uploadOne($img);
				if($result){
					$imgpath = '.'.PUB.$result['savepath'].$result['savename'];//生成图片地址
					/*图片上传成功 开始制作缩略图*/
					 $images=new \Think\Image();          //实例化图片处理类
					 $images->open($imgpath);      		 //打开要处理的图片
				     $images->thumb($width,$height,2);  //设置处理后图片的高度宽度 1等比缩放 2裁剪填充
			         $thumb = PUB.$result['savepath'].$result['savename'].'.thumb.'.$result['ext'];//缩略图保存路径
		             $thumb_info=$images->save('.'.$thumb);
		          	 if( $thumb_info ){
			          	 unlink($imgpath);//删除原图
			           	 echo "<script>parent.callback('".$thumb."',true,'".$id."')</script>"; 	
		           	}else{
		           		 echo "<script>parent.callback('".$thumb."',false,'".$id."')</script>";
		           	}
					/*缩略图结束*/
				}else{
					return $upload->getError();
				}	
			}else{
				return $_FILES[$formname]['error'];
			}
		}


}