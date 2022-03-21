<?php
include 'controllers/smarty_dt.php';

$smarty = new Smarty_dt();
$smarty->assign('m_san_pham',$m_san_pham);
$smarty->assign('ds_loai_sp',$ds_loai_sp);
$smarty->assign('m_xl_chung',$m_xl_chung);
$smarty->assign('m_nguoi_dung',$m_nguoi_dung);
?>