
<div class="content-box">
<!-- Start Content Box -->
    <div class="content-box-header">
      <h3>{$title}</h3>
      
      <div style="clear:both"></div>
    </div>
    <!-- End .content-box-header -->
    
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
        
            <h3 style="color:#F00; text-align:center; padding:10px 0; text-indent:10px">
                  {if isset($smarty.session.kq_xoa)}
                  <p style="font-weight:bold; font-size:20px">{$smarty.session.kq_xoa}</p>
                  {$m_common->del_sess('kq_xoa')}
                   {/if}
              </h3>
              <h3 style="color:#00F; text-align:center; padding:10px 0; text-indent:10px">
                  {if isset($smarty.cookies.them_hinh_xong)}
                  {$smarty.cookies.them_hinh_xong}
                  {$m_common->del_cook('them_hinh_xong')}
                   {/if}
              </h3>
            
            {if count($ds_hinh) >0}
            <p>Những hình ảnh có vị trí 0 là những hình không hiển thị trong slider. Hình ảnh trong slider cần có tỷ lệ khung hình bằng nhau để slider được đều</p>
    		<table id="bang">
              <thead>
                <tr>
                  <th><input class="check-all" type="checkbox" /></th>
                  <th>id</th>
                  <th>Tên hình</th>
                  <th>Vị trí</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              {foreach $ds_hinh as $hinh}
                <tr class="">
                  <th><input value="{$hinh->id}" class="chon_xoa" type="checkbox" /></th>
                  <th>{$hinh->id}</th>
                  <th><img  width="100px" src="{$smarty.const.IMG}/sliders/{$hinh->hinh}"/></th>
                  <th>{$hinh->vi_tri}</th>
                  <th> <!-- Icons --> 
                    <a href="javascript:Hoi_xoa_hinh_sli({$hinh->id})" 
                    title="Delete"><img src="{$smarty.const.IMG_AD}/icons/cross.png" alt="Delete" /></a>
                    </th>
                </tr>
                {/foreach}
                <tr>
                  <td colspan="5">
                      <div style="width:150px; margin:auto">
                          <input style="height:40px; cursor:pointer" onclick="xoa_nhieu_hinh_sli()"
                          type="button" name="btn_xoa_sp" class="btn_xoa_sp" value="Xóa hình"/>
                        </div>
                    </td>
                </tr>
                <tr>
                  <td colspan="5"><div class="pages_list">{$lst}</div></td>
                </tr>
              </tbody>
            </table>
<script>
function Hoi_xoa_hinh_sli(id)
{
	if(confirm("Bạn muốn xóa hình này ?"))
	{
		window.location='xoa_hinh_slider.php?id='+id;	
	}	
}

function xoa_nhieu_hinh_sli(){
	var count_chon_xoa = $('.chon_xoa').filter(':checked').length;
	var mang_chon_xoa = [];
	
	for(var i = 0; i<count_chon_xoa; i++)
	{
		var val = $('.chon_xoa').filter(':checked').eq(i).val();
		mang_chon_xoa.push(val);
	}
	var id = mang_chon_xoa.join();
	if(id != '')
		Hoi_xoa_hinh_sli(id);
	else
		alert('Hãy chọn những hình cần xóa');
}

$('.check-all').click(
	function(){
		$(this).parent().parent().parent().parent().find("input[type='checkbox']").attr('checked', $(this).is(':checked'));   
	}
);
</script>

            {else}
            <h3 style="padding:20px 0">Không tìm thấy hình ảnh nào</h3>
			{/if}
            <h3 style="text-align:center; padding:10px 0">Thêm hình vào danh sách</h3>
            <form name="frm_them_hinh" method="post" enctype="multipart/form-data">
            
            <strong>Thêm hình: </strong><input type="file" name="hinh[]" value="" multiple="multiple"/><br />
            <p>(Có thể thêm nhiều hình, định dạng phải là jpg,jpeg,bmp,png ; kích thước không quá 4mb)</p>
            <strong>Đưa vào slider: </strong><label>Có <input type="radio" name="gt" value="1" checked="checked"/></label>
            <label>Không <input type="radio" name="gt" value="0"/></label>
            <p style="color:#F00; font-style:italic">{$m_slider->loi_up_hinh}</p>
            <div style="padding:10px 0"><input type="submit" name="btn_them_hinh" value="Thêm"/></div>
            </form>
         </div> <!-- End #tab1 -->
     </div> <!-- End .content-box-content -->
</div>
