<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=1024" />
<title>案例_我的网站</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" href="<?php echo (DH_SKIN); ?>css/style.css" type="text/css" media="all" />
<!--[if lt IE 9]><script type="text/javascript" src="<?php echo (DH_SKIN); ?>js/html5.js" ></script><![endif]-->
</head>
<body>


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
<section id="caseslist">
  <div class="cat_title">
    <div class="wrapper">
      <h2><strong>CASES</strong>案例</h2>
      <p>我们的作品，他们的故事<br/>
        Our work, their stories </p>
    </div>
  </div>
  <div id="filter">
    <div class="wrapper">
      <ul>
          <?php if(is_array($Category)): $i = 0; $__LIST__ = $Category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Category): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('index?cat='.$Category['id']);?>" class="news_category"><?php echo ($Category["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>


      </ul>
      
    </div>
  </div>
  <ul class="cases wrapper">

      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li class="item1"> <img src="<?php echo ($list["thumb"]); ?>" tppabs="<?php echo ($list["thumb"]); ?>"  width="240" height="152" alt="<?php echo ($list["title"]); ?>" /> <strong><?php echo ($list["title"]); ?></strong> UPTATED:2013/11/02
              <p> <strong><?php echo ($list["title"]); ?></strong> <em>分类：<?php echo (get_catname($list["catid"])); ?><br/>
                  UPTATED:<?php echo (date('Y-m-d',$list['addtime'])); ?></em><?php echo ($addtime["introduce"]); ?><br/>
                  <a href="<?php echo U('show?id='.$list['itemid']);?>" tppabs="<?php echo U('show?id='.$list['itemid']);?>" class="btn_blue">查看品牌故事</a> <a href="javascript:if(confirm('xxxxxxxxxxxxx'))window.location='#'"  target="_blank" class="openurl" rel="external nofollow">访问品牌网站</a> </p>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>

   
  </ul>

    <div id="pagination"><?php echo ($page); ?></div>



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
		<!--- 案例 ---->
			//Nav Start
		
		var pagecur=1;//当前页
		var username=getCookie("username");
		$("header>div>nav>ul>li>a").hover(function(){
			$(this).parent().stop(false,true).animate({"background-position-x":"6px",opacity:"0.7"},{duration:"normal", easing: "easeOutElastic"});
		},function(){
			$(this).parent().stop(false,true).animate({"background-position-x":"10px",opacity:"1"},{duration:"normal", easing: "easeOutElastic"});
		});
		//Nav End
	
		//Filter Start
		
		ajaxLogin("username="+username);
		$("#filter>div>p>.signIn").live("click",function(){
			$("#login_bg").css("height",$("body").height()+"px").fadeIn();
			$("#login").fadeIn();
			$("#username").val("");
			$("#password").val("");
			$("#login_err").text("");
		});
		$("#filter>div>p>.signOut").live("click",function(){
			ajaxOut("act=loginout&username="+username);
		});
		$("#login .close").click(closeLogin);
		$("#login .textinput").focusout(loginck);
		$("#signin").click(function(){
			if(loginck()) ajaxLogin("username="+$("#username").val()+"&password="+$("#password").val());
		});
		function closeLogin(){
			$("#login_bg").fadeOut();
			$("#login").fadeOut();
		}
		function loginck(){
			var reg=/[a-z]{3,12}/.test($("#username").val());
			if($("#username").val()==""){
				$("#login_err").text("帐号不能为空");
				return false;
			}	
			if(!reg){
				$("#login_err").text("帐号格式不正确");
				return false;
			}
			if($("#password").val()==""){
				$("#login_err").text("密码不能为空");
				return false;
			}
			$("#login_err").text("");
			return true;
		}
		function getCookie(name){  
			var cookieValue = "";  
			var search = name + "=";  
			if(document.cookie.length>0){
				offset = document.cookie.indexOf(search);  
				if (offset != -1){
					offset += search.length;  
					end = document.cookie.indexOf(";", offset);  
					if (end == -1) end = document.cookie.length;  
					cookieValue = unescape(document.cookie.substring(offset, end))  
				}  
			}  
			return cookieValue;  
		}
		function ajaxLogin(str){
			$.ajax({
				type: "POST",
				url: "http://mc18.eatdou.com/login.php",
				data: str,
				success: function(msg){
					if(msg!="false"){
						document.cookie = "username="+msg;
						$("#filter>div>p").html("欢迎你，"+msg+"！<a href='javascript:void(0)' class='signOut'>Sign Out</a>");
						username=msg;
						closeLogin();
					}else{
						$("#login_err").text("登录失败，请核对帐号后重新登录。");
						document.cookie = "username=";
					}
				},
				error:function(){
					$("#filter>div>p").html("查看更多案例？<a href='javascript:void(0)' class='signIn'>Sign In</a>");
				}
			});
		}
		
		//Filter End
		//Cases Start
		$("#caseslist>.cases>li").live({mouseenter:function(){
			$("p",this).stop(false,true).slideDown("normal","easeOutQuad");
		},mouseleave:function(){
			$("p",this).stop(false,true).slideUp("normal","easeOutQuad");
		}});
		$("#caseslist>.cases>li>img").lazyload({effect:"fadeIn",failurelimit:10});
		$("#loadmore>a").click(function(){
			if($("#loadmore>a").text()=="没有更多案例了..."){
				return false;
			}
			$("#loading").slideDown("normal","easeOutQuad");
			$.get(ajaxUrl+(pagecur+1)+"..html", function(data){
				$("#loading").slideUp("normal","easeOutQuad",function(){
					if(data==0){
						$("#loadmore>a").text("没有更多案例了...");
						return false;
					}
					$("#caseslist>.cases").append(data);
					$("#caseslist>.cases>li>img").lazyload({effect:"fadeIn",failurelimit:10});
				});
				pagecur++;
			});
		})
		//Cases End
					$("#gotop").click(function(){$('body,html').animate({scrollTop:0},500);})
	
//]]>
</script>
</body>
</html>