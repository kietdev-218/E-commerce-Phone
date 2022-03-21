<?php
include 'config_src.php';
include 'models/m_common.php';
$m_common = new M_common();
if($xd_kieu == 'full')
{
	$san_phams = $m_common->search("san_pham","ten_san_pham",$keyword);
}
else if($xd_kieu == 'loai')
{
	$san_phams = $m_common->search_theo_loai("san_pham","ma_loai",$ma_so,"ten_san_pham",$keyword);
}
else if($xd_kieu == 'hang')
{
	$san_phams = $m_common->search_theo_loai("san_pham","ma_nha_san_xuat",$ma_so,"ten_san_pham",$keyword);
}

include 'models/m_san_pham.php';
$m_san_pham = new M_san_pham();

if(count($san_phams) > 0)
{
?>

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

<?php
foreach ($san_phams as $k => $sp)
{
	if($k < $so_luong_show)
	{
?>
<tr class="">
  <td><input value="<?php echo $sp->ma_san_pham;?>" class="chon_xoa" type="checkbox" /></td>
  <th><?php echo $sp->ma_san_pham;?></th>
  <th><?php echo $sp->ten_san_pham;?></th>
  <th>
  	<a href="san_pham.php?ma_loai=<?php echo $sp->ma_loai;?>"><?php echo $m_san_pham->loai_nsx($sp->ma_loai);?></a>
  </th>
  <th>
  	<a href="san_pham.php?ma_nha_san_xuat=<?php echo $sp->ma_nha_san_xuat;?>"><?php echo $m_san_pham->loai_nsx($sp->ma_nha_san_xuat);?></a>
  </th>
  <th><?php echo number_format($sp->don_gia,0,',','.');?> Đ</th>
  <th><?php if ($sp->khuyen_mai >0) echo '-'.$sp->khuyen_mai.'%'; else echo 'Không';?></th>
  <th><img width="100px" src="<?php echo IMG;?>/products/<?php echo $sp->hinh;?>"/></th>
  <th><?php echo $sp->so_luot_xem;?></th>
  <th><?php echo $sp->so_luot_mua;?></th>
  <th> <!-- Icons --> 
    <a href="javascript:Hoi_xoa('san_pham','ma_san_pham',<?php echo $sp->ma_san_pham?>,<?php echo "'".$link."'"?>,'sản phẩm')" 
        title="Delete"><img src="<?php echo IMG_AD?>/icons/cross.png" alt="Delete" /></a>
    <a href="cap_nhat_san_pham.php?ma_san_pham=<?php echo $sp->ma_san_pham?>" title="Edit"><img src="<?php echo IMG_AD?>/icons/pencil.png" alt="Edit" /></a>
    <a href="" title="Xem chi tiết"><img src="<?php echo IMG_AD?>/icons/view-details.png" width="16px"/></a> </th>
</tr>
<?php
	}
}
?>
<tr>
	<td colspan="11" style="text-align:center; font-size:20px; font-weight:bold">
    	<input type="hidden" class="aj-link" value="<?php echo $link;?>"/>
    	<input type="hidden" class="so_luong_show" value="<?php echo $so_luong_show?>"/>
    	<input type="hidden" class="kieu_sp_ax" value="<?php echo $kieu_sp;?>"/>
        <input type="hidden" class="keyword" value="<?php echo $keyword;?>"/>
        <?php
		if($so_luong_show < count($san_phams))
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
      onclick="xoa_nhieu('san_pham','ma_san_pham',<?php echo "'".$link."'"?>,'sản phẩm')" value="Xóa sản phẩm"/>
    </div></td>
</tr>

</tbody>
<?php include "views/xl_ajax/v_script_phan_tu.tpl";?>
<script>
$('.xem-them').click(function(e){
	e.preventDefault();
	var $kieu_sp = $('.kieu_sp_ax').val();
	var $link = $('.aj-link').val();
	var $so_luong_show = $('.so_luong_show').val();
	var $keyword = $('.keyword').val();
	
	form_data ={
		kieu_sp:$kieu_sp,so_luong_show:$so_luong_show,keyword:$keyword,dlink:$link
	};
	$.ajax({
		url: "ajax_xem_them_sp.php",
		type: 'POST',
		data: form_data,
		success: function(data) {
			$("#bang").html(data);
		}
	});
})
</script>
<?php
}
?>