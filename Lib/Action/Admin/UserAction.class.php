<?php
// 本类由系统自动生成，仅供测试用途
class UserAction extends GobalAction {
	
	public function __construct(){
	  parent::__construct();
	  parent::index();
	  import('ORG.Util.Page');
	}
    public function index(){
		
	   $count=D('Admin')->count();
	   $page=new Page($count,10);
	   $show=$page->show();
	   $list=D('Admin')->limit($page->firstRow.','.$page->listRows)->select();
	   $this->assign('show',$show);
	   $this->assign('list',$list);
       $this->display();
    }
	
	public function add(){
	  $type=D('Role')->select();
	  $this->assign('type',$type);
	  $this->display();
	}
	
	public function saveadd(){
	  $name=isset($_POST['name'])?dhtml($_POST['name']):'';
	  $pwd=isset($_POST['pwd'])?md5(dhtml($_POST['pwd'])):'';
	  $confirmpwd=isset($_POST['confirmpwd'])?md5(dhtml($_POST['confirmpwd'])):'';
	  
	  if(empty($name))$this->error('用户名不能为空',__URL__);
	 
	  if(empty($_POST['pwd'])||empty($_POST['confirmpwd']))$this->error('密码不能为空',__URL__);  
	  
	  if(strlen($_POST['pwd'])<4||strlen($_POST['confirmpwd'])<4)$this->error('密码到少四位',__URL__);  
	  
	  if(!empty($_POST['pwd'])&&!empty($_POST['confirmpwd'])&&!empty($confirmpwd)&&($pwd==$confirmpwd)){
		 $list=D('Admin')->where("name='".$name."'")->find();
	   if(!$list){
		  $data=array(
				'name'=>"$name",
				'pwd'=>"$pwd"
					 );
		  $query=D('Admin')->data($data)->add();
		  if($query){
		  $this->success('创建成功',__URL__);
		  }else{
		  $this->error('创建失败',__URL__);    
		  }
		 }else{
		  $this->error('用户名已存在',__URL__);     
		 }
	  }else{
		$this->error('密码不一致',__URL__);  
	  }
	}
	public function edit(){
	  $id=isset($_GET['id'])?dhtml($_GET['id']):'';
	  $list=D('Admin')->where("id='".$id."'")->find();
	  $this->assign('list',$list);
	  $this->display();
	}
	public function saveedit(){
		$id=isset($_POST['id'])?dhtml($_POST['id']):'';
		$name=isset($_POST['name'])?dhtml($_POST['name']):'';
		$pwd=isset($_POST['pwd'])?md5(dhtml($_POST['pwd'])):'';
		$confirmpwd=isset($_POST['confirmpwd'])?md5(dhtml($_POST['confirmpwd'])):'';
		
		
		if(!empty($pwd)&&!empty($confirmpwd)&&($pwd!==$confirmpwd)){
			$this->error('密码不一致',__URL__); 
			exit;
		}else {

		  if(!empty($_POST['pwd'])&&!empty($_POST['confirmpwd'])){
			  if(strlen($_POST['pwd'])<4||strlen($_POST['confirmpwd'])<4)$this->error('密码到少四位',__URL__);  
			  $data=array(
				  'name'=>"$name",
				  'pwd'=>"$pwd"
				  );
		  }else{
		  $data=array('name'=>"$name");
		  }
		}
		$query=D('Admin')->where("id='".$id."'")->save($data);
		if($query){
		$this->success('修改成功',__URL__);
		}else{
		$this->success('修改失败',__URL__); 	
		}
	}
	public function deluser(){
	  $id=isset($_POST['id'])?dhtml($_POST['id']):'';
	  if(!empty($id)){
		 $arr=explode(',',$id);
	     if(count($arr)>1){
		   foreach($arr as $id){
			   if($id!=='1'){
				 echo "删除失败";
			   }else{ 
			   $query=D('Admin')->where("id='".$id."'")->delete();
			   }
		   }
		 }else{
			  if($id=='1'){
			   echo "删除失败";
			  }else{
			  $query=D('Admin')->where("id='".$id."'")->delete(); 
			  }
		 }
		 if($query)echo "删除成功";else  echo "删除失败";
	  }else{
		 echo "删除失败";  
	  }
	}
}