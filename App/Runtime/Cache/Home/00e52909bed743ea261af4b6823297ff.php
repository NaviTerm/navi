<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=1024" />
<meta name="baidu-site-verification" content="3ztG4oI0ku" />
<title>html5高档大气的企业网站模版-777模板www.777moban.com</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="<?php echo (DH_SKIN); ?>css/style.css"  type="text/css" media="all" />
<!--[if lt IE 9]><script type="text/javascript" src="<?php echo (DH_SKIN); ?>js/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo (DH_SKIN); ?>css/fa.css"  type="text/css" media="all" />
    <script type="text/javascript" src="<?php echo (DH_SKIN); ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo (DH_SKIN); ?>js/superslide.2.1.js"></script>
</head>
<body id="ruifoxHome">

<header>
    <div id="navbg"></div>
    <div class="wrapper">
        <h1 class="logo"><a href="<?php echo U('./index');?>"  title="建荣博客:www.njro168.com"><img src="<?php echo (DH_SKIN); ?>images/logo.png"  width="213" height="36" alt="建荣博客:www.njro168.com" /></a></h1>
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



<div class="slider">
    <div class="bd">
        <ul>
            <?php if(is_array($Banner)): $i = 0; $__LIST__ = $Banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Banner): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="<?php echo ($Banner["linkurl"]); ?>"><img src="<?php echo ($Banner["thumb"]); ?>" /></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
    <div class="hd">
        <ul>
        </ul>
    </div>
    <div class="pnBtn prev"> <span class="blackBg"></span> <a class="arrow" href="javascript:void(0)"></a> </div>
    <div class="pnBtn next"> <span class="blackBg"></span> <a class="arrow" href="javascript:void(0)"></a> </div>
</div>
<script type="text/javascript">
    jQuery(".slider .bd li").first().before( jQuery(".slider .bd li").last() );
    jQuery(".slider").hover(function(){ jQuery(this).find(".arrow").stop(true,true).fadeIn(300) },function(){ jQuery(this).find(".arrow").fadeOut(300) });				jQuery(".slider").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"leftLoop",autoPlay:true, vis:3,autoPage:true, trigger:"click"});
</script>


<section id="cases">
  <div class="cat_title wrapper">
    <h2>产品<strong>Products</strong></h2>
    <p>讲述我们的事迹<br/>
      Our Story </p>
    <a href="<?php echo U('./case');?>"  class="more">MORE+</a> </div>
  <ul>
      <?php if(is_array($Mall)): $i = 0; $__LIST__ = $Mall;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Mall): $mod = ($i % 2 );++$i;?><li><img src="<?php echo ($Mall["thumb"]); ?>"   width="240" height="152" alt="<?php echo ($Mall["title"]); ?>"/>
              <p> <strong><?php echo ($Mall["title"]); ?></strong><?php echo ($addtime["introduce"]); ?><br/>
                  <a href="<?php echo U('Case/show?id='.$Mall['itemid']);?>"  class="btn_blue">查看品牌故事</a>
                  <a href="javascript:if(confirm('http://www.777moban.com/'))window.location='http://www.777moban.com/'" target="_blank" class="openurl">访问品牌网站</a>
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
      <?php if(is_array($News)): $i = 0; $__LIST__ = $News;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$News): $mod = ($i % 2 );++$i;?><li> <a href="<?php echo U('News/show?id='.$News['itemid']);?>"><img src="<?php echo ($list["thumb"]); ?>"   width="90" height="90" alt="<?php echo ($News["title"]); ?>"/></a>
        <div class="newslist"> <a href="<?php echo U('News/show?id='.$News['itemid']);?>" title="<?php echo ($News["title"]); ?>"><?php echo ($News["title"]); ?></a> <span>UPTATED:2013/11/02</span>
          <p><?php echo ($News["introduce"]); ?></p>
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
                <a target="_blank" href="javascript:if(confirm('http://wpa.qq.com/msgrd?v=3&uin=429592913&site=qq&menu=yes'))window.location='http://wpa.qq.com/msgrd?v=3&uin=429592913&site=qq&menu=yes'"><img border="0" src="<?php echo (DH_SKIN); ?>images/qq.png"  alt="点击这里给我发消息" title="点击这里给我发消息"/></a><br/>
                电话：400 8888 8888<br/>
                传真：400 8888 8888<br/>
                电子邮件：admin@unn114.com<br/>
                公司地址：重庆市某某某某某某某某某<br/>
                备案编号：蜀ICP备000000001<br/>
                Copyright © 2013 - 2014 luidea.com All rights reserved.
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
            <p>Copyright © 2014 Pibu.com. All Rights Reserved. 版权所有 中国坯布网 苏ICP备10111637号-2 </p>
        </div>
    </div>
</footer>

<div class="bottom_tools">
  <a href="http://qiao.baidu.com/v3/?module=default&controller=im&action=index&ucid=1588640&type=n&siteid=6550019" class="kf_tools" target="_blank">客服</a>
  <a href="javascrip:void(0);" class="qr_tool">二维码</a>
  <a href="http://www.pibu.com/services/advise.html" target="_blank" title="意见、建议、反馈、投诉、举报等" class="feedback">意见反馈</a>
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