<?php 
class TeamModel extends Model{
	protected $tableName = 'team'; 
	protected $_validate =  array(
      array('name','require','名称不能为空',1,'unique',3),
	  array('email','email','邮箱不能为空',1,'unique',3),
	  array('weibo','require','微博不能为空',1,'unique',3),
	  array('infor','require','简介不能为空',1),
    );
	protected $_auto	 =	 array(
	  
	);
}
?>