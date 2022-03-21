<?php /* Smarty version Smarty-3.1.18, created on 2018-04-05 12:53:51
         compiled from "views\404_403\v_404_403.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160505a016f626f88d8-71017395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fc71ada0129a39b4417c3747e54b181346be6cf' => 
    array (
      0 => 'views\\404_403\\v_404_403.tpl',
      1 => 1510043642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160505a016f626f88d8-71017395',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a016f62718480_36654566',
  'variables' => 
  array (
    'error' => 0,
    'content_err' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a016f62718480_36654566')) {function content_5a016f62718480_36654566($_smarty_tpl) {?><div class="x-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12 x-text text-center">
					<h1><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>
					<p><?php echo $_smarty_tpl->tpl_vars['content_err']->value;?>
. </p>
					
					<a href="."><i class="fa fa-home"></i> Go To Homepage</a>
				</div>
			</div><!-- /.row -->
		</div><?php }} ?>
