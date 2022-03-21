<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 07:14:11
         compiled from "views\xl_ajax\v_script_tim_xoa_sp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196695a2d26f54f53d4-41298676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14cd20a532eb4c94c208d2a99da79c0713b7ca7c' => 
    array (
      0 => 'views\\xl_ajax\\v_script_tim_xoa_sp.tpl',
      1 => 1513059198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196695a2d26f54f53d4-41298676',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2d26f5501804_47456219',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2d26f5501804_47456219')) {function content_5a2d26f5501804_47456219($_smarty_tpl) {?><script>
function Hoi_xoa(ma_san_pham)
{
	if(confirm("Bạn muốn xóa sp này?"))
	{
		window.location='xoa_phan_tu.php?id_val=' + ma_san_pham+'&table=san_pham'+'&id=ma_san_pham';	
	}	
}
$('.btn_xoa_sp').click(function(){
	var count_chon_xoa = $('.chon_xoa').filter(':checked').length;
	var mang_chon_xoa = [];
	
	for(var i = 0; i<count_chon_xoa; i++)
	{
		var val = $('.chon_xoa').filter(':checked').eq(i).val();
		mang_chon_xoa.push(val);
	}
	var ma_san_pham = mang_chon_xoa.join();
	if(ma_san_pham != '')
		Hoi_xoa(ma_san_pham);
	else
		alert('Hãy chọn sp cần xóa');
})
$('.xem-them').click(function(e){
	e.preventDefault();
	var $kieu_sp = $('.kieu_sp_ax').val();
	var $so_luong_show = $('.so_luong_show').val();
	var $keyword = $('.keyword').val();
	
	form_data ={
		kieu_sp:$kieu_sp,so_luong_show:$so_luong_show,keyword:$keyword
	};
	$.ajax({
		url: "ajax_xem_them_sp.php",
		type: 'POST',
		data: form_data,
		success: function(data) {
			$("#bang").html(data);
		}
	});
})
</script>
<?php }} ?>