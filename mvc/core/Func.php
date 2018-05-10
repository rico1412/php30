<?php 
# 获取配置文件参数的方法
function C ($str) {
	$str_arr = explode('.', $str);
	$target = G('config');
	foreach ($str_arr as $value) {
		$target = $target[$value];
	}
	return $target;
}

# 获取全局变量的方法
function G ($str) {
	return $GLOBALS[$str];
}