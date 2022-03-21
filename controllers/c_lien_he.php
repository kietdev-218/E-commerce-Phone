<?php
class C_lien_he{
	public function lien_he(){
		include_once 'controllers/models_common.php';
		
		include 'models/m_lien_he.php';
		$m_lien_he = new M_lien_he();
		$m_lien_he->xl_lien_he();
		$description = 'sản phẩm di động Thanh Thanh';
		$meta_key = 'di động Thanh Thanh';
		$dieu_huong = '<li class="active">Liên hệ</li>';
		
		include_once 'controllers/smarty_common.php';
		
		$view = "views/lien_he/v_lien_he.tpl";
		$smarty->assign('title','Liên hệ');
		$smarty->assign('description',$description);
		$smarty->assign('meta_key',$meta_key);
		
		$smarty->assign('dieu_huong',$dieu_huong);
		$smarty->assign('view',$view);
		$smarty->assign('m_lien_he',$m_lien_he);
		
		$smarty->hien_thi('lien_he/layout.tpl');
	}
}
?>