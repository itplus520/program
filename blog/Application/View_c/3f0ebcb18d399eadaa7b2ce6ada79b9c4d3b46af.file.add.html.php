<?php /* Smarty version Smarty-3.1-DEV, created on 2017-06-18 17:29:43
         compiled from "D:\wamp\www\blog\Application\View\Admin\Article\add.html" */ ?>
<?php /*%%SmartyHeaderCode:20434594648072b49e3-85195924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f0ebcb18d399eadaa7b2ce6ada79b9c4d3b46af' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\Application\\View\\Admin\\Article\\add.html',
      1 => 1497583470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20434594648072b49e3-85195924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categoryList' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_594648074104b4_73089891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594648074104b4_73089891')) {function content_594648074104b4_73089891($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo @constant('__PUBLIC__');?>
admin/css/ch-ui.admin.css">
	<link rel="stylesheet" href="<?php echo @constant('__PUBLIC__');?>
admin/font/css/font-awesome.min.css">
    <style>
        table.add_tab tr { line-height:0px !important; }
    </style>
    <!--引入富文本编辑器的核心js文件-->
    <script type="text/javascript" charset="utf-8" src="<?php echo @constant('__PUBLIC__');?>
common/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo @constant('__PUBLIC__');?>
common/ueditor/ueditor.all.js"> </script>

</head>
<body>
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="index.php?p=admin&c=index&a=welcome">首页</a> &raquo; 添加文章
    </div>
    <!--面包屑导航 结束-->

    <div class="result_wrap">
        <form action="#" method="post" enctype="multipart/form-data">
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th width="120"><i class="require">*</i>分类：</th>
                        <td>
                            <select name="cid">
                                <option value="0">==请选择==</option>
                                <?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value) {
$_smarty_tpl->tpl_vars['arr']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
"><?php echo str_repeat('&nbsp;',$_smarty_tpl->tpl_vars['arr']->value['level']*4);?>
<?php echo $_smarty_tpl->tpl_vars['arr']->value['cname'];?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>标题：</th>
                        <td>
                            <input type="text" class="lg" name="title">
                            <p>标题可以写30个字</p>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>缩略图：</th>
                        <td><input type="file" name="image"></td>
                    </tr>
                    <tr>
                        <th>作者：</th>
                        <td>
                            <input type="text" name="author">
                        </td>
                    </tr>
                    <tr>
                        <th>关键词：</th>
                        <td>
                            <textarea name="keywords"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>描述：</th>
                        <td>
                            <textarea name="description"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>文章内容：</th>
                        <td>
                            <textarea id="editor" class="lg" name="content" style="width: 800px;height: 400px;"></textarea>
                        </td>
                    </tr>
                    <script type="text/javascript">

                        //实例化编辑器
                        //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
                        var ue = UE.getEditor('editor');
                    </script>
                    <tr>
                        <th title="推荐将在首页显示">是否推荐：</th>
                        <td>
                            <label for=""><input type="radio" name="is_Tuijian" value="1">推荐</label>
                            <label for=""><input type="radio" name="is_Tuijian" value="0" checked>不推荐</label>
                        </td>
                    </tr>
                    <tr>
                        <th>是否显示：</th>
                        <td>
                            <label for=""><input type="radio" name="display" value="0">隐藏</label>
                            <label for=""><input type="radio" name="display" value="1" checked>显示</label>
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
<pre>











</pre>
</body>
</html><?php }} ?>
