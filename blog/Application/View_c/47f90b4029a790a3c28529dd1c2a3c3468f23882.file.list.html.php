<?php /* Smarty version Smarty-3.1-DEV, created on 2017-06-18 14:31:36
         compiled from "D:\wamp\www\blog\Application\View\Admin\User\list.html" */ ?>
<?php /*%%SmartyHeaderCode:2998159461e487eb9c6-98903343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47f90b4029a790a3c28529dd1c2a3c3468f23882' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\Application\\View\\Admin\\User\\list.html',
      1 => 1498284686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2998159461e487eb9c6-98903343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'res' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_59461e48933c13_54991102',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59461e48933c13_54991102')) {function content_59461e48933c13_54991102($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp\\www\\blog\\Framework\\Libs\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./Public/admin/css/ch-ui.admin.css">
    <link rel="stylesheet" href="./Public/admin/font/css/font-awesome.min.css">
    <script type="text/javascript" src="./Public/admin/js/jquery.js"></script>
    <script type="text/javascript" src="./Public/admin/js/ch-ui.admin.js"></script>
</head>
<body>
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 用户列表
    </div>
    <!--面包屑导航 结束-->
    
    <!--结果页快捷搜索框 开始  独立开发
    <div class="search_wrap">
        <form action="" method="post">
            <table class="search_tab">
                <tr>
                    <th width="78">选择分类:</th>
                    <td>
                        <select onchange="javascript:location.href=this.value;">
                            <option value="">全部</option>
                            <option value="http://www.baidu.com">百度</option>
                            <option value="http://www.sina.com">新浪</option>
                        </select>
                    </td>
                    <th width="70">关键字:</th>
                    <td><input type="text" name="keywords" placeholder="关键字"></td>
                    <td><input type="submit" name="sub" value="查询"></td>
                </tr>
            </table>
        </form>
    </div>-->
    <!--结果页快捷搜索框 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <div class="result_wrap">
            <!--快捷导航 开始 独立开发
            <div class="result_content">
                <div class="short_wrap">
                    <a href="#"><i class="fa fa-plus"></i>新增文章</a>
                    <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
                    <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
                </div>
            </div>-->
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>
                        <!--
                        <th class="tc" width="5%"><input type="checkbox" name=""></th>
                        <th class="tc">排序</th>
                        -->     
                        <th class="tc">编号</th>
                        <th>姓名</th>
                        <th>登陆次数</th>
                        <th>最后登陆时间</th>
                        <th>最后登陆IP</th>
                        <th>操作</th>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['res']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value) {
$_smarty_tpl->tpl_vars['arr']->_loop = true;
?>
                        <tr>
                            <td class="tc"><?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['username'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['login_num'];?>
</td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arr']->value['login_time'],'Y-m-d H:i:s');?>
</td>
                            <td><?php echo long2ip($_smarty_tpl->tpl_vars['arr']->value['login_ip']);?>
</td>
                            <td>
                                <a href="index.php?p=admin&c=user&a=update&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">修改</a>
                                <a href="index.php?p=admin&c=user&a=del&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
" onclick="if(confirm('确定要删除吗?')) return true; return false;">删除</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->

</body>
</html><?php }} ?>
