<?php /* Smarty version Smarty-3.1.16, created on 2017-11-02 14:50:23
         compiled from "C:\wamp\Apache\htdocs\blog\Application\View\Admin\article_rb.html" */ ?>
<?php /*%%SmartyHeaderCode:1962059fac02f4d9eb2-72456862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccf4b12836ff6af808277ebfed3f8376f1dd999f' => 
    array (
      0 => 'C:\\wamp\\Apache\\htdocs\\blog\\Application\\View\\Admin\\article_rb.html',
      1 => 1509593731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1962059fac02f4d9eb2-72456862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cat_list' => 0,
    'rows' => 0,
    'list' => 0,
    'page_str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59fac02f593a62_31326239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fac02f593a62_31326239')) {function content_59fac02f593a62_31326239($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\Apache\\htdocs\\blog\\Framework\\Core\\Smarty\\plugins\\modifier.date_format.php';
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
    <input type="submit"  value="搜索">
</div>
</div>
</form>
    <div class="panel admin-panel">
    	<div class="panel-head"><strong>内容列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="id"  onclick="checkAll(form1)"  value="全选" />
            <input type="button" class="button button-small checkall" name="checkall" checkfor="id" onclick="switchAll(form1)" value="反选" />
            <input type="button" class="button button-small checkall" name="checkall" checkfor="id" onclick="uncheckAll(form1)" value="选" />
            <input type="button" class="button button-small border-green" id="btn_recover" value="批量还原"/>
            <input type="button" class="button button-small border-yellow" id="btn_delete" value="批量删除"/>
            <input type="button" class="button button-small border-blue" id="btn_back" value="返回"/>
        </div>
<script type="text/javascript">
    //javascript全选、反选、选：

    function checkAll(form1){
        var elements=form1.getElementsByTagName('input');
        for(var i=0;i<elements.length;i++){
            if(elements[i].type=="checkbox"){
                if(elements[i].checked==false){
                    elements[i].checked=true;
                }
            }
        }
    }

    function switchAll(form1){
        var elements=form1.getElementsByTagName('input');
        for(var i=0;i<elements.length;i++){
            if(elements[i].type=="checkbox"){
                if(elements[i].checked==false){
                    elements[i].checked=true;
                }else if(elements[i].checked==true){
                    elements[i].checked=false;
                }
            }
        }
    }

    function uncheckAll(form1){
        var elements=form1.getElementsByTagName('input');
        for(var i=0;i<elements.length;i++){
            if(elements[i].type=="checkbox"){
                if(elements[i].checked==true){
                    elements[i].checked=false;
                }
            }
        }
    }

    //还原按钮脚本
    window.onload=function(){
        document.getElementById('btn_recover').onclick=function(){
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
            location.href='index.php?p=Admin&c=Article&a=rcRb&art_id='+ids;
        }
        //删除按钮脚本
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
            location.href='index.php?p=Admin&c=Article&a=delRb&art_id='+ids;
        }
        //返回按钮脚本
        document.getElementById('btn_back').onclick=function(){
            location.href='index.php?p=Admin&c=Article&a=list';         //跳转回文章管理页面
        }
    }
</script>

<form action="?" method="post" name="form1">
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
        <a class="button border-blue button-little" href="index.php?p=Admin&c=Article&a=rcRb&art_id=<?php echo $_smarty_tpl->tpl_vars['rows']->value['art_id'];?>
" onclick="return confirm('确认还原?')">还原</a>
        <a class="button border-yellow button-little" href="index.php?p=Admin&c=Article&a=delRb&art_id=<?php echo $_smarty_tpl->tpl_vars['rows']->value['art_id'];?>
" onclick="return confirm('确认删除?')">删除</a>
    </td>
</tr>
<?php } ?>
        </table>
</form>
        <?php echo $_smarty_tpl->tpl_vars['page_str']->value;?>

    </div>
    <br />
    <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">传智播客</a>构建</p>
</div>
</body>
</html><?php }} ?>
