<?php /* Smarty version Smarty-3.1.16, created on 2017-10-28 10:21:10
         compiled from "F:\wamp\www\Application\View\Admin\main.html" */ ?>
<?php /*%%SmartyHeaderCode:1095259f0495b623ab3-28327288%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c03760dcba8fdd36b010099b54d3dd45a4456fc8' => 
    array (
      0 => 'F:\\wamp\\www\\Application\\View\\Admin\\main.html',
      1 => 1509157268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1095259f0495b623ab3-28327288',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59f0495b6746c5_22289110',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f0495b6746c5_22289110')) {function content_59f0495b6746c5_22289110($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\wamp\\www\\Framework\\Core\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>拼图后台管理-后台管理</title>
<link rel="stylesheet" href="/Application/View/Admin/css/pintuer.css">
<link rel="stylesheet" href="/Application/View/Admin/css/admin.css">
</head>

<body>
<div class="admin">
	<div class="line-big">
    	<div class="xm3">
        	<div class="panel border-back">
            	<div class="panel-body text-center">
                	<img src="/Public/Uploads/<?php echo $_SESSION['user']['user_face'];?>
" width="120" class="radius-circle" /><br />
                    <?php echo $_SESSION['user']['user_name'];?>

                </div>
                <div class="panel-foot bg-back border-back">您好，<?php echo $_SESSION['user']['user_name'];?>
，这是您第<?php echo $_SESSION['user']['login_count']+1;?>
次登录，上次登录为<?php echo smarty_modifier_date_format($_SESSION['user']['last_login_time'],'%Y-%m-%d %H:%M:%S');?>
,最后登录的IP是<?php echo long2ip($_SESSION['user']['last_login_ip']);?>
</div>
            </div>
            <br />
        	<div class="panel">
            	<div class="panel-head"><strong>站点统计</strong></div>
                <ul class="list-group">
                  <li><span class="float-right badge bg-main">828</span><span class="icon-file-text"></span> 内容</li>
                </ul>
            </div>
            <br />
        </div>
        <div class="xm9">
          <div class="panel">
       	    <div class="panel-head"><strong>系统信息</strong></div>
                <table class="table">
                	<tr><th colspan="2">服务器信息</th><th colspan="2">系统信息</th></tr>
                    <tr><td width="110" align="right">操作系统：</td><td><?php echo @constant('PHP_OS');?>
</td><td width="90" align="right">系统开发：</td><td><a href="#" target="_blank">传智播客</a></td></tr>
                    <tr><td align="right">Web服务器：</td><td><?php echo $_SERVER['SERVER_SOFTWARE'];?>
</td><td align="right">数据库：</td>
                  <td>MySQL</td></tr>
                    <tr><td align="right">程序语言：</td><td>PHP</td><td align="right">&nbsp;</td><td>&nbsp;</td></tr>
                </table>
            </div>
        </div>
    </div>
    <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">传智播客</a>构建   <a href="http://www.mycodes.net/" target="_blank"></a></p>
    <br />
</div>
</body>
</html>
<?php }} ?>
