<?php 
class Controller {
	protected $request = null;
	protected $response = null;
	
	public function __construct($req, $resp) {
		$this->request = req;
		$this->response = resp;
	}
	
	
	public function beforeFilter() {
		return;
	}
	
	public function afterFilter() {
		return;
	}
	
	public function beforeDisplay() {
		return;
	}
	
	public function afterDisplay() {
		
	}
}
?>