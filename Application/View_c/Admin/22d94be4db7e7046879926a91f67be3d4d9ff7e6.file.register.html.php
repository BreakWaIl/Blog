<?php /* Smarty version Smarty-3.1.16, created on 2017-10-28 09:44:20
         compiled from "F:\wamp\www\Application\View\Admin\register.html" */ ?>
<?php /*%%SmartyHeaderCode:1187959f041319e62f1-07559387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22d94be4db7e7046879926a91f67be3d4d9ff7e6' => 
    array (
      0 => 'F:\\wamp\\www\\Application\\View\\Admin\\register.html',
      1 => 1509154889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1187959f041319e62f1-07559387',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59f04131a0c353_76090901',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f04131a0c353_76090901')) {function content_59f04131a0c353_76090901($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>拼图后台管理-用户注册</title>
    <link rel="stylesheet" href="/Application/View/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/Application/View/Admin/css/admin.css">
</head>

<body>
<div class="container">
    <div class="line">
        <div class="xs6 xm4 xs3-move xm4-move">
            <br /><br />
            <div class="media media-y"> <img src="/Application/View/Admin/images/logo.png" class="radius" alt="后台管理系统" />
            </div>
            <br /><br />
            <form action="" method="post" enctype="multipart/form-data">
            <div class="panel">
                <div class="panel-head"><strong>用户注册</strong></div>
                <div class="panel-body" style="padding:30px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input" name="username" placeholder="请输入用户名" />
                            <span class="icon icon-user"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input" name="password" placeholder="请输入密码" />
                            <span class="icon icon-key"></span>
                        </div>
                    </div>
                   <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="file" class="input" name="face" placeholder="请输入头像">
                            <span class="icon icon-camera"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field">
                            <input type="text" class="input" name="passcode" placeholder="填写右侧的验证码" />
                            <img src="/Application/View/Admin/images/passcode.jpg" width="80" height="32" class="passcode" />
                        </div>
                	</div>
                </div>
                <div class="panel-foot text-center">
                <input type="submit" class="button button-block bg-main text-big"  style="float:left; margin-right:10px;" value="用户注册" />
                <input type="button"  class="button button-block bg-main text-big" value="返回" onClick="location.href='index.php?p=Admin&c=Login&a=login'" />
                </div>
            </div>
            </form>
            <div class="text-right text-small text-gray padding-top">基于传智播客构建</div>
        </div>
    </div>
</div>

</body>
</html><?php }} ?>
