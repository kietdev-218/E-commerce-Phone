<?php
class C_khach_hang
{
	public function ds_khach_hang()
	{
		include_once 'controllers/models_common.php';
		
		$ds_khach_hang = $m_common->select_full('khach_hang');
		include_once 'models/pager.php';
		$p = new Pager();
		$get_page = $p->get_page();
		$limit =8;
		$vt = $p->findstart($get_page,$limit);
		$count_pages = $p->count_pages($limit,count($ds_khach_hang));
		$lst = $p->pages_list($count_pages,$get_page);
		$ds_khach_hang = $m_common->select_full('khach_hang',$vt,$limit);
		$link = $_SERVER['PHP_SELF'];
		$trang_xl = 'ket_qua_xl_kh.php';
		$so_luong_show = 8;
		
		include_once 'controllers/smarty_common.php';
		$title = "Danh sách khách hàng";
		$view = "views/khach_hang/v_ds_khach_hang.tpl";
		
		$smarty->assign("view",$view);
		$smarty->assign("title",$title);
		$smarty->assign("lst",$lst);
		$smarty->assign("link",$link);
		$smarty->assign("trang_xl",$trang_xl);
		$smarty->assign("ds_khach_hang",$ds_khach_hang);
		$smarty->assign("so_luong_show",$so_luong_show);
		
		$smarty->hien_thi('layout.tpl');
	}
}
?>