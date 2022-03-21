<?php
include 'controllers/c_san_pham.php';
$c_san_pham = new C_san_pham();
if(isset($_GET['ma_nha_san_xuat']))
{
	$c_san_pham->sua_hangsx();
}
else
{
	$c_san_pham->them_hangsx();
}
?>