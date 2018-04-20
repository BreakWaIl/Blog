<?php /* Smarty version Smarty-3.1.16, created on 2017-10-24 19:53:04
         compiled from "F:\wamp\www\Application\View\Admin\products_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2496159ef29a03762b9-36392321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c492cdaa8c194194f3cef7a49a5415c5530e7b5b' => 
    array (
      0 => 'F:\\wamp\\www\\Application\\View\\Admin\\products_list.html',
      1 => 1508845978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2496159ef29a03762b9-36392321',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'rows' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59ef29a03b5341_57942780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ef29a03b5341_57942780')) {function content_59ef29a03b5341_57942780($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<style type="text/css">
	table{
		width:780px;
		border:solid #000 1px;
		margin:auto;
	}
	td,th{
		border:solid #000 1px;
	}
</style>
</head>

<body>
<table>
	<tr>
		<th>编号</th>
		<th>商品名称</th>
		<th>规格</th>
		<th>价格</th>
		<th>库存量</th>
		<th>删除</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rows']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value) {
$_smarty_tpl->tpl_vars['rows']->_loop = true;
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['proID'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['proname'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['proguige'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['proprice'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['proamount'];?>
</td>
		<td> <input type="button" value="删除" onclick="location.href='index.php?p=Admin&c=Products&a=del&proid=<?php echo $_smarty_tpl->tpl_vars['rows']->value['proID'];?>
'"> </td>
	</tr>
	<?php } ?>
</table>
</body>
</html>



<?php }} ?>
