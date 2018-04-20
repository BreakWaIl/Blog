<?php /* Smarty version Smarty-3.1.16, created on 2017-11-02 14:49:39
         compiled from "C:\wamp\Apache\htdocs\blog\Application\View\Admin\login.html" */ ?>
<?php /*%%SmartyHeaderCode:2504159fac003e66223-48857278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80dd35092b65596b65549d13f4bdf5193821fa5b' => 
    array (
      0 => 'C:\\wamp\\Apache\\htdocs\\blog\\Application\\View\\Admin\\login.html',
      1 => 1509442908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2504159fac003e66223-48857278',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59fac003edeee3_34793680',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fac003edeee3_34793680')) {function content_59fac003edeee3_34793680($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>拼图后台管理-用户登录</title>
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
            <form action="" method="post">
            <div class="panel">
                <div class="panel-head"><strong>登录拼图后台管理系统</strong></div>
                <div class="panel-body" style="padding:30px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input" name="username" placeholder="登录账号"  />
                            <span class="icon icon-user"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input" name="password" placeholder="登录密码" />
                            <span class="icon icon-key"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field">
                            <input type="text" class="input" name="passcode" placeholder="填写右侧的验证码" />
                            <img src='index.php?p=Admin&c=Login&a=verify' width="80" height="32" class="passcode" onClick="this.src='index.php?p=Admin&c=Login&a=verify&'+Math.random()"  style="cursor:pointer"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field">
                        	<input type="checkbox" name="remember" value="1">7天之内免登陆
                        </div>
                    </div>
                </div>
                <div class="panel-foot text-center">
                <input type="submit" class="button button-block bg-main text-big"  style="float:left; margin-right:10px;" value="立即登录后台" />
                <input type="button" value="用户注册"  class="button button-block bg-main text-big" onClick="location.href='index.php?p=Admin&c=Login&a=register'" />
                </div>
            </div>
            </form>
            <div class="text-right text-small text-gray padding-top">基于传智播客构建</div>
        </div>
    </div>
</div>

</body>
</html><?php }} ?>
