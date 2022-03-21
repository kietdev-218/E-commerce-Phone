<?php /* Smarty version Smarty-3.1.18, created on 2018-04-05 12:53:52
         compiled from "views\v_sidebar_sp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:551759fd9271ea2cf5-86385762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1a9aa61aa88a1a1ec3b639c92c88c97a1b66d13' => 
    array (
      0 => 'views\\v_sidebar_sp.tpl',
      1 => 1509790296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '551759fd9271ea2cf5-86385762',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59fd9271eb7f38_55071731',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fd9271eb7f38_55071731')) {function content_59fd9271eb7f38_55071731($_smarty_tpl) {?><div class="col-xs-12 col-sm-12 col-md-3 sidebar">
			
			<!-- ================================== TOP NAVIGATION ================================== -->
<!-- /.side-menu -->
<!-- ================================== TOP NAVIGATION : END ================================== -->
			<!-- ============================================== Danh muc hang sx ============================================== -->
            <div class="sidebar-module-container">
            <?php echo $_smarty_tpl->getSubTemplate ("views/v_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <!-- ============================================== Danh muc hang sx : END ============================================== -->
            <?php echo $_smarty_tpl->getSubTemplate ("views/v_tag.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        <!-- ============================================== HOT DEALS ============================================== -->
            <?php echo $_smarty_tpl->getSubTemplate ("views/v_khuyen_mai_moi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <!-- ============================================== HOT DEALS : END ============================================== -->
            </div>

		</div><?php }} ?>
