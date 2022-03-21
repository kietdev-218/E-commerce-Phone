<?php
class C_nguoi_dung{
	public function ds_nguoi_dung(){
		include_once 'controllers/models_common.php';
		$nguoi_dungs = $m_common->select_full('nguoi_dung');
		$link = $_SERVER['PHP_SELF'];
		$trang_xl = 'ket_qua_xl_user.php';
		$so_luong_show = 8;
		$ad_name = "'".$_SESSION['ad_name']."'";
		$xd_admin = $m_common->select_single_id('nguoi_dung','ten_dang_nhap',$ad_name)->ma_loai_nguoi_dung; 
		
		include 'models/m_nguoi_dung.php';
		$m_nguoi_dung = new M_nguoi_dung();
		$loai_nguoi_dung = $m_nguoi_dung->doc_loai_nguoi_dung();
		
		include_once 'models/pager.php';
		$p = new Pager();
		$get_page = $p->get_page();
		$limit =8;
		$vt = $p->findstart($get_page,$limit);
		$count_pages = $p->count_pages($limit,count($nguoi_dungs));
		$lst = $p->pages_list($count_pages,$get_page);
		$nguoi_dungs = $m_common->select_full('nguoi_dung',$vt,$limit);
		
		include_once 'controllers/smarty_common.php';
		$title = "Danh sách người dùng";
		$view = "views/nguoi_dung/v_nguoi_dung.tpl";
		
		$smarty->assign('m_nguoi_dung',$m_nguoi_dung);
		$smarty->assign('nguoi_dungs',$nguoi_dungs);
		$smarty->assign('link',$link);
		$smarty->assign('trang_xl',$trang_xl);
		$smarty->assign('xd_admin',$xd_admin);
		$smarty->assign('loai_nguoi_dung',$loai_nguoi_dung);
		$smarty->assign("so_luong_show",$so_luong_show);
		$smarty->assign('lst',$lst);
		$smarty->assign('title',$title);
		$smarty->assign('view',$view);
		
		$smarty->hien_thi('layout.tpl');
	}
	
	public function cap_nhat_user(){
		include_once 'controllers/models_common.php';
		include_once 'models/m_nguoi_dung.php';
		$m_nguoi_dung = new M_nguoi_dung();
		$nguoi_dung = $m_nguoi_dung->doc_nguoi_dung($_SESSION['ad_name']);
		$m_nguoi_dung->cap_nhat_nguoi_dung();
		$m_nguoi_dung->doi_mat_khau();
		
		include_once 'controllers/smarty_common.php';
		$title = "Danh sách người dùng";
		$view = "views/nguoi_dung/v_cap_nhat_user.tpl";
		
		
		$smarty->assign('title',$title);
		$smarty->assign('view',$view);
		$smarty->assign('m_nguoi_dung',$m_nguoi_dung);
		$smarty->assign('nguoi_dung',$nguoi_dung);
		
		$smarty->hien_thi('layout.tpl');
	}
}
?>