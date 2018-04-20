<?php /* Smarty version Smarty-3.1.16, created on 2017-10-31 10:42:12
         compiled from "F:\wamp\www\Application\View\Admin\article_list.html" */ ?>
<?php /*%%SmartyHeaderCode:1810959f68d991c8906-36452766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf75dffc43c792e4661941087ee8d5d036610554' => 
    array (
      0 => 'F:\\wamp\\www\\Application\\View\\Admin\\article_list.html',
      1 => 1509417730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1810959f68d991c8906-36452766',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59f68d992079b8_32898619',
  'variables' => 
  array (
    'cat_list' => 0,
    'rows' => 0,
    'list' => 0,
    'page_str' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f68d992079b8_32898619')) {function content_59f68d992079b8_32898619($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\wamp\\www\\Framework\\Core\\Smarty\\plugins\\modifier.date_format.php';
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
<form method="post" action="">
<div class="panel admin-panel">
<div class="panel-head"><strong>文章检索</strong>&nbsp;&nbsp;&nbsp;&nbsp;
	类别：
    <select name="cat_id">
    	<option value="">请选择类别</option>
    	<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rows']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value) {
$_smarty_tpl->tpl_vars['rows']->_loop = true;
?>
        	<option value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['cat_id'];?>
" <?php echo isset($_POST['cat_id'])&&$_POST['cat_id']==$_smarty_tpl->tpl_vars['rows']->value['cat_id'] ? 'selected' : '';?>
><?php echo str_repeat('&nbsp;',($_smarty_tpl->tpl_vars['rows']->value['deep']*4));?>
<?php echo $_smarty_tpl->tpl_vars['rows']->value['cat_name'];?>
</option>
        <?php } ?>
    </select>
    标题：<input type="text" name="title" value="<?php echo isset($_POST['title']) ? $_POST['title'] : '';?>
">
    内容：<input type="text" name="content" value="<?php echo isset($_POST['content']) ? $_POST['content'] : '';?>
">
    是否公开：<select name="is_public">
    	<option value="">不限</option>
        <option value="1" <?php echo isset($_POST['is_public'])&&$_POST['is_public']==='1' ? 'selected' : '';?>
>是</option>
        <option value="0" <?php echo isset($_POST['is_public'])&&$_POST['is_public']==='0' ? 'selected' : '';?>
>否</option>
        </select>
    是否置顶：<select name="is_top">
    	<option value="">不限</option>
        <option value="1" <?php echo isset($_POST['is_top'])&&$_POST['is_top']==='1' ? 'selected' : '';?>
>是</option>
        <option value="0" <?php echo isset($_POST['is_top'])&&$_POST['is_top']==='0' ? 'selected' : '';?>
>否</option></select>
    <input type="submit" name="submit" value="搜索">
</div>
</div>
</form>
    <div class="panel admin-panel">
    	<div class="panel-head"><strong>内容列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="id" value="全选" />
            <input type="button" class="button button-small border-green" value="添加文章" onClick="location.href='index.php?p=Admin&c=Article&a=add'"/>
            <input type="button" class="button button-small border-yellow" id="btn_delete" value="批量删除" />
            <input type="button" class="button button-small border-blue" value="回收站" />
        </div>
<script type="text/javascript">
window.onload=function(){
	document.getElementById('btn_delete').onclick=function(){
		var art_id_checkbox=document.getElementsByName('art_id');	//获取所有的复选框
		var ids=[];													//保存选中的id
		for(var i=0,n=art_id_checkbox.length;i<n;i++){
			if(art_id_checkbox[i].checked){							//如果复选框选中
				ids.push(art_id_checkbox[i].value);					//将复选框的id存放到数组中
			}
		}
		ids=ids.join();	//将id连接成逗号分隔的字符串
		if(ids=='')
			return;
		location.href='index.php?p=Admin&c=Article&a=del&art_id='+ids;
	}
}
</script>
        <table class="table table-hover">
            <tr><th width="45">选择</th><th width="120">分类</th><th width="*">名称</th><th>置顶</th><th>公开</th><th width='100'>评论数</th><th width="200">时间</th><th width="200">操作</th></tr>
<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rows']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value) {
$_smarty_tpl->tpl_vars['rows']->_loop = true;
?>
<tr>
    <td><input type="checkbox" name="art_id" value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['art_id'];?>
" /></td>
    <td><?php echo $_smarty_tpl->tpl_vars['rows']->value['cat_name'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['rows']->value['art_title'];?>
</td>
    <td><img src="/Application/View/Admin/images/<?php echo $_smarty_tpl->tpl_vars['rows']->value['is_top']==1 ? 'yes' : 'no';?>
.gif"></td>
    <td><img src="/Application/View/Admin/images/<?php echo $_smarty_tpl->tpl_vars['rows']->value['is_public']==1 ? 'yes' : 'no';?>
.gif"></td>
    <td><?php echo $_smarty_tpl->tpl_vars['rows']->value['art_content'];?>
</td>
    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rows']->value['art_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
    <td>
        <a class="button border-blue button-little" href="index.php?p=Admin&c=Article&a=edit&art_id=<?php echo $_smarty_tpl->tpl_vars['rows']->value['art_id'];?>
">修改</a>
        <a class="button border-yellow button-little" href="index.php?p=Admin&c=Article&a=del&art_id=<?php echo $_smarty_tpl->tpl_vars['rows']->value['art_id'];?>
" onclick="return confirm('确认删除?')">删除</a>
<?php if ($_smarty_tpl->tpl_vars['rows']->value['is_top']==1) {?>
        <a class="button border-blue button-little" href="index.php?p=Admin&c=Article&a=setTop&art_id=<?php echo $_smarty_tpl->tpl_vars['rows']->value['art_id'];?>
&is_top=0">取消置顶</a>
<?php } else { ?>
		<a class="button border-blue button-little" href="index.php?p=Admin&c=Article&a=setTop&art_id=<?php echo $_smarty_tpl->tpl_vars['rows']->value['art_id'];?>
&is_top=1">置顶</a>
<?php }?>
    </td>
</tr>
<?php } ?>
        </table>
        <?php echo $_smarty_tpl->tpl_vars['page_str']->value;?>

    </div>
    <br />
    <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">传智播客</a>构建</p>
</div>
</body>
</html><?php }} ?>
