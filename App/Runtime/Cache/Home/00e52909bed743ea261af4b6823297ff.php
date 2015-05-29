<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=1024" />
    <meta name="baidu-site-verification" content="3ztG4oI0ku" />
    <title><?php echo ($current); ?>-<?php echo ($config_webname); ?></title>
    <meta name="keywords" content="<?php echo ($config_keyword); ?>" />
    <meta name="description" content="<?php
 if( $channel == 'News_show' || $channel == 'Case_show' ){ echo mb_substr(strip_tags($content['0']['content']), 1,100,"UTF-8"); }else{ echo $config_description; } ?>" />


<link rel="stylesheet" href="<?php echo (DH_SKIN); ?>css/style.css"  type="text/css" media="all" />
<!--[if lt IE 9]><script type="text/javascript" src="<?php echo (DH_SKIN); ?>js/html5.js"></script><![endif]-->
</head>
<body id="ruifoxHome">

<header>
    <div id="navbg"></div>
    <div class="wrapper">
        <h1 class="logo"><a href="<?php echo U('./index');?>" ><img src="<?php echo (DH_SKIN); ?>images/logo.png"  width="213" height="36" /></a></h1>
        <nav>
            <ul>
                <li class="home"><a href="<?php echo U('./index');?>" >首页<span>网站首页！</span></a></li>
                <li class="about"><a href="<?php echo U('./news');?>"  title="企业新闻">企业新闻<span>企业动态？</span></a></li>
                <li class="service"><a href="<?php echo U('./service');?>"  title="网站建设">服务<span>我们能做什么？</span></a></li>
                <li class="cases"><a href="<?php echo U('./case');?>"  title="网页制作">案例<span>我们做过什么？</span></a></li>
                <li class="client"><a href="<?php echo U('./course');?>"  title="企业历程">企业历程<span>我们有什么？</span></a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- 查找最顶级栏目  -->
<section id="banner">
  <ul id="banner_img">
<?php if(is_array($banner)): foreach($banner as $k=>$t): ?><li style="background-image:url(<?php echo (DH_SKIN); ?>images/banner_bg<?php echo ($t[background]); ?>.jpg);<?php if($k==0): ?>display:block<?php endif; ?>">
      <div class="wrapper">
        <div class="ad_txt">
          <h2><?php echo (msubstr($t[title],0,20)); ?></h2>
          <p><?php echo ($t[introduce]); ?></p>
        </div>
        <div class="ban_img"> <img src="<?php echo ($t[thumb]); ?>"  width="506" height="404" alt="" /> </div>
      </div>
    </li><?php endforeach; endif; ?>

  </ul>
  <div id="banner_ctr">
    <div id="drag_ctr"></div>
    <ul>
      <li class="first-item">网站建设</li>
      <li>纺织产业平台</li>
      <li>应用系统开发</li>
      <li>品牌整合营销</li>
      <li>纺织数据中心</li>
      <li>展销会</li>
      <li>担保交易</li>
      <li>采购专场</li>
      <li>在线寻放样</li>
      <li class="last-item">网站设计</li>
    </ul>
    <div id="drag_arrow"></div>
  </div>
</section>
<section id="cases">
  <div class="cat_title wrapper">
    <h2>产品<strong>Products</strong></h2>
    <p>讲述我们的事迹<br/>
      Our Story </p>
    <a href="<?php echo U('./case');?>"  class="more">MORE+</a> </div>
  <ul>
      <?php if(is_array($Mall)): $i = 0; $__LIST__ = $Mall;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Mall): $mod = ($i % 2 );++$i;?><li><img src="<?php echo (imgurl($Mall["thumb"],150)); ?>"   width="240" height="152" alt="<?php echo (msubstr($Mall["title"],0,14)); ?>"/>
              <p> <strong><?php echo (msubstr($Mall["title"],0,14)); ?></strong><?php echo (msubstr($Mall["introduce"],0,14)); ?><br/>
                  <a href="<?php echo U('Case/show?id='.$Mall['itemid']);?>"  class="btn_blue">查看详细</a>
              </p>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
  </ul>
</section>

<section id="news">
  <div class="cat_title wrapper">
    <h2>新闻<strong>News</strong></h2>
    <p>关注我们、关注前沿<br/>
      Recently is to do ...</p>
    <a href="<?php echo U('./news');?>"  class="more">MORE+</a> </div>
  <div class="newsdata">
    <div class="newsad">
        <?php if(is_array($News_left)): $i = 0; $__LIST__ = $News_left;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$News_left): $mod = ($i % 2 );++$i;?><span><a href="<?php echo U('News/show?id='.$News['itemid']);?>"><img src="<?php echo ($News_left["thumb"]); ?>" /> </a></span><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
      <ul>
          <?php if(is_array($News)): $i = 0; $__LIST__ = $News;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$News): $mod = ($i % 2 );++$i;?><li> <a href="<?php echo U('News/show?id='.$News['itemid']);?>"><img src="<?php echo (imgurl($News["thumb"],150)); ?>"   width="90" height="90" alt="<?php echo ($News["title"]); ?>"/></a>
                  <div class="newslist"> <a href="<?php echo U('News/show?id='.$News['itemid']);?>" title="<?php echo ($News["title"]); ?>"><?php echo (msubstr($News["title"],0,14)); ?></a> <span>UPTATED:<?php echo (date('Y-m-d',$News["edittime"])); ?></span>
                      <p><?php echo (msubstr(strip_tags($News["introduce"]),0,200)); ?></p>
                  </div>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
  </div>
</section>

<footer>
    <div id="footerlink">
        <nav class="wrapper">
            <a href="<?php echo U('./index');?>" >首页</a>
            <a href="<?php echo U('./about');?>">关于</a>
            <a href="<?php echo U('./service');?>">服务</a>
            <a href="<?php echo U('./case');?>">案例</a>
            <a href="<?php echo U('./Course');?>" >历程</a>
            <a href="<?php echo U('./contact');?>">联系</a>
            <a href="<?php echo U('./news');?>">新闻</a>
        </nav>
    </div>
    <div id="footerinfo">
        <div class="wrapper">
            <h2>联系我们<strong>Contact</strong></h2>
            <p>
                <!--a target="_blank" href="javascript:if(confirm('http://wpa.qq.com/msgrd?v=3&uin=429592913&site=qq&menu=yes'))window.location='http://wpa.qq.com/msgrd?v=3&uin=429592913&site=qq&menu=yes'"><img border="0" src="<?php echo (DH_SKIN); ?>images/qq.png"  alt="点击这里给我发消息" title="点击这里给我发消息"/></a><br/-->
                电话：<?php echo ($config_mobile); ?><br/>
                电子邮件：<?php echo ($config_email); ?><br/>
                公司地址：<?php echo ($config_address); ?><br/>
                备案编号：<?php echo ($config_icp); ?><br/>
            </p>
            <img src="<?php echo (DH_SKIN); ?>images/map.png" id="homemap" width="260" height="190" alt="公司位置" />
        </div>
        <div class="links">
            <h2>友情链接<strong>Links</strong></h2>
            <p>
            <ul>
            <?php if(is_array($footer_Link)): $i = 0; $__LIST__ = $footer_Link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$footer_Link): $mod = ($i % 2 );++$i;?><li>
                    <a href="<?php echo ($footer_Link["linkurl"]); ?>" target='_blank'><?php echo ($footer_Link["title"]); ?></a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>
            </p>
        </div>
        <div class="Copyright">
            <p>Copyright © 2015 Pibu.com. All Rights Reserved. 版权所有 <a href="<?php echo ($config_domain); ?>"><?php echo ($config_webname); ?></a> <?php echo ($config_icp); ?> </p>
            <a href="http://webscan.360.cn/index/checkwebsite/url/navi.simon8.com" style="display:none"><img border="0" src="http://img.webscan.360.cn/status/pai/hash/4a0f4c6e01eed3d9765ef06222fafb57"/></a>
        </div>
    </div>
</footer>

<div class="bottom_tools">
  <a href="http://qiao.baidu.com/v3/?module=default&controller=im&action=index&ucid=1588640&type=n&siteid=6550019" class="kf_tools" target="_blank">客服</a>
  <a href="javascrip:void(0);" class="qr_tool">二维码</a>
  <a href="<?php echo U('./message');?>" target="_blank" title="意见、建议、反馈、投诉、举报等" class="feedback">意见反馈</a>
  <a href="javascript:void(0);" id="scrollup" title="返回页面顶部" class="scrollup"></a>
  <div class="qrcode_box" style="display: none;"></div>
</div>
<script type="text/javascript" src="<?php echo (DH_SKIN); ?>js/jquery.1.8.2.min.js" ></script>
<script type="text/javascript" src="<?php echo (DH_SKIN); ?>js/jquery.plugin.min.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="<?php echo (DH_SKIN); ?>js/killie6.js"></script>
<![endif]-->
<script type="text/javascript">
//<![CDATA[
	//Nav Start
	$("header>div>nav>ul>li>a").hover(function(){
		$(this).parent().stop(false,true).animate({"background-position-x":"6px",opacity:"0.7"},{duration:"normal", easing: "easeOutElastic"});
	},function(){
		$(this).parent().stop(false,true).animate({"background-position-x":"10px",opacity:"1"},{duration:"normal", easing: "easeOutElastic"});
	});
	<!--- 首页 ---->
	$('.ad_img,#banner_ctr,#client').pngFix();
	$(window).scroll(function(){
		$(this).scrollTop()>80?$("#navbg").stop(false,true).animate({opacity:"1"},"normal"):$("#navbg").stop(false,true).animate({opacity:"0.8"},"normal");
	});
	//Banner Start
	var curIndex=0;
	var time=800;
	var slideTime=5000;
	var adTxt=$("#banner_img>li>div>.ad_txt");
	var adImg=$("#banner_img>li>div>.ad_img");
	var int=setInterval("autoSlide()",slideTime);

	$("#banner_ctr>ul>li[class!='first-item'][class!='last-item']").click(function(){
		show($(this).index("#banner_ctr>ul>li[class!='first-item'][class!='last-item']"));
		window.clearInterval(int);
		int=setInterval("autoSlide()",slideTime);
	});
	
	function autoSlide(){
		curIndex+1>=$("#banner_img>li").size()?curIndex=-1:false;
		show(curIndex+1);
	}
	function show(index){
		$.easing.def="easeOutQuad";
		$("#drag_ctr,#drag_arrow").stop(false,true).animate({left:index*115+20},300);
		$("#banner_img>li").eq(curIndex).stop(false,true).fadeOut(time);
		adTxt.eq(curIndex).stop(false,true).animate({top:"340px"},time);
		adImg.eq(curIndex).stop(false,true).animate({right:"120px"},time);
		setTimeout(function(){
			$("#banner_img>li").eq(index).stop(false,true).fadeIn(time);
			adTxt.eq(index).children("p").css({paddingTop:"50px",paddingBottom:"50px"}).stop(false,true).animate({paddingTop:"0",paddingBottom:"0"},time);
			adTxt.eq(index).css({top:"0",opacity:"0"}).stop(false,true).animate({top:"170px",opacity:"1"},time);
			adImg.eq(index).css({right:"-50px",opacity:"0"}).stop(false,true).animate({right:"10px",opacity:"1"},time);
		},200)
		curIndex=index;
	}
	//Banner End
	//Cases Start
	if($.support.transition){
		$("#cases>ul>li").hover(function(){
			$("img",this).stop(false,true).transition({
				perspective: '300px',
				rotateY: '180deg',
				opacity: '0'
			});
			$("p",this).css({display:'block',opacity:'0',rotateY: '-180deg'}).stop(false,true).transition({
				perspective: '300px',
				rotateY: '0deg',
				opacity: '1'
			});
		},function(){
			$("img",this).show().stop(false,true).transition({
				perspective: '300px',
				rotateY: '0deg',
				opacity: '1'
			});
			$("p",this).stop(false,true).transition({
				perspective: '300px',
				rotateY: '180deg',
				opacity: '0'
			});
		});
	}else{
		$("#cases>ul>li").hover(function(){
			$("img",this).stop(false,true).slideUp("fast");
			$("p",this).stop(false,true).slideDown("fast");
		},function(){
			$("img",this).stop(false,true).slideDown("fast");
			$("p",this).stop(false,true).slideUp("fast");
		});
	}
	$("#cases>ul>li>img").lazyload({effect:"fadeIn",failurelimit:10});
						$("#scrollup").click(function(){$('body,html').animate({scrollTop:0},500);})
$(".qr_tool").mouseover(function(){
    $(".qrcode_box").css("display","block");
});
$(".qr_tool").mouseout(function(){
    $(".qrcode_box").css("display","none");
});
//]]>
</script>
</body>
</html>