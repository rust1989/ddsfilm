<?php
// 本类由系统自动生成，仅供测试用途
class TeamAction extends GobalAction {
	
	public function __construct(){
	  parent::__construct();
	  parent::index();
	  import('ORG.Util.Page');
	}
	
	public function index(){
		$count=D('team')->count();
		$page=new Page($count,10);
		$show=$page->show();
		$list=D('team')->select();
		$this->assign('list',$list);
		$this->assign('show',$show);
		$this->display();
	}
	public function editteam(){
	   $id=isset($_GET['id'])?intval($_GET['id']):"";
	   if(!$id) $this->error(L('IDNULL'),__URL__);	
	   $list=D('team')->where("id=$id")->find();
	   $this->assign('list',$list);
	   $this->display();
	}
	public function saveeditteam(){
		$DB=new TeamModel('team');
		if (!$DB->create()){
		$this->error($DB->getError(),__URL__);
		}else{
			if(!empty($_FILES['pic']['name'])){
			$module="img";
			$path=date("Ymd");
			$pic=$this->_upload($module,$path);
			$img=$pic[0]['savepath'].$pic[0]['savename'];
			$DB->pic=$img;
			}
			$query=$DB->save();
		}
		if($query) $this->success(L('EDITSUCCESS'),__URL__);
		else $this->error(L('EDITFAILURE'),__URL__);
	}
	public function addteam(){
		$this->display();
	}
	public function saveteam(){
		$DB=new TeamModel('team');
		if (!$DB->create()){
		$this->error($DB->getError(),__URL__);
		}else{
			$module="img";
			$path=date("Ymd");
			$pic=$this->_upload($module,$path);
			$img=$pic[0]['savepath'].$pic[0]['savename'];
			$DB->pic=$img;
			$query=$DB->add();
		}
		if($query) $this->success(L('ADDSUCCESS'),__URL__);
		else $this->error(L('ADDFAILURE'),__URL__);
	}
}