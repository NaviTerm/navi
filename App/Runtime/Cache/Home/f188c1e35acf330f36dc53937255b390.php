<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
<meta name="viewport" content="width=1024" />
<title>服务_我的网站！建荣博客:www.njro168.com</title>
<meta name="keywords" content="建荣博客:www.njro168.com" />
<meta name="description" content="建荣博客:www.njro168.com" />      
<link rel="stylesheet" href="<?php echo (DH_SKIN); ?>css/style.css"  type="text/css" media="all" />
<!-- timeline -->
<link rel="stylesheet" href="<?php echo (DH_SKIN); ?>css/timeline.css" type="text/css" media="screen" />
<script src="http://demo.jb51.net/jslib/jquery/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="<?php echo (DH_SKIN); ?>js/jquery.timelinr-0.9.3.js" type="text/javascript"></script>
<script type="text/javascript"> 
	$(function(){
			$().timelinr()
	});
</script>
<!-- timeline -->
<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php echo (DH_SKIN); ?>js/html5.js"></script><![endif]-->
</head>
<body >


<header>
    <div id="navbg"></div>
    <div class="wrapper">
        <h1 class="logo"><a href="<?php echo U('./index');?>"  title="建荣博客:www.njro168.com"><img src="<?php echo (DH_SKIN); ?>images/logo.png"  width="213" height="36" alt="建荣博客:www.njro168.com" /></a></h1>
        <nav>
            <ul>
                <li class="home"><a href="<?php echo U('./index');?>" >首页<span>网站首页！</span></a></li>
                <li class="about"><a href="<?php echo U('./about');?>"  title="成都网页设计公司">关于<span>我们是谁？</span></a></li>
                <li class="service"><a href="<?php echo U('./service');?>"  title="网站建设">服务<span>我们能做什么？</span></a></li>
                <li class="cases"><a href="<?php echo U('./case');?>"  title="网页制作">案例<span>我们做过什么？</span></a></li>
                <li class="client"><a href="<?php echo U('./course');?>"  title="企业历程">企业历程<span>我们有什么？</span></a></li>
            </ul>
        </nav>
    </div>
</header>



<!-- 查找最顶级栏目  -->
<section id="single">
	<!-- 查找子栏目  -->
	<div class="cat_title">
		<div class="wrapper">
			<h2><strong>企业发展前程</strong></h2>
			<p>我们能做什么？<br/>What can we do?</p>
		</div>
	</div>
	<article class="serv_detailed">
		<div id="detailed" style="background:#222222;width:100%;">
			<div id="timeline">
				<ul id="dates">
                    <?php if(is_array($Course)): $i = 0; $__LIST__ = $Course;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Course): $mod = ($i % 2 );++$i;?><li><a href="#"><?php echo ($Course["dtitle"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
				<ul id="issues">
                    <volist>
                        <li id="#<?php echo ($Course["dtitle"]); ?>">
                            <img src="<?php echo ($Course["thumb"]); ?>" width="256" height="256" />
                            <h1><?php echo ($Course["dtitle"]); ?></h1>
                            <p><?php echo ($Course["content"]); ?></p>
                        </li>
                    </volist>

				</ul>
				<div id="grad_left"></div>
				<div id="grad_right"></div>
				<a href="#" id="next">+</a>
				<a href="#" id="prev">-</a>
			</div>
		</div>
		<div id="case_footer">
			<div class="wrapper showother">
				<a class="backlist" href="index.html">返回案例列表</a>
			</div>
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
                <li>
                    <a href="http://www.777moban.com/" target='_blank'>建荣博客</a>
                </li>
                <li>
                    <a href="http://www.777moban.com/" target='_blank'>建荣博客</a>
                </li>
                <li>
                    <a href="http://www.777moban.com/" target='_blank'>建荣博客</a>
                </li>
                <li>
                    <a href="http://www.777moban.com/" target='_blank'>建荣博客</a>
                </li>
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

<script type="text/javascript" src="<?php echo (DH_SKIN); ?>js/jquery.plugin.min.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="<?php echo (DH_SKIN); ?>js/killie6.js"></script>
<![endif]-->
<script type="text/javascript" src="<?php echo (DH_SKIN); ?>js/mouse.js"></script>
</body>
</html>