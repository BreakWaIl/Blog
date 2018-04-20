<?php /* Smarty version Smarty-3.1.16, created on 2017-11-02 20:28:32
         compiled from "C:\wamp\Apache\htdocs\blog\Application\View\Admin\user_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2174059fb0f706434d4-99891692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30a724cd794f0a762d52e763d48df36732bbb134' => 
    array (
      0 => 'C:\\wamp\\Apache\\htdocs\\blog\\Application\\View\\Admin\\user_list.html',
      1 => 1509442908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2174059fb0f706434d4-99891692',
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
  'unifunc' => 'content_59fb0f706c0cc7_64836217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fb0f706c0cc7_64836217')) {function content_59fb0f706c0cc7_64836217($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\Apache\\htdocs\\blog\\Framework\\Core\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
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
    	<div class="panel-head"><strong>用户信息</strong></div>
    	<table class="table table-hover">
        	<tr>
        	  <th width="45">编号</th>
        	  <th width="*">姓名</th>
        	  <th width="*">登陆次数</th>
        	  <th width="*">最后登陆时间</th>
        	  <th width="*">最后登陆IP</th><th width="100">操作</th></tr>
            <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rows']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value) {
$_smarty_tpl->tpl_vars['rows']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['rows']->value['is_admin']!=1) {?>
            <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['rows']->value['user_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['rows']->value['user_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['rows']->value['login_count'];?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rows']->value['last_login_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
            <td><?php echo long2ip($_smarty_tpl->tpl_vars['rows']->value['last_login_ip']);?>
</td>
            <td><a class="button border-yellow button-little" href="index.php?p=Admin&c=User&a=del&id=<?php echo $_smarty_tpl->tpl_vars['rows']->value['user_id'];?>
" onclick="return confirm('确认删除?')">删除</a></td></tr>
            <?php }?>
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
