<?php /* Smarty version Smarty-3.1.18, created on 2018-04-05 14:28:42
         compiled from "views\script_xl_gio_hang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:415459fc84ea5cf530-39451914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd18e7bec90f674ca6a2020d1c46e9863017ba533' => 
    array (
      0 => 'views\\script_xl_gio_hang.tpl',
      1 => 1509723262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '415459fc84ea5cf530-39451914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_59fc84ea5e0de9_49577811',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fc84ea5e0de9_49577811')) {function content_59fc84ea5e0de9_49577811($_smarty_tpl) {?><script>

$('#xoa_gio_hang').click(function(e){
	e.preventDefault();
	$('.value').html('Trống');
	$('.basket-item-count').remove();
	var form_data = {
           
    };
			
	$.ajax({
  		url: "xl_xoa_gio_hang.php",
		type: 'POST',
  		data: form_data,
		success: function(data) {
			$(".body-content .container").html(data);
		}
	});

})

$('#cap_nhat_gio_hang').click(function(e){
	
function number_format( number, decimals, dec_point, thousands_sep ) {
                              
    var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
    var d = dec_point == undefined ? "," : dec_point;
    var t = thousands_sep == undefined ? "." : thousands_sep, s = n < 0 ? "-" : "";
    var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
                              
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d<?php echo 3;?>
)(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
}
	
	e.preventDefault();
		var tong_so = 0;
		var tong_gia = 0
		var dem_so_hang = $('.gia_tri_so_luong').length;
		
		var mang_hang_xoa = [];
		var mang_so_luong =[];
		var count_xoa_hang = $('.xoa_hang').filter(':checked').length;
		
		for(var j=0; j<dem_so_hang;j++)
		{
			if($('.xoa_hang').eq(j).is(":not(:checked)") && parseFloat($('.gia_tri_so_luong').eq(j).val()) >0 && $('.gia_tri_so_luong').eq(j).val() !='' )
			{
				mang_so_luong.push(parseFloat($('.gia_tri_so_luong').eq(j).val()));
				tong_so += parseFloat($('.gia_tri_so_luong').eq(j).val());
				tong_gia += parseFloat($('.gia_tri_so_luong').eq(j).val())*parseFloat($('.gia_sp').eq(j).val());
			}
			else
			{
				mang_hang_xoa.push($('.xoa_hang').eq(j).val());
			}
		}
		var tong_gia_format = number_format( tong_gia, 0, ',', '.' )
		$('.value').html(tong_gia_format+' Đ');
		$('.count').html('('+tong_so+')');
		$('.dropdown-menu-cart').remove();
		
		var form_data = {
                    mang_hang_xoa:mang_hang_xoa.join('-'),mang_so_luong:mang_so_luong.join('-')
         };
			
			$.ajax({
  			url: "xl_cap_nhat_gio_hang.php",
			type: 'POST',
  			data: form_data,
			success: function(data) {
					$(".body-content .container").html(data);
				}
			});
	})
</script><?php }} ?>
