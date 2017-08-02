<?php /* Smarty version Smarty-3.1-DEV, created on 2017-06-18 17:28:42
         compiled from "D:\wamp\www\blog\Application\View\Admin\Category\add.html" */ ?>
<?php /*%%SmartyHeaderCode:15060594647ca648bb0-18221971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51498382ed3147c1311055e5d039e0625ce66c1c' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\Application\\View\\Admin\\Category\\add.html',
      1 => 1497511817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15060594647ca648bb0-18221971',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'arrlist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_594647ca6f8851_84579591',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594647ca6f8851_84579591')) {function content_594647ca6f8851_84579591($_smarty_tpl) {?><!DOCTYPE html>
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
        <i class="fa fa-home"></i> <a href="index.php?p=admin&c=index&a=welcome">首页</a> &raquo; 添加分类
    </div>
    <!--面包屑导航 结束-->
    
    <div class="result_wrap">
        <form action="#" method="post">
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th width="120"><i class="require">*</i>所属分类：</th>
                        <td>
                            <select name="pid">
                                <option value="0">==请选择==</option>
                                <?php  $_smarty_tpl->tpl_vars['arrlist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arrlist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arrlist']->key => $_smarty_tpl->tpl_vars['arrlist']->value) {
$_smarty_tpl->tpl_vars['arrlist']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['arrlist']->value['id'];?>
">
                                    <?php echo str_repeat('&nbsp;',$_smarty_tpl->tpl_vars['arrlist']->value['level']*4);?>
<?php echo $_smarty_tpl->tpl_vars['arrlist']->value['cname'];?>

                                </option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>分类名称：</th>
                        <td>
                            <input type="text" class="lg" name="cname">
                        </td>
                    </tr>
                    <tr>
                        <th>排序：</th>
                        <td>
                            <input type="text" name="sort">
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
