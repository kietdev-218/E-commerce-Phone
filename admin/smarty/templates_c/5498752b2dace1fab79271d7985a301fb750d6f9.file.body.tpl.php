<?php /* Smarty version Smarty-3.1.14, created on 2018-04-05 14:47:38
         compiled from "smarty\templates\body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121325a2cfdd43b25b0-62027207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5498752b2dace1fab79271d7985a301fb750d6f9' => 
    array (
      0 => 'smarty\\templates\\body.tpl',
      1 => 1512886942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121325a2cfdd43b25b0-62027207',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2cfdd43d4ae4_62091865',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2cfdd43d4ae4_62091865')) {function content_5a2cfdd43d4ae4_62091865($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("main_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>