<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<link rel="stylesheet" href="__CSS__/Admin/common.css" type="text/css" />
<title>管理区域</title>
<script type="text/javascript" src="__JS__/Admin/jquery.js"></script>
<script type="text/javascript" src="__JS__/kindeditor/kindeditor-min.js"></script>
<script type="text/javascript" src="__JS__/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript">
var editor;
KindEditor.ready(function(K) {
	editor = K.create('#content', {
					items : [
						'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
						'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
						'insertunorderedlist', '|', 'emoticons', 'image', 'link']
	});
});
</script>
</head>

<body>
<div id="man_zone">
 
   <table width="99%" border="0" align="center"  cellpadding="3" cellspacing="1" class="table_style">
   <tr>
     <td class="right_title_1" height="50" colspan="2"></td>
   </tr>
   <form method="post" action="__URL__/article/model/<?php echo ($model); ?>/method/save" enctype="multipart/form-data" onsubmit="editor.sync();">
    
     <tr>
      <td width="25%" class="left_title_2"><?php echo L('CONTENT');?>:</td>
      
      <td width="75%" ><textarea id="content" name="content" class="content" style="visibility:hidden;"><?php echo ($content); ?></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="center" height="50"><input type="submit" name="submit" class="submit" value=""  /></td>
    </tr>
    </form> 
    
  </table>
  
</div>

</body>
</html>