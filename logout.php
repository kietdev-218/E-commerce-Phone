<?php
include_once 'models/m_session_cookie.php';
$m_sess_cook = new M_session_cookie();
if(isset($_GET['logout']) && $_GET['logout'] == 1)
{
	$m_sess_cook->logout('.');
}
else
{
	header('location: .');
}
?>