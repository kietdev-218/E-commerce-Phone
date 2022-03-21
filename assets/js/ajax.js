$(document).ready(function() {
    $('.link_sort').each(function(index) {
        $('.link_sort').eq(index).click(function(e){
			e.preventDefault();
			$('#nut_sort').text($(this).text());
			$sort =$('.kieu_sort').eq(index).val();
			$input_products = $('#input_products').val();
			//alert($('.kieu_sort').eq(index).val());
			var form_data = {
              kieu_sort_filter:$sort,input_products:$input_products
            };
			
			
			
			$.ajax({
				url: "xl_sap_xep_loc_san_pham.php",
				type: 'POST',
				data: form_data,
				success: function(data) {
						$("#wrap-search-result-container" ).html(data);
					  }
			});
		})
    });
	
	$('.link_filter').each(function(index) {
        $('.link_filter').eq(index).click(function(e){
			e.preventDefault();
			$('#nut_filter').text($(this).text());
			$filter =$('.kieu_filter').eq(index).val();
			$input_products = $('#input_products').val();
			//alert($('.kieu_sort').eq(index).val());
			var form_data = {
              kieu_sort_filter:$filter,input_products:$input_products
            };
			
			
			
			$.ajax({
				url: "xl_sap_xep_loc_san_pham.php",
				type: 'POST',
				data: form_data,
				success: function(data) {
						$("#wrap-search-result-container" ).html(data);
					  }
			});
		})
    });
	
	$('.container-nut-cart').each(function(index) {
    
		$('.container-nut-cart').eq(index).click(function(e){
			e.preventDefault();
			if($('.sl_dat_mua').eq(index).val()>0)
			{
				var $ma_san_pham = $('.gia_tri_ma_sp').eq(index).val();
				var $ten_san_pham = $('.ten_sp').eq(index).val();
				var $so_luong = $('.sl_dat_mua').eq(index).val();
				var $don_gia = $('.gia_sp').eq(index).val();
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
	
	$('.search-field').keypress(function(event)
	{
		var keycode = (event.keyCode ? event.keyCode : event.which);
		var gt_tim = $(this).val();
  		if (keycode == '13' && gt_tim !='' && gt_tim !=' ') {
    		$(location).attr('href','tim_kiem.php?keyword='+gt_tim)
  		}
	})
	
	$('.search-field').click(function(e)
	{
		e.stopPropagation();
		if($('#cont_combo_list_keyword').css('display') =='none')
		{
			$('#cont_combo_list_keyword').css('display','block')
		}
		else
		{
			$('#cont_combo_list_keyword').css('display','none')
		}
	})

	$('.search-field').keyup(function(){
		$('#cont_combo_list_keyword').css('display','block')
		var $gt_tim =$(this).val();
		var form_data = {
            gt_tim:$gt_tim
        };
			
			
			
		$.ajax({
		url: "xl_tim_sp.php",
		type: 'POST',
		data: form_data,
		success: function(data) {
			$( "#cont_combo_list_keyword" ).html(data);
			}
		});

	})
	$('.nut_tim').click(function(){
		var gt_tim = $('.search-field').val();
		
		if (gt_tim !='' && gt_tim !=' ') {
    		$(location).attr('href','tim_kiem.php?keyword='+gt_tim)
  		}
	})
	
	$('body').click(function(e){
		$('#cont_combo_list_keyword').css('display','none');
	})
	
/*	$('.nut_chap_nhan_danh_gia').click(function(e){
		e.stopPropagation();
		e.preventDefault();
		var $diem = $('#diem_danh_gia').val();
		var $ma_san_pham = $('.ma_san_pham').val();
		
		$('#lb_danh_gia_sp').empty();
		$('#lb_danh_gia_sp').css('display','none');
		$('#blackgreen').css('display','none');
		var form_data = {
				  diem:$diem,ma_san_pham:$ma_san_pham
			  };
		  $.ajax({
		  url: "xl_danh_gia.php",
		  type: 'POST',
		  data: form_data,
		  success: function(data) {
				  $( "#area_rating" ).html(data);
				}
		});
	
	})*/
})