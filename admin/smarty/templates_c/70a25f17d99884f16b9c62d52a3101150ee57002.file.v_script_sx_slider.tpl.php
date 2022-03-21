<?php /* Smarty version Smarty-3.1.14, created on 2018-04-02 14:36:50
         compiled from "views\xl_ajax\v_script_sx_slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163325ac2210200f459-27756114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70a25f17d99884f16b9c62d52a3101150ee57002' => 
    array (
      0 => 'views\\xl_ajax\\v_script_sx_slider.tpl',
      1 => 1522672607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163325ac2210200f459-27756114',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5ac221020172b0_50299239',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac221020172b0_50299239')) {function content_5ac221020172b0_50299239($_smarty_tpl) {?><script>
$('.vi_tri_hinh').each(function(index) {
	$('.vi_tri_hinh').eq(index).change(function(){
		var $vi_tri_ht = $('.vi_tri_ht').eq(index).val();
		var $vi_tri_moi = $('.vi_tri_hinh').eq(index).val();
		var $id = $('.id_hinh').eq(index).val();
		
		var form_data = {
			vi_tri_ht:$vi_tri_ht,vi_tri_moi:$vi_tri_moi,id:$id
		};
	
		$.ajax({
		url: "ajax_sap_xep_slider.php",
		type: 'POST',
		data: form_data,
		success: function(data) {
			$("#tab1").html(data);
			}
		});
	})
});
</script><?php }} ?>