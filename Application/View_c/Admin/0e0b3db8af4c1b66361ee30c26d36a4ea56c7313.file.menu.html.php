<?php /* Smarty version Smarty-3.1.16, created on 2017-11-01 23:00:55
         compiled from "C:\demo2\Application\View\Admin\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:1714859f9e1a723daa1-68211912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e0b3db8af4c1b66361ee30c26d36a4ea56c7313' => 
    array (
      0 => 'C:\\demo2\\Application\\View\\Admin\\menu.html',
      1 => 1509442908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1714859f9e1a723daa1-68211912',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59f9e1a727fc53_88505495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f9e1a727fc53_88505495')) {function content_59f9e1a727fc53_88505495($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
