<?php 
# 获取配置文件参数的函数
function C ($str) {
	$str_arr = explode('.', $str);
	$target = G('config');
	foreach ($str_arr as $value) {
		$target = $target[$value];
	}
	return $target;
}

# 获取全局变量的函数
function G ($str) {
	return $GLOBALS[$str];
}

# 获取单例对象的函数
function M ($str) {
	return \core\App::single($str);
}