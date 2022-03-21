$(document).ready(function(e) {
   $('.container-thumb div').each(function(index) {
    	$('.container-thumb div').eq(index).click(function(){
			if($(this).attr('class') != 'item-thumb-act')
			{
				$('.item-thumb-act').attr('class','item-thumb');
				$(this).attr('class','item-thumb-act');
				
				$('.item-big-act').attr('class','item-big').fadeOut('fast',function(){
					$('.container-big-img div').eq(index).fadeIn('fast').attr('class','item-big-act')
				});
			}
		})
	});  
})