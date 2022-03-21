<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>{$title}</h3>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
                    <form class="frm_ct_hd" name="frm_ct_hd" method="post">
						
						<table>
							
							<thead>
                            	<tr>
                                	<td colspan="5" style="font-size:18px">
                                    Khách hàng: {$m_hoa_don->xd_kh($smarty.get.ma_hoa_don)->ten_khach_hang}
                                    </td>
                                </tr>
								<tr>
								   <th>Mã sản phẩm</th>
								   <th>Tên sản phẩm</th>
								   <th>Số lượng</th>
								   <th>Đơn giá</th>
                                   <th>Trạng thái</th>
								</tr>
								
							</thead>

							<tbody>
                            {foreach $ct_hoa_don as $hd}
								<tr>
									<td>{$hd->ma_san_pham}</td>
									<td>{$hd->ten_san_pham}</td>
									<td>{$hd->so_luong}</td>
									<td>{$hd->don_gia}</td>
                                    <td>{$m_hoa_don->trang_trai_hd($smarty.get.ma_hoa_don)}</td>
								</tr>
							{/foreach}
                            	<tr>
                                	<td colspan="5">
                                      <div style="width:150px; margin:auto">
                                          <input style="height:40px; cursor:pointer" onclick="Hoi_xoa_nhom2('khach_hang','hoa_don','chi_tiet_hoa_don','ma_khach_hang',{$m_hoa_don->xd_kh($smarty.get.ma_hoa_don)->ma_khach_hang},'ma_hoa_don',{$smarty.get.ma_hoa_don},'hoa_don.php','hóa đơn','khách hàng')"
                                          type="button" name="btn_xoa" class="btn_xoa_sp" value="Xóa"/>
                                          
                                          <input style="height:40px; cursor:pointer" type="submit" class="btn_tt" name="btn_thanh_toan" value="Thanh toán"/>
                                       </div>
                                    </td>
                                </tr>
							</tbody>
							
						</table>
						</form>
					</div> <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->
				
			</div>
{include file="views/xl_ajax/v_script_nhom.tpl"}