<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends GobalAction {
	public function __construct(){
	 parent::__construct();
	  parent::index();	
	}
    public function index(){
	
       $this->display();
    }
	public function topmenu(){
		$this->display("Public:topmenu");	
	}
	public function menu(){
		$this->display("Public:menu");
	}
	public function main(){
		
			//获取系统信息
		$array=array();
		$serverinfo = PHP_OS.' / PHP v'.PHP_VERSION;
		$serverinfo .= @ini_get('safe_mode') ? ' Safe Mode' : NULL;
	
		$fileupload = @ini_get('file_uploads') ? ini_get('upload_max_filesize') : '<font color="red">不支持上传</font>';
		
		$dbsize = $dbsize ? RealSize($dbsize) : '未知大小';
		$magic_quote_gpc = get_magic_quotes_gpc() ? 'On' : 'Off';
		
		$array['serverinfo']=$serverinfo;
		$array['fileupload']=$fileupload;
		$array['magic_quote_gpc']=$magic_quote_gpc;
		$this->assign($array);
		$this->display("Public:main");
	}
}