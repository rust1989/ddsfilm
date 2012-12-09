<?php 
class IndexAction extends Action{
   public function index(){
	  $id=isset($_GET['id'])?$_GET['id']:'';
	  if(empty($id)) 
	  $projects=D('project')->select();
	  else
	 $projects=D('project')->where(array('sid'=>$id))->select();
	  $procates=D('procates')->select();
	  $this->assign('procates',$procates);
	  $this->assign('projects',$projects);
	  $this->display();   
   }	
   public function video(){
	   $id=isset($_POST['id'])?$_POST['id']:'';
	   if(!is_numeric($id)) return false;
	   $list=D('project')->where(array('id'=>$id))->find();
	   _json($list);
   }
   public function company(){
	  $teams=D('team')->select(); 
	  $procates=D('procates')->select();
	 
	  
	  $clients=D('client')->select();
	  $contact=D('article')->where(array('model'=>'contact'))->find();
	  $about=D('article')->where(array('model'=>'about'))->find();
	  
	  
	  
	  $this->assign('contact',$contact);
	  $this->assign('about',$about);
	  $this->assign('procates',$procates); 
	  $this->assign('teams',$teams);
	  $this->assign('clients',$clients);
	  $this->display();   
   }
  
}
?>