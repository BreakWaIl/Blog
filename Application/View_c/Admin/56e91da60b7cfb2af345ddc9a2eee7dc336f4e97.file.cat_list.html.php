<?php /* Smarty version Smarty-3.1.16, created on 2017-11-02 14:59:39
         compiled from "C:\wamp\Apache\htdocs\blog\Application\View\Admin\cat_list.html" */ ?>
<?php /*%%SmartyHeaderCode:1895759fac25bb6c284-19909839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56e91da60b7cfb2af345ddc9a2eee7dc336f4e97' => 
    array (
      0 => 'C:\\wamp\\Apache\\htdocs\\blog\\Application\\View\\Admin\\cat_list.html',
      1 => 1509442908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1895759fac25bb6c284-19909839',
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
  'unifunc' => 'content_59fac25bc1cbb7_92619660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fac25bc1cbb7_92619660')) {function content_59fac25bc1cbb7_92619660($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>拼图后台管理-后台管理</title>
    <link rel="stylesheet" href="/Application/View/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/Application/View/Admin/css/admin.css">
</head>

<body>
<div class="admin">
	<form method="post">
    <div class="panel admin-panel">
    	<div class="panel-head"><strong>类别列表</strong></div>
        <div class="padding border-bottom">
          <input type="button" class="button button-small border-green" value="添加类别" onClick="location.href='index.php?p=Admin&c=Category&a=add'" />
        </div>
        <table class="table table-hover">
        	<tr>
        	  <th width="45">编号</th><th width="*">名称</th><th width="100">操作</th></tr>
<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rows']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value) {
$_smarty_tpl->tpl_vars['rows']->_loop = true;
?>
<tr>
<td><?php echo $_smarty_tpl->tpl_vars['rows']->value['cat_id'];?>
</td><td style="padding-left:<?php echo $_smarty_tpl->tpl_vars['rows']->value['deep']*40;?>
px"><?php echo $_smarty_tpl->tpl_vars['rows']->value['cat_name'];?>
</td><td><a class="button border-blue button-little" href="index.php?p=Admin&c=Category&a=edit&cat_id=<?php echo $_smarty_tpl->tpl_vars['rows']->value['cat_id'];?>
">修改</a> <a class="button border-yellow button-little" href="index.php?p=Admin&c=Category&a=del&cat_id=<?php echo $_smarty_tpl->tpl_vars['rows']->value['cat_id'];?>
" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a></td></tr>
<?php } ?>
        </table>
    </div>
    </form>
    <br />
    <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">传智播客</a>构建</p>
</div>
</body>
</html>










<?php }} ?>
