<?php /* Smarty version Smarty-3.1-DEV, created on 2017-06-18 14:53:15
         compiled from "D:\wamp\www\blog\Application\View\Admin\Login\login.html" */ ?>
<?php /*%%SmartyHeaderCode:99505946235b0729b8-70964142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75f6b3849753ff9ca33bc670a35d27484d73b9cb' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\Application\\View\\Admin\\Login\\login.html',
      1 => 1497616970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99505946235b0729b8-70964142',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5946235b0c88c4_81666771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5946235b0c88c4_81666771')) {function content_5946235b0c88c4_81666771($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./Public/admin/css/ch-ui.admin.css">
	<link rel="stylesheet" href="./Public/admin/font/css/font-awesome.min.css">
</head>
<body style="background:#F3F3F4;">
	<div class="login_box">
		<h1 id="blog">Blog</h1>
		<h2>欢迎使用博客管理平台</h2>
		<div class="form">
			<form action="./index.php?p=admin&c=login&a=login" method="post">
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
						<input type="text" class="code" name="captcha"/>
						<span><i class="fa fa-check-square-o"></i></span>
						<img id='img'src="index.php?p=admin&c=login&a=captcha&t=" alt="验证码加载错误" title="看不清楚,点击换一张" onclick="this.src+=Math.random()">
						<a href="javascript:;" onclick="document.getElementById('img').src+=Math.random()">看不清楚,点击换一张</a>
					</li>
					<li>
						<input type="submit" value="立即登录"/>
					</li>
				</ul>
			</form>
			<p><a href="./index.php?p=admin&c=register&a=register" >用户注册</a></p>
			<p>
				&copy; 2016 Powered by itcast<br />

			</p>
		</div>
	</div>
	<script>
		var content=document.getElementById('blog');
		window.onload=function(){
			setInterval(function(){
				var red=num();
				var green=num();
				var blue=num();
				content.style.color='rgb('+red+','+green+','+blue+')';
			},200);
		}
		function num(){
			return Math.floor(Math.random()*255);
		}
	</script>
</body>
</html><?php }} ?>
