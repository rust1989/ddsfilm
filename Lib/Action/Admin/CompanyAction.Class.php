<?php
class CompanyAction extends GobalAction{
	public function __construct(){
	  parent::__construct();
	  parent::index();
	  import('ORG.Util.Page');
	}
	public function contact(){
		$content=dhtml($_POST['content']);
		$action=isset($_POST['action'])?$_POST['action']:"index";
		$DB=D('article');
		$DB->create();
	    switch($action){
		 case "index":
		  $action="add";
		 break;
		 case "add":
		  	$id=$DB->add();
			$action="save";
		break;
		case "save":
			$query=$DB->save();
		break;
		}
		$this->assign("action",$action);
		$this->assign("id",$id);
		$this->display('index');
	}
	public function  about(){
		$this->display('index');
	} 
}
?>