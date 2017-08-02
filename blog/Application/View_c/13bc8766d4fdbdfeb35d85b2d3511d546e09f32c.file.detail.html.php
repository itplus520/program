<?php /* Smarty version Smarty-3.1-DEV, created on 2017-06-18 16:27:31
         compiled from "D:\wamp\www\blog\Application\View\Home\Article\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:27229594639737bfdf6-25846012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13bc8766d4fdbdfeb35d85b2d3511d546e09f32c' => 
    array (
      0 => 'D:\\wamp\\www\\blog\\Application\\View\\Home\\Article\\detail.html',
      1 => 1497762677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27229594639737bfdf6-25846012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'artInfo' => 0,
    'commentList' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_594639739c76f9_26759270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_594639739c76f9_26759270')) {function content_594639739c76f9_26759270($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wamp\\www\\blog\\Framework\\Libs\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("../Common/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div id="divMain">
<div class="post single">
	<h4 class="post-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['artInfo']->value['updated_time'],'Y-m-d H:i:s');?>
</h4>
	<h2 class="post-title"><?php echo $_smarty_tpl->tpl_vars['artInfo']->value['title'];?>
</h2>
	<div class="post-body"><?php echo $_smarty_tpl->tpl_vars['artInfo']->value['content'];?>
</div>
	<h5 class="post-tags"></h5>
	<h6 class="post-footer">
		作者:<?php echo $_smarty_tpl->tpl_vars['artInfo']->value['author'];?>
 | 分类:<?php echo $_smarty_tpl->tpl_vars['artInfo']->value['categoryName'];?>
 | 阅读:<?php echo $_smarty_tpl->tpl_vars['artInfo']->value['click'];?>
 | 评论:<?php echo $_smarty_tpl->tpl_vars['artInfo']->value['comment'];?>
|
		<a href="">赞</a>:<?php echo $_smarty_tpl->tpl_vars['artInfo']->value['zan'];?>

	</h6>
</div>



<label id="AjaxCommentBegin"></label>
<!--评论输出-->
<ul class="msg msghead">
	<li class="tbname">评论列表:</li>
</ul>
	<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['commentList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
	<ul id="cmt1" class="msg" style="margin-left: <?php echo $_smarty_tpl->tpl_vars['comment']->value['level']*40;?>
px">
		<li class="msgname">
			<img width="32" alt="" src="image/admin/0.png" class="avatar">&nbsp;
			<span class="commentname">
			<a target="_blank" rel="nofollow" href="">admin</a>
			</span><br>
			<small>发布于&nbsp;2016-04-16 02:30:24&nbsp;&nbsp;<span class="revertcomment">
				<a onclick="document.getElementById('pid').value=<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
" href="#comment">回复</a></span>
			</small>
		</li>
		<li class="msgarticle"><?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>
</li>
	</ul>
	<?php } ?>

<!--评论翻页条输出-->
<div class="pagebar commentpagebar">
</div>
<label id="AjaxCommentEnd"></label>

<!--评论框-->
<div class="post" id="divCommentPost">
	<p class="posttop"><a name="comment">admin发表评论:</a><a rel="nofollow" id="cancel-reply" href="#divCommentPost" style="display:none;"><small>取消回复</small></a></p>
	<form id="frmSumbit" target="_self" method="post" action="index.php?p=home&c=comment&a=add" >
		<input type="hidden" name="aid" value="<?php echo $_smarty_tpl->tpl_vars['artInfo']->value['id'];?>
">
		<input type="hidden" name="pid" value="0" id="pid">
		<p><label for="txaArticle">正文(*)</label></p>
		<p>
			<textarea name="content" id="txaArticle" class="text" cols="50" rows="4" tabindex="6" ></textarea>
		</p>
		<p><input name="sumbit" type="submit" tabindex="7" value="提交" class="button" /></p>
	</form>
	<p class="postbottom">☆欢迎发表您的看法、交流您的观点。</p>
</div>
		</div>
		<div id="divBottom">
        	<h3 id="BlogCopyRight">
                                            	Copyright © 2008-2028 tqtqtq.com All Rights Reserved            </h3>
			<h4 id="BlogPowerBy">Powered by <a href="http://www.tqtqtq.com/" title="TQBlog" target="_blank">TQBlog V2.0 Release 20140101</a></h4>
		</div><div class="clear"></div>
	</div><div class="clear"></div>
	</div><div class="clear"></div>
</div>
<!-- JiaThis Button BEGIN -->
<script type="text/javascript" src="http://v3.jiathis.com/code/jiathis_r.js?move=0" charset="utf-8"></script>
<!-- JiaThis Button END -->
</body>
</html><!--86.655ms--><?php }} ?>
