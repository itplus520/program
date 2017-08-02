<?php /* Smarty version Smarty-3.1-DEV, created on 2017-06-18 14:47:25
         compiled from "D:\wamp\www\blog\Application\View\Home\Common\head.html" */ ?>
<?php /*%%SmartyHeaderCode:4451594621fdadea76-57354600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12d7ce3ad43ab0a92a0d500e04775daa0f21ae82' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\Application\\View\\Home\\Common\\head.html',
      1 => 1497766174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4451594621fdadea76-57354600',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categoryList' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_594621fdc49f41_62059754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594621fdc49f41_62059754')) {function content_594621fdc49f41_62059754($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Content-Language" content="zh-CN" />
    <title>www.dreamblog.com - Welcome to 我的博客 - Powered by PHP150912</title>
    <link rel="stylesheet" rev="stylesheet" href="./Public/home/style/default.css" type="text/css" media="all"/>
    <script src="./Public/home/script/common.js" type="text/javascript"></script>

</head>
<body class="multi index">

<!-- top bar -->
<div id="top">
    <div class="center">
        <div class="menu-left">
            <ul>
                <li><a href="javascript:;" onclick="setHomepage('http://www.myblog.com');">设为首页</a></li>
                <li><a href="javascript:;" onclick="addFavorite('http://www.myblog.com','www.myblog.com - Welcome to 我的博客')">收藏本站</a></li>
            </ul>
        </div>
        <div class="menu-right">
            <ul id="info">
                <?php if (isset($_SESSION['userinfo']['username'])) {?>
                <li>欢迎 <?php echo $_SESSION['userinfo']['username'];?>
(管理员)！</li>
                <li><a href="index.php?p=admin&c=index&a=index" target="_blank">管理</a></li>
                <li><a href="index.php?p=admin&c=login&a=loginout">退出</a></li>
                <?php } else { ?>
                <li>欢迎(游客)！</li>
                <li><a href="index.php?p=home&c=login&a=login">登录</a></li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>

<div id="divAll">
    <div id="divPage">
        <div id="divMiddle">
            <div id="divTop">
                <h1 id="BlogTitle"><a href="http://www.myblog.com">www.dreamblog.com</a></h1>
                <h3 id="BlogSubTitle">Welcome to MyBlog</h3>
            </div>
            <div id="divNavBar">
                <ul>
                    <li id="nvabar-item-index"><a href="index.php?p=home&c=index&a=index">首页</a></li>
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['pid']==0) {?>
                    <li id="nvabar-item-index">
                        <a href="index.php?p=home&c=article&a=list&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['cname'];?>
</a>
                    </li>
                    <?php }?>
                    <?php } ?>
                </ul>
            </div><?php }} ?>
