<?php
if(isset($_GET['ma_lien_he']))
{
	include_once 'controllers/c_lien_he.php';
	$c_lien_he = new C_lien_he();
	$c_lien_he->xem_lien_he();
}
else
{
	header('location: .');
}
?>