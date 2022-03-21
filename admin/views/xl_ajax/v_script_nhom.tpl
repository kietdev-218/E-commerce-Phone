<script>
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
