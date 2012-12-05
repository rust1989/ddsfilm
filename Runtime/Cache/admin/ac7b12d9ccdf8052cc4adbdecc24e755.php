<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<link rel="stylesheet" href="__CSS__/Admin/common.css" type="text/css" />
<title>管理区域</title>
<script type="text/javascript" src="__JS__/jquery.js"></script>
<script type="text/javascript" src="__JS__/kindeditor/kindeditor.js"></script>
<script type="text/javascript" src="__JS__/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript">
KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content"]');
});
</script>
</head>

<body>
<div id="man_zone">
<form method="post" action="__URL__" enctype="multipart/form-data">
   <table  width="99%" border="0" align="center"  cellpadding="3" cellspacing="1" class="table_style">
    <tr>
      <td width="20%" class="left_title_2"><?php echo L('CONTENT');?>:</td>
      <td width="80%" ><textarea name="content" style="width:700px;height:400px;visibility:hidden;"><?php echo htmlspecialchars($content); ?></textarea></td>
    </tr>
    <input type="hidden" name="id" value="<?php echo ($id); ?>" />
     <tr id="box"></tr>
    <tr>
      <td colspan="2" class="right_title_1" height="50"><input type="submit" name="submit" class="submit" value=""  /></td>
    </tr>
  </table>
   </form>
</div>
</body>
</html>