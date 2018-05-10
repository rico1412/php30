<?php 

namespace core;
use \Smarty;

class Controller extends Smarty {
	public function __construct () {
		parent::__construct();

		$templatePath = APP_PATH . G('plat') . '/view';
		$this->setTemplateDir($templatePath);

		$compilePath = APP_PATH . G('plat') . '/view_c';
		$this->setCompileDir($compilePath);
	}
}