$(document).ready(function(e) {
	function lien_he_moi()
	{
		var form_data = {
			
		};

		$.ajax({
		url: "xl_cap_nhat_lien_he.php",
		type: 'POST',
		data: form_data,
		success: function(data) {
			$( "#lien-he-moi" ).html(data);
			}
		});
	}
	
	setInterval(lien_he_moi,3000)
	
	function hoa_don_moi()
	{
		var form_data = {
			
		};

		$.ajax({
		url: "xl_cap_nhat_hoa_don.php",
		type: 'POST',
		data: form_data,
		success: function(data) {
			$( "#hoa_don_moi" ).html(data);
			}
		});
	}
	
	setInterval(hoa_don_moi,3000)
});