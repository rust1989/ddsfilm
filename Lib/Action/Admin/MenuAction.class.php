<?php 
class MenuAction extends GobalAction{
	public function __construct(){
	  parent::__construct();
	  parent::index();
	  import('ORG.Util.Page');
	}
	public function menu(){
		$action=$_REQUEST['action'];
	   	$this->assign("action",$action);
	    $this->display("Public:menu");
	 }
	public function _list(){
	   $DB=M('menu');
	   $num=$DB->count();
	   $page=new Page($num,20);
	   $show=$page->show();
	   $list=$DB->limit($page->firstRow.','.$page->listRows)->select();
	   $this->assign('model','menu');
	   $this->assign('list',$list);
	   $this->assign('show',$show);
	   $this->display('index');	
	}
	public function control(){
		$unset=array('id','date');
		$this->_control('menu',$unset);
	}
	public function save(){
		$this->_save();
	}
	public function del(){
	    $this->_del();	
	}
}
?>