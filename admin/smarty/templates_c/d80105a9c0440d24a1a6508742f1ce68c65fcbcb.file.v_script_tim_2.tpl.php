<?php /* Smarty version Smarty-3.1.14, created on 2018-04-05 14:47:45
         compiled from "views\xl_ajax\v_script_tim_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204615abb841a6ab363-34320344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd80105a9c0440d24a1a6508742f1ce68c65fcbcb' => 
    array (
      0 => 'views\\xl_ajax\\v_script_tim_2.tpl',
      1 => 1522241130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204615abb841a6ab363-34320344',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5abb841a6b26a6_88723588',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abb841a6b26a6_88723588')) {function content_5abb841a6b26a6_88723588($_smarty_tpl) {?><script>
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
	url: "ajax_tim_xem_them_2.php",
	type: 'POST',
	data: form_data,
	success: function(data) {
		$("#bang").html(data);
		}
	});

})
</script><?php }} ?>