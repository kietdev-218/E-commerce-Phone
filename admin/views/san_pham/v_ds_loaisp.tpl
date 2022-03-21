 <h3 style="color:#F00; text-align:center; padding:10px 0; text-indent:10px">
     {if isset($smarty.session.kq_xoa_nhom2)}
     {$smarty.session.kq_xoa_nhom2}
     {$m_common->del_sess(kq_xoa_nhom2)}
    {/if}
</h3>
  <h3 style="color:#00F; text-align:center; padding:10px 0">
      {if isset($smarty.session.them_loaisp)}
      {$smarty.session.them_loaisp}
      {$m_common->del_sess(them_loaisp)}
      {/if}
  </h3>

<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>{$title}</h3> <div style="clear:both"></div>

                    <div style="clear:both"></div>
                    
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
                    {if count($ds_loai_sp)>0}
						<table id="bang">
							
							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>Mã loại</th>
								   <th>Tên loại</th>
                                   <th>Logo</th>
                                   <th></th>
								</tr>
								
							</thead>

							<tbody>
                            {foreach $ds_loai_sp as $loai}
								<tr class="">
									<td><input value="{$loai->ma_nha_san_xuat}" class="chon_xoa" type="checkbox" /></td>
									<th>{$loai->ma_nha_san_xuat}</th>
								   <th><a href="ds_hang.php?ma_loai={$loai->ma_nha_san_xuat}">{$loai->ten_nha_san_xuat}</a></th>
                                   <th><img width="100px" src="{$smarty.const.IMG}/logos/{$loai->logo}"/></th>
									<th>
										<!-- Icons -->
										 <a href="javascript:Hoi_xoa_nhom2('nha_san_xuat','nha_san_xuat','san_pham','ma_nha_san_xuat',{$loai->ma_nha_san_xuat},'ma_loai',{$loai->ma_nha_san_xuat},'{$link}','loại','hãng và sản phẩm')" title="Delete">
                                         <img src="images/icons/cross.png" alt="Delete" /></a> 
                                         <a href="cap_nhat_loaisp.php?ma_loai={$loai->ma_nha_san_xuat}" title="Edit"><img src="images/icons/pencil.png" alt="Edit" /></a>
									</th>
								</tr>
                                {/foreach}
                                <tr>
                                	<td colspan="5">
                                    	<div style="width:150px; margin:auto">
                                        	<input onclick="xoa_nhieu_nhom2('nha_san_xuat','nha_san_xuat','san_pham','ma_nha_san_xuat','ma_loai','{$link}','loại','hãng và sản phẩm')" style="height:40px; cursor:pointer" type="button" name="btn_xoa_sp" class="btn_xoa_sp" value="Xóa loại"/>
                                        </div>
                                     </td>
                               </tr>
                               <tr><td colspan="5"><div class="pages_list">{$lst}</div></td></tr>
							</tbody>
                            
                            {include file='views/xl_ajax/v_script_nhom.tpl'}
						</table>
						  {else}
                          <h3>Không có kết quả</h3>
                         {/if}
					</div> <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->
				
			</div>
