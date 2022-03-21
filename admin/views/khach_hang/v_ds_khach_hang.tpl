
<div class="content-box">
<!-- Start Content Box -->
    <div class="content-box-header">
      <h3>{$title}</h3>
      <div style="width:200px; float:left; padding:10px 0">
        <input name="thanh_tim" type="text" id="thanh_tim" placeholder="Nhập tên khách hàng"/>
        {include file="views/input/v_input.tpl"}
      </div>
      
      <h3 style="color:#F00; text-align:center; padding:10px 0"></h3>
      <div style="clear:both"></div>
    </div>
    <!-- End .content-box-header -->
    
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
            <h3 style="color:#F00; text-align:center; padding:10px 0; text-indent:10px">
                  {if isset($smarty.session.kq_xoa_nhom)}
                  <p style="color:#00F; font-weight:bold; font-size:20px">{$smarty.session.kq_xoa_nhom}</p>
                  {$m_common->del_sess('kq_xoa_nhom')}
                   {/if}
              </h3>
            {if count($ds_khach_hang) >0}
    		<table id="bang">
              <thead>
                <tr>
                  <th><input class="check-all" type="checkbox" /></th>
                  <th>Mã khách hàng</th>
                  <th>Tên khách hàng</th>
                  <th>Giới tính</th>
                  <th>Địa chỉ</th>
                  <th>Điện thoại</th>
                  <th>email</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              {foreach $ds_khach_hang as $kh}
                <tr class="">
                  <th><input value="{$kh->ma_khach_hang}" class="chon_xoa" type="checkbox" /></th>
                  <th>{$kh->ma_khach_hang}</th>
                  <th>{$kh->ten_khach_hang}</th>
                  <th><img src="images/icons/{$kh->gioi_tinh}.png" width="25px"/></th>
                  <th>{$kh->dia_chi}</th>
                  <th>{$kh->dien_thoai}</th>
                  <th>{$kh->email}</th>
                  <th> <!-- Icons --> 
                    <a href="javascript:Hoi_xoa_nhom('khach_hang','hoa_don','ma_khach_hang',{$kh->ma_khach_hang},'{$link}','khách hàng','hóa đơn')" 
                    title="Delete"><img src="{$smarty.const.IMG_AD}/icons/cross.png" alt="Delete" /></a>
                    <a href="" title="Xem chi tiết"><img src="{$smarty.const.IMG_AD}/icons/view-details.png" width="16px"/></a>
                    </th>
                </tr>
                {/foreach}
                <tr>
                  <td colspan="7">
                      <div style="width:150px; margin:auto">
                          <input style="height:40px; cursor:pointer" onclick="xoa_nhieu_nhom('khach_hang','hoa_don','ma_khach_hang','{$link}','khách hàng','hóa đơn')"
                          type="button" name="btn_xoa_sp" class="btn_xoa_sp" value="Xóa khách hàng"/>
                        </div>
                    </td>
                </tr>
                <tr>
                  <td colspan="11"><div class="pages_list">{$lst}</div></td>
                </tr>
              </tbody>
              
              {include file='views/xl_ajax/v_script_nhom.tpl'}
            </table>
            {include file='views/xl_ajax/v_script_tim.tpl'}
				{else}
				<h3 style="padding:20px 0">Không tìm thấy khách hàng nào</h3>
				 {/if}   
         </div> <!-- End #tab1 -->
     </div> <!-- End .content-box-content -->
</div>
