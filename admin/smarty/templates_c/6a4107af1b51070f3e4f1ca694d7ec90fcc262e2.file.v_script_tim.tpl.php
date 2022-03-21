<?php /* Smarty version Smarty-3.1.14, created on 2018-04-05 14:51:32
         compiled from "views\xl_ajax\v_script_tim.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164255aae8286340643-37671149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a4107af1b51070f3e4f1ca694d7ec90fcc262e2' => 
    array (
      0 => 'views\\xl_ajax\\v_script_tim.tpl',
      1 => 1521723630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164255aae8286340643-37671149',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5aae828634c1c4_80530976',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aae828634c1c4_80530976')) {function content_5aae828634c1c4_80530976($_smarty_tpl) {?><script>
$('#thanh_tim').keyup(function(){

	var $keyword =$(this).val();
	var $link = $('.link').val();
	var $trang_xl = $('.trang_xl').val();
	var $so_luong_show = $('.so_luong_show').val();
	var form_data = {
		so_luong_show:$so_luong_show,keyword:$keyword,dlink:$link,trang_xl:$trang_xl
	};

	$.ajax({
	url: "ajax_tim_xem_them.php",
	type: 'POST',
	data: form_data,
	success: function(data) {
		$("#bang").html(data);
		}
	});

})
</script><?php }} ?>