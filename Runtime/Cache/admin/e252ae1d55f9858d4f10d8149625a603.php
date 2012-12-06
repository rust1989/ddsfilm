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
   <form method="post" action="__URL__/save/method/<?php echo ($method); ?>" enctype="multipart/form-data">
    
    <tr>
      <td width="40%" class="left_title_2"><?php echo L('IDNAME');?>:</td>
      <td width="60%" ><input type="text" name="title" value="<?php echo ($list["title"]); ?>" /></td>
    </tr> 
     <tr>
      <td width="40%" class="left_title_2"><?php echo L('SORT');?>:</td>
      <td width="60%" >
      <select id="sid" name="sid">
       <?php if(is_array($sorts)): $i = 0; $__LIST__ = $sorts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['id'] == $list['sid']): ?><option value="<?php echo ($vo["id"]); ?>" selected="selected"><?php echo ($vo["name"]); ?></option>
         <?php else: ?>
          <option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
      </select>
      </td>
    </tr> 
    <tr>
      <td width="40%" class="left_title_2"><?php echo L('YEAR');?>:</td>
      <td width="60%" ><input type="text" name="year" value="<?php echo ($list["year"]); ?>" /></td>
    </tr> 
    <tr>
      <td width="40%" class="left_title_2"><?php echo L('CLIENT');?>:</td>
      <td width="60%" ><input type="text" name="client" value="<?php echo ($list["client"]); ?>" /></td>
    </tr> 
    <tr>
      <td width="40%" class="left_title_2"><?php echo L('DIRECTOR');?>:</td>
      <td width="60%" >
      <select id="director" name="director">
       <?php if(is_array($directors)): $i = 0; $__LIST__ = $directors;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['name'] == $list['director']): ?><option value="<?php echo ($vo["name"]); ?>" selected="selected"><?php echo ($vo["name"]); ?></option>
         <?php else: ?>
          <option value="<?php echo ($vo["name"]); ?>"><?php echo ($vo["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
      </select>
      </td>
    </tr> 
     <tr>
      <td width="40%" class="left_title_2"><?php echo L('PRODUCER');?>:</td>
      <td width="60%" ><input type="text" name="producer" value="<?php echo ($list["producer"]); ?>" /></td>
    </tr> 
     <tr>
      <td width="40%" class="left_title_2"><?php echo L('AGENCY');?>:</td>
      <td width="60%" ><input type="text" name="agency" value="<?php echo ($list["agency"]); ?>" /></td>
    </tr> 
     <tr>
      <td width="40%" class="left_title_2"><?php echo L('PRODUCT');?>:</td>
      <td width="60%" ><input type="text" name="product" value="<?php echo ($list["product"]); ?>" /></td>
    </tr> 
      <tr>
      <td width="40%" class="left_title_2"><?php echo L('IMG');?>:</td>
      <td width="60%" ><input type="file" name="pic" /></td>
    </tr> 
      <tr>
      <td width="40%" class="left_title_2"><?php echo L('VIDEO');?>:</td>
      <td width="60%" ><input type="text" name="video" value="<?php echo ($list["video"]); ?>" /></td>
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