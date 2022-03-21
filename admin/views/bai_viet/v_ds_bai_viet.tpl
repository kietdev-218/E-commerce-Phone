
<div class="content-box">
<!-- Start Content Box -->
    <div class="content-box-header">
      <h3>{$title}</h3>
      <div style="width:200px; float:left; padding:10px 0">
        <input name="thanh_tim" type="text" id="thanh_tim" placeholder="Nhập tên bài viết"/>
        {include file="views/input/v_input3.tpl"}
      </div>
      
      <h3 style="color:#00F; text-align:center; padding:10px 0">
      {if isset($smarty.session.them_bai_xong)}
          {$smarty.session.them_bai_xong}
          {$m_common->del_sess(them_bai_xong)}
       {/if}
      </h3>
      <div style="clear:both"></div>
    </div>
    <!-- End .content-box-header -->
    
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
        	<div style="padding:12px">
            
            {if count($ds_loai_bai) > 0}
              <label style="font-weight:bold; font-size:16px">Loại bài viết:</label> 
              <select class="ds_loai" id="ma_loai_bai">
              <option class="loai_bai" value="">Tất cả</option>
              {foreach $ds_loai_bai as $i}
                  <option class="loai_bai" value="{$i->ma_loai_bai}" {$m_common->selected('ma_loai_bai',$i->ma_loai_bai)}>
                  {$i->ten_loai_bai}
                  </option>
               {/foreach}
              </select>
              {/if}
             
            </div>
            <h3 style="color:#F00; text-align:center; padding:10px 0; text-indent:10px">
                  {if isset($smarty.session.kq_xoa)}
                  <p style="font-weight:bold; font-size:20px">{$smarty.session.kq_xoa}</p>
                  {$m_common->del_sess('kq_xoa')}
                   {/if}
              </h3>
            {if count($bai_viets) > 0}
    		<table id="bang">
              <thead>
                <tr>
                  <th><input class="check-all" type="checkbox" /></th>
                  <th>Mã bài viết</th>
                  <th>Tên bài viết</th>
                  <th>Loại</th>
                  <th>Nội dung tóm tắt</th>
                  <th>Người đăng</th>
                  <th>Ngày đăng</th>
                  <th>Hình</th>
                  <th>Lượt xem</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              {foreach $bai_viets as $bv}
                <tr class="">
                  <th><input value="{$bv->ma_bai_viet}" class="chon_xoa" type="checkbox" /></th>
                  <th>{$bv->ma_bai_viet}</th>
                  <th>{$bv->ten_bai_viet}</th>
                  <th><a href="ds_bai_viet.php?ma_loai_bai={$bv->ma_loai_bai}">{$m_bai_viet->xd_loai_bv($bv->ma_loai_bai)}</a></th>
                  <th>{$bv->noi_dung_tom_tat}</th>
                  <th>
                  {if !empty($m_common->select_single_id('nguoi_dung','ma_nguoi_dung',$bv->ma_nguoi_dung))}
                  {$m_common->select_single_id('nguoi_dung','ma_nguoi_dung',$bv->ma_nguoi_dung)->ten_dang_nhap}
                  {else}
                  user
                  {/if}
                  </th>
                  <th>{date('d-m-Y',strtotime($bv->ngay_dang))}</th>
                  <th><img width="100px" src="{$smarty.const.IMG}/news/{$bv->hinh}"/></th>
                  <th>{$bv->luot_xem}</th>
                  <th> <!-- Icons --> 
                    <a href="javascript:Hoi_xoa('bai_viet','ma_bai_viet',{$bv->ma_bai_viet},'{$link}','bài viết')" 
                    title="Delete"><img src="{$smarty.const.IMG_AD}/icons/cross.png" alt="Delete" /></a>
                    
                    <a href="cap_nhat_bai_viet.php?ma_bai_viet={$bv->ma_bai_viet}" title="Edit"><img src="{$smarty.const.IMG_AD}/icons/pencil.png" alt="Edit" /></a>
                    <a href="../bt_{thu_vien::bo_dau($bv->ten_bai_viet)}.{$bv->ma_bai_viet}.html" title="Xem chi tiết"><img src="{$smarty.const.IMG_AD}/icons/view-details.png" width="16px"/></a>
                    </th>
                </tr>
                {/foreach}
                <tr>
                  <td colspan="10">
                      <div style="width:150px; margin:auto">
                          <input style="height:40px; cursor:pointer" onclick="xoa_nhieu('bai_viet','ma_bai_viet','{$link}','bài viết')"
                          type="button" name="btn_xoa_sp" class="btn_xoa_sp" value="Xóa bài"/>
                        </div>
                    </td>
                </tr>
                <tr>
                  <td colspan="10"><div class="pages_list">{$lst}</div></td>
                </tr>
              </tbody>
              
              {include file="views/xl_ajax/v_script_phan_tu.tpl"}
            </table>
            {include file="views/xl_ajax/v_script_tim_2.tpl"}

				{else}
				<h3 style="padding:20px 0">Không tìm thấy bài viết nào</h3>
				{/if}     
         </div> <!-- End #tab1 -->
     </div> <!-- End .content-box-content -->
</div>
