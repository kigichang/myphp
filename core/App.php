<?php
include_once 'Core.php';
class App {
	private static $instance = null;
	
	protected static $rewrite = false;
	protected static $web_app = true;
	protected static $module = null;
	
	private function __construct() {
		App::$module = Core::get('App.Module');
		
		if (!(App::$rewrite = empty($_SERVER['PATH_INFO']))) {
			$uri = $_SERVER['PATH_INFO'];
		}
		else if (isset($_SERVER['REQUEST_URI'])) {
			$uri = $_SERVER['REQUEST_URI'];
		}
		else {
			App::$web_app = false;
			$uri = $argv[0];
		}
		
		if ($uri !== '/') {
			if (strpos($uri, '?') !== false) {
				list($uri) = explode('?', $uri, 2);
			}
			$uri = trim($uri, '/');
			$params = explode('/', $uri);
			$module = App::$module != null && in_array($params[0], App::$module) ? array_shift($params): '/';
		
			$controller = array_shift($params);
			$action = array_shift($params);
			
			echo "\r\n module = $module \r\n controller = $controller \r\n action = $action \r\n";
			var_dump($params);
		}
		else {
			echo 'load default controller';
		}
	}
	
	public static function getInstance() {
		if (App::$instance == null) {
			App::$instance = new App();
		}
		
		return App::$instance;
	}
	
	
}
?>