<?php 
 class GobalAction extends Action{
	 public function __construct(){
	    parent::__construct();	 
	 }
	 public function index(){
	  	 if($_SESSION['ok']!=='true'){
			 $this->redirect('Login/index');
			 exit;
		  }
	 }
	 /*
	@公共上传
	@模块
	@路径
	@是否生成缩略图
	*/
	public function _upload($module,$path,$thumb,$width,$height){
		$module=$module=""?'file':$module;//未知模块将存入file文件夹
		switch($module) {
            case 'img': $path=C(ATTACHPATH).'/img/'.$path.'/';break;
            default:$path=C(ATTACHPATH).'/file/'.$path.'/';
        }
		if (!is_dir($path))	mk_dir($path);
		   
		import("ORG.Net.UploadFile");
        $upload = new UploadFile();
		$upload->maxSize=C(ATTACHSIZE);
		$upload->allowExts=C(ATTACHEXT);
		$upload->savePath=$path;
		$upload->saveRule='uniqid';
		isset($thumb)?$upload->thumb=$thumb:$upload->thumb=C(ATTACH);
		isset($width)?$upload->thumbMaxWidth=$width:$upload->thumbMaxWidth=C(THUMBMAXWIDTH);
		isset($height)?$upload->thumbMaxHeight=$height:$upload->thumbMaxHeight=C(THUMBMAXHEIGHT);
		$upload->thumbSuffix =C(THUMBSUFFIX); 
		//$upload->thumbMaxWidth =C(THUMBMAXWIDTH); 
		//$upload->thumbMaxHeight =C(THUMBMAXHEIGHT); 
        if(!$upload->upload()){
            //捕获上传异常
            return $this->error($upload->getErrorMsg());
        }else{
			//上传成功
			return $upload->getUploadFileInfo();
    	}
	}
	/*删除图片*/
	public function _delimg($path){
		if(!is_file($path)) return false;
		$arr=explode(',',$path);
		if(count($arr)>1){
			for($i=0;$i<count($arr);$i++){
				@unlink($arr[$i]);
			}
		}else{
			@unlink($path);
		}
		return true;
	}
	
	/*修改图片大小*/
	public function _resizeimg($path,$newpath='',$newheight,$newwidth){
		if(empty($newpath)) $newpath=$path;
		$img_info=@getimagesize($path);
		if(!$img_info||$newheight<1||empty($newpath)||$newwidth<1){
		   return false;
		}
		if(strpos($img_info['mime'],'jpeg')!==false){
			$imgobj=imagecreatefromjpeg($path);
		}else if(strpos($img_info['mime'],'png')!==false){
			$imgobj=imagecreatefrompng($path);
		}else if(strpos($img_info['mime'],'gif')!==false){
			$imgobj=imagecreatefromgif($path);
		}else {
		   return false;	
		}
		
		$pic_widht=imagesx($imgobj);
		$pic_height=imagesy($imgobj);
		
		if(function_exists("imagecopyresampled")){
			$new_img=imagecreatetruecolor($newwidth,$newheight);
			imagecopyresampled($new_img,$imgobj,0,0,0,0,$newwidth,$newheight,$pic_widht,$pic_height);
		}else{
		    $new_img=imagecreate($newwidth,$newheight);	
			imagecopyresized($new_img,$imgobj,0,0,0,0,$newwidth,$newheight,$pic_widht,$pic_height);
		}
		if (preg_match('~.([^.]+)$~', $new_img_path, $match)) {  
        $new_type = strtolower($match[1]);  
        switch ($new_type) {  
            case 'jpg':  
                imagejpeg($new_img, $newpath);  
                break;  
            case 'gif':  
                imagegif($new_img, $newpath);  
                break;  
            case 'png':  
                imagepng($new_img, $newpath);  
                break;  
            default:  
                imagejpeg($new_img, $newpath);  
        }  
    } else {  
        imagejpeg($new_img, $newpath);  
    }  
    imagedestroy($pic_obj);  
    imagedestroy($new_img);  
    return true; 
	
    }
	/*
	query 结果
	method 操作
	*/
	public function _jump($query,$url="index",$method="add"){
		switch($method){
		case "add":
		if($query) $this->success(L('ADDSUCCESS'),__URL__."/".$url);
		else $this->error(L('ADDFAILURE'),__URL__."/".$url);
		break;
		case "edit":
		if($query) $this->success(L('EDITSUCCESS'),__URL__."/".$url);
		else $this->error(L('EDITFAILURE'),__URL__."/".$url);
	    }
	}
	/*
	删除数据
	id号
	DB模块
	*/
	public function _del($id,$DB){
		
		$DB=D("$DB");
		if(empty($id)||empty($DB)) return false;
		if(is_numeric($id)){
		  $list=$DB->where(array('id'=>$id))->delete();	
		}else{
		$id=explode(',',$id);
		
		 for($i=0;$i<count($id);$i++){
		 $list=$DB->where(array('id'=>$id[$i]))->delete();
		 }
		}
		return true;
	}
}
?>