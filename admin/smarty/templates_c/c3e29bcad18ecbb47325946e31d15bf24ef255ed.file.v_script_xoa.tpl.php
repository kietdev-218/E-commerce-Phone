<?php /* Smarty version Smarty-3.1.14, created on 2017-12-12 11:38:40
         compiled from "views\xl_ajax\v_script_xoa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173405a2fa82667df03-90068816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3e29bcad18ecbb47325946e31d15bf24ef255ed' => 
    array (
      0 => 'views\\xl_ajax\\v_script_xoa.tpl',
      1 => 1513075048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173405a2fa82667df03-90068816',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2fa82668a534_54874085',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fa82668a534_54874085')) {function content_5a2fa82668a534_54874085($_smarty_tpl) {?><script>
function Hoi_xoa(table,id,id_val,$link,ten)
{
	if(confirm("Bạn muốn xóa "+ten+" này ?"))
	{
		window.location='xoa_phan_tu.php?table='+table+'&id='+id+'&id_val='+id_val+'&link='+$link+'&ten='+ten;	
	}	
}

function xoa_nhieu(table,id,$link,ten){
	var count_chon_xoa = $('.chon_xoa').filter(':checked').length;
	var mang_chon_xoa = [];
	
	for(var i = 0; i<count_chon_xoa; i++)
	{
		var val = $('.chon_xoa').filter(':checked').eq(i).val();
		mang_chon_xoa.push(val);
	}
	var ma_san_pham = mang_chon_xoa.join();
	if(ma_san_pham != '')
		Hoi_xoa(table,id,ma_san_pham,$link,ten);
	else
		alert('Hãy chọn '+ten+' cần xóa');
}
$('.xem-them').click(function(e){
	e.preventDefault();
	var $kieu_sp = $('.kieu_sp_ax').val();
	var $link = $('.aj-link').val();
	var $so_luong_show = $('.so_luong_show').val();
	var $keyword = $('.keyword').val();
	
	form_data ={
		kieu_sp:$kieu_sp,so_luong_show:$so_luong_show,keyword:$keyword,dlink:$link
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