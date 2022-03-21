
<div class="content-box">
<!-- Start Content Box -->
    <div class="content-box-header">
      <h3>{$title}</h3>
      <div style="width:200px; float:left; padding:10px 0">
      </div>
      
      <h3 style="color:#00F; text-align:center; padding:10px 0">
      {if isset($smarty.session.them_loai_xong)}
          {$smarty.session.them_loai_xong}
          {$m_common->del_sess(them_loai_xong)}
       {/if}
      </h3>
      <div style="clear:both"></div>
    </div>
    <!-- End .content-box-header -->
    
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
            <h3 style="color:#F00; text-align:center; padding:10px 0; text-indent:10px">
                  {if isset($smarty.session.kq_xoa_nhom)}
                  <p style="font-weight:bold; font-size:20px">{$smarty.session.kq_xoa_nhom}</p>
                  {$m_common->del_sess('kq_xoa_nhom')}
                   {/if}
              </h3>
            {if count($loai_bai_viets) > 0}
    		<table id="bang">
              <thead>
                <tr>
                  <th><input class="check-all" type="checkbox" /></th>
                  <th>Mã loại bài</th>
                  <th>Tên loại bài</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              {foreach $loai_bai_viets as $loai}
                <tr class="">
                  <th><input value="{$loai->ma_loai_bai}" class="chon_xoa" type="checkbox" /></th>
                  <th>{$loai->ma_loai_bai}</th>
                  <th><a href="ds_bai_viet.php?ma_loai_bai={$loai->ma_loai_bai}">{$loai->ten_loai_bai}</a></th>
                  <th> <!-- Icons --> 
                    <a href="javascript:Hoi_xoa_nhom('bai_viet','loai_bai_viet','ma_loai_bai',{$loai->ma_loai_bai},'{$link}','loại bài','bài viết')" 
                    title="Delete"><img src="{$smarty.const.IMG_AD}/icons/cross.png" alt="Delete" /></a>
                    
                    <a href="cap_nhat_loai_bai_viet.php?ma_loai_bai={$loai->ma_loai_bai}" title="Edit"><img src="{$smarty.const.IMG_AD}/icons/pencil.png" alt="Edit" /></a>
                    </th>
                </tr>
                {/foreach}
                <tr>
                  <td colspan="10">
                      <div style="width:150px; margin:auto">
                          <input style="height:40px; cursor:pointer" onclick="xoa_nhieu_nhom('bai_viet','loai_bai_viet','ma_loai_bai','{$link}','loại bài','bài viết')"
                          type="button" name="btn_xoa_sp" class="btn_xoa_sp" value="Xóa loại"/>
                        </div>
                    </td>
                </tr>
                <tr>
                  <td colspan="10"><div class="pages_list"></div></td>
                </tr>
              </tbody>
              
              {include file="views/xl_ajax/v_script_nhom.tpl"}
            </table>
				{else}
				<h3 style="padding:20px 0">Không tìm thấy loại bài viết nào</h3>
				{/if}     
         </div> <!-- End #tab1 -->
     </div> <!-- End .content-box-content -->
</div>
