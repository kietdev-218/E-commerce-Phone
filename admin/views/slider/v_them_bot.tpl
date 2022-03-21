
<div class="content-box">
<!-- Start Content Box -->
    <div class="content-box-header">
      <h3>{$title}</h3>
      
      <div style="clear:both"></div>
    </div>
    <!-- End .content-box-header -->
    
    <div class="content-box-content">
    <h3 style="color:#00F">Slider hiện tại</h3>
        <div class="tab-content default-tab" id="tab1">
        <p>Hình ảnh trong slider cần có tỷ lệ khung hình bằng nhau để slider được đều</p>
        <form name="frm_slider" method="post">
            {include file="views/slider/v_slider_curr.tpl"}
         </form>
         <br /><hr />
         <h3 style="padding:15px 0; color:#00F">Hình ảnh ngoài slider</h3>
         <form name="frm_them_slider" method="post">
         {if count($hinh_ngoai_slider) >0}
            <div class="container-hinhphu">
              {foreach $hinh_ngoai_slider as $h}
                <div class="cont-img">
                    <div class="box-img">
                    <img src="../assets/images/sliders/{$h->hinh}"/>
                    </div>
                    <div style="padding:10px 0; text-align:center">                   
                        <label>Chọn: <input class="id_hinh2" type="checkbox" value="{$h->id}" name="id_hinh2[]"/></label>
                     </div>
                </div>
                {/foreach}
                <div class="clear"></div>
                
                    <div style="text-align:center"><input id="btn_them_slider" type="submit" name="btn_them_slider" value="Thêm vào slider"/></div>
                    <script>
                    $('#btn_them_slider').click(function(e){
                        var count_chon_xoa2 = $('.id_hinh2').filter(':checked').length;
                        var mang_chon_xoa2 = [];
                        
                        for(var i = 0; i<count_chon_xoa2; i++)
                        {
                            var val = $('.id_hinh2').filter(':checked').eq(i).val();
                            mang_chon_xoa2.push(val);
                        }
                        var id_val2 = mang_chon_xoa2.join();
                        if(id_val2 == '')
                        {
                            e.preventDefault();
                            alert('Hãy chọn hình cần thêm');
                        }
                    })
                    </script>
                
              </div>
        {else}
        <h3 style="padding:20px 0">Không tìm thấy hình ảnh nào</h3>
        {/if}
        </form>
         </div> <!-- End #tab1 -->
     </div> <!-- End .content-box-content -->
</div>
