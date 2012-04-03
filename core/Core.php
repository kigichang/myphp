<?php
class Core {
	protected static $profile = array();
	
	public static function get($key) {
		if (is_null($key)) {
			return null;
		}
		
		if (isset(self::$profile[$key])) {
			return self::$profile[$key];
		}
		
		$ptr = &self::$profile;
		
		foreach(explode('.', $key) as $tmp) {
			if (isset($ptr[$tmp])) {
				$ptr = &$ptr[$tmp];
			}
			else {
				return null;
			}
		}
		return $ptr;
	}
	
	public static function set($key, $val) {
		$ptr = &self::$profile;
		foreach (explode('.', $key) as $tmp) {
			$ptr = &$ptr[$tmp];
		}
		
		$ptr = $val;
		unset($ptr);
		
		if ($key === 'debug' && function_exists('ini_set')) {
			ini_set('display_errors', $val? 1: 0);
		}
	}
}
load('core.inc');
?>