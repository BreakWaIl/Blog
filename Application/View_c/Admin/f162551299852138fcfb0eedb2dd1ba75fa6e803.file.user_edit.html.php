<?php /* Smarty version Smarty-3.1.16, created on 2017-10-28 11:25:26
         compiled from "F:\wamp\www\Application\View\Admin\user_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1274359f3f80f7b2892-45319715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f162551299852138fcfb0eedb2dd1ba75fa6e803' => 
    array (
      0 => 'F:\\wamp\\www\\Application\\View\\Admin\\user_edit.html',
      1 => 1509161124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1274359f3f80f7b2892-45319715',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59f3f80f7dbea9_58166502',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f3f80f7dbea9_58166502')) {function content_59f3f80f7dbea9_58166502($_smarty_tpl) {?><!DOCTYPE html>
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
    <div class="tab-head"> <strong>用户管理</strong>
      <ul class="tab-nav">
        <li class="active"><a href="#tab-set">修改用户信息</a></li>
      </ul>
    </div>
    <div class="tab-body"> <br />
      <div class="tab-panel active" id="tab-set">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="panel" style="width: 500px;">
                <div class="panel-head"><strong>用户信息</strong></div>
                <div class="panel-body" style="padding:30px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <strong>用户名：<?php echo $_smarty_tpl->tpl_vars['info']->value['user_name'];?>
</strong>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            新密码：<input type="text" class="input" name="password" />
                            <span class="icon icon-key"></span>
                        </div>
                    </div>
                   <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="file" class="input" name="face" >
                            <span class="icon icon-camera"></span>
                        </div>
                    </div>
                </div>
                <div class="panel-foot text-center">
                    <input type="submit" class="button button-block bg-main text-big" style="margin: auto"  value="用户修改" />
                </div>
            </div>
            </form>
      </div>
    </div>
  </div>
  <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">传智播客</a>构建</p>
</div>
</body>
</html><?php }} ?>
