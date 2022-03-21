<?php /* Smarty version Smarty-3.1.14, created on 2018-03-28 10:27:26
         compiled from "views\xl_ajax\v_script_tim_bai_viet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134005abb51eecefa78-43718128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86d97461736c348575829f42690b2f5747f21c6e' => 
    array (
      0 => 'views\\xl_ajax\\v_script_tim_bai_viet.tpl',
      1 => 1522224711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134005abb51eecefa78-43718128',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5abb51eecf6cc6_62742550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abb51eecf6cc6_62742550')) {function content_5abb51eecf6cc6_62742550($_smarty_tpl) {?><script>
$('#thanh_tim').keyup(function(){

	var $keyword =$(this).val();
	var $link = $('.link').val();
	var $trang_xl = $('.trang_xl').val();
	var $so_luong_show = $('.so_luong_show').val();
	var $kieu = $('.kieu').val();
	var form_data = {
		so_luong_show:$so_luong_show,keyword:$keyword,dlink:$link,trang_xl:$trang_xl,kieu:$kieu
	};

	$.ajax({
	url: "ajax_tim_xem_them_bai_viet.php",
	type: 'POST',
	data: form_data,
	success: function(data) {
		$("#bang").html(data);
		}
	});

})
</script><?php }} ?>