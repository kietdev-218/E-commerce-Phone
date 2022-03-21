<?php
if(!isset($_POST['keyword']) || !isset($_POST['dlink']) || !isset($_POST['trang_xl']) || !isset($_POST['so_luong_show']) || !isset($_POST['kieu']))
{
	header('location: .');
}

$keyword = trim($_POST['keyword']);
$link = $_POST['dlink'];
$so_luong_show = $_POST['so_luong_show'];
$trang_xl = $_POST['trang_xl'];
$kieu = $_POST['kieu'];

$arr_kieu = explode(',',$_POST['kieu']);
$xd_kieu = $arr_kieu[0];
$ma_so = $arr_kieu[1];
include $trang_xl;
?>
