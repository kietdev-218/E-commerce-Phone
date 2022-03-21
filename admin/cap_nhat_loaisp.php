<?php
include 'controllers/c_san_pham.php';
$c_san_pham = new C_san_pham();
if(isset($_GET['ma_loai']))
{
	$c_san_pham->sua_loaisp();
}
else
{
	$c_san_pham->them_loaisp();
}
?>