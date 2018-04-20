<?php /* Smarty version Smarty-3.1.16, created on 2017-10-30 10:25:28
         compiled from "F:\wamp\www\Application\View\Admin\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:1928459f0495b5f8c18-38078862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8225759964fc6c99d2fad6bc799dcd7114d5798' => 
    array (
      0 => 'F:\\wamp\\www\\Application\\View\\Admin\\menu.html',
      1 => 1509330326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1928459f0495b5f8c18-38078862',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59f0495b6445a8_61346566',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f0495b6445a8_61346566')) {function content_59f0495b6445a8_61346566($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
