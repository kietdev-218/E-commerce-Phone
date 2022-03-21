<?php /* Smarty version Smarty-3.1.14, created on 2018-04-05 14:47:45
         compiled from "views\xl_ajax\v_script_phan_tu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47195a2fb752b10b96-88760067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '902c3130eebe5b619bbdb2b9a4d6f1e9f58e2b5f' => 
    array (
      0 => 'views\\xl_ajax\\v_script_phan_tu.tpl',
      1 => 1521181598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47195a2fb752b10b96-88760067',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a2fb752b1e3e3_14103242',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2fb752b1e3e3_14103242')) {function content_5a2fb752b1e3e3_14103242($_smarty_tpl) {?><script>
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

$('.check-all').click(
	function(){
		$(this).parent().parent().parent().parent().find("input[type='checkbox']").attr('checked', $(this).is(':checked'));   
	}
);
</script>
<?php }} ?>