<?php
session_start();
$ad_name = "'".$_SESSION['ad_name']."'";
include 'config_src.php';
include 'models/m_common.php';
$m_common = new M_common();
$nguoi_dungs = $m_common->search("nguoi_dung","ten_dang_nhap",$keyword);
$xd_admin = $m_common->select_single_id('nguoi_dung','ten_dang_nhap',$ad_name)->ma_loai_nguoi_dung;
include 'models/m_nguoi_dung.php';
$m_nguoi_dung = new M_nguoi_dung();
$loai_nguoi_dung = $m_nguoi_dung->doc_loai_nguoi_dung();

if(count($nguoi_dungs) > 0)
{
?>

<thead>
  <tr>
    <th><input class="check-all" type="checkbox" /></th>
    <th>Mã user</th>
    <th>Loại</th>
    <th>Họ tên</th>
    <th>Tên đăng nhập</th>
    <th>Email</th>
    <th>Ngày đăng ký</th>
    <th>Đăng nhập gần đây</th>
    <th>Ngày sinh</th>
    <th>Giới tính</th>
  </tr>
</thead>
<tbody>

<?php 
foreach ($nguoi_dungs as $k => $user)
{
	if($k < $so_luong_show)
	{
		if($xd_admin == 1)
		{
			if($user->ma_loai_nguoi_dung == 1)
			{
?>
<tr>
  <td></td>
  <td><?php echo $user->ma_nguoi_dung?></td>
  <td class="chu_do">Quản trị</td>
  <td><?php echo $user->ho_ten?></td>
  <td><?php echo $user->ten_dang_nhap?></td>
  <td><?php echo $user->email?></td>
  <td><?php echo date('d-m-Y',strtotime($user->ngay_dang_ky))?></td>
  <td><?php echo date('d-m-Y',strtotime($user->ngay_dang_nhap_cuoi))?></td>
  <td><?php echo date('d-m-Y',strtotime($user->birthdate))?></td>
  <td><img src="<?php echo IMG_AD.'/icons/'.$user->gioi_tinh?>.png" width="25"/></td>
  <td><!-- Icons --></td>
</tr>
<?php
			}
			else
			{
?>
<tr>
  <td><input type="checkbox" class="chon_xoa" value="<?php echo $user->ma_nguoi_dung?>"/></td>
  <td><?php echo $user->ma_nguoi_dung?></td>
  <td>
   <select class="ten_loai" name="ten_loai">
     <?php
      foreach($loai_nguoi_dung as $i => $loai)
      {
		  if($i >=1)
		  {
	?>                                  	
      <option class="gt_ten_loai" value="<?php echo $loai->ma_loai_nguoi_dung?>" <?php if($loai->ma_loai_nguoi_dung == $user->ma_loai_nguoi_dung)echo 'selected';?> >
      <?php echo $loai->ten_loai_nguoi_dung?> </option>
      <?php
		  }
	  }
	  ?>                                  
    </select>
  </td>
  <td><?php echo $user->ho_ten?></td>
  <td><?php echo $user->ten_dang_nhap?></td>
  <td><?php echo $user->email?></td>
  <td><?php echo date('d-m-Y',strtotime($user->ngay_dang_ky))?></td>
  <td><?php echo date('d-m-Y',strtotime($user->ngay_dang_nhap_cuoi))?></td>
  <td><?php echo date('d-m-Y',strtotime($user->birthdate))?></td>
  <td><img src="<?php echo IMG_AD.'/icons/'.$user->gioi_tinh?>.png" width="25"/></td>
  <td><!-- Icons --> 
    <a href="javascript:Hoi_xoa('nguoi_dung','ma_nguoi_dung',<?php echo $user->ma_nguoi_dung?>,'<?php echo $link?>','người dùng')" title="Delete"><img src="images/icons/cross.png" alt="Delete" /></a></td>
</tr>
<input type="hidden" class="ma_nguoi_thay_doi" value="<?php echo $user->ma_nguoi_dung?>"/>
<?php
			}
		}
		else
		{
			if($user->ma_loai_nguoi_dung == 1 || $user->ma_loai_nguoi_dung == 3)
			{
?>
<tr>
  <td></td>
  <td><?php echo $user->ma_nguoi_dung?></td>
  <td class="<?php if($user->ma_loai_nguoi_dung == 1) echo 'chu_do'; else echo 'chu_xanh';?>">
  <?php
  foreach($loai_nguoi_dung as $loai)
  {
	  if($loai->ma_loai_nguoi_dung == $user->ma_loai_nguoi_dung)
	  	echo $loai->ten_loai_nguoi_dung;
  }
	?>
  </td>
  <td><?php echo $user->ho_ten?></td>
  <td><?php echo $user->ten_dang_nhap?></td>
  <td><?php echo $user->email?></td>
  <td><?php echo date('d-m-Y',strtotime($user->ngay_dang_ky))?></td>
  <td><?php echo date('d-m-Y',strtotime($user->ngay_dang_nhap_cuoi))?></td>
  <td><?php echo date('d-m-Y',strtotime($user->birthdate))?></td>
  <td><img src="<?php echo IMG_AD.'/icons/'.$user->gioi_tinh?>.png" width="25"/></td>
  <td><!-- Icons --></td>
</tr>
<?php				
			}
			else
			{
?>
<tr>
  <td><input type="checkbox" class="chon_xoa" value="<?php echo $user->ma_nguoi_dung?>"/></td>
  <td><?php echo $user->ma_nguoi_dung?></td>
  <td>
   <select class="ten_loai" name="ten_loai">
     <?php
      foreach($loai_nguoi_dung as $i => $loai)
      {
		  if($i !=0 || $i !=2)
		  {
	?>                                  	
      <option class="gt_ten_loai" value="<?php echo $loai->ma_loai_nguoi_dung?>" <?php if($loai->ma_loai_nguoi_dung == $user->ma_loai_nguoi_dung)echo 'selected';?> >
      <?php echo $loai->ten_loai_nguoi_dung?> </option>
      <?php
		  }
	  }
	  ?>                                  
    </select>
  </td>
  <td><?php echo $user->ho_ten?></td>
  <td><?php echo $user->ten_dang_nhap?></td>
  <td><?php echo $user->email?></td>
  <td><?php echo date('d-m-Y',strtotime($user->ngay_dang_ky))?></td>
  <td><?php echo date('d-m-Y',strtotime($user->ngay_dang_nhap_cuoi))?></td>
  <td><?php echo date('d-m-Y',strtotime($user->birthdate))?></td>
  <td><img src="<?php echo IMG_AD.'/icons/'.$user->gioi_tinh?>.png" width="25"/></td>
  <td><!-- Icons --> 
    <a href="javascript:Hoi_xoa('nguoi_dung','ma_nguoi_dung',<?php echo $user->ma_nguoi_dung?>,'<?php echo $link?>','người dùng')" title="Delete"><img src="images/icons/cross.png" alt="Delete" /></a></td>
</tr>
<input type="hidden" class="ma_nguoi_thay_doi" value="<?php echo $user->ma_nguoi_dung?>"/>
<?php
			}
		}
	}
}
?>
<script>
$('.ten_loai').each(function(index) {
	var gt_hien_tai =$('.ten_loai').eq(index).val();
    $('.ten_loai').eq(index).change(function(){
	  var gt_moi =$('.ten_loai').eq(index).val();
	  var ma_nguoi_dung_thay = $('.ma_nguoi_thay_doi').eq(index).val();
	  if(confirm('Thay đổi loại của người dùng này ?'))
		  window.location = 'doi_loai_user.php?ma_nguoi_dung='+ma_nguoi_dung_thay+'&gt_moi='+gt_moi;
		  //$('.ten_loai').eq(index).val(val2);
	  else
		  $('.ten_loai').eq(index).val(gt_hien_tai);
  })
});
</script>

<tr>
	<td colspan="10" style="text-align:center; font-size:20px; font-weight:bold">
    	<?php include 'views/input/v_input2.tpl';?>
        <?php
		if($so_luong_show < count($nguoi_dungs))
		{
		?>
        <a href="#" class="xem-them">Xem tiếp</a>
        <?php
		}
		?>
    </td>
</tr>
<tr>
  <td colspan="10"><div style="width:150px; margin:auto">
      <input style="height:40px; cursor:pointer" type="button" name="btn_xoa_user" class="btn_xoa_user" value="Xóa người dùng" onclick="xoa_nhieu('nguoi_dung','ma_nguoi_dung','<?php echo $link?>','người dùng')"/>
    </div></td>
</tr>
</tbody>
<?php include "views/xl_ajax/v_script_phan_tu.tpl";?>
<?php include "views/xl_ajax/v_script_xem_them.tpl";?>
<?php
}
?>
