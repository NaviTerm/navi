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


<link rel="stylesheet" href="<?php echo (DH_SKIN); ?>css/style.css" type="text/css" media="all" />
<!--[if lt IE 9]><script type="text/javascript" src="<?php echo (DH_SKIN); ?>js/html5.js" ></script><![endif]-->
</head>
<body >

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
<section id="shownews">
  <div class="cat_title">
    <div class="wrapper">
      <h2><strong>NEWS</strong>新闻</h2>
      <p>最近正在折腾...<br/>
        Recently is to do ...</p>
    </div>
    <div class="cate_abso">
    	<?php if(is_array($Category)): $i = 0; $__LIST__ = $Category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Category): $mod = ($i % 2 );++$i;?><a href="<?php echo U('index?cat='.$Category['id']);?>" class="news_category"><?php echo ($Category["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
  </div>
  <article>
  
  
  
  <?php if(is_array($show)): $i = 0; $__LIST__ = $show;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$show): $mod = ($i % 2 );++$i;?><h3 class="news_title"><?php echo ($show["title"]); ?></h3>
      <span>点击量：</span>
        <div class="wrapper" id="detailed"> <!--img alt="" src="<?php echo ($show["thumb"]); ?>" tppabs="<?php echo ($show["thumb"]); ?>" style="width: 1024px; height: 533px;" /--><br /><?php endforeach; endif; else: echo "" ;endif; ?>
	  <?php if(is_array($content)): $i = 0; $__LIST__ = $content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$content): $mod = ($i % 2 );++$i;?><p><?php echo ($content["content"]); ?></p>
     </div><?php endforeach; endif; else: echo "" ;endif; ?>


    <div id="case_footer">
      <div class="wrapper showother"> <a class="backlist" href="index.htm" tppabs="http://mc18.eatdou.com/news/gsnews/">返回案例列表</a> </div>
    </div>
  </article>
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
  <a href="http://www.pibu.com/services/advise.html" target="_blank" title="意见、建议、反馈、投诉、举报等" class="feedback">意见反馈</a>
  <a href="javascript:void(0);" id="scrollup" title="返回页面顶部" class="scrollup"></a>
  <div class="qrcode_box" style="display: none;"></div>
</div>
<script type="text/javascript" src="<?php echo (DH_SKIN); ?>js/jquery.1.8.2.min.js" ></script>
<script type="text/javascript" src="<?php echo (DH_SKIN); ?>js/jquery.plugin.min.js" ></script>
<!--[if IE 6]>
<script type="text/javascript" src="<?php echo (DH_SKIN); ?>js/killie6.js" ></script>
<![endif]-->
<script type="text/javascript">
//<![CDATA[
	//Nav Start
	$("header>div>nav>ul>li>a").hover(function(){
		$(this).parent().stop(false,true).animate({"background-position-x":"6px",opacity:"0.7"},{duration:"normal", easing: "easeOutElastic"});
	},function(){
		$(this).parent().stop(false,true).animate({"background-position-x":"10px",opacity:"1"},{duration:"normal", easing: "easeOutElastic"});
	});
			<!----新闻---->
	<!---- 详细页 ----->
		//Show News Start
		$("#case_footer>.showother>.previous,#case_footer>.showother>.next").hover(function(){
			$("span>img",this).stop(false,true).animate({"left":"-20px"},{duration:"fast", easing: "easeOutQuad"});
			$("#show_thumb>img").hide().eq($(this).index($("#case_footer>.showother>.previous,#case_footer>.showother>.next"))).show();
		},function(){
			$("span>img",this).stop(false,true).animate({"left":"0"},{duration:"fast", easing: "easeOutQuad"});
		});
		//Show News End
					$("#gotop").click(function(){$('body,html').animate({scrollTop:0},500);})
	var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
	document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F3fe5b2b119b5fc4931e9c73e7071b0c6' type='text/javascript'%3E%3C/script%3E"));
	var bds_config = {"bdTop":203};
	$("#bdshell_js").attr("src","http://share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours());
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