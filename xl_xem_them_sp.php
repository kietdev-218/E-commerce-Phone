<?php
if(!isset($_POST['input_products_2']) || !isset($_POST['sl_sp']))
{
	header('location: .');
	die();
}

$sl_sp = $_POST['sl_sp'] + 9;
$input_products_2 = $_POST['input_products_2'];
$arr = explode(',',$input_products_2);
$ma_loai = (int)$arr[1];
$them_lenh = $arr[2];
include 'ket_qua_xl_sp.php';
?>

