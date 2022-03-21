<?php /* Smarty version Smarty-3.1.14, created on 2018-04-05 14:47:53
         compiled from "views\xl_ajax\v_script_nhom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:298745a30af19a33f99-77436971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9e825b1b2c8dbecdb1a2419e3d4b7ac6d659d6a' => 
    array (
      0 => 'views\\xl_ajax\\v_script_nhom.tpl',
      1 => 1522819366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298745a30af19a33f99-77436971',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5a30af19a39654_90729607',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a30af19a39654_90729607')) {function content_5a30af19a39654_90729607($_smarty_tpl) {?><script>
function Hoi_xoa_nhom(table,table2,id,id_val,$link,ten,ten2)
{
	if(confirm("Nếu xóa "+ten+" tất cả "+ten2+" liên quan cũng sẽ bị xóa, bạn chắc chứ ?"))
	{
		window.location='xoa_nhom.php?table='+table+'&table2='+table2+'&id='+id+'&id_val='+id_val+'&link='+$link+'&ten='+ten;
	}	
}
function Hoi_xoa_nhom2(table,table2,table3,id,id_val,id2,id_val2,$link,ten,ten2)
{
	if(confirm("Nếu xóa "+ten+" tất cả "+ten2+" liên quan cũng sẽ bị xóa, bạn chắc chứ ?"))
	{
		window.location='xoa_nhom2.php?table='+table+'&table2='+table2+'&table3='+table3+'&id='+id+'&id_val='+id_val+'&id2='+id2+'&id_val2='+id_val2+'&link='+$link+'&ten='+ten;
	}	
}
function xoa_nhieu_nhom(table,table2,id,$link,ten,ten2){
	var count_chon_xoa = $('.chon_xoa').filter(':checked').length;
	var mang_chon_xoa = [];
	
	for(var i = 0; i<count_chon_xoa; i++)
	{
		var val = $('.chon_xoa').filter(':checked').eq(i).val();
		mang_chon_xoa.push(val);
	}
	var id_val = mang_chon_xoa.join();
	if(id_val != '')
		Hoi_xoa_nhom(table,table2,id,id_val,$link,ten,ten2);
	else
		alert('Hãy chọn '+ten+' cần xóa');
}
function xoa_nhieu_nhom2(table,table2,table3,id,id2,$link,ten,ten2){
	var count_chon_xoa = $('.chon_xoa').filter(':checked').length;
	var mang_chon_xoa = [];
	
	for(var i = 0; i<count_chon_xoa; i++)
	{
		var val = $('.chon_xoa').filter(':checked').eq(i).val();
		mang_chon_xoa.push(val);
	}
	var id_val = mang_chon_xoa.join();
	if(id_val != '')
		Hoi_xoa_nhom2(table,table2,table3,id,id_val,id2,id_val,$link,ten,ten2);
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