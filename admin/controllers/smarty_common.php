<?php
include 'controllers/smarty_quan_tri.php';
$smarty = new Smarty_quan_tri();

$smarty->assign('m_common',$m_common);
$smarty->assign('ds_loai_sp',$ds_loai_sp);
$smarty->assign('m_hoa_don',$m_hoa_don);
$smarty->assign('m_lien_he',$m_lien_he);
?>