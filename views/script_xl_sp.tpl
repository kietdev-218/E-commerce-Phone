<script>
  $('.btn-xemthem').click(function(){
	  $input_products_2 = $('#input_products_2').val();
	  $sl_sp = $('#sl_sp').val();
	  
	  var form_data = {
		  input_products_2:$input_products_2,sl_sp:$sl_sp
	  }
	  $.ajax({
		  url:"xl_xem_them_sp.php",
		  type:'POST',
		  data:form_data,
		  success: function(data) {
			  $("#wrap-search-result-container" ).html(data);
		  }
	  });
  })
  
  $('.container-nut-cart-ajax').each(function(index) {
    
		$('.container-nut-cart-ajax').eq(index).click(function(e){
			e.preventDefault();
			if($('.sl_dat_mua-ajax').eq(index).val()>0)
			{
				var $ma_san_pham = $('.gia_tri_ma_sp-ajax').eq(index).val();
				var $ten_san_pham = $('.ten_sp-ajax').eq(index).val();
				var $so_luong = $('.sl_dat_mua-ajax').eq(index).val();
				var $don_gia = $('.gia_sp-ajax').eq(index).val();
				var thong_bao_them_hang = 'Bạn đã thêm vào giỏ hàng:<br/><label style="color:#09F; font-weight:bold; font-size:18px">'+$ten_san_pham+'</label><br/> Số lượng: <label style="color:#F00; font-weight:bold">'+$so_luong+'</label> .';
				$('#lightbox-cart .in-content-lightbox').html(thong_bao_them_hang);
				$('#blackgreen').css('display','block');
				$('#lightbox-cart').css('display','block');
				
				var form_data = {
						ma_san_pham:$ma_san_pham,ten_san_pham:$ten_san_pham,so_luong:$so_luong,don_gia:$don_gia
				 };
				
				$.ajax({
				url: "xl_them_gio_hang.php",
				type: 'POST',
				data: form_data,
				success: function(data) {
						$( "#container-cart-header" ).html(data);
					}
				});
			}
			else
			{
				alert('Hãy chọn số lượng hợp lệ');
			}
		})
	});
  </script>