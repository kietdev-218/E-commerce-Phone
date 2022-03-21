<?php
@session_start();
if(!isset($_SESSION['ad_login']) || $_SESSION['ad_login'] != true)
{
	header('location: login.php');
}
else if(!isset($_GET['khoa_chinh']) || !$_GET['ma_san_pham'])
{
	header('location: home_page.php');
}
else
{
	include 'controllers/c_san_pham.php';
	$c_tin_tuc = new C_san_pham();
	$c_tin_tuc->xoa_hinh_chi_tiet();
}
?>