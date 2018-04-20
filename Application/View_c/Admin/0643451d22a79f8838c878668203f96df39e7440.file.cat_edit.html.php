<?php /* Smarty version Smarty-3.1.16, created on 2017-10-28 16:54:01
         compiled from "F:\wamp\www\Application\View\Admin\cat_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2263259f443e7e12c81-77648075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0643451d22a79f8838c878668203f96df39e7440' => 
    array (
      0 => 'F:\\wamp\\www\\Application\\View\\Admin\\cat_edit.html',
      1 => 1509180800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2263259f443e7e12c81-77648075',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59f443e7e54576_75824476',
  'variables' => 
  array (
    'info' => 0,
    'cat_list' => 0,
    'rows' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f443e7e54576_75824476')) {function content_59f443e7e54576_75824476($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title>拼图后台管理-后台管理</title>
<link rel="stylesheet" href="/Application/View/Admin/css/pintuer.css">
<link rel="stylesheet" href="/Application/View/Admin/css/admin.css">
</head>

<body>
<div class="admin">
  <div class="tab">
    <div class="tab-head"> <strong>分类管理</strong>
      <ul class="tab-nav">
        <li class="active"><a href="#tab-set">修改分类</a></li>
      </ul>
    </div>
    <div class="tab-body"> <br />
      <div class="tab-panel active" id="tab-set">
        <form method="post" class="form-x" action="">
          <div class="form-group">
            <div class="label">
              <label for="cat_name">分类名称</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="cat_name" name="cat_name" size="50" placeholder="分类名称" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['cat_name'];?>
" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="parentid">所属分类</label>
            </div>
            <div class="field">
              <select class="input" name="parentid" style="width:20%" id="parentid">
              <option value="0">最顶层分类</option>
              <?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rows']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value) {
$_smarty_tpl->tpl_vars['rows']->_loop = true;
?>
              <?php if ($_smarty_tpl->tpl_vars['rows']->value['cat_id']==$_smarty_tpl->tpl_vars['info']->value['parent_id']) {?>
              	<option value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['cat_id'];?>
" selected><?php echo str_repeat('&nbsp;',($_smarty_tpl->tpl_vars['rows']->value['deep']*4));?>
<?php echo $_smarty_tpl->tpl_vars['rows']->value['cat_name'];?>
</option>
                <?php } else { ?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['cat_id'];?>
"><?php echo str_repeat('&nbsp;',($_smarty_tpl->tpl_vars['rows']->value['deep']*4));?>
<?php echo $_smarty_tpl->tpl_vars['rows']->value['cat_name'];?>
</option>
              <?php }?>
              <?php } ?>
              </select>
            </div>          </div>
          <div class="form-group">
            <div class="label">              <label for="sort_order">排序</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="sort_order" name="sort_order" size="50" placeholder="50" data-validate="required:请填写分类排序" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sort_order'];?>
" />
            </div>
          </div>
          <div class="form-button">
            <button class="button bg-main" type="submit">提交</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">传智播客</a>构建</p>
</div>
</body>
</html><?php }} ?>
