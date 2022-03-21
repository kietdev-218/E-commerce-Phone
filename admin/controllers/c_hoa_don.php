<?php
class C_hoa_don{
	public function ds_hoa_don(){
		include_once 'controllers/models_common.php';
		$link = $_SERVER['PHP_SELF'];
		$trang_xl = 'ket_qua_xl_hd.php';
		$so_luong_show = 8;
		$hoa_dons = $m_common->select_full_desc('hoa_don','ma_hoa_don');
		
		include_once 'models/pager.php';
		$p = new Pager();
		$get_page = $p->get_page();
		$limit =8;
		$vt = $p->findstart($get_page,$limit);
		$count_pages = $p->count_pages($limit,count($hoa_dons));
		$lst = $p->pages_list($count_pages,$get_page);
		$hoa_dons = $m_common->select_full_desc('hoa_don','ma_hoa_don',$vt,$limit);
		
		include_once 'controllers/smarty_common.php';
		
		$title = 'Danh sách hóa đơn';
		$view = 'views/hoa_don/v_ds_hoa_don.tpl';
		
		$smarty->assign('title',$title);
		$smarty->assign('view',$view);
		$smarty->assign('link',$link);
		$smarty->assign('trang_xl',$trang_xl);
		$smarty->assign('hoa_dons',$hoa_dons);
		$smarty->assign("so_luong_show",$so_luong_show);
		$smarty->assign('lst',$lst);
		
		$smarty->hien_thi('layout.tpl');
	}
	
	public function ct_hoa_don(){
		include_once 'controllers/models_common.php';
		$ct_hoa_don = $m_hoa_don->ct_hoa_don($_GET['ma_hoa_don']);
		if(count($ct_hoa_don) == 0)
		{
			header('location: .');
			die();
		}
		$m_hoa_don->xac_nhan_hd_dx($_GET['ma_hoa_don']);
		$m_hoa_don->thanh_toan($_GET['ma_hoa_don']);
		
		include_once 'controllers/smarty_common.php';
		
		$title = 'Hóa đơn số '.$_GET['ma_hoa_don'];
		$view = 'views/hoa_don/v_ct_hoa_don.tpl';
		
		$smarty->assign('title',$title);
		$smarty->assign('view',$view);
		$smarty->assign('ct_hoa_don',$ct_hoa_don);
		
		$smarty->hien_thi('layout.tpl');
	}
}

?>