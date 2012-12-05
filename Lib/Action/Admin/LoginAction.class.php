<?php
class LoginAction extends Action{
	public function __construct(){
	  parent::__construct();
	}
	public function index(){
	   if($_SESSION['ok']=='true'){	
	   $this->redirect(__GROUP__.'/index');
	  }
	  $this->display('Public:login');	
	  
	}
	public function verify(){
		import('ORG.Util.Image');
		Image::buildImageVerify();
	}
	public function checkLogin(){
		if($_SESSION['verify']!==md5($_POST['seccode'])){
			$this->error('验证码不正确',__GROUP__.'/Login');
			exit;
		}
		
		$username=isset($_POST['username'])?dhtml($_POST['username']):'';
		$pwd=isset($_POST['password'])?dhtml($_POST['password']):''; 
		$list=M("Admin")->where("name='".$username."'")->find(); 
		
		if($list){
			
			if(md5($pwd)==$list['pwd']){
				
				$_SESSION['ok']='true';
				$_SESSION['roleid']=$list['roleid'];
				$_SESSION['name']=$list['name'];
				$this->success("登陆成功",__GROUP__."/Index/");
			}else{
			   $this->error('用户或密码不正确',__GROUP__.'/Login');
			}
		}else{
			$this->error('用户或密码不正确',__GROUP__.'/Login');
		}
		
	}
	public function loginout(){
		
		$_SESSION['ok']='';
		$_SESSION['roleid']='';
		$_SESSION['name']='';
		session_unset();
		session_destroy();
	    $this->success('退出成功',__GROUP__.'/Login');	
	}
}
?>