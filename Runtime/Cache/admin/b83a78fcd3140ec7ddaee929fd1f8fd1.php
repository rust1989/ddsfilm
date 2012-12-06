<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>菜单</title>
<link href="__CSS__/Admin/menu.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base target="mcMainFrame" />
</head>
<script language="javascript">
<!--
function $(objectId) 
{
	 return document.getElementById(objectId);
}

function showHide(objname)
{
    var obj = $(objname);
    if(obj.style.display == "none")
    {
        obj.style.display = "block";
    }
    else
    {
        obj.style.display = "none";
    }
    
    return false;
}

function refreshMainFrame(url)
{
    parent.mcMainFrame.location = url;
	
}
-->
</script>
<base target="mcMainFrame">
<body>
<div class="menu">

<?php switch($action): case "User": ?><dl>
        <dt><a href="" onclick="return showHide('items0');" target="_self">账户管理</a></dt>
        <dd id="items0" style="display:block;">
            <ul>
				<li><a href='__GROUP__/User/'>管理员管理</a></li> 
            </ul>
        </dd>
    </dl>
<script type="text/javascript">refreshMainFrame('__GROUP__/User/');</script><?php break;?>
<?php case "Company": ?><dl>
        <dt><a href="" onclick="return showHide('items0');" target="_self">公司信息管理</a></dt>
<<<<<<< HEAD
=======
        <dd id="items0" style="display:block;">
            <ul>
			 <li><a href='__GROUP__/Company/about'>关于我们</a></li>   
             <li><a href="__GROUP__/Company/contact">联系我们</a></li>
            </ul>
        </dd>
    </dl>
<script type="text/javascript">refreshMainFrame('__GROUP__/Company/about');</script><?php break;?>
<?php case "Team": ?><dl>
        <dt><a href="" onclick="return showHide('items0');" target="_self">团队管理</a></dt>
>>>>>>> 09c7db3d94c5e39a5a9bee407adce6e7eeafe50e
        <dd id="items0" style="display:block;">
            <ul>
			 <li><a href='__GROUP__/Company/article/model/contact'>联系我们</a></li>  
             <li><a href='__GROUP__/Company/article/model/about'>关于我们</a></li> 
             <li><a href='__GROUP__/Company/team'>团队管理</a></li>   
             <li><a href='__GROUP__/Company/team'>客户管理</a></li>   
            </ul>
        </dd>
    </dl>
<<<<<<< HEAD
<script type="text/javascript">refreshMainFrame('__GROUP__/Company/article/model/contact');</script><?php break;?>

<?php case "Project": ?><dl>
        <dt><a href="" onclick="return showHide('items0');" target="_self">作品管理</a></dt>
=======
<script type="text/javascript">refreshMainFrame('__GROUP__/Team/');</script><?php break;?>
<?php case "News": ?><dl>
        <dt><a href="" onclick="return showHide('items0');" target="_self">公司信息管理</a></dt>
>>>>>>> 09c7db3d94c5e39a5a9bee407adce6e7eeafe50e
        <dd id="items0" style="display:block;">
            <ul>
             <li><a href='__GROUP__/Project/prosort'>作品分类</a></li> 
			 <li><a href='__GROUP__/Project'>作品管理</a></li>   
            </ul>
        </dd>
    </dl>
<script type="text/javascript">refreshMainFrame('__GROUP__/Project/');</script><?php break;?>
<?php default: ?>

    <dl>
        <dt><a href="" onclick="return showHide('items0');" target="_self">快捷方式</a></dt>
        <dd id="items0" style="display:block;">
            <ul>
				<?php if(($security['allowsystem']) == "1"): ?><li><a href='__APP__/Settings'>系统配置</a></li><?php endif; ?> 
				<?php if(($security['allowmember']) == "1"): ?><li><a href='__APP__/Member'>用户管理</a></li><?php endif; ?>
                <?php if(($security['allowgroup']) == "1"): ?><li style="display:none;"><a href='__APP__/Usergroup'>用户组管理</a></li><?php endif; ?>
            </ul>
        </dd>
    </dl> 
	<!--<script type="text/javascript">refreshMainFrame('__APP__/Index/main');</script>--><?php endswitch;?>



</div>
</body>
</html>