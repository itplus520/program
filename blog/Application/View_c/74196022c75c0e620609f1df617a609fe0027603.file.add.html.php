<?php /* Smarty version Smarty-3.1-DEV, created on 2017-06-18 14:25:10
         compiled from "D:\wamp\www\blog\Application\View\Admin\User\add.html" */ ?>
<?php /*%%SmartyHeaderCode:3200659461bf45ef6c2-69011776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74196022c75c0e620609f1df617a609fe0027603' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\Application\\View\\Admin\\User\\add.html',
      1 => 1497767109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3200659461bf45ef6c2-69011776',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59461bf4639a58_40825854',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59461bf4639a58_40825854')) {function content_59461bf4639a58_40825854($_smarty_tpl) {?><!DOCTYPE html>
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
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 添加用户
    </div>
    <!--面包屑导航 结束-->
    
    <div class="result_wrap">
        <form action="#" method="post" enctype="multipart/form-data">
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th><i class="require">*</i>用户名：</th>
                        <td>
                            <input type="text" class="lg" name="username">
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>密码：</th>
                        <td>
                            <input type="password" name="password">
                        </td>
                    </tr>
                    <tr>
                        <th>头像：</th>
                        <td>
                            <input type="file" name="image">
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input type="submit" value="提交">
                            <input type="button" class="back" onclick="history.go(-1)" value="返回">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

</body>
</html><?php }} ?>
