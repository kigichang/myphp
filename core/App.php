<?php
class App {
	protected $rewrite = false;
	protected $web_app = true;
	
	
	public function __construct() {
		
		if (!($this->rewrite = empty($_SERVER['PATH_INFO']))) {
			$uri = $_SERVER['PATH_INFO'];
		}
		else if (isset($_SERVER['REQUEST_URI'])) {
			$uri = $_SERVER['REQUEST_URI'];
		}
		else {
			$this->web_app = false;
			$uri = $argv[0];
		}
		echo $uri.':'.var_dump($this->rewrite).':'.var_dump($this->web_app);
	}
}
?>