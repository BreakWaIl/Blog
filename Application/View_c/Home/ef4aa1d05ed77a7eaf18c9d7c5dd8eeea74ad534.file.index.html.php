<?php /* Smarty version Smarty-3.1.16, created on 2017-11-05 22:01:15
         compiled from "C:\phpStudy\PHPTutorial\htdocs\blog\Application\View\Home\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2661659ff19ab5b9c02-63044685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef4aa1d05ed77a7eaf18c9d7c5dd8eeea74ad534' => 
    array (
      0 => 'C:\\phpStudy\\PHPTutorial\\htdocs\\blog\\Application\\View\\Home\\index.html',
      1 => 1509442908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2661659ff19ab5b9c02-63044685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'rows' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59ff19ab613757_09477652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ff19ab613757_09477652')) {function content_59ff19ab613757_09477652($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\phpStudy\\PHPTutorial\\htdocs\\blog\\Framework\\Core\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Language" content="zh-CN" />
	<title>www.myblog.com - Welcome to 我的博客 - Powered by PHP150912</title>
	<link rel="stylesheet" rev="stylesheet" href="/Public/style/default.css" type="text/css" media="all"/>
	<script src="/Public/script/common.js" type="text/javascript"></script>
</head>
<body class="multi index">

<!-- top bar -->
<div id="top">
	<div class="center">
    <div class="menu-left">
    <ul>
     <li><a href="javascript:;" onclick="setHomepage('http://www.myblog.com');">设为首页</a></li>
     <li><a href="javascript:;" onclick="addFavorite('http://www.myblog.com','www.myblog.com - Welcome to 我的博客')">收藏本站</a></li>      
    </ul>
    </div>
    <div class="menu-right">
	    <ul id="info">
		
        <li>欢迎 admin(管理员)！</li>
        <li><a href="/admin/admin.php" target="_blank">管理</a></li>
        <li><a href="index.php?module=Privilege&action=logout">退出</a></li>       
    </ul>
	    </div>
   </div>	
</div>
  
<div id="divAll">
	<div id="divPage">
	<div id="divMiddle">
		<div id="divTop">
			<h1 id="BlogTitle"><a href="http://www.myblog.com">www.myblog.com</a></h1>
			<h3 id="BlogSubTitle">Welcome to 我的博客</h3>
		</div>
		<div id="divNavBar">
			<ul>
				<li id="nvabar-item-index"><a href="">首页</a></li><li id="navbar-page-2"><a href="">留言本</a></li>			</ul>
		</div>

		<div id="divMain">
<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rows']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['art_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value) {
$_smarty_tpl->tpl_vars['rows']->_loop = true;
?>
<div class="post multi">
	<h4 class="post-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rows']->value['art_time'],'%Y-%m-%d %H:%M');?>
</h4>
	<h2 class="post-title"><a href="index.php?p=Home&c=Article&a=article&art_id=<?php echo $_smarty_tpl->tpl_vars['rows']->value['art_id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['rows']->value['art_title'];?>
</a></h2>
	<div class="post-body">
		<?php echo $_smarty_tpl->tpl_vars['rows']->value['art_content'];?>

	</div>
	<h5 class="post-tags"></h5>
	<h6 class="post-footer">
		作者:<?php echo $_smarty_tpl->tpl_vars['rows']->value['user_name'];?>
 | 分类:<?php echo $_smarty_tpl->tpl_vars['rows']->value['cat_name'];?>
 | 阅读:<?php echo $_smarty_tpl->tpl_vars['rows']->value['art_click'];?>
 | 赞:<?php echo $_smarty_tpl->tpl_vars['rows']->value['art_up'];?>
 | 评论:0</h6>
</div>
<?php } ?>
<div class="pagebar" > 
  <span>当前一共有3条记录，当前每页显示8条记录，当前是第1页！</span>&nbsp;&nbsp;		<a href="index.php?module=Index&action=index&page=1">首页</a>&nbsp;&nbsp;
  <a href="index.php?module=Index&action=index&page=1">上一页</a>&nbsp;&nbsp;
  <a href="index.php?module=Index&action=index&page=1">下一页</a>&nbsp;&nbsp;
  <a href="index.php?module=Index&action=index&page=1">末页</a>&nbsp;&nbsp;<a href='index.php?module=Index&action=index&page=1'>1</a>&nbsp;&nbsp;<select onChange="location.href='index.php?module=Index&action=index&page=' + this.value;"><option value='1' selected='selected'>1</option></select>&nbsp;&nbsp;		<form method="GET" action="index.php" style="display:inline">
			<input type="hidden" name="module" value="Index"/>
			<input type="hidden" name="action" value="index"/>
			
			<input type="text" id="page" name="page" value="1"  style="width:20px" onFocus="input_focus(this)" onBlur="input_blur(this)"/>
			<input type="submit" value="提交"/>
		</form>
		<script>
			function input_focus(e){
				if(e.value == e.defaultValue) e.value = '';
			}

			function input_blur(e){
				if(e.value == '') e.value = e.defaultValue;
			}
		</script>
</div>
		</div>
<div id="divSidebar">
 
<dl class="function" id="divSearchPanel">
<dt class="function_t">文章标题搜索</dt><dd class="function_c">

<div>
	<form name="search" method="post" action="index.php">
		<input type="text" name="q" size="11" value=""/> 
		<input type="submit" value="搜索" />
	</form>
</div>


</dd>
</dl> 
<dl class="function" id="divCalendar">
<dt style="display:none;"></dt><dd class="function_c">

<div></div>


</dd>
</dl> 
<dl class="function" id="divCatalog">
<dt class="function_t">文章标签</dt><dd class="function_c">
<ul>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['label_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<li ><a href="index.php?p=Home&c=Article&a=list&key=<?php echo urlencode($_smarty_tpl->tpl_vars['k']->value);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></li>
<?php } ?>		
	</ul>

</dd>
</dl> 		</div>
		<div id="divBottom">
        	<h3 id="BlogCopyRight">
                                            	Copyright © 2008-2028 PHP150912 All Rights Reserved            </h3>
			<h4 id="BlogPowerBy">Powered by <a href="" title="myblog" target="_blank">myblog V1.0 Release 20151116</a></h4>
		</div><div class="clear"></div>
	</div><div class="clear"></div>
	</div><div class="clear"></div>
</div>
</body>
</html>







<?php }} ?>
