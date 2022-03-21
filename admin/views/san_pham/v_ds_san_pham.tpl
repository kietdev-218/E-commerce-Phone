
<div class="content-box">
<!-- Start Content Box -->
    <div class="content-box-header">
      <h3>{$title}</h3>
      <div style="width:200px; float:left; padding:10px 0">
        <input name="thanh_tim" type="text" id="thanh_tim" placeholder="Nhập tên sản phẩm"/>
        {include file="views/input/v_input3.tpl"}
      </div>
      
      <h3 style="color:#00F; text-align:center; padding:10px 0">
      {if isset($smarty.session.them_sp_xong)}
          {$smarty.session.them_sp_xong}
          {$m_common->del_sess(them_sp_xong)}
       {/if}
      </h3>
      <div style="clear:both"></div>
    </div>
    <!-- End .content-box-header -->
    
    <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
        	<div style="padding:12px">
            {if isset($select_loai)}
            {if count($ds_loai_sp) > 0}
              <label style="font-weight:bold; font-size:16px">Loại sản phẩm:</label> 
              <select class="ds_loai" id="ma_loai">
              <option class="loai_sp" value="">Tất cả</option>
              {foreach $ds_loai_sp as $i}
                  <option class="loai_sp" value="{$i->ma_nha_san_xuat}" {$m_common->selected('ma_loai',$i->ma_nha_san_xuat)}>
                  {$i->ten_nha_san_xuat}
                  </option>
               {/foreach}
              </select>
              {/if}
              {/if}
            </div>
            <h3 style="color:#F00; text-align:center; padding:10px 0; text-indent:10px">
                  {if isset($smarty.session.kq_xoa)}
                  <p style="font-weight:bold; font-size:20px">{$smarty.session.kq_xoa}</p>
                  {$m_common->del_sess('kq_xoa')}
                   {/if}
              </h3>
            {if count($san_phams) > 0}
    		<table id="bang">
              <thead>
                <tr>
                  <th><input class="check-all" type="checkbox" /></th>
                  <th>Mã sản phẩm</th>
                  <th>Tên sản phẩm</th>
                  <th>Loại</th>
                  <th>Nhà sản xuất</th>
                  <th>Đơn giá</th>
                  <th>km</th>
                  <th>Hình</th>
                  <th>Lượt xem</th>
                  <th>Lượt mua</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              {foreach $san_phams as $sp}
                <tr class="">
                  <th><input value="{$sp->ma_san_pham}" class="chon_xoa" type="checkbox" /></th>
                  <th>{$sp->ma_san_pham}</th>
                  <th>{$sp->ten_san_pham}</th>
                  <th><a href="san_pham.php?ma_loai={$sp->ma_loai}">{$m_san_pham->loai_nsx($sp->ma_loai)}</a></th>
                  <th><a href="san_pham.php?ma_nha_san_xuat={$sp->ma_nha_san_xuat}">{$m_san_pham->loai_nsx($sp->ma_nha_san_xuat)}</a></th>
                  <th>{number_format($sp->don_gia,0,',','.')} Đ</th>
                  <th>{if $sp->khuyen_mai >0}-{$sp->khuyen_mai}%{else}Không{/if}</th>
                  <th><img width="100px" src="{$smarty.const.IMG}/products/{$sp->hinh}"/></th>
                  <th>{$sp->so_luot_xem}</th>
                  <th>{$sp->so_luot_mua}</th>
                  <th> <!-- Icons --> 
                    <a href="javascript:Hoi_xoa('san_pham','ma_san_pham',{$sp->ma_san_pham},'{$link}','sản phẩm')" 
                    title="Delete"><img src="{$smarty.const.IMG_AD}/icons/cross.png" alt="Delete" /></a>
                    
                    <a href="cap_nhat_san_pham.php?ma_san_pham={$sp->ma_san_pham}" title="Edit"><img src="{$smarty.const.IMG_AD}/icons/pencil.png" alt="Edit" /></a>
                    <a href="" title="Xem chi tiết"><img src="{$smarty.const.IMG_AD}/icons/view-details.png" width="16px"/></a>
                    </th>
                </tr>
                {/foreach}
                <tr>
                  <td colspan="11">
                      <div style="width:150px; margin:auto">
                          <input style="height:40px; cursor:pointer" onclick="xoa_nhieu('san_pham','ma_san_pham','{$link}','sản phẩm')"
                          type="button" name="btn_xoa_sp" class="btn_xoa_sp" value="Xóa sản phẩm"/>
                        </div>
                    </td>
                </tr>
                <tr>
                  <td colspan="11"><div class="pages_list">{$lst}</div></td>
                </tr>
              </tbody>
              
              {include file="views/xl_ajax/v_script_phan_tu.tpl"}
            </table>
            {include file="views/xl_ajax/v_script_tim_2.tpl"}
				{else}
				<h3 style="padding:20px 0">Không tìm thấy sản phẩm nào</h3>
				{/if}     
         </div> <!-- End #tab1 -->
     </div> <!-- End .content-box-content -->
</div>
