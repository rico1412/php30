<?php 

namespace core;

class App {

	private $obj = [];

	public static function single ($className, $params=NULL) {
		if (!isset($obj[$className])) {
			if (empty($params)) {
				$obj[$className] = new $className;
			} else {
				$obj[$className] = new $className($params);
			}
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