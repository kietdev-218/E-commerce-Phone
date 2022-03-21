<?php
@session_start();
include 'models/m_hoa_don.php';
$m_hoa_don = new M_hoa_don();
$so_hoa_don_chua_xem = $m_hoa_don->so_hd_chua_xem();
echo $so_hoa_don_chua_xem;
?>