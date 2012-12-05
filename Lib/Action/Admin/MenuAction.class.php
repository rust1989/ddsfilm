<?php 
class MenuAction extends GobalAction{
	public function __construct(){
	  parent::__construct();
	  parent::index();
	}
	public function menu(){
		$action=$_REQUEST['action'];
	   	$this->assign("action",$action);
	    $this->display("Public:menu");
	 }
	
	}
?>