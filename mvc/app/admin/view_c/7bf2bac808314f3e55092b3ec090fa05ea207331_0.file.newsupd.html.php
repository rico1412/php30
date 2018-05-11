<?php
/* Smarty version 3.1.29, created on 2018-05-11 02:21:33
  from "C:\Users\rico\Documents\php30\mvc\app\admin\view\news\newsupd.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5af4fe2d91cd84_61702808',
  'file_dependency' => 
  array (
    '7bf2bac808314f3e55092b3ec090fa05ea207331' => 
    array (
      0 => 'C:\\Users\\rico\\Documents\\php30\\mvc\\app\\admin\\view\\news\\newsupd.html',
      1 => 1526005089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af4fe2d91cd84_61702808 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>编辑新闻页</title>
</head>
<body>
	<form action="<?php echo @constant('URL');?>
?p=admin&m=news&a=updh&id=<?php echo $_smarty_tpl->tpl_vars['datas']->value['id'];?>
" method="post">
		<p>
			新闻标题：<input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['datas']->value['title'];?>
">
		</p>

		<p>
			新闻简介：<input type="text" name="intro" value="<?php echo $_smarty_tpl->tpl_vars['datas']->value['intro'];?>
">
		</p>

		<p>
			新闻内容：<textarea name="content" id="" cols="30" rows="10"><?php echo $_smarty_tpl->tpl_vars['datas']->value['content'];?>
</textarea>
		</p>

		<p>
			<input type="submit" value="编辑新闻">
		</p>
	</form>

	<a href="<?php echo @constant('URL');?>
/p=admin&m=news&a=showList">返回列表页</a>
</body>
</html><?php }
}
