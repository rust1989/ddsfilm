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
   
   <form method="post" action="__URL__/save/model/<?php echo ($model); ?>/method/<?php echo ($method); ?>" enctype="multipart/form-data" >
    <?php if(is_array($columns)): $i = 0; $__LIST__ = $columns;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$column): $mod = ($i % 2 );++$i;?><tr>
      <td width="40%" class="left_title_2"><?php echo L("".$column['Field']."");?>:</td>
     <?php if(strtolower($column[Field]) == 'pic'): ?><td width="60%" ><input type="file" name="<?php echo ($column["Field"]); ?>" value="<?php echo $list["".$column['Field'].""];?>" /></td>
    <?php else: ?>
       
        <td width="60%" ><input type="text" name="<?php echo ($column["Field"]); ?>" value="<?php echo $list["".$column['Field'].""];?>" /></td><?php endif; ?>
      
        </tr><?php endforeach; endif; else: echo "" ;endif; ?> 

   
    <input type="hidden" name="id" value="<?php echo ($list["id"]); ?>" />
    <tr>
      <td colspan="2" class="right_title_1" height="50"><input type="submit" name="submit" class="submit" value=""  /></td>
    </tr>
    </form> 
  
  </table> 
</div>
</body>
</html>