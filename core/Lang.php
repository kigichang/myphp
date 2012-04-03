<?php 
class FileNotFoundException extends Exception {
	public function __construct($file) {
		parent::__construct('File ['.$file.'] Not Found');
	}
}

class ClassNotFoundException extends Exception {
	public function __construct($class) {
		parent::__construct('Class ['.$class.'] Not Found');
	}
}


class HttpException extends Exception {
	public function __construct($message, $code) {
		parent::__construct($message, $code);
	}
}


function __require($file, $throw = true) {
	if (file_exists($file)) {
		require_once($file);
		return true;
	}
	else if ($throw) {
		throw new FileNotFoundException($file);
	}
	return false;
}

function load($inc_file, $path='conf') {
	return __require(APP.DS.$path.DS.$inc_file);
}

function _url($uri) {
	
}
?>