<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>导航</title>
<link href="__CSS__/Admin/top.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="topnav">
	<div class="sitenav">
		<div class="welcome">你好，<span class="username"><?php echo $_SESSION['name'];?></span><a href="" target="_blank" style="display:none">THINKCMS</a> </div>
		<div class="sitelink"> 
			<a href="<?php echo C("SITE");?>" target="_blank">网站主页</a> | 
			<a href="__GROUP__/Login/loginout" target="_parent">安全退出</a>
      
		</div>
	</div>
	<div class="leftnav" style="float:left;">
		<ul>
			<li class="navleft"></li>
			<li id='d1' style="margin-left:-1px"><A href="__GROUP__/Menu/menu" target="mcMenuFrame" class="tabon">首页</A></li>
			<li id='d2'><A href="__GROUP__/Menu/menu/action/Setting" target="mcMenuFrame" >系统管理</A></li>
            <li id='d3'><A href="__GROUP__/Menu/menu/action/User" target="mcMenuFrame" >帐户管理</A></li>
            <li id='d4'><A href="__GROUP__/Menu/menu/action/Project" target="mcMenuFrame" >作品管理</A></li>
             <li id='d5'><A href="__GROUP__/Menu/menu/action/Company" target="mcMenuFrame" >公司信息管理</A></li>
             <li id='d6'><A href="__GROUP__/Menu/menu/action/Menu" target="mcMenuFrame" >栏目管理</A></li>
			<li class="navright"></li>
		</ul>
	</div>
</div>
</body>
</html>