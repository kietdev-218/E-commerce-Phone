<?php
session_start();
if(!isset($_SESSION['ad_login']) || $_SESSION['ad_login'] != true)
{
	header('location: login.php');
	die();
}
if(!isset($_GET['id']))
{
	header('location: .');
	die();
}
else
{
	include 'models/m_slider.php';
	$m_slider = new M_slider();
	$delete = $m_slider->xoa($_GET['id']);
	$_SESSION['kq_xoa'] = 'Bạn đã xóa hình thành công';

	header('location: ds_hinh_slider.php');
}

?>
