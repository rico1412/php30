<?php
/* Smarty version 3.1.29, created on 2018-05-11 07:52:49
  from "C:\Users\rico\Documents\php30\mvc\app\admin\view\news\newslist.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5af54bd1af4353_00366672',
  'file_dependency' => 
  array (
    '02b70d975fbe2b117f89a6bac245072d72f481bd' => 
    array (
      0 => 'C:\\Users\\rico\\Documents\\php30\\mvc\\app\\admin\\view\\news\\newslist.html',
      1 => 1526004401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af54bd1af4353_00366672 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\Users\\rico\\Documents\\php30\\mvc\\plugins\\smarty\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新闻列表页</title>
</head>
<body>
	<p>
		<a href="<?php echo @constant('URL');?>
?p=admin&m=news&a=showAd">新增新闻</a>
	</p>

	<p>
		<table border="1" rules="all">
			<tr>
				<th>序号</th>
				<th>ID</th>
				<th>新闻标题</th>
				<th>新闻简介</th>
				<th>发布时间</th>
				<th>操作</th>
			</tr>
			<?php
$_from = $_smarty_tpl->tpl_vars['datas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_f1_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_f1']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f1'] : false;
$__foreach_f1_0_saved_item = isset($_smarty_tpl->tpl_vars['data_val']) ? $_smarty_tpl->tpl_vars['data_val'] : false;
$__foreach_f1_0_saved_key = isset($_smarty_tpl->tpl_vars['data_key']) ? $_smarty_tpl->tpl_vars['data_key'] : false;
$_smarty_tpl->tpl_vars['data_val'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_f1'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['data_key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['data_val']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['data_key']->value => $_smarty_tpl->tpl_vars['data_val']->value) {
$_smarty_tpl->tpl_vars['data_val']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_f1']->value['iteration']++;
$__foreach_f1_0_saved_local_item = $_smarty_tpl->tpl_vars['data_val'];
?>
			<tr>
				<td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_f1']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f1']->value['iteration'] : null);?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['data_val']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['data_val']->value['title'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['data_val']->value['intro'];?>
</td>
				<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data_val']->value['post_date'],'%Y-%m-%d %H:%M:%S');?>
</td>
				<td>
					<a href="<?php echo @constant('URL');?>
?p=admin&m=news&a=showUpd&id=<?php echo $_smarty_tpl->tpl_vars['data_val']->value['id'];?>
">编辑新闻</a>
					<a href="">删除新闻</a>
				</td>
			</tr>
			<?php
$_smarty_tpl->tpl_vars['data_val'] = $__foreach_f1_0_saved_local_item;
}
if ($__foreach_f1_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_f1'] = $__foreach_f1_0_saved;
}
if ($__foreach_f1_0_saved_item) {
$_smarty_tpl->tpl_vars['data_val'] = $__foreach_f1_0_saved_item;
}
if ($__foreach_f1_0_saved_key) {
$_smarty_tpl->tpl_vars['data_key'] = $__foreach_f1_0_saved_key;
}
?>
		</table>
	</p>
</body>
</html><?php }
}
