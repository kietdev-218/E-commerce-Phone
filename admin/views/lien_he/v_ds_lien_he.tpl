<div class="content-box">
<!-- Start Content Box -->
    <div class="content-box-header">
      <h3>{$title}</h3>
      <h3 style="color:#F00; text-align:center; padding:10px 0"></h3>
      <div style="clear:both"></div>
    </div>
    <!-- End .content-box-header -->
    
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
              <h3 style="color:#F00; text-align:center; padding:10px 0; text-indent:10px">
                  {if isset($smarty.session.kq_xoa)}
                  <p style="color:#00F; font-weight:bold; font-size:20px">{$smarty.session.kq_xoa}</p>
                  {$m_common->del_sess('kq_xoa')}
                   {/if}
              </h3>
            {if count($ds_lien_he)>0}
            <table id="bang">
              <thead>
                <tr>
                  <th><input class="check-all" type="checkbox" /></th>
                  <th>Mã liên hệ</th>
                  <th>Người gửi</th>
                  <th>Điện thoại</th>
                  <th>Email</th>
                  <th>Tiêu đề</th>
                  <th>Nội dung</th>
                  <th>Ngày gửi</th>
                  <th>Trạng thái</th>
                </tr>
              </thead>
              <tbody>
              {foreach $ds_lien_he as $lh}
                <tr class="{$m_lien_he->trang_trai_lh($lh->ma_lien_he,1)}">
                  <td><input value="{$lh->ma_lien_he}" class="chon_xoa" type="checkbox" /></td>
                  <td>{$lh->ma_lien_he}</td>
                  <td>{$lh->ten_nguoi_gui}</td>
                  <td>{$lh->dien_thoai}</td>
                  <td>{$lh->email}</td>
                  <td>{$lh->tieu_de}</td>
                  <td>{$lh->noi_dung}</td>
                  <td>{date('d-m-Y',strtotime($lh->ngay_gui))}</td>
                  <td>{$m_lien_he->trang_trai_lh($lh->ma_lien_he)}</td>
                  <td><!-- Icons --> 
                    <a href="javascript:Hoi_xoa('lien_he','ma_lien_he',{$lh->ma_lien_he},'{$link}','liên hệ')" title="Delete"><img src="images/icons/cross.png" alt="Delete" /></a> <a href="xem_lien_he.php?ma_lien_he={$lh->ma_lien_he}" title="Xem chi tiết"><img src="images/icons/view-details.png" width="16px"/></a></td>
                </tr>
                {/foreach}
                <tr>
                  <td colspan="9"><div style="width:150px; margin:auto">
                      <input style="height:40px; cursor:pointer" onclick="xoa_nhieu('lien_he','ma_lien_he','{$link}','liên hệ')"
                          type="button" name="btn_xoa_sp" class="btn_xoa_sp" value="Xóa liên hệ"/>
                    </div></td>
                </tr>
                <tr>
                  <td colspan="9"><div class="pages_list">{$lst}</div></td>
                </tr>
              </tbody>
              {include file="views/xl_ajax/v_script_phan_tu.tpl"}
            </table>
				{else}
				<h3 style="padding:20px 0">Không tìm thấy liên hệ nào</h3>
				{/if}
         </div> <!-- End #tab1 -->
     </div> <!-- End .content-box-content -->
</div>
