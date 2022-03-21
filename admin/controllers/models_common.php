<?php
include_once 'models/m_sess_cook.php';
$m_sess_cook = new M_sess_cook();
if(!isset($_SESSION['ad_login']) || $_SESSION['ad_login'] != true)
{
	header('location: login.php');
}

if(isset($_COOKIE['ad_login']) && $_COOKIE['ad_login']== true){
	$m_sess_cook->exist_cook();
}

include 'config_src.php';

include 'models/m_common.php';
$m_common = new M_common();
$user_log = $m_common->select_single_id('nguoi_dung','ten_dang_nhap',"'".$_SESSION['ad_name']."'");
$xac_nhan_ad = $m_common->xac_nhan_ad($user_log->ma_nguoi_dung);
if(empty($xac_nhan_ad)){
	$m_sess_cook->logout();
	die();
}

$ds_loai_sp = $m_common->select_group('nha_san_xuat','ma_loai',0);

include 'models/m_hoa_don.php';
$m_hoa_don = new M_hoa_don();
include 'models/m_lien_he.php';
$m_lien_he = new M_lien_he();

include 'libs/bo_dau.php';
?>