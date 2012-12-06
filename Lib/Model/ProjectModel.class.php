<?php 
class ProjectModel extends Model{
	protected $tableName = 'project'; 
	protected $_validate =  array(
	  array('title','require','标题不能为空'),
	  array('year','require','年份不能为空'),
    );
	protected $_auto	 =	 array(
	  
	);
}
?>