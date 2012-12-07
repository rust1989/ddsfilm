<?php
$lifeTime = 3600;   
session_set_cookie_params($lifeTime); 

define('APP_NAME','hongsheng');//项目名称

define('APP_PATH','./');//项目路径

define('APP_DEBUG',true);
require APP_PATH.'ThinkPHP/ThinkPHP.php';//加载框架入口文件
?>