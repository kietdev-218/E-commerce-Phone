<?php
@session_start();
include 'models/m_lien_he.php';
$m_lien_he = new M_lien_he();
$so_lh_chua_xem = $m_lien_he->so_lh_chua_xem();
echo $so_lh_chua_xem;
?>