<?php
include_once 'models/m_session_cookie.php';
$m_sess_cook = new M_session_cookie();
include 'models/m_nguoi_dung.php';
$m_nguoi_dung = new M_nguoi_dung();
if($m_sess_cook->exist_sess())
{
	$user_log = $m_nguoi_dung->doc_nguoi_dung($_SESSION['name']);
	if(empty($m_nguoi_dung->nguoi_dung($user_log->ma_nguoi_dung)))
	{
		$m_sess_cook->logout('.');
		die();
	}
	$m_sess_cook->sess_cook_chuyen_trang();
}

if(isset($_COOKIE,$_COOKIE['login']) && $_COOKIE['login'] == true)
{
	$m_sess_cook->exist_cook();
}

include 'models/m_san_pham.php';
$m_san_pham = new M_san_pham();
$ds_loai_sp = $m_san_pham->ds_loai_sp();
include 'models/m_xl_chung.php';
$m_xl_chung = new M_xl_chung();

include_once 'libs/bo_dau.php'
?>