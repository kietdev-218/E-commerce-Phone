<script>
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
</script>