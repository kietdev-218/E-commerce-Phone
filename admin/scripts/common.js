$(document).ready(function(e) {
	$('.ds_loai').change(function(){
		var url = $(location).attr('pathname');
		var id = $(this).attr('id');
		if($(this).val() != '')
			$(location).attr('href',url+'?'+id+'='+$(this).val()); 
		else
			$(location).attr('href',url);
	})
	
});
function xoa_hinh(table,col,id,id_val,tenhinh,$link){
	if(confirm('Bạn muốn xóa hình này ?'))
	{
		window.location = 'xoa_hinh.php?table='+table+'&col='+col+'&id='+id+'&id_val='+id_val+'&tenhinh='+tenhinh+'&link='+$link;
	}
}
