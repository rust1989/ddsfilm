<?php
// 本类由系统自动生成，仅供测试用途
class ProjectAction extends GobalAction {
	
	public function __construct(){
	  parent::__construct();
	  parent::index();
	  import('ORG.Util.Page');
	}
	public function index(){
	   $count=D('project')->count();
	   $page=new Page($count,20);
	   $show=$page->show();
	   $list=D('project')->limit($page->firstRow.','.$page->listRows)->select();
	   $this->assign('show',$show);
	   $this->assign('list',$list);
       $this->display();
	}
	public function projectcontrol(){
		$method=isset($_GET['method'])?dhtml($_GET['method']):'';
		if(empty($method)) $this->error('',__URL__);
		if($method=="edit"){
		   $id=isset($_GET['id'])?intval($_GET['id']):"";
		   if(!$id) $this->error(L('IDNULL'),__URL__);	
		   $list=D('project')->where("id=$id")->find();
		   $this->assign('list',$list);	
		}
		$dirctors=D('team')->select();
		$sort=D('procates')->select();
		$this->assign('sorts',$sort);
		$this->assign('directors',$dirctors);
		$this->assign('method',$method);
		$this->display();
	}
	public function save(){
		$method=dhtml($_GET['method']);
		if(empty($method)) $this->error('',__URL__);
		$DB=new ProjectModel('project');
		if (!$DB->create()){
		$this->error($DB->getError(),__URL__);
		}else{
		$module="img";
		$path=date("Ymd");
		$DB->date=time();
			switch($method){
				case "add":
				$pic=$this->_upload($module,$path);
				$img=$pic[0]['savepath'].$pic[0]['savename'];
				$DB->pic=$img;
				
				$query=$DB->add();
				$this->_jump($query,"");
				break;
				case "edit":
				if(!empty($_FILES['pic']['name'])){
				$pic=$this->_upload($module,$path);
				$img=$pic[0]['savepath'].$pic[0]['savename'];
				$DB->pic=$img;
				}
				$query=$DB->save();
				$this->_jump($query,"","edit");
				break;
			}
		}
	}
	public function del(){
		$id=isset($_POST['id'])?dhtml($_POST['id']):"";
		$DB=isset($_POST['db'])?dhtml($_POST['db']):"";
		return $this->_del($id,$DB);	
	}
    public function prosort(){
		
	   $count=D('procates')->count();
	   $page=new Page($count,10);
	   $show=$page->show();
	   $list=D('procates')->limit($page->firstRow.','.$page->listRows)->select();
	   $this->assign('show',$show);
	   $this->assign('list',$list);
       $this->display();
    }
	public function sortcontrol(){
		$method=isset($_GET['method'])?dhtml($_GET['method']):'';
		if(empty($method)) $this->error('',__URL__.'/prosort');
		if($method=="edit"){
		   $id=isset($_GET['id'])?intval($_GET['id']):"";
		   if(!$id) $this->error(L('IDNULL'),__URL__.'/prosort');	
		   $list=D('procates')->where("id=$id")->find();
		   $this->assign('list',$list);	
		}
		$this->assign('method',$method);
		$this->display();
		
	}
	public function savesort(){
		$method=dhtml($_GET['method']);
		if(empty($method)) $this->error('',__URL__.'/prosort');
		$DB=D('procates');
		if (!$DB->create()){
		$this->error($DB->getError(),__URL__.'/prosort');
		}else{
			switch($method){
				case "add":
				$query=$DB->add();
				$this->_jump($query,"prosort");
				break;
				case "edit":
				$query=$DB->save();
				$this->_jump($query,"prosort","edit");
				break;
			}
		}
	}
	
}