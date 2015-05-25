<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
<meta name="viewport" content="width=1024" />
<title>新闻_我的网站</title>
<meta name="keywords" content="" />
<meta name="description" content="" />      
<link rel="stylesheet" href="<?php echo (DH_SKIN); ?>css/style.css" type="text/css" media="all" />
<!--[if lt IE 9]><script type="text/javascript" src="../js/html5.js" ></script><![endif]-->
</head>
<body>


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


<section id="newslist">
	<div class="cat_title">
		<div class="wrapper">
			<h2><strong>NEWS</strong>新闻</h2>
			<p>最近正在折腾...<br/>Recently is to do ...</p>
		</div>
		<div class="cate_abso">
            <?php if(is_array($Category)): $i = 0; $__LIST__ = $Category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Category): $mod = ($i % 2 );++$i;?><a href="<?php echo U('index?c='.$Category['id']);?>" class="news_category"><?php echo ($Category["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
    	</div>
	</div>
				<ul class="news wrapper">
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li>
                        <a href="<?php echo U('show?id='.$list['itemid']);?>" tppabs="<?php echo U('show?id='.$list['itemid']);?>"><img src="<?php echo ($list["thumb"]); ?>" tppabs="<?php echo ($list["thumb"]); ?>" data-original="" alt="<?php echo ($list["title"]); ?>" /></a>
                        <div class="newslist">
                            <a href="<?php echo U('show?id='.$list['itemid']);?>" tppabs="<?php echo U('show?id='.$list['itemid']);?>"><?php echo ($list["title"]); ?></a>
                            <span>UPTATED: <?php echo (date('Y-m-d',$list['edittime'])); ?> </span>
                            <p><?php echo (msubstr($list["introduce"],0,200)); ?></p>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>

    <div id="pagination"><?php echo ($page); ?></div>



		 <!--div class="dede_pages">
			<ul class="pagelist">
             <li><span class="pageinfo">共 <strong>1</strong>页<strong>4</strong>条记录</span></li>

			</ul>
		</div--><!-- /pages -->
            
            
	
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
<script type="text/javascript" src="../js/jquery.1.8.2.min.js" ></script>
<script type="text/javascript" src="../js/jquery.plugin.min.js" ></script>
<!--[if IE 6]>
<script type="text/javascript" src="../js/killie6.js" ></script>
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
	<!---- 新闻首页 ----->
		//Nav End
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