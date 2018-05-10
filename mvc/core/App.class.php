<?php 

namespace core;

class App {

	public static function aa(){
		echo "123";
	}

	private $obj = [];

	public static function single ($className) {
		if (!isset($obj[$className])) {
			$obj[$className] = new $className;
		}
		return $obj[$className];
	}

	public static function autoL ($className) {
		$className = basename($className);

		if (substr($className, -10) === 'Controller') {
			$oriPath = APP_PATH . G('plat') . "/controller/";
			$oriName = "{$className}.class.php";
		} elseif (substr($className, -5) === 'Model') {
			$oriPath = APP_PATH . "model/";
			$oriName = "{$className}.class.php";
		}

		include $oriPath . $oriName;
	}

	public static function run () {
		$GLOBALS['action'] = $action = isset($_GET['a']) ? $_GET['a'] : C('web.a');
		$GLOBALS['module'] = $module = isset($_GET['m']) ? ucfirst($_GET['m']) : C('web.m');
		$GLOBALS['plat'] = $plat = isset($_GET['p']) ? $_GET['p'] : C('web.p');

		$className = "\\{$plat}\\controller\\{$module}Controller";
		$controller = self::single($className);
		$controller->$action();
	}
}