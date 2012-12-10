<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<link rel="stylesheet" href="__CSS__/Admin/common.css" type="text/css" />
<title>管理区域</title>
<script type="text/javascript" src="__JS__/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
		$('[name=roleid]').change(function(){
		  var val=$(this).val();								   
		  if(val!=='1'){
			  var content=" <tr><td width='40%' class='left_title_2'><?php echo L('DEGREE');?>:</td> <td width='60%' ><input type='text' name='degree' /></td></tr><tr><td width='40%' class='left_title_2'><?php echo L('COUNTRY');?>:</td> <td width='60%' ><input type='text' name='country' /></td></tr><tr><td width='40%' class='left_title_2'><?php echo L('DESCRIPTION');?>:</td> <td width='60%' ><textarea name='description' style='width:400px;height:250px;'></textarea></td></tr>";
			  $("#box").replaceWith(content);
		   }								   
		 });		
	});
</script>
</head>

<body>
<div id="man_zone">
<form method="post" action="__URL__/saveadd">
   <table  width="99%" border="0" align="center"  cellpadding="3" cellspacing="1" class="table_style">
   <tr>
    <td colspan="4" class="right_title_2" height="50"><a href="__URL__/add">增加管理员</a></td>
   </tr>
  
    <tr>
      <td width="40%" class="left_title_2"><?php echo L('NAME');?>:</td>
      <td width="60%" ><input type="text" name="name" /></td>
    </tr>
    <tr>
      <td width="40%" class="left_title_2"><?php echo L('PASSWORD');?>:</td>
      <td width="60%" ><input type="password" name="pwd" /><font style="color:red;">&nbsp;&nbsp;密码最少四位</font></td>
    </tr>
   
    <tr>
      <td width="40%" class="left_title_2"><?php echo L('CONFIRMPWD');?>:</td>
      <td width="60%" ><input type="password" name="confirmpwd" /><font style="color:red;">&nbsp;&nbsp;确认密码要与密码一致</font></td>
    </tr>
     <tr id="box"></tr>
    <tr>
      <td colspan="2" class="right_title_1" height="50"><input type="submit" name="submit" class="submit" value=""  /></td>
    </tr>
   
  </table>
   </form>
</div>
</body>
</html>