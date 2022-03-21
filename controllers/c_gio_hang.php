<?php
class C_gio_hang{
	public function gio_hang(){
		include_once 'controllers/models_common.php';
		
		$description = 'sản phẩm di động Thanh Thanh';
		$meta_key = 'di động Thanh Thanh';
		$dieu_huong = '<li class="active">Giỏ hàng</li>';
		$page_cart = true;
		
		include_once 'controllers/smarty_common.php';
		
		$view = "views/gio_hang/v_gio_hang.tpl";
		$smarty->assign('title','Giỏ hàng');
		$smarty->assign('description',$description);
		$smarty->assign('meta_key',$meta_key);
		
		$smarty->assign('dieu_huong',$dieu_huong);
		$smarty->assign('page_cart',$page_cart);
		$smarty->assign('view',$view);
		
		$smarty->hien_thi('gio_hang/layout.tpl');
	}
	public function dat_hang(){
		include_once 'controllers/models_common.php';
		include 'models/m_gio_hang.php';
		$m_gio_hang = new M_gio_hang();
		$description = 'sản phẩm di động Thanh Thanh';
		$meta_key = 'di động Thanh Thanh';
		$dieu_huong = '<li class="active">Đặt hàng</li>';
		$m_gio_hang->xl_dat_hang();
		
		include_once 'controllers/smarty_common.php';
		
		$view = "views/gio_hang/v_dat_hang.tpl";
		$smarty->assign('title','Đặt hàng');
		$smarty->assign('description',$description);
		$smarty->assign('meta_key',$meta_key);
		$smarty->assign('m_gio_hang',$m_gio_hang);
		$smarty->assign('dieu_huong',$dieu_huong);
		$smarty->assign('view',$view);
		
		$smarty->hien_thi('dat_hang/layout.tpl');
	}
}
?>