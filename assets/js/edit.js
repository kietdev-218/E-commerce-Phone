$(document).ready(function() {
//blackgreen light box
var wid_lightbox = $('.light-box').width();
var hei_lightbox = $('.light-box').height();
var left_lightbox = ($(window).width()-wid_lightbox)/2;
$('.light-box').css('left',left_lightbox);

var wid_lightbox_danh_gia = $('#lb_danh_gia_sp').width();
var hei_lightbox_danh_gia = $('#lb_danh_gia_sp').height();
var left_lightbox_danh_gia = ($(window).width()-wid_lightbox_danh_gia)/2;
$('#lb_danh_gia_sp').css('left',left_lightbox_danh_gia);

$('#blackgreen').click(function(){
	$('.noi_dung_canh_bao').empty();
	$(this).css('display','none');
	$('.light-box').css('display','none');
});

$('.dau_X').click(function(){
	$('.noi_dung_canh_bao').empty();
	$('#blackgreen').css('display','none');
	$('.light-box').css('display','none');
});

$('.cancel').click(function(){
	$('.noi_dung_canh_bao').empty();
	$('.light-box').css('display','none');
	$('#blackgreen').css('display','none');
	
	$('#diem_danh_gia').val(0);
})

$('.thexoa').each(function(index) {
  	$('.thexoa').eq(index).click(function(e){
		e.preventDefault();
		$('#canh_bao_xoa').css('display','block');
		$('#blackgreen').css('display','block');
			var username_col = $('.username_val').eq(index).text();
			var link_xoa = $('.thexoa').eq(index).attr('href');
			var canh_bao = 'Bạn muốn xóa <span class=' + "ten_xoa" +'>' + username_col+'</span> ?';
			$('#canh_bao_xoa .noi_dung_canh_bao').prepend(canh_bao);
			$('.the-nut-xoa').attr('href',link_xoa);
	})  
});

$(window).resize(function(){
	wid_lightbox = $('.light-box').width();
	hei_lightbox = $('.light-box').height();
	left_lightbox = ($(window).width()-wid_lightbox)/2;
	$('.light-box').css('left',left_lightbox);
	
	wid_lightbox_danh_gia = $('#lb_danh_gia_sp').width();
	hei_lightbox_danh_gia = $('#lb_danh_gia_sp').height();
	left_lightbox_danh_gia = ($(window).width()-wid_lightbox_danh_gia)/2;
	$('#lb_danh_gia_sp').css('left',left_lightbox_danh_gia);

});
//end blackgreen light box

//đánh giá sp
$('#khachhang-danh-gia .star-null').each(function(index) {
    $('#khachhang-danh-gia .star-null').eq(index).hover(function(){
		for(var i=0; i<=index; i++)
		{
			$('#khachhang-danh-gia .star-null').eq(i).css({'background-position':'0 -16px','background-size':'cover','background-repeat':'no-repeat'});
		}
	},
	function(){
		$(this).css({'background-size':'cover','background-position':'0px 0px','background-repeat':'no-repeat'});
	});
	
	$('#khachhang-danh-gia .star-null').eq(index).click(function(){
		
		$('#lb_danh_gia_sp .star-yel').css('width',16*(index+1));
		$('#diem_danh_gia').val(index+1);
		$('#blackgreen').css('display','block');
		$('#lb_danh_gia_sp').css('display','block');
	})
	
});

//end đánh giá sp
	$('#khachhang-danh-gia').mouseleave(function(){
		$('#khachhang-danh-gia .star-null').css({'background-size':'cover','background-position':'0px 0px','background-repeat':'no-repeat'});
	});
})