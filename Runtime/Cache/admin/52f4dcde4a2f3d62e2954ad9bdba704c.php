<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<link rel="stylesheet" href="__CSS__/Admin/common.css" type="text/css" />
<script type="text/javascript" src="__JS__/Admin/jquery.js"></script>
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
				 url:"__URL__/deluser",
				 type:'post',
				 data:"id="+b,
				 success:function(data){
				location.href='__URL__';
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
    <td colspan="5" class="right_title_2" height="50"><a href="__URL__/add">增加管理员</a></td>
   </tr>
   <div id="checkbox">
   <tr>
      <td width="10%" class="right_title_1"></td>
      <td width="18%" class="right_title_1">编号&nbsp;</td>
      <td width="32%" class="right_title_1">&nbsp;用户名</td>
      <td width="20%" class="right_title_1">&nbsp;操作</td> 
   </tr>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($mod) == "0"): ?><tr>
      <td width="10%" class="right_title_2"><input type="checkbox" name="id" id="id" value="<?php echo ($vo["id"]); ?>" /></td>
      <td width="18%" class="right_title_2"><?php echo ($vo["id"]); ?>&nbsp;</td>
      <td width="32%" class="right_title_2">&nbsp;<?php echo ($vo["name"]); ?></td>
      <td width="20%" class="right_title_2">&nbsp;<a href="__URL__/edit/id/<?php echo ($vo["id"]); ?>">修改</a></td> 
    </tr><?php endif; ?>
    <?php if(($mod) == "1"): ?><tr>
       <td width="10%" class="right_title_1"><input type="checkbox" name="id" id="id" value="<?php echo ($vo["id"]); ?>" /></td>
      <td width="18%" class="right_title_1"><?php echo ($vo["id"]); ?>&nbsp;</td>
      <td width="32%" class="right_title_1">&nbsp;<?php echo ($vo["name"]); ?></td>
      <td width="20%" class="right_title_1">&nbsp;<a href="__URL__/edit/id/<?php echo ($vo["id"]); ?>">修改</a></td> 
    </tr><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <tr>
      <td colspan="5" class="right_title_2" height="50"><?php echo ($show); ?> </td>
    </tr>
    <tr>
    <td colspan="5" class="right_title_2" height="50"><form action="__URL__/deluser" method="post">删除管理员：&nbsp;否&nbsp;<input type="radio" name="del" value="false" checked="checked"  />&nbsp;是<input type="radio" name="del" value="true" />&nbsp;&nbsp;<input type="submit" class="submit" value=""  />&nbsp;&nbsp;<font style="color:red">(*admin管理员请勿删除*)</font></form></td>
   </tr>
  </table>
</div>
</body>
</html>