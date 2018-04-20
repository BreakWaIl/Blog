<?php /* Smarty version Smarty-3.1.16, created on 2017-11-02 14:49:56
         compiled from "C:\wamp\Apache\htdocs\blog\Application\View\Admin\top.html" */ ?>
<?php /*%%SmartyHeaderCode:1734359fac014a3e512-55603723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59235ca5e7975d05424563fa91f13aa1aa968dc0' => 
    array (
      0 => 'C:\\wamp\\Apache\\htdocs\\blog\\Application\\View\\Admin\\top.html',
      1 => 1509442908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1734359fac014a3e512-55603723',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59fac014aad929_89089415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fac014aad929_89089415')) {function content_59fac014aad929_89089415($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" href="/Application/View/Admin/css/pintuer.css">
<link rel="stylesheet" href="/Application/View/Admin/css/admin.css">
</head>

<body>
<div class="lefter">
    <div class="logo"><img src="/Application/View/Admin/images/logo.png" alt="后台管理系统" /></div>
</div>
<div class="righter nav-navicon" id="admin-nav">
    <div class="mainer">
        <div class="admin-navbar">
            <span class="float-right">
            	<a class="button button-little bg-main" href="/" target="_blank">前台首页</a>
                <a class="button button-little bg-yellow" href="index.php?p=Admin&c=Login&a=logout" target="_top">安全退出</a>
            </span>
            <ul class="nav nav-inline admin-nav">
                <li><a href="#" class="icon-file-text" target="mainFrame">后台主页</a></li>
            </ul>
        </div>
        <div class="admin-bread">
            <span>您好，<?php echo $_SESSION['user']['user_name'];?>
，欢迎您的光临。</span>
        </div>
    </div>
</div>
</body>
</html>












<?php }} ?>
