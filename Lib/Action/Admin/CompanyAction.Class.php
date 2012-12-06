
<?php
// 本类由系统自动生成，仅供测试用途
class CompanyAction extends GobalAction {
	public function __construct(){
	  parent::__construct();
	  parent::index();
	  import('ORG.Util.Page');
	}

	public function article(){
		$method=isset($_GET['method'])?dhtml($_GET['method']):"";
		$model=strtoupper(dhtml($_GET['model']));
		$content=isset($_POST['content'])?dhtml($_POST['content']):"";
        $time=time();
		$title=L("$model");
		$DB=D('article');
		switch($method){
			case "save":
			$sql="replace into ".C('DB_PREFIX')."article(title,content,date,model) values('$title',$content,'$time','$model') ";
			$DB->query($sql);
			break;
		}
		$list=$DB->where(array('model'=>$model))->find();
		$this->assign('model',$model);
		$this->assign('content',$list['content']);
		$this->display();
	}
	
	public function team(){
		$count=D('team')->count();
		$page=new Page($count,10);
		$show=$page->show();
		$list=D('team')->select();
		$this->assign('list',$list);
		$this->assign('show',$show);
		$this->display();
	}
	public function teamcontrol(){
		$method=isset($_GET['method'])?dhtml($_GET['method']):'';
		if(empty($method)) $this->error('',__URL__.'/team');
		if($method=="edit"){
		   $id=isset($_GET['id'])?intval($_GET['id']):"";
		   if(!$id) $this->error(L('IDNULL'),__URL__.'/team');	
		   $list=D('team')->where("id=$id")->find();
		   $this->assign('list',$list);	
		}
		$this->assign('method',$method);
		$this->display();
	}
	public function save(){
		$method=dhtml($_GET['method']);
		if(empty($method)) $this->error('',__URL__.'/team');
		$DB=new TeamModel('team');
		if (!$DB->create()){
		$this->error($DB->getError(),__URL__.'/team');
		}else{
		$module="img";
		$path=date("Ymd");
			switch($method){
				case "add":
				$pic=$this->_upload($module,$path);
				$img=$pic[0]['savepath'].$pic[0]['savename'];
				$DB->pic=$img;
				$query=$DB->add();
				$this->_jump($query,"team");
				break;
				case "edit":
				if(!empty($_FILES['pic']['name'])){
				$pic=$this->_upload($module,$path);
				$img=$pic[0]['savepath'].$pic[0]['savename'];
				$DB->pic=$img;
				}
				$query=$DB->save();
				$this->_jump($query,"team","edit");
				break;
			}
		}
	}
	public function del(){
		$id=isset($_POST['id'])?dhtml($_POST['id']):"";
		$DB=isset($_POST['db'])?dhtml($_POST['db']):"";
		return $this->_del($id,$DB);	
	}
}