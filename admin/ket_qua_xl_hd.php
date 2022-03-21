<?php
include 'config_src.php';
include 'models/m_common.php';
$m_common = new M_common();
$hoa_dons = $m_common->search("hoa_don","ma_hoa_don",$keyword);
include 'models/m_hoa_don.php';
$m_hoa_don = new M_hoa_don();

if(count($hoa_dons) > 0)
{
?>

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

<?php
foreach ($hoa_dons as $k=> $hd)
{
	if($k < $so_luong_show)
	{
?>
<tr class="<?php echo $m_hoa_don->trang_trai_hd($hd->ma_hoa_don,1)?>">
  <td><input value="<?php echo $hd->ma_hoa_don?>" class="chon_xoa" type="checkbox" /></td>
  <td><?php echo $hd->ma_hoa_don?></td>
  <td><?php echo date('d-m-Y',strtotime($hd->ngay_dat_hang))?></td>
  <td><?php echo $hd->ma_khach_hang?></td>
  <td><?php echo number_format($hd->tong_tien,0,',','.')?> Đ</td>
  <td><?php echo $m_hoa_don->trang_trai_hd($hd->ma_hoa_don)?></td>
  <td><!-- Icons --> 
    <a href="javascript:Hoi_xoa_nhom2('khach_hang','hoa_don','chi_tiet_hoa_don','ma_khach_hang',<?php echo $hd->ma_khach_hang?>,'ma_hoa_don',<?php echo $hd->ma_hoa_don?>,'<?php echo $link?>','hóa đơn','khách hàng')" title="Delete"><img src="images/icons/cross.png" alt="Delete" /></a> <a href="ct_hoa_don.php?so_hoa_don=18" title="Xem chi tiết"><img src="images/icons/view-details.png" width="16px"/></a></td>
</tr>
<?php
	}
}
?>
<tr>
	<td colspan="6" style="text-align:center; font-size:20px; font-weight:bold">
    	<?php include 'views/input/v_input2.tpl';?>
        <?php
		if($so_luong_show < count($hoa_dons))
		{
		?>
        <a href="#" class="xem-them">Xem tiếp</a>
        <?php
		}
		?>
    </td>
</tr>
<tr>
  <td colspan="6"><div style="width:150px; margin:auto">
      <input style="height:40px; cursor:pointer" onclick="xoa_nhieu_nhom2('khach_hang','hoa_don','chi_tiet_hoa_don','ma_khach_hang','ma_hoa_don','<?php echo $link?>','hóa đơn','khách_hang')"
                          type="button" name="btn_xoa_sp" class="btn_xoa_sp" value="Xóa hóa đơn"/>
    </div></td>
</tr>

</tbody>
<?php include "views/xl_ajax/v_script_nhom.tpl";?>
<?php include "views/xl_ajax/v_script_xem_them.tpl";?>
<?php
}
?>
