<?php /* Smarty version Smarty-3.1-DEV, created on 2017-06-18 14:53:03
         compiled from "D:\wamp\www\blog\Application\View\Admin\Index\welcome.html" */ ?>
<?php /*%%SmartyHeaderCode:179455946234f0122b7-24980814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5760d904bee086a2d68c04f614d4d747888eee4' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\Application\\View\\Admin\\Index\\welcome.html',
      1 => 1497440944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179455946234f0122b7-24980814',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5946234f2c9853_97992470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5946234f2c9853_97992470')) {function content_5946234f2c9853_97992470($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp\\www\\blog\\Framework\\Libs\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./Public/admin/css/ch-ui.admin.css">
	<link rel="stylesheet" href="./Public/admin/font/css/font-awesome.min.css">
</head>
<body>
	<!--面包屑导航 开始-->
	<div class="crumb_warp">
		<!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
		<i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 欢迎页
	</div>
	<!--面包屑导航 结束-->
	
	<!--结果集标题与导航组件 开始-->
	<div class="result_wrap">
        <div class="result_title">
            <h3>快捷操作</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="index.php?p=admin&c=article&a=add"><i class="fa fa-plus"></i>新增文章</a>
                <a href="index.php?p=admin&c=category&a=add"><i class="fa fa-plus"></i>新增分类</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->

    <div class="result_wrap avatar">
        <div class="result_title">
            <img src="././Public/admin/img/avatar.png" width="100px" height="100px" />
        </div>
        <div class="result_content">您好,<?php echo $_SESSION['userinfo']['username'];?>
，
            这是您第<?php echo $_SESSION['userinfo']['login_num']+1;?>
次登录，
            上次登录为<?php echo smarty_modifier_date_format($_SESSION['userinfo']['login_time'],'Y-m-d');?>
。
            上次登录的IP：<?php echo long2ip($_SESSION['userinfo']['login_ip']);?>

        </div>
    </div>

	
    <div class="result_wrap">
        <div class="result_title">
            <h3>系统基本信息</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>操作系统</label><span><?php echo php_uname('s');?>
</span>
                </li>
                <li>
                    <label>运行环境</label><span><?php echo apache_get_version();?>
</span>
                </li>
                <li>
                    <label>上传附件限制</label><span><?php echo ini_get('upload_max_filesize');?>
</span>
                </li>
                <li>
                    <label>北京时间</label><span><?php echo date('Y-m-d H:i:s',time());?>
</span>
                </li>
                <li>
                    <label>服务器域名/IP</label><span><?php echo $_SERVER['HTTP_HOST'];?>
</span>
                </li>
            </ul>
        </div>
    </div>
	<!--结果集列表组件 结束-->

</body>
</html><?php }} ?>
