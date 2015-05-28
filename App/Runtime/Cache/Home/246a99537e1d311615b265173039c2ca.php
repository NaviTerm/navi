<?php if (!defined('THINK_PATH')) exit();?>﻿
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
<meta name="viewport" content="width=1024" />
<title>成都城市设计研究中心_我的网站</title>
<meta name="keywords" content="成都城市设计研究中心" />
<meta name="description" content="成都市城市设计研究中心（英文缩写：CDUDC）是以城市设计和研究为主要方向的研究性机构，提供以城市运营为着眼点的相关咨询服务。是整合各方设计、咨询、研究资源的合作平台。为政府决" />     
<link rel="stylesheet" href="<?php echo (DH_SKIN); ?>css/style.css" type="text/css" media="all" />
<!--[if lt IE 9]><script type="text/javascript" src="<?php echo (DH_SKIN); ?>js/html5.js" ></script><![endif]-->
</head>
<body >

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


<!-- 查找最顶级栏目  -->
<section id="show_cases">
	<div class="cat_title">
		<div class="wrapper">
			<h2><strong>CASES</strong>案例</h2>
			<p>我们的作品，他们的故事<br/>Our work, their stories </p>
		</div>
	</div>
	
	<?php if(is_array($show)): $i = 0; $__LIST__ = $show;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$show): $mod = ($i % 2 );++$i;?><article>
		<div class="wrapper">
			<div id="overview">
				<div class="overview_bg"></div>
				<div id="case_info">
					<h1><img src="<?php echo ($show["thumb"]); ?>" tppabs="<?php echo ($show["thumb"]); ?>" width="180" height="120" alt="<?php echo ($list["title"]); ?>" /></h1>
					<ul>
						<li>名称：<?php echo ($show["title"]); ?></li>
						<li>分类：<?php echo (get_catname($show["catid"])); ?></li>
					</ul>
					<a href="javascript:if(confirm('http://www.cdudc.com/  点击这里给我发送临时消息'))window.location='http://www.cdudc.com/'" tppabs="http://www.cdudc.com/" class="btn_blue" target="_blank" rel="external nofollow">VISIT SITE 访问该网站</a>
					<div class="brief"><?php echo ($addtime["introduce"]); ?></div>
				</div>
			</div>
			<div id="detailed">
				<img alt="" src="<?php echo (DH_SKIN); ?>images/1-131102210508.jpg" tppabs="http://mc18.eatdou.com/uploads/allimg/131102/1-131102210508.jpg" /><img alt="" src="<?php echo (DH_SKIN); ?>images/1-131102210509.jpg" tppabs="http://mc18.eatdou.com/uploads/allimg/131102/1-131102210509.jpg" /><img alt="" src="<?php echo (DH_SKIN); ?>images/1-131102210509-50.jpg" tppabs="http://mc18.eatdou.com/uploads/allimg/131102/1-131102210509-50.jpg" />					
			</div>
		</div>
	</article><?php endforeach; endif; else: echo "" ;endif; ?>
	<div id="case_footer">
		<div class="wrapper showother">
						<a class="backlist" href="index.htm" tppabs="http://mc18.eatdou.com/case/gov/">返回案例列表</a>
						
		</div>
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


<script type="text/javascript" src="<?php echo (DH_SKIN); ?>js/jquery.1.8.2.min.js" ></script>
<script type="text/javascript" src="<?php echo (DH_SKIN); ?>js/jquery.plugin.min.js" ></script>
<!--[if IE 6]>
<script type="text/javascript" src="js/killie6.js" ></script>
<![endif]-->
<script type="text/javascript">
//<![CDATA[
	//Nav Start
	$("header>div>nav>ul>li>a").hover(function(){
		$(this).parent().stop(false,true).animate({"background-position-x":"6px",opacity:"0.7"},{duration:"normal", easing: "easeOutElastic"});
	},function(){
		$(this).parent().stop(false,true).animate({"background-position-x":"10px",opacity:"1"},{duration:"normal", easing: "easeOutElastic"});
	});
		<!--- 案例 ---->
	<!--案例详细-->
		//Cases Start
		if($.browser.msie&&$.browser.version==6.0&&!$.support.style){
			$("#overview").height($("#detailed").height());
		}
		$(window).scroll(function(){
			if($.browser.msie&&$.browser.version==6.0&&!$.support.style){
				return false;
			}
			if($(this).scrollTop()>110){
				$("article").css("background-position","center 80px");
			}else{
				$("article").css("background-position","center "+(190-$(this).scrollTop())+"px");
			}
		});
		$('#case_info h1').pngFix();
		$("#detailed img").lazyload({effect:"fadeIn",failurelimit:10});
		$("#case_footer>.showother>.previous,#case_footer>.showother>.next").hover(function(){
			$("span>img",this).stop(false,true).animate({"left":"-20px"},{duration:"fast", easing: "easeOutQuad"});
			$("#show_thumb>img").hide().eq($(this).index($("#case_footer>.showother>.previous,#case_footer>.showother>.next"))).show();
			$("#show_thumb").css({display:"block",left:$(this).css("left"),right:$(this).css("right"),bottom:"20px",opacity:"0"}).stop(false,true).animate({bottom:"25px",opacity:"1"},{duration:"fast", easing: "easeOutQuad"});
		},function(){
			$("span>img",this).stop(false,true).animate({"left":"0"},{duration:"fast", easing: "easeOutQuad"});
			$("#show_thumb").stop(false,true).animate({bottom:"20px",opacity:"0"},{duration:"fast", easing: "easeOutQuad"});
		})
		//Cases End
		//Cases End
					$("#gotop").click(function(){$('body,html').animate({scrollTop:0},500);})
	var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
	document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F3fe5b2b119b5fc4931e9c73e7071b0c6' type='text/javascript'%3E%3C/script%3E"));
	var bds_config = {"bdTop":203};
	$("#bdshell_js").attr("src","http://share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours());
//]]>
</script></body>
</html>