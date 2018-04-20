<?php /* Smarty version Smarty-3.1.16, created on 2017-11-02 14:49:56
         compiled from "C:\wamp\Apache\htdocs\blog\Application\View\Admin\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:107859fac014d32978-27445993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1a824f706958fe6d3bef3d750c9ff24372572b4' => 
    array (
      0 => 'C:\\wamp\\Apache\\htdocs\\blog\\Application\\View\\Admin\\menu.html',
      1 => 1509442908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107859fac014d32978-27445993',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59fac014d8be06_49538178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fac014d8be06_49538178')) {function content_59fac014d8be06_49538178($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" href="/Application/View/Admin/css/pintuer.css">
<link rel="stylesheet" href="/Application/View/Admin/css/admin.css">
</head>

<body>
<ul class="nav nav-inline admin-nav">
<li class="active">
    <ul>
    <?php if ($_SESSION['user']['is_admin']==1) {?>
        <li><a href="index.php?p=Admin&c=User&a=list" target="mainFrame">用户管理</a></li>
        <li><a href="index.php?p=Admin&c=Category&a=list" target="mainFrame">类别管理</a></li>
    <?php }?>
        <li><a href="index.php?p=Admin&c=User&a=edit" target="mainFrame">个人设置</a></li>
        <li><a href="index.php?p=Admin&c=Article&a=list" target="mainFrame">文章管理</a></li>            
    </ul>
</li>
</ul>
</body>
</html>














<?php }} ?>
