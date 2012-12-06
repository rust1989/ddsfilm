<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<head>
	<meta charset=utf-8>
	<meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">
	
	<title>Rosas &amp; Co Films AG</title>
	<meta name=description content="">

	<meta name=viewport content="width=device-width,initial-scale=1,user-scalable=no">

	<meta name=apple-mobile-web-app-capable content=yes>
	
	<meta name=apple-mobile-web-app-status-bar-style content=black>
    <script type="text/javascript" src="__JS__/jquery.js"></script>
    <script type="text/javascript" src="__JS__/lazy.js"></script>
    <link rel="stylesheet" href="__CSS__/base.css" type="text/css" />
	<!--[if IE]>
    <script type="text/javascript" src="__JS__/html5.js"></script>
     <![endif]-->
<script type="text/javascript">
function loadTimeout(){
        var 
        //超时秒数
        second = 1;
        //计时器
        timer = setInterval(function(){
            if(--second < 1){
			 document.getElementById('load').style.display = 'none';
			 document.getElementById('contain').style.display='block';
			 $("img.thumb").show().lazyload();	
			 clearInterval(timer);
			}
        },100);
        //注册事件
        //document.attachEvent ? document.attachEvent('onreadystatechange',CtrlLoad) : document.onreadystatechange = CtrlLoad;
        //控制加载
        function CtrlLoad(){
            if(document.readyState && ('complete' == document.readyState)){
                document.getElementById('load').style.display = 'none';
				
                clearInterval(timer)
            }
        }
    }
    //调用
    loadTimeout();
</script>

</head>


<body>
<div id="load">
<img src='__IMG__/load.gif' height='16' width='16'/>
</div>

<div id="contain" style="padding-top:98px;">
<div id="icon">
 <ul><li><a href="javascript:void(0);"><img src="__IMG__/picon.jpg" height="32" width="32"></a></li><li><a href="javascript:void(0);"><img src="__IMG__/wicon.png" height="32" width="32"></a></li></ul>
</div>
<header>
  <div id="title">
    <img src="__IMG__/logo.jpg" height="60" width="178">
  </div>
  <div class=" headernav">
    <nav id="navTop">
     <ul>
     <li><a href="index.html" class="selected" data="作品集">FILMS</a></li>
     <li><a href="company.html" data="公司介绍">COMPANY</a></li>
     </ul>
  </nav>

    
<div id="top-navigation">	
<ul class="menu" id="menu-top-navigation">
    <li class="menu-item">
        <a href="">ALL</a>
    </li>

    <li class="menu-item">
        <a href="">BY GRANE</a>
        <ul class="sub-menu">
          <?php if(is_array($procates)): $i = 0; $__LIST__ = $procates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($i == 1): ?><li class=" first menu-item">
                <a href="__URL__/id/<?php echo ($vo["id"]); ?>" data="<?php echo ($vo["name"]); ?>"><?php echo ($vo["ename"]); ?></a>
            </li>
          <?php else: ?>
            <li class="menu-item">
                <a href="__URL__/id/<?php echo ($vo["id"]); ?>" data="<?php echo ($vo["name"]); ?>"><?php echo ($vo["ename"]); ?></a>
            </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>  
        </ul>
    </li>
</ul>
</div> 

   </div> 
</header>
  



<div id="main">
   <div id="MainOverlay"></div>
   <section id="box" class="content clearfix">
     <?php if(is_array($projects)): $i = 0; $__LIST__ = $projects;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><article class="loading">
       <div class="frame" >
         <div class="thumbCount" >
           <a > 
             <img class="thumb" src="__IMG__/loading.gif" data-original="<?php echo ($vo["pic"]); ?>" style="transition:opacity 0.75s linear 0s;opacity:1" />
           </a>
         </div>
       </div>
         <div class="overlay">
         <a  class="play  clearfix" data='<?php echo ($vo["id"]); ?>'><img src="__IMG__/playbtn.jpg" height="30" width="30"></a>
        <p class="title red"><?php echo ($vo["title"]); ?></p>
        <p class="text"><span class="grey">Year :</span><span class="red"><?php echo ($vo["year"]); ?></span></p>
        <p class="text"><span class="grey">Client :</span><span class="red"><?php echo ($vo["client"]); ?></span></p>
        <p class="text"><span class="grey">Director :</span><span class="red"><?php echo ($vo["director"]); ?></span></p>
        <p class="text"><span class="grey">Producer :</span><span class="red"><?php echo ($vo["product"]); ?></span></p>
        <p class="text"><span class="grey">Agency :</span><span class="red"><?php echo ($vo["agency"]); ?></span></p>
        <p class="text"><span class="grey">Product :</span><span class="red"><?php echo ($vo["product"]); ?></span></p>
       </div>
     </article><?php endforeach; endif; else: echo "" ;endif; ?>
   </section>
   
</div>
<div id="player" class="Overlaybox">
</div>

<footer>
  <span class="right">Copyright © ddsfilm.com 2012 all rights reserved </span>
</footer>
</div>


<script type="text/javascript">

$("document").ready(function(){
	$("img.thumb").lazyload();

	/*导航点击*/
	$("#navTop li").click(function(){
	  $(this).find("a").addClass("selected");
	  $(this).siblings().find("a").removeClass("selected");
	});
	$(".loading").each(function(){
       	$(this).hover(
		function(){
			$(this).find(".overlay").slideDown("fast");
		},
		function(){
			$(this).find(".overlay").slideUp("fast");
		});
	});
	/*
	导航hover
	*/
	var ename;
	var cname;
	/*$(".headernav li").each(function(){
		$(this).hover(function(){
			ename=$(this).find('a').html();
		    cname=$(this).find('a').attr('data');
			$(this).find('a').attr('data',ename);
			$(this).find('a').html(cname);
		},
		function(){
			cname=$(this).find('a').html();
		    ename=$(this).find('a').attr('data');
			$(this).find('a').attr('data',cname);
			$(this).find('a').html(ename);
		});
	});*/
	/*
	屏蔽右键
	*/
	/*document.body.oncontextmenu=function(event){
	  var OvEvent=event?event:window.event;
	  
	  OvEvent.preventDefault();	
	}*/
	
	$("#menu li.parent").each(function(){
	  $(this).hover(function(){
		  $(this).find('.child').stop().show().animate({'opacity':'1','height':'500px'},500);
	   },function(){
		   $(this).find('.child').stop().hide().animate({'opacity':'0','height':'0px'},500); 
	   });	
	});
	
	
	
	/*$(".loading").each(function(){
		
	$(this).bind('mousedown',function(){
		$("#MainOverlay").show();
	    $("#player").fadeIn(1000);	
	});
	});*/

	$(".play").click(function(){
	 var id=$(this).attr('data');
	 $.ajax({
	    url:"__URL__/video",
		type:'post',
		data:'id='+id,
		success:function(data){
			data=eval('('+data+')');
			var html='<div class="left">';
			html+='<div class="overlay">';
			html+='<p class="title red">'+data['title']+'</p>';
			html+='<p class="text\"><span class="grey">Year :</span><span class="red">'+data['year']+'</span></p>';
			html+='<p class="text"><span class="grey">Client :</span><span class="red">'+data['client']+'</span></p>';
			html+='<p class="text"><span class="grey">Director :</span><span class="red">'+data['director']+'</span></p>';
			html+='<p class="text"><span class="grey">Producer :</span><span class="red">'+data['producer']+'</span></p>';
			html+='<p class="text"><span class="grey">Agency :</span><span class="red">'+data['agency']+'</span></p>';
			html+='<p class="text"><span class="grey">Product :</span><span class="red">'+data['product']+'</span></p></div>';
			html+='<div id="playerclose"><span class="img left"><a href="javascript:void(0);" onclick="playerclose(this);" class="back"><img src="__IMG__/close.png" height=47 width=44></a></span>';
			html+='<span class="left"><a href="javascript:void(0);" onclick="playerclose(this);" class="back  red">BACK</a></span> </div></div>';
			html+='<div class="right"> <img src="__IMG__/video.jpg" height=453 width=735></div>';
			$("#player").html(html);
		}
	 });	
	 $("#MainOverlay").show();
	 $("#player").fadeIn();	
	
	});
	
	
	changeposition();
});
    $(window).resize(function(){
	changeposition();
	});
    function playerclose(obj){						  
	 $("#MainOverlay").hide();
	 $("#player").fadeOut();
	}
	
	function changeposition(){
		var browwd=getTotalWidth();
		
	   if(browwd<600){
	    wid=1;
	   }else if(browwd>600&browwd<800)
		wid=0.5;
	   else if(browwd>800&browwd<1200)
		 wid=0.333;
	   else if(browwd>1200)
	     wid=0.25;
	  var width=browwd*wid;
	  var height=199*(width/360);
	  $("#box .loading").css({'height':height,'width':width});
	  $(".frame").css('height',height-1);
	  $(".overlay").css('height',height);
	  $('.frame,.thumbCount a').css({'width':width-1});
	  $('.thumbCount').css('width',width);
	 
	}
	function getTotalWidth(){
	 if($.browser.msie){
		 
		 var wid=document.compatMode=="CSS1Compat"?document.documentElement.clientWidth:document.body.clientWidth;
		if($.browser.version>6){
		 wid=wid-5;
		}
	 }else{
		 var wid=self.innerWidth-18;
	 }
	  return wid;	
	}
</script>
<script type="text/javascript">
 (function($){
    $.fn.extend({
        dropMenu: function(menuItem, subMenuItem){
            var root = $(this), // 首先找到菜单（的根节点） 
                CLS_HAS_MENU = 'has-sub-menu', 
                isIE = $.browser.msie, // 是否为 IE 浏览器
                version = $.browser.version; // 浏览器的版本
			
            
            // 没有找到菜单则退出
            // root.find(':first') 都是得到 document.getElementById('top-navigation')
            if (!root[0]) {
                return false;
            }
            
            // 默认的菜单标签为 li 标签（选择器）
            if (!menuItem) {
                menuItem = 'li';
            }

            // 默认的子菜单标签为 ul 标签（选择器）
            if (!subMenuItem) {
                subMenuItem = 'ul';
            }
            
            // $(root).find(menuItem) 找到导航菜单下所有的 li 节点
            // 通过 each() 遍历添加相应的处理事件 mouseover,mouseout 和 tab 操作的支持
           var wid;
		   var left;
		    $(root).find(menuItem).each(function(i, li){
				
            var curMenu = $(li),
			
                // 找到 li 下的第一个 a 标签，添加 tab 键的支持时需要用到的
            curLink = curMenu.is('a') ? curMenu : $(curMenu.find('a:first')), 
            // 找到当前 li 标签下的子菜单
            subMenus = $(subMenuItem, curMenu), 
			
            // 判断是否有子菜单节点
            hasMenu = subMenus.length >= 1, 
            // 当前 li 标签下的子菜单
            curSubMenu = null,
            // 当前子菜单的最后一项（a 标签） 
            curSubMenuLastItem = null;
            // 显示子菜单
            show = function(){
                // show sub menu 发现 IE6 中使用 show() 方无法显示二级以下的子菜单
                // 所以很无赖的 hack 了一下
                if (!isIE || (isIE && version > 6)) {
                    curSubMenu.show(200);
                }
                else {
                    curSubMenu.css('display', 'block');
                }
				curMenu.addClass("selected");
            }, 
            // 隐藏子菜单
            hide = function(){
                // hide sub menu
                if (!isIE || (isIE && version > 6)) {
                    curSubMenu.hide(150);
                }
                else {
                    curSubMenu.css('display', 'none');
                }
				curMenu.removeClass("selected");
            };
            
            // 只在有子菜单的时候才做相应的处理
            if (hasMenu) {
                
				
                // 找到当前 li 对应的子菜单，而不是把更次级的子菜单都找到
                // 不习惯用 subMenus.get(0)
                curSubMenu = $(subMenus[0]);
                // 当前子菜单的最后一项（a 标签） 
				curSubMenuLastItem = curSubMenu.find('a:last');
				
                // mouse event
                curMenu.hover(show, hide);
                // key(tab key) event
                // 获得焦点是在当前 li 下的第一个A标签上处理
                curLink.focus(show);
                // 失去焦点则需要是tab让子菜单的最后一个菜单项都走过了，才关闭子菜单
                curSubMenuLastItem.blur(hide);
            }
            });
        }
    });
    
    $('#top-navigation').dropMenu();
    
})(jQuery);	
</script>
<!--[if IE 6]>
<script type="text/javascript" src="js/png.js"></script>
<script type="text/javascript">
DD_belatedPNG.fix('#navTop li a.selected,#box .overlay,#player div.left');
</script>
<![endif]-->
</body>
</html>