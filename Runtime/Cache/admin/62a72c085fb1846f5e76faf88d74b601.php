<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<link rel="stylesheet" href="__CSS__/Admin/common.css" type="text/css" />
<title>管理区域</title>

</head>

<body>
<div id="man_zone">
 
   <table width="99%" border="0" align="center"  cellpadding="3" cellspacing="1" class="table_style">
   <tr>
     <td class="right_title_1" height="50" colspan="2"></td>
   </tr>
   <form method="post" action="__URL__/savesort/method/<?php echo ($method); ?>" enctype="multipart/form-data">
    
    <tr>
      <td width="40%" class="left_title_2"><?php echo L('IDNAME');?>:</td>
      <td width="60%" ><input type="text" name="name" value="<?php echo ($list["name"]); ?>" /></td>
    </tr> 
    <tr>
      <td width="40%" class="left_title_2"><?php echo L('ENGLISH');?>:</td>
      <td width="60%" ><input type="text" name="ename" value="<?php echo ($list["ename"]); ?>" /></td>
    </tr> 

    
    <input type="hidden" name="id" value="<?php echo ($list["id"]); ?>" />
    <tr>
      <td colspan="2" class="right_title_1" height="50"><input type="submit" name="submit" class="submit" value=""  /></td>
    </tr>
    </form> 
  
  </table> 
</div>
</body>
</html>