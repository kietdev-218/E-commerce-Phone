<?php
include 'config_src.php';
include 'libs/bo_dau.php';
include 'models/m_common.php';
$m_common = new M_common();
if($xd_kieu == 'full')
{
	$bai_viets = $m_common->search('bai_viet','ten_bai_viet',$keyword);
}
else
{
	$bai_viets = $m_common->search_theo_loai('bai_viet','ma_loai_bai',$ma_so,'ten_bai_viet',$keyword);
}

include 'models/m_bai_viet.php';
$m_bai_viet = new M_bai_viet();

if(count($bai_viets) > 0)
{
?>

<thead>
  <tr>
    <th><input class="check-all" type="checkbox" /></th>
    <th>Mã bài viết</th>
    <th>Tên bài viết</th>
    <th>Loại</th>
    <th>Nội dung tóm tắt</th>
    <th>Người đăng</th>
    <th>Ngày đăng</th>
    <th>Hình</th>
    <th>Lượt xem</th>
    <th></th>
  </tr>
</thead>
<tbody>
  <?php
foreach ($bai_viets as $k => $bv)
{
	if($k < $so_luong_show)
	{
?>
  <tr class="">
    <th><input value="<?php echo $bv->ma_bai_viet?>" class="chon_xoa" type="checkbox" /></th>
    <th><?php echo $bv->ma_bai_viet?></th>
    <th><?php echo $bv->ten_bai_viet?></th>
    <th><a href="ds_bai_viet.php?ma_loai_bai=<?php echo $bv->ma_loai_bai?>"><?php echo $m_bai_viet->xd_loai_bv($bv->ma_loai_bai)?></a></th>
    <th><?php echo $bv->noi_dung_tom_tat?></th>
    <th>
	<?php
	if(!empty($m_common->select_single_id('nguoi_dung','ma_nguoi_dung',$bv->ma_nguoi_dung)))
    	echo $m_common->select_single_id('nguoi_dung','ma_nguoi_dung',$bv->ma_nguoi_dung)->ten_dang_nhap;
	else
		echo 'user';
	?>
    </th>
    <th><?php echo date('d-m-Y',strtotime($bv->ngay_dang))?></th>
    <th><img width="100px" src="<?php echo IMG?>/news/<?php echo $bv->hinh?>"/></th>
    <th><?php echo $bv->luot_xem?></th>
    <th> <!-- Icons --> 
      <a href="javascript:Hoi_xoa('bai_viet','ma_bai_viet',<?php echo $bv->ma_bai_viet?>,'<?php echo $link?>','bài viết')" 
                    title="Delete"><img src="<?php echo IMG_AD?>/icons/cross.png" alt="Delete" /></a> <a href="cap_nhat_bai_viet.php?ma_bai_viet=<?php echo $bv->ma_bai_viet?>" title="Edit"><img src="<?php echo IMG_AD?>/icons/pencil.png" alt="Edit" /></a> <a href="../bt_<?php echo thu_vien::bo_dau($bv->ten_bai_viet)?>.<?php echo $bv->ma_bai_viet?>.html" title="Xem chi tiết"><img src="<?php echo IMG_AD?>/icons/view-details.png" width="16px"/></a> </th>
  </tr>
  <?php
	}
}
?>
  <tr>
    <td colspan="10" style="text-align:center; font-size:20px; font-weight:bold">
      <?php include 'views/input/v_input4.tpl';?>
      <?php
		if($so_luong_show < count($bai_viets))
		{
		?>
      <a href="#" class="xem-them">Xem tiếp</a>
      <?php
		}
		?></td>
  </tr>
  <tr>
    <td colspan="10"><div style="width:150px; margin:auto">
        <input style="height:40px; cursor:pointer" type="button"  name="btn_xoa_sp" class="btn_xoa_sp"
      onclick="xoa_nhieu('bai_viet','ma_bai_viet',<?php echo "'".$link."'"?>,'bài viết')" value="Xóa bài"/>
      </div></td>
  </tr>
</tbody>
<?php include "views/xl_ajax/v_script_phan_tu.tpl";?>
<?php include "views/xl_ajax/v_script_xem_them_2.tpl";?>
<?php
}
?>
