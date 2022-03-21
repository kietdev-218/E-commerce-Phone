<script>
$('.vi_tri_hinh').each(function(index) {
	$('.vi_tri_hinh').eq(index).change(function(){
		var $vi_tri_ht = $('.vi_tri_ht').eq(index).val();
		var $vi_tri_moi = $('.vi_tri_hinh').eq(index).val();
		var $id = $('.id_hinh').eq(index).val();
		
		var form_data = {
			vi_tri_ht:$vi_tri_ht,vi_tri_moi:$vi_tri_moi,id:$id
		};
	
		$.ajax({
		url: "ajax_sap_xep_slider.php",
		type: 'POST',
		data: form_data,
		success: function(data) {
			$("#tab1").html(data);
			}
		});
	})
});
</script>