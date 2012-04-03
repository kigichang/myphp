<?php
echo  'hello world!!';
define('DS', DIRECTORY_SEPARATOR);
define('APP', dirname(dirname(__FILE__)));
define('ROOT', dirname(APP));
define('CORE', ROOT.DS.'core');
include_once CORE.DS.'App.php';
App::getInstance();
		
?>