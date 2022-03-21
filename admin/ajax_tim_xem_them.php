<?php
if(!isset($_POST['keyword']) || !isset($_POST['dlink']) || !isset($_POST['trang_xl']) || !isset($_POST['so_luong_show']))
{
	header('location: .');
}

$keyword = trim($_POST['keyword']);
$link = $_POST['dlink'];
$so_luong_show = $_POST['so_luong_show'];
$trang_xl = $_POST['trang_xl'];

include $trang_xl;
?>
