<?php
return array(
	//'配置项'=>'配置值'
	'APP_GROUP_LIST'=>'Home,Admin',//分组名称
	
	'DEFAULT_GROUP'=>'Home',//默认分组
	
	'DEFAULT_MODULE'=>'Index',//默认模块
	
	'URL_MODULT'=>2,//URL模式
	
	'SESSION_AUTO_START'=>true,//自动开户SESSION
	
	//数据库连接
	'DB_TYPE'=>'mysql',
	
	'DB_HOST'=>'localhost',
	
	'DB_NAME'=>'dds',
	
	'DB_USER'=>'root',
	
	'DB_PWD'=>'123456',
	
	'DB_PORT'=>'3306',
	
	'DB_PREFIX'=>'dds_',
	
	//网站资料
	'APP_WEBSITE'=>'弘晟官网',
	
	'APP_DESCRIPTION'=>'弘晟官网',
	
	'APP_KEYWORDS'=>'',
	
	'TMPL_PARSE_STRING'  =>array(

     '__JS__' => '/Public/Js', // 增加新的JS类库路径替换规则
  
     '__CSS__' => '/Public/Css', // 增加新的css类库路径替换规
 
     '__IMG__' => '/Public/Images', // 增加新的img类库路径替换
      
     '__UPLOAD__' => './Uploads' // 增加新的上传路径替换规则
	  ),
	
	 //缓存
	 
	 'TMPL_CACHE_ON'=>false,      // 默认开启模板缓存

      'TMPL_CACHE_ON'   => false,  // 默认开启模板编译缓存 false 的话每次都重新编译模板

      'ACTION_CACHE_ON'  => false,  // 默认关闭Action 缓存
      
	  'HTML_CACHE_ON'   => false,   // 默认关闭静态缓存
	  
	  //多语言
	  'LANG_SWITCH_ON' => true,   // 开启语言包功能
	  
	  'LANG_AUTO_DETECT' => true, // 自动侦测语言 开启多语言功能后有效

      'LANG_LIST'        => 'zh-cn', // 允许切换的语言列表 用逗号分隔

      'VAR_LANGUAGE'     => 'l', // 默认语言切换变量
	  
	  //上传设置
	  
	  'ATTACHSIZE'=>3145728 ,//文件大小byte
	  
	  'ATTACHEXT'=>array('jpg', 'gif', 'png', 'jpeg'),//格式
	  
	  'ATTACH'=>'',
	  
	  'THUMBMAXWIDTH'=>'',
	  
	  'THUMBMAXHEIGHT'=>'',
	  
	  'ATTACHPATH'=>'./Uploads',
	  

	
);
?>