<?php /* Smarty version Smarty-3.1-DEV, created on 2017-06-18 14:52:46
         compiled from "D:\wamp\www\blog\Application\View\Home\Login\login.html" */ ?>
<?php /*%%SmartyHeaderCode:284795946233ec532d8-50987036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc75b56ed791f36e41867e8c97d578f7614bad4b' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\Application\\View\\Home\\Login\\login.html',
      1 => 1497706069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284795946233ec532d8-50987036',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5946233eca14e0_71084210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5946233eca14e0_71084210')) {function content_5946233eca14e0_71084210($_smarty_tpl) {?><!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="./Public/home/style/module.css">
	<script src="./Public/home/script/common.js" type="text/javascript"></script>
	<script src="./Public/home/script/md5.js" type="text/javascript"></script>
	<title>www.myblog.com - 登录 - Powered by myblog</title>
</head>
<body>

<!-- top bar -->
<div id="top">
	<div class="center">
    <div class="menu-left">
    <ul>
     <li><a href="../">返回首页</a></li>    
    </ul>
    </div>
    <div class="menu-right">
    <ul>
     	<li></li> 
    </ul>
    </div>
   </div>	
</div>
<div class="bg">
<div id="wrapper">
  <div class="logo"><a href="../" title="www.myblog.com"></a></div>
  <div class="login">
    <form method="post" action="index.php?p=home&c=login&a=login"><!--如果action没有数据，代表提交给当前请求的URL脚本：admin.php-->
    <dl>
      <dt></dt>
      <dd class="username"><label for="edtUserName">用户名:</label><input type="text" id="edtUserName" name="username" size="20" value="" tabindex="1" /></dd>
      <dd class="password"><label for="edtPassWord">密码:</label><input type="password" id="edtPassWord" name="password" size="20" tabindex="2" /></dd>
    </dl>
    <dl>
      <dt></dt>
	  <dd class="checkbox"><input type="checkbox" name="chkRemember" id="chkRemember"  tabindex="3" /><label for="chkRemember">保持登录</label></dd>
      <dd class="submit"><input id="btnPost" name="btnPost" type="submit" value="登录" class="button" tabindex="4"/></dd>
    </dl>
    </form>
  </div>
</div>
</div>
</body>
</html>
<!--82.403ms--><?php }} ?>
