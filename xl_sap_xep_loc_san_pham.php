<?php
if(!isset($_POST['kieu_sort_filter']) || !isset($_POST['input_products']))
{
	header('location: .');
	die();
}

$them_lenh = $_POST['kieu_sort_filter'];
$input_products = $_POST['input_products'];
$arr = explode(',',$input_products);
$ma_loai = (int)$arr[1];
$sl_sp = 9;
include 'ket_qua_xl_sp.php';
?>