<?php
class C_lien_he{
	public function ds_lien_he(){
		include_once 'controllers/models_common.php';
		$ds_lien_he = $m_common->select_full_desc('lien_he','ma_lien_he');
		$link = $_SERVER['PHP_SELF'];
		
		include_once 'models/pager.php';
		$p = new Pager();
		$get_page = $p->get_page();
		$limit =8;
		$vt = $p->findstart($get_page,$limit);
		$count_pages = $p->count_pages($limit,count($ds_lien_he));
		$lst = $p->pages_list($count_pages,$get_page);
		$ds_lien_he = $m_common->select_full_desc('lien_he','ma_lien_he',$vt,$limit);
		
		include_once 'controllers/smarty_common.php';
		$view= "views/lien_he/v_ds_lien_he.tpl";
		$title = "Danh sách liên hệ";
		
		$smarty->assign("view",$view);
		$smarty->assign("title",$title);
		$smarty->assign("ds_lien_he",$ds_lien_he);
		$smarty->assign("link",$link);
		$smarty->assign("lst",$lst);
		
		$smarty->hien_thi("layout.tpl");
	}
	
	public function xem_lien_he(){
		include_once 'controllers/models_common.php';
			if(isset($_COOKIE['tra_loi_xong']))
			{
				setcookie('tra_loi_xong',NULL,time()-1);
			}
		
		
		$ma_lien_he = $_GET['ma_lien_he'];
		$xem_lien_he = $m_common->select_single_id('lien_he','ma_lien_he',$ma_lien_he);
		if(empty($xem_lien_he))
		{
			header('location: lien_he.php');
			die();
		}
		$m_lien_he->xac_nhan_lh_dx($ma_lien_he);

		$m_lien_he->tra_loi_lh($xem_lien_he->email,$xem_lien_he->ten_nguoi_gui);

		include_once 'controllers/smarty_common.php';
		$title = 'Liên hệ';
		$view = 'views/lien_he/v_xem_lien_he.tpl';
		$smarty->assign('title',$title);
		$smarty->assign('xem_lien_he',$xem_lien_he);
		$smarty->assign('view',$view);
		$smarty->assign('ma_lien_he',$ma_lien_he);

		$smarty->hien_thi('layout.tpl');
	}
}
?>