<?php /* Smarty version Smarty-3.1.18, created on 2018-04-05 12:53:22
         compiled from "views\v_tag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2747059ec7143d18709-30330087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe347640481be50246977f4efe373087b1a40bfc' => 
    array (
      0 => 'views\\v_tag.tpl',
      1 => 1509785002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2747059ec7143d18709-30330087',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59ec7143d303c6_45411050',
  'variables' => 
  array (
    'tag_list' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ec7143d303c6_45411050')) {function content_59ec7143d303c6_45411050($_smarty_tpl) {?>			<!-- ============================================== PRODUCT TAGS ============================================== -->
<div class="sidebar-widget product-tag wow fadeInUp">
	<h3 class="section-title" style="font-family:'Times New Roman', Times, serif; font-weight:bold">Từ khóa</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<div class="tag-list">
        <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tag_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?>					
			<a class="item" title="<?php echo $_smarty_tpl->tpl_vars['tag']->value->tag_name;?>
" href="tim_kiem.php?keyword=<?php echo $_smarty_tpl->tpl_vars['tag']->value->tag_name;?>
"><?php echo $_smarty_tpl->tpl_vars['tag']->value->tag_name;?>
</a>
        <?php } ?>
		</div><!-- /.tag-list -->
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== PRODUCT TAGS : END ============================================== --><?php }} ?>
