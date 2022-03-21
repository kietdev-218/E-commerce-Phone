<?php
include 'controllers/c_san_pham.php';
$c_san_pham = new C_san_pham();
if(isset($_GET['ma_loai']))
{
	$c_san_pham->san_pham_theo_loai();
}
else if(isset($_GET['ma_nha_san_xuat']))
{
	$c_san_pham->san_pham_theo_hang();
}
else if(isset($_GET['khuyen_mai']))
{
	$c_san_pham->san_pham_km();
}
else
{
	header('location: /project3/');
}
?>