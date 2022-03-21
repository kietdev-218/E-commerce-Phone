<?php
include 'config_src.php';
include 'models/m_common.php';
$m_common = new M_common();
$ds_khach_hang = $m_common->search("khach_hang","ten_khach_hang",$keyword);

if(count($ds_khach_hang) > 0)
{
?>

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

<?php
foreach ($ds_khach_hang as $k => $kh)
{
	if($k < $so_luong_show)
	{
?>
<tr class="">
  <th><input value="<?php echo $kh->ma_khach_hang?>" class="chon_xoa" type="checkbox" /></th>
  <th><?php echo $kh->ma_khach_hang?></th>
  <th><?php echo $kh->ten_khach_hang?></th>
  <th><img src="images/icons/<?php echo $kh->gioi_tinh?>.png" width="25px"/></th>
  <th><?php echo $kh->dia_chi?></th>
  <th><?php echo $kh->dien_thoai?></th>
  <th><?php echo $kh->email?></th>
  <th> <!-- Icons --> 
    <a href="javascript:Hoi_xoa_nhom('khach_hang','hoa_don','ma_khach_hang',<?php echo $kh->ma_khach_hang?>,'<?php echo $link?>','khách hàng','hóa đơn')" 
    title="Delete"><img src="<?php echo IMG_AD?>/icons/cross.png" alt="Delete" /></a>
    <a href="" title="Xem chi tiết"><img src="<?php echo IMG_AD?>/icons/view-details.png" width="16px"/></a>
   </th>
</tr>
<?php
	}
}
?>
<tr>
	<td colspan="11" style="text-align:center; font-size:20px; font-weight:bold">
    	<?php include 'views/input/v_input2.tpl';?>
        <?php
		if($so_luong_show < count($ds_khach_hang))
		{
		?>
        <a href="#" class="xem-them">Xem tiếp</a>
        <?php
		}
		?>
    </td>
</tr>
<tr>
  <td colspan="11"><div style="width:150px; margin:auto">
      <input style="height:40px; cursor:pointer" type="button"  name="btn_xoa_sp" class="btn_xoa_sp"
      onclick="xoa_nhieu_nhom('khach_hang','hoa_don','ma_khach_hang',<?php echo "'".$link."'"?>,'khách hàng','hóa đơn')" value="Xóa khách hàng"/>
    </div></td>
</tr>

</tbody>
<?php include "views/xl_ajax/v_script_nhom.tpl";?>
<?php include "views/xl_ajax/v_script_xem_them.tpl";?>
<?php
}
?>