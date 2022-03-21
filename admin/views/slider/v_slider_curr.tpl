{if count($slider) >0}
<div class="container-hinhphu">
  {foreach $slider as $hinh}
    <div class="cont-img">
        <div class="box-img">
        <img src="../assets/images/sliders/{$hinh->hinh}"/>
        </div>
        <div style="padding:10px 0; text-align:center">
        {if $v == 1}
            <input class="id_hinh" type="hidden" value="{$hinh->id}"/>
            <input class="vi_tri_ht" type="hidden" value="{$hinh->vi_tri}"/>
            <label>Vị trí: </label>
            <select class="vi_tri_hinh" name="vi_tri">
            {for $i=1 to count($slider)}
                <option class="op_vi_tri" value="{$i}" {if $i==$hinh->vi_tri}selected{/if}>
                {$i}
                </option>
             {/for}
            </select>
          {else}
            <label>Loại ra: <input class="id_hinh" type="checkbox" value="{$hinh->id}" name="id_hinh[]"/></label>
          {/if}
         </div>
    </div>
    {/foreach}
    <div class="clear"></div>
    {if $v != 1}
    	<div style="text-align:center"><input id="btn_slider" type="submit" name="btn_slider" value="Cập nhật"/></div>
        <script>
		$('#btn_slider').click(function(e){
			var count_chon_xoa = $('.id_hinh').filter(':checked').length;
			var mang_chon_xoa = [];
			
			for(var i = 0; i<count_chon_xoa; i++)
			{
				var val = $('.id_hinh').filter(':checked').eq(i).val();
				mang_chon_xoa.push(val);
			}
			var id_val = mang_chon_xoa.join();
			if(id_val == '')
			{
				e.preventDefault();
				alert('Hãy chọn hình cần loại ra');
			}
		})
        </script>
    {/if}
  </div>
  {include file="views/xl_ajax/v_script_sx_slider.tpl"}
{else}
<h3 style="padding:20px 0">Không tìm thấy hình ảnh nào</h3>
{/if}