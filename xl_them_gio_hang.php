<?php
@session_start();
if(!isset($_POST['ma_san_pham']) || !isset($_POST['ten_san_pham'])|| !isset($_POST['so_luong']) || !isset($_POST['don_gia']))
{
	header('location: .');
	die();
}
include 'models/m_san_pham.php';
$m_san_pham = new M_san_pham();
$ma_san_pham = $_POST['ma_san_pham'];
$ten_san_pham = $_POST['ten_san_pham'];
$so_luong = $_POST['so_luong'];
$don_gia = $_POST['don_gia'];

if(!isset($_SESSION['gio_hang'][$ma_san_pham]))
{
	$_SESSION['gio_hang'][$ma_san_pham] = array('ten_san_pham'=>$ten_san_pham,'so_luong'=>$so_luong,'don_gia'=>$don_gia);
}
else
{
	$so_luong_moi = $_SESSION['gio_hang'][$ma_san_pham]['so_luong'] +$so_luong;
	$_SESSION['gio_hang'][$ma_san_pham] = array('ten_san_pham'=>$ten_san_pham,'so_luong'=>$so_luong_moi,'don_gia'=>$don_gia);
}
$_SESSION['tong_so'] = 0;
$_SESSION['thanh_tien'] = 0;
foreach($_SESSION['gio_hang'] as $x)
{
	$_SESSION['tong_so'] += $x['so_luong'];
	$_SESSION['thanh_tien'] += $x['so_luong']*$x['don_gia'];
}

?>

<a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
<div class="items-cart-inner">
  <div class="total-price-basket"> <span class="lbl">giỏ hàng -</span> <span class="total-price"> <span class="value"><?php echo number_format($_SESSION['thanh_tien'],0,',','.')?> Đ</span> </span> </div>
      <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
      <div class="basket-item-count"> <span class="count">(<?php echo $_SESSION['tong_so'];?>)</span></div>
  </div>
</a>
<ul class="dropdown-menu">
  <?php
  foreach ($_SESSION['gio_hang'] as $ma_san_pham => $info)
  {
	  $san_pham = $m_san_pham->san_pham_ct($ma_san_pham)
  ?>
  <li>
    <div class="cart-item product-summary">
      <div class="row">
        <div class="col-xs-4">
          <div class="image"> <a href=""> <img src="assets/images/products/<?php echo $san_pham->hinh?>" alt=""></a> </div>
        </div>
        <div class="col-xs-7">
          <h3 class="name"><a href=""><?php echo $san_pham->ten_san_pham?></a></h3>
          <div class="price"> <?php echo $_SESSION['gio_hang'][$ma_san_pham]['so_luong']?>x
            <?php echo number_format($_SESSION['gio_hang'][$ma_san_pham]['don_gia'],0,',','.')?> Đ </div>
        </div>
      </div>
    </div>
    <!-- /.cart-item -->
    <div class="clearfix"></div>
    <hr>
    <!-- /.cart-total--> 
    
  </li>
  <?php
  }
  ?>
  <div class="clearfix cart-total">
    <div class="pull-right"> <span class="text">Tổng cộng :</span><span class='price'><?php echo number_format($_SESSION['thanh_tien'],0,',','.')?> Đ</span> </div>
    <div class="clearfix"></div>
    <a href="gio_hang.php" class="btn btn-upper btn-primary btn-block m-t-20">Xem giỏ hàng</a> </div>
</ul>