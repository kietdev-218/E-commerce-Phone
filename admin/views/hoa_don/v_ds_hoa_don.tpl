<div class="content-box">
<!-- Start Content Box -->
    <div class="content-box-header">
      <h3>{$title}</h3>
      <div style="width:200px; float:left; padding:10px 0">
        <input name="thanh_tim" type="text" id="thanh_tim" placeholder="Nhập mã hóa đơn"/>
        {include file="views/input/v_input.tpl"}
      </div>
      
      <h3 style="color:#F00; text-align:center; padding:10px 0"></h3>
      <div style="clear:both"></div>
    </div>
    <!-- End .content-box-header -->
    
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
            <h3 style="color:#F00; text-align:center; padding:10px 0; text-indent:10px">
                  {if isset($smarty.session.kq_xoa_nhom2)}
                  <p style="color:#00F; font-weight:bold; font-size:20px">{$smarty.session.kq_xoa_nhom2}</p>
                  {$m_common->del_sess('kq_xoa_nhom2')}
                   {/if}
              </h3>
              <h3 style="color:#F00; text-align:center; padding:10px 0; text-indent:10px">
                  {if isset($smarty.session.kq_xoa)}
                  <p style="color:#00F; font-weight:bold; font-size:20px">{$smarty.session.kq_xoa}</p>
                  {$m_common->del_sess('kq_xoa')}
                   {/if}
              </h3>
            {if count($hoa_dons)>0}
            <table id="bang">
              <thead>
                <tr>
                  <th><input class="check-all" type="checkbox" /></th>
                  <th>Mã hóa đơn</th>
                  <th>Ngày đặt hàng</th>
                  <th>Mã khách hàng</th>
                  <th>Trị giá</th>
                  <th>Trạng thái</th>
                </tr>
              </thead>
              <tbody>
              {foreach $hoa_dons as $hd}
                <tr class="{$m_hoa_don->trang_trai_hd($hd->ma_hoa_don,1)}">
                  <td><input value="{$hd->ma_hoa_don}" class="chon_xoa" type="checkbox" /></td>
                  <td>{$hd->ma_hoa_don}</td>
                  <td>{date('d-m-Y',strtotime($hd->ngay_dat_hang))}</td>
                  <td>{$hd->ma_khach_hang}</td>
                  <td>{number_format($hd->tong_tien,0,',','.')} Đ</td>
                  <td>{$m_hoa_don->trang_trai_hd($hd->ma_hoa_don)}</td>
                  <td><!-- Icons --> 
                    <a href="javascript:Hoi_xoa_nhom2('khach_hang','hoa_don','chi_tiet_hoa_don','ma_khach_hang',{$hd->ma_khach_hang},'ma_hoa_don',{$hd->ma_hoa_don},'{$link}','hóa đơn','khách hàng')" title="Delete"><img src="images/icons/cross.png" alt="Delete" /></a> <a href="ct_hoa_don.php?ma_hoa_don={$hd->ma_hoa_don}" title="Xem chi tiết"><img src="images/icons/view-details.png" width="16px"/></a></td>
                </tr>
                {/foreach}
                <tr>
                  <td colspan="6"><div style="width:150px; margin:auto">
                      <input style="height:40px; cursor:pointer" onclick="xoa_nhieu_nhom2('khach_hang','hoa_don','chi_tiet_hoa_don','ma_khach_hang','ma_hoa_don','{$link}','hóa đơn','khách_hang')"
                          type="button" name="btn_xoa_sp" class="btn_xoa_sp" value="Xóa hóa đơn"/>
                    </div></td>
                </tr>
                <tr>
                  <td colspan="6"><div class="pages_list">{$lst}</div></td>
                </tr>
              </tbody>
              {include file="views/xl_ajax/v_script_nhom.tpl"}
            </table>
            {include file='views/xl_ajax/v_script_tim.tpl'}
				{else}
				<h3 style="padding:20px 0">Không tìm thấy hóa đơn nào</h3>
				{/if}
         </div> <!-- End #tab1 -->
     </div> <!-- End .content-box-content -->
</div>
