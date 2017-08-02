<?php /* Smarty version Smarty-3.1-DEV, created on 2017-06-18 14:53:02
         compiled from "D:\wamp\www\blog\Application\View\Admin\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:167365946234e7074c7-85752783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fb7545e00f79e74df54e7cdd3b75863009895a8' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\Application\\View\\Admin\\Index\\index.html',
      1 => 1497768765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167365946234e7074c7-85752783',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5946234e895c22_72591635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5946234e895c22_72591635')) {function content_5946234e895c22_72591635($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./Public/admin/css/ch-ui.admin.css">
	<link rel="stylesheet" href="./Public/admin/font/css/font-awesome.min.css">
	<script type="text/javascript" src="./Public/admin/js/jquery.js"></script>
    <script type="text/javascript" src="./Public/admin/js/ch-ui.admin.js"></script>
</head>
<body>
	<!--头部 开始-->
	<div class="top_box">
		<div class="top_left">
			<div class="logo">博客管理后台</div>
			<ul>
				<li><a href="index.php?p=admin&c=index&a=index" class="active">首页</a></li>
				<li><a href="index.php?p=admin&c=user&a=list" target="main">管理页</a></li>
			</ul>
		</div>
		<div class="top_right">
			<ul>
				<?php if ($_SESSION['userinfo']['username']=='admin') {?>
				<li>管理员：<?php echo $_SESSION['userinfo']['username'];?>
</li>
				<?php } else { ?>
				<li>游客：<?php echo $_SESSION['userinfo']['username'];?>
</li>
				<?php }?>
				<li><a href="index.php?p=admin&c=login&a=loginout">退出</a></li>
			</ul>
		</div>
	</div>
	<!--头部 结束-->

	<!--左侧导航 开始-->
	<div class="menu_box">
		<ul>
            <li>
            	<h3><i class="fa fa-fw fa-clipboard"></i>文章管理</h3>
                <ul class="sub_menu">
                    <li><a href="index.php?p=admin&c=article&a=list" target="main"><i class="fa fa-fw fa-list-ul"></i>文章列表</a></li>
                    <li><a href="index.php?p=admin&c=article&a=add" target="main"><i class="fa fa-fw fa-plus-square"></i>添加文章</a></li>
                </ul>
            </li>
			<?php if ($_SESSION['userinfo']['username']=='admin') {?>
            <li>
            	<h3><i class="fa fa-fw fa-clipboard"></i>分类管理</h3>
                <ul class="sub_menu">
                    <li><a href="index.php?p=admin&c=category&a=list" target="main"><i class="fa fa-fw fa-list-ul"></i>分类列表</a></li>
                    <li><a href="index.php?p=admin&c=category&a=add" target="main"><i class="fa fa-fw fa-plus-square"></i>添加分类</a></li>
                </ul>
            </li>
            <li>
            	<h3><i class="fa fa-fw fa-clipboard"></i>用户管理</h3>
                <ul class="sub_menu">
                    <li><a href="index.php?p=admin&c=user&a=list" target="main"><i class="fa fa-fw fa-list-ul"></i>用户列表</a></li>
                    <li><a href="index.php?p=admin&c=user&a=add" target="main"><i class="fa fa-fw fa-plus-square"></i>添加用户</a></li>
                </ul>
            </li>
			<?php }?>
        </ul>
	</div>
	<!--左侧导航 结束-->

	<!--主体部分 开始-->
	<div class="main_box">
		<iframe src="./index.php?p=admin&c=index&a=welcome" frameborder="0" width="100%" height="100%" name="main"></iframe>
	</div>
	<!--主体部分 结束-->

	<!--底部 开始-->
	<div class="bottom_box">
		CopyRight © 2017. Powered By <a href="http://www.itcast.cn">http://www.itcast.cn</a>.
	</div>
	<!--底部 结束-->
</body>
</html><?php }} ?>
