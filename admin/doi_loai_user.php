<?php
@session_start();
if(isset($_GET['ma_nguoi_dung']) && isset($_GET['gt_moi']))
{
	include 'models/m_common.php';
	$m_common = new M_common();
	$user = $m_common->select_single_id('nguoi_dung','ma_nguoi_dung',$_GET['ma_nguoi_dung']);
	if(empty($user))
	{
		header('location: .');
		die();
	}
	include 'models/m_nguoi_dung.php';
	$m_nguoi_dung = new M_nguoi_dung();
	$m_nguoi_dung->doi_loai_user($_GET['gt_moi'],$_GET['ma_nguoi_dung']);
	$_SESSION['kq_doi_loai_user'] = 'Bạn đã điều chỉnh thành công';
	header('location: nguoi_dung.php');
}
else
{
	header('location: .');
}
?>