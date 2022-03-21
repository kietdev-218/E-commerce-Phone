
<div class="content-box">
<!-- Start Content Box -->
    <div class="content-box-header">
      <h3>{$title}</h3>
      <div style="width:200px; float:left; padding:10px 0">
        <input type="hidden" class="link" value="{$link}"/>
      </div>
      
      <h3 style="color:#F00; text-align:center; padding:10px 0"></h3>
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
                  {if isset($smarty.cookies.them_tag_xong)}
                    {$smarty.cookies.them_tag_xong}
                    {$m_common->del_cook('them_tag_xong')}
                   {/if}
             </h3>
             <h3 style="color:#00F; text-align:center; padding:10px 0; text-indent:10px">
                  {if isset($smarty.session.edit)}
                  <p style="color:#00F; font-weight:bold; font-size:20px">{$smarty.session.edit}</p>
                  {$m_common->del_sess('edit')}
                   {/if}
             </h3>
           {if count($tags) > 0}
           
    		<table id="bang">
              <thead>
                <tr>
                  <th><input class="check-all" type="checkbox" /></th>
                  <th>Mã số</th>
                  <th>Tên tag</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              {foreach $tags as $tag}
                <tr class="">
                  <th><input value="{$tag->stt}" class="chon_xoa" type="checkbox" /></th>
                  <th>{$tag->stt}</th>
                  <th><input value="{$tag->tag_name}" type="text" name="tag_name" class="tag_name"/></th>
                  <th> <!-- Icons --> 
                    <a href="javascript:Hoi_xoa('tag','stt',{$tag->stt},'{$link}','thẻ tag')" 
                    title="Delete"><img src="{$smarty.const.IMG_AD}/icons/cross.png" alt="Delete" /></a>
                    <a class="edit_tag" href="#" title="Edit"><img src="{$smarty.const.IMG_AD}/icons/pencil.png" alt="Edit" /></a>
                   </th>
                </tr>
                {/foreach}
                <tr>
                  <td colspan="4">
                      <div style="width:150px; margin:auto">
                          <input style="height:40px; cursor:pointer" onclick="xoa_nhieu('tag','stt','{$link}','thẻ tag')"
                          type="button" name="btn_xoa_sp" class="btn_xoa_sp" value="Xóa tag"/>
                       </div>
                    </td>
                </tr>
                <tr>
                  <td colspan="11"><div class="pages_list">{$lst}</div></td>
                </tr>
              </tbody>
              
              {include file="views/xl_ajax/v_script_phan_tu.tpl"}
            </table>
            <script>
			$('.edit_tag').each(function(index) {
                $('.edit_tag').eq(index).click(function(e){
					e.preventDefault();
					$stt = $('.chon_xoa').eq(index).val();
					$val = $('.tag_name').eq(index).val();
					if(confirm('Thay đổi tên thẻ tag ?'))
						window.location = 'edit_tag.php?stt='+$stt+'&val='+$val;
				})
            });
			</script>
			{else}
				<h3 style="padding:20px 0">Không tìm thấy</h3>
			{/if}
            <div>
            	<h3 style="padding:10px 0">Thêm tag</h3>
                <form name="frm_them_tag" method="post" action="">
                	tên tag: <input name="tag_name" value="{$m_common->show_value('','tag_name','')}" type="text" required="required"/>
                    <input type="submit" name="btn_them_tag" value="Thêm tag"/>
                    <p style="color:#F00; font-style:italic">{$m_san_pham->loi_cap_nhat_hang}</p>
                </form>
            </div>     
         </div> <!-- End #tab1 -->
     </div> <!-- End .content-box-content -->
</div>
