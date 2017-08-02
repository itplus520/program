<?php /* Smarty version Smarty-3.1-DEV, created on 2017-06-18 14:47:25
         compiled from "D:\wamp\www\blog\Application\View\Home\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:25490594621fd83ad59-31591963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fad3fa4253170d0420680b7de4e96616969dbf91' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\Application\\View\\Home\\Index\\index.html',
      1 => 1497745758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25490594621fd83ad59-31591963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articlelistData' => 0,
    'article' => 0,
    'articlePage' => 0,
    'categoryList' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_594621fdac34f9_94148302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594621fdac34f9_94148302')) {function content_594621fdac34f9_94148302($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp\\www\\blog\\Framework\\Libs\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../Common/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="divMain">
	<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articlelistData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
		<div class="post multi">
			<h4 class="post-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['updated_time'],'Y-m-d H:i:s');?>
</h4>
			<h2 class="post-title"><a href="index.php?p=home&c=article&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</a></h2>
			<div class="post-body">
				<?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>

			</div>
			<h5 class="post-tags"></h5>
			<h6 class="post-footer">
				作者:<?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
 | 分类:<?php echo $_smarty_tpl->tpl_vars['article']->value['categoryName'];?>
 | 阅读:<?php echo $_smarty_tpl->tpl_vars['article']->value['click'];?>
 | 赞:<?php echo $_smarty_tpl->tpl_vars['article']->value['zan'];?>
 | 评论:<?php echo $_smarty_tpl->tpl_vars['article']->value['comment'];?>
</h6>
		</div>
	<?php } ?>
	<div class="pagebar" style="text-align: center">
  		<?php echo $_smarty_tpl->tpl_vars['articlePage']->value;?>

  	</div>
</div>
<div id="divSidebar">
 
<dl class="function" id="divSearchPanel">
<dt class="function_t">文章标题搜索</dt><dd class="function_c">

<div>
	<form name="search" method="post" action="">
		<input type="text" name="q" size="11" value=""/> 
		<input type="submit" value="搜索" />
	</form>
</div>


</dd>
</dl> 
<dl class="function" id="divCalendar">
<dt style="display:none;"></dt><dd class="function_c">

<div></div>


</dd>
</dl> 
<dl class="function" id="divCatalog">
<dt class="function_t">文章分类</dt><dd class="function_c">
<ul>
	<?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoryList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value) {
$_smarty_tpl->tpl_vars['arr']->_loop = true;
?>
			<li >
		<a href="index.php?p=home&c=article&a=list&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
" target="_blank"><?php echo str_repeat('&nbsp;',$_smarty_tpl->tpl_vars['arr']->value['level']*4);?>
<?php echo $_smarty_tpl->tpl_vars['arr']->value['cname'];?>
</a>
			</li>
	<?php } ?>
	</ul>

</dd>
</dl> 



<ul></ul>

</dd>
</dl> 
<dl class="function" id="divFavorites">
<dt class="function_t">网站收藏</dt><dd class="function_c">


<ul><li><a href="" target="_blank">myblog社区</a></li><li><a href="" target="_blank">myblog应用中心</a></li></ul>

</dd>
</dl> 
<dl class="function" id="divLinkage">
<dt class="function_t">友情链接</dt><dd class="function_c">


<ul><li><a href="" target="_blank" title="myblog开源博客系统">myblog官网</a></li></ul>

</dd>
</dl> 
<dl class="function" id="divMisc">
<dt style="display:none;"></dt><dd class="function_c">


<ul><li><a href="" target="_blank"><img src="./Public/home/image/logo/myblog.gif" height="31" width="88" alt="myblog" /></a></li><li><a href="" target="_blank"><img src="./Public/home/image/logo/rss.png" height="31" width="88" alt="订阅本站的 RSS 2.0 新闻聚合" /></a></li></ul>

</dd>
</dl>		</div>
<div id="divBottom">
        	<h3 id="BlogCopyRight">
                                            	Copyright © 2008-2028 PHP150912 All Rights Reserved            </h3>
			<h4 id="BlogPowerBy">Powered by <a href="" title="myblog" target="_blank">myblog V1.0 Release 20151116</a></h4>
		</div><div class="clear"></div>
	</div><div class="clear"></div>
	</div><div class="clear"></div>
</div>
<!-- JiaThis Button BEGIN -->
<script type="text/javascript" src="http://v3.jiathis.com/code/jiathis_r.js?move=0" charset="utf-8"></script>
<!-- JiaThis Button END -->
</body>
</html><?php }} ?>
