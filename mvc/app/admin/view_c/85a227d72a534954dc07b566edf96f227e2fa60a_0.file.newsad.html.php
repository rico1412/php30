<?php
/* Smarty version 3.1.29, created on 2018-05-11 01:26:15
  from "C:\Users\rico\Documents\php30\mvc\app\admin\view\news\newsad.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5af4f137016cd8_50935009',
  'file_dependency' => 
  array (
    '85a227d72a534954dc07b566edf96f227e2fa60a' => 
    array (
      0 => 'C:\\Users\\rico\\Documents\\php30\\mvc\\app\\admin\\view\\news\\newsad.html',
      1 => 1526001960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af4f137016cd8_50935009 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新增新闻页</title>
</head>
<body>
	<form action="<?php echo @constant('URL');?>
?p=admin&m=news&a=adh" method="post">
		<p>
			新闻标题：<input type="text" name="title">
		</p>

		<p>
			新闻简介：<input type="text" name="intro">
		</p>

		<p>
			新闻内容：<textarea name="content" id="" cols="30" rows="10"></textarea>
		</p>

		<p>
			<input type="submit" value="新增新闻">
		</p>
	</form>

	<a href="<?php echo @constant('URL');?>
/p=admin&m=news&a=showList">返回列表页</a>
</body>
</html><?php }
}
