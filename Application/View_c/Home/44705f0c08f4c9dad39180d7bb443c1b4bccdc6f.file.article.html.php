<?php /* Smarty version Smarty-3.1.16, created on 2017-10-31 17:34:37
         compiled from "F:\wamp\www\Application\View\Home\article.html" */ ?>
<?php /*%%SmartyHeaderCode:1475559f82bbb3cbd25-27595462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44705f0c08f4c9dad39180d7bb443c1b4bccdc6f' => 
    array (
      0 => 'F:\\wamp\\www\\Application\\View\\Home\\article.html',
      1 => 1509442438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1475559f82bbb3cbd25-27595462',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59f82bbb3fa3a5_11065816',
  'variables' => 
  array (
    'info' => 0,
    'reply_list' => 0,
    'rows' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f82bbb3fa3a5_11065816')) {function content_59f82bbb3fa3a5_11065816($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\wamp\\www\\Framework\\Core\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Language" content="zh-CN" />
	<title>www.myblog.com - 数量测试 - Powered by ITCAST</title>
	<link rel="stylesheet"  href="/Public/style/default.css" type="text/css" media="all"/>
	<script src="/Public/script/common.js" type="text/javascript"></script>
</head>
<body class="single article">

<!-- top bar -->
<div id="top">
	<div class="center">
    <div class="menu-left">
    <ul>
     <li><a href="javascript:;" onclick="setHomepage('');">设为首页</a></li>
     <li><a href="javascript:;" onclick="addFavorite('','www.myblog.com - Welcome to TQBlog!')">收藏本站</a></li>      
    </ul>
    </div>
	 <div class="menu-right">
    <ul id="info">
		
        <li>欢迎 <?php echo $_SESSION['user']['user_name'];?>
</li>
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
			<h1 id="BlogTitle"><a href="">www.myblog.com</a></h1>
			<h3 id="BlogSubTitle">Welcome to TQBlog!</h3>
		</div>
		<div id="divNavBar">
			<ul>
				<li id="nvabar-item-index"><a href="">首页</a></li><li id="navbar-page-2"><a href="?id=2">留言本</a></li><li id="navbar-category-2"><a href="?cate=2">旅游</a></li>			</ul>
		</div>

		<div id="divMain">
<div class="post single">
	<h4 class="post-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['info']->value['art_time'],'%Y-%m-%d %H:%M');?>
</h4>
	<h2 class="post-title"><?php echo $_smarty_tpl->tpl_vars['info']->value['art_title'];?>
</h2>
	<div class="post-body"><?php echo $_smarty_tpl->tpl_vars['info']->value['art_content'];?>
</div>
	<h5 class="post-tags"></h5>
	<h6 class="post-footer">
	阅读:<?php echo $_smarty_tpl->tpl_vars['info']->value['art_click'];?>
 | 评论:| <a href="index.php?p=Home&c=Article&a=up&art_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['art_id'];?>
">赞</a>:<?php echo $_smarty_tpl->tpl_vars['info']->value['art_up'];?>
 	</h6>
</div>

<div>
	<a href="index.php?p=Home&c=Article&a=getArticlePrevOrNext&art_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['art_id'];?>
&prev=1">上一篇</a> &nbsp;
    <a href="index.php?p=Home&c=Article&a=getArticlePrevOrNext&art_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['art_id'];?>
&prev=0">下一篇</a>
</div>


<label id="AjaxCommentBegin"></label>
<!--评论输出-->
<ul class="msg msghead">
	<li class="tbname">评论列表:</li>
</ul>
<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rows']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reply_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value) {
$_smarty_tpl->tpl_vars['rows']->_loop = true;
?>
<dl  style="padding-left:<?php echo $_smarty_tpl->tpl_vars['rows']->value['deep']*40;?>
px">
	<dt><?php echo $_smarty_tpl->tpl_vars['rows']->value['user_name'];?>
 于 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rows']->value['reply_time'],'%Y-%m-%d %H:%M');?>
 发表内容： &nbsp; <a href="#">回复</a></dt>
    <dd><?php echo $_smarty_tpl->tpl_vars['rows']->value['reply_content'];?>
</dd>
</dl>
<?php } ?>

<!--评论翻页条输出-->
<div class="pagebar commentpagebar">
</div>
<label id="AjaxCommentEnd"></label>

<!--评论框-->
<div class="post" id="divCommentPost">
	<p class="posttop"><a name="comment">admin发表评论:</a><a rel="nofollow" id="cancel-reply" href="#divCommentPost" style="display:none;"><small>取消回复</small></a></p>
	<form id="frmSumbit"  method="post" action="index.php?p=Home&c=Reply&a=add" >	
		<p><label for="txaArticle">正文(*)</label></p>
		<p><textarea name="txaArticle" id="txaArticle" class="text" cols="50" rows="4" tabindex="6" ></textarea></p>
		<p><input name="sumbit" type="submit" tabindex="7" value="提交" onclick="return VerifyMessage()" class="button" /></p>

		<!--增加数据-->
		<input type="hidden" name="art_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['art_id'];?>
">
	</form>
	<p class="postbottom">☆欢迎发表您的看法、交流您的观点。</p>
</div>
		</div>
		<div id="divBottom">
        	<h3 id="BlogCopyRight">
                                            	Copyright © 2008-2028 tqtqtq.com All Rights Reserved            </h3>
			<h4 id="BlogPowerBy">Powered by <a href="http://www.tqtqtq.com/" title="TQBlog" target="_blank">TQBlog V2.0 Release 20140101</a></h4>
		</div><div class="clear"></div>
	</div><div class="clear"></div>
	</div><div class="clear"></div>
</div>
</body>
</html><!--86.655ms--><?php }} ?>
