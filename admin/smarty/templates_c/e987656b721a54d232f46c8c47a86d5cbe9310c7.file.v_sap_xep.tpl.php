<?php /* Smarty version Smarty-3.1.14, created on 2018-04-04 09:03:22
         compiled from "views\slider\v_sap_xep.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105855ac21b34b83199-47692938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e987656b721a54d232f46c8c47a86d5cbe9310c7' => 
    array (
      0 => 'views\\slider\\v_sap_xep.tpl',
      1 => 1522825343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105855ac21b34b83199-47692938',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ac21b34c2fd66_44267095',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac21b34c2fd66_44267095')) {function content_5ac21b34c2fd66_44267095($_smarty_tpl) {?>
<div class="content-box">
<!-- Start Content Box -->
    <div class="content-box-header">
      <h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
      
      <div style="clear:both"></div>
    </div>
    <!-- End .content-box-header -->
    
    <div class="content-box-content">
    
        <div class="tab-content default-tab" id="tab1">
        <p>Hình ảnh trong slider cần có tỷ lệ khung hình bằng nhau để slider được đều</p>
            <?php echo $_smarty_tpl->getSubTemplate ("views/slider/v_slider_curr.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

         </div> <!-- End #tab1 -->
      
     </div> <!-- End .content-box-content -->
</div>
<?php }} ?>