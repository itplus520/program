<?php /* Smarty version Smarty-3.1-DEV, created on 2017-06-18 17:32:18
         compiled from "D:\wamp\www\blog\Application\View\Admin\Register\register.html" */ ?>
<?php /*%%SmartyHeaderCode:8746594648a2106610-93674944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f4e08d69d98faab7dfad887a443ab64a777d682' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\Application\\View\\Admin\\Register\\register.html',
      1 => 1497517416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8746594648a2106610-93674944',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_594648a21509a8_24060033',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594648a21509a8_24060033')) {function content_594648a21509a8_24060033($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./Public/admin/css/ch-ui.admin.css">
	<link rel="stylesheet" href="./Public/admin/font/css/font-awesome.min.css">
</head>
<body style="background:#F3F3F4;">
	<div class="login_box">
		<h1>Blog</h1>
		<h2>用户注册</h2>
		<div class="form">
			<form action="index.php?p=admin&c=register&a=register" method="post" enctype="multipart/form-data">
				<ul>
					<li>
					<input type="text" name="username" class="text"/>
						<span><i class="fa fa-user"></i></span>
					</li>
					<li>
						<input type="password" name="password" class="text"/>
						<span><i class="fa fa-lock"></i></span>
					</li>
					<li>
						<input type="file" class="text" name="avatar" title="请选择用户头像"/>
						<span><i class="fa fa-check-square-o"></i></span>
					</li>
					<li>
						<input type="submit" value="立即注册"/>
					</li>
				</ul>
			</form>
			<p><a href="index.php?p=admin&c=login&a=login" >已有账号？返回立即登录</a></p>
			<p>
				&copy; 2016 Powered by itcast<br />
			</p>
		</div>
	</div>
</body>
</html><?php }} ?>
