<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<link rel="stylesheet" href="__CSS__/Admin/common.css" type="text/css" />
<script type="text/javascript" src="__JS__/jquery.js"></script>
<title>管理区域</title>
</head>
<script type="text/javascript">
$(document).ready(function(){
	$("form").submit(function(){
		var b="";
		var a=$(this).find('input:checked').val();
		
		if(a=='true'){
			$("[name='id']").each(function(){
				if($(this).attr('checked')){
				  b+=$(this).val()+",";
				}
			 });
			 var len=b.length-1;
			 b=b.substring(0,len);
			 $.ajax({
				 url:"__URL__/delsort",
				 type:'post',
				 data:"id="+b,
				 success:function(data){
				location.href='__URL__/imgsort';
					 }
				 });
			 return false;
		}else{
		  alert('请确认在删除');
		  return false;	
		}
		});
	});
</script>
<body>
<div id="man_zone">
    
   <table width="99%" border="0" align="center"  cellpadding="3" cellspacing="1" class="table_style">
   <tr>
    <td colspan="5" class="right_title_2" height="50"><a href="__URL__/addsort"><?php echo L('ADDSORT'); ?></a></td>
   </tr>
   <div id="checkbox">
   <tr>
      <td width="10%" class="right_title_1"></td>
      <td width="18%" class="right_title_1"><?php echo L('ID');?>&nbsp;</td>
      <td width="32%" class="right_title_1">&nbsp;<?php echo L('IDNAME');?></td>
      <td width="20%" class="right_title_1">&nbsp;<?php echo L('ACTION');?></td> 
   </tr>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($mod) == "0"): ?><tr>
      <td width="10%" class="right_title_2"><input type="checkbox" name="id" id="id" value="<?php echo ($vo["id"]); ?>" /></td>
      <td width="18%" class="right_title_2"><?php echo ($vo["id"]); ?>&nbsp;</td>
      <td width="32%" class="right_title_2">&nbsp;<?php echo ($vo["title"]); ?></td>
      <td width="20%" class="right_title_2">&nbsp;<a href="__URL__/editsort/id/<?php echo ($vo["id"]); ?>"><?php echo L('EDIT');?></a></td> 
    </tr><?php endif; ?>
    <?php if(($mod) == "1"): ?><tr>
       <td width="10%" class="right_title_1"><input type="checkbox" name="id" id="id" value="<?php echo ($vo["id"]); ?>" /></td>
      <td width="18%" class="right_title_1"><?php echo ($vo["id"]); ?>&nbsp;</td>
      <td width="32%" class="right_title_1">&nbsp;<?php echo ($vo["title"]); ?></td>
      <td width="20%" class="right_title_1">&nbsp;<a href="__URL__/editsort/id/<?php echo ($vo["id"]); ?>"><?php echo L('EDIT');?></a></td> 
    </tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <tr>
      <td colspan="5" class="right_title_2" height="50"><?php echo ($show); ?> </td>
    </tr>
    <tr>
    <td colspan="5" class="right_title_2" height="50"><form><?php echo L('DEL');?>：&nbsp;否&nbsp;<input type="radio" name="del" value="false" checked="checked"  />&nbsp;是<input type="radio" name="del" value="true" />&nbsp;&nbsp;<input type="submit" class="submit" value=""  />&nbsp;&nbsp;</form></td>
   </tr>
  </table>
</div>
</body>
</html>