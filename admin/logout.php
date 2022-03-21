<?php
include 'models/m_sess_cook.php';
$m_sess_cook = new M_sess_cook();

if(isset($_SESSION['ad_login']) && $_SESSION['ad_login'] ==true)
{
	$m_sess_cook->logout();
}
else
	header('location: login.php');
?>
