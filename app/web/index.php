<?php
echo  'hello world!!';
define('DS', DIRECTORY_SEPARATOR);
include_once '..'.DS.'..'.DS.'core'.DS.'App.php';
App::getInstance();
		
?>