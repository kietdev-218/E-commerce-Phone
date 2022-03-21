 <h3 style="color:#F00; text-align:center; padding:10px 0; text-indent:10px">
     {if isset($smarty.session.kq_xoa_nhom)}
     {$smarty.session.kq_xoa_nhom}
     {$m_common->del_sess(kq_xoa_nhom)}
    {/if}
</h3>
<h3 style="color:#00F; text-align:center; padding:10px 0">
    {if isset($smarty.session.them_hangsx)}
    {$smarty.session.them_hangsx}
    {$m_common->del_sess(them_hangsx)}
    {/if}
</h3>
<div style="padding:15px 0">
	<span style="font-size:18px; font-weight:bold">Loại: </span>
	<select style="padding:10px 0" name="ds_nhom_sp" class="ds_loai"  id="ma_loai">
    	<option value="">Tất cả</option>
         {foreach $ds_loai_sp as $loai}
             <option {$m_common->selected('ma_loai',$loai->ma_nha_san_xuat)} value="{$loai->ma_nha_san_xuat}">{$loai->ten_nha_san_xuat}</option>
          {/foreach}
   </select>
</div>

<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>{$title}</h3> <div style="clear:both"></div>

                    <div style="clear:both"></div>
                    
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
                    {if count($ds_hang)>0}
						<table id="bang">
							
							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>Mã nhà sản xuất</th>
								   <th>Tên nhà sản xuất</th>
                                   <th>Tên loại</th>
                                   <th>Logo</th>
                                   <th></th>
								</tr>
								
							</thead>

							<tbody>
                            {foreach $ds_hang as $hang}
								<tr class="">
									<td><input value="{$hang->ma_nha_san_xuat}" class="chon_xoa" type="checkbox" /></td>
									<th>{$hang->ma_nha_san_xuat}</th>
								   <th>{$hang->ten_nha_san_xuat}</th>
                                   <th>{$m_common->select_single_id('nha_san_xuat','ma_nha_san_xuat',$hang->ma_loai)->ten_nha_san_xuat}</th>
                                   <th><img width="100px" src="{$smarty.const.IMG}/logos/{$hang->logo}"/></th>
									<th>
										<!-- Icons -->
										 <a href="javascript:Hoi_xoa_nhom('nha_san_xuat','san_pham','ma_nha_san_xuat',{$hang->ma_nha_san_xuat},'{$link}','hãng sản xuất','sản phẩm')" title="Delete">
                                         <img src="images/icons/cross.png" alt="Delete" /></a> 
                                         <a href="cap_nhat_hangsx.php?ma_nha_san_xuat={$hang->ma_nha_san_xuat}" title="Edit"><img src="images/icons/pencil.png" alt="Edit" /></a>
									</th>
								</tr>
                                {/foreach}
                                <tr>
                                	<td colspan="6">
                                    	<div style="width:150px; margin:auto">
                                        	<input onclick="xoa_nhieu_nhom('nha_san_xuat','san_pham','ma_nha_san_xuat','{$link}','hãng sản xuất','sản phẩm')" style="height:40px; cursor:pointer" type="button" name="btn_xoa_sp" class="btn_xoa_sp" value="Xóa"/>
                                        </div>
                                     </td>
                               </tr>
                               <tr><td colspan="5"><div class="pages_list">{$lst}</div></td></tr>
							</tbody>
                            <input type="hidden" class="ma_loai" value="{$ma_loai}"/>
                            {include file='views/xl_ajax/v_script_nhom.tpl'}
						</table>
						  {else}
                          <h3>Không có kết quả</h3>
                         {/if}
					</div> <!-- End #tab1 -->      
					
				</div> <!-- End .content-box-content -->
				
			</div>
