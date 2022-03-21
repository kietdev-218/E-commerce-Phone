   <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
{if count($danh_gia_gr_by_id)>0}
        <table id="bang">
              <thead>
                <tr>
                  <th>Mã sản phẩm</th>
                  <th>Tên sản phẩm</th>
                  <th>Điểm trung bình</th>
                  <th>Mã đánh giá</th>
                  <th>Mã người đánh giá</th>
                  <th>Người đánh giá</th>
                  <th>Điểm</th>
                  <th>Ngày đánh giá</th>
                </tr>
              </thead>
              <tbody>
              {foreach $danh_gia_gr_by_id as $item}
                  {$dgct = $m_san_pham->danh_gia_ct($item->ma_san_pham)}
                  {foreach $dgct as $k => $ct}
                 <tr class="" style="background-color:#FFF; border-bottom:#CCC 1px solid">
                 {if $k==0}
                  <th rowspan="{count($dgct)}">{$item->ma_san_pham}</th>
                  <th rowspan="{count($dgct)}">{$item->ten_san_pham}</th>
                  <th rowspan="{count($dgct)}" style="border-right:#CCC 1px solid">{round($item->dtb,1)}</th>
                  {/if}
                  <th>{$ct->ma_danh_gia}</th>
                  <th>{$ct->ma_nguoi_dung}</th>
                  <th>{$ct->ten_dang_nhap}</th>
                  <th>{$ct->diem}</th>
                  <th>{date('d-m-Y',strtotime($ct->ngay))}</th>
                </tr>  
                {/foreach} 
              {/foreach}         
                <tr>
                  <td colspan="8"><div class="pages_list">{$lst}</div></td>
                </tr>
              </tbody>
            </table>
{else}
<h3>Không tìm thấy kết quả</h3>
{/if}     
         </div> <!-- End #tab1 -->
     </div> <!-- End .content-box-content -->
