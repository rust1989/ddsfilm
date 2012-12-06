<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<link rel="stylesheet" href="__CSS__/Admin/common.css" type="text/css" />
<script type="text/javascript" src="__JS__/Admin/jquery.js"></script>
<title>管理区域</title>
</head>

<body>
<div id="man_zone">
    
   <table width="99%" border="0" align="center"  cellpadding="3" cellspacing="1" class="table_style">
   <tr>
     <td colspan="6" height="30" align="center"> <a href="__URL__/teamcontrol/method/add">增加导演</a></td>
   </tr>
   <div id="checkbox">
   <tr>
      <td width="10%" class="right_title_1"></td>
      <td width="10%" class="right_title_1"><?php echo L('ID'); ?>&nbsp;</td>
      <td width="20%" class="right_title_1">&nbsp;<?php echo L('IDNAME'); ?></td>
      <td width="20%" class="right_title_1">&nbsp;<?php echo L('IMG'); ?></td>
      <td width="20%" class="right_title_1">&nbsp;<?php echo L('INFOR'); ?></td>
      <td width="20%" class="right_title_1">&nbsp;<?php echo L('ACTION'); ?></td> 
   </tr>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($mod) == "0"): ?><tr>
       <td width="10%" class="right_title_1"><input type="checkbox" name="id" id="id" value="<?php echo ($vo["id"]); ?>" /></td>
       <td width="10%" class="right_title_1"><?php echo ($vo["id"]); ?></td>
       <td width="20%" class="right_title_1"><?php echo ($vo["name"]); ?></td>
       <td width="20%" class="right_title_1"><img src="<?php echo (substr($vo["pic"],1)); ?>" height="100" width="100" /></td>
       <td width="20%" class="right_title_1"><?php echo ($vo["infor"]); ?></td>
       <td width="20%" class="right_title_1">&nbsp;<a href="__URL__/teamcontrol/id/<?php echo ($vo["id"]); ?>/method/edit"><?php echo L('EDIT'); ?></td> 
    </tr><?php endif; ?>
    <?php if(($mod) == "1"): ?><tr>
       <td width="10%" class="right_title_1"><input type="checkbox" name="id" id="id" value="<?php echo ($vo["id"]); ?>" /></td>
       <td width="10%" class="right_title_1"><?php echo ($vo["id"]); ?></td>
       <td width="20%" class="right_title_1"><?php echo ($vo["name"]); ?></td>
       <td width="20%" class="right_title_1"><img src="<?php echo (substr($vo["pic"],1)); ?>" height="100" width="100" /></td>
       <td width="20%" class="right_title_1"><?php echo ($vo["infor"]); ?></td>
       <td width="20%" class="right_title_1">&nbsp;<a href="__URL__/teamcontrol/id/<?php echo ($vo["id"]); ?>/method/edit"> <?php echo L('EDIT'); ?></td> 
    </tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <tr>
      <td colspan="6" class="right_title_2" height="50"><?php echo ($show); ?> </td>
    </tr>
  
  </table>
</div>
</body>
</html>