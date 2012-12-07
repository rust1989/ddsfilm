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
	  $this->assign('procates',$procates); 
	  $this->assign('teams',$teams); 
	  $this->display();   
   }
   public function article(){
	   $model=isset($_GET['model'])?dhtml($_GET['model']):"";
	   if(empty($model)) $this->redirect('company');
	   $list=D('article')->where(array('model'=>$model))->find();
	   _json($list);
   }
    public function team(){
	   $list=D('team')->select();
	   _json($list);
   }
   public function client(){
	  $list=D('cliennt')->select();
	  _json($list); 
   }
}
?>