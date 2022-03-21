// JavaScript Document
function sua_tin_tuc(ma_tin)
{
	$(".content-box-tabs li a").each(function() {
        
		if($(this).attr("href")=="#tab2")
		{
			$(this).click();
		}
    });
	// 
		var $key=ma_tin;
		var form_data = {
				id:  $key
				};
		$.ajax({
					url:"tintuc.php",
                    type: 'POST',
                    async: false,
                    data:form_data,
					error: function(){
						alert("error");
						},
						
					
				});
	
}