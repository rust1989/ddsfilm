<?php
// 本类由系统自动生成，仅供测试用途
class ImgAction extends GobalAction {
	
	public function __construct(){
	  parent::__construct();
	  parent::index();
	  import('ORG.Util.Page');
	}
    public function index(){
		
	   $count=D('procates')->where('pid=0 and type=1')->count();
	   $page=new Page($count,10);
	   $show=$page->show();
	   $list=D('procates')->where('pid=0 and type=1')->limit($page->firstRow.','.$page->listRows)->select();
	   $this->assign('show',$show);
	   $this->assign('list',$list);
       $this->display();
    }
	public function child(){
		$ID=is_numeric($_GET['id'])?$_GET['id']:'';
	   if(empty($ID))$this->error(L('ID').L('NULL'),__URL__);
	   $count=D('img')->count();
	   $page=new Page($count,10);
	   $show=$page->show();
	   $list=D('img')->where(array('cid'=>$ID))->limit($page->firstRow.','.$page->listRows)->select();
	   $this->assign('show',$show);
	   $this->assign('id',$ID);
	   $this->assign('list',$list);
       $this->display();
    }
	
	public function addchild(){
	  $ID=is_numeric($_GET['id'])?$_GET['id']:'';
	  if(empty($ID))$this->error(L('ID').L('NULL'),__URL__);
	  $this->assign('cid',$ID);
	  $this->display();
	}
	
	public function saveaddchild(){
	 
	  $name=isset($_POST['name'])?dhtml($_POST['name']):'';
	  $cid=is_numeric($_POST['cid'])?$_POST['cid']:'';
	  if(empty($cid))$this->error(L('ID').L('NULL'),__URL__.'/child/id/'.$cid);
	  if(empty($name))$this->error(L('IDNAME').L('NULL'),__URL__.'/child/id/'.$cid);
	   
	  $path=date("Ymd");
	  $file=$this->_upload('img',$path);
	  
      $picpaths=$file[0]['savepath'].$file[0]['savename'];
	  $spicpaths=$file[1]['savepath'].$file[0]['savename'];
	  $newheight='100';
	  $newwidth='160';
	  $this->_resizeimg($spicpaths,"",$newheight,$newwidth); 
  	 $data=array(
	       'cid'=>$cid,
		   'name'=>$name,
		   'picpaths'=>$picpaths,
		   'spicpaths'=>$spicpaths
	  );
	 $query=D('img')->where($where)->add($data);
	 if($query) $this->success(L('ADDSUCCESS'),__URL__.'/child/id/'.$cid);
	 else $this->error(L('ADDSUCCESS'),__URL__.'/child/id/'.$cid);
	 
	}
	public function editchild(){
	  $id=isset($_GET['id'])?dhtml($_GET['id']):'';
	  $list=D('img')->where("id='".$id."'")->find();
	  $this->assign('list',$list);
	  $this->display();
	}
	public function saveeditchild(){
		$id=isset($_POST['id'])?dhtml($_POST['id']):'';
		$cid=isset($_POST['cid'])?dhtml($_POST['cid']):'';
		$name=isset($_POST['name'])?dhtml($_POST['name']):'';
		if(empty($id))$this->error(L('ID').L('NULL'),__URL__.'/child/id/'.$cid);
		if(empty($cid))$this->error(L('ID').L('NULL'),__URL__.'/child/id/'.$cid);
	    if(empty($name))$this->error(L('IDNAME').L('NULL'),__URL__.'/child/id/'.$cid);
		 $path=date("Ymd");
		 $list=D('img')->where("id='".$id."'")->find(); 
		if(!empty($_FILES['bimg']['name'])||!empty($_FILES['simg']['name'])){
			$file=$this->_upload('img',$path);
			var_dump($file);exit;
				  if(empty($_FILES['simg']['name'])){
						$picpaths=$file[0]['savepath'].$file[0]['savename'];
						$data=array(
							'name'=>$name,
							'picpaths'=>$picpaths
						);  
						$this->_delimg($list['picpaths']);
				  }else{
							 if(empty($_FILES['bimg']['name'])){
								   $spicpaths=$file[0]['savepath'].$file[0]['savename'];
									$data=array(
										'name'=>$name,
										'spicpaths'=>$spicpaths
									); 
									$newheight='100';
									$newwidth='160';
									$this->_resizeimg($spicpaths,"",$newheight,$newwidth); 
									$this->_delimg($list['spicpaths']);
							 }else{
								   $picpaths=$file[0]['savepath'].$file[0]['savename'];
								   $spicpaths=$file[1]['savepath'].$file[1]['savename'];
									$data=array(
										'name'=>$name,
										'picpaths'=>$picpaths,
										'spicpaths'=>$spicpaths
									);   
									$newheight='100';
									$newwidth='160';
									$this->_resizeimg($spicpaths,"",$newheight,$newwidth); 
									$this->_delimg($list['picpaths']);
									$this->_delimg($list['spicpaths']);	 
					          } 
			        }
		}else{
		$data=array(
		    'name'=>$name,
		);
		}
		$where=array(
		   'id'=>$id
		);
		$query=D('img')->where($where)->save($data);
		if($query) $this->success(L('ADDSUCCESS'),__URL__.'/child/id/'.$cid);
	    else $this->error(L('ADDSUCCESS'),__URL__.'/child/id/'.$cid);
		
	}
	public function delchild(){
	  	$ID=isset($_POST['id'])?$_POST['id']:'';
		
		if(empty($ID)) echo L('ID').L('NULL');
		 $arr=explode(',',$ID);
	     if(count($arr)>1){
		   foreach($arr as $id){
			   $query=D('img')->where("id='".$id."'")->delete();
		   }
		 }else{
			  $query=D('img')->where("id='".$ID."'")->delete(); 
		 }
		 if($query) echo L('DELSUCCESS');
		 else echo L('DELFAILURE');
	}
	
	
	public function imgsort(){
		$count=D('procates')->count();
		$page=new Page($count,10);
		$show=$page->show();
		$list=D('procates')->where('pid=0 and type=1')->limit($page->firstRow.','.$page->listRows)->select();
		$this->assign('list',$list);
		$this->assign('show',$show);
		$this->display();
	}
	public function addsort(){
		$this->display();
	}
	public function editsort(){
		$ID=is_numeric($_GET['id'])?$_GET['id']:'';
		if(empty($ID))$this->error(L('ID').L('NULL'),__URL__.'/imgsort');
		$list=D('procates')->where(array('id'=>$ID))->find();
		$this->assign('list',$list);
		$this->display();
	}
	public function saveaddsort(){
		$title=isset($_POST['title'])?dhtml($_POST['title']):'';
		if(empty($title))$this->error(L('IDNAME').L('NULL'),__URL__.'/imgsort');
		$path=date("Ymd");
	    $file=$this->_upload('img',$path);
        $picpaths=$file[0]['savepath'].$file[0]['savename'];
		$data=array(
		     'title'=>$title,
			 'pid'=>0,
			 'type'=>1,
			 'picpaths'=>$picpaths
		);
	   
		$query=D('procates')->data($data)->add();
		if($query)
		$this->success(L('ADDSUCCESS'),__URL__.'/imgsort');
		else
		$this->error(L('ADDFAILURE'),__URL__.'/imgsort');
		
	}
	public function delsort(){
	   	$ID=is_numeric($_POST['id'])?$_POST['id']:'';
		if(empty($ID)) echo L('ID').L('NULL');
		 $arr=explode(',',$ID);
	     if(count($arr)>1){
		   foreach($arr as $id){
			   $query=D('procates')->where("id='".$id."'")->delete();
		   }
		 }else{
			  $query=D('procates')->where("id='".$ID."'")->delete(); 
		 }
		 if($query) echo L('DELSUCCESS');
		 else echo L('DELFAILURE');
	}
	public function saveeditsort(){
		$title=isset($_POST['title'])?dhtml($_POST['title']):'';
		$ID=is_numeric($_POST['id'])?$_POST['id']:'';
		if(empty($ID))$this->error(L('ID').L('NULL'),__URL__.'/imgsort');
		if(empty($title))$this->error(L('IDNAME').L('NULL'),__URL__.'/imgsort');
		if(!empty($_FILES['picpaths']['name'])){
		   $path=date("Ymd");
	       $file=$this->_upload('img',$path);
          $picpaths=$file[0]['savepath'].$file[0]['savename'];	
		  $data=array(
		   'title'=>$title,
		   'picpaths'=>$picpaths
		   );
		}else
		$data=array(
		   'title'=>$title
		);
		
		$where=array(
		    'id'=>$ID
		);
		
		$query=D('procates')->where($where)->save($data);
		if($query)
		$this->success(L('EDITSUCCESS'),__URL__.'/imgsort');
		else
		$this->error(L('EDITFAILURE'),__URL__.'/imgsort');
	}
}