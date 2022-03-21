<?php
session_start();
if(!isset($_SESSION['ad_login']) || $_SESSION['ad_login'] != true)
{
	header('location: login.php');
	die();
}
if(!isset($_GET['table']) || !isset($_GET['col']) || !isset($_GET['id']) || !isset($_GET['id_val']) || !isset($_GET['link']) || !isset($_GET['tenhinh']))
{
	header('location: .');
}
else
{
	include 'models/m_common.php';
	$m_common = new M_common();
	$m_common->xoa_hinh($_GET['table'],$_GET['col'],$_GET['id'],$_GET['id_val'],$_GET['tenhinh']);
	header('location: '.$_GET['link']);
}
?>