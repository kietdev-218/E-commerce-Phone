<?php
@session_start();
if(!isset($_POST['vi_tri_moi']) || !isset($_POST['vi_tri_ht']) || !isset($_POST['id']))
{
	header('location: .');
	die();
}

$vi_tri_ht = $_POST['vi_tri_ht'];
$vi_tri_moi = $_POST['vi_tri_moi'];
$id = $_POST['id'];

include 'config_src.php';
include 'libs/bo_dau.php';
include 'models/m_slider.php';
$m_slider = new M_slider();
$m_slider->sap_xep($id,$vi_tri_ht,$vi_tri_moi);

$slider = $m_slider->slider();
?>

<div class="container-hinhphu">
<p>Hình ảnh trong slider cần có tỷ lệ khung hình bằng nhau để slider được đều</p>
<?php
foreach($slider as $hinh)
{
?>
  <div class="cont-img">
    <div class="box-img"> <img src="../assets/images/sliders/<?php echo $hinh->hinh;?>"/> </div>
    <div style="padding:10px 0; text-align:center">
      <input class="id_hinh" type="hidden" value="<?php echo $hinh->id;?>"/>
      <input class="vi_tri_ht" type="hidden" value="<?php echo $hinh->vi_tri;?>"/>
      <label>Vị trí: </label>
      <select class="vi_tri_hinh" name="vi_tri">
      <?php
      for($i=1; $i <= count($slider); $i++) 
	  {
	?>                 
        <option class="op_vi_tri" value="<?php echo $i;?>" <?php if($i==$hinh->vi_tri) echo 'selected';?>>
        <?php echo $i;?>
        </option>
      <?php
	  }
	  ?>
      </select>
    </div>
  </div>
<?php
}
?>
  <div class="clear"></div>
</div>
<?php include "views/xl_ajax/v_script_sx_slider.tpl";?>