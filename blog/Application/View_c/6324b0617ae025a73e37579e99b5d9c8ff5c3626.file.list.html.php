<?php /* Smarty version Smarty-3.1-DEV, created on 2017-06-18 17:29:17
         compiled from "D:\wamp\www\blog\Application\View\Admin\Article\list.html" */ ?>
<?php /*%%SmartyHeaderCode:16242594647ede3c021-92659239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6324b0617ae025a73e37579e99b5d9c8ff5c3626' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\Application\\View\\Admin\\Article\\list.html',
      1 => 1497665281,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16242594647ede3c021-92659239',
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
  'unifunc' => 'content_594647ee1247a7_51238307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594647ee1247a7_51238307')) {function content_594647ee1247a7_51238307($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp\\www\\blog\\Framework\\Libs\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo @constant('__PUBLIC__');?>
admin/css/ch-ui.admin.css">
	<link rel="stylesheet" href="<?php echo @constant('__PUBLIC__');?>
admin/font/css/font-awesome.min.css">
    <script type="text/javascript" src="<?php echo @constant('__PUBLIC__');?>
admin/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo @constant('__PUBLIC__');?>
admin/js/ch-ui.admin.js"></script>
</head>
<body>
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="index.php?p=admin&c=index&a=welcome">首页</a> &raquo; 文章列表
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
                        <th class="tc">ID</th>
                        <th>标题</th>
                        <th>分类名称</th>
                        <th>图片</th>
                        <th>是否显示</th>
                        <th>点击</th>
                        <th>发布人</th>
                        <th>更新时间</th>
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
                        <td>
                            <a href="#"><?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];?>
</a>
                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['arr']->value['categoryName'];?>

                        </td>
                        <td>
                            <img width="50" height="50" src="<?php echo @constant('__PUBLIC__');?>
upload/<?php echo $_smarty_tpl->tpl_vars['arr']->value['image'];?>
"/>
                        </td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['arr']->value['display']==1) {?><font color="green">显示</font>
                            <?php } else { ?><font color="red">隐藏</font>
                            <?php }?>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['click'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['author'];?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['arr']->value['updated_time'],'Y-m-d H:i:s');?>
</td>
                        <td>
                            <a href="index.php?p=admin&c=article&a=update&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">修改</a>
                            <a href="index.php?p=admin&c=article&a=del&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
" onclick="if(confirm('确定要删除吗?')) return true;else return false;">删除</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>


                <div class="page_nav">
                    <div>
                        <a class="first" href="/wysls/index.php/Admin/Tag/index/p/1.html">第一页</a> 
                        <a class="prev" href="/wysls/index.php/Admin/Tag/index/p/7.html">上一页</a> 
                        <a class="num" href="/wysls/index.php/Admin/Tag/index/p/6.html">6</a>
                        <a class="num" href="/wysls/index.php/Admin/Tag/index/p/7.html">7</a>
                        <span class="current">8</span>
                        <a class="num" href="/wysls/index.php/Admin/Tag/index/p/9.html">9</a>
                        <a class="num" href="/wysls/index.php/Admin/Tag/index/p/10.html">10</a> 
                        <a class="next" href="/wysls/index.php/Admin/Tag/index/p/9.html">下一页</a> 
                        <a class="end" href="/wysls/index.php/Admin/Tag/index/p/11.html">最后一页</a> 
                        <span class="rows">11 条记录</span>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->

</body>
</html><?php }} ?>
