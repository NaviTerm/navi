<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=1024" />
<title><?php echo (DH_SKIN); ?></title>
<meta name="keywords" content="html5+js,技术网站,应用,案例,三盛,都会,城," />
<meta name="description" content="三盛·都会城作为三盛地产在成都的全资开发项目，入主龙泉经开区，承载三盛地产在成都建立品牌的任务，三盛·都会城总投入近40亿元，前期将投入3亿重金，将该项目打造为龙泉乃至大成东" />
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
<section id="shownews">
  <div class="cat_title">
    <div class="wrapper">
      <h2><strong>NEWS</strong>新闻</h2>
      <p>最近正在折腾...<br/>
        Recently is to do ...</p>
    </div>
    <div class="cate_abso">
		<a href="javascript:void(0);" class="news_category">公司新闻</a>
		<a href="javascript:void(0);" class="news_category">行业动态</a>
    </div>
  </div>
  <article>
  
  
  
  <?php if(is_array($show)): $i = 0; $__LIST__ = $show;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$show): $mod = ($i % 2 );++$i;?><h3 class="news_title"><?php echo ($show["title"]); ?></h3>
        <div class="wrapper" id="detailed"> <img alt="" src="<?php echo ($show["thumb"]); ?>" tppabs="<?php echo ($show["thumb"]); ?>" style="width: 1024px; height: 533px;" /><br />
    <p><?php echo ($show["introduce"]); ?></p>
     </div><?php endforeach; endif; else: echo "" ;endif; ?>
 
 
 
 
    <div class="wrapper related">
      <h3> 你可能还对下面的新闻感兴趣
        <div class="share">
          <!-- Baidu Button BEGIN -->
          <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare"> <a class="bds_qzone"></a> <a class="bds_tsina"></a> <a class="bds_tqq"></a> <a class="bds_renren"></a> <a class="bds_t163"></a> <span class="bds_more">更多</span> <a class="shareCount"></a> </div>
          <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=0" ></script>
          <script type="text/javascript" id="bdshell_js"></script>
          <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
          <!-- Baidu Button END -->
        </div>
      </h3>
      <ul>
      
        <li><a href="7.html" tppabs="http://mc18.eatdou.com/news/gsnews/7.html">html5+js技术网站应用案例：三盛·都会城网站建设</a></li>

      </ul>
    </div>
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