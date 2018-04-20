<?php /* Smarty version Smarty-3.1.16, created on 2017-11-01 23:00:55
         compiled from "C:\demo2\Application\View\Admin\top.html" */ ?>
<?php /*%%SmartyHeaderCode:798459f9e1a70274c3-15342699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '152dfbb0e1894d710ca3985981b01ca766f2033f' => 
    array (
      0 => 'C:\\demo2\\Application\\View\\Admin\\top.html',
      1 => 1509442908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '798459f9e1a70274c3-15342699',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59f9e1a7071126_62561228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f9e1a7071126_62561228')) {function content_59f9e1a7071126_62561228($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
