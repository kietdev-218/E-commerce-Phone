<?php
include 'controllers/c_san_pham.php';
$c_san_pham = new C_san_pham();
if(isset($_GET['ma_san_pham']))
$c_san_pham->san_pham_ct();
else
header('location: .');
?>