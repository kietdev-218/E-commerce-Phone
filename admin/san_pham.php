<?php
include 'controllers/c_san_pham.php';
$c_san_pham = new C_san_pham();
if(isset($_GET['ma_loai']))
{
	$c_san_pham->sp_theo_loai();
}
else if(isset($_GET['ma_nha_san_xuat']))
{
	$c_san_pham->sp_theo_hang();
}
else
	$c_san_pham->ds_san_pham();
?>