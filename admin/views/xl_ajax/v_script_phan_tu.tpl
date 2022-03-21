<script>
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
