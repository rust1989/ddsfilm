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
			$sql="replace into ".C('DB_PREFIX')."article(title,content,date,model) values('$title','$content','$time','$model') ";
	
    		$DB->query($sql);
			break;
		}
		$list=$DB->where(array('model'=>$model))->find();
		$this->assign('model',$model);
		$this->assign('content',$list['content']);
		$this->display();
	}
	
	public function save(){
		$model=isset($_GET['model'])?dhtml($_GET['model']):"";
		if(empty($model)) $this->redirect('Index/main');
		$DB=D("".$model."");
		$method=dhtml($_GET['method']);
		if(empty($method)) $this->error('',__URL__.'/'.$model);
		//$DB=new TeamModel('team');
		if (!$DB->create()){
		$this->error($DB->getError(),__URL__.'/'.$model);
		}else{
		$module="img";
		$path=date("Ymd");
			switch($method){
				case "add":
				if(!empty($_FILES['pic']['name'])){
				$pic=$this->_upload($module,$path);
				$img=$pic[0]['savepath'].$pic[0]['savename'];
				$DB->pic=$img;
				}
				$query=$DB->add();
				$this->_jump($query,"_list/model/$model");
				break;
				case "edit":
				if(!empty($_FILES['pic']['name'])){
				$pic=$this->_upload($module,$path);
				$img=$pic[0]['savepath'].$pic[0]['savename'];
				$DB->pic=$img;
				}
				$query=$DB->save();
				$this->_jump($query,"_list/model/$model","edit");
				break;
			}
		}
	}
	public function del(){
		
		return $this->_del();	
	}
	public function _list(){
		$model=isset($_GET['model'])?dhtml($_GET['model']):"";
		if(empty($model)) $this->redirect('Index/main');
		$DB=D("".$model."");
		$count=$DB->count();
		$page=new Page($count,10);
		$show=$page->show();
		$list=$DB->select();
		$this->assign('list',$list);
		$this->assign('show',$show);
		$this->assign('model',$model);
		$this->display();
	}
    
	public function control(){
		$model=isset($_GET['model'])?dhtml($_GET['model']):"";
		if(empty($model)) $this->redirect('Index/main');
		$DB=D("".$model."");
		$method=isset($_GET['method'])?dhtml($_GET['method']):'';
		if(empty($method)) $this->error('',__URL__.'/model/'.$model);
		if($method=="edit"){
		   $id=isset($_GET['id'])?intval($_GET['id']):"";
		   if(!$id) $this->error(L('IDNULL'),__URL__.'/model/'.$model);	
		   $list=$DB->where("id=$id")->find();
		   $this->assign('list',$list);	
		}
		$columns=$DB->query("show columns from ".C('DB_PREFIX')."$model");
		unset($columns[0]);
		$this->assign('columns',$columns);
		$this->assign('method',$method);
		$this->assign('model',$model);
		$this->display();
	}
}