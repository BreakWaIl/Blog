<?php /* Smarty version Smarty-3.1.16, created on 2017-11-01 23:01:00
         compiled from "C:\demo2\Application\View\Admin\article_add.html" */ ?>
<?php /*%%SmartyHeaderCode:3213359f9e1ac76d522-18480263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aabc4f7199608798e7b3622f6974be4f0dbe9729' => 
    array (
      0 => 'C:\\demo2\\Application\\View\\Admin\\article_add.html',
      1 => 1509442908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3213359f9e1ac76d522-18480263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cat_list' => 0,
    'rows' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59f9e1ac7bdec9_86154332',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f9e1ac7bdec9_86154332')) {function content_59f9e1ac7bdec9_86154332($_smarty_tpl) {?><!DOCTYPE html>
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
    <div class="tab-head"> <strong>文章管理</strong>
      <ul class="tab-nav">
        <li class="active"><a href="#tab-set">添加文章</a></li>
      </ul>
    </div>
    <div class="tab-body"> <br />
      <div class="tab-panel active" id="tab-set">
        <form method="post" class="form-x" action="">
          <div class="form-group">
            <div class="label">
              <label for="art_title">文章标题</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="art_title" name="art_title" size="50" placeholder="请填写你文章标题的名称"/>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="cat_id">所属分类</label>
            </div>
            <div class="field">
              <select class="input" name="cat_id" style="width:20%" id="cat_id">
              	<?php  $_smarty_tpl->tpl_vars['rows'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rows']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cat_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->key => $_smarty_tpl->tpl_vars['rows']->value) {
$_smarty_tpl->tpl_vars['rows']->_loop = true;
?>
                	<option value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['cat_id'];?>
"><?php echo str_repeat('&nbsp;',($_smarty_tpl->tpl_vars['rows']->value['deep']*4));?>
<?php echo $_smarty_tpl->tpl_vars['rows']->value['cat_name'];?>
</option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="art_content">文章内容</label>
            </div>
            <div class="field">
<link rel="stylesheet" href="Public/kindeditor/themes/default/default.css" />
<link rel="stylesheet" href="Public/kindeditor/plugins/code/prettify.css" />
<script charset="utf-8" src="Public/kindeditor/kindeditor.js"></script>
<script charset="utf-8" src="Public/kindeditor/lang/zh_CN.js"></script>
	<script charset="utf-8" src="Public/kindeditor/plugins/code/prettify.js"></script>    
<textarea name="art_content" cols="50" rows="5" class="input" id="art_content" placeholder="内容"></textarea>
<script type="text/javascript">
KindEditor.ready(function(K) {
	K.create('#art_content');
});
</script>

            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="is_top">是否置顶</label>
            </div>
            <div class="field">
              <input type="radio" name="is_top" value="1">是
              <input type="radio" name="is_top" value="0" checked>否
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="desc">是否公开</label>
            </div>
            <div class="field">
              <input type="radio" name="is_public" value="1" checked>是
              <input type="radio" name="is_public" value="0">否
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="art_label">文章标签</label>
            </div>
            <div class="field">
				<input type="text" name="art_label" class="input" id="art_label">
            </div>
          </div>
          <div class="form-button">
            <button class="button bg-main" type="submit">提交</button>
          </div>
        </form>
      </div>
      <div class="tab-panel" id="tab-email">邮件设置</div>
      <div class="tab-panel" id="tab-upload">上传设置</div>
      <div class="tab-panel" id="tab-visit">访问限制</div>
    </div>
  </div>
  <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">传智播客</a>构建</p>
</div>
</body>
</html><?php }} ?>
