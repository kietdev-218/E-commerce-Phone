<?php
if(isset($_GET['ma_hoa_don']))
{
	include 'controllers/c_hoa_don.php';
	$c_hoa_don = new C_hoa_don();
	$c_hoa_don->ct_hoa_don();
}
else
{
	header('location: .');
}
?>